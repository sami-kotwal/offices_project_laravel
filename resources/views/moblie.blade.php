@extends("head_foot")

@section("content")


<style>
    *{
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
    }

    .ser-heading{
        font-weight: 600;

    }

  .heading {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .paragraph {
    font-size: 16px;
    color: #555555;
  }

  .heading {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .paragraph {
    font-size: 16px;
    color: #555555;
  }

    .card {
    /* max-width: 25%; */
    margin: 10px;
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    display: inline-block;
    height: 200px;
    /* flex-direction: row; */
    /* vertical-align: top; */

  }
 

  .card-content {
    padding: 20px;
  }
  
  .card-heading {
    font-size: 20px;
    margin-bottom: 10px;
  }

  .card-paragraph {
    font-size: 16px;
    color: #555555;
  }

  .whyC {
    background-color: #4e6bff;
    color: #ffffff;
    text-align: center;
    padding: 60px 20px;
    
  }

  .heading {
    font-size: 36px;
    margin-bottom: 20px;
    text-align: left;
  }

  .paragraph {
    width: 80%;
    font-size: 18px;
    line-height: 1.6;
    text-align: left;
    color: #fff;
  }
  /* .cards:hover{
    background-color: #4e6bff;
    color: #fff;
  } */
</style>


<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="assets/images/mobilepage.png" alt="" class="img-fluid">
      </div>
      <div class="intro-info">
        <h2>Phi-Tech Provide </h2>
        <h3 style="color: white;">Moblie App Development</h3>
        
        <p style="color: #fff;">In the era of mobile dominance, we offer mobile app development services to help you connect with your customers on the go. Our skilled developers create native and cross-platform mobile applications that deliver seamless experiences, drive customer engagement, and provide value-added functionalities.           </p>

        <div>
          <a href="/contact" class="btn-get-started scrollto">Contact Us</a>
          <!-- <a href="contactus.html" class="btn-services scrollto">Contact Us</a> -->
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-5">
        <h2 class="ser-heading">Mobile App Development Services
        </h2>
    </div>
      <div class="col-md-7 fs-5"> 
<p >Elevate your brand with our expert mobile app development services. From concept to execution, our team ensures user-centric design and up-to-date trends. Stand out in the competitive market with an engaging app that meets your goals.

</p>
      </div>
    </div>
  </div>


<div class="container mt-5">
<div class="row">
<div class="col-md-3 cards">
 <div class="card ">
    <div class="card-content">
      <h2 class="card-heading"> <strong>App
        Development   </strong> </h2>
      <p class="card-paragraph fs-5"> Creating captivating apps for accelerated global revenue growth through optimized development and visual appeal. </p>

     
    </div>
  </div>
</div>
  
<div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading "><strong>Blockchain
        Development</strong>
    </h2>
      <p class="card-paragraph">Our blockchain experts ensure secure, decentralized app creation, whether for cryptocurrency development or launching an ICO.

      </p>
    </div>
</div>
  </div>
  
  <div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading"><strong>Augmented
        Reality</strong>
    </h2>
      <p class="card-paragraph">Unleash the beauty and potency of AR, VR, and motion capture technologies for an immersive customer experience.      </p>
    </div>
  </div>
</div>
  
<div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading"><strong>Game
        Development</h2></strong>
      <p class="card-paragraph">Craft captivating 2D and 3D multiplayer mobile games with addictive gameplay, offering an enthralling user experience.e.

      </p>
    </div>
  </div>
</div>
</div>

</div>  
<div class="whyC mt-5">
<div class="container">
 
  
    <h2 class="heading " >Why choose us</h2>
    <p class="paragraph ">Choose us for your app development needs because we offer unparalleled expertise combined with a track record of successful projects. Our dedicated team is committed to delivering innovative and tailored solutions that align with your vision. With a focus on user-centric design, cutting-edge technology, and timely delivery, we ensure your app stands out in today's competitive market. Trust us to turn your ideas into reality and provide you with an app that exceeds expectations.</p>
  </div>
</div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-9">
        <h2 class="ser-heading">Mobile app development technology stack</h2>
      </div>
      <div class="row">
        <div class="col-md-9 ml-3">
          <h5>xperience pure creativity, skill, and expertise in Technologies for App Development.</h5>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4">
         <div class="card ">
            <div class="card-content">
              <h2 class="card-heading"><strong>JAVA
            </strong> </h2>
              <p class="card-paragraph fs-5">Java is an object-oriented programming language that produces software for multiple platforms. 
              </p>
            </div>
          </div>
        </div>
          
        <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <h2 class="card-heading "><strong>Java Script
            </strong>
            </h2>
              <p class="card-paragraph"> JavaScript is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything


        
              </p>
            </div>
        </div>
          </div>
          
          <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <h2 class="card-heading"><strong>Python
            </strong>
            </h2>
              <p class="card-paragraph"> Python is an interpreted, object-oriented, high-level programming language with dynamic semantics developed by Guido van Rossum. 

              </p>
            </div>
          </div>
        </div>
        </div>
    <div class="row">
    <div class="col-md-4">
     <div class="card ">
        <div class="card-content">
          <h2 class="card-heading"><strong>Flutter
        </strong> </h2>
          <p class="card-paragraph fs-5">Flutter is Google's portable UI toolkit for crafting beautiful, natively compiled applications for mobile, web, and desktop from a single codebase.
    
          </p>
        </div>
      </div>
    </div>
      
    <div class="col-md-4">
      <div class="card">
        <div class="card-content">
          <h2 class="card-heading "><strong>Angular Js
        </strong>
        </h2>
          <p class="card-paragraph">  Angular is a development platform, built on TypeScript. As a platform, Angular includes: A component-based framework for building scalable applications.


    
          </p>
        </div>
    </div>
      </div>
      
      <div class="col-md-4">
      <div class="card">
        <div class="card-content">
          <h2 class="card-heading"><strong> React Native        </strong>
        </h2>
          <p class="card-paragraph">React Native is a JavaScript framework for writing real, natively rendering mobile applications for iOS and Android. It's based on React, Facebook's JavaScript library.

          </p>
        </div>
    </div>
    
    </div>
    </div>
    </div>  

@endsection