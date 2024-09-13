<!DOCTYPE html>
<html>
  <head>
    <base href="/public">
   @include('admin.css')

   <style type="text/css">

    .div_deg{
        text-align: center;
        margin: auto;
    }
    .title_deg{
        color: white;
        padding: 40px;
        font-size: 30px;
        font-weight: bold;
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


        <div class="div_deg">

            <h2 class="title_deg">Update Category</h2>

            <form action="{{url('update_category',$data->id)}}" method="Post">
                @csrf

                <label>Category Name</label>
                <input type="text" name="cat_name" value="{{$data->cat_title}}">

                <input value="Update" type="submit" class="btn btn-info">

            </form>

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
  </body>
</html>

