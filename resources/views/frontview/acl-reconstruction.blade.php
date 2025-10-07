@extends('layouts.front')
@section('opTag')


@section('title', 'Acl-reconstruction')

@endsection
@section('content')

<div class="page-content bg-white">

                <!-- Inner Banner -->
                <div class="banner-wraper">
                    <div class="page-banner"
                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">
                        <div class="container">
                            <div class="page-banner-entry text-center">
                                <h1>ACL Reconstruction</h1>
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
                                            aria-current="page">ACL
                                            Reconstruction</li>
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
                                        src="{{ asset('Front/assets/images/service/acl_new.jpg') }}"
                                        class="rounded" alt>
                                </div>
                                <div class="clearfix">
                                    <div class="head-text mb-30">
                                        <h2 class="title mb-15">ACL
                                            Reconstruction</h2>
                                        <p class="mb-0">The anterior cruciate
                                            ligament (ACL) is one of the
                                            important ligaments in the knee
                                            joint that provides stability and
                                            support during movements such as
                                            running, jumping, and pivoting. An
                                            ACL injury is a very common
                                            occurrence in sports and can be a
                                            significant setback for athletes.
                                            The reconstruction of the ACL is a
                                            surgical procedure that can help
                                            restore knee stability and function
                                            after an injury.</p>
                                        <p class="mt-3">The knee is a crucial
                                            joint that connects the thighbone
                                            and the shinbone. It is held
                                            together by four ligaments that link
                                            the bones; they are:</p>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mb-30">
                                            <ul class="list-check-squer mb-0">
                                                <li>An anterior cruciate
                                                    ligament (ACL)</li>
                                                <li>Medial collateral ligament
                                                    (MCL)</li>
                                                <li>Lateral collateral ligament
                                                    (LCL)</li>
                                                <li>A posterior cruciate
                                                    ligament (PCL)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class>
                                        <p>ACL (Anterior Cruciate Ligament)
                                            reconstruction is a surgical
                                            procedure used to replace a torn
                                            ACL, a key ligament that helps
                                            stabilize the knee joint. The ACL is
                                            commonly injured during sports
                                            activities that involve sudden
                                            stops, changes in direction, or
                                            awkward landings. Without a
                                            functional ACL, the knee may become
                                            unstable and prone to further
                                            damage.</p>
                                        <p>ACL reconstruction in Ahmedabad is
                                            typically performed
                                            arthroscopically, which is a
                                            minimally invasive procedure that
                                            includes making small incisions in
                                            the knee and using a tiny camera to
                                            guide the surgeon’s instruments.
                                            This approach has many benefits,
                                            including reduced pain and scarring,
                                            faster recovery times, and a lower
                                            risk of complications. Dr. Padmanabh
                                            Vora performs effective surgery with
                                            affordable ACL surgery costs in
                                            Ahmedabad.

                                        </p>
                                    </div>
                                </div>
                                <!-- symptoms start -->
                                <div class>
                                    <h4 class="title">Symptoms of ACL
                                        Reconstructions</h4>
                                    <p>An ACL tear usually presents with the
                                        following symptoms:</p>
                                    <div class="row align-items-center">
                                        <div class="col-md-12 mb-30">
                                            <ul class="list-check-squer mb-0">
                                                <li>Popping sensation in the
                                                    knee at the time of
                                                    injury.</li>
                                                <li>Severe pain and inability to
                                                    continue the activity.</li>
                                                <li>Swelling that typically
                                                    occurs within a few hours
                                                    after the injury.</li>
                                                <li>Instability or “giving way”
                                                    of the knee, especially
                                                    during twisting or pivoting
                                                    movements.</li>
                                                <li>Limited range of motion and
                                                    difficulty walking.</li>
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
                                                    aria-controls="collapse1">When
                                                    is ACL Reconstruction
                                                    Done?</button>
                                            </h2>
                                            <div id="collapse1"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="heading1"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">ACL
                                                        (anterior cruciate
                                                        ligament) reconstruction
                                                        is typically performed
                                                        when a person has a
                                                        complete tear of the ACL
                                                        or when the ACL is
                                                        significantly damaged
                                                        and the person is
                                                        experiencing instability
                                                        or a decrease in
                                                        function. ACL surgery in
                                                        Ahmedabad is often
                                                        recommended for people
                                                        who are physically
                                                        active and want to
                                                        return to high-impact
                                                        sports or
                                                        activities.</p>
                                                    <p class="mt-2">ACL
                                                        reconstruction may also
                                                        be recommended if the
                                                        person has a partial
                                                        tear that causes
                                                        persistent symptoms
                                                        despite conservative
                                                        treatments, or if the
                                                        ACL injury is associated
                                                        with other injuries to
                                                        the knee joint.</p>
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
                                                    aria-controls="collapse2">How
                                                    to Prepare for ACL
                                                    Reconstruction?</button>
                                            </h2>
                                            <div id="collapse2"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading2"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Preparing
                                                        for an ACL
                                                        reconstruction surgery
                                                        involves several steps
                                                        that aim to ensure the
                                                        best possible outcome,
                                                        better and speedy
                                                        recovery. You should
                                                        always consult the best
                                                        ACL reconstruction
                                                        doctors in Ahmedabad for
                                                        additional instructions.
                                                        Get your Pre-operative
                                                        medical evaluation and
                                                        ECG reports and prepare
                                                        yourself for
                                                        medications, Physical
                                                        therapy, pre-operative
                                                        fasting instructions and
                                                        recovery.
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
                                                    aria-controls="collapse3">How
                                                    ACL Reconstruction Is
                                                    Performed?</button>
                                            </h2>
                                            <div id="collapse3"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading3"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">This
                                                        procedure includes
                                                        replacing the damaged
                                                        ACL with a graft that is
                                                        typically taken from the
                                                        patient’s own body or a
                                                        donor. The most common
                                                        type of graft used is
                                                        the patellar tendon,
                                                        which is taken from the
                                                        patient’s knee. Other
                                                        graft options include
                                                        hamstring tendons and
                                                        cadaveric tendons.</p>
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
                                                    aria-controls="collapse4">What
                                                    exactly is ACL
                                                    reconstruction
                                                    surgery?</button>
                                            </h2>
                                            <div id="collapse4"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading4"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">ACL repair
                                                        surgery minimally
                                                        invasive procedure for
                                                        replacing a damaged
                                                        anterior ligament of the
                                                        cruciate (ACL) within
                                                        the knee by arthroscopy.
                                                        This procedure is vital
                                                        to restoring mobility
                                                        and stability for the
                                                        joint.</p>
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
                                                    much does ACL surgery cost
                                                    in Ahmedabad?</button>
                                            </h2>
                                            <div id="collapse5"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading5"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">The price
                                                        ranges from Rs150,000 to
                                                        around Rs3,00,000. This
                                                        is based on the
                                                        facilities at the
                                                        hospital, surgeon’s
                                                        experience, as well as
                                                        the kind of graft that
                                                        is used.</p>
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
                                                    aria-controls="collapse6">What
                                                    factors affect ACL surgery
                                                    cost in Ahmedabad?</button>
                                            </h2>
                                            <div id="collapse6"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading6"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">The cost of
                                                        hospitalization, the
                                                        surgeon’s fee, as well
                                                        as the type of graft and
                                                        type, anaesthesia,
                                                        post-operative care as
                                                        well and physiotherapy
                                                        affect the total
                                                        cost.</p>
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
                                                    aria-controls="collapse7">Do
                                                    you have any other costs
                                                    other than surgery?</button>
                                            </h2>
                                            <div id="collapse7"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading7"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Costs such
                                                        as medical tests,
                                                        diagnostic tests, as
                                                        well as physiotherapy
                                                        and subsequent visits
                                                        must be taken into
                                                        consideration.</p>
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
                                                    aria-controls="collapse8">Why
                                                    is ACL surgery more
                                                    expensive than autografts
                                                    and allografts?</button>
                                            </h2>
                                            <div id="collapse8"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading8"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Using
                                                        patient tissues (auto
                                                        graft) indeed tends to
                                                        be less costly than the
                                                        donor tissue (allograft)
                                                        due to the extra
                                                        expenses for
                                                        processing.</p>
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
                                                    aria-controls="collapse9">Can
                                                    the selection of a medical
                                                    facility affect ACL surgery
                                                    in Ahmedabad?</button>
                                            </h2>
                                            <div id="collapse9"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading9"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes,
                                                        hospitals that are rated
                                                        as premium and have
                                                        modern surgical
                                                        equipment may have
                                                        greater fees than other
                                                        clinics or
                                                        hospitals.</p>
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
                                                    aria-controls="collapse10">What
                                                    does it take to recover
                                                    following an ACL
                                                    operation?</button>
                                            </h2>
                                            <div id="collapse10"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading10"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">It usually
                                                        takes six to 9 months,
                                                        and physiotherapy plays
                                                        a major role in
                                                        recovering fitness and
                                                        mobility.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"
                                                id="heading11">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse11"
                                                    aria-expanded="false"
                                                    aria-controls="collapse11">How
                                                    is ACL Reconstruction
                                                    Surgery Performed?</button>
                                            </h2>
                                            <div id="collapse11"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading11"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">For ACL
                                                        reconstructions, a brand
                                                        new ACL is constructed
                                                        from a graft that is
                                                        either part of a
                                                        patient’s
                                                        quadriceps/patellar
                                                        tendon or hamstring.
                                                        This procedure is done
                                                        using advanced
                                                        arthroscopic
                                                        procedures.</p>
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
                                    <!-- <div class="widget">
                                        <div class="brochure-bx">
                                            <h5 class="title-head">Download</h5>
                                            <a href="javascript:void(0);"
                                                class="download-link">
                                                <img src="images/icon/pdf.png"
                                                    alt>
                                                <h5 class="title">Download our
                                                    Brochures</h5>
                                                <span>Download</span>
                                            </a>
                                            <a href="javascript:void(0);"
                                                class="download-link">
                                                <img src="images/icon/doc.png"
                                                    alt>
                                                <h5 class="title">Our Company
                                                    Details</h5>
                                                <span>Download</span>
                                            </a>
                                        </div>
                                    </div> -->

                                </aside>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Blog -->
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