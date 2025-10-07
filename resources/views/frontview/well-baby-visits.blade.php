@extends('layouts.front')
@section('opTag')


@section('title', 'Well-baby-visits')

@endsection
@section('content')


            <div class="page-content bg-white">
                <!-- Inner Banner -->
                <div class="banner-wraper">
                    <div class="page-banner"
                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">
                        <div class="container">
                            <div class="page-banner-entry text-center">
                                <h1>Well-Baby Clinic / Routine Checkups</h1>
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
                                            aria-current="page">Well-Baby Clinic / Routine Checkups</li>
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
                                    <img src="{{ asset('Front/assets/images/service/well-baby.jpg') }}"
                                        class="rounded img-fluid" alt>
                                </div>
                                <div class="clearfix">
                                    <div class="head-text mb-30">
                                        <h2 class="title mb-15">Well-Baby Clinic / Routine Checkups</h2>
                                        <p class="mb-0">The Well-Baby Clinic, also known as Routine Pediatric Checkups, is a preventive healthcare service designed to monitor a child’s health, growth, and development at regular intervals from birth to early childhood. These visits are not just for when your baby is sick—they are critical for early detection of health issues, administering timely vaccinations, and guiding parents on proper care during each stage of infancy and early childhood.
                                        </p>
                                        
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-12 mb-30">
                                            <ul class="list-check-squer mb-0">
                                                <li>Ensure babies are growing and developing normally.</li>
                                                <li>Identify and address any medical or developmental concerns early.</li>
                                                <li>Provide timely immunizations.</li>
                                                <li>Educate and support parents on nutrition, safety, hygiene, and parenting.</li>
                                                <li> Build a long-term relationship with your pediatrician</li>
                                            </ul>
                                        </div>
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
                                                <li>Poor Weight Gain or Weight Loss: Baby not gaining weight according to standard growth charts.</li>
                                                <li>Developmental Delays:
                                                    Delay in rolling over, sitting, crawling, walking, or speaking.</li>
                                                <li> Abnormal Muscle Tone or Movement:
                                                    Stiff or floppy limbs.</li>
                                                <li> Feeding Difficulties: Refusing breast or bottle.Frequent vomiting or spit-up (possible reflux)</li>
                                                <li>  Excessive Sleepiness or Low Activity: Baby sleeping through feedings or hard to wake. </li>
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
                                                    aria-controls="collapse1">What is a Well-Baby Clinic or routine checkup?
                                                </button>
                                            </h2>
                                            <div id="collapse1"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="heading1"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">A Well-Baby Clinic is a pediatric service where infants and young children receive regular health evaluations, vaccinations, and developmental screenings. These visits are designed to track your child’s growth and development, even when they are not sick.</p>

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
                                                    aria-controls="collapse2">Why are routine checkups important for babies?</button>
                                            </h2>
                                            <div id="collapse2"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading2"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Routine checkups help detect potential health, growth, or developmental problems early. They also ensure that your child is receiving the right vaccinations at the right time and give parents a chance to ask questions or discuss concerns.
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
                                                    aria-controls="collapse3"> How often should my baby visit the Well-Baby Clinic?</button>
                                            </h2>
                                            <div id="collapse3"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading3"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Visit schedules may vary slightly, but typically include visits at:</p>
                                                    <div class="faq">
                                                        <ul>
                                                            <li>Birth (in-hospital)</li>
                                                            <li>3–5 days after birth</li>
                                                            <li>6 weeks</li>
                                                            <li>10 weeks</li>
                                                            <li>14 weeks</li>
                                                            <li>6 months</li>
                                                            <li>9 months</li>
                                                            <li>12 months</li>
                                                            <li>15-18 months</li>
                                                            <li>2 years</li>
                                                            <li>Annually after 2 years</li>
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
                                                    aria-controls="collapse4"> What happens during a routine checkup?</button>
                                            </h2>
                                            <div id="collapse4"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading4"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Your pediatrician will check your baby’s height, weight, and head size, assess developmental milestones, administer vaccinations if due, review feeding and nutrition, and offer guidance on sleep, behavior, and safety.</p>
                                                    
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
                                                    aria-controls="collapse5">What if my baby seems healthy—do I still need checkups?</button>
                                            </h2>
                                            <div id="collapse5"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading5"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes. Even healthy babies need regular monitoring to ensure proper growth, development, and vaccination. Many health conditions in children do not show visible symptoms in early stages.</p>
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
                                                    aria-controls="collapse6"> What vaccinations are given during routine visits?</button>
                                            </h2>
                                            <div id="collapse6"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading6"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Routine vaccinations include BCG, Hepatitis B, OPV, Pentavalent, MMR, Rotavirus, Pneumococcal, and others based on national immunization guidelines. Your pediatrician will maintain a schedule and guide you on optional vaccines.</p>
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
                                                    What should I bring to a well-baby appointment?</button>
                                            </h2>
                                            <div id="collapse7"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading7"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Bring your child’s vaccination record/card, a list of questions or concerns, previous medical reports (if any), and the child’s usual feeding or diapering schedule if needed.</p>
                                                    
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
                                                    aria-controls="collapse8">Can I ask questions about sleep, feeding, or behavior during these visits?</button>
                                            </h2>
                                            <div id="collapse8"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading8"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Absolutely. Well-baby checkups are the perfect time to discuss concerns about feeding, sleeping patterns, crying, weaning, teething, toilet training, or behavior.</p>
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
                                                    aria-controls="collapse9">What are common signs that a child may need additional evaluation?</button>
                                            </h2>
                                            <div id="collapse9"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading9"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">During checkups, your pediatrician looks for signs like poor weight gain, missed developmental milestones, abnormal muscle tone, poor eye contact, or hearing issues. If any are noticed, early referrals may be made.</p>
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
                                                    aria-controls="collapse10">Can we do Well-Baby checkups through online consultations?</button>
                                            </h2>
                                            <div id="collapse10"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading10"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Some follow-ups or parental counseling may be done online. However, physical examination, growth measurement, and vaccinations require an in-person visit.</p>
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