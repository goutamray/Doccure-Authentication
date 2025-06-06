@extends("frontend.layouts.app")



@section("main")

<!-- Page Content -->
<div class="content top-space">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Register Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-6 login-left">
                            <img src="{{ asset('frontend/assets/img/login-banner.png') }}"
                                class="img-fluid"
                                alt="Doccure Register">
                        </div>
                        <div class="col-md-12 col-lg-6 login-right">
                            <div class="login-header">
                                <h3>Patient Register <a href="{{ route('dactorRegister.page') }}">Are you a Doctor?</a>
                                </h3>
                            </div>

                            @include('validate')
                            <!-- Register Form -->
                            <form action="{{ route('patient.register') }}"
                                method="POST">
                                @csrf
                                <div class="mb-3 form-focus">
                                    <input type="text"
                                        class="form-control floating"
                                        name="name">
                                    <label class="focus-label">Name</label>
                                </div>
                                <div class="mb-3 form-focus">
                                    <input type="text"
                                        class="form-control floating"
                                        name="email">
                                    <label class="focus-label"> Email </label>
                                </div>
                                <div class="mb-3 form-focus">
                                    <input type="text"
                                        class="form-control floating"
                                        name="phone">
                                    <label class="focus-label">Phone Number</label>
                                </div>
                                <div class="mb-3 form-focus">
                                    <input type="password"
                                        class="form-control floating"
                                        name="password">
                                    <label class="focus-label">Create Password</label>
                                </div>
                                <div class="text-end">
                                    <a class="forgot-link"
                                        href="{{ route('login.page') }}">Already have an account?</a>
                                </div>
                                <button class="btn btn-primary w-100 btn-lg login-btn"
                                    type="submit">Signup</button>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>
                                <div class="row social-login">
                                    <div class="col-6">
                                        <a href="#"
                                            class="btn btn-facebook w-100"><i class="fab fa-facebook-f me-1"></i>
                                            Login</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#"
                                            class="btn btn-google w-100"><i class="fab fa-google me-1"></i> Login</a>
                                    </div>
                                </div>
                            </form>
                            <!-- /Register Form -->

                        </div>
                    </div>
                </div>
                <!-- /Register Content -->

            </div>
        </div>

    </div>

</div>
<!-- /Page Content -->

@endsection