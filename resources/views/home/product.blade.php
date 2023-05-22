<section class="product_section layout_padding">
    <div class="container">
    <div class="heading_container heading_center">
        <h2>
            Our <span>products</span>
        </h2>
    </div>
    <div class="row">

        @foreach($product as $products)

        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
                <div class="option_container">
                    <div class="options">
                        <a href="{{url('product_details', $products->id)}}" class="option1">Product Details</a>
                        <a href="{{url('add_to_cart', $products->id)}}" class="option2">Buy Now</a>
                    </div>
                </div>
                <div class="img-box">
                    <img src="/product/{{$products->image}}" alt="{{$products->title}}">
                </div>
                <div class="detail-box">
                    <h5>{{$products->title}}</h5>
                    @if ($products->discount_price != null)
                        <s class="text-danger"><h6>{{$products->price}}tk</h6></s>
                    @else
                        <h6>{{$products->price}}tk</h6>
                    @endif


                    @if ($products->discount_price!=null)
                        <h6>{{$products->discount_price}}tk</h6>
                    @endif
                </div>
            </div>
        </div>

        @endforeach

        <span class="pt-4">
            {!!$product->withQueryString()->links('pagination::bootstrap-5')!!} 
        </span>
    </div>
    <div class="btn-box">
        <a href="">
        View All products
        </a>
    </div>
    </div>
</section>