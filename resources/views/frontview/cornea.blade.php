@extends('layouts.front')

@section('content')
<section class="inner_banner py-5">
    <div class="container">

        <h1>Cornea</h1>
        <p><a href="#">
                Home
            </a> | Cornea
        </p>

    </div>
</section>
@include('common.alert')
<section class="services pt-0">
    <div class="container-fluid bg-light">
        <div class="container">
        <div class="row py-5 justify-content-between">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12   text wow fadeInRight align-self-center service-left">
                <div>
                    <h5>Our Services</h5>
                </div>
                <div>
                    <ul>
                        <li>
                            <a href="#se-1">Cataract
                            </a>
                        </li>
                        <li>
                            <a href="#se-2">Corneal transplantation
                            </a>
                        </li>
                        <li>
                            <a href="#se-3">Refractive surgery
                            </a>
                        </li>
                        <li>
                            <a href="#se-4">Ocular surface disorders
                            </a>
                        </li>
                        <li>
                            <a href="#se-5">Ocular Trauma</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="icon-box appointment" data-aos="zoom-out" data-aos-delay="500">
                    <h3>Book an appointment</h3>
                    <form action="{{route('sendMail')}}" method="post" role="form">
                        @csrf
                            <input type="hidden" name="subject" value="Eye treatments">

                        <div class="row">
                            <div class="col-md-6 mt-3  form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 ">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mt-3 ">
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                                    required="">
                            </div>

                            <div class="col-md-6 form-group mt-3">
                                <input type="datetime-local" name="date" class="form-control datepicker" id="date"
                                    placeholder="Appointment Date" required="">
                            </div>


                        </div>

                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5"
                                placeholder="Message" required></textarea>
                        </div>
                        <div class="mt-3">

                            <div class="text-center "><button type="submit" class="cta-btn">Book Now</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        

        <div class="row justify-content-between" id="se-1">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text wow fadeInRight align-self-center p-5">
                <div class="section-title">
                    <h2>What is Cornea?</h2>

                </div>
                
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <p>Cornea is a transparent, outer most coat of the eye. It is the most important refractive surface of the eye. Any small condition affecting cornea leads to significant reduction in vision.  
                </p>
               
            



            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                    <img src="Front/img/cornea/1.jpg" alt="Image" class="img-fluid">
                </div> <!-- /.img-content -->
            </div>

        </div> <!-- /.row -->
        <div class="row justify-content-between" id="se-2">
 <h3>What different condition affects cornea?</h3>
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content d-flex">
                    <img src="Front/img/cornea/2.png" alt="Image" class="p-2">
                  
                </div> <!-- /.img-content -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
               <h6>Corneal Ulcer:</h6>
                 
                <p>Cornea can be affected by various infection, injuries, inflammations etc.  Various organisms like bacteria, fungus, virus etc can infect cornea and can lead to sight threatening and very painful condition called corneal ulcers. 
                </p>
               
               


            </div> <!-- /.text -->


           <p>Corneal ulcers should be treated immediately and effectively. If not treated on time, it can lead to permanent loss of vision. Cornea specialist gives very effective medications like antibiotics, anti-fungal, and antiviral treatment to holt the progression of the diseases. If the infection is not responding to topical eye drops, then corneal transplantation is required to save the eye and vision.</p>

        </div> <!-- /.row -->
        <div class="row justify-content-between" id="se-3">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                
                   <h6>Keratoconus:</h6>

               
                <p>In a normal state, cornea is a spherical in shape. When corneal tissue starts losing its strength, it becomes conical in shape. That condition is known as Keratoconus. Keratoconus affects young individuals. Test known as topography is done for early detection and asses  the progress of keratoconus disease.
                </p>
                



            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content d-flex">
                    <img src="Front/img/cornea/3.jpg" alt="Image" class="w-50 p-2">
                     <img src="Front/img/cornea/4.jpg" alt="Image" class="w-50 p-2">
                </div> <!-- /.img-content -->
            </div>

            
        </div> <!-- /.row -->
        <div class="row justify-content-between" id="se-4">

            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft ">
                <div class="img-content d-flex">
                    
                                        <img src="Front/img/cornea/5.jpg" alt="Image" class="img-fluid">
                </div> <!-- /.img-content -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
               
               <p>Early symptoms of keratoconus are frequent change of cylindrical power of glasses, glare and halos around the objects etc. As condition progresses, persons vision gradually decreases. In early stage, condition can be treated with change of glass power but as disease progresses, special type of contact lenses are needed to improve vision. In most advanced cases, need of corneal transplantation arises. </p>




            </div> <!-- /.text -->


           

        </div> <!-- /.row -->
        <div class="row justify-content-between" id="se-5">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                
                <p>Only treatment available to holt the progression of the disease in known as Corneal Collagen Crosslinking (C3R or CXL). In this procedure, cornea is treated with UV light and Riboflavin drops to strengthen the bonds of corneal lamellae. It is a safe and effective procedure and if done timely, it can prevent sight threatening complication caused by Keratoconus.
                </p>
                

            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content d-flex">
                   <img src="Front/img/cornea/6.png" alt="Image" class="w-50 p-2">
                     <img src="Front/img/cornea/7.png" alt="Image" class="w-50 p-2">
                </div> <!-- /.img-content -->
            </div>


        </div> <!-- /.row -->
        
         <div class="row justify-content-between" id="se-5">

            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="pt-5">
                    <h6>Injury to cornea:</h6>

                </div>
                <ul><li>
                          Injury to cornea can happen due to various reasons. Injuries by sharp objects like knife,   glass,   needles, sharp pencils can cut cornea.</li><li>
     Various chemicals like acids, chuna (Alkali) etc, which are used in household or in chemical factories can spill in the eye accidentally and can cause severe damage to cornea. These types of chemical injuries should be treated and managed in a emergency basis by cornea specialist to prevent loss of vision. </li><li>
     Blunt injuries by fist, by cricket or tennis balls etc  can damage cornea and entire eye. This type of injuries needs immediate management and treatment.
                </li></ul>
                

            </div> <!-- /.text -->

           


        </div> <!-- /.row -->
        
          <div class="row justify-content-between" id="se-5">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                
                    
