<!DOCTYPE html>

<html lang="en">
<head>
@include('Home.homecss')

<!-- boxiconLink -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>
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
                <h1 class="banner-title">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
    <!--/ Title row end -->

    <!--
    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Visit Our Office</h4>
            <p>Ratna Square Nyali</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Email Us</h4>
            <p>info@techkidzafrica.co.ke</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Call Us</h4>
            <p>0780754126</p>
          </div>
        </div>
      </div>

    </div> 1st row end -->
    @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
    <!--new-contact-us page-->

    <div class="containers">
      <h2 class="classy one">CONTACT US</h2>
    <span class="big-circle">
    </span>
    <div class="form">
        <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
                Tech Kidz Africa cultivates and nurtures 
                the spirit of the Silicon Valley to children 
                and teenagers in Africa. Tech kidz Africa does 
                this through nurturing curiosity in Children 
                of ages 4 to 18 years.
            </p>

            <div class="info">
                <div class="information">
                    <div class="icons"><i class='bx bx-envelope' ></i></div>
                    <span>info@techkidzafrica.co.ke</span>
                </div>
                <div class="information">
                    <div class="icons"><i class='bx bx-phone'></i></div>
                    <span>(+254) 780 754126</span>
                </div>
                <div class="information">
                    <div class="icons"><i class='bx bx-location-plus'></i></div>
                    <span>Ratna Square, Mombasa <br>
                        XM3M+7X8, Mombasa
                    </span>
                </div>
                <div class="social-media">
                    <h4 class="word">Connect with us:</h4>
                    <div class="social-icon">
                        <a href="https://www.facebook.com/techkidzafrica"><i class='bx bxl-facebook' ></i></a>
                        <a href="https://www.instagram.com/techkidzafrica/"><i class='bx bxl-instagram' ></i></a>
                        <a href="https://twitter.com/techkidzafrica"><i class='bx bxl-twitter' ></i></a>
                        <a href="https://www.linkedin.com/company/tech-kidz-africa/"><i class='bx bxl-linkedin' ></i></a>  
                    </div>
                </div>
            </div>
        </div>
       

        <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            
            <form action="{{url('submit_contact_form')}}" method="POST" class="inline" autocomplete="off" role="form" enctype="multipart/form-data">
                {{csrf_field() }}
                <h3 class="title">Contact Us</h3>
                <div class="input-container focus">
                    <input type="text" name="name" class="input" required="required">
                    <label for="">Username</label>
                    <span>Username</span>
                </div>
                <div class="input-container">
                    <input type="email" name="email" class="input" required="required">
                    <label for="">Email</label>
                    <span>Email</span>
                </div>
                <div class="input-container">
                    <input type="tel" name="subject" class="input" pattern="/(0|+?254)7(\d){8}">
                    <label for="">Phone</label>
                    <span>Phone</span>
                </div>
                <div class="input-container textarea">
                    <textarea name="message" class="input"></textarea>
                    <label for="">Message</label>
                    <span>Message</span>
                </div>
                <input type="submit" value="Submit" class="btn">
            </form>
        </div>
    </div>

    <h2 class="classy two">REACH US</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d63678.81419176451!2d39.66329219740267!3d-4.035547010124628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-4.0164968!2d39.724028!4m5!1s0x184013c4f7812fa1%3A0x2bebebbfbd418fd9!2stech%20kidz%20africa!3m2!1d-4.0467638!2d39.684993299999995!5e0!3m2!1sen!2ske!4v1703848499710!5m2!1sen!2ske" width="1100" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
    <!--endNewContactUsForm-->
<br>

    </div><!-- Content row -->
</section><!-- Main container end -->


@include('Home.footer')

      <!-- <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
        <button class="btn btn-primary" title="Back to Top">
          <i class="fa fa-angle-double-up"></i>
        </button>
      </div> -->

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