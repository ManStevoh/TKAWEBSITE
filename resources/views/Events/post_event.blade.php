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
    <form action="{{url('add_event')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="logo">
            <h2>Add event</h2>
        </div>
        <!--<select id="select">
            <option value="news" id="news"><a href="news.html">News</a></option>
            <option value="blog" id="Blog"><a href="news.html">Blog</a></option>
            <option value="event" id="event"><a href="news.html">Event</a></option>
        </select>-->
        <div class="input">
    <input type="text" required="required" id="title" name="title" maxlength="100">
    <span><i class='bx bx-edit'></i> Enter Title(max 100 chr)</span>
</div>

        <div class="input">
            <textarea name="description" id="description" placeholder="Description..." required="required"></textarea>
        </div>
        
        <!-- New Venue Field -->
        <div class="input-input">
            <span><i class='bx bx-edit'></i> Enter Venue</span>
            <input type="text" required="required" id="title" name="venue">
        </div>
        <!-- New Date Field -->
       <div class="input-input">
              <span>Select start Date and Time</span>
              <input type="datetime-local" required="required" id="event_date" name="start_time">
      </div>

       <div class="input-input">
              <span>Select End Date and Time</span>
              <input type="datetime-local" required="required" id="event_date" name="end_time">
      </div>

        



        <div class="input">
            <h4>Add image</h4>
            <input type="file" required="required" id="image" name="image">
        </div>
        <div class="input">
            <input type="submit" required="required" value="Submit" onclick="Function()" id="submit">
        </div>
    </form>
</div>
<!-- form end-->


                     <!--------
            ======================================================================================================================================================
            FORMS END
            ======================================================================================================================================================
                ---------------->      
    

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