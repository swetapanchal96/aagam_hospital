@extends('layouts.front')
@section('content')
      <div class="inner-banner">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="banner-content text-center">
                     <h1>Service</h1>
                     <span></span>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="{{route('FrontIndex')}}">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Service</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="blog-details-area pt-120 mb-120">
         <div class="container">
            <div class="row g-lg-4 gy-5 justify-content-center">
            <div class="col-lg-4">
                  <div class="service-sidebar mb-50">
                    <h3>Our <span>Services </span></h3>
                    <ul>
                     <li class="d-flex"><div class="icon"><img src="{{ asset('assets/frontassets/images/icon/check-icon.svg')}}" alt=""></div> <a href="#" class="active">{{ $serviceDetail->serviceName }}</a></li>
                     @foreach($service as $s)
                       <li class="d-flex"><div class="icon"><img src="{{ asset('assets/frontassets/images/icon/check-icon.svg')}}" alt=""></div> <a href="{{route('FrontService',[$s->serviceId])}}" >{{ $s->serviceName }}</a></li>
                       @endforeach
                   </ul>
                  </div>
                  <div class="job-card">
                     <div class="job-content">
                        <h5>Hey! Do You Looking For Any Jobs?</h5>
                        <p>Job agencies may also offer additional services such as resume building.</p>
                        <div class="find-job-btn">
                           <a class="primry-btn-2 lg-btn " href="{{route('FrontSearchJob')}}">Find Job</a>
                        </div>
                     </div>
                     <div class="job-img">
                        <img src="{{ asset('assets/frontassets//images/find-job.png')}}" alt>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="blog-details-wrap">
                    
                     <div class="recent-article-content">
                        
                        <h2>{{$serviceDetail->serviceName}}</h2>
                        <hr>
                        @if($serviceDetail->photo == '')
                           <img src="{{ asset('assets/images/noImage.png')}}" class="img-fluid">
                       @else
                           <img src="{{ asset('/Service/').'/'.$serviceDetail->photo}}" class="img-fluid">
                       @endif
                        <br>
                        <br>
                        <p>{!! $serviceDetail->serviceDescription !!}</p>
                           </li>
                        </ul>
                     </div>
                  </div>       
               </div>
            </div>
         </div>
      </div>
   @endsection