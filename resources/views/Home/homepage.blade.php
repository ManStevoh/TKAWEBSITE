<!DOCTYPE html>

<!--
 // WEBSITE: https://techkidzafrica.co.ke
 
-->

<html lang="en">

<link rel="stylesheet" type="text/css" href="News/news_body_section.css">
<head>

 @include('Home.homecss')
 <style type="text/css">
   #preloader{
    width: 100%;
    height: 100vh;
    position: fixed;
    background: #333 url(/images/loader/loader35.gif) no-repeat center center;
    background-size: 10%;
    z-index: 100;
   }
 </style>

</head>
<body>
  <div id="preloader"></div>
 
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
    @include('Home.headersection')

<!-----header section------>
@include('Home.bannersection')
<!---banner serction------>
<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">Be a tech-guru? Join the journey and walk with us. Enroll now</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a href="{{url('Enrolment_page')}}" target="_blank" class="btn btn-dark" rel="noopener">Enroll Now</a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->
<!---about us---->
@include('Home.aboutus')
<!---About us -------->

<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/projects.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="200">0</span></h2>
                <h3 class="ts-facts-title">Projects done</h3>
              </div>
          </div><!-- Col end -->

          

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/learners.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="153000">0</span></h2>
                <h3 class="ts-facts-title">Learners mentored</h3>
              </div>
          </div><!-- Col end -->
          
        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/learners.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="5000">0</span></h2>
                <h3 class="ts-facts-title">Teachers mentored</h3>
              </div>
          </div>

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/counties.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="27">0</span></h2>
                <h3 class="ts-facts-title">Counties</h3>
              </div>
          </div><!-- Col end -->

        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->
@include('Home.services')

@include('Home.projects')

@include('News.body_news_section')

@include('Home.testimonials')

@include('Home.contact')


@include('Home.footer')

  <!-- Javascript Files
  ================================================== -->
<!-- donate and accessibility widget-->
<script type="text/javascript" defer="" src="https://donorbox.org/install-popup-button.js" id="donorbox-popup-button-installer" data-href="https://donorbox.org/elimu-pi-robotics-bikathon?default_interval=o" data-style="background: rgb(18, 138, 237); color: rgb(255, 255, 255); text-decoration: none; font-family: Verdana, sans-serif; display: flex; font-size: 16px; padding: 8px 22px 8px 18px; border-radius: 0px 0px 5px 5px; gap: 8px; width: fit-content; line-height: 24px; position: fixed; top: 50%; transform-origin: center center; z-index: 9999; overflow: hidden; left: 20px; transform: translate(-50%, -50%) rotate(-90deg);" data-img-src="https://donorbox.org/images/white_logo.svg"> </script>
  <!--accesibility widget-->
  <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>


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

  <script type="text/javascript">
    var loader = document.getElementById('preloader');
    window.addEventListener('load', function(){
      loader.style.display = 'none'
    })
  </script>

  </div><!-- Body inner end -->
  </body>

  </html>