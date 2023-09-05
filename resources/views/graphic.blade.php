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
        <img src="assets/images/5233796.png" alt="" class="img-fluid">
      </div>
      <div class="intro-info">
        <h2>Phi-Tech Provide </h2>
        <h3 style="color: #fff;">Graphic Designing</h3>
        
        <p style="color: #fff;">Graphic Designing: Our innovative designs blend artistry with purpose, ensuring your brand communicates effectively. From logos to marketing materials, we transform concepts into captivating visuals that stand out in a crowded marketplace. Our team combines creativity and strategy to deliver impactful designs that leave a lasting impact on your audience.        </p>

        <div>
          <a href="/contact" class="btn-get-started scrollto">Cotact Us</a>`  
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-5">
        <h2 class="ser-heading">Our most popularly sold services in graphic designing.
        </h2>
    </div>
      <div class="col-md-7 fs-5"> 
<p >Transform your ideas into visually stunning realities with our professional graphic designing services. Elevate your brand's aesthetics today.

</p>
      </div>
    </div>
  </div>


<div class="container mt-5">
<div class="row">
<div class="col-md-3 cards">
 <div class="card ">
    <div class="card-content">
      <h2 class="card-heading"><strong>Logo Designing  </strong> </h2>
      <p class="card-paragraph fs-5">Crafting iconic logos that embody your brand's essence and leave a lasting impression.</p>

     
    </div>
  </div>
</div>
  
<div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading "><strong>Cartoon Drawing</strong>
    </h2>
      <p class="card-paragraph">Whimsical cartoon drawings that bring characters and stories to life with playful creativity.

      </p>
    </div>
</div>
  </div>
  
  <div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading"><strong>Website Banners</strong>
    </h2>
      <p class="card-paragraph">Elevate your online presence with captivating website banners that engage and resonate with your audience.     </p>
    </div>
  </div>
</div>
  
<div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading"><strong>Carousel Designs</h2></strong>
      <p class="card-paragraph">Explore dynamic carousel designs that enhance user experience and showcase your content seamlessly.

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
    <p class="paragraph ">Choose us for your graphic designing needs because we blend creativity with strategy. Our team of experienced designers crafts visually compelling solutions tailored to your brand's identity and objectives. With a keen eye for detail and a deep understanding of design principles, we ensure that every project is a masterpiece. We collaborate closely with you, making sure your vision is brought to life with precision and innovation. From logos to marketing materials, we transform ideas into captivating visuals that resonate with your audience, helping your brand stand out in today's competitive landscape.</p>
   </div>
  </div>
</div>


  <div class="container mt-5">
    <div class="row">
      <div class="col-md-9">
        <h2 class="ser-heading">Graphic Designing Services</h2>
      </div>
      <div class="row">
        <div class="col-md-9 ml-3">
          <h5>Unlock creativity with our expert graphic design services, shaping visuals that resonate and captivate.</h5>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4">
         <div class="card ">
            <div class="card-content">
              <h2 class="card-heading"><strong>Visiting Cards
            </strong> </h2>
              <p class="card-paragraph fs-5"> Designing unique visiting cards that make a lasting impression and reflect your professional identity. 
              </p>
            </div>
          </div>
        </div>
          
        <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <h2 class="card-heading "><strong>Letter Head Designs
            </strong>
            </h2>
              <p class="card-paragraph"> Crafting distinguished letterhead designs that reflect your brand's identity and enhance your corporate image.


        
              </p>
            </div>
        </div>
          </div>
          
          <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <h2 class="card-heading"><strong>Envelope Designs
            </strong>
            </h2>
              <p class="card-paragraph"> Elevate your brand with custom envelope designs that exude professionalism and leave a lasting impression.

              </p>
            </div>
          </div>
        </div>
        </div>
    <div class="row">
    <div class="col-md-4">
     <div class="card ">
        <div class="card-content">
          <h2 class="card-heading"><strong>Poster And Cover Designs
        </strong> </h2>
          <p class="card-paragraph fs-5">  Designing striking posters and covers that make a statement and resonate with your audience.
    
          </p>
        </div>
      </div>
    </div>
      
    <div class="col-md-4">
      <div class="card">
        <div class="card-content">
          <h2 class="card-heading "><strong>Flyers Designs
        </strong>
        </h2>
          <p class="card-paragraph">  Creating dynamic flyer designs that grab attention and deliver your message with visual flair.


    
          </p>
        </div>
    </div>
      </div>
      
      <div class="col-md-4">
      <div class="card">
        <div class="card-content">
          <h2 class="card-heading"><strong>Broucher Designs       </strong>
        </h2>
          <p class="card-paragraph"> Crafting impactful brochure designs that convey your message and captivate your audience effectively.

          </p>
        </div>
    </div>
    
    </div>
    </div>
    </div>  


@endsection