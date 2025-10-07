@extends('layouts.front')

@section('opTag')





@section('title', 'Video Gallery')



@endsection

@section('content')



 <div class="page-content bg-white">

                <!-- Inner Banner -->

                <div class="banner-wraper">

                    <div class="page-banner"

                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">

                        <div class="container">

                            <div class="page-banner-entry text-center">

                                <h1>Videos</h1>

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

                                            aria-current="page">Videos</li>

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



                <!-- Videos start-->

                <section class="section-area section-sp1 team-wraper">

                    <div class="container">

                        <div class="row">

                        @foreach($videos as $video)

                            <div class="col-lg-4">

                                <div class="video-responsive">

                                  <iframe width="100%" height="215"
                                    src="https://www.youtube.com/embed/{{ $video->video_id }}"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>

                                </div>

                            </div>

                         @endforeach    

                            <!-- <div class="col-lg-4">

                                <div class="video-responsive">

                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/q9j447yj7QU?si=E85MCH1pGjY25Djv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="video-responsive">

                                    <iframe width="560" height="315"

                                        src="https://www.youtube.com/embed/io0-BFcltrQ?si=GQfMZA4orZRUhBR6"

                                        title="YouTube video player"

                                        frameborder="0"

                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                                        referrerpolicy="strict-origin-when-cross-origin"

                                        allowfullscreen></iframe>

                                </div>

                            </div> -->

                        </div>

                        <div class="row">

                            <div class="col-lg-12 mt-5">

                                <div class="pagination-bx text-center mb-30 clearfix">

                                    <ul class="pagination">



                                        {{-- Previous --}}

                                        @if ($videos->onFirstPage())

                                            <li class="previous disabled"><span>Prev</span></li>

                                        @else

                                            <li class="previous">

                                                <a href="{{ $videos->previousPageUrl() }}">Prev</a>

                                            </li>

                                        @endif



                                        {{-- Page Numbers --}}

                                        @foreach ($videos->getUrlRange(1, $videos->lastPage()) as $page => $url)

                                            <li class="{{ $videos->currentPage() == $page ? 'active' : '' }}">

                                                <a href="{{ $url }}">{{ $page }}</a>

                                            </li>

                                        @endforeach



                                        {{-- Next --}}

                                        @if ($videos->hasMorePages())

                                            <li class="next">

                                                <a href="{{ $videos->nextPageUrl() }}">Next</a>

                                            </li>

                                        @else

                                            <li class="next disabled"><span>Next</span></li>

                                        @endif



                                    </ul>

                                </div>

                            </div>

                        </div>



                    </div>

                    <!--<img class="pt-img1 animate1"-->

                    <!--    src="{{ asset('Front/assets/images/shap/trangle-orange.png') }}" alt>-->

                    <!--<img class="pt-img2 animate2"-->

                    <!--    src="{{ asset('Front/assets/images/shap/square-dots-orange.png') }}" alt>-->

                    <!--<img class="pt-img3 animate-rotate"-->

                    <!--    src="{{ asset('Front/assets/images/shap/line-circle-blue.png') }}" alt>-->

                    <!--<img class="pt-img4 animate-wave"-->

                    <!--    src="{{ asset('Front/assets/images/shap/wave-blue.png') }}" alt>-->

                    <!--<img class="pt-img5 animate-wave"-->

                    <!--    src="{{ asset('Front/assets/images/shap/circle-dots.png') }}" alt>-->

                </section>

                <!-- videos end -->



            </div>









@endsection