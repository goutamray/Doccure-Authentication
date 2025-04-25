<!-- Profile Sidebar -->
<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
    <div class="profile-sidebar">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">
                <a href="#"
                    class="booking-doc-img">
                    <img src="https://images.vexels.com/content/145908/preview/male-avatar-maker-2a7919.png"
                        alt="User Image">
                </a>
                <div class="profile-det-info">
                    <h3>{{ Auth::guard('patient') -> user() -> name }}</h3>
                    <p>{{ Auth::guard('patient') -> user() -> email }}</p>
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
<!-- / Profile Sidebar -->