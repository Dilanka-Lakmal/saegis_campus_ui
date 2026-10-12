<!-- MAIN HEADER -->
<header class="main-header">
    <div class="container header-inner">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
            <div class="logo-img">
                <img src="{{ asset('images/logo.png') }}" alt="Saegis Campus Logo">
            </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="main-nav">
            <ul class="nav-list" id="desktopNav"></ul>
        </nav>

        <!-- Mobile Hamburger Button -->
        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <!-- Mobile Vertical Dropdown Menu -->
    <nav class="mobile-nav" id="mobileNav"></nav>
</header>