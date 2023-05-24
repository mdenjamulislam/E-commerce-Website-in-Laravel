<!DOCTYPE html>
<html>
   <head>
        <base href="{{asset('public')}}">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
        <div class="hero_area">
            <!-- header section strats -->
            @include('home.header')
            <!-- end header section -->
      
        <!-- product section -->

        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 pb-4">
                    <div class="product_heading">
                        <h1 class="display-2 text-center">{{$product->title}}</h1>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="img-box p-3 border">
                        <img src="/product/{{$product->image}}" alt="{{$product->title}}">
                    </div>
                </div>
                <div class="col-lg-4 mr-auto">
                    <h2 class="pb-3 display-4">Product Details</h2>
                    <div class="detail-box">
                        @if ($product->discount_price != null)
                            <h6><b>Regular Price:</b><s class="text-danger"> {{$product->price}}tk</s></h6>
                        @else
                            <h6><b>Regular Price:</b> {{$product->price}}tk</h6>
                        @endif


                        @if ($product->discount_price!=null)
                            <h6><b>Discount Price:</b> {{$product->discount_price}}tk</h6>
                        @endif

                        <h4><b>Available Product:</b> {{$product->quantity}}</h4>
                        <h4><b>Category:</b> {{$product->catagory}}</h4>
                    </div>
                    <h2 class="pb-2 pt-3 display-5">Product Description</h2>
                    <p>{{$product->description}}</p>
                    
                    <div class="btn-box mt-5 pt-3 border-top">
                        <form action="{{url('add_to_cart', $product->id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 offset-md-2">
                                    <input type="number" name="quantity" value="1" min="1">
                                </div>
                                <div class="col-md-4">
                                    <input class="" type="submit" value="Add To Cart">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-12">
                    
                </div>
            </div>
        </div>
      
      
      

      
      
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="#">Famms</a></p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>