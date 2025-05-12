<!DOCTYPE html>



<html lang="en">
<head>
  <base href="/public">
@include('Home.homecss')

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
                <h1 class="banner-title">Programs</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Programs</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 



<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

       @include('Events.events-sidebar')

      <div class="col-xl-8 col-lg-8">
        <div class="content-inner-page">

          <h2 class="column-title mrt-0">{{$programs->title}}</h2>

          <div class="row">
            <div class="col-md-12">
              <p>{!!$programs->description!!}</p>
            </div><!-- col end -->
          </div><!-- 1st row end-->

          <div class="gap-40"></div>

          <div id="page-slider" class="page-slider">
            <div class="item">
              <img loading="lazy" class="img-fluid" src="{{ asset($programs->image) }}" alt="project-slider-image" />
            </div>

            
          </div><!-- Page slider end -->
             
                     
              <!--/ Accordion end -->
            </div>
          </div>
          <!--2nd row end -->
</div>
          <div class="gap-40"></div>

          <div class="call-to-action classic">
            <div class="row align-items-center">
              <div class="col-md-8 text-center text-md-left">
                <div class="call-to-action-text">
                  <h3 class="action-title">Interested with this program?</h3>
                </div>
              </div><!-- Col end -->
              <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                <div class="call-to-action-btn">
                  <a class="btn btn-primary" href="{{url('Enrolment_page')}}">Enroll Now</a>
                </div>
              </div><!-- col end -->
            </div><!-- row end -->
          </div><!-- Action end -->

        </div><!-- Content inner end -->
      </div><!-- Content Col end -->


    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->


@include('Home.footer')


  


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
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>