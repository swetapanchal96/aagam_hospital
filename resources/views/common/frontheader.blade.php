 <!--<div id="loading-icon-bx">-->
 <!--               <div class="loading-inner">-->
 <!--                   <div class="load-one"></div>-->
 <!--                   <div class="load-two"></div>-->
 <!--                   <div class="load-three"></div>-->
 <!--               </div>-->
 <!--           </div>-->

            <!-- header -->
            <header class="header header-transparent rs-nav">
                <!-- main header -->
                <div class="sticky-header navbar-expand-lg">
                    <div class="menu-bar clearfix">
                        <div class="container-fluid clearfix">
                            <!-- website logo -->
                            <div class="menu-logo logo-dark">
                                <a href="#"><img src="{{ asset('Front/assets/images/logo.png') }}"
                                        alt></a>
                            </div>
                            <!-- nav toggle button -->
                            <button
                                class="navbar-toggler collapsed menuicon justify-content-end"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#menuDropdown"
                                aria-controls="menuDropdown"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <!-- extra nav -->
                            <div class="secondary-menu">
                                <ul>

                                    <!-- <li class="num-bx"><a
                                            href="tel:(+01)999888777"><i
                                                class="fas fa-phone-alt"></i>
                                            (+01) 999 888 777</a></li> -->
                                    <li class="btn-area">
                                        <a href="{{ url('/#appointment') }}" class="btn btn-primary shadow">
                                            Book Appointment
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div
                                class="menu-links navbar-collapse collapse justify-content-end"
                                id="menuDropdown">
                                <div class="menu-logo">
                                    <a href="{{ route('FrontIndex') }}"><img
                                            src="{{ asset('Front/assets/images/logo.png') }}"
                                            alt></a>
                                </div>
                                <ul class="nav navbar-nav">
                                    <li class="active"><a
                                            href="{{ route('FrontIndex') }}">Home</a></li>
                                    <li>
                                        <a href="{{ route('FrontAboutus') }}">About Us </a>

                                    </li>
                                    <li>
                                        <a href="{{ route('FrontOrthoservices') }}">
                                            {{ $orthoCategory->category_name ?? 'Ortho Services' }}
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="add-menu-left">
                                                <ul>
                                                    @foreach($orthoServices as $service)
                                                        <li>
                                                            <a href="{{ route('FrontServiceWork', ['id' => $service->serviceId]) }}">
                                                                <span>{{ $service->serviceName }}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('FrontPediatricservices') }}">
                                            {{ $pediatricCategory->category_name ?? 'Pediatric Services' }}
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="add-menu-left">
                                                <ul>
                                                    @foreach($pediatricServices as $service)
                                                        <li>
                                                            <a href="{{ route('FrontServiceWork', ['id' => $service->serviceId]) }}">
                                                                <span>{{ $service->serviceName }}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>


                              <!-- <li>
                                        <a href="{{ route('FrontOrthoservices') }}">Ortho
                                            Services <i
                                                class="fas fa-plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="add-menu-left">
                                                <ul>
                                                  
                                                    <li><a
                                                            href="{{ route('FrontAclreconstruction') }}"><span>ACL
                                                                Reconstruction</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontPclreconstruction') }}"><span>PCL
                                                                Reconstruction</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontCartilagesurgery') }}"><span>Cartilage
                                                                Surgery</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontBankartrepair') }}"><span>Bankart
                                                                Repair</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontKneereplacement') }}"><span>Knee
                                                                Replacement</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontHipreplacement') }}"><span>Hip
                                                                Replacement</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontArthroscopysurgery') }}"><span>Arthroscopy
                                                                Surgery</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontTraumasurgery') }}"><span>Trauma
                                                                Surgery</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontShoulderrotatorcuffrepair') }}"><span>Shoulder
                                                                rotator cuff repair</span></a></li>
                                                                
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <!-- <li>
                                        <a
                                            href="{{ route('FrontPediatricservices') }}">Pediatric services
                                             <i
                                                class="fas fa-plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="add-menu-left">
                                                <ul>
                                                    <li><a
                                                            href="{{ route('FrontNewborncare') }}"><span>Newborn
                                                                Care &
                                                                Consultation</span>
                                                        </a></li>
                                                    <li><a
                                                            href="{{ route('FrontWellbabyvisits') }}"><span>Well-Baby
                                                                clinic / Routine
                                                                Checkups</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontChildgrowth') }}"><span>Child
                                                                Growth &
                                                                Development
                                                                Assessment</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontVaccination') }}"><span>Vaccination
                                                                clinic</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontNutrition') }}"><span>Nutrition
                                                                & Feeding
                                                                Advice</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontSchoolphysical') }}"><span>School
                                                                Physical &
                                                                Fitness
                                                                Certificates</span></a></li>
                                                    <li><a
                                                            href="{{ route('FrontAdolescenthealth') }}"><span>Adolescent
                                                                Health
                                                                Checkups</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li><a href="{{ route('FrontBlog') }}">Blog</a></li>
                                    <li>
                                        <a href="#">Gallery <i class="fas fa-plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="add-menu-left">
                                                <ul>
                                                    <li><a
                                                            href="{{ route('FrontPhotogallery') }}"><span>Photos</span>
                                                        </a></li>
                                                    <li><a
                                                            href="{{ route('FrontVideogallery') }}"><span>Videos</span></a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('FrontContact') }}">Contact
                                            Us</a></li>
                                </ul>
                                <ul class="social-media">
                                    <li><a target="_blank"
                                            href="https://www.facebook.com/"
                                            class="btn btn-primary"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="_blank"
                                            href="https://www.linkedin.com/"
                                            class="btn btn-primary"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a target="_blank"
                                            href="https://twitter.com/"
                                            class="btn btn-primary"><i
                                                class="fab fa-twitter"></i></a></li>
                                </ul>
                                <div class="menu-close">
                                    <i class="ti-close"></i>
                                </div>
                            </div>
                            <!-- Navigation Menu END ==== -->
                        </div>
                    </div>
                </div>
                <!-- main header END -->
            </header>
            <!-- header END -->