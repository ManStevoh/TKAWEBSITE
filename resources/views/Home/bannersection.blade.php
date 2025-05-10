
<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider_1.png)">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-title" data-animation-in="slideInLeft">Welcome to Tech Kidz Africa</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight">We nurture technological skills in kids from the age of 4 - 17 years!</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="{{url('programs_page')}}" class="slider btn btn-primary">Our Services</a>
                    <a href="{{url('contactus_page')}}" class="slider btn btn-primary border">Contact Now</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>
  @foreach(array_slice($new->all(), 0, 4) as $news)
  <div class="banner-carousel-item" style="background-image:url(/newsimage/{{$news->image}}); ">
  
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                    <h3 class="slide-sub-title" data-animation-in="slideInRight" >{{$news->title}}</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="{{url('main_news_view',$news->id)}}" class="slider btn btn-primary">Read More</a>
                    <a href="{{url('contactus_page')}}" class="slider btn btn-primary border">Contact Now</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>
  @endforeach
  
  <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider_2.png)">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown">With A Zero-Tolerance Policy</h2>
                <h3 class="slide-title" data-animation-in="fadeIn">Our curriculums prioritize creating a safe and nurturing environment.</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">We are committed to fostering the well-being and development of every child under our care.</p>                </h3>
                <p data-animation-in="slideInRight">
                    <a href="#ts-service-area" class="slider btn btn-primary border">Our Services</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider_3.png)">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title" data-animation-in="slideInDown">We Believe in</h2>
                <h3 class="slide-sub-title" data-animation-in="fadeIn">Empowering Future Innovators</h3>
                <p class="slider-description lead" data-animation-in="slideInRight">Our solution involves ensuring that they are equipped with advanced tech skills, empowering them to thrive in the evolving landscape of the future.
                  <br>
                  We also nurture innovation talents from learners aged 18 years and above.
                </p>
                <div data-animation-in="slideInLeft">
                    <a href="{{url('contactus_page')}}" class="slider btn btn-primary" aria-label="contact-with-us">Contact Us</a>
                    <a href="#ts-features" class="slider btn btn-primary border" aria-label="learn-more-about-us">Learn more</a>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>