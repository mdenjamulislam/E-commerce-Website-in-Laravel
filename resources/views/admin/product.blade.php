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
        input.form-control:focus, textarea.form-control:focus, select.form-control:focus{
            outline: none;
            background-color: #f2f2f2;
        }
        input, textarea, select{
            border: 1px solid #ddd;
            border-radius: 0;
            background-color: #f2f2f2 !important;
        }
        input[type="file"] {
            background: transparent !important;
            color: #f2f2f2 !important;
        }
        input[type="file"]:focus {
            background: transparent !important;
            color: #f2f2f2 !important;
        }
        input[type="submit"] {
            background: #6495ED !important;
            color: #fff !important;
            border: 1px solid #6495ED;
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
            @if(Session::has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{Session::get('message')}}
                </div>
            @endif
        
            <!-- Product Table -->
            <div class="text-left py-5">
                <h2 class="heading">Add Product</h2>

                <form class="form-group" action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Product name</label>
                        <input class="form-control text-dark" type="text" name="title" placeholder="Write product name or titile" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Product price</label>
                        <input class="form-control text-dark" type="number" name="price" placeholder="Write product price" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Product quantity</label>
                        <input class="form-control text-dark" type="number" min="0" name="quantity" placeholder="Write product quantity" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Product discount</label>
                        <input class="form-control text-dark" type="number" name="disc_price" placeholder="Write product discount">
                    </div>

                    <div class="form-group">
                        <label for="">Product description</label>
                        <textarea class="form-control text-dark" name="description" id="" cols="30" rows="10" placeholder="Write product description" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Product catagory</label>
                        <select class="form-control text-dark" name="catagory" id="" required>
                            </option>Select catagory</option>
                            @foreach($show_catagory as $catagory)
                            <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                            @endforeach
                        </select> 
                    </div>

                    <div class="form-group">
                        <label for="">Product image</label>
                        <input class="text-dark" type="file" name="image" placeholder="Write product image" required>
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit" value="Add Product">
                </form>

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