<!DOCTYPE html>
<html lang="en">

<head>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                </div>
                <div>
                    <!--------
            ======================================================================================================================================================
            FORMS START
            ======================================================================================================================================================
                ---------------->  
                @if(session()->has('message'))

                        <div class="alert alert-success">
                          <button type="button" class="close" data-dismis="alert" aria-hidden="true">X</button>

                          {{session()->get('message')}}
                          
                        </div>

                             @endif
              <!-- form start-->
                 <div class="container">
                   

                    <form action="{{url('update_news',$post->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                          <div class="logo">
                                    
                                    <h2>Update Post</h2>
                                </div>
                                <!--<select id="select">
                                    <option value="news" id="news"><a href="news.html">News</a></option>
                                    <option value="blog" id="Blog"><a href="news.html">Blog</a></option>
                                    <option value="event" id="event"><a href="news.html">Event</a></option>
                                </select>-->
                                <div class="input">
                                    <input type="text" required="required" id="title" name="title" value="{{$post->title}}">
                                    <span><i class='bx bx-edit'></i> Enter Title</span>
                                </div>
                                <div class="input">
                                    <textarea name="description" id="description" placeholder="Description..." required="required">
                                   {{$post->description}}
                         </textarea>
                                </div>
                         <!---to show old image---->
                          <div class="div_center">
                                              <label>Old Image</label>
                                              <img style="margin: auto;" height="100px" width="150px"  src="newsimage/{{$post->image}}">
                                            </div>
                        <!---end----->


                                <div class="input">
                                    <h4>Update image</h4>
                                    <input type="file"  id="image" name="image">
                                </div>
                                <div class="input">
                                    <input type="submit" required="required" value="Submit" onclick="Function()" id="submit">
                                </div>
                    </form>
                </div>
              <!------form end-------->



     </div>









                     <!--------
            ======================================================================================================================================================
            FORMS END
            ======================================================================================================================================================
                ---------------->      
    








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

</body>

</html>