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
    display: flex;
    height: 230px;
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

  .card ul {
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
        <img src="assets/images/erp_im.png" alt="" class="img-fluid">
      </div>
      <div class="intro-info">
        <h2>Phi-Tech Provide </h2>
        <h3 style="color: #fff;">ERP Services</h3>
        
        <p style="color: #fff;">Phi-Tech offers holistic digital solutions for clients looking for a standout digital experience. Enabling digital capabilities for businesses that allow them to grow while adding unprecedented business value for their work.            </p>

        <div>
          <a href="/contact" class="btn-get-started scrollto">Cotact Us</a>`  

        </div>
      </div>

    </div>
  </section><!-- #intro -->

<div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <h2 class="ser-heading">Our most popularly sold services in ERP.
        </h2>
    </div>
</div>
    <div class="row">
      <div class="col-md-7 fs-5"> 
<p >"Our Highly Sought-After ERP Services Solutions: With a proven record of success, we offer tailored ERP implementations that optimize your business processes for seamless efficiency and accelerated growth."

</p>
      </div>
    </div>
  </div>


<div class="container mt-5">
<div class="row">
<div class="col-md-3 cards">
 <div class="card ">
    <div class="card-content">
      <h2 class="card-heading"><strong>Finance  </strong> </h2>
      <ul class="ml-2">
      <li>Setup Finance</li>
       <li>Setup Payment Methods</li> 
       <li>Setup Payment Terms</li> 
        <li>Setup Posting Groups</li>
      </ul>
     
    </div>
  </div>
</div>
  
<div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading "><strong>Fixed Assets</strong>
    </h2>
    <ul class="ml-2">
      <li>Setup Fixed Assets</li> 
      <li> Setup General Fixed Assets Information </li>
       <li> Setup Fixed Asset Depreciation </li>
        <li>Define Depreciation Methods</li>
      
    </ul>
      

      
    </div>
</div>
  </div>
  
  <div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading"><strong>Sales</strong>
    </h2>
    <ul class="ml-2">
<li>Setup Sales</li>
 <li> Register New Customers </li>
 <li> Enable Customer Payments Through Payment Services </li>
  <li>Setup Prices and Discounts</li>
    </ul>
            
    </div>
  </div>
</div>
  
<div class="col-md-3 cards">
  <div class="card">
    <div class="card-content">
      <h2 class="card-heading"><strong>Purchasing</strong></h2>
      <ul class="ml-2">
       <li> Setup Purchasing</li>
       <li> Register New Vendors </li>
       <li> Setup Vendor Bank Accounts </li>
      <li>  Prioritize Vendors </li>

      </ul>
    </div>
  </div>
</div>
</div>

</div>  

<div class="whyC mt-5">
  <div class="container">
    <h2 class="heading" >Why choose us</h2>
    <p class="paragraph">Choose us for your ERP services needs because we bring extensive expertise and a track record of successful implementations. Our dedicated team understands the complexities of ERP systems and tailors solutions to your specific business requirements. With a deep understanding of industry best practices and cutting-edge technology, we ensure a seamless integration that streamlines your operations and enhances productivity. By choosing us, you're opting for a partner that prioritizes your business's success and growth through efficient and effective ERP solutions.</p>
  </div>
</div>

  <div class="container mt-5">
    <div class="row">
        <div class="col-md-5">
            <h2 class="ser-heading">ERP Consultant Services</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
         <div class="card ">
            <div class="card-content">
              <h2 class="card-heading"><strong>Inventory
            </strong> </h2>
            <ul class="ml-3">

           <li>  Setup Inventory</li>
             <li>   Setup General Inventory Information</li>
              <li> Work with Responsibility Centers</li> 
               <li>Setup Locations</li> 
                <li>Register New Items</li>
               <li> Copy Existing Items to Create New Items</li>
            </ul>
              
            </div>
          </div>
        </div>
          
        <div class="col-md-6">
          <div class="card ">
            <div class="card-content ">
              <h2 class="card-heading "><strong>Manufacturing
            </strong>
            </h2>
            <ul class="ml-3">
           <li> Setup Manufacturing</li>
             <li>   Create Work Center Calendars</li>
             <li>Setup Work Centers and Machine Centers </li>
               <li> Create Routings</li>
               <li> Create Production BOMs </li>
                <li>Enable Flushing of Components According to Operation Output</li>
              </ul>
                </div>
            </div>
    </div>
    </div>
          <div class="row">
          <div class="col-md-6">
          <div class="card ">
            <div class="card-content " >
              <h2 class="card-heading"><strong>Warehouse Management </strong>
            </h2>
            <ul class="ml-3">
            <li> Setup Warehouses</li>
             <li>   Warehouse Management Overview</li>
               <li> Setup Bin Types</li>
              <li> Create Bins</li> 
               <li> Create Bin Contents</li>
              <li>  Assign Default Bins to Items</li>
              <li> SetUp Put-away Templates </li>

              </ul>
            </div>
          </div>
        </div>
          <div class="col-md-6">
          <div class="card ">
            <div class="card-content ">
              <h2 class="card-heading"><strong>Financial Business Intelligence and Reporting
            </strong>
            </h2>
            <ul class="ml-3">
              <li> Setup Warehouses</li>
               <li>   Warehouse Management Overview</li>
                 <li> Setup Bin Types</li>
                <li> Create Bins</li> 
                 <li> Create Bin Contents</li>
                <li>  Assign Default Bins to Items</li>
                <li> Setup Put-away Templates </li>
                  <li>Setup Warehouse Employees</li>
  
                </ul>
              </p>
            </div>
          </div>
        </div>
        </div>
        </div>
    
    </div>  



 
@endsection