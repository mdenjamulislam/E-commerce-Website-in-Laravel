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
                    <h2 class="heading">All Products</h2>
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
                    <th>Delete</th>
                    <th>Edit</th>
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
                    <td>
                      <a onclick="return confirm('Are you sure to delete this product?')" class="btn btn-danger" href="{{url('delete_product', $product->id)}}">Delete</a>
                    </td>
                    <td>
                      <a class="btn btn-success" href="{{url('update_product', $product->id)}}">Edit</a>
                    </td>
                  </tr>
                  @endforeach
                </table>
                <div class="mt-3">
                  <a class="btn btn-success" href="{{url('/view_product')}}">Add New Product</a>
                </div>
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