


@extends('layouts.front')
@section('opTag')


@section('title', 'School-physical')

@endsection
@section('content')

<div class="page-content bg-white">
                <!-- Inner Banner -->
                <div class="banner-wraper">
                    <div class="page-banner"
                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">
                        <div class="container">
                            <div class="page-banner-entry text-center">
                                <h1>School Physical & Fitness Certificates</h1>
                                <!-- Breadcrumb row -->
                                <nav aria-label="breadcrumb"
                                    class="breadcrumb-row">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a
                                                href="{{ route('FrontIndex') }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="22" height="22"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-home"><path
                                                        d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline
                                                        points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                Home</a></li>
                                        <li class="breadcrumb-item active"
                                            aria-current="page">School Physical & Fitness Certificates</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <img class="pt-img1 animate-wave"
                            src="{{ asset('Front/assets/images/shap/wave-blue.png') }}" alt>
                        <img class="pt-img2 animate2"
                            src="{{ asset('Front/assets/images/shap/circle-dots.png') }}" alt>
                        <img class="pt-img3 animate-rotate"
                            src="{{ asset('Front/assets/images/shap/plus-blue.png') }}" alt>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
                <!-- Inner Banner end -->

                <!-- About us -->
                <section class="section-area section-sp1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mb-30">
                                <div class="ttr-media mb-30">
                                    <img src="{{ asset('Front/assets/images/service/school-physical.jpg') }}"
                                        class="rounded img-fluid" alt>
                                </div>
                                <div class="clearfix">
                                    <div class="head-text mb-30">
                                        <h2 class="title mb-15">School Physical & Fitness Certificates</h2>
                                        <p class="mb-0">School Physicals & Fitness Certificates are routine health checkups performed by pediatricians to ensure that children are physically fit and medically cleared for school enrollment, sports participation, and extracurricular activities. These evaluations help identify any health concerns early, verify immunization records, and assess a child's physical development, vision, hearing, and overall fitness.
                                        </p>
                                        <p>This service is often required by schools before admission, participation in athletic events, field trips, or after recovery from a major illness. The goal is to ensure that each child is healthy, developmentally on track, and able to safely engage in school activities.</p>
                                        
                                    </div>
                                </div>
                                <!-- symptoms start -->
                                <div class>
                                    <h4 class="title">Symptoms of Newborn Care &
                                        Consultation</h4>
                                    <!-- <p>An ACL tear usually presents with the following symptoms:</p> -->
                                    <div class="row align-items-center">
                                        <div class="col-md-12 mb-30">
                                            <ul class="list-check-squer mb-0">
                                                <li>Participation in Sports or Athletics: Child plans to join school sports teams or physical education activities.</li>
                                                <li>Admission to a New School or Grade:
                                                    Physical exam required as part of school enrollment.</li>
                                                <li> Recent Recovery from Illness or Injury:
                                                    Returning to school after surgery, hospitalization, or a serious condition.</li>
                                                <li> Unexplained Fatigue or Low Stamina:  Child complains of tiredness during school or physical activities.</li>
                                                <li> Behavioral or Learning Concerns: To rule out hearing, vision, or neurological issues affecting learning. </li>
                                                <li> Incomplete Vaccination Records: School requires up-to-date immunization status.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- symptoms end-->

                                <div class="clearfix">
                                    <div class="head-text mb-30">
                                        <h4 class="title mb-10">Popular
                                            Questions</h4>
                                    </div>
                                    <div class="accordion ttr-accordion1"
                                        id="accordionRow1">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"
                                                id="heading1">
                                                <button class="accordion-button"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse1"
                                                    aria-expanded="true"
                                                    aria-controls="collapse1">What is a school physical?
                                                </button>
                                            </h2>
                                            <div id="collapse1"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="heading1"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">A school physical is a routine health checkup performed by a pediatrician to assess a child’s overall health, growth, development, and fitness for school activities, including academics, sports, and extracurricular programs.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"
                                                id="heading2">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse2"
                                                    aria-expanded="false"
                                                    aria-controls="collapse2">Why does my child need a fitness certificate?</button>
                                            </h2>
                                            <div id="collapse2"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading2"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Many schools require a fitness certificate to ensure that students are medically fit to attend classes, participate in physical education, or join athletic activities. It helps safeguard children's health and promotes early detection of potential concerns.
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"
                                                id="heading3">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse3"
                                                    aria-expanded="false"
                                                    aria-controls="collapse3"> When should my child have a school physical?</button>
                                            </h2>
                                            <div id="collapse3"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading3"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Typically, children need a physical:</p>
                                                    <div class="faq">
                                                        <ul>
                                                            <li>At the time of school admission.</li>
                                                            <li>Annually, as required by some institutions.</li>
                                                            <li>Before participating in sports, camps, or field trips.</li>
                                                            <li>After recovery from a serious illness or surgery.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"
                                                id="heading4">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse4"
                                                    aria-expanded="false"
                                                    aria-controls="collapse4"> What does the physical examination include?</button>
                                            </h2>
                                            <div id="collapse4"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading4"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">A school physical usually includes:</p>
                                                    <div class="faq">
                                                        <ul>
                                                            <li>Height, weight, and BMI check.</li>
                                                            <li>Vision and hearing screening</li>
                                                            <li>Vital signs (blood pressure, heart rate, etc.)</li>
                                                            <li>Musculoskeletal and neurological assessment</li>
                                                            <li>Review of immunizations and medical history</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"
                                                id="heading5">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse5"
                                                    aria-expanded="false"
                                                    aria-controls="collapse5">Does the doctor check for learning or developmental delays?</button>
                                            </h2>
                                            <div id="collapse5"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading5"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes, pediatricians may screen for signs of developmental, behavioral, or learning issues and refer for further evaluation if needed. Vision and hearing assessments also help rule out common learning obstacles.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"
                                                id="heading6">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse6"
                                                    aria-expanded="false"
                                                    aria-controls="collapse6"> How long is a school fitness certificate valid?</button>
                                            </h2>
                                            <div id="collapse6"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading6"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">The validity of the certificate depends on school guidelines. Typically, it remains valid for 6 to 12 months unless there is a major change in the child’s health condition.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"
                                                id="heading7">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse7"
                                                    aria-expanded="false"
                                                    aria-controls="collapse7">
                                                    Can I get the physical done during a routine checkup?</button>
                                            </h2>
                                            <div id="collapse7"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading7"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes. Many parents choose to combine the school physical with a regular well-child visit, which includes all necessary health evaluations and updates.</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"
                                                id="heading8">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse8"
                                                    aria-expanded="false"
                                                    aria-controls="collapse8">Is vaccination review part of the school physical?</button>
                                            </h2>
                                            <div id="collapse8"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading8"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Absolutely. The pediatrician will check your child's immunization status and administer any pending vaccines as per the national immunization schedule or school requirements.                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"
                                                id="heading9">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse9"
                                                    aria-expanded="false"
                                                    aria-controls="collapse9">Will my child need lab tests during the physical?</button>
                                            </h2>
                                            <div id="collapse9"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading9"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Routine lab tests are not typically required, unless there are specific symptoms or risk factors. If needed, the doctor will recommend them during the visit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"
                                                id="heading10">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse10"
                                                    aria-expanded="false"
                                                    aria-controls="collapse10">Can this be done as a telehealth consultation?</button>
                                            </h2>
                                            <div id="collapse10"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading10"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Some aspects (like medical history review) can be done online, but the full physical examination and certification require an in-person visit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <aside class="sticky-top pb-1">
                                    <div class="widget">
                                        <ul class="service-menu">
                                            <h2 class="text-center">Pediatric Services</h2>
                                            <li class="active"><a
                                                    href="{{ route('FrontNewborncare') }}"><span><i
                                                        class="fa fa-angle-right"></i> Newborn
                                                        Care &
                                                        Consultation</span> 
                                                </a></li>
                                            <li><a
                                                    href="{{ route('FrontWellbabyvisits') }}"><span><i
                                                        class="fa fa-angle-right"></i> Well-Baby
                                                        clinic / Routine
                                                        Checkups</span> </a></li>
                                            <li><a
                                                    href="{{ route('FrontChildgrowth') }}"><span><i
                                                        class="fa fa-angle-right"></i> Child
                                                        Growth & Development
                                                        Assessment</span> </a></li>
                                            <li><a
                                                    href="{{ route('FrontVaccination') }}"><span><i
                                                        class="fa fa-angle-right"></i> Vaccination
                                                        clinic</span> </a></li>
                                            <li><a
                                                    href="{{ route('FrontNutrition') }}"><span><i
                                                        class="fa fa-angle-right"></i> Nutrition
                                                        & Feeding Advice</span>
                                                    </a></li>
                                            <li><a
                                                    href="{{ route('FrontSchoolphysical') }}"><span><i
                                                        class="fa fa-angle-right"></i> School
                                                        Physical & Fitness
                                                        Certificates</span> </a></li>
                                            <li><a
                                                    href="{{ route('FrontAdolescenthealth') }}"><span><i
                                                        class="fa fa-angle-right"></i> Adolescent
                                                        Health Checkups</span>
                                                    </a></li>

                                        </ul>
                                    </div>

                                </aside>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-area section-sp1 blog-area"
                style="background-image: url({{ asset('images/background/line-bg2.png') }}); background-position: center; background-size: cover;">
                <div class="container">
                    <div class="heading-bx text-center">
                        <h6 class="title-ext text-secondary">Latest News</h6>
                        <h2 class="title">Our Latest News</h2>
                    </div>
                    <div class="swiper-container blog-slide">
                        <div class="swiper-wrapper">
                            @if($blogs->count())
                                @foreach($blogs as $blog)
                                    <div class="swiper-slide">
                                        <div class="blog-card">
                                            <div class="post-media">
                                                <a href="{{ url('blog-details/' . $blog->blog_slug) }}">
                                                    <img src="{{ asset('Blog/' . $blog->blogImage) }}" alt="{{ $blog->blogTitle }}">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <ul class="post-meta">
                                                    <li class="date">
                                                        <i class="far fa-calendar-alt"></i>
                                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}
                                                    </li>
                                                </ul>
                                                <h4 class="post-title" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                                            <a href="{{ url('blog-details/' . $blog->blog_slug) }}">
                                                                {{ $blog->blogTitle }}
                                                            </a>
                                                        </h4>
                                                <a href="{{ url('blog-details/' . $blog->blog_slug) }}" class="btn btn-outline-primary btn-sm">
                                                    Read More <i class="btn-icon-bx fas fa-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No blog posts found.</p>
                            @endif
                        </div>
                    </div>
                </div>
                <img class="pt-img1 animate1" src="{{ asset('Front/assets/images/shap/trangle-orange.png') }}" alt>
                <img class="pt-img2 animate2" src="{{ asset('Front/assets/images/shap/square-dots-orange.png') }}" alt>
                <img class="pt-img3 animate-rotate" src="{{ asset('Front/assets/images/shap/line-circle-blue.png') }}" alt>
                <img class="pt-img4 animate-wave" src="{{ asset('Front/assets/images/shap/wave-blue.png') }}" alt>
            </section>
            </div>


@endsection