<!DOCTYPE html>

<!--
 // WEBSITE: https://techkidzafrica.co.ke
 
-->

<html lang="en">
<head>
@include('Home.homecss')

<style type="text/css">


.image-container {
    width: 300px; /* Set desired width */
    height: 400px; /* Set desired height */
    overflow: hidden; /* Hide any overflow */
    position: relative; /* Ensure proper alignment */
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensure the image fills the container without distortion */
    object-position: center; /* Optional: Center the image within the container */
}
.image-container-staff {
    width: 250px; /* Set desired width */
    height: 300px; /* Set desired height */
    overflow: hidden; /* Hide any overflow */
    position: relative; /* Ensure proper alignment */
}

.image-container-staff img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensure the image fills the container without distortion */
    object-position: center; /* Optional: Center the image within the container */
}
    

</style>
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
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.png)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Our Team</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 





<section id="main-container" class="main-container pb-4">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h3 class="section-sub-title">Advisory Board</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <!----start of advisory team--->

<div class="row justify-content-center">
  @foreach($team1->where('role', 'advisory') as $member)
      <div class="col-lg-3 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper">
             <img loading="lazy" src="/teamimage/{{$member->image}}" class="img-fluid" alt="team-img">
          </div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name">{{$member->title}}</h3>
            <p class="ts-designation">{{$member->designation}}</p>
           <!--- <p class="ts-description">{{$member->description}}</p>-->
           <!-- <div class="team-social-icons">
              <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
              <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
            </div>--->
            <!--/ social-icons-->
          </div>
        </div>
        <!--/ Team wrapper 1 end -->

      </div><!-- Col end -->
@endforeach
      

    </div><!-- Content row 1 end -->

    <!----end of advisory Team---->
    <div class="row text-center">
      <div class="col-lg-12">
        <h3 class="section-sub-title">Executive Team</h3>
      </div>
    </div>
    <div class="row">
@foreach($team1->where('role', 'executive') as $member)
       
      <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper" >
            
            <div class="image-container">
              <img src="/teamimage/{{$member->image}}" class="img-fluid" alt="team-img" loading="lazy">
          </div>
          </div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name">{{$member->title}}</h3>
            <p class="ts-designation">{{$member->designation}}</p>
            <p class="ts-description">{{$member->description}}</p>
           <!---- <div class="team-social-icons">
              <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
              <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
              <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
            </div>--->
            <!--/ social-icons-->
          </div>
        </div>

        <!--/ Team wrapper 3 end -->
      </div><!-- Col end -->
@endforeach
     
    </div><!-- Content row end -->

    <!-----Our Staff--->
    <div class="row text-center">
      <div class="col-lg-12">
        <h3 class="section-sub-title">Our Staff</h3>
      </div>
    </div>

     <div class="row">
 @foreach($team1->where('role', 'staff') as $member)
       
      <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper">
             <div class="image-container-staff">
            <img loading="lazy" src="/teamimage/{{$member->image}}" class="img-fluid" alt="team-img">
            </div>
          </div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name">{{$member->title}}</h3>
            <p class="ts-designation">{{$member->designation}}</p>
           <!--- <p class="ts-description">{{$member->description}}</p>--->
           <!--- <div class="team-social-icons">
              <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
              <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
              <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
            </div>--->
            <!--/ social-icons-->
          </div>
        </div>

        <!--/ Team wrapper 3 end -->
      </div><!-- Col end -->
@endforeach
     
    </div><!-- Content row end -->

   {{$team1->onEachSide(1)->links()}}



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