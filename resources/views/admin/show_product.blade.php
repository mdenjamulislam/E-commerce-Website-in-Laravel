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
                <div class="text-center py-5">
                    <h2>All Product</h2>
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