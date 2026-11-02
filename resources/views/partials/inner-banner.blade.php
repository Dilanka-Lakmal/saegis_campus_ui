<section class="inner_banner_bread_crumbs margin_bottom_30 {{ isset($pageBanner['variant']) ? 'inner_banner_bread_crumbs--' . $pageBanner['variant'] : '' }}">
    <div class="container">
        <div class="banner-text">
            <h1>{{ $pageBanner['title'] }}</h1>
            <p class="banner-subtitle">{{ $pageBanner['subtitle'] ?? '' }}</p>

            <nav class="banner-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span>{{ $pageBanner['title'] }}</span>
            </nav>
        </div>
    </div>
</section>