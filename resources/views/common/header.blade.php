<?php 
$roleid = auth()->user()->role_id;
?>
<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
            @if($roleid == 2)
                <div class="navbar-brand-box horizontal-logo">
                    <a href="{{ route('userhome') }}" class="logo logo-dark">
                        <span class="logo-lg">
                            <img src="{{ asset ('assets/images/logo.png')}}" alt="" height="80">
                        </span>
                    </a>
                </div>
            @else
            <div class="navbar-brand-box horizontal-logo">
                    <a href="{{ route('home') }}" class="logo logo-dark">
                        <span class="logo-lg">
                            <img src="{{ asset ('assets/images/logo.png')}}" alt="" height="80">
                        </span>
                    </a>
                </div>    
            @endif
                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn shadow-none" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user"
                                src="{{ asset('assets/images/users/undraw_profile.webp') }}" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">
                                    {{ auth()->user()->full_name }}
                                </span>


                                <?php
                                $session = auth()->user()->id;
                                $role = App\Models\User::select('users.id', 'roles.name')
                                    ->where('users.id', $session)
                                    ->join('roles', 'users.role_id', '=', 'roles.id')
                                    ->first();
                                ?>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">
                                    {{ $role->name }}
                                </span>

                            </span>
                        </span>
                    </button>
                    <?php if($roleid == '1') 
                    { ?>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome {{ auth()->user()->full_name }}</h6>
                        <a class="dropdown-item" href="{{ route('profile.detail') }}"><i
                                class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle">Profile</span></a>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i
                                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                    <?php }else
                      { ?>
                      <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome {{ auth()->user()->full_name }}</h6>
                        <a class="dropdown-item" href="{{ route('profile.user-detail') }}"><i
                                class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle">Profile</span>
                        </a>
                        <a class="dropdown-item" href="{{ route('userlogout') }}"><i
                                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle" data-key="t-logout">Logout</span>
                        </a>
                        
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</header>
