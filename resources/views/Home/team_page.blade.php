<!DOCTYPE html>

<!--
 // WEBSITE: https://techkidzafrica.co.ke
-->

<html lang="en">
<head>
  @include('Home.homecss')

  <style type="text/css">
    .image-container {
        width: 300px;
        height: 400px;
        border-radius: 50px;
        overflow: hidden;
        position: relative;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .image-container-staff {
        width: 250px;
        height: 300px;
        border-radius: 30px;
        overflow: hidden;
        position: relative;
    }

    .image-container-staff img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .pagination-container {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }

    .pagination-container nav {
        display: inline-block;
    }

    .pagination-container .pagination {
        display: flex;
        list-style: none;
        padding: 0;
    }

    .pagination-container .pagination li {
        margin: 0 5px;
    }

    .pagination-container .pagination li a,
    .pagination-container .pagination li span {
        display: block;
        padding: 8px 12px;
        color: #007bff;
        text-decoration: none;
        border: 1px solid #dee2e6;
        border-radius: 4px;
    }

    .pagination-container .pagination li.active span,
    .pagination-container .pagination li span[aria-current='page'] {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .pagination-container .pagination li.disabled span {
        color: #6c757d;
        pointer-events: none;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }
  </style>
</head>
<body>
<div class="body-inner">

  @include('Home.headersection')

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
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="main-container" class="main-container pb-4">
    <div class="container">

     

      <!-- Executive Team -->
      <div class="row text-center">
        <div class="col-lg-12">
          <h3 class="section-sub-title">Team Members</h3>
        </div>
      </div>
    

      <div class="row">
        @foreach($team1 as $member)
          <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
            <div class="ts-team-wrapper">
              <div class="team-img-wrapper">
                <div class="image-container-staff">
                  <img loading="lazy" src="/teamimage/{{$member->image}}" class="img-fluid" alt="team-img">
                </div>
              </div>
              <div class="ts-team-content-classic">
                <h3 class="ts-name">Name: {{$member->title}}</h3>
                <p class="ts-designation">Role: {{$member->role}}</p>
                <p class="ts-designation">Designation: {{$member->designation}}</p>
                
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Pagination -->
      <div class="pagination-container">
        {{ $team1->onEachSide(1)->links() }}
      </div>

    </div>
  </section>

  @include('Home.footer')

  <!-- Scripts -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <script src="plugins/shuffle/shuffle.min.js" defer></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <script src="plugins/google-map/map.js" defer></script>
  <script src="js/script.js"></script>

</div>
</body>
</html>
