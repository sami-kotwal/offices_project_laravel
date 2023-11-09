<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Phi Tech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="/assets/images/phitechSolution-logo.png" rel="icon" />
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Main Stylesheet File -->
    <link href="/assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
    
  </head>

  <body>
    <!--==========================
  Header
  ============================-->
    <header id="header" class="fixed-top">
      <div class="container">
        <div class="logo float-left">
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
          <a href="index.html" class="scrollto"
            >
            <img
              src="assets/images/newlogo.png"
              alt=""
              class="img-fluid"
          /></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
          <ul>
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/services" id="service">Services</a></li>
            <li><a href="/portfolio">Portfolio</a></li>

            <li ><a href="/contact">Contact Us</a></li>
          </ul>
        </nav>
        <!-- .main-nav -->
      </div>
      <div class="dropdown" id="contain">
        <ul>
       <li> <a href="/web Development">Web Development</a></li>
       <li> <a href="/Graphic Designing">Graphic Designing</a></li>
       <li> <a href="/Desktop Development">Desktop Application</a></li>
       <li> <a href="/Moblie App">Mobile App Development</a></li>
       <li> <a href="/ERP Services">ERP Services</a></li>
    </ul>  
    </div>
    </header>
    <!-- #header -->

@yield("content")
    <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="mt-5">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Phi Tech</h3>
            <p>At Phi Tech Solutions, we specialize in providing comprehensive IT services to meet the evolving needs of businesses in today's digital landscape.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-newsletter">
            <h4>Useful Links</h4>
            <ul class="p-0">
              <li ><a style="color: white; " href="/">Home</a></li>
              <li ><a style="color: white; " href="/about">About Us</a></li>
              <li ><a style="color: white; " href="/services">Service</a></li>
              <li ><a style="color: white; " href="/portfolio">Project</a></li>
              <li ><a style="color: white; " href="/contact">Contact Us</a></li>          
              </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4 >Contact Us</h4>
            <p>
              <strong>Phone:</strong>+92 331 2287085<br>
              <strong>Email:</strong>phitechs@phitechsol.com<br>
            </p>
            <div class="social-links">
             {{-- <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a> --}}
              <a href="https://www.facebook.com/phitechsol?mibextid=ZbWKwL" target="_blank" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="https://instagram.com/phitechsol?igshid=NTc4MTIwNjQ2YQ==" target="_blank" class="instagram"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://phitechs@phitechsol.com" class="google-plus"><i class="fa-brands fa-google-plus-g"></i></a>
              <a href="https://www.linkedin.com/company/phi-tech_solutions/" target="_blank" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md " >
            <h4 >Our Service</h4>
            <ul class="p-0">
              <li><a style="color: white;" href="/web Development">Web Development</a></li>
              <li><a style="color: white;" href="/Desktop Development">Desktop Development</a></li>
              <li><a style="color: white;" href="/Moblie App">Moblie App Development</a></li>
              <li><a style="color: white;" href="/Graphic Designing">Graphic Designing</a></li>
              <li><a style="color: white;" href="/ERP Services">ERP Services</a></li>
            </ul>
            
          </div>

        </div>
      </div>
    </div>

 
  </footer ><!-- #footer -->


    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/jquery/jquery-migrate.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/mobile-nav/mobile-nav.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="assets/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="assets/js/main.js"></script>
    <script>
      let ser = document.getElementById("service");
      let con = document.getElementById("contain");
      ser.addEventListener("mouseover", () => {
        con.style.display = "block";
        con.addEventListener("mouseleave", () => {
          con.style.display = "none";
        });
      });
    </script>
  </body>
</html>
