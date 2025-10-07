@extends('layouts.front')
@section('content')

      <div class="inner-banner">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="banner-content text-center">
                     <h1>Contact Us</h1>
                     <span></span>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="{{route('FrontIndex')}}">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
                           @include('common.alert')

      <div class="office-location-area pt-120 mb-60">
         <div class="container">
            <div class="row ">
               <div class="col-lg-12 mb-70">
                  <div class="office-location">
                     <div class="row g-lg-4 gy-5">
                        <div class="col-lg-4">
                           
                           <div class="single-location">
                              <h5>Address</h5>
                              <ul>
                                
                                 <li>
                                    <div class="icon">
                                       <img src="{{ asset('assets/frontassets/images/icon/location.svg')}}" alt>
                                    </div>
                                    <a href="#">S/29, Krushnam complex, opp: Nilkanth Hotel,
                                    Radhanpur road, Mahesana - 384002</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-4">
                        
                           <div class="single-location">
                              <h5>Phone No.</h5>
                              <ul>
                                 <li>
                                    <div class="icon">
                                       <img src="{{ asset('assets/frontassets/images/icon/phone-5.svg')}}" alt>
                                    </div>
                                    <a href="tel:+917069410745">+91 70694 10745</a>
                                    
                                 </li>
                                 <li>
                                    <div class="icon">
                                       <img src="{{ asset('assets/frontassets/images/icon/phone-5.svg')}}" alt>
                                    </div>
                                    
                                    <a href="tel:+919664662199">+91 96646 62199</a>
                                 </li>
                                
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           
                           <div class="single-location">
                              <h5>Email Us</h5>
                              <ul>
                                
                                 <li>
                                    <div class="icon">
                                       <img src="{{ asset('assets/frontassets/images/icon/email-2.svg')}}" alt>
                                    </div>
                                    <a href="mailto:sales@platinumhrsolutions.in">sales@platinumhrsolutions.in</a>
                                   
                                 </li>
                                 <li>
                                    <div class="icon">
                                       <img src="{{ asset('assets/frontassets/images/icon/email-2.svg')}}" alt>
                                    </div>
                                   
                                    <a href="mailto:harshil.vyas@platinumhrsolutions.in">harshil.vyas@platinumhrsolutions.in</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <div class="contact-support-area  mb-120">
         <div class="container">
            <div class="row g-lg-4 gy-5">
               <div class="col-lg-6">
                  <div class="contect-content">
                     <h4>Need Any Help? Contact Us</h4>
                     <div class="contact-form form-wrapper">
                        <form id="myForm" action="{{ route('FrontContactstore') }}" method="post">
                            @csrf 
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-inner mb-25">
                                 <label for="name">Your Name <span style="color:red;"> *</span></label>
                                 <div class="input-area">
                                    <img src="{{ asset('assets/frontassets/images/icon/user-2.svg')}}" alt>
                                    <input type="text" id="name" name="name" placeholder="Your Name" maxlength="50" required>
                                 </div>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-inner mb-25">
                                 <label for="email">Email <span style="color:red;"> *</span></label>
                                 <div class="input-area">
                                    <img src="{{ asset('assets/frontassets/images/icon/email-2.svg')}}" alt>
                                    <input type="email" id="email" name="email" placeholder="Email" maxlength="50" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-inner mb-25">
                                 <label for="phonenumber">Phone <span style="color:red;"> *</span></label>
                                 <div class="input-area">
                                    <img src="{{ asset('assets/frontassets/images/icon/phone-2.svg')}}" alt>
                                    <input type="text" id="phonenumber" name="mobile" placeholder="Phone" maxlength="10" minlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-inner mb-25">
                                 <label for="Subject">Subject<span style="color:red;"> *</span></label>
                                 <div class="input-area">
                                    <img src="{{ asset('assets/frontassets/images/icon/quat-icon.svg')}}"  style="width: 1.5%;" alt>
                                    <input type="text" id="subject" name="subject" placeholder="Subject" maxlength="50" required>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="col-md-12">
                              <div class="form-inner mb-40">
                                 <label for="message">Message</label>
                                 <textarea name="message" id="message" placeholder="Message..."></textarea>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-inner">
                                 <button class="primry-btn-2 lg-btn w-unset" type="submit">Send Message</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                     
                  </div>
               </div>
               <div class="col-lg-6">
               <div class="office-location-map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.564763018799!2d90.36349791490355!3d23.834071191491947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14c8682a473%3A0xa6c74743d52adb88!2sEgens%20Lab!5e0!3m2!1sen!2sbd!4v1675482960370!5m2!1sen!2sbd" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="500px"></iframe>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
@endsection