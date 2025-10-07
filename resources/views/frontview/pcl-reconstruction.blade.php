@extends('layouts.front')
@section('opTag')


@section('title', 'Pcl-reconstruction')

@endsection
@section('content')





 <div class="page-content bg-white">

                <!-- Inner Banner -->
                <div class="banner-wraper">
                    <div class="page-banner"
                        style="background-image:url(Front/assets/images/banner/img1.jpg);">
                        <div class="container">
                            <div class="page-banner-entry text-center">
                                <h1>PCL Reconstruction</h1>
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
                                            aria-current="page">PCL
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
                                    <img src="{{ asset('Front/assets/images/service/pcl-new.jpg') }}"
                                        class="rounded img-fluid" alt>
                                </div>
                                <div class="clearfix">
                                    <div class="head-text mb-30">
                                        <h2 class="title mb-15">PCL
                                            Reconstruction</h2>
                                        <p class="mb-0">PCL reconstruction is a
                                            surgical procedure to repair a torn
                                            posterior cruciate ligament, one of
                                            the key ligaments that stabilizes
                                            the knee. The PCL is located at the
                                            back of the knee and prevents the
                                            shinbone (tibia) from moving too far
                                            backward relative to the thighbone
                                            (femur). While less common than ACL
                                            injuries, PCL tears can result from
                                            significant trauma or accidents.
                                        </p>
                                    </div>

                                </div>
                                <!-- symptoms start -->
                                <div class>
                                    <h4 class="title">Symptoms of PCL
                                        Reconstructions</h4>
                                    <!-- <p>An ACL tear usually presents with the following symptoms:</p> -->
                                    <div class="row align-items-center">
                                        <div class="col-md-12 mb-30">
                                            <ul class="list-check-squer mb-0">
                                                <li>Pain and swelling: Typically
                                                    occurs within a few hours of
                                                    the injury, but may be less
                                                    severe than with an ACL
                                                    tear.</li>
                                                <li>Knee instability: A feeling
                                                    that the knee “gives out” or
                                                    feels unstable, especially
                                                    during weight-bearing
                                                    activities.</li>
                                                <li>Limited range of motion:
                                                    Difficulty fully bending or
                                                    straightening the knee.</li>
                                                <li>Bruising on the back of the
                                                    knee: Due to the impact or
                                                    trauma causing the PCL
                                                    injury.</li>
                                                <li>Difficulty walking or
                                                    bearing weight: In severe
                                                    cases, walking may be
                                                    painful or the knee may feel
                                                    weak.</li>
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
                                                    is PCL
                                                    Reconstruction?</button>
                                            </h2>
                                            <div id="collapse1"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="heading1"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0"> PCL
                                                        Reconstruction is a
                                                        surgical procedure to
                                                        repair or replace the
                                                        posterior cruciate
                                                        ligament in the knee,
                                                        usually after injury or
                                                        trauma.</p>

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
                                                    do I know if I need PCL
                                                    Reconstruction?</button>
                                            </h2>
                                            <div id="collapse2"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading2"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">You may need
                                                        it if you experience
                                                        knee instability, pain
                                                        while walking downhill,
                                                        or have had a
                                                        high-impact injury
                                                        diagnosed with a torn
                                                        PCL.
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
                                                    is the procedure
                                                    performed?</button>
                                            </h2>
                                            <div id="collapse3"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading3"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0"> The surgeon
                                                        replaces the damaged PCL
                                                        with a tendon graft
                                                        using minimally invasive
                                                        arthroscopic
                                                        techniques.</p>
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
                                                    aria-controls="collapse4">How
                                                    long does the surgery
                                                    take?</button>
                                            </h2>
                                            <div id="collapse4"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading4"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">The
                                                        procedure typically
                                                        takes 1 to 2 hours and
                                                        is often performed under
                                                        general anesthesia.</p>
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
                                                    is the recovery time after
                                                    PCL Reconstruction?</button>
                                            </h2>
                                            <div id="collapse5"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading5"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Recovery can
                                                        take 6–12 months,
                                                        including physical
                                                        therapy, to fully regain
                                                        strength and
                                                        mobility.</p>
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
                                                    I need physical
                                                    therapy?</button>
                                            </h2>
                                            <div id="collapse6"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading6"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Yes,
                                                        physical therapy is
                                                        essential for a
                                                        successful recovery and
                                                        helps restore knee
                                                        function.</p>
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
                                                    Are there risks involved in
                                                    PCL Reconstruction?</button>
                                            </h2>
                                            <div id="collapse7"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading7"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Like all
                                                        surgeries, risks include
                                                        infection, stiffness,
                                                        blood clots, or graft
                                                        failure, but
                                                        complications are
                                                        uncommon with proper
                                                        care.</p>
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
                                                    I return to sports after
                                                    surgery?</button>
                                            </h2>
                                            <div id="collapse8"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading8"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0"> Most
                                                        patients can return to
                                                        sports after completing
                                                        rehab, usually around
                                                        9–12 months
                                                        post-surgery.</p>
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
                                                    aria-controls="collapse9">Is
                                                    PCL Reconstruction covered
                                                    by insurance?</button>
                                            </h2>
                                            <div id="collapse9"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading9"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">It is
                                                        generally covered if
                                                        deemed medically
                                                        necessary. Always check
                                                        with your insurer for
                                                        specific details.</p>
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
                                                    happens if I don’t treat a
                                                    PCL tear?</button>
                                            </h2>
                                            <div id="collapse10"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading10"
                                                data-bs-parent="#accordionRow1">
                                                <div class="accordion-body">
                                                    <p class="mb-0">Untreated
                                                        PCL injuries can lead to
                                                        chronic knee
                                                        instability, pain, and
                                                        long-term joint damage
                                                        like arthritis.</p>
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