<h6>Corneal Transplantation:</h6>
                
                <p>When cornea is damaged significantly and becomes opaque, it is removed and replace with healthy cornea donated by an eye donor. This process is known as corneal transplantation.</p>
               
                

            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft  align-self-center">
                <div class="img-content ">
                    <img src="Front/img/cornea/8.png" alt="Image" class="img-fluid p-4 ">
                </div> <!-- /.img-content -->
            </div>


        </div> <!-- /.row -->
        
         <div class="row justify-content-between" id="se-5">
 
            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                 <p>
 Corneal transplantation is needed in many conditions like corneal ulcer not responding to medical management, advanced keratoconus, cornea is damaged after cataract surgery, cornea became opaque after infection or injuries etc. </p>
 <p>Now a days there is lot of advancement in the field of corneal transplantation. Because of these advancements, sutureless corneal transplantation procedures which are known as DSEK or DMEK etc are possible. These procedures give very fast visual recovery as compared to traditional corneal transplantation procedure with sutures.
                </p>
               <p>Dr. Shwetambari Singh is a cornea specialist and having experience of more that 20 years in these field. She has returned eye sight to thousands of corneal blind patients by performing various corneal transplantation procedures. She is expert in managing eye injuries and many complex ocular surface conditions.</p>
                

            </div> <!-- /.text -->

           


        </div> <!-- /.row -->
        
         <div class="row " >

            <div class="col-lg-4 wow fadeInRight gallery-img">
                  <img src="Front/img/cornea/9.png" alt="Image" class="img-fluid">
                </div>
                  <div class="col-lg-4 wow fadeInRight gallery-img">
                  <img src="Front/img/cornea/10.jpg" alt="Image" class="img-fluid h-100">
                </div>
                
              
            </div>
    </div> <!-- /.container -->
</section>





@endsection