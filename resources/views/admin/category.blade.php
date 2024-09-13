<!DOCTYPE html>
<html>
  <head>
   @include('admin.css')

   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <style type="text/css">
    .div_center{
        text-align: center;
        margin: auto;
    }
    .cat_label{
        font-size: 30px;
        font-weight: bold;
        padding: 30px;
        color: white;
    }
    .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 15px;
        border: 1px solid white;
    }
    th{
        background-color: skyblue;
        padding: 10px;
    }
    tr{
        border: 1px solid white;
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


      <div class="div_center">

        <div>
        @if(session()->has('message'))

        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

          {{session()->get('message')}}

        </div>

        @endif
    </div>

        <h1 class="cat_label">Add Category</h1>

        <form action="{{url('add_category')}}" method="Post">
            @csrf

            <span style="padding-right:15px ">
            <label>Category Name</label>
            <input type="text" name="category" required>
            </span>

            <input class="btn btn-primary" type="submit" value="Add Category">

        </form>

        <div>

            <table class="center">

                <tr>
                    <th>Category Name</th>
                    <th>Action</th>

                </tr>

                @foreach ($data as $data)
                <tr>
                    <td>{{$data->cat_title}}</td>
                    <td>
                        <a href="{{url('edit_category',$data->id)}}" class="btn btn-info">Update</a>
                        <a href="{{url('cat_delete',$data->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                    </td>
                </tr>
                @endforeach

            </table>

        </div>

      </div>


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

    <script type="text/javascript">
        function confirmation(ev){

            ev.preventDefault();
            var urlToRedirect=ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal({
                title:"Are You Sure to delete this",
                text:"You won't be able to revert this delete",
                icon:"warning",
                buttons:true,
                dangerMode:true,
            })

            .then((willCancel)=>
            {
                if(willCancel){
                    window.location.href=urlToRedirect;
                }

            });
        }
    </script>

  </body>
</html>

