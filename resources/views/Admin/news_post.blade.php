<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.headcss')
    <!-- CKEditor CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
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
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                        </a>
                    </div>

                    @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{session()->get('message')}}
                    </div>
                    @endif

                    <!-- Add Blog Form Section -->
                    <div class="container-fluid">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Add Blogs</h1>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">New Blog</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{url('add_news')}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="editor" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="description" id="editor" rows="5" placeholder="Description"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="image" class="col-sm-2 col-form-label">Featured Image</label>
                                                <div class="col-sm-10">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                    </div>
                                                    <small class="form-text text-muted">Max size: 2MB | Recommended ratio: 16:9</small>
                                                    <div class="image-preview mt-2" id="imagePreview" style="display:none;">
                                                        <img src="" alt="Image Preview" class="img-thumbnail" id="previewImage" style="max-height: 200px;">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button type="submit" class="btn btn-primary mr-2">
                                                        <i class="fas fa-save mr-1"></i> Save Post
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary">
                                                        <i class="fas fa-undo mr-1"></i> Reset
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

      <!--form ends-->

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

    <!-- Core Scripts -->
    <script src="{{ asset('admin2css/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin2css/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin2css/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('admin2css/js/sb-admin-2.min.js') }}"></script>

    <!-- Page Level Scripts -->
    <script src="{{ asset('admin2css/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin2css/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin2css/js/demo/chart-pie-demo.js') }}"></script>

    <!-- CKEditor and Custom Scripts -->
    <script>
        // Initialize CKEditor    
        ClassicEditor
    .create(document.querySelector('#editor'), {
        toolbar: {
            items: [
                'heading', '|',
                'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                'blockQuote', 'insertTable', 'undo', 'redo', '|',
                'imageUpload' // Removed 'codeBlock'
            ]
        }
    })
    .catch(error => {
        console.error(error);
    });

        // Image preview functionality
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('previewImage');
            const previewContainer = document.getElementById('imagePreview');
            
            if (file) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    previewContainer.style.display = 'block';
                }
                
                reader.readAsDataURL(file);
                document.querySelector('.custom-file-label').textContent = file.name;
            } else {
                preview.src = '';
                previewContainer.style.display = 'none';
                document.querySelector('.custom-file-label').textContent = 'Choose file';
            }
        });

        // Dismiss alert after 5 seconds
        setTimeout(function() {
            $('.alert').alert('close');
        }, 5000);
    </script>

</body>
</html>