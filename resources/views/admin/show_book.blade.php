<!DOCTYPE html>
<html>
  <head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   @include('admin.css')

   <style type="text/css">

   .table_center{
    text-align: center;
    margin: auto;
    border: 1px solid yellowgreen;
    margin-top: 50px;
   }
   th{
    background-color: skyblue;
    padding: 10px;
    font-size: 20px;
    font-weight: bold;
    color: black;
   }
   .img{
    width: 80px;
    border-radius:50%;
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

        <div>

            <table class="table_center">

                <tr>
                    <th>Book title</th>
                    <th>Auther Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Auther Image</th>
                    <th>Book Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>

                @foreach ($book as $book)
                <tr>

                    <td>{{$book->title}}</td>
                    <td>{{$book->auther_name}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->quantity}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{$book->category->cat_title}}</td>
                    <td>
                        <img class="img" src="auther/{{$book->auther_img}}">
                    </td>
                    <td>
                        <img class="img" src="book/{{$book->book_img}}">
                    </td>
                    <td>
                        <a onclick="confirmation(event)" href="{{url('book_delete',$book->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{url('edit_book',$book->id)}}">Update</a>
                    </td>
                </tr>
                @endforeach

            </table>

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
