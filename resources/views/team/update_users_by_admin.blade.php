<!DOCTYPE html>
<html lang="en">

<head>
     <base href="/public">
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
                  
                    <!-- Content Row -->

                </div>
                <div>
                    <!--------
            ======================================================================================================================================================
            FORMS START
            ======================================================================================================================================================
                ---------------->  
              
                 <!-- showing a delete message-->
                <div class="page-content">
                  
                  @if(session()->has('message'))
                  <div class="alert alert-success">

                    <button class="close" type="button" data-dismis="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}
                    

                  </div>

                  @endif
                   <!-- end of delete message-->



      <div class="container">
    <form action="{{ url('admin_edit_users', $team->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="logo">
            <h2>Update system user</h2>
        </div>
        <div class="input">
            <input type="text" required="required" id="name" name="name" value="{{ $team->name }}">
            <span><i class='bx bx-edit'></i> Name</span>
        </div>
        <div class="input">
            <input type="text" required="required" id="email" name="email" value="{{ $team->email }}">
            <span><i class='bx bx-edit'></i> Email</span>
        </div>
        <!-- New Dropdown Input -->
        <div class="input">
            <select name="usertype" id="usertype" required="required">
                <option value="{{ $team->usertype }}" disabled selected>Usertype</option>
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
        </div>
        <div class="input">
            <input type="submit" required="required" value="Submit" id="submit">
        </div>
    </form>
</div>



                     <!--------
            ======================================================================================================================================================
            FORMS END
            ======================================================================================================================================================
                ---------------->      
    

 </div>

</div>



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