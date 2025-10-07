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
    
    <h1>About Dr. Gursimrat Paul Singh</h1>
    <p><a href="#">
        Home
    </a> | About Dr. Gursimrat Paul Singh
    </p>
    
</div>
</section> 
                @include('common.alert')

<!-- About Section -->
<section id="about" class="about section">

<div class="container">

  <div class="row gy-4 gx-5">
  <div class="col-lg-12 text-center section-title">
    <h2>Dr. Gursimrat Paul Singh</h2>
    <h6>McH (Plastic Surgery)</h6>
  </div>
    <div class="col-lg-5 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
      <img src="Front/img/doctors/doctors-1.jpg" class="img-fluid w-100" alt="">
      <div class="ethics-block">
        <h4>Ethics</h4>
        <p>Quality treatment in a transparent environment without any compromise is motto of his practice.</p>  
    </div>
    </div>

    <div class="col-lg-7 content" data-aos="fade-up" data-aos-delay="100">
      <h2>Know Your Doctor</h2>
      
      <ul>
        <li>
        <i class="fa-solid fa-circle-check"></i>
          <p>Dr. Gursimrat Paul Singh did his MBBS from B J Medical college, postgraduation in general surgery from NHL Medical College and Mch in Plastic surgery from SCL Hospital, Ahmedabad.</p></li><li>
          <i class="fa-solid fa-circle-check"></i>
          He has worked as an assistant professor in emergency medicine at civil hospital, Ahmedabad.</p></li><li>
<i class="fa-solid fa-circle-check"></i>
He did his fellowship in hand and microsurgery from Ganga Hospital, Coimbatore, Tamil Nadu.</p></li><li>
<i class="fa-solid fa-circle-check"></i>
He took advanced training in microsurgery (free flap surgery) from Amrita Institute of Medical sciences, Kochi, Kerala.</p></li><li>
<i class="fa-solid fa-circle-check"></i>
He did his fellowship in cosmetic, laser and hair transplantation under Dr. Milan Doshi, Mumbai.</p></li><li>
<i class="fa-solid fa-circle-check"></i>
He is a member of APSI, IAGES, SELSI and IAAPS.</p>
        </li>
        
      </ul>
    </div>

  </div>

</div>
<div class="container py-5">
<h3>Experience</h3>
<h6>
COSMETIC SURGEON</h6>
<p>
He has vast experience in different cosmetic procedures like breast augmentation, breast reduction, rhinoplasty, gynecomastia, liposuction, tummy tuck, botox, fillers and many more.</p>
<hr>
<h6>TRAUMA SURGEON</h6>
<p>
He is passionate about managing complex hand trauma and facial injuries.</p>
<hr>
<h6>
BURNS MANAGEMENT</h6>
<p>
He is expert in treating acute burns and rehabilitation of post burn contractures.</p>
<hr>
<h6>
A- V FISTULA SUGEON</h6>
<p>
He has an experience of performing more than 5000 arteriovenous fistula (AVF) for dialysis patients.</p>

</div>

</section>



@endsection