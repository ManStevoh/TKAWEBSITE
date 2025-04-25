<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <!-- Bootstrap CSS -->
   
      <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
</head>
<body>

<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.html">
                  <img loading="lazy" src="images/logo_1.png" alt="Tech Kidz Africa Logo">
                </a>
            </div><!-- logo end -->
  
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Contact us</p>
                          <p class="info-box-subtitle">(+254) 780 754126</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle">info@techkidzafrica.co.ke</p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">Headquarters</p>
                          <p class="info-box-subtitle">Ratna Square, Mombasa</p>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href="{{url('donate')}}">Donate</a>
                  </li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>



<div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                       <li class="nav-item active">
                          <a href="{{url('./')}}" class="nav-link">Home</a>
                      </li>

                    
                      

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('about_main_page')}}">About Us</a></li>
                            <li><a href="{{url('team_page')}}">Our Team</a></li>
                          </ul>
                      </li>

                      <li class="nav-item">
                          <a href="{{url('programs_page')}}" class="nav-link">Programs</a>
                      </li>
                      <li class="nav-item">
                          <a href="{{url('all_blogs')}}" class="nav-link">Projects</a>
                      </li>

              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blogs & Events <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('show_all_news')}}">Blogs</a></li>
                            <li><a href="{{url('all_events_view')}}">Events</a></li>
                          </ul>
                      </li>

                       <li class="nav-item">
                        <a href="{{url('faq_page')}}" class="nav-link">Faq</a>
                    </li>

                    

                      <li class="nav-item">
                        <a href="{{url('contactus_page')}}" class="nav-link">Contact us</a>
                    </li>
                    
      
                    
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">



          @if (Route::has('login'))

    @auth

    

        <div class="btns-1">
          
          <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-user" href="h" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      
                        
                                <i class='bx bx-user' ></i> {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if (Auth::user()->isAdmin())
                            <li><a class="dropdown-item" href="{{url('/home')}}"><i class="fas fa-tachometer-alt fa-sm fa-fw text-gray-400"></i> Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="fas fa-user fa-sm fa-fw text-gray-400"></i>Profile</a></li>
                           

                        @endif
                      
                           <li><a class="dropdown-item" href="{{url('Enrolment_page')}}"><i class='bx bx-edit'></i>Enroll</a></li>
                      

            
                        
                        <li>
                            <form method="POST" action="{{ route('logout') }}" style="display: none;" id="logout-form">
                                @csrf
                            </form>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw text-gray-400"></i>
                                <span style="color:#38B6FF!important">Logout</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        </div>
    @else

          <div class="btns">
            <a href="{{url('Enrolment_page')}}">Enroll</a>


             @if (Route::has('login'))

                            @auth

                            <li class="nav-items">
                              <span class="nav-link">

                            <x-app-layout >
                            </x-app-layout> </span> 
                          </li>


                            @else
                            <!---to comment out the login button--->

           <!--- <a href="{{route('login')}}">Login</a>---->

            @endauth
            @endif
          </div>

            @endauth
            @endif

     
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->





  <!--/ Navigation end -->
</header>
<!--/ Header end -->
 <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
     <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>



</body>
</html>