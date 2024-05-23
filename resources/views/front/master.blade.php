<!DOCTYPE html>
<html lang="en">

@yield('head')

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->
  @yield('header')
  

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>We Listen</h6>
            <div class="line-caption"><div class="line-dec"></div> <h5>to your great ideas.</h5></div> 
                      
            <p>Our dedicated team provides web and design services with a focus on enhancing your business.</p>
            <div class="second-button scroll-to-section"><a href="#services">Discover More</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="about section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row section-heading">
              <h1>About Us</h1>
              
            </div>
            <div class="row">
              <div class="col-lg-4">                  
                    <div class="top-image">
                      <img src="assets/images/isp.png" alt="">
                    </div>
                    <div class="about-heading">
                      <h3>IT Service Provider</h3>
                    </div>
                  <div class="about-section">
                    <p class="more-info">Bringing you the latest technologies and holistic solutions through sophisticated embedded software and web portals is what we do best. Our commitment is to give you access to the newest industry advancements by seamlessly integrating cutting-edge software into high-end web platforms.</p>                
                  </div>
               </div>

               <div class="col-lg-4">                  
                    <div class="top-image">
                      <img src="assets/images/si.png" alt="">
                    </div>
                    <div class="about-heading">
                      <h3>Software Innovation</h3>
                    </div>
                  <div class="about-section">
                    <p class="more-info">Empowering our customers with top-notch, up-to-date IT solutions is our forte. We're committed to bringing you the latest and most advanced technological offerings in the realm of Information Technology (IT).</p>                
                  </div>
               </div>
               
               <div class="col-lg-4">                  
                <div class="top-image">
                  <img src="assets/images/ov.png" alt="">
                </div>
                <div class="about-heading">
                  <h3>Our Vision</h3>
                </div>
              <div class="about-section">
                <p class="more-info">Striving to become the preferred and successful IT solution provider, our goal is to garner recognition on both domestic and international fronts across diverse industries through our cutting-edge technology offerings.</p>                
              </div>

           </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12"> 
           {{-- offset-lg-6 --}}
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <br>
                <h1>Our <span>Services</span></h1>
                  <div class="line-dec"></div>
                  <p>Our skilled team of app developers is here to turn your ideas into successful products. We work closely with you every step of the way, from shaping your vision to bringing it to life. Our process includes turning ideas into tangible products by combining design and technology, and ensuring they're delivered seamlessly to happy users.</p>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="service-item">
                <h4>System Integration & Project Management</h4>
                <p>Our experienced team manages every step, from planning to execution, ensuring smooth integration that meets your needs, on time and within budget. Trust us to streamline your systems, allowing you to focus on growing your business without any hassle.</p>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="service-item">
                <h4>Web Design & Development</h4>
                <p>
                  We design customized websites using various programming languages and tools to suit your requirements. Our offerings encompass both new website creation and updating existing ones, ensuring a modern online presence. From start to upkeep, we handle your product's lifecycle proficiently.                </p>             
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 ">
              <div class="service-item">
                {{-- <div class="icon">
                  <img src="assets/images/services-03.jpg" alt="precise data" class="templatemo-feature">
                </div> --}}
                <h4>Mobile Application Solution</h4>
                <p>We develop applications that are compatible with both iOS and Android operating systems, ensuring seamless accessibility across all devices.</p>
              </div>
            </div>
            {{-- <div class="col-lg-3 col-sm-3 services-col">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-04.jpg" alt="SEO marketing" class="templatemo-feature">
                </div>
                <h4>SEO Marketing &amp; Social Media</h4>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="projects section" id="projects">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Discover Our <em>Work</em> &amp; <span>Projects</span></h2>
            <div class="line-dec"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
          </div>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-features owl-carousel">
            <div class="item">
              <img src="assets/images/projects-01.jpg" alt="">
              <div class="down-content">
                <h4>Digital Agency HTML Templates</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-02.jpg" alt="">
              <div class="down-content">
                <h4>Admin Dashboard CSS Templates</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-03.jpg" alt="">
              <div class="down-content">
                <h4>Best Responsive Website Layouts</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-04.jpg" alt="">
              <div class="down-content">
                <h4>HTML CSS Layouts for your websites</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-02.jpg" alt="">
              <div class="down-content">
                <h4>Bootstrap 5 Themes for Free</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-03.jpg" alt="">
              <div class="down-content">
                <h4>Mobile Friendly Website Layouts</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
              <div class="col-lg-6">
                <div >
                  <form id="contact-form" action="{{ route('send.email')}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="section-heading">
                          <h2>Lets get in touch !</span></h2>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <input type="name" name="name" id="name" placeholder="Full Name..." autocomplete="on" required>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="content" id="content" placeholder="Your Message"></textarea>
                        </fieldset>
                      </div>
                        <div class="col-lg-8">
                          <fieldset>                            
                            <label for="attachFile" class="up-button">Upload File &nbsp;<i class="fa fa-upload"></i></label>
                            <input type="file" id="attachFile" name="attachFile" style="display:none">
                            <p id="uploadedFileName"><span style="font-size: 13px;">(jpg, jpeg, doc, docx & pdf file. Max 20MB)</span></p>
                          </fieldset>
                        </div>
                        <div class="col-lg-4 contact-send">
                          <fieldset>
                            <button type="submit" id="form-submit" class="orange-button">Send</button>
                          </fieldset>
                        </div>
                    </div>
                  </form>
                  
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contact-info">
                  <h2>We’re ready to help</h2>
                  <p>Should you wish to discuss your upcoming project in more detail, please feel free to reach out to our approachable team via the provided phone number or email address. We look forward to hearing from you and assisting with your project needs.</p>

                  <h5><i class="fa fa-phone" style="color: rgba(57,227,174,1)"></i>&nbsp;&nbsp; +606 760 6203</h5>
                  <h5><i class="fa fa-envelope" style="color: rgba(57,227,174,1)"></i>&nbsp;&nbsp; hr@mysoftedge.com</h5>
                  <h5><i class="fa fa-map-marker" style="color: rgba(57,227,174,1)"></i>&nbsp;&nbsp; No 16-2, Jalan PPP2, Pusat Perdagangan Paroi, 70400, Seremban, Negeri Sembilan</h5>
                  <p></p>
                  <h2><span style="color: rgb(15,156,187)">Join Our Team</span></h2>
                  <p>If you're interested in joining us, <span style="color: rgb(15,156,187); font-weight:500;">please share your CV and portfolio.</span> We look forward to getting to know you better and exploring your potential to be a valuable addition to our team.</p>

                </div>                
                
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@yield('footer')



  <script>
    // Wait for the DOM to be ready
    $(document).ready(function() {
        // Attach change event listener to the file input
        $('#attachFile').change(function() {
            // Get the selected file's name
            var fileName = $(this).val().split('\\').pop();
            // Update the content of the placeholder
            $('#uploadedFileName').text('' + fileName);
        });
    });
</script>


  </body>

</html>
