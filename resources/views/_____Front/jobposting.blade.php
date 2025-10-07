@extends('layouts.front')
@section('content')

<div class="inner-banner">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="banner-content text-center">
               <h1>Job Search</h1>
               <span></span>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a
                           href="{{route('FrontIndex')}}">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Job
                        Search</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="job-post-area pt-120 mb-120">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="form-wrapper">
               <form action="{{route('FrontSearchJob')}}" method="POST">
                  @csrf
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="section-title2">
                           <h5>Job Search:</h5>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-inner mb-25">
                           <label for="jobtitle">Job Title <span style="color:red;">*</span></label>
                           <div class="input-area">
                              <img src="{{ asset('assets/frontassets/images/icon/company-2.svg')}}" alt>
                              <input type="text" id="jobTitle" name="jobTitle" value="{{ old('jobTitle', isset($jobTitle) ? $jobTitle : '') }}" placeholder="Job Title" required>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-inner mb-25">
                           <label>Education</label>
                           <div class="input-area">
                              <img src="{{ asset('assets/frontassets/images/icon/qualification-2.svg')}}" alt>
                              <select class="input" name="education">
                                 <option value="">Education</option>
                                 @foreach($Education as $evalue)
                                     <option value="{{$evalue->educationId}}" {{ old('education', isset($education) && $education == $evalue->educationId  ? 'selected' : "") }}>{{$evalue->educationName}}</option>
                                 @endforeach

                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-inner mb-25">
                           <label for="experiences">Experience</label>
                           <div class="input-area">
                              <img src="{{ asset('assets/frontassets/images/icon/experiences-2.svg')}}" alt>
                              <select class="input" name="experience">
                                 <option value="">Experience</option>
                                 @foreach($Experience as $evalue)
                                     <option value="{{$evalue->experienceId}}" {{ old('experience', isset($experience) && $experience == $evalue->experienceId  ? 'selected' : "") }}>{{$evalue->experienceName}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-inner">
                           <div class="salary-wrap">
                              <label class="label">Salary </label>
                              <div class="salery-select-area">
                                    <div class="input-area">
                                       <img src="{{ asset('assets/frontassets/images/icon/salary-2.svg')}}" alt>
                                        <select class="input" name="salary" >
                                             <option value="">Select Salary</option>
                                             @foreach($SalaryRange as $svalue)
                                                 <option value="{{$svalue->salaryId}}" {{ old('salary', isset($salary) &&  $salary == $svalue->salaryId  ?  'selected' : "") }}>{{$svalue->name}}</option>
                                             @endforeach
                                         </select>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-inner mb-25">
                           <label for="vacancies">Industry </label>
                           <div class="input-area">
                              <img src="{{ asset('assets/frontassets/images/icon/company-2.svg')}}" alt>
                              <select class="input" name="industry" >
                                 <option value="">Industry</option>
                                 @foreach($Industry as $ivalue)
                                     <option value="{{$ivalue->industryId}}" {{ old('industry', isset($industry) && $industry == $ivalue->industryId ? 'selected' : "") }}>{{$ivalue->IndustryName}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-inner mb-25">
                           <label for="vacancies">Function</label>
                           <div class="input-area">
                              <img src="{{ asset('assets/frontassets/images/icon/company-2.svg')}}" alt>
                              <select class="input" name="function">
                                 <option value="">Function</option>
                                    @foreach($Functions as $e)
                                       <option value="{{$e->functionId}}" {{ old('industry', isset($functions) && $industry == $fvalue->functionId ? 'selected' : "") }}>{{$e->functionName}}</option>
                                    @endforeach
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-inner mb-25">
                           <label for="vacancies">State <span style="color:red;">*</span></label>
                           <div class="input-area">
                              <img src="{{ asset('assets/frontassets/images/icon/home-2.svg')}}" alt>
                              <select class="input" name="state" id='state' required>
                                 <option value="">State</option>
                                    @foreach($State as $s)
                                    <option value="{{ $s->stateId }}" {{ old('state', isset($state) && $state  == $s->stateId ? 'selected' : "") }}>{{ $s->stateName}}</option>
                                    @endforeach
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-inner mb-25">
                           <label for="vacancies">City <span style="color:red;">*</span></label>
                           <div class="input-area">
                              <img src="{{ asset('assets/frontassets/images/icon/location.svg')}}" alt>
                              <select class="input" name="city" id="city" required>
                                 <option value="">City</option>
                                    @foreach($City as $cvalue)
                                     <option value="{{$cvalue->cityId}}" {{ old('city', isset($city) && $city == $cvalue->cityId ?  'selected' : "") }}>{{$cvalue->cityName}}</option>
                                    @endforeach

                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-inner">
                           <button class="primry-btn-2 lg-btn w-unset"
                              type="submit">Search Job</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="joblisting mb-120">
   <div class="container">
      <div class="row ">
      @if(sizeof($jobs) != 0)
         @foreach ($jobs as $jvalue)
         <div class="col-lg-6 mb-30">
            <div class="job-listing-card">
               <div class="job-top">
                  <div class="job-list-content">
                     <div class="company-area">
                        
                        <div class="company-details">
                           <div class="name-location">
                              <h5><a href="{{route('FrontJobDetail',[$jvalue->jobId])}}">{{ $jvalue->jobTitle }}</a></h5>
                              <p><a href="#">Experience: {{$jvalue->experience}} @if (is_int($jvalue->experience)) Years @endif</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="job-discription">
                        <ul>
                           <li>
                              <p><span class="title">Salary:</span> ₹ {{$jvalue->salary}}
                                 <span class="time">Per Month</span></p>
                           </li>
                            <li>
                              <p><span class="title">Location:</span> {{$jvalue->city}},{{$jvalue->state}}
                           </li>
                          
                           <li>
                              <p><span class="title">Deadline:</span> {{ date('d M,Y',strtotime($jvalue->job_end_date))}} </p>
                           </li>
                        </ul>
                     </div>
                  </div>

               </div>
               <div class="job-type-apply">
                  <div class="job-type">
                     <!--<span class="light-green">Full Time</span>-->
<!--  <span class="light-purple">Part Time</span>
                     <span class="light-blue">Remote</span>
 -->                  </div>
                  <div class="apply-btn">
                     <a href="{{route('FrontapplyForJob',[$jvalue->jobId])}}"><span>
                        <img src="{{ asset('assets/frontassets/images/icon/apply-ellipse.svg')}}" alt></span>Apply Now</a>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
         <div class="col-lg-12 d-flex justify-content-center">
            <div class="pagination-area">
               <nav aria-label="...">
                  <ul class="pagination">
            {{ $jobs->appends(request()->except('page'))->links() }}

                     <!-- <li class="page-item disabled"><a class="page-link"
                           href="#" tabindex="-1"></a></li>
                     <li class="page-item active" aria-current="page"><a
                           class="page-link" href="#">01</a></li>
                     <li class="page-item"><a class="page-link"
                           href="#">02</a></li>
                     <li class="page-item"><a class="page-link"
                           href="#">03</a></li>
                     <li class="page-item"><a class="page-link"
                           href="#"></a></li> -->
                  </ul>
               </nav>
            </div>
         </div>
         @endif
      </div>
   </div>
</div>
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
       $(document).ready(function() {
            $('#state').change(function() {
                var stateID = $('#state').val();
                if(stateID) {
                    $.ajax({
                        url: './get-cities/' + stateID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                            $('#city').empty();
                            $('#city').append('<option value="">Select City</option>');
                            $.each(data, function(key, value) {
                                $('#city').append('<option value="'+ value.cityId +'">'+ value.cityName +'</option>');
                            });
                        }
                    });
                } else {
                    $('#city').empty();
                    $('#city').append('<option value="">Select City</option>');
                }
            });
        });
     </script>
@endsection