<!-- HERO SLIDER SECTION -->
@if(isset($heroSlides) && $heroSlides->isNotEmpty())
<section class="hero-slider" id="heroVideoSection">

    @foreach($heroSlides as $slide)
        <div class="hero-slide {{ $loop->first ? 'active' : '' }}" 
             data-type="{{ $slide->media_type }}" 
             @if($slide->media_type === 'image') data-duration="{{ $slide->duration }}" @endif>

            @if($slide->media_type === 'video')
                <video id="heroVideo" autoplay muted playsinline class="hero-video">
                    <source src="{{ asset($slide->media_path) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @else
                <img src="{{ asset($slide->media_path) }}" alt="{{ $slide->alt_text ?? $slide->title }}">
            @endif

            <div class="overlay-text">
                @if($slide->badge)
                    <span class="hero-badge">{{ $slide->badge }}</span>
                @endif

                <h1 class="hero-title">{{ $slide->title }}</h1>

                @if($slide->subtitle)
                    <p class="hero-subtitle">{{ $slide->subtitle }}</p>
                @endif

                @if(!empty($slide->highlights))
                    <ul class="course-list">
                        @foreach($slide->highlights as $item)
                            <li>
                                <i class="fas fa-check-circle"></i> 
                                <span class="course-tagline">{{ $item['tagline'] ?? '' }}</span> {{ $item['text'] ?? '' }}
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if($slide->cta_text)
                    <div class="hero-cta-group">
                        <a href="{{ $slide->cta_url }}" 
                           class="hero-btn primary"
                           @if($slide->is_modal) data-bs-toggle="modal" data-bs-target="#registerModal" @endif>
                            {{ $slide->cta_text }} <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    @endforeach

    <!-- Dot Navigation Controls -->
    @if($heroSlides->count() > 1)
        <div class="hero-dots-nav" id="heroDotsNav">
            @foreach($heroSlides as $slide)
                <button class="hero-dot {{ $loop->first ? 'active' : '' }}" 
                        data-slide="{{ $loop->index }}" 
                        aria-label="Slide {{ $loop->iteration }}"></button>
            @endforeach
        </div>
    @endif

</section>
@endif