<!DOCTYPE html>

<!--
 // WEBSITE: https://techkidzafrica.co.ke

-->

<html lang="en">
<head>
@include('Home.homecss')

<!-- boxiconLink -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style type="text/css">


.form-form{
    width: 100%;
    margin: 0;
    display: grid;
    place-items: center;
    height: 800px;
    margin: 1rem 0;
}

.form-form .title{
    text-align: center;
    font-size: 2rem;
    letter-spacing: 1.5px;
    color: purple;
    -webkit-text-stroke: 0.5px #000;
}

.width-50{
    width: 50%;
}

.ml-auto{
    margin-left: auto;
}

.progressbar{
    position: relative;
    display: flex;
    justify-content: space-between;
    counter-reset: step;
    margin: 1rem 0 2rem;
}

.progressbar::before,
.progress{
    content: "";
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    height: 4px;
    width: 100%;
    background-color: #dcdcdc;
    z-index: -1;
}

.progress{
    background-color: purple;
    width: 0%;
}

.progress-step{
    width: 2.2rem;
    height: 2.2rem;
    background-color: #dcdcdc;
    border-radius: 50%;    
    display: flex;
    justify-content: center;
    align-items: center;
}

.progress-step::before{
    counter-increment: step;
    content: counter(step);
}

.progress-step::after{
    content: attr(data-title);
    position: absolute;
    top: calc(100% + 0.3rem);
    font-size: 0.85rem;
    color: #666;
}
.progress-step-active{
    background-color: purple;
    color: #fff;
}

.form-form .form{
    width: 50%;
    margin: 0 auto;
    border: 2px solid #ccc;
    border-radius: 0.35rem;
    padding: 1.5rem;
}

.form-step{
    display: none;
}

.form-step-active{
    display: block;
}

.input{
    position: relative;
    margin: 3rem 0 0;
}

.radio{
    position: relative;
    display: flex;
    flex-direction: row;
    margin-left: -150px;
}
.radio label{
    margin-left: -150px;
}

.input input{
    position: relative;
    width: 100%;
    padding: 0.75rem 0.95rem;
    border: 1px solid #ccc;
    border-radius: 0.25rem;
    outline: none;
    cursor: pointer;
    letter-spacing: 0.5px;
    font-size: 19px;
    font-weight: 300;
}

.input span{
    position: absolute;
    padding: 0.75rem 0.95rem;
    left: 0;
    pointer-events: none;
    font-size: 19px;
    font-weight: 300;
    color: #ccc;
    transition: .5s ease;
}

.input input:valid,
.input input:focus{
    border: 2px solid purple;
}

.input input:valid~span,
.input input:focus~span{
    transform: translateY(-7px);
    font-size: 12px;
    color: purple;
    padding: 0 5px;
    background-color: #fff;
}

.btn-group{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
}

input[type="submit"],
.form .btn{
    margin-top: 2rem;
    padding: 0.75rem;
    display: block;
    text-decoration: none;
    background-color: purple;
    color: #f3f3f3;
    text-align: center;
    border-radius: 0.25rem;
    cursor: pointer;
    transition: .5s;
    font-size: 14px;
    font-weight: 200;
}

input[type="submit"]:hover,
.btn:hover{
    box-shadow: 0 0 0 2px #fff, 0 0 0 3px purple;
}

@media (max-width:800px){
    .form .form{
        width: 80%;
    } 
    
    input{
        width: 100%;
        padding: 0.65rem 0.85rem;
        font-size: 16px;
        font-weight: 200;
    }

    span{
        padding: 0.65rem 0.85rem;
        font-size: 16px;
        font-weight: 200;
    }
}

@media (max-width:520px){
    .form .form{
        width: 80%;
    } 
    
    input{
        width: 100%;
        padding: 0.65rem 0.85rem;
        font-size: 16px;
        font-weight: 200;
    }

    span{
        padding: 0.65rem 0.85rem;
        font-size: 16px;
        font-weight: 200;
    }
}
@media (max-width:475px){
    .form-form{
        width: 100%;
    }

    .form-form .title{
        text-align: center;
        font-size: 1.5rem;
        letter-spacing: 0.5px;
        -webkit-text-stroke: none;
    }

    .progress-step::after{
        font-size: 0.65rem;
        color: #666;
    }

    .form-form .form{
        padding: 1rem 0.5rem;
        border: none;
        width: 90%;
    } 

    .input{
        position: relative;
        padding: 0;
        margin: 2rem 0 0;
    }
    
    .input input{
        width: 100%;
        padding: 0.65rem 0.85rem;
        font-size: 16px;
        font-weight: 200;
    }

    .input span{
        left: 0;
        margin-left: 0.85rem;
        padding: 0.65rem 0.85rem;
        font-size: 16px;
        font-weight: 200;
    }
    .input input:valid~span,
    .input input:focus~span{
        transform: translateY(-10px);
        font-size: 12px;
        color: purple;
        padding: 0 5px;
        background-color: #fff;
    }

}

    #loader{
        width: 100%;
        height: 100vh;
        position: fixed;
        background: #f1f1f0 url(/images/loader/books3.gif) no-repeat center center;
        background-size: 10%;
        z-index: 1000;
    }

