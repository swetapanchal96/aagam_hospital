

@extends('layouts.front')

@section('opTag')





@section('title', 'Nutrition')



@endsection

@section('content')



<div class="page-content bg-white">

                <!-- Inner Banner -->

                <div class="banner-wraper">

                    <div class="page-banner"

                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">

                        <div class="container">

                            <div class="page-banner-entry text-center">

                                <h1>Nutrition & Feeding Advice</h1>

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

                                            aria-current="page">Nutrition & Feeding Advice</li>

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

                                    <img src="{{ asset('Front/assets/images/service/nutrition.jpg') }}"

                                        class="rounded img-fluid" alt>

                                </div>

                                <div class="clearfix">

                                    <div class="head-text mb-30">

                                        <h2 class="title mb-15">Nutrition & Feeding Advice</h2>

                                        <p class="mb-0">The Nutrition & Feeding Advice service provides personalized dietary guidance to support the healthy growth and development of infants, toddlers, and children. Pediatricians and nutrition experts help parents understand age-appropriate feeding practices—from breastfeeding and weaning to introducing solids and managing picky eating habits.

                                        </p>

                                        <p>This service covers optimal nutrition during critical growth periods, prevention of nutritional deficiencies (like iron or vitamin D), and healthy weight management. It also addresses special dietary needs for children with food allergies, digestive issues, or chronic conditions.By promoting balanced meals and healthy eating behaviors early on, this service empowers parents to lay a strong nutritional foundation for their child's lifelong health and well-being.</p>

                                        

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

                                                <li>Poor Appetite or Refusal to Eat: Child frequently skips meals or eats very little.</li>

                                                <li>Inadequate Weight Gain or Weight Loss:

                                                    Falling below expected growth percentiles.</li>

                                                <li> Excessive Weight Gain or Obesity:

                                                    Rapid weight gain or BMI above normal range for age.</li>

                                                <li> Frequent Vomiting or Reflux: Recurrent spitting up after meals in infants.</li>

                                                <li> Constipation or Diarrhea: Irregular bowel habits or hard stools due to poor fiber intake. </li>

                                                

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

                                                    aria-controls="collapse1">What is the Nutrition & Feeding Advice service?

                                                </button>

                                            </h2>

                                            <div id="collapse1"

                                                class="accordion-collapse collapse show"

                                                aria-labelledby="heading1"

                                                data-bs-parent="#accordionRow1">

                                                <div class="accordion-body">

                                                    <p class="mb-0">This service provides expert pediatric guidance on infant and child nutrition, covering topics such as breastfeeding, formula feeding, weaning, solid food introduction, and balanced diet planning. It helps ensure children receive the right nutrients for healthy growth and development.</p>



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

                                                    aria-controls="collapse2">When should I seek nutrition advice for my child?</button>

                                            </h2>

                                            <div id="collapse2"

                                                class="accordion-collapse collapse"

                                                aria-labelledby="heading2"

                                                data-bs-parent="#accordionRow1">

                                                <div class="accordion-body">

                                                    <p class="mb-0">You should consult a pediatric nutrition expert if your child:

                                                    </p>

                                                    <div class="faq">

                                                        <ul>

                                                            <li>Is underweight or overweight</li>

                                                            <li>Refuses to eat certain food groups</li>

                                                            <li>Has digestive issues like constipation or diarrhea</li>

                                                            <li>Has suspected food allergies or intolerances</li>

                                                            <li>Is not gaining weight or height as expected</li>

                                                        </ul>

                                                    </div>

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

                                                    aria-controls="collapse3"> What age groups are covered by this service?</button>

                                            </h2>

                                            <div id="collapse3"

                                                class="accordion-collapse collapse"

                                                aria-labelledby="heading3"

                                                data-bs-parent="#accordionRow1">

                                                <div class="accordion-body">

                                                    <p class="mb-0">Nutrition advice is available for all pediatric age groups:</p>

                                                    <div class="faq">

                                                        <ul>

                                                            <li>Newborns (0–6 months)</li>

                                                            <li>Infants (6 months–1 year)</li>

                                                            <li>Toddlers and preschoolers (1–5 years)</li>

                                                            <li>School-age children and adolescents (5–18 years)</li>

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

                                                    aria-controls="collapse4"> Do you provide meal plans or diet charts?</button>

                                            </h2>

                                            <div id="collapse4"

                                                class="accordion-collapse collapse"

                                                aria-labelledby="heading4"

                                                data-bs-parent="#accordionRow1">

                                                <div class="accordion-body">

                                                    <p class="mb-0">Yes. Based on your child's age, weight, health condition, and preferences, pediatricians or nutritionists can provide personalized diet charts, sample meal plans, and portion recommendations.</p>

                                                    

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

                                                    aria-controls="collapse5">Can I get help with breastfeeding and weaning?</button>

                                            </h2>

                                            <div id="collapse5"

                                                class="accordion-collapse collapse"

                                                aria-labelledby="heading5"

                                                data-bs-parent="#accordionRow1">

                                                <div class="accordion-body">

                                                    <p class="mb-0">Absolutely. Our experts offer breastfeeding support, assess latch and feeding issues, and guide you on when and how to introduce solids (weaning) safely and effectively.</p>

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

                                                    aria-controls="collapse6"> What if my child is a picky eater?</button>

                                            </h2>

                                            <div id="collapse6"

                                                class="accordion-collapse collapse"

                                                aria-labelledby="heading6"

                                                data-bs-parent="#accordionRow1">

                                                <div class="accordion-body">

                                                    <p class="mb-0">Picky eating is common, but with structured approaches, children can learn to accept a wider range of foods. We offer behavioral and nutritional strategies to reduce mealtime struggles and promote variety.</p>

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

                                                    Are food allergies managed in this clinic?</button>

                                            </h2>

                                            <div id="collapse7"

                                                class="accordion-collapse collapse"

                                                aria-labelledby="heading7"

                                                data-bs-parent="#accordionRow1">

                                                <div class="accordion-body">

                                                    <p class="mb-0">Yes. If food allergies or intolerances are suspected, our team can help identify triggers, recommend elimination diets, and ensure your child still receives balanced nutrition.</p>

                                                    

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

                                                    aria-controls="collapse8">Can you help with vegetarian or vegan diets for children?</button>

                                            </h2>

                                            <div id="collapse8"

                                                class="accordion-collapse collapse"

                                                aria-labelledby="heading8"

                                                data-bs-parent="#accordionRow1">

                                                <div class="accordion-body">

                                                    <p class="mb-0">Yes. We provide balanced plant-based nutrition plans for families following vegetarian or vegan lifestyles, ensuring all essential nutrients (like protein, iron, calcium, and B12) are covered.</p>

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

                                                    aria-controls="collapse9">How often should I consult for feeding advice?</button>

                                            </h2>

                                            <div id="collapse9"

                                                class="accordion-collapse collapse"

                                                aria-labelledby="heading9"

                                                data-bs-parent="#accordionRow1">

                                                <div class="accordion-body">

                                                    <p class="mb-0">Consultations may be done during routine checkups or as needed—especially during transitions like starting solids, growth spurts, or when symptoms (e.g., weight concerns or poor appetite) arise.</p>

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

                                                    aria-controls="collapse10">Is this service available online or in person?</button>

                                            </h2>

                                            <div id="collapse10"

                                                class="accordion-collapse collapse"

                                                aria-labelledby="heading10"

                                                data-bs-parent="#accordionRow1">

                                                <div class="accordion-body">

                                                    <p class="mb-0">Many clinics offer both options. You can visit in person or opt for teleconsultations depending on the clinic’s setup and your convenience.</p>

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