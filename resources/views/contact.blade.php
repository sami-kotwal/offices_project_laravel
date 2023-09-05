@extends("head_foot")

@section("content")

<!-- Contact Section -->
<!-- ============================-->
<section id="contact" class="mt-5">
  <div class="container-fluid">

    <div class="section-header">
      <h3>Contact Us</h3>
    </div>

    <div class="row wow fadeInUp">

      <div class="col-lg-6">
        <div class="map mb-4 mb-lg-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 340px;" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-lg-6">
  <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          
  @if(Session::has('success'))

  <div class="alert alert-success">

      {{Session::get('success')}}

  </div>

@endif
          <form  action="{{URL::TO("/inserted ")}}" method="post">
            @csrf
            <div class="form-row">
              <div class="form-group col-lg-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">
                <input type="text" name="number" class="form-control" id="number" placeholder="Your Number" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">
                <input type="text" class="form-control" name="country" id="country" placeholder="Your Country" />
                
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-12">
                  <select class="select form-control"  name="project">
                    <option value="Choose option" selected disabled>Choose option</option>
                    <option value="Web development">Web development</option>
                    <option value="Graphic Designing">Graphic Designing</option>
                    <option value="ERP Design">ERP Design</option>
                    <option value="SAP Design">SAP Design</option>
                    <option value="Mobile App Development">Mobile App Development</option>
                    <option value="Desktop Application Development">Desktop Application Development</option>
                    
                  </select>
          
            </div>
          </div>
              <div class="validation"></div>
            </div>
            
            <div class="form-group">
              <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" title="Send Message" >Send Message</button></div>
          </form>
        </div>
      </div>

    </div>

  </div>
</section><!-- #contact -->




@endsection