@extends('layouts.app')

@section('title', 'Department of Languages - Saegis Campus')

@section('content')
<!-- BREADCRUMBS BANNER -->
<section class="inner_banner_bread_crumbs margin_bottom_30" style="background: url('/images/inner_pages_banner/news_and_events.jpg');">
    <div class="container-fluid container-xl">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread_crumbs_padding_inner_txt">
                    <h1 class="font_white bullet_title">Department of Languages</h1>
                    <h3 class="font_light_blue bullet_title">The right place for your higher education!</h3>
                </div>
                <div class="d-flex align-items-center bc_max_width">
                    <div class="d-flex me-4 align-items-center">
                        <a href="/" class="font_white">Home</a>
                    </div>
                    <div class="d-flex me-4 align-items-center">
                        <a href="/Faculty-of-Management" class="font_white">Faculty of Management</a>
                    </div>
                    <div class="d-flex me-4 align-items-center">
                        <span class="font_white">Department of Languages</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STICKY SUB-PAGE NAVIGATOR (MATCHING MANAGEMENT DEPT) -->
<nav class="dept-sticky-nav">
    <div class="container-fluid container-xl">
        <div class="dept-nav-wrapper">
            <div class="dept-nav-links">
                <a href="#overview" class="dept-nav-item active">Overview</a>
                <a href="#undergraduate" class="dept-nav-item">Undergraduate</a>
                <a href="#certifications" class="dept-nav-item">Certifications</a>
                <a href="#diplomas" class="dept-nav-item">Diplomas</a>
            </div>
            <div class="dept-nav-cta">
                <a href="#" class="dept-btn-enquire" data-bs-toggle="modal" data-bs-target="#registerModal">
                    <i class="far fa-comment-dots me-1"></i> Enquire
                </a>
                <a href="#" class="dept-btn-apply" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Apply Now <i class="fas fa-chevron-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- OVERVIEW SECTION -->
<section id="overview" class="dept-section-spacing bg-white">
    <div class="container-fluid container-xl">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="dept-dual-title margin_bottom_15">
                    Department <span class="font_light_blue">Overview</span>
                </h2>
                <p class="font_dark_gray fs-16 leading-relaxed mb-0">
                    The Department of Languages at Saegis Campus is dedicated to empowering students through comprehensive linguistic, literature, and communication training. Our programs foster advanced communication skills, analytical thinking, and global cultural awareness, preparing graduates for key roles in international relations, education, corporate communications, and digital media.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- AVAILABLE COURSES SECTION -->
<section class="dept-courses-section dept-section-spacing bg-light">
    <div class="container-fluid container-xl">
        
        <!-- Main Section Title -->
        <div class="dept-courses-main-header margin_bottom_68">
            <h1 class="dept-main-title display-6">
                Available <span class="font_light_blue">Courses</span>
            </h1>
        </div>

        <!-- SUBSECTION 1: UNDERGRADUATE DEGREES -->
        <div id="undergraduate" class="dept-course-category-block margin_bottom_90">
            <div class="category-title-header margin_bottom_40">
                <h2 class="category-heading">
                    <i class="fas fa-graduation-cap me-2 font_light_blue"></i>
                    Undergraduate <span class="font_light_blue">Degrees</span>
                </h2>
                <p class="text-muted fs-15 mt-2 mb-0">Degree programmes designed to build expert linguistic and communication competencies.</p>
            </div>

            <div class="row g-4">
                <!-- 1. BA in English -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/Bachelor-of-Arts-in-English" class="img-fluid rounded-2 w-100" alt="Bachelor of Arts in English" onerror="this.onerror=null;this.src='/images/programs/management/Bachelor-of-Arts-in-English.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Bachelor of Arts in English</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The BA in English is a well-structured degree designed to develop advanced skills in language, literature, and communication. Students gain strong abilities in critical thinking, academic writing, and literary analysis.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/17?slug=bachelor-of-arts-in-english" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUBSECTION 2: CERTIFICATIONS -->
        <div id="certifications" class="dept-course-category-block margin_bottom_90">
            <div class="category-title-header margin_bottom_40">
                <h2 class="category-heading">
                    <i class="fas fa-certificate me-2 font_light_blue"></i>
                    Certifications & <span class="font_light_blue">Dual Programmes</span>
                </h2>
                <p class="text-muted fs-15 mt-2 mb-0">Multi-disciplinary certification programmes blending language proficiency with technical skills.</p>
            </div>

            <div class="row g-4">
                <!-- 1. Dual Certificate in English and IT -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/Bachelor-of-Arts-in-English" class="img-fluid rounded-2 w-100" alt="Dual Certificate in English and IT" onerror="this.onerror=null;this.src='/images/programs/management/Bachelor-of-Arts-in-English.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Dual Certificate in English and Information Technology</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The Dual Certificate in English and IT offers a unique blend of skills crucial in today's digital world. It equips students with strong communication abilities alongside foundational computing and IT competencies.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/44?slug=dual-certificate-in-english-and-information-technology" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUBSECTION 3: DIPLOMAS -->
        <div id="diplomas" class="dept-course-category-block">
            <div class="category-title-header margin_bottom_40">
                <h2 class="category-heading">
                    <i class="fas fa-award me-2 font_light_blue"></i>
                    Diplomas & <span class="font_light_blue">Specialized Courses</span>
                </h2>
                <p class="text-muted fs-15 mt-2 mb-0">Globally recognized qualifications validating proficiency across language domains.</p>
            </div>

            <div class="row g-4">
                <!-- 1. Diploma in English -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/Bachelor-of-Arts-in-English" class="img-fluid rounded-2 w-100" alt="Diploma in English" onerror="this.onerror=null;this.src='/images/programs/management/Bachelor-of-Arts-in-English.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Diploma in English</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The Pearson Assured Diploma in English is a prestigious and globally recognized qualification designed to validate candidates' English language proficiency across reading, writing, listening, and speaking.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/Diploma-in-English" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection