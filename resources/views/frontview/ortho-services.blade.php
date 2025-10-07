



@extends('layouts.front')

@section('opTag')





@section('title', 'Ortho-services')



@endsection

@section('content')



<div class="page-content bg-white">

                <!-- Inner Banner -->

                <div class="banner-wraper">

                    <div class="page-banner"

                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">

                        <div class="container">

                            <div class="page-banner-entry text-center">

                                <h1> Ortho Services</h1>

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

                                            aria-current="page">Ortho

                                            Services</li>

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



                <!-- service -->

                <section class="section-area section-sp1">

                    <div class="container">

                        <div class="row">
                             @foreach($orthoServices as $service)
                                <div class="col-lg-4 col-md-6 mb-30">
                                    <div class="feature-container feature-bx2 feature1">
                                        <div class="feature-box-xl mb-20">
                                            <span class="icon-cell">
                                                <img src="{{ asset('/Services/' . $service->serviceImage) }}" alt="{{ $service->serviceName }}">
                                            </span>
                                        </div>
                                        <div class="icon-content">
                                            <h3 class="ttr-title">{{ $service->serviceName }}</h3>
                                            <!-- <p>{{ Str::limit(strip_tags($service->serviceDescription), 100) }}</p> -->
                                            <a href="{{ route('FrontServiceWork', ['id' => $service->serviceId]) }}" class="btn btn-primary light">
                                                View More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <!-- <div class="col-lg-4 col-md-6 mb-30">

                                <div

                                    class="feature-container feature-bx2 feature1">

                                    <div class="feature-box-xl mb-20">

                                        <span class="icon-cell">

                                            <img

                                                src="{{ asset('Front/assets/images/service/acl.png') }}"

                                                alt>

                                        </span>

                                    </div>

                                    <div class="icon-content">

                                        <h3 class="ttr-title">ACL

                                            Reconstruction</h3>

                                        <p>Restores knee stability and function

                                            after ligament injury through

                                            minimally invasive surgical

                                            repair.</p>

                                        <a href="{{ route('FrontAclreconstruction') }}"

                                            class="btn btn-primary light">View

                                            More</a>

                                    </div>

                                </div>

                            </div> -->

                            <!-- <div class="col-lg-4 col-md-6 mb-30">

                                <div

                                    class="feature-container feature-bx2 feature2">

                                    <div class="feature-box-xl mb-20">

                                        <span class="icon-cell">

                                            <img

                                                src="{{ asset('Front/assets/images/service/pcl-icon.jpg') }}"

                                                alt>

                                        </span>

                                    </div>

                                    <div class="icon-content">

                                        <h3 class="ttr-title">PCL

                                            Reconstruction</h3>

                                        <p>Surgical restoration of the posterior

                                            cruciate ligament to regain knee

                                            strength and mobility.</p>

                                        <a href="{{ route('FrontPclreconstruction') }}"

                                            class="btn btn-primary light">View

                                            More</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 mb-30">

                                <div

                                    class="feature-container feature-bx2 feature3">

                                    <div class="feature-box-xl mb-20">

                                        <span class="icon-cell">

                                            <img

                                                src="{{ asset('Front/assets/images/service/carti.png') }}"

                                                alt>

                                        </span>

                                    </div>

                                    <div class="icon-content">

                                        <h3 class="ttr-title">Cartilage

                                            Surgery</h3>

                                        <p>Repairs or regenerates damaged joint

                                            cartilage to relieve pain and

                                            improve movement.</p>

                                        <a href="{{ route('FrontCartilagesurgery') }}"

                                            class="btn btn-primary light">View

                                            More</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 mb-30">

                                <div

                                    class="feature-container feature-bx2 feature1">

                                    <div class="feature-box-xl mb-20">

                                        <span class="icon-cell">

                                            <img

                                                src="{{ asset('Front/assets/images/service/bankcart-icon.jpg') }}"

                                                alt>

                                        </span>

                                    </div>

                                    <div class="icon-content">

                                        <h3 class="ttr-title">Bankart

                                            Repair</h3>

                                        <p>Corrects shoulder instability by

                                            reattaching the torn labrum to the

                                            shoulder socket.</p>

                                        <a href="{{ route('FrontBankartrepair') }}"

                                            class="btn btn-primary light">View

                                            More</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 mb-30">

                                <div

                                    class="feature-container feature-bx2 feature2">

                                    <div class="feature-box-xl mb-20">

                                        <span class="icon-cell">

                                            <svg

                                                enable-background="new 0 0 512 512"

                                                height="80"

                                                viewBox="0 0 512 512" width="80"

                                                xmlns="http://www.w3.org/2000/svg">

                                                <g fill="#020288">

                                                    <path

                                                        d="m311.734 208.706h-25.074v-25.083c0-5.522-4.478-10-10-10h-41.32c-5.523 0-10 4.478-10 10v25.083h-25.074c-5.523 0-10 4.478-10 10v41.33c0 5.522 4.477 10 10 10h25.074v25.082c0 5.522 4.477 10 10 10h41.32c5.522 0 10-4.478 10-10v-25.082h25.074c5.522 0 10-4.478 10-10v-41.33c0-5.522-4.477-10-10-10zm-10 41.33h-25.074c-5.522 0-10 4.478-10 10v25.082h-21.32v-25.082c0-5.522-4.477-10-10-10h-25.074v-21.33h25.074c5.523 0 10-4.478 10-10v-25.083h21.32v25.083c0 5.522 4.478 10 10 10h25.074z" />

                                                    <path

                                                        d="m330.566 120.217v-51.05c0-5.522-4.478-10-10-10h-14.759v-49.167c0-5.522-4.478-10-10-10h-79.616c-5.523 0-10 4.478-10 10v49.167h-14.758c-5.523 0-10 4.478-10 10v51.049c-37.43 23.089-62.429 64.475-62.429 111.589v270.195c0 5.522 4.477 10 10 10h253.992c5.522 0 10-4.478 10-10v-270.194c0-47.115-24.999-88.501-62.43-111.589zm-104.374-100.217h19.808v2.559c0 5.522 4.477 10 10 10 5.522 0 10-4.478 10-10v-2.559h19.808v39.167h-59.616zm-24.759 59.167h109.133v30.965c-15.03-6.023-31.427-9.338-48.583-9.338h-11.967c-17.156 0-33.552 3.315-48.583 9.338zm171.563 412.833h-233.992v-260.194c0-61.212 49.8-111.012 111.012-111.012h11.967c61.213 0 111.013 49.8 111.013 111.012z" />

                                                    <path

                                                        d="m181.465 350.096h149.069v102.32h-149.069z"

                                                        fill="#a4fcc4" />

                                                </g>

                                            </svg>

                                        </span>

                                    </div>

                                    <div class="icon-content">

                                        <h3 class="ttr-title">Knee

                                            Replacement</h3>

                                        <p>Replaces damaged knee joint surfaces

                                            with artificial implants to relieve

                                            pain and restore function.</p>

                                        <a href="{{ route('FrontKneereplacement') }}"

                                            class="btn btn-primary light">View

                                            More</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 mb-30">

                                <div

                                    class="feature-container feature-bx2 feature3">

                                    <div class="feature-box-xl mb-20">

                                        <span class="icon-cell">

                                            <svg

                                                enable-background="new 0 0 512 512"

                                                height="80"

                                                viewBox="0 0 512 512" width="80"

                                                xmlns="http://www.w3.org/2000/svg">

                                                <path

                                                    d="m318.39 278.299h-39.263v-39.262h-46.254v39.262h-39.263v46.255h39.263v39.263h46.254v-39.263h39.263z"

                                                    fill="#ffbdbc" />

                                                <g fill="#020288">

                                                    <path

                                                        d="m256 164.444c-75.533 0-136.983 61.45-136.983 136.982s61.45 136.983 136.983 136.983 136.983-61.45 136.983-136.982-61.45-136.983-136.983-136.983zm0 253.965c-64.504 0-116.983-52.479-116.983-116.982s52.479-116.983 116.983-116.983 116.983 52.479 116.983 116.982-52.479 116.983-116.983 116.983z" />

                                                    <path

                                                        d="m470.541 112.15h-100.492v-50.962c0-20.205-16.429-36.643-36.623-36.643h-154.853c-20.194 0-36.623 16.438-36.623 36.643v50.963h-100.491c-22.86-.001-41.459 18.598-41.459 41.458v292.387c0 22.86 18.599 41.459 41.459 41.459h429.082c22.86 0 41.459-18.599 41.459-41.459v-292.387c0-22.86-18.599-41.459-41.459-41.459zm-34.541 20v36.68h-50.511v-36.68zm-274.049-70.962c0-9.177 7.457-16.643 16.623-16.643h154.854c9.166 0 16.623 7.466 16.623 16.643v50.963h-24.765v-32.806c0-5.522-4.477-10-10-10h-118.57c-5.523 0-10 4.478-10 10v32.806h-24.765zm44.765 50.962v-22.805h98.568v22.806h-98.568zm-80.205 20v36.68h-50.511v-36.68zm365.489 313.846c0 11.833-9.626 21.459-21.459 21.459h-429.082c-11.833 0-21.459-9.626-21.459-21.459v-292.387c0-11.833 9.626-21.459 21.459-21.459h14.541v46.68c0 5.522 4.477 10 10 10h70.511c5.523 0 10-4.478 10-10v-46.68h218.979v46.68c0 5.522 4.477 10 10 10h70.51c5.523 0 10-4.478 10-10v-46.68h14.541c11.833 0 21.459 9.626 21.459 21.459z" />

                                                </g>

                                            </svg>

                                        </span>

                                    </div>

                                    <div class="icon-content">

                                        <h3 class="ttr-title">Hip

                                            Replacement</h3>

                                        <p>Removes and replaces worn-out hip

                                            joint components to reduce pain and

                                            improve mobility.</p>

                                        <a href="{{ route('FrontHipreplacement') }}"

                                            class="btn btn-primary light">View

                                            More</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 mb-30">

                                <div

                                    class="feature-container feature-bx2 feature1">

                                    <div class="feature-box-xl mb-20">

                                        <span class="icon-cell">

                                            <img

                                                src="{{ asset('Front/assets/images/service/acl.png') }}"

                                                alt>

                                        </span>

                                    </div>

                                    <div class="icon-content">

                                        <h3 class="ttr-title">Arthroscopy

                                            Surgery</h3>

                                        <p>Minimally invasive procedure for

                                            diagnosing and treating joint

                                            problems through a small camera.</p>

                                        <a href="{{ route('FrontArthroscopysurgery') }}"

                                            class="btn btn-primary light">View

                                            More</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 mb-30">

                                <div

                                    class="feature-container feature-bx2 feature2">

                                    <div class="feature-box-xl mb-20">

                                        <span class="icon-cell">

                                            <svg

                                                enable-background="new 0 0 512 512"

                                                height="80"

                                                viewBox="0 0 512 512" width="80"

                                                xmlns="http://www.w3.org/2000/svg">

                                                <g fill="#020288">

                                                    <path

                                                        d="m311.734 208.706h-25.074v-25.083c0-5.522-4.478-10-10-10h-41.32c-5.523 0-10 4.478-10 10v25.083h-25.074c-5.523 0-10 4.478-10 10v41.33c0 5.522 4.477 10 10 10h25.074v25.082c0 5.522 4.477 10 10 10h41.32c5.522 0 10-4.478 10-10v-25.082h25.074c5.522 0 10-4.478 10-10v-41.33c0-5.522-4.477-10-10-10zm-10 41.33h-25.074c-5.522 0-10 4.478-10 10v25.082h-21.32v-25.082c0-5.522-4.477-10-10-10h-25.074v-21.33h25.074c5.523 0 10-4.478 10-10v-25.083h21.32v25.083c0 5.522 4.478 10 10 10h25.074z" />

                                                    <path

                                                        d="m330.566 120.217v-51.05c0-5.522-4.478-10-10-10h-14.759v-49.167c0-5.522-4.478-10-10-10h-79.616c-5.523 0-10 4.478-10 10v49.167h-14.758c-5.523 0-10 4.478-10 10v51.049c-37.43 23.089-62.429 64.475-62.429 111.589v270.195c0 5.522 4.477 10 10 10h253.992c5.522 0 10-4.478 10-10v-270.194c0-47.115-24.999-88.501-62.43-111.589zm-104.374-100.217h19.808v2.559c0 5.522 4.477 10 10 10 5.522 0 10-4.478 10-10v-2.559h19.808v39.167h-59.616zm-24.759 59.167h109.133v30.965c-15.03-6.023-31.427-9.338-48.583-9.338h-11.967c-17.156 0-33.552 3.315-48.583 9.338zm171.563 412.833h-233.992v-260.194c0-61.212 49.8-111.012 111.012-111.012h11.967c61.213 0 111.013 49.8 111.013 111.012z" />

                                                    <path

                                                        d="m181.465 350.096h149.069v102.32h-149.069z"

                                                        fill="#a4fcc4" />

                                                </g>

                                            </svg>

                                        </span>

                                    </div>

                                    <div class="icon-content">

                                        <h3 class="ttr-title">Trauma

                                            Surgery</h3>

                                        <p>Emergency surgical care for

                                            musculoskeletal injuries caused by

                                            accidents or impact.</p>

                                        <a href="{{ route('FrontTraumasurgery') }}"

                                            class="btn btn-primary light">View

                                            More</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 mb-30">

                                <div

                                    class="feature-container feature-bx2 feature3">

                                    <div class="feature-box-xl mb-20">

                                        <span class="icon-cell">

                                            <svg

                                                enable-background="new 0 0 512 512"

                                                height="80"

                                                viewBox="0 0 512 512" width="80"

                                                xmlns="http://www.w3.org/2000/svg">

                                                <path

                                                    d="m318.39 278.299h-39.263v-39.262h-46.254v39.262h-39.263v46.255h39.263v39.263h46.254v-39.263h39.263z"

                                                    fill="#ffbdbc" />

                                                <g fill="#020288">

                                                    <path

                                                        d="m256 164.444c-75.533 0-136.983 61.45-136.983 136.982s61.45 136.983 136.983 136.983 136.983-61.45 136.983-136.982-61.45-136.983-136.983-136.983zm0 253.965c-64.504 0-116.983-52.479-116.983-116.982s52.479-116.983 116.983-116.983 116.983 52.479 116.983 116.982-52.479 116.983-116.983 116.983z" />

                                                    <path

                                                        d="m470.541 112.15h-100.492v-50.962c0-20.205-16.429-36.643-36.623-36.643h-154.853c-20.194 0-36.623 16.438-36.623 36.643v50.963h-100.491c-22.86-.001-41.459 18.598-41.459 41.458v292.387c0 22.86 18.599 41.459 41.459 41.459h429.082c22.86 0 41.459-18.599 41.459-41.459v-292.387c0-22.86-18.599-41.459-41.459-41.459zm-34.541 20v36.68h-50.511v-36.68zm-274.049-70.962c0-9.177 7.457-16.643 16.623-16.643h154.854c9.166 0 16.623 7.466 16.623 16.643v50.963h-24.765v-32.806c0-5.522-4.477-10-10-10h-118.57c-5.523 0-10 4.478-10 10v32.806h-24.765zm44.765 50.962v-22.805h98.568v22.806h-98.568zm-80.205 20v36.68h-50.511v-36.68zm365.489 313.846c0 11.833-9.626 21.459-21.459 21.459h-429.082c-11.833 0-21.459-9.626-21.459-21.459v-292.387c0-11.833 9.626-21.459 21.459-21.459h14.541v46.68c0 5.522 4.477 10 10 10h70.511c5.523 0 10-4.478 10-10v-46.68h218.979v46.68c0 5.522 4.477 10 10 10h70.51c5.523 0 10-4.478 10-10v-46.68h14.541c11.833 0 21.459 9.626 21.459 21.459z" />

                                                </g>

                                            </svg>

                                        </span>

                                    </div>

                                    <div class="icon-content">

                                        <h3 class="ttr-title">Shoulder Rotator

                                            Cuff Repair</h3>

                                        <p>Reattaches torn shoulder tendons to

                                            restore strength and reduce

                                            pain.</p>

                                        <a

                                            href="{{ route('FrontShoulderrotatorcuffrepair') }}"

                                            class="btn btn-primary light">View

                                            More</a>

                                    </div>

                                </div>

                            </div> -->

                        </div>

                    </div>

                </section>

            </div>





@endsection