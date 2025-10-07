@extends('layouts.front')

@section('opTag')





@section('title', 'Blog')



@endsection

@section('content')





<div class="page-content bg-white">

                <!-- Inner Banner -->

                <div class="banner-wraper">

                    <div class="page-banner"

                        style="background-image:url(/Front/assets/images/banner/img1.jpg);">

                        <div class="container">

                            <div class="page-banner-entry text-center">

                                <h1>Blog </h1>

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

                                            aria-current="page">Blog </li>

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

                            @foreach($blogs as $blog)

                                <div class="col-xl-4 col-md-6">

                                    <div class="blog-card mb-30">

                                        <div class="post-media">

                                            <a href="{{ url('blog-details/' . $blog->blog_slug) }}">

                                                <img src="{{ asset('Blog/' . $blog->blogImage) }}" alt="{{ $blog->blogTitle }}">

                                            </a>

                                        </div>

                                        <div class="post-info">

                                            <ul class="post-meta">

                                                <!-- <li class="author">

                                                    <a href="#">

                                                        <img src="{{ asset('Front/assets/images/testimonials/pic1.jpg') }}" alt> {{ $blog->created_by ?? 'Admin' }}

                                                    </a>

                                                </li> -->

                                                <li class="date"><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($blog->blogDate)->format('d M Y') }}</li>

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



                            <!-- <div class="col-xl-4 col-md-6">

                                <div class="blog-card mb-30">

                                    <div class="post-media">

                                        <a href="blog-details.html"><img

                                                src="{{ asset('Front/assets/images/blog/grid/pic1.jpg') }}"

                                                alt></a>

                                    </div>

                                    <div class="post-info">

                                        <ul class="post-meta">

                                            <li class="author"><a

                                                    href="blog-details.html"><img

                                                        src="{{ asset('Front/assets/images/testimonials/pic1.jpg') }}"

                                                        alt> John deo</a></li>

                                            <li class="date"><i

                                                    class="far fa-calendar-alt"></i>

                                                21 July 2021</li>

                                        </ul>

                                        <h4 class="post-title"><a

                                                href="blog-details.html">Dental

                                                Care for Women is very

                                                important</a></h4>

                                        <a href="blog-details.html"

                                            class="btn btn-outline-primary btn-sm">Read

                                            More <i

                                                class="btn-icon-bx fas fa-chevron-right"></i></a>

                                    </div>

                                </div>

                            </div> -->

                            <!-- <div class="col-xl-4 col-md-6">

                                <div class="blog-card mb-30">

                                    <div class="post-media">

                                        <a href="blog-details.html"><img

                                                src="{{ asset('Front/assets/images/blog/grid/pic2.jpg') }}"

                                                alt></a>

                                    </div>

                                    <div class="post-info">

                                        <ul class="post-meta">

                                            <li class="author"><a

                                                    href="blog-details.html"><img

                                                        src="{{ asset('Front/assets/images/testimonials/pic2.jpg') }}"

                                                        alt> Peter

                                                    Packer</a></li>

                                            <li class="date"><i

                                                    class="far fa-calendar-alt"></i>

                                                20 July 2021</li>

                                        </ul>

                                        <h4 class="post-title"><a

                                                href="blog-details.html">In this

                                                hospital there are special

                                                surgeon</a></h4>

                                        <a href="blog-details.html"

                                            class="btn btn-outline-primary btn-sm">Read

                                            More <i

                                                class="btn-icon-bx fas fa-chevron-right"></i></a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-4 col-md-6">

                                <div class="blog-card mb-30">

                                    <div class="post-media">

                                        <a href="blog-details.html"><img

                                                src="{{ asset('Front/assets/images/blog/grid/pic3.jpg') }}"

                                                alt></a>

                                    </div>

                                    <div class="post-info">

                                        <ul class="post-meta">

                                            <li class="author"><a

                                                    href="blog-details.html"><img

                                                        src="{{ asset('Front/assets/images/testimonials/pic3.jpg') }}"

                                                        alt> Sonar

                                                    Moyna</a></li>

                                            <li class="date"><i

                                                    class="far fa-calendar-alt"></i>

                                                19 July 2021</li>

                                        </ul>

                                        <h4 class="post-title"><a

                                                href="blog-details.html">Why Is

                                                Skin Surgeon Considered

                                                Underrated</a></h4>

                                        <a href="blog-details.html"

                                            class="btn btn-outline-primary btn-sm ">Read

                                            More <i

                                                class="btn-icon-bx  fas fa-chevron-right small-icon" ></i></a>

                                    </div>

                                </div>

                            </div> -->

                        </div>

                        @if ($blogs->lastPage() > 1)

                        <div class="row">

                            <div class="col-lg-12">

                                <div class="pagination-bx text-center mb-30 clearfix">

                                    <ul class="pagination">



                                        {{-- Previous Button --}}

                                        <li class="previous {{ $blogs->onFirstPage() ? 'disabled' : '' }}">

                                            <a href="{{ $blogs->previousPageUrl() ?? 'javascript:void(0);' }}">Prev</a>

                                        </li>



                                        {{-- Page Numbers --}}

                                        @for ($i = 1; $i <= $blogs->lastPage(); $i++)

                                            <li class="{{ ($blogs->currentPage() == $i) ? 'active' : '' }}">

                                                <a href="{{ $blogs->url($i) }}">{{ $i }}</a>

                                            </li>

                                        @endfor



                                        {{-- Next Button --}}

                                        <li class="next {{ !$blogs->hasMorePages() ? 'disabled' : '' }}">

                                            <a href="{{ $blogs->nextPageUrl() ?? 'javascript:void(0);' }}">Next</a>

                                        </li>



                                    </ul>

                                </div>

                            </div>

                        </div>

                        @endif



                        <!-- <div class="row">

                            <div class="col-lg-12">

                                <div

                                    class="pagination-bx text-center mb-30 clearfix">

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

                </section>

            </div>





@endsection

