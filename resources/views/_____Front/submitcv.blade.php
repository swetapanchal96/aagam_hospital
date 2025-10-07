@extends('layouts.front')
@section('content')
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"
/>

   <div class="inner-banner">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="banner-content text-center">
                  <h1>Submit CV</h1>
                  <span></span>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('FrontIndex')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Submit CV</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
   @include('common.alert')
   <div class="job-post-area pt-120 mb-120">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="form-wrapper">
                  <form action="{{route('submitCV')}}" method="POST" id="cvForm" enctype="multipart/form-data">
                  @csrf 
                  <input type="hidden" name="jobId" value="{{$jobId}}">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="section-title2">
                              <h5>Submit CV:</h5>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="jobtitle">First Name <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/user-2.svg')}}" alt>
                                 <input type="text" name="firstName" id="firstname" placeholder="First Name" maxlength="20" required>
                                 <span class="error" id="error1"></span>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="jobtitle">Last Name <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/user-2.svg')}}" alt>
                                 <input type="text" name="lastName" id="lastname" placeholder="Last Name" maxlength="20" required>
                                 <span class="error" id="error2"></span>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="jobtitle">Gender <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/person-2.svg')}}" alt>
                                 <select class="input" name="Gender" required>
                                    <option value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="datepicker5">Date of Birth <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/calender2.svg')}}" alt>
                                 <input type="text" id="datepicker5" name="DOB" placeholder="Birth Date" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="jobtitle">Email <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/company-2.svg')}}" alt>
                                 <input type="text" name="Email" placeholder="Email" maxlength="50" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="jobtitle">Phone <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/phone-2.svg')}}" alt>
                                 <input type="text" name="Mobile" placeholder="Phone" maxlength="10" minlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="vacancies">State <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/home-2.svg')}}" alt>
                                 <select name="stateId" id="stateId" required>
                                    <option value="">State</option>
                                    @foreach($State as $s)
                                    <option value="{{ $s->stateId }}">{{ $s->stateName}}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="vacancies">City <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/location.svg')}}" alt>
                                 <select class="input" name="cityId" id="city">
                                    <option value="">City</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="jobtitle">Company <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/company-2.svg')}}" alt>
                                 <input type="text" name="Company" placeholder="Company" maxlength="50" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="jobtitle">Designation <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/company-2.svg')}}" alt>
                                 <input type="text" name="Designation" placeholder="Designation" maxlength="100" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="experiences">Experience <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/experiences-2.svg')}}" alt>
                                 <select class="input" name="experienceId" required>
                                    <option value="">Experience</option>
                                    @foreach($Experience as $e)
                                       <option value="{{$e->experienceId}}">{{$e->experienceName}}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="experiences">Current CTC <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/experiences-2.svg')}}" alt>
                                 <input type="text" name="current_CTC" placeholder="Current CTC" required>  
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label>Education <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/qualification-2.svg')}}" alt>
                                 <select class="input" name="educationId" required>
                                    <option value="">Education</option>
                                    @foreach($Education as $e)
                                       <option value="{{$e->educationId}}">{{$e->educationName}}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="experiences">Institute <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/qualification-2.svg')}}" alt>
                                 <input type="text" name="Institute" placeholder="Institute" maxlength="100" required>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="vacancies">Function <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/company-2.svg')}}" alt>
                                 <select class="input" name="functionId" required>
                                    <option value="">Function</option>
                                    @foreach($Functions as $e)
                                       <option value="{{$e->functionId}}">{{$e->functionName}}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="vacancies">Industry <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/company-2.svg')}}" alt>
                                 <select class="input" name="IndustryId" required>
                                    <option value="">Industry</option>
                                    @foreach($Industry as $i)
                                       <option value="{{$i->industryId}}">{{$i->IndustryName}}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                        </div>


                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="vacancies">Skill By Comma <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/company-2.svg')}}" alt>
                                 <input type="text" id="choices-text-remove-button" data-choices data-choices-limit="3" data-choices-removeItem name="Skill" placeholder="Skill" required>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-3">
                           <div class="form-inner mb-25">
                              <label for="vacancies">Upload CV <span style="color:red;">*</span></label>
                              <div class="input-area">
                                 <img src="{{ asset('assets/frontassets/images/icon/nid.svg')}}" alt>
                                 <input type="file" name="cv" id="resume" placeholder="Upload CV" onchange="return validateFile()" required>
                              </div>
                           </div>
                        </div>


                        <div class="col-md-12">
                           <div class="form-inner">
                              <button class="primry-btn-2 lg-btn w-unset" type="submit">Submit</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
       $(document).ready(function() {
            $('#stateId').change(function() {
                var stateID = $('#stateId').val();
                if(stateID) {
                    $.ajax({
                        url: '../get-cities/' + stateID,
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
       
       function validateFile() {
            var allowedExtension = ['pdf'];
            var fileExtension = document.getElementById('resume').value.split('.').pop().toLowerCase();
            var isValidFile = false;

            for (var index in allowedExtension) {

                if (fileExtension === allowedExtension[index]) {
                    isValidFile = true;
                    break;
                }
            }
            if (!isValidFile) {
                alert('Allowed Extensions are : *.' + allowedExtension.join(', *.'));
                $('#resume').val("");
            }
            return isValidFile;
        }
</script>
@endsection