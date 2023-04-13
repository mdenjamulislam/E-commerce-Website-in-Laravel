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
          width: 50%;
          margin: 0 auto;
          border: 1px solid #ddd;
          text-align: center;
          margin-top: 30px;
        }
        .table-center tr td {
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

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        {{Session::get('message')}}
                    </div>
                @endif

                <div class="text-center pt-5">
                    <h2 class="heading">Add Catagory</h2>
                    <form action="{{url('add_catagory')}}" method="POST">
                        @csrf
                        <input class="text-dark" type="text" name="catagory" placeholder="Write catagory name">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Catagory">
                    </form>
                </div>
                <!-- Catagory Table -->
                <table class="table-center">
                  <tr>
                    <td>Catagory Name</td>
                    <td>Action</td>
                  </tr>
                  @foreach($data as $catagory)
                  <tr>
                    <td>{{$catagory->catagory_name}}</td>
                    <td>
                      <a onclick="return confirm('Are you sure to delete this catagoty?')" class="btn btn-danger" href="{{url('delete_catagory', $catagory->id)}}">Delete</a>
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