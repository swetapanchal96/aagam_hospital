


@extends('layouts.front')
@section('opTag')


@section('title', 'Child-growth')

@endsection
@section('content')


<div class="page-content bg-white">
                <!-- Inner Banner -->
                <div class="banner-wraper">
                    <div class="page-banner"
                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">
                        <div class="container">
                            <div class="page-banner-entry text-center">
                                <h1>Child Growth & Development Assessment</h1>
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
                                            aria-current="page">Child Growth & Development Assessment</li>
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
                                    <img src="{{ asset('Front/assets/images/service/child-growth.jpg') }}"
                                        class="rounded img-fluid" alt>
                                </div>
                                <div class="clearfix">
                                    <div class="head-text mb-30">
                                        <h2 class="title mb-15">Child Growth & Development Assessment</h2>
                                        <p class="mb-0">Child Growth & Development Assessment is a vital pediatric service that monitors a child’s physical growth and developmental milestones to ensure they are progressing appropriately for their age. It involves regular evaluation of a child’s height, weight, head circumference, and body mass index (BMI), along with developmental screenings that assess motor skills, language, cognition, and social-emotional behavior.
                                        </p>
                                        <p>This service helps in the early identification of growth disorders, nutritional deficiencies, or developmental delays. If any concerns are detected, timely referrals and interventions can significantly improve outcomes. It also provides reassurance and guidance to parents on supporting their child’s healthy development at each stage.</p>
                                        <p>Ideal for children from birth through adolescence, this assessment plays a key role in preventive child healthcare.</p>
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
                                                <li>Poor Weight Gain or Weight Loss: Weight below expected range for age.Falling percentiles on the growth chart</li>
                                                <li>Short Stature or Height Concerns:
                                                    Height significantly below age norms</li>
                                                <li> Developmental Delays:
                                                    Delayed sitting, crawling, walking, or talking</li>
                                                <li> Speech & Language Concerns: Not babbling by 12 months.No clear words by 18 months</li>
                                                <li>   Abnormal Muscle Tone or Posture: Floppiness (hypotonia) or stiffness (hypertonia) </li>
                                                <li>Poor Eye Contact or Social Interaction: Lack of smiling, pointing, or responding to caregivers</li>
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
                                                    aria-controls="collapse1">What is a Child Growth & Development Assessment?
                                                </button>
                                            </h2>
                                            <div id="collapse1"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="heading1"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">This is a comprehensive evaluation of your child’s physical growth (height, weight, head circumference) and developmental milestones (motor skills, speech, behavior, learning, and social interaction) to ensure age-appropriate progress and identify any concerns early.</p>

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
                                                    aria-controls="collapse2">At what age should my child begin growth and development assessments?</button>
                                            </h2>
                                            <div id="collapse2"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading2"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Assessments typically begin at birth and continue regularly during well-baby visits and annual checkups. Key evaluation ages include:
                                                    </p>
                                                    <div class="faq">
                                                        <ul>
                                                            <li>Birth to 2 years: every 2–3 months</li>
                                                            <li>Ages 2–5: every 6 months</li>
                                                            <li>After 5 years: annually or as needed</li>
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
                                                    aria-controls="collapse3"> What does the doctor check during a developmental assessment?</button>
                                            </h2>
                                            <div id="collapse3"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading3"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">The pediatrician will observe your child’s gross motor skills (like sitting, walking), fine motor skills (like grasping), language abilities, cognitive skills (problem-solving), and social-emotional behaviors based on standardized developmental checklists.</p>
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
                                                    aria-controls="collapse4"> How do I know if my child is growing normally?</button>
                                            </h2>
                                            <div id="collapse4"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading4"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Your child’s height, weight, and BMI are plotted on growth charts to compare them with peers of the same age and gender. Consistent growth along a percentile curve typically indicates healthy development.</p>
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
                                                    aria-controls="collapse5">What are the signs of a developmental delay?</button>
                                            </h2>
                                            <div id="collapse5"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading5"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Delays may include not sitting by 8 months, not walking by 18 months, no meaningful words by 2 years, poor social interaction, or difficulty following commands. If such signs are present, a developmental screening is recommended.</p>
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
                                                    aria-controls="collapse6"> Can growth assessments detect nutritional deficiencies?</button>
                                            </h2>
                                            <div id="collapse6"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading6"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes. Poor weight gain, stunted height, or abnormal BMI may suggest undernutrition or vitamin/mineral deficiencies (e.g., iron, vitamin D), which can be confirmed through lab tests and addressed through dietary guidance.   </p>
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
                                                    What happens if a delay or concern is identified?</button>
                                            </h2>
                                            <div id="collapse7"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading7"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">If a delay or disorder is suspected, your pediatrician may refer your child to a specialist such as a speech therapist, physiotherapist, occupational therapist, developmental pediatrician, or endocrinologist depending on the issue.

                                                    </p>
                                                    
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
                                                    aria-controls="collapse8">Are these assessments painful or invasive for children?</button>
                                            </h2>
                                            <div id="collapse8"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading8"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">No. Most assessments are observation-based, involve gentle physical examination, growth measurements, and parent interviews. If needed, simple blood or imaging tests may be recommended separately.</p>
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
                                                    aria-controls="collapse9">Can I ask questions about my child’s behavior or learning during the visit?</button>
                                            </h2>
                                            <div id="collapse9"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading9"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Absolutely. These checkups are the right time to raise concerns about tantrums, attention issues, learning difficulties, social behavior, or sleep patterns.</p>
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
                                                    aria-controls="collapse10">Is this service covered during routine pediatric visits?</button>
                                            </h2>
                                            <div id="collapse10"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading10"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes, growth and development assessments are typically included in routine well-baby or annual pediatric checkups. However, more detailed screenings or referrals may involve separate appointments or services.</p>
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