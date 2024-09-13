<!DOCTYPE html>
<html>
  <head>
   @include('admin.css')

   <style type="text/css">

   .div_center{
    text-align: center;
    margin: auto;
   }
   .title_deg{
    color: white;
    padding: 35px;
    font-size: 40px;
    font-weight: bold;
   }
   label{
    display: inline-block;
    width: 200px;
   }
   .div_pad{
    padding: 15px;
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

            <h2 class="title_deg">Add Books</h2>

            <form action="{{url('store_book')}}" method="Post" enctype="multipart/form-data">
                @csrf

                <div class="div_pad">
                <label>Book Title</label>
                <input type="text" name="book_name" >
                </div>

                <div class="div_pad">
                    <label>Auther name</label>
                    <input type="text" name="auther_name" >
                </div>

                <div class="div_pad">
                    <label>Price</label>
                    <input type="text" name="price" >
                </div>


                <div class="div_pad">
                    <label>Quantity</label>
                    <input type="number" name="quantity" >
                </div>

                <div class="div_pad">
                    <label>Description</label>
                    <textarea type="text" name="description" ></textarea>
                </div>

                <div class="div_pad">
                    <label>Category</label>
                    <select name="category" required>
                        <option>Select a Category</option>
                        @foreach ($data as $data)
                        <option value="{{$data->id}}">{{$data->cat_title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="div_pad">
                    <label>Book Image</label>
                    <input type="file" name="book_img" >
                </div>

                <div class="div_pad">
                    <label>Auther Image</label>
                    <input type="file" name="auther_img" >
                </div>

                <div class="div_pad">
                <input value="Add Book" type="submit" class="btn btn-info">
                </div>

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
