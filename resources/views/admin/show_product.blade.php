<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        h2.heading {
            font-size: 30px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 30px;
        }

        .table-center {
          width: 90%;
          margin: 0 auto;
          border: 1px solid #ddd;
          text-align: center;
          margin-top: 30px;
        }
        .table-center tr td, .table-center tr th {
          padding: 10px;
          border: 1px solid #ddd;
        }
        table tr img {
          width: 64px;
          height: 64px;
          border-radius: 2px;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="text-center py-4">
                    <h2 class="heading">All Product</h2>
                </div>
                <!-- Catagory Table -->
                <table class="table-center">
                  <tr>
                    <th>Product Title</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Catagory</th>
                    <th>Price</th>
                    <th>Discount Price</th>
                    <th>Product Image</th>
                  </tr>
                  @foreach($product as $product)
                  <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->catagory}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount_price}}</td>
                    <td>
                      <img src="product/{{$product->image}}" alt="{{$product->image}}">
                    </td>
                  </tr>
                  @endforeach
                </table>
            </div>
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>