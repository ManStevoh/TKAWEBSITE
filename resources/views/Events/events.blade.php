<!DOCTYPE html>

<!--
 // WEBSITE: https://techkidzafrica.co.ke
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>
@include('Home.homecss')
<style type="text/css">
  body {
    font-family: 'Cabin', sans-serif;
  }
  .container--container {
    max-width: auto;
    margin: 10px 5px;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }
  .upcomming {
    width: 100%;
    font-size: 2rem;
    text-transform: uppercase;
    border-left: 10px solid rgba(44, 175, 250, 0.8);
    padding-left: 12px;
    margin: 18px 8px;
  }
  .item {
    background: #fff;
    overflow: hidden;
    margin: 10px;
    padding: 20px;
    flex: 1 1 calc(50% - 40px);
    display: flex;
    flex-direction: row;
    align-items: center;
    border: 3px solid #38B6FF;

    border-radius: 4px;
  }
  .item-right, .item-left {
    padding: 20px;
  }
  .item-right {
    flex: 0 0 25%;
    position: relative;
    text-align: center;
  }
  .item-right .up-border, .item-right .down-border {
    display: none;
  }
  .item-right .up-border {
    top: -8px;
    right: -35px;
  }
  .item-right .down-border {
    bottom: -13px;
    right: -35px;
  }
  .item-right .num {
    font-size: 20px;
    color: #111;
  }
  .item-right .day {
    font-size: 20px;
    color: #555;
  }
  .item-left {
    flex: 1;
    padding: 34px 46px;
    border-left: 3px dotted #999;
  }
  .item-left .title-title {
    color: #111;
    font-size: 15px;
    margin-bottom: 12px;
  }
  .item-left .sce, .item-left .loc {
    margin-top: 5px;
    display: flex;
    align-items: center;
    color: #888;
  }
  .item-left .sce .icon, .item-left .loc .icon {
    margin-right: 10px;
    font-size: 20px;
    color: #666;
  }
  .tickets, .booked, .cancel {
    color: #fff;
    padding: 6px 14px;
    margin-top: 10px;
    font-size: 18px;
    border: none;
    cursor: pointer;
  }
  .tickets {
    background: #777;
  }
  .booked {
    background: #3D71E9;
  }
  .cancel {
    background: #DF5454;
  }
  .linethrough {
    text-decoration: line-through;
  }
  .tickets-button {
    display: inline-block;
    padding: 7px 20px;
    font-size: 16px;
    color: white;
    background-color: #6f42c1; /* Change this to your preferred button color */
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
  }
  .tickets-button:hover {
    background-color: #007bff; /* Change this to your preferred hover color */
  }


    @media (max-width: 800px) {
      .container--container {
        margin: 10px 5px;
        max-width: fit-content;
    }
    .item {
      background: #fff;
      overflow: hidden;
      margin: 10px;
      padding: 10px 0;
      flex: none;
      border: none;
    }

    .item-right, .item-left {
      padding: 10px;
    }
    .item-right .num, .item-right .day {
      font-size: 14px;
    }
    .item-left .title-title {
      font-size: 12px;
    }
    .item-left .sce .icon, .item-left .loc .icon {
      font-size: 16px;
    }
    .tickets, .booked, .cancel {
      font-size: 14px;
    }
    .tickets-button {
      padding: 5px 15px;
      font-size: 14px;
    }
  }

  @media (min-width: 1010px) {
    .container--container {
        margin: 10px 12.5%;
    }
    .item {
      flex: 1 1 100%;
    }
    .item-right, .item-left {
      padding: 10px;
    }
    .item-right .num, .item-right .day {
      font-size: 14px;
    }
    .item-left .title {
      font-size: 12px;
    }
    .item-left .sce .icon, .item-left .loc .icon {
      font-size: 16px;
    }
    .tickets, .booked, .cancel {
      font-size: 14px;
    }
    .tickets-button {
      padding: 5px 15px;
      font-size: 14px;
    }  
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
<!-- Header start -->
@include('Home.headersection')
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.png)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Events</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">events</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<!-- start of card -->
<!-- partial:index.partial.html -->
<link href="https://fonts.googleapis.com/css?family=Cabin|Indie+Flower|Inknut+Antiqua|Lora|Ravi+Prakash" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<div class="container--container">
  <h1 class="upcomming">upcoming Events</h1>

  @foreach($events as $event)
  <div class="item">
    <div class="item-right">
      <h2 class="num">{{ $event->formatted_start_day }}</h2>
      <p class="day">{{ $event->formatted_start_month }}</p>
      <span class="up-border"></span>
      <span class="down-border"></span>
    </div> <!-- end item-right -->
    
    <div class="item-left">
    <h2 class="title-title">{{ $event->title }}</h2>

      <!--<h2 class="title-title">{{ Str::limit($event->title, 15, '...') }}</h2>-->
      <div class="sce">
        <div class="icon">
          <i class="fa fa-table"></i>
        </div>
        <p>From: {{$event->start_time}} - <br/> To: {{$event->end_time}}</p>
      </div>
      <div class="loc">
        <div class="icon">
          <i class="fa fa-map-marker"></i>
        </div>
        <p>{{$event->venue}}</p>
      </div> 
      <button class="tickets">{{ $event->status }} </button>
     <a href="{{ route('single_event', $event->id) }}" class="tickets-button">Read more</a>
    </div> <!-- end item-left -->
  </div> <!-- end item -->
  @endforeach
</div>
<div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
  {{$events->onEachSide(1)->links()}}
</div>



<!--end of card-->


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