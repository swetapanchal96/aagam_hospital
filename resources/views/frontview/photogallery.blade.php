@extends('layouts.front')
@section('opTag')


@section('title', 'Photo Gallery')
<link
            href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css"
            rel="stylesheet" />
@endsection
@section('content')


<div class="page-content bg-white">
                <!-- Inner Banner -->
                <div class="banner-wraper">
                    <div class="page-banner"
                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">
                        <div class="container">
                            <div class="page-banner-entry text-center">
                                <h1>Photos</h1>
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
                                            aria-current="page">Photos</li>
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

                <!-- Team -->
                <section class="section-area section-sp1 team-wraper">
                    <div class="container">
                        <div class="row">
                        @foreach($photos as $photo)
                            <div class="col-lg-4 col-sm-6">
                                <div class="team-member mb-30">
                                    <a href="{{ asset('Gallery/' . $photo->strPhoto) }}"
                                        data-lightbox="gallery"
                                        data-title="Gallery Image {{ $photo->galleryId }}">
                                        <img src="{{ asset('Gallery/' . $photo->strPhoto) }}"
                                        alt="Gallery Image" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                           

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pagination-bx text-center mb-30 clearfix">
                                    <ul class="pagination">

                                        {{-- Previous Page Link --}}
                                        @if ($photos->onFirstPage())
                                            <li class="previous disabled"><span>Prev</span></li>
                                        @else
                                            <li class="previous">
                                                <a href="{{ $photos->previousPageUrl() }}">Prev</a>
                                            </li>
                                        @endif

                                        {{-- Page Numbers --}}
                                        @foreach ($photos->getUrlRange(1, $photos->lastPage()) as $page => $url)
                                            <li class="{{ $photos->currentPage() == $page ? 'active' : '' }}">
                                                <a href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($photos->hasMorePages())
                                            <li class="next">
                                                <a href="{{ $photos->nextPageUrl() }}">Next</a>
                                            </li>
                                        @else
                                            <li class="next disabled"><span>Next</span></li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-lg-12">
                                <div
                                    class="pagination-bx text-center mb-30 clearfix">
                                    {{ $photos->links('pagination::bootstrap-4') }}
                                    <ul class="pagination">
                                        <li class="previous"><a
                                                href="javascript:void(0);">Prev</a></li>
                                        <li class="active"><a
                                                href="javascript:void(0);">1</a></li>
                                        <li><a
                                                href="javascript:void(0);">2</a></li>
                                        <li><a
                                                href="javascript:void(0);">3</a></li>
                                        <li class="next"><a
                                                href="javascript:void(0);">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <img class="pt-img1 animate1"
                        src="assets/images/shap/trangle-orange.png" alt>
                    <img class="pt-img2 animate2"
                        src="assets/images/shap/square-dots-orange.png" alt>
                    <img class="pt-img3 animate-rotate"
                        src="assets/images/shap/line-circle-blue.png" alt>
                    <img class="pt-img4 animate-wave"
                        src="assets/images/shap/wave-blue.png" alt>
                    <img class="pt-img5 animate-wave"
                        src="assets/images/shap/circle-dots.png" alt>
                </section>
            </div>


@endsection

@section('script')

<button class="back-to-top fa fa-chevron-up"
                style="display: inline-block;"></button>
  <!-- JAVASCRIPT FILES ========================================= -->
        <script src="assets/js/jquery.min.js"></script>
        <script
            src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script
            src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
        <!-- Swiper JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script
            src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="assets/js/functions.js"></script>
        <script src="assets/js/contact.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
            integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

        <!-- /* Move the close button to the top-right corner of the image */ -->

        .lightbox .lb-close {
        top: 10px !important;
        right: 10px !important;
        left: auto !important;
        z-index: 1050;
        }


        @endsection
