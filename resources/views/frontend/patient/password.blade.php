@extends("frontend.layouts.app")

@section("main")

<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">Change Password</h2>
                <nav aria-label="breadcrumb"
                    class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"
                            aria-current="page">Change Password</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container">
        <div class="row">
            @include('frontend.patient.sidebar')

            <div class="col-md-7 col-lg-8 col-xl-9">
                <div class="card">
                    <div class="card-body">
                        @include("validate")
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <!-- Change Password Form -->
                                <form action="{{ route('patientPassword.change') }}"
                                    method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="mb-2">Old Password</label>
                                        <input type="password"
                                            name="old_pass"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">New Password</label>
                                        <input type="password"
                                            name="pass"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Confirm Password</label>
                                        <input type="password"
                                            name="pass_confirmation"
                                            class="form-control">
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit"
                                            class="btn btn-primary submit-btn">Save Changes</button>
                                    </div>
                                </form>
                                <!-- /Change Password Form -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /Page Content -->



@endsection