<!DOCTYPE html>
<html>
  <head>
   @include('admin.css')

   <style type="text/css">

   .center{
    text-align: center;
    margin: auto;
    width: 80%;
    border: 1px solid white;
    margin-top: 60px;
   }
   th{
    background-color: skyblue;
    text-align: center;
    color: white;
    font-size: 15px;
    font-weight: bold;
    padding: 10px;
   }

</style>

  </head>
  <body>
   @include('admin.header')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">


        <table class="center">

            <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Book Title</th>
                <th>Quantity</th>
                <th>Borrow Status</th>
                <th>Book Image</th>
                <th>Change Status</th>
            </tr>

            @foreach ($data as $data)
            <tr>
                <td>{{$data->user->name}}</td>
                <td>{{$data->user->email}}</td>
                <td>{{$data->user->phone}}</td>
                <td>{{$data->book->title}}</td>
                <td>{{$data->book->quantity}}</td>
                <td>
                    @if($data->status=='approved')
                    <span style="color: skyblue">{{$data->status}}</span>

                    @endif

                    @if($data->status=='rejected')
                    <span style="color: red">{{$data->status}}</span>

                    @endif

                    @if($data->status=='returned')
                    <span style="color: yellow">{{$data->status}}</span>

                    @endif

                    @if($data->status=='Applied')
                    <span style="color: white">{{$data->status}}</span>

                    @endif
                </td>
                <td>
                    <img style="height: 150px;width:90px" src="book/{{$data->book->book_img}}">
                </td>
                <td>
                    <a href="{{url('approved_book',$data->id)}}" class="btn btn-warning">Approved</a>
                    <a href="{{url('rejected_book',$data->id)}}" class="btn btn-danger">Rejected</a>
                    <a href="{{url('return_book',$data->id)}}" class="btn btn-info">Returned</a>
                </td>
            </tr>
            @endforeach


        </table>



        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
               <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin/js/charts-home.js"></script>
    <script src="admin/js/front.js"></script>
  </body>
</html>
