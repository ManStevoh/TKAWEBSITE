<!DOCTYPE html>
<html lang="en">

<head>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('Admin.headcss')
    
    <style type="text/css">
.container2 {
    padding: 60px;
}

.title_deg {
    text-align: center;
    margin-bottom: 20px;
}

/* Table Styles */
.table-wrapper {
    overflow-x: auto; /* Enables horizontal scrolling for small screens */
    -webkit-overflow-scrolling: touch; /* Smooth scrolling on touch devices */
}

.responsive-table {
    width: 100%;
    border-collapse: collapse;
    table-layout: auto;
}

.responsive-table th, .responsive-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    word-wrap: break-word; /* Ensures long text wraps */
}

.responsive-table th {
    background-color: #f4f4f4;
}

.responsive-table img {
    max-width: 100px;
    height: auto;
}

.responsive-table .description-cell {
    max-width: 200px; /* Set a maximum width for the description cell */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis; /* Truncates text with ellipsis */
}

/* Pagination Styles */
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

/* Responsive Styles */
@media screen and (max-width: 768px) {
    .responsive-table {
        border: 0;
    }

    .responsive-table thead {
        display: none;
    }

    .responsive-table tr {
        display: block;
        margin-bottom: 10px;
        border-bottom: 2px solid #ddd;
    }

    .responsive-table td {
        display: block;
        text-align: right;
        font-size: 14px;
        position: relative;
        padding-left: 50%;
        padding-right: 20px;
        border-bottom: 1px solid #ddd;
    }

    .responsive-table td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 45%;
        padding-left: 10px;
        font-weight: bold;
        text-align: left;
        white-space: nowrap; /* Prevents wrapping of labels */
        overflow: hidden;
        text-overflow: ellipsis; /* Adds ellipsis to labels if too long */
    }

    .responsive-table td img {
        max-width: 80px;
        height: auto;
    }
}

/* Additional adjustments for very small screens */
@media screen and (max-width: 480px) {
    .responsive-table td {
        font-size: 12px;
        padding-left: 40%;
    }

    .responsive-table td::before {
        width: 50%;
        padding-left: 5px;
    }

    .responsive-table td img {
        max-width: 60px;
    }
}
</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       @include('Admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('Admin.topbar')
             <div class="container-fluid">

                  <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">All Projects</h1>
                    <p class="mb-4">Add a new Project? <a target="_blank"
                            href="{{ url('post_page') }}">Click Here</a>.</p>

                             @if(session()->has('message'))
                          <div class="alert alert-danger">
                            <button class="close" type="button" data-dismis="alert" aria-hidden="true">X</button>
                            {{session()->get('message')}}
                          </div>
                        @endif

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                            <th >Post Title</th>
                                            <th>Description</th>
                                            <th>Post by</th>
                                            <th>Post Status</th>
                                            <th>UserType</th>
                                            <th>Image</th>
                                            <th>Delete</th>
                                            <th>Edit</th>
                                    </tr>
                                </thead>
                                    
                   @foreach($post as $posts)
                    <tr>
                            <td>{{$posts->title}}</td>
                              
                              <td class="description-cell">{!! Str::limit($posts->description, 20, '...') !!}</td>
                             <td>{{$posts->name}}</td>
                              <td>{{$posts->post_status}}</td>
                              <td>{{$posts->usertype}}</td>

                             <td>
                             <img style="width: 100px; height: auto; max-height: 100px; object-fit: cover;" src="postimage/{{$posts->image}}">
                            </td>

                            
                        </td>
                         <td>
                             <a href="{{url('delete_post',$posts->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                        </td>
                        <td data-label="Edit">
                            <a href="{{url('edit_page',$posts->id)}}" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                @endforeach
                                </table>
                 <div style="display: flex; justify-content: center; align-items: center; margin-top: ;">
                      {{$post->onEachSide(1)->links()}}
                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->








            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('Admin.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('Admin.logoutmodal')
    <!-- Logout Modal-->
  

    <!-- Bootstrap core JavaScript-->
    <script src="admin2css/vendor/jquery/jquery.min.js"></script>
    <script src="admin2css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin2css/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin2css/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin2css/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin2css/js/demo/chart-area-demo.js"></script>
    <script src="admin2css/js/demo/chart-pie-demo.js"></script>



      <!-- sweet alert message------>

      <script type="text/javascript">
        function confirmation(ev)
        {
          ev.preventDefault();

          var urlToRedirect=ev.currentTarget.getAttribute('href');
              console.log(urlToRedirect);

          swal({
            title:"Are you sure to delete this?",
            text :"You wont be able to revert this delete",
            icon :"warning",
            buttons :true,
            dangerMode : true,


          })

          .then((willCancel)=>
          {
            if(willCancel)
            {
              window.location.href=urlToRedirect;
            }


          });
        }
      </script>
       <!-- sweet alert message end------>

</body>

</html>