<head>
  <style>
  .scroll-side{
    width: 100%;
}
.scroll-side h1{
    font-size: 2em;
    margin-bottom: 10px;
    color: #333;
    display: flex;
}
.scroll-side ul{
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.scroll-side ul .event-info{
    display: relative;
    display: flex;
    flex-direction: row;
    background-color: turquoise;    
    width: 100%;
}
.scroll-side ul .event-info .date{
    position: relative;
    padding: 10px;
    background: maroon;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: turquoise;
}
.scroll-side ul .event-info .detail{
    position: relative;
    padding: 5px 15px 10px;
}
.scroll-side ul .event-info .detail .title{
    margin: 0 0 5px;
    font-size: 1.5em;
    color: maroon;
}
.scroll-side ul .event-info .detail .description{
    letter-spacing: 0.5px;
    font-size: 1em;
}
.scroll-side ul .event-info .detail .link{
    margin-top: 20px;
}
.scroll-side ul .event-info .detail a{
    text-decoration: none;
    padding: 5px;
    border: 1px solid maroon;
    border-radius: 4px;
    background: #fff;
    color: maroon;
}
  </style>
</head>
<div class="col-lg-4 order-1 order-lg-0">

<div class="sidebar sidebar-left">

  <div class="widget recent-posts">
    <h3 class="widget-title">EVENTS</h3>

    <!-- Created a scrollable post element-->

 <div class="scrollable-posts">


      <ul class="list-unstyled">
       @foreach($event as $e)
    <li class="d-flex align-items-center">
        <div class="posts-thumb">
            <a href="#"><img loading="lazy" alt="img" src="/eventimage/{{$e->image}}"></a>
        </div>
        <div class="post-info">
            <h4 class="entry-title">
                <a href="{{ route('single_event', $e->id) }}">{{ $e->title }}</a>
            </h4>
        </div>
    </li><!-- 1st post end-->
@endforeach


      </ul>

       
</div>

   

  </div><!-- Recent post end -->


  <div class="widget">
    <h3 class="widget-title">Blogs</h3>
    <ul class="arrow nav nav-tabs">
      <li><a href="{{url('programs_page')}}">Web development</a></li>
      <li><a href="{{url('programs_page')}}">Robotics</a></li>
      <li><a href="{{url('programs_page')}}">Community support</a></li>
      <li><a href="{{url('programs_page')}}">Staying safe online</a></li>
      <li><a href="{{url('programs_page')}}">Art of learning through play</a></li>
    </ul>
  </div><!-- Categories end -->

<!---<div class="widget">
    <h3 class="widget-title">Archives </h3>
    <ul class="arrow nav nav-tabs">
      <li><a href="#">November 2023</a></li>
      <li><a href="#">October 2023</a></li>
      <li><a href="#">September 2023</a></li>
      <li><a href="#">June 2023</a></li>
      <li><a href="#">Febuary 2023</a></li>
    </ul>
  </div>--->
  <!-- Archives end -->

  <div class="widget widget-tags">
    <h3 class="widget-title">Tags </h3>

    <ul class="list-unstyled">
      <li><a href="https://www.linkedin.com/showcase/elimu-robotics/?viewAsMember=true">Elimu Pi Robotics</a></li>
      <li><a href="https://www.linkedin.com/company/code-innovators-africa/">Code Innovatos Academy</a></li>
      <li><a href="https://www.raspberrypi.org/blog/experience-ai-canada-kenya-romania/">Experience AI</a></li>
      <li><a href="https://www.raspberrypi.org/blog/experience-ai-canada-kenya-romania/">Raspberry Pi Foundation</a></li>
      <li><a href="">Online Safety and CyberSecurity</a></li>
      <li><a href="https://dpmd.ai/47jZQdu">Google Deep Mind</a></li>
      <li><a href="#">Close the Gap Kenya</a></li>
    </ul>
  </div><!-- Tags end -->


</div><!-- Sidebar end -->
</div><!-- Sidebar Col end -->
