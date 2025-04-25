<nav class="dashboard-menu">
    <ul>
        <li class="active">
            <a href="{{ route('patientDashboard.page') }}">
                <i class="fas fa-columns"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('patientSetting.page') }}">
                <i class="fas fa-user-cog"></i>
                <span>Profile Settings</span>
            </a>
        </li>
        <li>
            <a href="{{ route('patientPassword.page') }}">
                <i class="fas fa-lock"></i>
                <span>Change Password</span>
            </a>
        </li>
        <li>
            <a href="{{ route('patient.logout') }}">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</nav>