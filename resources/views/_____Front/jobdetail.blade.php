@extends('layouts.front')
@section('content')
   <div class="inner-banner">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="banner-content text-center">
                  <h1>Job Detail</h1>
                  <span></span>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('FrontIndex')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Job Detail</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>


   <div class="job-details-pages pt-120 mb-120">
      <div class="container">
         <div class="row g-lg-4 gy-5">
            <div class="col-lg-8">
               <div class="job-details-content">
                  <div class="job-list-content">
                     <div class="company-area">
                        <div class="company-details">
                           <div class="name-location">
                              <h5><a href="#">{{$job->jobTitle}}</a></h5>
                           </div>
                        </div>
                     </div>
                     <div class="job-discription">
                        <ul class="one">
                           <li>
                              <img src="{{ asset('assets/frontassets/images/icon/map-2.svg')}}" alt>
                              <p><span class="title">Location:</span> {{$job->city}}, {{$job->state}}</p>
                           </li>
                           <li>
                              <img src="{{ asset('assets/frontassets/images/icon/company-2.svg')}}" alt>
                              <p><span class="title">Experience:</span> {{$job->experience}}  @if (is_int($job->experience)) year @endif</p>
                           </li>
                        </ul>
                        <ul>
                           <li>
                              <img src="{{ asset('assets/frontassets/images/icon/salary-2.svg')}}" alt>
                              <p><span class="title">Salary:</span> ₹ {{$job->salary}}/Per Month</p>
                           </li>
                        </ul>
                        
                     </div>
                  </div>
                  <p><span>Job Description:</span>
                     {!! $job->jobDescription !!}
                     </p>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="job-details-sidebar mb-120">
                  <div class="save-apply-btn d-flex justify-content-end mb-50">
                     <ul>
                        <!-- <li><a class="save-btn" href="#">Save Job <span><i class="bi bi-bookmark-fill"></i></span></a>
                        </li> -->
                        <li><a class="primry-btn-2 lg-btn" href="{{route('FrontapplyForJob',[$job->jobId])}}">Apply Position</a></li>
                     </ul>
                  </div>
                  <div class="job-summary-area mb-50">
                     <div class="job-summary-title">
                        <h6>Job Summary:</h6>
                     </div>
                     <ul>
                        <li>
                           <p><span class="title">Job Posted:</span> {{ date('d M,Y',strtotime($job->created_at))}}</p>
                        </li>
                        <li>
                           <p><span class="title">Job Deadline:</span> {{ date('d M,Y',strtotime($job->job_end_date))}}</p>
                        </li>
                        <li>
                           <p><span class="title">Function:</span> {{$job->functions}}</p>
                        </li>
                        <li>
                           <p><span class="title">Industry:</span> {{$job->industry}}</p>
                        </li>
                        <li>
                           <p><span class="title">Education:</span> {{$job->education ?? ''}}</p>
                        </li>
                        
                     </ul>
                  </div>
                  <div class="view-job-btn mb-30">
                     <a href="{{route('FrontSearchJob')}}"><img src="{{ asset('assets/frontassets/images/icon/company-2.svg')}}" alt>View All Jobs In This
                        Company</a>
                  </div>
                  <div class="job-share-area mb-50">
                     <h6>Job Link Share:</h6>
                     <ul>
                        <li><a href="#"><i class="bx bx-link"></i></a></li>
                        <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram-alt"></i></a></li>
                     </ul>
                  </div>
                  <div class="email-area mb-50">
                     <div class="title">
                        <h6><img src="{{ asset('assets/frontassets/images/icon/email-2.svg')}}" alt>Email Now</h6>
                     </div>
                     <p>Send your resume at <a
                           href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#650c0b030a25001d04081509004b060a08"><span
                              class="__cf_email__"
                              data-cfemail="d7beb9b1b897b2afb6baa7bbb2f9b4b8ba">[email&#160;protected]</span></a></p>
                  </div>
                  <div class="location-area">
                     <h6>Get Location:</h6>
                     <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.564763018799!2d90.36349791490355!3d23.834071191491947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14c8682a473%3A0xa6c74743d52adb88!2sEgens%20Lab!5e0!3m2!1sen!2sbd!4v1674212581590!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </div>

@if(sizeof($relatedJob) != 0)
         <div class="col-lg-12">
            <div class="related-jobs">
               <div class="section-title mb-40">
                  <h3>Related Jobs:</h3>
                  <div class="swiper-btn1 d-flex align-items-center">
                     <div class="left-btn prev-4">
                        <img src="{{ asset('assets/frontassets/images/icon/explore-elliose.svg')}}" alt>
                     </div>
                     <div class="right-btn next-4">
                        <img src="{{ asset('assets/frontassets/images/icon/explore-elliose.svg')}}" alt>
                     </div>
                  </div>
               </div>
               <div class="swiper related-job-slider">
                  <div class="swiper-wrapper">
                     @foreach($relatedJob as $rjob)
                     <div class="swiper-slide">
                        <div class="feature-card">
                           <div class="company-area">

                              <div class="company-details">
                                 <div class="name-location">
                                    <h5><a href="job-details.html">{{$rjob->jobTitle}}</a></h5>

                                 </div>
                                 <!-- <div class="bookmark">
                                    <i class="bi bi-bookmark"></i>
                                 </div> -->
                              </div>
                           </div>
                           <div class="job-discription">
                              <ul>
                                 <li>
                                    <img src="{{ asset('assets/frontassets/images/icon/arrow2.svg')}}" alt>
                                    <p><span class="title">Salary:</span> ₹ {{$rjob->salary}} <span class="time">Per month</span>
                                    </p>
                                 </li>
                                 <li>
                                    <img src="{{ asset('assets/frontassets/images/icon/arrow2.svg')}}" alt>
                                    <p><span class="title">Experience:</span> <span> 
                                  
                                    {{$rjob->experience ?? ''}}   @if (is_int($rjob->experience)) years @endif</span></p>
                                 </li>
                                 <li>
                                    <img src="{{ asset('assets/frontassets/images/icon/arrow2.svg')}}" alt>
                                    <p><span class="title">Education:</span> <span> {{$rjob->education ?? ''}}</span></p>
                                 </li> 
                                 <li>
                                    <img src="{{ asset('assets/frontassets/images/icon/arrow2.svg')}}" alt>
                                    <p><span class="title">Location:</span> <span> {{$rjob->city}},{{$rjob->state}}</span></p>
                                 </li>
                                 <li>
                                    <img src="{{ asset('assets/frontassets/images/icon/arrow2.svg')}}" alt>
                                    <p><span class="title">Deadline:</span> <span> {{ date('d M,Y',strtotime($rjob->job_end_date))}}</span></p>
                                 </li>
                              </ul>
                           </div>
                           <div class="job-type-apply">
                              <div class="apply-btn">
                                 <a href="{{route('FrontapplyForJob',[$rjob->jobId])}}"><span><img src="{{ asset('assets/frontassets/images/icon/apply-ellipse.svg')}}"
                                          alt></span>Apply Now</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
         @endif
      </div>
   </div>
   </div>
@endsection