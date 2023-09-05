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
        <img src="assets/images/6495319.png" alt="" class="img-fluid">
      </div>
      <div class="intro-info">
        <h2>Phi-Tech Provide </h2>
        <h3 style="color: white;"> Desktop Applications</h3>
        
        <p style="color: #fff;">We understand that certain business operations require desktop applications to cater to specific needs. Our team of experienced developers crafts robust and user-friendly desktop applications that automate processes, enhance efficiency, and provide a reliable and secure environment for your business operations         </p>

        <div>
          <a href="/contact" class="btn-get-started scrollto">Cotact Us</a>`  

        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-5">
        <h2 class="ser-heading">Desktop Application Services
        </h2>
    </div>
      <div class="col-md-7 fs-5"> 
<p >Experience efficient solutions with our desktop application development service, tailored to streamline your processes and boost productivity seamlessly.

</p>
      </div>
    </div>
  </div>


<div class="container mt-5">
<div class="row">
<div class="col-md-3 cards">
 <div class="card ">
    <div class="card-content">
      <h2 class="card-heading"><strong>Financial Software  </strong> </h2>
      <p class="card-paragraph fs-5">Billing software, Invoicing software, General ledger software, Trading and stock analysis software </p>

     
    </div>
  </div>
</div>
  
<div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading "><strong>Healthcare software</strong>
    </h2>
      <p class="card-paragraph">EHR/EMR Medical image and lab software, Medical device software, Hospital inventory management Telemedicine software

      </p>
    </div>
</div>
  </div>
  
  <div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading"><strong>Enterprise Resource</strong>
    </h2>
      <p class="card-paragraph">Operations management software (ERP, inventory management, etc.) PLM, SCM BI and data visualization apps.     </p>
    </div>
  </div>
</div>
  
<div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading"><strong>Utility Software</h2></strong>
      <p class="card-paragraph">File and content managers Browsers Downloading and torrenting software Drivers, plugins, and add-ons.

      </p>
    </div>
  </div>
</div>
</div>

</div>  

<div class="whyC mt-5">
  <div class="container">

 
    <h2 class="heading " >Why choose us</h2>
    <p class="paragraph">Choose us for your desktop app development needs because we bring a wealth of experience and a commitment to excellence. Our skilled team excels in creating powerful, user-friendly applications that cater to your specific requirements. With a proven track record of delivering successful projects on time, we ensure your desktop app is reliable, secure, and aligned with your business goals. By choosing us, you're opting for innovative solutions and dedicated support every step of the way.</p>
  </div>
</div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-9">
        <h2 class="ser-heading">Desktop application technology stack</h2>
      </div>
      <div class="row">
        <div class="col-md-9 ml-3">
          <h5>Experience pure creativity, skill, and expertise in Technologies for Desktop application Development.</h5>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4">
         <div class="card ">
            <div class="card-content">
              <h2 class="card-heading"><strong>Kotlin
            </strong> </h2>
              <p class="card-paragraph fs-5">Kotlin is an open-source, statically-typed programming language that supports both object-oriented and functional programming. 
              </p>
            </div>
          </div>
        </div>
          
        <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <h2 class="card-heading "><strong>C++
            </strong>
            </h2>
              <p class="card-paragraph"> C++ is an object-oriented programming (OOP) language that is viewed by many as the best language for creating large-scale applications.


        
              </p>
            </div>
        </div>
          </div>
          
          <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <h2 class="card-heading"><strong>C#
            </strong>
            </h2>
              <p class="card-paragraph"> C# is a modern, object-oriented, and type-safe programming language. C# enables developers to build many types of secure and robust applications.

              </p>
            </div>
          </div>
        </div>
        </div>
    <div class="row">
    <div class="col-md-4">
     <div class="card ">
        <div class="card-content">
          <h2 class="card-heading"><strong>Ruby
        </strong> </h2>
          <p class="card-paragraph fs-5">More specifically, Ruby is a scripting language designed for front- and back-end  development, as well as other similar applications.
    
          </p>
        </div>
      </div>
    </div>
      
    <div class="col-md-4">
      <div class="card">
        <div class="card-content">
          <h2 class="card-heading "><strong>Java
        </strong>
        </h2>
          <p class="card-paragraph"> Java is an object-oriented programming language that produces software for multiple platforms. 


    
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