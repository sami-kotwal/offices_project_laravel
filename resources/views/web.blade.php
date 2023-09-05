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
    /* margin: 10px; */
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
        <img src="assets/images/webdevelopmentpage.png" alt="" class="img-fluid">
      </div>
      <div class="intro-info">
        <h2 style="color: #fff;">Phi-Tech Provide </h2>
        <h3 style="color: #fff;">Web Development</h3>
        
        <p style="color: #fff;">Phi-Tech offers holistic digital solutions for clients looking for a standout digital experience. Enabling digital capabilities for businesses that allow them to grow while adding unprecedented business value for their work.            </p>

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
        <h2 class="ser-heading">Web Development Services
        </h2>
    </div>
      <div class="col-md-7 fs-5"> 
<p >Your web presence is pivotal for your brand, aside from it serving as a point of service. Get started with an experienced website creation team in the USA that knows just what you need to take you forward.

</p>
      </div>
    </div>
  </div>

<div class="container mt-3">
<div class="row">
<div class="col-md-3 cards">
 <div class="card ">
    <div class="card-content">
      <h2 class="card-heading"><strong>Web Development   </strong> </h2>
      <p class="card-paragraph fs-5">Take your shop online with smart tools to start trading as your brand grows. </p>

     
    </div>
  </div>
</div>
  
<div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading "><strong>Content Management</strong>
    </h2>
      <p class="card-paragraph">Add, delete, and edit text, images, and audio/video with convenient admin controls.

      </p>
    </div>
</div>
  </div>
  
  <div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading"><strong>Custom Development</strong>
    </h2>
      <p class="card-paragraph">Build customized web solutions tailored to your specifications and brand identity.      </p>
    </div>
  </div>
</div>
  
<div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading"><strong>Web Development</h2></strong>
      <p class="card-paragraph">Leverage powerful platforms and tools to build a vibrant and robust web presence.

      </p>
    </div>
  </div>
</div>
</div>

</div>  


  <div class="fluid-container">

    <div class="whyC mt-5">
  
     <div class="container">
      <h2 class="heading " >Why choose us</h2>
      <p class="paragraph">Along with designing and developing your web presence, we propose business-oriented web development solutions that fit your needs and speak volumes of your values as a brand. With experienced web developers and digital artisans, you get a state-of-the-art solution with a cutting-edge appeal that engages more people online. Leverage powerful technologies and robust architecture to build a web solution that fulfills your needs under packaged web development services.</p>
     </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-9">
        <h2 class="ser-heading">Web development technology stack</h2>
      </div>
      <div class="row">
        <div class="col-md-9 ml-3">
          <h5>Experience pure creativity, skill, and expertise in Technologies for Web Development.</h5>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4">
         <div class="card ">
            <div class="card-content">
              <h2 class="card-heading"><strong>HTML
            </strong> </h2>
              <p class="card-paragraph fs-5">HTML stands for Hyper Text Markup Language. HTML is the standard markup language for creating Web pages. HTML describes the structure of a Web page. HTML consists of a series of elements.
              </p>
            </div>
          </div>
        </div>
          
        <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <h2 class="card-heading "><strong>CSS
            </strong>
            </h2>
              <p class="card-paragraph">Cascading Style Sheets (CSS) is a stylesheet language used to describe the presentation of a document written in HTML or XML (including XML dialects such as SVG, MathML or XHTML).


        
              </p>
            </div>
        </div>
          </div>
          
          <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <h2 class="card-heading"><strong>Java Script
            </strong>
            </h2>
              <p class="card-paragraph">JavaScript is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything else.

              </p>
            </div>
          </div>
        </div>
        </div>
    <div class="row">
    <div class="col-md-4">
     <div class="card ">
        <div class="card-content">
          <h2 class="card-heading"><strong>PHP
        </strong> </h2>
          <p class="card-paragraph fs-5">PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.
    
          </p>
        </div>
      </div>
    </div>
      
    <div class="col-md-4">
      <div class="card">
        <div class="card-content">
          <h2 class="card-heading "><strong>Laravel
        </strong>
        </h2>
          <p class="card-paragraph">Laravel is a free and open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications.


    
          </p>
        </div>
    </div>
      </div>
      
      <div class="col-md-4">
      <div class="card">
        <div class="card-content">
          <h2 class="card-heading"><strong>React JS        </strong>
        </h2>
          <p class="card-paragraph">The React.js framework is an open-source JavaScript framework and library developed by Facebook. It's used for building interactive user interfaces.

          </p>
        </div>
    </div>
    
    </div>
    </div>
    </div>  


@endsection