<!-- HERO SLIDER SECTION -->
<section class="hero-slider" id="heroVideoSection">

    <!-- SLIDE 0: Video Slide -->
    <div class="hero-slide active" data-type="video">
        <video id="heroVideo" autoplay muted playsinline class="hero-video">
            <source src="{{ asset('videos/campus-hero.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay-text">
            <span class="hero-badge">INTAKE NOW OPEN • SEPTEMBER 2026</span>
            <h1 class="hero-title">Upgrade Your Qualification To A Degree</h1>
            <p class="hero-subtitle">Fast-track your career with globally recognized undergraduate degrees, HNDs, and professional diplomas designed for future leaders.</p>
            <ul class="course-list">
                <li><i class="fas fa-check-circle"></i> <span class="course-tagline">BSc (Hons)</span> Business Management</li>
                <li><i class="fas fa-check-circle"></i> <span class="course-tagline">BSc (Hons)</span> Computer Science & Software Engineering</li>   
                <li><i class="fas fa-check-circle"></i> <span class="course-tagline">Pearson BTEC</span> Higher National Diplomas (HND)</li>
            </ul>
            <div class="hero-cta-group">
                <a href="#" class="hero-btn primary" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Apply Now <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- SLIDE 1: Graduation & Higher Education -->
    <div class="hero-slide" data-type="image" data-duration="5000">
        <img src="{{ asset('images/banners/img_001.jpg') }}" alt="Saegis Graduation Banner">
        <div class="overlay-text">
            <span class="hero-badge">GRADUATE WITH DISTINCTION</span>
            <h1 class="hero-title">Empowering Future Leaders & Professionals</h1>
            <p class="hero-subtitle">Gain world-class education with top-ranked UK university partnerships and industry-driven curricula tailored for global employability.</p>
            <ul class="course-list">
                <li><i class="fas fa-check-circle"></i> <span class="course-tagline">UK Top-Up</span> BEng (Hons) Software Engineering</li>
                <li><i class="fas fa-check-circle"></i> <span class="course-tagline">MBA</span> International Business Management</li>
            </ul>
            <div class="hero-cta-group">
                <a href="#" class="hero-btn primary" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Explore Programmes <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- SLIDE 2: Computing & Technology -->
    <div class="hero-slide" data-type="image" data-duration="5000">
        <img src="{{ asset('images/banners/img_002.jpg') }}" alt="Saegis Computing Banner">
        <div class="overlay-text">
            <span class="hero-badge">FACULTY OF COMPUTING</span>
            <h1 class="hero-title">Master Cyber Security, AI & Data Intelligence</h1>
            <p class="hero-subtitle">Step into the tech industry with hands-on lab training, practical projects, and recognized Pearson BTEC HND qualifications.</p>
            <ul class="course-list">
                <li><i class="fas fa-check-circle"></i> <span class="course-tagline">BTEC Level 5</span> HND in Computing & Network Engineering</li>
                <li><i class="fas fa-check-circle"></i> <span class="course-tagline">BSc (Hons)</span> Cyber Security & Computer Forensics</li>
            </ul>
            <div class="hero-cta-group">
                <a href="/department-of-computing" class="hero-btn primary">
                    View IT Courses <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- SLIDE 3: Management & Languages -->
    <div class="hero-slide" data-type="image" data-duration="5000">
        <img src="{{ asset('images/banners/img_003.jpg') }}" alt="Saegis Management Banner">
        <div class="overlay-text">
            <span class="hero-badge">FACULTY OF MANAGEMENT</span>
            <h1 class="hero-title">Excellence in Business, Finance & Languages</h1>
            <p class="hero-subtitle">Accelerate your career in corporate leadership, international marketing, logistics, and professional English communications.</p>
            <ul class="course-list">
                <li><i class="fas fa-check-circle"></i> <span class="course-tagline">BBM (Hons)</span> Human Resources & Marketing</li>
                <li><i class="fas fa-check-circle"></i> <span class="course-tagline">BA</span> English & Dual Certifications</li>
            </ul>
            <div class="hero-cta-group">
                <a href="/department-of-management" class="hero-btn primary">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Dot Navigation Controls -->
    <div class="hero-dots-nav" id="heroDotsNav">
        <button class="hero-dot active" data-slide="0" aria-label="Slide 1"></button>
        <button class="hero-dot" data-slide="1" aria-label="Slide 2"></button>
        <button class="hero-dot" data-slide="2" aria-label="Slide 3"></button>
        <button class="hero-dot" data-slide="3" aria-label="Slide 4"></button>
    </div>

</section>