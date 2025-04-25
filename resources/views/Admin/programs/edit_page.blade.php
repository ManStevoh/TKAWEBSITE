<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.headcss')
    <style>
    .container2 {
        width: 80%;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .logo h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    .input {
        margin-bottom: 15px;
    }
    .input input[type="text"], .input input[type="number"], .input input[type="file"], .input select, .input textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
    }
    .input span {
        display: block;
        margin-top: 5px;
        color: #555;
    }
    .input h4 {
        margin-bottom: 5px;
    }
    .level-details h3 {
        margin-top: 20px;
        margin-bottom: 5px;
    }
    .level-details p {
        margin: 5px 0;
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
<div class="container2">
    <form action="{{url('program_edit',$program->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="logo">
            <h2>Add New Program</h2>
        </div>
        
        <!-- Input for title -->
        <div class="input">
            <input type="text" required="required" id="title" name="title" value="{{$program->title}}">
            <span><i class='bx bx-edit'></i> Enter Title</span>
        </div>
        
        <!-- Textarea for description -->
        <div class="input">
            <textarea name="description" id="description" placeholder="Description..." required="required">{{$program->description}}</textarea>
        </div>
        
        
        
        <!-- Level Details -->
        <div class="level-details">
            <h3>Beginner Level</h3>
            <div class="input">
                <label for="beginner_price">Price:</label>
                <input type="number" id="beginner_price" name="beginner_price" value="{{$program->beginner_price}}" required>
            </div>
            <div class="input">
                <label for="beginner_sessions">Number of Sessions:</label>
                <input type="number" id="beginner_sessions" name="beginner_sessions" value="{{$program->beginner_sessions}}" required>
            </div>

            <h3>Intermediate Level</h3>
            <div class="input">
                <label for="intermediate_price">Price:</label>
                <input type="number" id="intermediate_price" name="intermediate_price" value="{{$program->intermediate_price}}" required>
            </div>
            <div class="input">
                <label for="intermediate_sessions">Number of Sessions:</label>
                <input type="number" id="intermediate_sessions" name="intermediate_sessions" value="{{$program->intermediate_sessions}}" required>
            </div>

            <h3>Advanced Level</h3>
            <div class="input">
                <label for="advanced_price">Price:</label>
                <input type="number" id="advanced_price" name="advanced_price" value="{{$program->advanced_price}}" required>
            </div>
            <div class="input">
                <label for="advanced_sessions">Number of Sessions:</label>
                <input type="number" id="advanced_sessions" name="advanced_sessions" value="{{$program->advanced_sessions}}" required>
            </div>

            <h3>Expert Level</h3>
            <div class="input">
                <label for="expert_price">Price:</label>
                <input type="number" id="expert_price" name="expert_price" value="{{$program->expert_price}}" required>
            </div>
            <div class="input">
                <label for="expert_sessions">Number of Sessions:</label>
                <input type="number" id="expert_sessions" name="expert_sessions" value="{{$program->expert_sessions}}" required>
            </div>
        </div>
        
         <!---to show old image---->
         <div class="div_center">
               <label>Old Image</label>
              <img style="margin: auto;" height="100px" width="150px" src="{{ asset($program->image) }}">
        </div>
       <!---end----->
        <!-- Input for image -->
        <div class="input">
            <h4>Add New Image</h4>
            <input type="file"  id="image" name="image">
        </div>
        
        <!-- Submit button -->
        <div class="input">
            <input type="submit" required="required" value="Submit" id="submit">
        </div>
    </form>
</div>
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