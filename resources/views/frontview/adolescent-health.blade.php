


@extends('layouts.front')
@section('opTag')


@section('title', 'Adolescent-health')

@endsection
@section('content')

 <div class="page-content bg-white">
                <!-- Inner Banner -->
                <div class="banner-wraper">
                    <div class="page-banner"
                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">
                        <div class="container">
                            <div class="page-banner-entry text-center">
                                <h1>Adolescent Health Checkups</h1>
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
                                            aria-current="page">Adolescent Health Checkups</li>
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
                                    <img src="{{ asset('Front/assets/images/service/adolescent.jpg') }}"
                                        class="rounded img-fluid" alt>
                                </div>
                                <div class="clearfix">
                                    <div class="head-text mb-30">
                                        <h2 class="title mb-15">Adolescent Health Checkups</h2>
                                        <p class="mb-0">Adolescent Health Checkups are comprehensive medical evaluations tailored to the unique physical, emotional, and developmental needs of teenagers (typically ages 10–19). These checkups help monitor growth, puberty progression, mental well-being, and lifestyle habits during this critical transition from childhood to adulthood.
                                        </p>
                                        <p>The service includes physical exams, screening for common adolescent health concerns (such as acne, anemia, obesity, and menstrual irregularities), immunization updates, and confidential counseling on topics like nutrition, substance use, peer pressure, body image, emotional stress, and sexual health. It also offers a safe space for teens to discuss personal concerns privately with a healthcare provider. </p>
                                        <p>These regular checkups ensure early detection of health issues, reinforce positive behaviors, and promote long-term well-being during adolescence.</p>
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
                                                <li>Sudden Weight Gain or Loss: Unexplained changes in weight may signal hormonal imbalances, disordered eating, or underlying illness.</li>
                                                <li>Irregular or Painful Menstrual Cycles (for females):
                                                    Irregularity, severe cramps, missed periods, or early/late onset of menstruation.</li>
                                                <li>  Mood Swings or Behavioral Changes:
                                                    Persistent sadness, irritability, withdrawal, anxiety, or aggression.</li>
                                                <li> Decline in Academic Performance or Concentration:  Could point to stress, sleep issues, attention deficit, or emotional challenges.</li>
                                                <li> Fatigue or Low Energy: May be caused by anemia, poor diet, hormonal issues, or depression.</li>
                                                <li> Acne or Skin Problems: Persistent or severe acne, eczema, or skin infections that impact self-esteem.</li>
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
                                                    aria-controls="collapse1">What is an adolescent health checkup?
                                                </button>
                                            </h2>
                                            <div id="collapse1"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="heading1"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">An adolescent health checkup is a comprehensive medical evaluation designed to monitor a teenager's physical, emotional, and developmental well-being. It covers everything from growth and puberty to mental health, nutrition, and lifestyle counseling.</p>

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
                                                    aria-controls="collapse2">At what age should adolescents start getting regular checkups?</button>
                                            </h2>
                                            <div id="collapse2"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading2"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Regular adolescent checkups are recommended from ages 10 to 19. Annual visits help track changes and address emerging health or behavioral concerns early.
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
                                                    aria-controls="collapse3"> What does the doctor evaluate during a teen checkup?</button>
                                            </h2>
                                            <div id="collapse3"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading3"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">The pediatrician or adolescent specialist will typically assess:</p>
                                                    <div class="faq">
                                                        <ul>
                                                            <li>Height, weight, and BMI</li>
                                                            <li>Puberty and hormonal development</li>
                                                            <li>Vision and hearing</li>
                                                            <li>Mental and emotional health</li>
                                                            <li>Eating and sleep habits</li>
                                                            <li>Sexual health (if applicable)</li>
                                                            <li>Skin issues (acne, rashes, etc.)</li>
                                                            <li>Immunization status</li>
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
                                                    aria-controls="collapse4"> Is the checkup confidential for teens?</button>
                                            </h2>
                                            <div id="collapse4"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading4"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes. Doctors encourage open conversations in a confidential setting, especially for topics like mental health, sexuality, substance use, and peer pressure. Parents may be asked to step out briefly during part of the visit.</p>
                                                    
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
                                                    aria-controls="collapse5">Why are these checkups important if my teen seems healthy?</button>
                                            </h2>
                                            <div id="collapse5"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading5"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Adolescents go through rapid physical and emotional changes. Regular checkups can detect hidden concerns like anemia, eating disorders, depression, or growth issues and promote healthy habits before problems develop.</p>
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
                                                    aria-controls="collapse6"> Can the doctor help with academic stress or anxiety?</button>
                                            </h2>
                                            <div id="collapse6"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading6"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Absolutely. Adolescent checkups often include screening for stress, anxiety, depression, and learning challenges. The doctor can offer support, counseling, or referrals if needed.</p>
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
                                                    Will the doctor discuss puberty and sexual health?</button>
                                            </h2>
                                            <div id="collapse7"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading7"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes, if appropriate. Teens may be counseled on puberty changes, menstrual health, personal hygiene, safe practices, and reproductive health, depending on their age and comfort.</p>
                                                    
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
                                                    aria-controls="collapse8">Are vaccines given during adolescent visits?</button>
                                            </h2>
                                            <div id="collapse8"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading8"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes. Vaccines like HPV, Tdap, MMR boosters, and influenza are commonly updated during teen checkups, depending on age and vaccination history.</p>
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
                                                    aria-controls="collapse9">What if my teen doesn’t want to talk during the visit?</button>
                                            </h2>
                                            <div id="collapse9"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading9"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">That’s normal. Doctors are trained to communicate with teens in a nonjudgmental and approachable manner to build trust. Over time, most adolescents open up when given privacy and respect.</p>
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
                                                    aria-controls="collapse10">How can I prepare my teen for the checkup?</button>
                                            </h2>
                                            <div id="collapse10"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading10"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Let them know it’s a routine visit and reassure them it’s a safe space to discuss anything. Encourage them to write down any questions or concerns beforehand.</p>
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