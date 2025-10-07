@extends('layouts.front')
@section('opTag')


@section('title', 'Knee-replacement')

@endsection
@section('content')

<div class="page-content bg-white">

                <!-- Inner Banner -->
                <div class="banner-wraper">
                    <div class="page-banner"
                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">
                        <div class="container">
                            <div class="page-banner-entry text-center">
                                <h1>Knee Replacement</h1>
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
                                            aria-current="page">Knee
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
                                        src="{{ asset('Front/assets/images/service/knee-replacement.jpg') }}"
                                        class="rounded" alt>
                                </div>
                                <div class="clearfix">
                                    <div class="head-text mb-30">
                                        <h2 class="title mb-15">Knee
                                            Replacement</h2>
                                        <p class="mb-0">Knee replacement in
                                            Ahmedabad is a surgical process in
                                            which damaged or diseased portions
                                            of the knee joints are removed and
                                            replaced with new artificial pieces
                                            composed of metal, plastic, or
                                            ceramic. Our knee replacement
                                            surgeon may be taken into account as
                                            a therapy option when non-surgical
                                            techniques fail to provide the
                                            relief needed and the joint has
                                            sustained significant damage. To
                                            reduce pain, correct leg deformity,
                                            and help enhance knee joint
                                            performance, joint replacement
                                            surgery is a very safe and
                                            successful operation.

                                        </p>
                                        <p class="mt-2 mb-0">Knee replacement,
                                            also known as knee arthroplasty, is
                                            a surgical procedure performed to
                                            replace a damaged or worn-out knee
                                            joint with an artificial implant.
                                            The surgery is most commonly done in
                                            individuals suffering from severe
                                            knee pain and disability due to
                                            arthritis or injury. It is aimed at
                                            relieving pain, restoring function,
                                            and improving the overall quality of
                                            life.</p>
                                    </div>

                                </div>
                                <!-- symptoms start -->
                                <div class>
                                    <h4 class="title">Symptoms Indicating the
                                        Need for Knee Replacement</h4>
                                    <p>Patients typically consider knee
                                        replacement surgery after non-surgical
                                        treatments fail to alleviate symptoms.
                                        Key symptoms include:</p>
                                    <div class="row align-items-center">
                                        <div class="col-md-12 mb-30">
                                            <ul class="list-check-squer mb-0">
                                                <li>Chronic knee pain:
                                                    Persistent pain that worsens
                                                    with activity and limits
                                                    daily activities such as
                                                    walking, climbing stairs, or
                                                    standing.</li>
                                                <li>Joint stiffness: Difficulty
                                                    in bending or straightening
                                                    the knee, particularly after
                                                    resting or in the
                                                    morning.</li>
                                                <li>Swelling and inflammation:
                                                    Chronic swelling around the
                                                    knee joint, especially after
                                                    prolonged periods of
                                                    use.</li>
                                                <li>Limited range of motion:
                                                    Difficulty in fully
                                                    extending or flexing the
                                                    knee.</li>
                                                <li>Knee instability: The knee
                                                    feels unstable or “gives
                                                    way” during walking or
                                                    standing.
                                                </li>
                                                <li>Deformity: Bowing in or out
                                                    of the knee, or noticeable
                                                    changes in the alignment of
                                                    the leg.
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
                                                    aria-controls="collapse1">Who
                                                    is a Knee Replacement
                                                    Surgeon in
                                                    Ahmedabad?</button>
                                            </h2>
                                            <div id="collapse1"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="heading1"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">The knee
                                                        replacement surgeons in
                                                        Ahmedabad an experts in
                                                        the field of replacing
                                                        knees injured or damaged
                                                        due to trauma or
                                                        illness. A knee
                                                        replacement option is
                                                        available for people who
                                                        have tried conventional
                                                        therapies and
                                                        medications and haven’t
                                                        found any relief. In
                                                        general, an orthopaedic
                                                        surgeon is the one who
                                                        performs knee
                                                        replacements.</p>

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
                                                    aria-controls="collapse2">Which
                                                    conditions and types of
                                                    diseases are treated by a
                                                    Knee Replacement
                                                    Surgeon?</button>
                                            </h2>
                                            <div id="collapse2"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading2"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Surgeons for
                                                        knee replacements can
                                                        assist patients with
                                                        conditions such as:
                                                    </p>
                                                    <div class="faq">
                                                        <ul>
                                                            <li>Arthritis</li>
                                                            <li>Spinal
                                                                Deformity</li>
                                                            <li>Knee
                                                                injuries</li>
                                                            <li>Rheumatoid
                                                                arthritis</li>
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
                                                    aria-controls="collapse3">What
                                                    does the doctor do before
                                                    revision knee replacement
                                                    surgery?</button>
                                            </h2>
                                            <div id="collapse3"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading3"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">In advance
                                                        of an operation to
                                                        replace your knee,
                                                        surgeons will inquire
                                                        about your family and
                                                        medical background.
                                                        Additionally, they will
                                                        run other tests that
                                                        determine whether the
                                                        patient is suitable to
                                                        undergo surgery. In the
                                                        days before surgery, the
                                                        anaesthesia will be
                                                        administered to ensure
                                                        that the patient doesn’t
                                                        suffer any pain.</p>
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
                                                    tests do knee replacement
                                                    surgeons perform before
                                                    surgery?</button>
                                            </h2>
                                            <div id="collapse4"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading4"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Tests
                                                        include:</p>
                                                    <div class="faq">
                                                        <ul>
                                                            <li>Complete blood
                                                                count (CBC)</li>
                                                            <li>Urinalysis</li>
                                                            <li>X-Rays</li>
                                                            <li>Electrocardiogram
                                                                (EKG OR
                                                                ECG)</li>
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
                                                    aria-controls="collapse5">What
                                                    are the indications to see a
                                                    knee replacement
                                                    surgeon?</button>
                                            </h2>
                                            <div id="collapse5"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading5"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">The reasons
                                                        to consider an
                                                        orthopedic knee
                                                        replacement include:</p>
                                                    <div class="faq">
                                                        <ul>
                                                            <li>If traditional
                                                                therapies or
                                                                medicines aren’t
                                                                working,</li>
                                                            <li>Patients
                                                                experience
                                                                extreme knee
                                                                pain when
                                                                sitting or
                                                                performing any
                                                                other
                                                                activity.</li>
                                                            <li>There is a
                                                                narrow
                                                                flexibility of
                                                                motion and
                                                                stiffness.</li>
                                                            <li>The pain is
                                                                persistent even
                                                                after
                                                                trauma.</li>
                                                        </ul>
                                                    </div>
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
                                                    factors should to consider
                                                    while choosing a knee
                                                    replacement surgeon in
                                                    Ahmedabad?</button>
                                            </h2>
                                            <div id="collapse6"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading6"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0"> The factors
                                                        to be considered
                                                        comprise:</p>
                                                    <div class="faq">
                                                        <ul>
                                                            <li>Education</li>
                                                            <li>Qualifications</li>
                                                            <li>The number of
                                                                successful
                                                                cases</li>
                                                            <li>Testimonials</li>
                                                        </ul>
                                                    </div>
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