<!DOCTYPE html>


<html lang="en">
<head>
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
                <h1 class="banner-title">Faq</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Faq</li>
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
      <div class="col-lg-8">
        <h3 class="border-title border-left mar-t0">About Tech Kidz Africa</h3>

        <div class="accordion accordion-group accordion-classic" id="construction-accordion">
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  What programs do we offer?
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
              data-parent="#construction-accordion">
              <div class="card-body">
              Tech Kidz Africa empowers children to design their future through innovative technology education. 
              We believe in nurturing creativity, critical thinking, and problem-solving skills by offering programs that inspire young minds to become future leaders in technology.

             <h6>Join us for amazing programs like:</h6>
             <ol>
              <li>Robotics: Kids learn to design, code, and configure robots, enabling them to understand automation and its applications in real-world scenarios.</li>
              <li>Coding & Programming: From block-based programming for beginners to advanced languages like Python, JavaScript, and C++, we prepare kids for a future in software development.</li>
              <li>Game Development: Inspiring young game designers to create their own interactive games, fostering creativity and logic.</li>
              <li>App & Web Development: Kids learn to develop mobile apps and responsive websites using modern tools and frameworks.</li>
              <li>3D Printing: Hands-on training in 3D modeling and printing, turning ideas into tangible objects.</li>
              <li>Graphic Design: Introducing visual communication through tools like Canva, Photoshop, and Illustrator, focusing on creative design thinking.</li>
              <li>Animation: Teaching children to bring their stories to life using animation tools and techniques.</li>
              <li>Online Safety: Educating kids about safe internet practices and responsible online behavior to navigate the digital world securely.</li>
              <li>Creative Problem-Solving: Activities that build critical thinking and innovation, helping kids tackle real-world challenges.</li>
              <li>STEM Workshops: Comprehensive science, technology, engineering, and math (STEM) programs to inspire interest in diverse tech fields.</li>
              
             </ol>
              
          
              
             At Tech Kidz Africa, we also extend our impact by retooling educators with advanced skills in Artificial Intelligence, integrating technology into classrooms, and creating a future-ready learning environment.

            By equipping children and educators alike, we aim to create a holistic tech-savvy ecosystem, bridging the digital divide and fostering innovation across Africa
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What are the requirements for joining tech kidz africa?
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
              <div class="card-body">
                The is no specific requirement, so long as youre passionate about technology and you are passionate to learn new things
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Where are you located?
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
              data-parent="#construction-accordion">
              <div class="card-body">
                We operate in four primary counties in Kenya: Kilifi, Malindi, Mombasa, and Nairobi, 
                collaborating with various partners throughout the country. 
                However, our main headquarters is situated in Ratna Square, Nyali, Mombasa.
              </div>
            </div>
          </div>
        </div>
        <!--/ Accordion end -->

        <div class="gap-40"></div>

        <h3 class="border-title border-left">We are a Zero-Tolerant Child Abuse Organization</h3>

        <div class="accordion accordion-group accordion-classic" id="safety-accordion">
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour"
                  aria-expanded="true" aria-controls="collapseFour">
                  Whats our mission ?
                </button>
              </h2>
            </div>

            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour"
              data-parent="#safety-accordion">
              <div class="card-body">
                Tech kidz Africa exists to improve young generation
                creativity and innovation in technology and enhance
                modern skill-sets through robotics, coding and artificial
                intelligence.

              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingFive">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                 What are our values?
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#safety-accordion">
              <div class="card-body">
                Our values include: Professionalism, Integrity, Quality Services, Creativity & Innovation and Partnership and Collaborations.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingSix">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  What pillars are you founded on?
                </button>
              </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
              data-parent="#safety-accordion">
              <div class="card-body">
                Tech Kidz Africa is a technology Academy founded on a number of pillars: 1. Technological Knowledge and Resource
                Development 2.Youth Entrepreneurship & Professional
                Development 3.Strategic Partnerships & Networking 4.Online Safety and Cyber Security 
              </div>
            </div>
          </div>
        </div>
        <!--/ Accordion end -->

      </div><!-- Col end -->

      <div class="col-lg-4 mt-5 mt-lg-0">

        <div class="sidebar sidebar-right">
          <div class="widget recent-posts">
            <h3 class="widget-title">Recent Posts</h3>
            <ul class="list-unstyled">
              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="news-image" src="images/news/news1.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="news-left-sidebar.html">The Second Lady Pastor Dorcas Rigathi pays us a visit.</a>
                  </h4>
                </div>
              </li><!-- 1st post end-->

              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="news-img" src="images/news/news2.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="news-left-sidebar.html">Compassion Innovation Stars Festival 2023.</a>
                  </h4>
                </div>
              </li><!-- 2nd post end-->

              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="news-img" src="images/news/news3.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="news-left-sidebar.html">Tech Kidz Africa Raspberry Pi Hackathon</a>
                  </h4>
                </div>
              </li><!-- 3rd post end-->

            </ul>

          </div><!-- Recent post end -->
        </div><!-- Sidebar end -->

      </div><!-- Col end -->

    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->


@include('Home.footer')

 

      <!--Start of tkabot Script-->
      <script>
    const iframe = document.createElement("iframe");

    // Function to add styles
    const iframeStyles = (styleString) => {
        const style = document.createElement('style');
        style.textContent = styleString;
        document.head.append(style);
    };

    // Applying styles for the iframe
    iframeStyles(`
        .chat-frame {
            position: fixed;
            bottom: 15px;
            right: 15px;
            z-index: 1000;
            border: none;
        }
    `);

    // Setting the iframe source and class
    iframe.src = "http://13.49.246.192/:3000/chatbot";
    iframe.classList.add('chat-frame');
    document.body.appendChild(iframe);

    // Listening for message events
    window.addEventListener("message", (e) => {
        // Verifying the source of the message
        if (e.origin !== "http://13.49.246.192/:3000") return;

        // Parsing the data for iframe dimensions
        let dimensions = JSON.parse(e.data);
        iframe.width = dimensions.width;
        iframe.height = dimensions.height;

        // Sending a message to the iframe
        iframe.contentWindow.postMessage("37da9d86-fcdd-42e6-bbdb-6295050010ef", "http://13.49.246.192/:3000/");
    });
</script>

  <!--End of Tawk.to Script-->

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
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>