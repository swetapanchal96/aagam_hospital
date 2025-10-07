@extends('layouts.front')

@section('opTag')
<title>Home Page</title>

@section('title', 'Privacy Policy')
 <meta name="description" content="{{ $seo->metaDescription }}" /> 
<meta name="keywords" content="{{ $seo->metaKeyword }}" />
{!! $seo->head !!}
{!! $seo->body !!}
 <meta property="og:url" content="https://www.getdemo.in/shine_asthetic/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="{!!  $seo->metaTitle !!} ">
  <meta property="og:description" content="{!!  $seo->metaDescription !!} ">
@endsection
@section('content')

<section class="inner_banner py-5">
    <div class="container">

        <h1>Aesthetic Services</h1>
        <p><a href="#">
                Home
            </a> | Aesthetic Services
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
                            <a href="#s-1">Cosmetic Surgeon
                            </a>
                        </li>
                        <li>
                            <a href="#s-2">Trauma Surgeon
                            </a>
                        </li>
                        <li>
                            <a href="#s-3">Burns Management
                            </a>
                        </li>
                        <li>
                            <a href="#s-4">A- V Fistula Sugeon
                            </a>
                        </li>
                        <li>
                            <a href="#s-5">Plastic Surgeon</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="icon-box appointment" data-aos="zoom-out" data-aos-delay="500">
                    <h3>Book an appointment</h3>
                    <form action="{{route('sendMail')}}" method="post" role="form">
                        @csrf
                            <input type="hidden" name="subject" value="Aesthetic Services">

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

                        <div class="text-center php-email-form"><button type="submit" class="cta-btn">Book Now</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>

    <div class="container">

       
        <div class="row justify-content-between" id="s-1">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title">
                    <h2>Cosmetic Surgeon</h2>

                </div>
                <p>Cosmetic surgery involves surgical procedures designed to enhance or alter physical appearance, often
                    to achieve aesthetic improvements. The field of cosmetic surgery is broad and includes both surgical
                    and non-surgical options.
                </p>




            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                    <img src="Front/img/services/cosmetic-surgery.jpg" alt="Image" class="img-fluid">
                </div> <!-- /.img-content -->
            </div>

            <hr>
        </div> <!-- /.row -->
        <div class="row justify-content-between" id="s-2">

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                    <img src="Front/img/services/traumasurgeon.jpg" alt="Image" class="img-fluid">
                </div> <!-- /.img-content -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title">
                    <h2>Trauma Surgeon</h2>

                </div>
                <p>Trauma surgery is a specialized field of surgery focused on the immediate and comprehensive care of
                    patients with traumatic injuries. These injuries can result from accidents, falls, violence, or
                    other significant trauma and often require urgent surgical intervention. Trauma surgery encompasses
                    a broad range of surgical procedures and management strategies to address injuries and stabilize
                    patients.
                </p>




            </div> <!-- /.text -->


            <hr>

        </div> <!-- /.row -->
        <div class="row justify-content-between" id="s-3">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title">
                    <h2>Burns Management</h2>

                </div>
                <p>Burn treatment is a critical and multifaceted process that depends on the severity and extent of the
                    burn. Burns are categorized into different degrees based on their depth and involvement of skin
                    layers. Proper management of burns is crucial to prevent complications, promote healing, and improve
                    outcomes.
                </p>




            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                    <img src="Front/img/services/brn1.jpg" alt="Image" class="img-fluid">
                </div> <!-- /.img-content -->
            </div>

            <hr>
        </div> <!-- /.row -->
        <div class="row justify-content-between" id="s-4">

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                    <img src="Front/img/services/fistulasugeon.png" alt="Image" class="img-fluid w-100">
                </div> <!-- /.img-content -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title">
                    <h2>A- V Fistula Sugeon
                    </h2>

                </div>
                <p>An arteriovenous (AV) fistula is a surgical connection between an artery and a vein, typically
                    created for patients with chronic kidney disease who require hemodialysis. This connection allows
                    for easy access to the bloodstream for dialysis treatment.
                </p>




            </div> <!-- /.text -->


            <hr>

        </div> <!-- /.row -->
        <div class="row justify-content-between" id="s-5">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title">
                    <h2>
                        Plastic Surgeon</h2>

                </div>
                <p>Plastic surgery is a diverse field of medicine focused on the reconstruction, repair, or enhancement
                    of the body's tissues and structures. It encompasses both reconstructive and cosmetic procedures,
                    aiming to restore function and appearance or enhance aesthetic features.
                </p>




            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                    <img src="Front/img/services/plastic-surgery.jpg" alt="Image" class="img-fluid">
                </div> <!-- /.img-content -->
            </div>


        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

@if(!$Faq->isEmpty())
<!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">
            @foreach ($Faq as $f)

              <div class="faq-item">
                <h3>{{$f->question}}</h3>
                <div class="faq-content">
                  <p>{{$f->answer}}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->
            @endforeach
            </div>
            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

<br />
<br />
@endif
@endsection