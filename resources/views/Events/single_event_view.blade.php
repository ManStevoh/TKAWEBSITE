<!DOCTYPE html>

<!--
 // WEBSITE: https://techkidzafrica.co.ke
 
-->

<html lang="en">

<link rel="stylesheet" type="text/css" href="News/news_body_section.css">
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
    @include('Home.headersection')

    <section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      @include('Events.events-sidebar')

      <div class="col-lg-8 mb-5 mb-lg-0 order-0 order-lg-1">

      
       @if($news)
    <div class="post">
        <div class="post-media post-image">
            <img loading="lazy" src="/eventimage/{{$news->image}}" class="img-fluid" alt="post-image">
        </div>

        <div class="post-body">
            <div class="entry-header">
                <div class="post-meta">


                    <span class="post-author">
                        <i class="far fa-calendar"></i>FROM:<a href="#"> {{$news->start_time}}</a>
                    </span>
                   

                    <span class="post-meta-date"><i class="far fa-calendar"></i>TO: {{$news->end_time}}</span>
                </div>
                <h2 class="entry-title">
                    {{$news->title}}</a>
                </h2>
            </div><!-- header end -->

            <div class="entry-content">
                <p>{{$news->description}}</p>
            </div>
            <h1 style="font-size: 16px;">Venue: {{$news->venue}}</h1>

            <div class="post-footer">
                <a href="{{url('all_events_view')}}" class="btn btn-primary">More Events</a>
            </div>
        </div><!-- post-body end -->
    </div><!-- 1st post end -->
@else
    <p>Event not found.</p>
@endif


      </div><!-- Content Col end -->
      

    </div><!-- Main row end -->

  </div><!-- Container end -->
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