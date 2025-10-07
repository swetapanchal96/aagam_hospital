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
                                <h1>Blog Details</h1>
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
                                        <li class="breadcrumb-item"><a href="{{ route('FrontBlog') }}">Blog</a></li>
                                        <li class="breadcrumb-item active"
                                            aria-current="page">Blog
                                            Details</li>
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

                 <!-- main section -->
                 <section class="section-area section-sp1 bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-7 col-xl-8 mb-30 mb-md-50">
                                <!-- blog start -->

                                
                                <!-- blog start -->
                                <div class="blog-card blog-single">
                                    <!-- <div class="post-media">
                                        <img src="{{ asset('blog/' . $blog->blogImage) }}" alt="{{ $blog->blogTitle }}">
                                    </div> -->
                                    <div class="info-bx">
                                        <ul class="post-meta">
                                            <li class="author">
                                                <!-- <a href="javascript:void(0)">
                                                    <img src="{{ asset('Front/assets/images/testimonials/pic3.jpg') }}" alt=""> 
                                                    {{ $blog->created_by ?? 'Admin' }}
                                                </a> -->
                                            </li>
                                            <li class="date"><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($blog->blogDate)->format('d M Y') }}</li>
                                        </ul>
                                        <div class="ttr-post-title">
                                            <h2 class="post-title">{{ $blog->blogTitle }}</h2>
                                        </div>
                                        <div class="ttr-post-text">
                                            {!! $blog->blogDescription !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- blog END -->
                                <!-- <div class="blog-card blog-single">
                                    <div class="post-media">
                                        <img src="assets/images/blog/default/pic1.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="post-meta">
                                            <li class="author"><a href="blog-details.html"><img src="{{ asset('Front/assets/images/testimonials/pic3.jpg') }}" alt=""> Sonar Moyna</a></li>
                                            <li class="date"><i class="far fa-calendar-alt"></i> 19 July 2021</li>
                                        </ul>
                                        <div class="ttr-post-title">
                                            <h2 class="post-title">Precious Tips To Help You Get Better.</h2>
                                        </div>
                                        <div class="ttr-post-text">
                                            <p>You just need to enter the keyword and select the keyword type to generate a list of 6 title ideas and suggestions. If you’re not satisfied with the results, you can always hit the refresh button to generate a new list of unique titles.</p>
                                            <blockquote class="wp-block-quote">
                                                <p>Once you’ve gotten all the titles and have chosen the best one, the next thing you need to do is to craft a magnetic content. Great content marketers excel at creating content.</p>
                                            </blockquote>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            <ul class="wp-block-gallery columns-6 is-cropped">
                                                <li class="blocks-gallery-item"><img alt="" src="assets/images/gallery/pic2.jpg"></li>
                                                <li class="blocks-gallery-item"><img alt="" src="assets/images/gallery/pic5.jpg"></li>
                                            </ul>
                                            <p>You just need to enter the keyword and select the keyword type to generate a list of 6 title ideas and suggestions. If you’re not satisfied with the results, you can always hit the refresh button to generate a new list of unique titles.</p>
                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="ttr-post-footer">
                                            <div class="post-tags">
                                                <strong>Tags:</strong>
                                                <a href="javascript:void(0);">Health</a> 
                                                <a href="javascript:void(0);">Growth</a> 
                                                <a href="javascript:void(0);">Life</a> 
                                            </div>
                                            <div class="share-post ml-auto">
                                                <ul class="social-media mb-0">
                                                    <li><strong>Share:</strong></li>
                                                    <li><a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                
                                <!-- blog END -->
                            </div>
                            <div class="col-md-12 col-lg-5 col-xl-4 mb-30">
                                <aside class="side-bar sticky-top aside-bx">
                                    <div class="widget recent-posts-entry">
                                        <h4 class="widget-title">Recent Posts</h4>
                                        <div class="widget-post-bx">
                                            @foreach($recentPosts as $post)
                                            <div class="widget-post clearfix">
                                                <div class="ttr-post-media">
                                                    <a href="{{ url('blog-details/' . $post->blog_slug) }}">
                                                        <img src="{{ asset('Blog/' . $post->blogImage) }}" width="200" height="143" alt="{{ $post->blogTitle }}">
                                                    </a>
                                                </div>
                                                <div class="ttr-post-info">
                                                    <div class="ttr-post-header">
                                                        <h6 class="post-title">
                                                            <a href="{{ url('blog-details/' . $post->blog_slug) }}">{{ $post->blogTitle }}</a>
                                                        </h6>
                                                    </div>
                                                    <ul class="post-meta">
                                                        <li class="date">
                                                            <i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($post->blogDate)->format('d M Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- <div class="widget recent-posts-entry">
                                        <h4 class="widget-title">Recent Posts</h4>
                                        <div class="widget-post-bx">
                                            <div class="widget-post clearfix">
                                                <div class="ttr-post-media"> <img src="{{ asset('Front/assets/images/blog/recent-blog/pic1.jpg') }}" width="200" height="143" alt=""> </div>
                                                <div class="ttr-post-info">
                                                    <div class="ttr-post-header">
                                                        <h6 class="post-title"><a href="blog-details.html">Precious Tips To Help You Get Better.</a></h6>
                                                    </div>
                                                    <ul class="post-meta">
                                                        <li class="date"><i class="far fa-calendar-alt"></i> 21 July 2021</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget-post clearfix">
                                                <div class="ttr-post-media"> <img src="assets/images/blog/recent-blog/pic2.jpg" width="200" height="160" alt=""> </div>
                                                <div class="ttr-post-info">
                                                    <div class="ttr-post-header">
                                                        <h6 class="post-title"><a href="blog-details.html">Ten Doubts You Should Clarify About.</a></h6>
                                                    </div>
                                                    <ul class="post-meta">
                                                        <li class="date"><i class="far fa-calendar-alt"></i> 20 July 2021</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget-post clearfix">
                                                <div class="ttr-post-media"> <img src="assets/images/blog/recent-blog/pic3.jpg" width="200" height="160" alt=""> </div>
                                                <div class="ttr-post-info">
                                                    <div class="ttr-post-header">
                                                        <h6 class="post-title"><a href="blog-details.html">The 10 Steps Needed For Putting.</a></h6>
                                                    </div>
                                                    <ul class="post-meta">
                                                        <li class="date"><i class="far fa-calendar-alt"></i> 19 July 2021</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    
                                        
                                </aside>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


@endsection