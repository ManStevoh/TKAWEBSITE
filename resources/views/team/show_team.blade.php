<!DOCTYPE html>
<html lang="en">

<head>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('Admin.headcss')
    
     
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
                 <!-- Begin Page Content -->
                 <div class="container-fluid">

                  <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">All Team</h1>
                    <p class="mb-4">Add a new Team? <a target="_blank"
                            href="{{ url('add_team') }}">Click Here</a>.</p>

                             @if(session()->has('message'))
                          <div class="alert alert-danger">
                            <button class="close" type="button" data-dismis="alert" aria-hidden="true">X</button>
                            {{session()->get('message')}}
                          </div>
                        @endif

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Team</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                            <th >Post Title</th>
                                            <th >designation</th>
                                            <th>Description</th>
                                            <th>Post by</th>
                                            <th>Post Status</th>
                                            <th>UserType</th>
                                            <th>Role</th>
                                            <th>Image</th>
                                            <th>Delete</th>
                                            <th>Edit</th>
                                    </tr>
                                </thead>
                                    
                    @foreach($team as $teams)
                    <tr>
                        <td>{{$teams->title}}</td>
                              <td>{{$teams->designation}}</td>
                              <td class="description-cell">{!! Str::limit($teams->description, 20, '...')!!}</td>
                              <td>{{$teams->name}}</td>
                              <td>{{$teams->post_status}}</td>
                              <td>{{$teams->usertype}}</td>
                             <td>{{$teams->role}}</td>

                             <td>
                             <img style="width: 100px; height: auto; max-height: 100px; object-fit: cover;" src="teamimage/{{$teams->image}}">
                            </td>

                            
                        </td>
                         <td>
                             <a href="{{url('delete_team',$teams->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                        </td>
                        <td data-label="Edit">
                            <a href="{{url('update_team',$teams->id)}}" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                @endforeach
                                </table>
                 <div style="display: flex; justify-content: center; align-items: center; margin-top: ;">
                      {{$team->onEachSide(1)->links()}}
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