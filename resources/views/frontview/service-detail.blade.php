@extends('layouts.front')
@section('opTag')


@section('title', 'cartilage-surgery')

@endsection
@section('content')

<div class="page-content bg-white">

    <!-- Inner Banner -->
    <div class="banner-wraper">
        <div class="page-banner"
            style="background-image:url(/Front/assets/images/banner/img1.jpg);">
            <div class="container">
                <div class="page-banner-entry text-center">
                    <h1>{{ $service->serviceName }}</h1>
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
                                        class="feather feather-home">
                                        <path
                                            d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline
                                            points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                    Home</a></li>
                            <li class="breadcrumb-item active"
                                aria-current="page">{{ $service->serviceName }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--<img class="pt-img1 animate-wave"-->
            <!--    src="{{ asset('Front/assets/images/shap/wave-blue.png') }}" alt>-->
            <!--<img class="pt-img2 animate2"-->
            <!--    src="{{ asset('Front/assets/images/shap/circle-dots.png') }}" alt>-->
            <!--<img class="pt-img3 animate-rotate"-->
            <!--    src="{{ asset('Front/assets/images/shap/plus-blue.png') }}" alt>-->
        </div>
        <!-- Breadcrumb row END -->
    </div>
    <!-- Inner Banner end -->

    <!-- About us -->
    <section class="section-area section-sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mb-30">
                    <div class="ttr-media mb-30">
                        <img src="{{ asset('/Services/' . $service->serviceImage) }}" class="rounded" alt>
                    </div>
                    <div class="clearfix">
                        <div class="head-text mb-30">
                            <h2 class="title mb-15">{{ $service->serviceName }}</h2>
                            <p class="mb-0">{!! $service->serviceDescription !!}</p>
                        </div>

                        <!-- <div class="head-text mb-30">
                                        <h2 class="title mb-15">Cartilage
                                            Surgery</h2>
                                        <p class="mb-0">Cartilage surgery is
                                            performed to repair or replace
                                            damaged cartilage in joints,
                                            particularly in the knee, hip, and
                                            shoulder. Cartilage, a smooth,
                                            rubber-like tissue, covers the ends
                                            of bones in joints and allows for
                                            smooth movement. Unlike other
                                            tissues, cartilage lacks a direct
                                            blood supply, making it difficult to
                                            heal on its own when injured or worn
                                            down. Cartilage damage can lead to
                                            pain, joint stiffness, and impaired
                                            mobility, and may eventually
                                            progress to osteoarthritis if left
                                            untreated. </p>
                                    </div> -->

                    </div>
                    <!-- symptoms start -->
                    <!-- <div class>
                                    <h4 class="title">Symptoms of Cartilage
                                        Surgery</h4>
                                    <p>Cartilage damage often presents the
                                        following symptoms:</p>
                                    <div class="row align-items-center">
                                        <div class="col-md-12 mb-30">
                                            <ul class="list-check-squer mb-0">
                                                <li>Pain in the joint:
                                                    Particularly during
                                                    weight-bearing
                                                    activities.</li>
                                                <li>Swelling: This can develop
                                                    around the affected joint
                                                    due to inflammation.</li>
                                                <li>Stiffness and reduced range
                                                    of motion: Difficulty in
                                                    fully moving the joint.</li>
                                                <li>Joint instability: The joint
                                                    may feel like it’s locking
                                                    or giving way.</li>
                                                <li>Clicking or grinding
                                                    sensation: This occurs due
                                                    to the uneven surfaces
                                                    rubbing together in the
                                                    joint.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                    <!-- symptoms end-->
                    <div class="clearfix">
                        <div class="head-text mb-30">
                            @if($service->faqs)
                            <h4 class="title mb-10">Popular
                                Questions</h4>
                        </div>
                        <div class="accordion ttr-accordion1"
                            id="accordionRow1">
                            @foreach(json_decode($service->faqs) as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}"
                                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}">
                                    <div class="accordion-body">
                                        <p class="mb-0">{!! $faq->answer !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif

                        <!-- <div class="accordion-item">
                                            <h2 class="accordion-header"
                                                id="heading1">
                                                <button class="accordion-button"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse1"
                                                    aria-expanded="true"
                                                    aria-controls="collapse1">What
                                                    is Cartilage
                                                    Surgery?</button>
                                            </h2>
                                            <div id="collapse1"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="heading1"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0"> Cartilage
                                                        surgery repairs or
                                                        restores damaged joint
                                                        cartilage, often in the
                                                        knee, to reduce pain and
                                                        improve mobility.</p>

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
                                                    aria-controls="collapse2">When
                                                    is cartilage surgery
                                                    needed?</button>
                                            </h2>
                                            <div id="collapse2"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading2"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">It is
                                                        recommended for patients
                                                        with cartilage damage
                                                        due to injury,
                                                        arthritis, or
                                                        wear-and-tear that
                                                        hasn't improved with
                                                        non-surgical treatments.
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
                                                    aria-controls="collapse3">What
                                                    types of cartilage surgery
                                                    are available?</button>
                                            </h2>
                                            <div id="collapse3"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading3"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0"> Common
                                                        options include
                                                        microfracture, cartilage
                                                        grafting, autologous
                                                        chondrocyte implantation
                                                        (ACI), and osteochondral
                                                        transplantation.</p>
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
                                                    aria-controls="collapse4">
                                                    Is cartilage surgery
                                                    minimally invasive?</button>
                                            </h2>
                                            <div id="collapse4"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading4"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes, many
                                                        cartilage procedures are
                                                        performed
                                                        arthroscopically using
                                                        small incisions and a
                                                        camera.</p>
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
                                                    aria-controls="collapse5">How
                                                    long does recovery
                                                    take?</button>
                                            </h2>
                                            <div id="collapse5"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading5"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Recovery
                                                        varies by procedure but
                                                        typically takes 3–6
                                                        months, including
                                                        physical therapy.</p>
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
                                                    aria-controls="collapse6">Will
                                                    I need physical therapy
                                                    after surgery?</button>
                                            </h2>
                                            <div id="collapse6"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading6"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes, rehab
                                                        is crucial to restore
                                                        joint strength,
                                                        flexibility, and prevent
                                                        re-injury.</p>
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
                                                    aria-controls="collapse7">Are
                                                    cartilage surgeries
                                                    painful?</button>
                                            </h2>
                                            <div id="collapse7"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading7"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Some
                                                        discomfort is expected
                                                        after surgery, but pain
                                                        is managed with
                                                        medication and decreases
                                                        as healing
                                                        progresses.</p>
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
                                                    aria-controls="collapse8">Can
                                                    cartilage regenerate after
                                                    surgery?</button>
                                            </h2>
                                            <div id="collapse8"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading8"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0"> Some
                                                        procedures stimulate the
                                                        body’s natural repair
                                                        process, while others
                                                        replace damaged
                                                        cartilage with healthy
                                                        tissue.</p>
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
                                                    aria-controls="collapse9">
                                                    Is it a permanent
                                                    solution?</button>
                                            </h2>
                                            <div id="collapse9"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading9"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Results can
                                                        be long-lasting,
                                                        especially if followed
                                                        by proper rehab and
                                                        lifestyle care, but may
                                                        vary based on age,
                                                        activity level, and
                                                        extent of damage.</p>
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
                                                    aria-controls="collapse10">
                                                    What happens if cartilage
                                                    damage is left
                                                    untreated?</button>
                                            </h2>
                                            <div id="collapse10"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading10"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Untreated
                                                        cartilage damage can
                                                        worsen over time,
                                                        leading to chronic pain,
                                                        joint stiffness, and
                                                        eventually
                                                        arthritis.</p>
                                                </div>
                                            </div>
                                        </div> -->
                    </div>
                </div>
                 <div class="col-lg-5 order-lg-2 mb-30">
                     
                    <div class="appointment-form form-wraper">
											<h3 class="title">Book Appointment</h3>
											<form action="{{ route('appointment.store') }}" method="POST">
                                                @csrf

                                                <input type="hidden" name="category_id" value="{{ $category->category_id }}">

                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number"
                                                        required pattern="\d{10}" maxlength="10" minlength="10"
                                                        title="Please enter exactly 10 digits"
                                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
                                                </div>

                                                <div class="form-group">
                                                    <input type="date" name="appointment_date" class="form-control" min="{{ date('Y-m-d') }}" placeholder="dd/mm/yyyy"  required>
                                                </div>

                                                <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="captcha">
                                                            {!! captcha_img() !!}
                                                        </div>
                                                        <button type="button" class="btn btn-sm btn-danger reload" id="reload">&#x21bb;</button>
                                                    </div>
                                                    <input type="text" name="captcha" class="form-control mt-2" placeholder="Enter Captcha" required>

                                                    @if ($errors->has('captcha'))
                                                        <span class="help-block text-danger">
                                                            <strong>{{ $errors->first('captcha') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <button type="submit" class="btn btn-secondary btn-lg">Book Appointment</button>
                                            </form>
										</div>
                <aside class="sticky-top pb-1">
                    <div class="widget">
                        <div class="book-appoint"></div>
                    </div>
                    <div class="widget">
                        <ul class="service-menu">
                            <h2 class="text-center">{{ $categoryTitle ?? 'Our Services' }}</h2>

                            @if(isset($relatedServices) && count($relatedServices))
                            @foreach($relatedServices as $item)
                            <li>
                                <a href="{{ route('FrontServiceWork', ['id' => $item->serviceId]) }}">
                                    <i class="fa fa-angle-right"></i> {{ $item->serviceName }}
                                </a>
                            </li>
                            @endforeach
                            @else
                            <li>No services found.</li>
                            @endif
                        </ul>
                    </div>

                </aside>
            </div>
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
    <!--<img class="pt-img1 animate1" src="{{ asset('Front/assets/images/shap/trangle-orange.png') }}" alt>-->
    <!--<img class="pt-img2 animate2" src="{{ asset('Front/assets/images/shap/square-dots-orange.png') }}" alt>-->
    <!--<img class="pt-img3 animate-rotate" src="{{ asset('Front/assets/images/shap/line-circle-blue.png') }}" alt>-->
    <!--<img class="pt-img4 animate-wave" src="{{ asset('Front/assets/images/shap/wave-blue.png') }}" alt>-->
</section>
</div>


@endsection