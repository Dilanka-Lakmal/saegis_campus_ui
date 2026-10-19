<!-- TOPBAR -->
<div class="topbar">
    <div class="container topbar-inner">
        <!-- Left Side: Mail & Phone -->
        <div class="topbar-left">
            <a href="mailto:info@saegis.ac.lk" class="topbar-item">
                <img src="{{ asset('images/icons/mail.png') }}" alt="Mail Icon" class="topbar-icon">
                <span>info@saegis.ac.lk</span>
            </a>

            <a href="tel:+94770430000" class="topbar-item">
                <img src="{{ asset('images/icons/phone.png') }}" alt="Phone Icon" class="topbar-icon">
                <span>+94 770430000 / +94 117430000</span>
            </a>
        </div>

        <!-- Right Side: Student Portal & Search Input -->
        <div class="topbar-right">
            <a href="#" class="topbar-item student-portal" data-bs-toggle="modal" data-bs-target="#studentPortalModal">
                <img src="{{ asset('images/icons/user.png') }}" alt="User Icon" class="topbar-icon">
                <span>Student Portal</span>
            </a>

            <div class="topbar-search">
                <input type="text" placeholder="Search" aria-label="Search">
            </div>
        </div>
    </div>
</div>