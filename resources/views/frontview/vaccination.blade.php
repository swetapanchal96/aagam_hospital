


@extends('layouts.front')
@section('opTag')


@section('title', 'Vaccination')

@endsection
@section('content')

<div class="page-content bg-white">
                <!-- Inner Banner -->
                <div class="banner-wraper">
                    <div class="page-banner"
                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">
                        <div class="container">
                            <div class="page-banner-entry text-center">
                                <h1>Vaccination Clinic</h1>
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
                                            aria-current="page">Vaccination Clinic</li>
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
                                    <img src="{{ asset('Front/assets/images/service/vaccination.jpg') }}"
                                        class="rounded img-fluid" alt>
                                </div>
                                <div class="clearfix">
                                    <div class="head-text mb-30">
                                        <h2 class="title mb-15">Vaccination Clinic</h2>
                                        <p class="mb-0">A Vaccination Clinic is a dedicated pediatric service that provides timely and age-appropriate immunizations to protect children from serious and potentially life-threatening infectious diseases. This service follows national and international immunization schedules, ensuring your child receives all essential vaccines from birth through adolescence.
                                        </p>
                                        <p>The clinic not only administers routine vaccines (such as BCG, Hepatitis B, OPV, Pentavalent, MMR, and DPT), but also offers optional and travel-related vaccines based on individual needs. Pediatricians also provide vaccine counseling, track immunization records, and educate parents on possible side effects and post-vaccine care.</p>
                                        <p>Regular visits to the vaccination clinic ensure your child’s immunity is up to date and helps in building long-term protection against preventable diseases in a safe, supportive environment.</p>
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
                                                <li>Missed Vaccination Milestones: Child did not receive scheduled vaccines at birth, 6 weeks, 10 weeks, 14 weeks, etc.</li>
                                                <li>Exposure to Infectious Disease:
                                                    Recent contact with someone who has measles, chickenpox, or hepatitis.</li>
                                                <li> Travel Requirements:
                                                    Child traveling to an area requiring yellow fever, typhoid, meningococcal, or Japanese encephalitis vaccines</li>
                                                <li> School or Daycare Requirements: Admission forms requiring vaccine completion</li>
                                                <li> Fever or Reaction After Previous Vaccination: Prior fever, rash, or swelling post-immunization may need medical review before next dose </li>
                                                <li>Injuries Requiring Tetanus Protection: Cuts, wounds, or animal bites may need tetanus or rabies post-exposure prophylaxis</li>
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
                                                    aria-controls="collapse1">What is a Vaccination Clinic?
                                                </button>
                                            </h2>
                                            <div id="collapse1"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="heading1"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">A Vaccination Clinic is a dedicated healthcare service that provides scheduled immunizations to protect children and adults from infectious diseases. It ensures timely administration of vaccines according to national and international guidelines.</p>

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
                                                    aria-controls="collapse2">Why are vaccines important for children?</button>
                                            </h2>
                                            <div id="collapse2"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading2"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Vaccines protect children from serious, potentially life-threatening illnesses like polio, measles, diphtheria, hepatitis, and pneumonia. They help build lifelong immunity and prevent the spread of contagious diseases.
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
                                                    aria-controls="collapse3"> When should my child start getting vaccinated?</button>
                                            </h2>
                                            <div id="collapse3"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading3"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Vaccination begins at birth with BCG, OPV (Oral Polio Vaccine), and Hepatitis B. Follow-up vaccines are given at 6, 10, and 14 weeks, and continue at regular intervals through childhood and adolescence.</p>
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
                                                    aria-controls="collapse4"> What vaccines are included in the routine immunization schedule?</button>
                                            </h2>
                                            <div id="collapse4"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading4"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Key vaccines include:</p>
                                                    <div class="faq">
                                                        <ul>
                                                            <li>BCG</li>
                                                            <li>Hepatitis B</li>
                                                            <li>OPV/IPV (Polio)</li>
                                                            <li>Pentavalent (DPT, Hepatitis B, Hib)</li>
                                                            <li>Rotavirus</li>
                                                            <li>Pneumococcal</li>
                                                            <li>MMR (Measles, Mumps, Rubella)</li>
                                                            <li>Typhoid</li>
                                                            <li>Tetanus, Diphtheria, Pertussis (booster doses)</li>
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
                                                    aria-controls="collapse5">Are optional or special vaccines available?</button>
                                            </h2>
                                            <div id="collapse5"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading5"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes. Optional vaccines such as Influenza, Chickenpox, Hepatitis A, HPV (for adolescents), and Meningococcal are available based on the child’s age, risk factors, or travel requirements.</p>
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
                                                    aria-controls="collapse6"> Can my child be vaccinated if they have a cold or mild illness?</button>
                                            </h2>
                                            <div id="collapse6"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading6"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Usually, mild illnesses like a common cold or low-grade fever are not a reason to delay vaccination. However, your pediatrician will evaluate your child before administering any vaccine.   </p>
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
                                                    What are common side effects after vaccination?</button>
                                            </h2>
                                            <div id="collapse7"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading7"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Mild side effects include:</p>
                                                    <div class="faq">
                                                        <ul>
                                                            <li>Low-grade fever</li>
                                                            <li>Pain, redness, or swelling at the injection site</li>
                                                            <li>Fussiness or tiredness (in infants) /n These are normal and usually go away within 1–2 days.</li>
                                                        </ul>
                                                    </div>
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
                                                    aria-controls="collapse8">What should I do if my child missed a vaccine dose?</button>
                                            </h2>
                                            <div id="collapse8"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading8"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">If a dose is missed, the vaccination schedule can be safely resumed without restarting the entire series. A catch-up plan will be created by your pediatrician.</p>
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
                                                    aria-controls="collapse9">Is it safe to give multiple vaccines in one visit?</button>
                                            </h2>
                                            <div id="collapse9"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading9"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes. Giving multiple vaccines at the same visit is safe and effective. It reduces the number of visits and ensures timely protection against multiple diseases.</p>
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
                                                    aria-controls="collapse10">Can I get a digital or printed vaccination record for my child?</button>
                                            </h2>
                                            <div id="collapse10"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading10"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes. Most vaccination clinics provide a vaccination card or digital immunization record. This is important for school admissions, travel, or healthcare purposes.</p>
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