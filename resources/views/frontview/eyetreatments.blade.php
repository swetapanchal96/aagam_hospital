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

        <h1>Eye treatments</h1>
        <p><a href="#">
                Home
            </a> | Eye treatments
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

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title pt-3">
                    <h2>Cataract</h2>

                </div>
                <p>We are widely recognized for excellence in providing cataract treatment & surgery. With successful
                    cataract treatment your vision will be clearer, brighter and sharper just like before.
                </p>
                <p>
                <a href="{{route('FrontCataract')}}" class="cta-btn m-0">
                    More detail..
                </a>
                </p>
            



            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft  ">
                <div class="img-content pt-3">
                    <img src="Front/img/services/cataract.jpg" alt="Image" class="img-fluid">
                </div> <!-- /.img-content -->
            </div>

            <hr>
        </div> <!-- /.row -->
        <div class="row justify-content-between" id="se-2">

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                    <img src="Front/img/services/cornealtransplantation.jpg" alt="Image" class="img-fluid">
                </div> <!-- /.img-content -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title">
                    <h2>Corneal transplantation</h2>

                </div>
                <p>Corneal transplantation, also known as corneal grafting, is a surgical procedure to replace a damaged
                    or diseased cornea with a healthy one from a donor. The cornea is the clear, dome-shaped surface at
                    the front of the eye that helps focus light. When it becomes cloudy, scarred, or distorted, it can
                    severely impact vision.
                </p>

                <p>
                <a href="{{route('FrontCornea')}}" class="cta-btn m-0">
                    More detail..
                </a>
                </p>


            </div> <!-- /.text -->


            <hr>

        </div> <!-- /.row -->
        <div class="row justify-content-between" id="se-3">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title">
                    <h2>Refractive surgery</h2>

                </div>
                <p>Refractive surgery encompasses a range of surgical procedures designed to correct vision problems
                    caused by refractive errors, such as nearsightedness (myopia), farsightedness (hyperopia),
                    astigmatism, and presbyopia. These procedures aim to reduce or eliminate the need for glasses or
                    contact lenses by reshaping the cornea or altering the lens of the eye.
                </p>




            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                    <img src="Front/img/services/refractivesurgery.jpg" alt="Image" class="img-fluid">
                </div> <!-- /.img-content -->
            </div>

            <hr>
        </div> <!-- /.row -->
        <div class="row justify-content-between" id="se-4">

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                    <img src="Front/img/services/ocularsurface.jpg" alt="Image" class="img-fluid w-100">
                </div> <!-- /.img-content -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title">
                    <h2>Ocular surface disorders
                    </h2>

                </div>
                <p>Ocular surface disorders encompass a range of conditions that affect the surface of the eye,
                    including the cornea, conjunctiva, and tear film. Treatment varies depending on the specific
                    disorder, its severity, and the underlying causes.
                </p>




            </div> <!-- /.text -->


            <hr>

        </div> <!-- /.row -->
        <div class="row justify-content-between" id="se-5">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text wow fadeInRight align-self-center ">
                <div class="section-title">
                    <h2>
                        Ocular Trauma</h2>

                </div>
                <p>Ocular trauma refers to any injury to the eye or surrounding structures, which can range from minor
                    scratches to severe injuries that may threaten vision. The treatment for ocular trauma depends on
                    the type, severity, and location of the injury.
                </p>




            </div> <!-- /.text -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  wow fadeInLeft">
                <div class="img-content">
                    <img src="Front/img/services/oculartrauma.jpg" alt="Image" class="img-fluid">
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