</style>
</head>
<body>
    <div id="loader"></div>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <a href="https://maps.app.goo.gl/pvHvNnmXg6nGyoxz6"><p class="info-text">Ratna Square, Nyali, Mombasa KE</p></a>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://www.facebook.com/techkidzafrica">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/techkidzafrica">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://www.instagram.com/techkidzafrica/">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkedin" href="https://www.linkedin.com/company/tech-kidz-africa/">
                          <span class="social-icon"><i class="fab fa-linkedin"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
@include('Home.headersection')
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.png)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Enrollment</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Enroll Now</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 
 @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif

<div class="form-form">
<form action="{{ url('enrollment_form_sub') }}" method="POST" class="form">
    @csrf
    <h2 class="title">Enrollment</h2>
    <center><p>Complete the form below</p></center>

    <!--progress bar-->
    <div class="progressbar">
        <div class="progress" id="progress"></div>
        <div class="progress-step progress-step-active" data-title="intro"></div>
        <div class="progress-step" data-title="Student-Details"></div>
        <div class="progress-step" data-title="Parents-Details"></div>
        <div class="progress-step" data-title="Course"></div>
    </div>
    <!--steps-->

    <!-- Step 1 -->
    <div class="form-step form-step-active">
        <div class="input">
            <input type="text" name="name" required="required">
            <span>Your Name</span>
        </div>
        <div class="input">
            <input type="email" name="email" required="required">
            <span>Your Email</span>
        </div>
        <div class="input">
            <input type="tel" name="phone" required="required">
            <span>Phone Number</span>
        </div>
        <div class="#">
            <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
    </div>

    <!-- Step 2 -->
    <div class="form-step">
        <div class="input">
            <input type="date" name="dob">
            <span>Date of Birth</span>
        </div>
        <div class="input">
            <h4>Select Your Gender</h4>
            <div class="radio">
                <input type="radio" name="gender" value="Male">
                <label for="gender"> Male </label>
                <input type="radio" name="gender" value="Female">
                <label for="gender">Female</label>
            </div>
        </div>
        <div class="input">
            <input type="text" name="residential_area" required="required">
            <span>Residential Area</span>
        </div>
        <div class="btn-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
        </div>
    </div>

    <!-- Step 3 -->
    <div class="form-step">
        <div class="input">
            <input type="text" name="parent_name" required="required">
            <span>Parent Name</span>
        </div>
        <div class="input">
            <input type="text" name="parent_id" required="required">
            <span>ID Number</span>
        </div>
        <div class="input">
            <input type="tel" name="parent_phone" required="required">
            <span>Phone Number</span>
        </div>
        <div class="btn-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
        </div>
    </div>

    <!-- Step 4 -->
    <div class="form-step">
        <div class="input">
            <input type="text" name="program" required="required">
            <span>Choose Program</span>
        </div>
        <div class="input">
            <input type="text" name="program_level" required="required">
            <span>Program Level</span>
        </div>
       <!-- <div class="input">
            <input type="text" name="payment_method" required="required" value="Mpesa">
            <span>Payment Method</span>
        </div>-->
        <div class="btn-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <input type="submit" value="Submit">
        </div>
    </div>    
</form>
</div>

    <script>
      const prevBtn = document.querySelectorAll('.btn-prev');
const nextBtn = document.querySelectorAll('.btn-next');
const progress = document.getElementById('progress');
const formSteps = document.querySelectorAll('.form-step');  

const progressSteps = document.querySelectorAll('.progress-step');  


let currentStep = 0; // Use a more descriptive name

prevBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    if (currentStep > 0) {
      currentStep--;
      updateFormSteps();
      updateProgressbar();
    }
  });
});

nextBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    if (currentStep < formSteps.length - 1) {
      currentStep++;
      updateFormSteps();
      updateProgressbar();
    }
  });
});

function updateFormSteps() {
  formSteps.forEach((step, index) => {
    step.classList.toggle('form-step-active', index === currentStep);
  });
}

function updateProgressbar() {
  progressSteps.forEach((step, index) => {
    step.classList.toggle('progress-step-active', index <= currentStep);
  });

  const activeSteps = document.querySelectorAll('.progress-step-active');
  progress.style.width = ((activeSteps.length - 1) / (progressSteps.length - 1)) * 100 + '%';
}

    var loader = document.getElementById('loader');
    window.addEventListener('load', function(){
      loader.style.display = 'none'
    })
    </script>


@include('Home.footer')

      <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
        <button class="btn btn-primary" title="Back to Top">
          <i class="fa fa-angle-double-up"></i>
        </button>
      </div>

    </div><!-- Container end -->
  </div><!-- Copyright end -->
</footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->

  <script src="js/script.js">
  </script>
  </div><!-- Body inner end -->

      <script>
        const inputs = document.querySelectorAll('.input');

        function focusFunc(){
            let parent = this.parentNode;
            parent.classList.add('focus');
        }
        function blurFunc(){
            let parent = this.parentNode;
            parent.classList.remove('focus');
        }

        inputs.forEach(input => {
            input.addEventListener('focus', focusFunc);
            input.addEventListener('blur', blurFunc);
        });
      </script>
  </body>

  </html>