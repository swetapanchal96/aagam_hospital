<?php 
$role = auth()->user()->role_id;

$loginUser = auth()->user();
$userId=auth()->user()->id;
$user_role_id=session()->get('user_role_id');
?>
<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu"></span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link @if (request()->routeIs('home')) {{ 'active' }} @endif"
                                    href="{{ route('home') }}">
                                    <i class="mdi mdi-speedometer"></i>
                                    <span data-key="t-dashboards">Dashboards</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link menu-link @if (request()->routeIs('gallery.index') || request()->routeIs('video.index')) {{ 'active' }} @endif"
                                    href="#" id="manageCatalogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-th-large"></i>
                                    <span data-key="t-dashboards">Gallery</span>
                                    <i class="fa-solid fa-chevron-down ms-2"></i> <!-- Dropdown Arrow -->
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="manageCatalogDropdown">
                                    <li>
                                        <a class="dropdown-item @if (request()->routeIs('gallery.index')) {{ 'active' }} @endif"
                                            href="{{ route('gallery.index') }}">
                                            <i class="fa-regular fa fa-images"></i> Photo Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item @if (request()->routeIs('video.index')) {{ 'active' }} @endif"
                                            href="{{ route('video.index') }}">
                                            <i class="fa-solid fa fa-video"></i> Video Gallery
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link @if (request()->routeIs('Appointment.index')) active @endif"
                                    href="{{ route('appointment.index') }}">
                                    <i class="fa-solid fa-calendar-check"></i>
                                    <span data-key="t-dashboards">Appointment Master</span>
                                </a>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ route('services.index') }}">
                                    <i class="fas fa-cogs"></i> 
                                    <span>Service Master</span>
                                </a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link menu-link @if (request()->routeIs('gallery.index')) {{ 'active' }} @endif"
                                    href="{{ route('gallery.index') }}">
                                    <i class="fa-solid fa fa-images"></i>
                                    <span data-key="t-dashboards">Gallery</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link @if (request()->routeIs('video.index')) {{ 'active' }} @endif"
                                    href="{{ route('video.index') }}">
                                    <i class="fa-solid fa fa-video"></i>
                                    <span data-key="t-dashboards">Video</span>
                                </a>
                            </li>-->
                          
                            
                            <li class="nav-item">
                                <a class="nav-link menu-link @if (request()->routeIs('testimonial.index')) {{ 'active' }} @endif"
                                    href="{{ route('testimonial.index') }}">
                                    <i class="fa-solid fa-quote-left"></i>
                                    <span data-key="t-dashboards">Testimonial</span>
                                </a>
                            </li>
                             <!-- <li class="nav-item">
                                <a class="nav-link menu-link @if (request()->routeIs('faq.index')) {{ 'active' }} @endif"
                                    href="{{ route('faq.index') }}">
                                    <i class="fa-solid fa-question-circle"></i>
                                    <span data-key="t-dashboards">FAQ</span>
                                </a>
                            </li> -->
                            
                            <li class="nav-item">
                                <a class="nav-link menu-link @if (request()->routeIs('metaData.index')) {{ 'active' }} @endif"
                                    href="{{ route('metaData.index') }}">
                                    <i class="fa-solid fa-list"></i>
                                    <span data-key="t-dashboards">Meta Data</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link @if (request()->routeIs('Blog.index')) {{ 'active' }} @endif"
                                    href="{{ route('Blog.index') }}">
                                    <i class="fa-solid fa-blog"></i>
                                    <span data-key="t-dashboards">Blog</span>
                                </a>
                            </li>
                          

                            <li class="nav-item">
                                <a class="nav-link menu-link @if (request()->routeIs('Inquiry.index')) {{ 'active' }} @endif"
                                    href="{{ route('Inquiry.index') }}">
                                    <i class="fa-solid fa-circle-question"></i>
                                    <span data-key="t-dashboards">Inquiry</span>
                                </a>
                            </li>
                            
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>