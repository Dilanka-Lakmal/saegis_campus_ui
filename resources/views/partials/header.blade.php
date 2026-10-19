<!-- MAIN HEADER -->
<header class="main-header">
    <div class="container header-inner">
        <!-- LOGO -->
        <a href="{{ url('/') }}" class="logo">
            <div class="logo-img">
                <img src="{{ asset('images/logo.png') }}" alt="saegis-logo">
            </div>
        </a>

        <!-- DESKTOP NAV -->
        <nav class="main-nav">
            <ul class="nav-list" id="desktopNav"></ul>
        </nav>

        <!-- MOBILE TOGGLE -->
        <button class="mobile-toggle" id="mobileToggle" aria-label="Open navigation" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <!-- MOBILE NAV -->
    <nav class="mobile-nav" id="mobileNav"></nav>
</header>

<!-- SEARCH OVERLAY -->
<div class="search-overlay" id="searchOverlay">
    <div class="search-panel">
        <div class="search-header">
            <h2>Search Saegis</h2>
            <button class="close-search" id="closeSearch">×</button>
        </div>
        <input type="search" class="search-input" id="searchInput" placeholder="Search programmes, faculties, news...">
    </div>
</div>