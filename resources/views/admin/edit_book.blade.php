<!DOCTYPE html>
<html>
  <head>
    <base href="/public">
   @include('admin.css')

   <style type="text/css">

    .div_center{
        text-align: center;
        margin: auto;
    }
    .title{
        color: white;
        padding: 30px;
        font-size: 30px;
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

        @if(session()->has('message'))
        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

          {{session()->get('message')}}

        </div>
        @endif

        <div class="div_center">

            <h1 class="title">Update Book</h1>

            <form action="{{url('update_book',$data->id)}}" method="Post" enctype="multipart/form-data">
                @csrf

                <div class="div_pad">
                    <label>Book Title</label>
                    <input type="text" name="title" value="{{$data->title}}">
                </div>

                <div class="div_pad">
                    <label>Auther Name</label>
                    <input type="text" name="auther_name" value="{{$data->auther_name}}">
                </div>

                <div class="div_pad">
                    <label>Price</label>
                    <input type="text" name="price" value="{{$data->price}}">
                </div>

                <div class="div_pad">
                    <label>Quantity</label>
                    <input type="text" name="quantity" value="{{$data->quantity}}">
                </div>

                <div class="div_pad">
                    <label>Description</label>
                    <textarea name="description" >{{$data->description}}</textarea>
                </div>

                <div class="div_pad">
                    <label>Category</label>
                    <select name="category">
                        <option value="{{$data->category_id}}">{{$data->category->cat_title}}</option>
                        @foreach ($category as $category)
                        <option value="{{$category->id}}">{{$category->cat_title}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="div_pad">
                    <label>Current Auther Image</label>
                    <img style="width: 80px; border-radius:50%;margin:auto" src="/auther/{{$data->auther_img}}">
                </div>

                <div class="div_pad">
                    <label>Change Auther Image</label>
                    <input type="file" name="auther_img">
                </div>

                <div class="div_pad">
                    <label>Current Book Image</label>
                    <img style="width: 80px; border-radius:50%;margin:auto" src="/book/{{$data->book_img}}">
                </div>

                <div class="div_pad">
                    <label>Change Book Image</label>
                    <input type="file" name="book_img">
                </div>

                <div class="div_pad">
                    <input class="btn btn-info" type="submit" value="Update Book">
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
