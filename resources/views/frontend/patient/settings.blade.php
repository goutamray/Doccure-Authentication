@extends("frontend.layouts.app")

@section("main")

<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">Profile Settings</h2>
                <nav aria-label="breadcrumb"
                    class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"
                            aria-current="page">Profile Settings</li>
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

            <!-- Profile Sidebar -->
            <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                <div class="profile-sidebar">
                    <div class="widget-profile pro-widget-content">
                        <div class="profile-info-widget">
                            <a href="#"
                                class="booking-doc-img">
                                <img src="{{asset('frontend/assets/img/patients/patient.jpg') }}"
                                    alt="User Image">
                            </a>
                            <div class="profile-det-info">
                                <h3>Richard Wilson</h3>
                                <div class="patient-details">
                                    <h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
                                    <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-widget">
                        @include('frontend.patient.menu')
                    </div>

                </div>
            </div>
            <!-- /Profile Sidebar -->

            <div class="col-md-7 col-lg-8 col-xl-9">
                <div class="card">
                    <div class="card-body">

                        <!-- Profile Settings Form -->
                        <form>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="mb-3">
                                        <div class="change-avatar">
                                            <div class="profile-img">
                                                <img src="{{asset('frontend/assets/img/patients/patient.jpg') }}"
                                                    alt="User Image">
                                            </div>
                                            <div class="upload-img">
                                                <div class="change-photo-btn">
                                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                    <input type="file"
                                                        class="upload">
                                                </div>
                                                <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of
                                                    2MB</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">First Name</label>
                                        <input type="text"
                                            class="form-control"
                                            value="Richard">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">Last Name</label>
                                        <input type="text"
                                            class="form-control"
                                            value="Wilson">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text"
                                                class="form-control datetimepicker"
                                                value="24-07-1983">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">Blood Group</label>
                                        <select class="form-select form-control">
                                            <option>A-</option>
                                            <option>A+</option>
                                            <option>B-</option>
                                            <option>B+</option>
                                            <option>AB-</option>
                                            <option>AB+</option>
                                            <option>O-</option>
                                            <option>O+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">Email ID</label>
                                        <input type="email"
                                            class="form-control"
                                            value="richard@example.com">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">Mobile</label>
                                        <input type="text"
                                            value="+1 202-555-0125"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="mb-2">Address</label>
                                        <input type="text"
                                            class="form-control"
                                            value="806 Twin Willow Lane">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">City</label>
                                        <input type="text"
                                            class="form-control"
                                            value="Old Forge">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">State</label>
                                        <input type="text"
                                            class="form-control"
                                            value="Newyork">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">Zip Code</label>
                                        <input type="text"
                                            class="form-control"
                                            value="13420">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">Country</label>
                                        <input type="text"
                                            class="form-control"
                                            value="United States">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit"
                                    class="btn btn-primary submit-btn">Save Changes</button>
                            </div>
                        </form>
                        <!-- /Profile Settings Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /Page Content -->



@endsection