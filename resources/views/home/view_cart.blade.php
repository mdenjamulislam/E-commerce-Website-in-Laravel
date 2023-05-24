<!DOCTYPE html>
<html>
   <head>
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

        <!-- Cart product Table -->
        <div class="py-md-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="display-4 pb-4">Cart Product</h1>
                        <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total_amount = 0; ?>
                                @foreach($cart as $carts)
                                <tr>
                                    <td>
                                        <img class="rounded" src="/product/{{$carts->image}}" alt="" width="100">
                                    </td>
                                    <td>{{$carts->product_title}}</td>
                                    <td>{{$carts->price}} TK</td>
                                    <td>{{$carts->quantity}}</td>
                                    <td>{{$carts->total_price}} TK</td>
                                    <td>
                                        <a onclick="return confirm('Are you sure to delete this product?')" href="{{url('delete_cart/'.$carts->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php $total_amount = $total_amount + $carts->total_price; ?>
                                @endforeach
                                <tr>
                                    <td colspan="4" class="text-right">Total Amount</td>
                                    <td colspan="2">{{$total_amount}} TK</td>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="row mt-5">
                    <div class="col-md-12">
                        <h1 class="display-5 pb-4">Payment Method</h1>
                        <div class="payment_option">
                            <a href="" class="btn btn-primary">Cash On Delivery</a>
                            <a href="" class="btn btn-primary">Pay Using Card</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="float-right">
                            <a href="{{url('checkout')}}" class="btn btn-primary">Checkout</a>
                        </div>
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