@extends('layouts.front')

@section('content')
<section class="inner_banner py-5">
    <div class="container">

        <h1>Cataract Surgery</h1>
        <p><a href="#">
                Home
            </a> | Cataract Surgery
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
                    <h2>Cataract Surgery</h2>

                </div>
                
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <p>When a natural lens which is present in the eye becomes opaque, it is called Cataract. It is a natural process and all elderly individual develop cataract. Age of development of cataract varies in different individuals. 
                </p>
               
            



            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                    <img src="Front/img/cataract/1.png" alt="Image" class="img-fluid">
                </div> <!-- /.img-content -->
            </div>

        </div> <!-- /.row -->
        <div class="row justify-content-between" id="se-2">

            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content d-flex">
                    <img src="Front/img/cataract/2.jpg" alt="Image" class="w-50 p-2">
                    <img src="Front/img/cataract/3.png" alt="Image" class="w-50 p-2">
                </div> <!-- /.img-content -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                
                <p>Person who develops cataract, have many different types of  symptoms. Most important out of all is decreased vision. Other symptoms can be coloured halos around bright light, double vision, glare at night time etc. 
                </p>

               


            </div> <!-- /.text -->


          

        </div> <!-- /.row -->
        <div class="row justify-content-between" id="se-3">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title">
                   

                </div>
                <p>Treatment of cataract is surgical removal of opaque lens and replacing it with clear artificial lens.  There are many different types of cataract surgeries, out is which most popular is Phacoemulsification (Phaco) surgery. In phaco surgery, healing and visual recovery is very fast. Very small cut of around 2.0 mm is made in the eye. Entire opaque lens is removed with the help of advanced technology of phacoemulsification machine. After removal of natural opaque lens, an artificial foldable lens (Intraocular lens, IOL ) is injected in the eye.
                </p>
                



            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                     <img src="Front/img/cataract/4.jpg" alt="Image" class="img-fluid">
                </div> <!-- /.img-content -->
            </div>

            
        </div> <!-- /.row -->
        <div class="row justify-content-between" id="se-4">

            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft ">
                <div class="img-content d-flex">
                    <img src="Front/img/cataract/5.jpg" alt="Image"  class="w-50 p-2">
                                        <img src="Front/img/cataract/6.jpg" alt="Image" class="w-50 p-2">
                </div> <!-- /.img-content -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title">
                   

                </div>
                <p>Now a days with development of technology various good qualities of premium IOLs are available. There are various types of lens available like Monofocal, Multifocal, Trifocal, EDOF, Toric lens etc. After thorough evaluation of the eye, proper lens power calculation and proper discussion about the pros and cons of different types of lenses, a particular lens is decided for the patient.</p>




            </div> <!-- /.text -->


           

        </div> <!-- /.row -->
        <div class="row justify-content-between" id="se-5">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title">
                    

                </div>
                <p>Shine Eye clinic is equipped with most advanced technology for IOL power calculation.
                </p>
                <p>Dr. Shwetambari Singh is having vast experience of 17 years in the field of cataract surgeries. She is expert in dealing with various complicated cataract surgeries and in implanting various premium Intra Ocular Lenses (IOLs). She has trained more than 100 ophthalmologists for performing cataract surgeries.</p>

                <p>Shine Aesthetic & Eye clinic is an advanced cataract surgery centre, equipped with most recent technologies for Lens power calculations and cataract removal. </p>
                <p>It is a one stop solution for your cataract related treatment and queries. </p>

            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                    <img src="Front/img/cataract/7.png" alt="Image" class="img-fluid">
                </div> <!-- /.img-content -->
            </div>


        </div> <!-- /.row -->
        
         <div class="row justify-content-between" >

            <div class="col-lg-4 wow fadeInRight gallery-img">
                  <img src="Front/img/cataract/10.png" alt="Image" class="img-fluid">
                </div>
                  <div class="col-lg-4 wow fadeInRight gallery-img">
                  <img src="Front/img/cataract/8.jpg" alt="Image" class="img-fluid">
                </div>
                  <div class="col-lg-4 wow fadeInRight gallery-img">
                  <img src="Front/img/cataract/9.jpg" alt="Image" class="img-fluid">
                </div>
                  <div class="col-lg-4 wow fadeInRight gallery-img">
                  <img src="Front/img/cataract/11.jpg" alt="Image" class="img-fluid">
                
                  <img src="Front/img/cataract/12.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-4 wow fadeInRight  gallery-img">
                  <img src="Front/img/cataract/13.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-4 wow fadeInRight gallery-img">
                  <img src="Front/img/cataract/14.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
    </div> <!-- /.container -->
</section>





@endsection