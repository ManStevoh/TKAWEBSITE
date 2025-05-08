<footer id="footer" class="footer bg-overlay">
  <div class="footer-main">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 col-md-6 footer-widget footer-about">
          <h3 class="widget-title">About Us</h3>
          <img loading="lazy" width="200px" class="footer-logo" src="images/footer-logo.png" alt="TechKidz Africa Footer">
          <p>Tech Kidz Africa
            empowers the kids to design their own future by designing, coding
            and configuring robots, developing software, graphic design and
            creative design thinking.</p>
          <div class="footer-social">
            <ul>
              <li><a href="https://www.facebook.com/techkidzafrica" aria-label="Facebook"><i
                    class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://twitter.com/techkidzafrica" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
              </li>
              <li><a href="https://www.instagram.com/techkidzafrica/" aria-label="Instagram"><i
                    class="fab fa-instagram"></i></a></li>
              <li><a href="https://www.linkedin.com/company/tech-kidz-africa/" aria-label="Linkedin"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div><!-- Footer social end -->
        </div><!-- Col end -->

        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
          <h3 class="widget-title">Working Hours</h3>
          <div class="working-hours">
            We work 6 days a week,with Saturday being half day every.  Are you a parent looking for a technology academy for your kid? Dont wait anylonger!Book with us today
            <br><br> Monday - Friday: <span class="text-right">8:0am - 5:00pm </span>
            <br> Saturday: <span class="text-right">8:00am - 1:00pm</span>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
          <h3 class="widget-title">Programs</h3>
          <ul class="list-arrow">
            <li><a href="{{url('programs_page')}}">Robotics & Hardware Development</a></li>
            <li><a href="{{url('programs_page')}}">Software Development & Consultancy</a></li>
            <li><a href="{{url('programs_page')}}">App Development</a></li>
            <li><a href="{{url('programs_page')}}">AI & Machine Learning</a></li>
            <li><a href="{{url('programs_page')}}">Animation & Graphics Design</a></li>
          </ul>
        </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Footer main end -->

  <div class="copyright">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="copyright-info">
            <span>Copyright &copy; <script>
                document.write(new Date().getFullYear())
              </script>, Designed &amp; Developed by <a href="#">Tech Kidz Africa</a></span>
          </div>
        </div>

        <div class="col-md-6">
          <div class="footer-menu text-center text-md-right">
            <ul class="list-unstyled">
              <li><a href="{{url('about_main_page')}}">About</a></li>
              <li><a href="{{url('team_page')}}">Our team</a></li>
              <li><a href="{{url('faq_page')}}">Faq</a></li>
              <li><a href="{{url('show_all_news')}}">Blog</a></li>
              <li><a href="{{url('all_blogs')}}">Projects</a></li>
            </ul>
          </div>
        </div>
      </div><!-- Row end -->

      <!--Start of Tawk.to Script-->
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
    iframe.src = "http://13.49.246.192:3000/chatbot";
    iframe.classList.add('chat-frame');
    document.body.appendChild(iframe);

    // Listening for message events
    window.addEventListener("message", (e) => {
        // Verifying the source of the message
        if (e.origin !== "http://13.49.246.192:3000") return;

        // Parsing the data for iframe dimensions
        let dimensions = JSON.parse(e.data);
        iframe.width = dimensions.width;
        iframe.height = dimensions.height;

        // Sending a message to the iframe
        iframe.contentWindow.postMessage("37da9d86-fcdd-42e6-bbdb-6295050010ef", "http://13.49.246.192:3000/");
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