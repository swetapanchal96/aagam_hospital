@extends('layouts.front')
@section('opTag')


@section('title', 'Contact')

@endsection
@section('content')



 <div class="page-content bg-white">

                <!-- Inner Banner -->
                <div class="banner-wraper">
                    <div class="page-banner"
                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">
                        <div class="container">
                            <div class="page-banner-entry text-center">
                                <h1>Hip Replacement</h1>
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
                                            aria-current="page">Hip
                                            Replacement</li>
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
                                    <img
                                        src="{{ asset('Front/assets/images/service/hip-replacement.jpg') }}"
                                        class="rounded" alt>
                                </div>
                                <div class="clearfix">
                                    <div class="head-text mb-30">
                                        <h2 class="title mb-15">Hip
                                            Replacement</h2>
                                        <p class="mb-0">Hip replacement,
                                            famously known as hip arthroplasty,
                                            is a surgical procedure in which a
                                            damaged or diseased hip joint is
                                            restored with an artificial joint.
                                            This procedure is often recommended
                                            to alleviate chronic pain and
                                            improve mobility in patients with
                                            severe hip conditions, such as
                                            arthritis or hip fractures.

                                        </p>
                                        <p class="mt-2 mb-0">Hip replacement
                                            surgery, also known as hip
                                            arthroplasty, is a procedure in
                                            which a damaged or diseased hip
                                            joint is replaced with an artificial
                                            implant. This surgery is often
                                            recommended for individuals
                                            suffering from severe hip pain and
                                            disability caused by arthritis or
                                            injury. The goal of hip replacement
                                            is to alleviate pain, improve joint
                                            function, and restore mobility.</p>
                                    </div>

                                </div>
                                <!-- symptoms start -->
                                <div class>
                                    <h4 class="title">Symptoms Indicating the
                                        Need for Hip Replacement</h4>
                                    <p>Individuals with advanced hip joint
                                        damage typically experience the
                                        following symptoms:</p>
                                    <div class="row align-items-center">
                                        <div class="col-md-12 mb-30">
                                            <ul class="list-check-squer mb-0">
                                                <li>Chronic hip pain: Persistent
                                                    pain in the hip, groin, or
                                                    thigh, especially during
                                                    weight-bearing activities
                                                    such as walking or
                                                    standing.</li>
                                                <li>Stiffness: Difficulty moving
                                                    the hip joint, particularly
                                                    in bending, sitting, or
                                                    rotating the leg.</li>
                                                <li>Limited range of motion:
                                                    Inability to fully rotate,
                                                    flex, or extend the hip
                                                    joint.</li>
                                                <li>Hip instability: The feeling
                                                    that the hip might give way
                                                    or is unstable during
                                                    movement.</li>
                                                <li>Pain during rest: Discomfort
                                                    that may occur even when
                                                    sitting or lying down, often
                                                    worsening at night.
                                                </li>
                                                <li>Difficulty with daily
                                                    activities: Inability to
                                                    perform routine tasks, such
                                                    as walking, climbing stairs,
                                                    or getting in and out of a
                                                    chair, due to pain or
                                                    stiffness.
                                                </li>
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
                                                    aria-controls="collapse1">What
                                                    is the hospital stay
                                                    following hip replacement
                                                    surgery?</button>
                                            </h2>
                                            <div id="collapse1"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="heading1"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Usually, the
                                                        time to recover is
                                                        dependent on the health
                                                        of the patient. However,
                                                        generally, patients will
                                                        be able to return to
                                                        their daily routine
                                                        within six to twelve
                                                        weeks. The complete
                                                        rehabilitation process
                                                        can take six months or
                                                        more, depending on the
                                                        severity of the affected
                                                        region is extremely.</p>

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
                                                    aria-controls="collapse2">What’s
                                                    the cost average for a hip
                                                    replacement operation in
                                                    Ahmedabad?</button>
                                            </h2>
                                            <div id="collapse2"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading2"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">The price of
                                                        a hip replacement in
                                                        Ahmedabad will vary
                                                        based on factors like
                                                        the facility, the city
                                                        and the experience of
                                                        the surgeon, and the
                                                        kind of implant
                                                        utilized. In general,
                                                        the cost will vary
                                                        between. Rs1,50,000/-
                                                        and Rs. 2,50,000/-
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
                                                    aria-controls="collapse3">Do
                                                    you know of any risk that a
                                                    patient could be confronted
                                                    with if one undergoes an
                                                    operation to replace the
                                                    hip?</button>
                                            </h2>
                                            <div id="collapse3"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading3"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">As with any
                                                        surgery that involves
                                                        risk, there are
                                                        potential risks, which
                                                        are: infections, blood
                                                        clots, and issues with
                                                        the implant, in addition
                                                        to others. The surgeon
                                                        will discuss the
                                                        potential risks that are
                                                        associated with it and
                                                        suggest prevention
                                                        measures that should be
                                                        followed.</p>
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
                                                    aria-controls="collapse4">What’s
                                                    the expected lifespan for a
                                                    prosthesis for a hip
                                                    replacement?</button>
                                            </h2>
                                            <div id="collapse4"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading4"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Prostheses
                                                        for hip implants today
                                                        typically last from 15
                                                        to 20 years, if not the
                                                        length can be shorter or
                                                        longer depending on the
                                                        level of activity as
                                                        well as the overall
                                                        health of the individual
                                                        patient.</p>

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
                                                    aria-controls="collapse5">What
                                                    Activities Can I Do After
                                                    Hip Replacement
                                                    Surgery?</button>
                                            </h2>
                                            <div id="collapse5"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading5"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">There are
                                                        many things you can
                                                        enjoy after hip
                                                        replacement surgery
                                                        nevertheless, you should
                                                        avoid those that are
                                                        high impact. You can do
                                                        activities like
                                                        swimming, walking, and
                                                        biking; however, it is
                                                        best to be careful not
                                                        to run, jump, or engage
                                                        in games that involve
                                                        contact.</p>

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
                                                    I Need Physical
                                                    Therapy?</button>
                                            </h2>
                                            <div id="collapse6"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading6"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Physical
                                                        therapy is crucial in
                                                        the recovery process
                                                        following an operation
                                                        to replace your hip. It
                                                        aids in gaining
                                                        endurance, flexibility,
                                                        as well as balance. A
                                                        physical therapist can
                                                        teach the exercises you
                                                        can do at home and will
                                                        help you recover.</p>

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
                                                    aria-controls="collapse7">How
                                                    much does a surgeon charge
                                                    for a knee
                                                    replacement?</button>
                                            </h2>
                                            <div id="collapse7"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading7"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">The cost of
                                                        a knee replacement
                                                        varies based on the knee
                                                        replacement.</p>
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
                                            <h2 class="text-center">Ortho Services</h2>
                                            <li class="active"><a
                                                    href="{{ route('FrontAclreconstruction') }}"><span><i
                                                        class="fa fa-angle-right"></i> ACL
                                                        Reconstruction</span> 
                                                </a></li>
                                            <li><a
                                                    href="{{ route('FrontPclreconstruction') }}"><span><i
                                                        class="fa fa-angle-right"></i> PCL Reconstruction</span> </a></li>
                                            <li><a
                                                    href="{{ route('FrontCartilagesurgery') }}"><span><i
                                                        class="fa fa-angle-right"></i> Cartilage
                                                        Surgery</span> </i></a></li>
                                            <li><a
                                                    href="{{ route('FrontBankartrepair') }}"><span><i
                                                        class="fa fa-angle-right"></i> Bankart
                                                        Repair</span> </i></a></li>
                                            <li><a
                                                    href="{{ route('FrontKneereplacement') }}"><span><i
                                                        class="fa fa-angle-right"></i> Knee
                                                        Replacement</span> </i></a></li>
                                            <li><a
                                                    href="{{ route('FrontHipreplacement') }}"><span><i
                                                        class="fa fa-angle-right"></i> Hip
                                                        Replacement</span> </i></a></li>
                                            <li><a
                                                    href="{{ route('FrontArthroscopysurgery') }}"><span><i
                                                        class="fa fa-angle-right"></i> Arthroscopy
                                                        Surgery</span> </i></a></li>
                                            <li><a
                                                    href="{{ route('FrontTraumasurgery') }}"><span><i
                                                        class="fa fa-angle-right"></i> Trauma
                                                        Surgery</span> </i></a></li>
                                            <li><a
                                                    href="{{ route('FrontShoulderrotatorcuffrepair') }}"><span><i
                                                        class="fa fa-angle-right"></i> Shoulder
                                                        rotator cuff
                                                        repair</span> </i></a></li>
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