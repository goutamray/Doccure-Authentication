        <!-- Header -->
        <header class="header header-trans header-two">
            <div class="container">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn"
                            href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="{{ route('home.page') }}"
                            class="navbar-brand logo">
                            <img src="{{ asset('frontend/assets/img/logo.png') }}"
                                class="img-fluid"
                                alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="{{ route('home.page') }}"
                                class="menu-logo">
                                <img src="{{ asset('frontend/assets/img/logo.png') }}"
                                    class="img-fluid"
                                    alt="Logo">
                            </a>
                            <a id="menu_close"
                                class="menu-close"
                                href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">
                            <li class="has-submenu megamenu active">
                                <a href="{{ route('home.page') }}">Home </a>

                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Doctors <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('dactorDashboard.page') }}">Doctor Dashboard</a></li>
                                    <li><a href="doctor-profile.html">Doctor Profile</a></li>
                                    <li><a href="doctor-profile-settings.html">Profile Settings</a></li>

                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Patients <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('patientDashboard.page') }}">Patient Dashboard</a></li>
                                    <li><a href="patient-profile.html">Patients Profile</a></li>
                                    <li><a href="profile-settings.html">Profile Settings</a></li>
                                    <li><a href="change-password.html">Change Password</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Admin <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="admin/index.html"
                                            target="_blank">Admin</a></li>
                                    <li><a href="pharmacy/index.html"
                                            target="_blank">Pharmacy Admin</a></li>
                                </ul>
                            </li>
                            <li class="login-link">
                                <a href="{{route('login.page')}}">Login / Signup</a>
                            </li>

                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                        @if(!Auth::guard('patient') -> check())
                        <li class="nav-item">
                            <a class="nav-link header-login"
                                href="{{route('login.page')}}">login / Signup </a>
                        </li>
                        @endif

                        @if(Auth::guard('patient') -> check())
                        <li class="nav-item dropdown has-arrow logged-item">
                            <a href="#"
                                class="dropdown-toggle nav-link"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span class="user-img">
                                    <img class="rounded-circle"
                                        src="https://images.vexels.com/content/145908/preview/male-avatar-maker-2a7919.png"
                                        width="31"
                                        alt="Goutam Ray">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="user-header">
                                    <div class="avatar avatar-sm">
                                        <img src="https://images.vexels.com/content/145908/preview/male-avatar-maker-2a7919.png"
                                            alt="Avater"
                                            class="avatar-img rounded-circle">
                                    </div>
                                    <div class="user-text">
                                        <h6>{{ Auth::guard('patient') -> user() -> name }}</h6>
                                        <p class="text-muted mb-0"> {{ Auth::guard('patient') -> user() -> phone }} </p>
                                    </div>
                                </div>
                                <a class="dropdown-item"
                                    href="{{ route('patientDashboard.page') }}">Dashboard</a>
                                <a class="dropdown-item"
                                    href="{{ route('patientSetting.page') }}">Profile Settings</a>
                                <a class="dropdown-item"
                                    href="{{ route('patient.logout')}}">Logout</a>
                            </div>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </header>
        <!-- /Header -->