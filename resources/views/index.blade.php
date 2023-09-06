@extends("head_foot")

@section("content")

<style>
  .cd{
  
  }
</style>

    <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
      <div class="container">
        <div class="intro-img">
          <img src="assets/img/intro-img.svg" alt="" class="img-fluid" />
        </div>
        <div class="intro-info">
          <h3 style="color: #fff">Very Proud to Introduce</h3>
          <h2>Phi-Tech Provide</h2>
          <h2
            class="typewrite"
            data-period="1000"
            data-type='[ "Web Development", "Graphic Designing", "ERP Consultant", "App Development","Desktop Development"]'
          ></h2>

          <p style="color: #fff">
            Phi-Tech offers holistic digital solutions for clients looking for a
            standout digital experience. Enabling digital capabilities for
            businesses that allow them to grow while adding unprecedented
            business value for their work.
          </p>

          <div>
            <a href="/contact" class="btn-get-started scrollto"
              >Contact Us</a
            >
      
          </div>
        </div>
      </div>
    </section>
    <!-- #intro -->

    <main id="main">
      <section id="Services" class="section-bg mt-5">
        <div class="container">
          <header class="section-header">
            <h3>Unleashing Our Competitive Advantages</h3>
            <p class="mt-3"> 
              Phi Tech Solution provides comprehensive tech services: Graphic
              Designing, ERP Consulting, Web Designing, Web Development, Mobile
              App Development, and Desktop Application solutions. Experience
              excellence with us!
            </p>
          </header>

          <div class="row row-eq-height justify-content-center">
            <div class="col-lg-4 mb-4">
              <div class="card wow bounceInUp">
                <i class="fa-solid fa-paintbrush"></i>
                <div class="card-body">
                  <h5 class="card-title">Graphic Designing</h5>
                  <p class="card-text">
                    Our skilled designers create captivating logos, marketing
                    materials, and website graphics, bringing your ideas to life
                    with creativity and innovation.
                  </p>
                  <a href="/Graphic Designing" class="readmore">Show more </a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4">
              <div class="card wow bounceInUp">
                <i class="fa-solid fa-chart-pie"></i>
                <div class="card-body">
                  <h5 class="card-title">ERP Services</h5>
                  <p class="card-text">
                    As ERP consultants, we streamline operations and optimize
                    processes with custom ERP solutions, boosting productivity
                    and fostering collaboration.
                  </p>
                  <a href="/ERP Services" class="readmore">Show more </a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4">
              <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
                <div class="card-body">
                  <h5 class="card-title">Web Designing</h5>
                  <p class="card-text">
                    Our web design expertise creates attractive, user-friendly
                    sites that reflect your brand, embrace responsive design,
                    and deliver excellent user experiences.
                  </p>
                  <a href="/web Development" class="readmore">Show more </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="card wow bounceInUp">
                <i class="fa-solid fa-laptop-code"></i>
                <div class="card-body">
                  <h5 class="card-title">Web Development</h5>
                  <p class="card-text">
                    Our skilled web development team crafts scalable,
                    interactive websites using diverse programming languages and
                    frameworks, driving business growth with tailored solutions
                  </p>
                  <a href="/web Development" class="readmore">Show more </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="card wow bounceInUp">
                <i class="fa-solid fa-mobile"></i>
                <div class="card-body">
                  <h5 class="card-title">Mobile App Development</h5>
                  <p class="card-text">
                    In a mobile-centric landscape, we offer app development, delivering seamless experiences, driving engagement, and ensuring high-quality performance.
                  </p>
                  <a href="/Moblie App" class="readmore">Show more </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="card wow bounceInUp">
                <i class="fa-solid fa-desktop"></i>
                <div class="card-body">
                  <h5 class="card-title">Desktop Application</h5>
                  <p class="card-text">
                    Expertly and meticulously crafted by our adept team, we design robust, user-friendly desktop apps to streamline tasks, enhance productivity, and ensure secure business operations.
                  </p>
                  <a href="/Desktop Development" class="readmore">Show more </a>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </section>

      <!--==========================
      Portfolio Section
    ============================-->
      <section id="portfolio" class="clearfix ">
        <div class="container">
          <header class="section-header">
            <h3 class="section-title">Our Portfolio</h3>
          </header>

          <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Graphic Designing</li>
                <li data-filter=".filter-card">Web Development</li>
                <li data-filter=".filter-web">Mobile App</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/images/Phi Tech Solutions Profle[1]-33.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4><a href="graphic-ser.html">Graphic Designing</a></h4>
                  <p>Logo Designing</p>
                  <div>
                    <a
                      href="images/Phi Tech Solutions Profle[1]-33.png"
                      data-lightbox="portfolio"
                      class="link-preview"
                                           ><i class="fa-solid fa-eye"></i
                    ></a>
                    <a
                      href="graphic-ser.html"
                      class="link-details"
                      title="More Details"
                      ><i class="fa-solid fa-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="col-lg-4 col-md-6 portfolio-item filter-web"
              data-wow-delay="0.1s"
            >
              <div class="portfolio-wrap">
                <img
                  src="assets/images/Phi Tech Solutions Profle[1]-26.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4><a href="mobile-ser.html">Moblie App</a></h4>
                  <p>Moblie App</p>
                  <div>
                    <a
                      href="images/Phi Tech Solutions Profle[1]-26.png"
                      class="link-preview"
                      data-lightbox="portfolio"
                      ><i class="fa-solid fa-eye"></i
                    ></a>
                    <a
                      href="mobile-ser.html"
                      class="link-details"
                      title="More Details"
                      ><i class="fa-solid fa-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item filter-app"
              data-wow-delay="0.2s"
            >
              <div class="portfolio-wrap">
                <img
                  src="assets/images/Phi Tech Solutions Profle[1]-36.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4><a href="graphic-ser.html">Graphic Designing</a></h4>
                  <p>Cartoon Drawings</p>
                  <div>
                    <a
                      href="images/Phi Tech Solutions Profle[1]-36.png"
                      class="link-preview"
                      data-lightbox="portfolio"
                      ><i class="fa-solid fa-eye"></i
                    ></a>
                    <a
                      href="graphic-ser.html"
                      class="link-details"
                      title="More Details"
                      ><i class="fa-solid fa-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img
                  src="assets/images/Phi Tech Solutions Profle[1]-22.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4><a href="web-ser.html">Website</a></h4>
                  <p>Website</p>
                  <div>
                    <a
                      href="images/Phi Tech Solutions Profle[1]-22.png"
                      class="link-preview"
                      data-lightbox="portfolio"
                      ><i class="fa-solid fa-eye"></i
                    ></a>
                    <a href="web-ser.html" class="link-details" title="More Details"
                      ><i class="fa-solid fa-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item filter-web"
              data-wow-delay="0.1s"
            >
              <div class="portfolio-wrap">
                <img
                  src="assets/images/Phi Tech Solutions Profle[1]-27.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4><a href="mobile-ser.html">Website</a></h4>
                  <p>Website</p>
                  <div>
                    <a
                      href="images/Phi Tech Solutions Profle[1]-27.png"
                      class="link-preview"
                      data-lightbox="portfolio"
                      ><i class="fa-solid fa-eye"></i
                    ></a>
                    <a
                      href="mobile-ser.html"
                      class="link-details"
                      title="More Details"
                      ><i class="fa-solid fa-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item filter-app"
              data-wow-delay="0.2s"
            >
              <div class="portfolio-wrap">
                <img
                  src="assets/images/Phi Tech Solutions Profle[1]-35.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4><a href="graphic-ser.html">Graphic Designing</a></h4>
                  <p>Poster And Cover Designs</p>
                  <div>
                    <a
                      href="images/Phi Tech Solutions Profle[1]-35.png"
                      class="link-preview"
                      data-lightbox="portfolio"
                      ><i class="fa-solid fa-eye"></i
                    ></a>
                    <a
                      href="graphic-ser.html"
                      class="link-details"
                      title="More Details"
                      ><i class="fa-solid fa-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img
                  src="assets/images/Phi Tech Solutions Profle[1]-25.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4><a href="web-ser.html">Website </a></h4>
                  <p>Websites</p>
                  <div>
                    <a
                      href="images/Phi Tech Solutions Profle[1]-25.png"
                      class="link-preview"
                      data-lightbox="portfolio"
                      ><i class="fa-solid fa-eye"></i
                    ></a>
                    <a href="web-ser.html" class="link-details" title="More Details"
                      ><i class="fa-solid fa-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item filter-card"
              data-wow-delay="0.1s"
            >
              <div class="portfolio-wrap">
                <img
                  src="assets/images/Phi Tech Solutions Profle[1]-24.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4><a href="web-ser.html">Website</a></h4>
                  <p>Websites</p>
                  <div>
                    <a
                      href="images/Phi Tech Solutions Profle[1]-24.png"
                      class="link-preview"
                      data-lightbox="portfolio"
                      ><i class="fa-solid fa-eye"></i
                    ></a>
                    <a href="web-ser.html" class="link-details" title="More Details"
                      ><i class="fa-solid fa-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item filter-web"
              data-wow-delay="0.2s"
            >
              <div class="portfolio-wrap">
                <img
                  src="assets/images/Phi Tech Solutions Profle[1]-28.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4><a href="mobile-ser.html">Moblie App</a></h4>
                  <p>Moblie App</p>
                  <div>
                    <a
                      href="images/Phi Tech Solutions Profle[1]-28.png"
                      class="link-preview"
                      data-lightbox="portfolio"
                      ><i class="fa-solid fa-eye"></i
                    ></a>
                    <a
                      href="mobile-ser.html"
                      class="link-details"
                      title="More Details"
                      ><i class="fa-solid fa-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- #portfolio -->

      <!--==========================
      Clients Section
    ============================-->
      <section id="testimonials" class="section-bg">
        <div class="container">
          <header class="section-header">
            <h3>Testimonials</h3>
          </header>

          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="owl-carousel testimonials-carousel wow fadeInUp">
                <div class="testimonial-item">
                  <img src="assets/images/womwn.jpeg" class="testimonial-img" alt="" />

                  <h3>Tamania Arbab</h3>
                  <h4>Owner of Petmania & Confiance.Co</h4>
                  <p>
                    "Exceptional team, innovative solutions. [Software House
                    Name] exceeded expectations, delivering quality and
                    efficiency. A reliable partner for software excellence."
                  </p>
                </div>

                <div class="testimonial-item">
                  <img src="assets/images/womwn.jpeg" class="testimonial-img" alt="" />
                  <h3>Dr. Nazia Shakir</h3>
                  <h4>Owner of Periodicals of Management Studies</h4>
                  <p>
                    "Impeccable service! Phi Tech Solution delivered beyond our
                    hopes, showcasing their software prowess. A definite choice
                    for future projects."
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- #testimonials -->

      <!--==========================
      Team Section
    ============================-->
    {{-- <div class="container mt-5">
      <div class="row res">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="teamember">
                <img src="assets/images/DAWOOD.png" class="img-fluid" alt="no img" />
              </div>
                    <h4>SYED ZAIN UL ABADIN
                    </h4>
                    <span>CO-FOUNDER & CEO</span>
              </div>

               <div class="col-lg-4 col-md-6 col-sm-12 cd">
                <img src="assets/images/ZAIN.png" class="img-fluid" alt="no img" />
                    <h4>SYED ZAIN UL ABADIN
                    </h4>
                    <span>CO-FOUNDER & CEO</span>
              </div>

               <div class="col-lg-4 col-md-6 col-sm-12 cd">
                <img src="assets/images/ABDUL.png" class="img-fluid" alt="no img" />
                    <h4>SYED ZAIN UL ABADIN
                    </h4>
                    <span>CO-FOUNDER & CEO</span>
              </div>

        </div>
      </div>
    </div> --}}

      <section id="team">
        <div class="container">
          <div class="section-header">
            <h3>Our Owners </h3>
            <p>Introducing our exceptional leaders: Dawood Fareed, Syed Zain Ul Abadin, and Abdul Moueed. Their visionary guidance drives our success.            </p>
          </div>

          <div class="rowteam" class="responsive">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
              <div class="member">
                <img src="assets/images/DAWOOD1.jpeg" class="img-fluid" alt="" />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>DAWOOD FAREED</h4>
                    <span>CO-FOUNDER </span>
                    <div class="social">
                      <a href=""><i class="fa-brands fa-twitter"></i></a>
                      <a href=""><i class="fa-brands fa-facebook"></i></a>
                      <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
              <div class="member">
                <img src="assets/images/ZAIN1.jpeg" class="img-fluid" alt="" />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>SYED ZAIN UL ABADIN
                    </h4>
                    <span>CO-FOUNDER & CEO                    </span>
                    <div class="social">
                      <a href=""><i class="fa-brands fa-twitter"></i></a>
                      <a href=""><i class="fa-brands fa-facebook"></i></a>
                      <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
              <div class="member">
                <img src="assets/images/ABDUL2.jpeg" class="img-fluid" alt="" />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>ABDUL MOUEED
                    </h4>
                    <span>CO-FOUNDER</span>
                    <div class="social">
                      <a href=""><i class="fa-brands fa-twitter"></i></a>
                      <a href=""><i class="fa-brands fa-facebook"></i></a>
                      <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==========================
      Clients Section
    ============================-->
      <section id="clients" class=" mt-5">
        <div class="container">
          <div class="section-header">
            <h3>Our Clients</h3>
           
          </div>

          <div class="row no-gutters clients-wrap clearfix wow fadeInUp mt-5">
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img
                  src="assets/images/intel.png"
                  style="height: 100px"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img
                  src="assets/images/walls.png"
                  style="height: 100px"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img
                  src="assets/images/dell.png"
                  style="height: 100px"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img
                  src="assets/images/shell.png "
                  style="height: 100px"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img
                  src="assets/images/ptcl.jpg"
                  style="height: 100px"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img
                  src="assets/images/tapal.png"
                  style="height: 100px"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img
                  src="assets/images/itel.png"
                  style="height: 100px"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="assets/img/clients/client-8.png" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>

            
      </section>

    </main>
@endsection