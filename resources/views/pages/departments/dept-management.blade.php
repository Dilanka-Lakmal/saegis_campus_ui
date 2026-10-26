@extends('layouts.app')

@section('title', 'Department of Management - Saegis Campus')

@section('content')
<!-- BREADCRUMBS BANNER -->
<section class="inner_banner_bread_crumbs margin_bottom_30" style="background: url('/images/inner_pages_banner/news_and_events.jpg');">
    <div class="container-fluid container-xl">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread_crumbs_padding_inner_txt">
                    <h1 class="font_white bullet_title">Department of Management</h1>
                    <h3 class="font_light_blue bullet_title">The right place for your higher education!</h3>
                </div>
                <div class="d-flex align-items-center bc_max_width">
                    <div class="d-flex me-4 align-items-center">
                        <a href="/" class="font_white">Home</a>
                    </div>
                    <div class="d-flex me-4 align-items-center">
                        <a href="/faculty-of-management" class="font_white">Faculty of Management</a>
                    </div>
                    <div class="d-flex me-4 align-items-center">
                        <span class="font_white">Department of Management</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STICKY SUB-PAGE NAVIGATOR -->
<nav class="dept-sticky-nav">
    <div class="container-fluid container-xl">
        <div class="dept-nav-wrapper">
            <div class="dept-nav-links">
                <a href="#overview" class="dept-nav-item active">Overview</a>
                <a href="#undergraduate" class="dept-nav-item">Undergraduate</a>
                <a href="#top-up" class="dept-nav-item">Top-Up Degrees</a>
                <a href="#hnd" class="dept-nav-item">HND Programmes</a>
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
                    The Department of Management at Saegis Campus is dedicated to developing future-ready corporate leaders, entrepreneurs, and management professionals. Through industry-focused curricula, world-class academic partnerships, and practical learning frameworks, our students gain the strategic vision and practical acumen required to excel in today's dynamic global marketplace.
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
                <p class="text-muted fs-15 mt-2 mb-0">Four-year UGC-recognized honours degree programmes designed for future leaders.</p>
            </div>

            <div class="row g-4">
                <!-- 1. BBM Honours -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bachelor-of-business-management-honours-1756411095.jpg" class="img-fluid rounded-2 w-100" alt="BBM Honours" onerror="this.onerror=null;this.src='/images/programs/bachelor-of-business-management-honours-1756411095.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Bachelor of Business Management Honours</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The Bachelor of Business Management (Honours) Degree is a four-year academic program comprising 120 credits, designed to provide students with a solid foundation in core management principles and practice.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/10?slug=bachelor-of-business-management-honours" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. BBM Honours in HRM -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bachelor-of-business-management-honours-in-hrm-1756411293.jpg" class="img-fluid rounded-2 w-100" alt="BBM HRM" onerror="this.onerror=null;this.src='/images/programs/bachelor-of-business-management-honours-in-hrm-1756411293.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Bachelor of Business Management Honours in HRM</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The Bachelor of Business Management Honours in Human Resource Management is a four-year degree program totaling 120 academic credits, designed to develop future professionals with specialized strategic HR knowledge.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/11?slug=bachelor-of-business-management-honours-in-hrm" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3. BBM Honours in Marketing -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bachelor-of-business-management-honours-in-marketing-1756411431.jpg" class="img-fluid rounded-2 w-100" alt="BBM Marketing" onerror="this.onerror=null;this.src='/images/programs/bachelor-of-business-management-honours-in-marketing-1756411431.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Bachelor of Business Management Honours in Marketing</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The Bachelor of Business Management Honours in Marketing is a four-year degree program comprising 120 academic credits, designed to provide students with a strong foundation in modern marketing principles.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/12?slug=bachelor-of-business-management-honours-in-marketing" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 4. BBM Honours in Accounting & Finance -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bachelor-of-business-management-honours-in-accounting-&-finance-1756411609.jpg" class="img-fluid rounded-2 w-100" alt="BBM Accounting" onerror="this.onerror=null;this.src='/images/programs/bachelor-of-business-management-honours-in-accounting-&-finance-1756411609.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Bachelor of Business Management Honours in Accounting & Finance</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The Bachelor of Business Management Honours in Accounting & Finance is a four-year degree program comprising 120 academic credits, designed to develop theoretical and practical financial expertise.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/13?slug=bachelor-of-business-management-honours-in-accounting-finance" class="btn_a overlay text-decoration-none">
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

        <div class="row g-4 mb-5">
                <!-- 5. BBM Honours in Logistics and Supply Chain Management -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bachelor-of-business-management-honours-in-logistics-and-supply-chain-management-1756411819.jpg" class="img-fluid rounded-2 w-100" alt="BBM Honours" onerror="this.onerror=null;this.src='/images/programs/bachelor-of-business-management-honours-1756411095.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Bachelor of Business Management Honours in Logistics and Supply Chain Management</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The Bachelor of Business Management (Honours) in Logistics and Supply Chain Management Degree is a four-year academic program comprising 120 credits, designed to provide students with a solid foundation in logistics, supply chain management, and industry practices.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/10?slug=bachelor-of-business-management-honours" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            

                <!-- 6. Bachelor of Business Administration -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bachelor-of--business-administration-1756411975.jpg" class="img-fluid rounded-2 w-100" alt="BBM HRM" onerror="this.onerror=null;this.src='/images/programs/bachelor-of-business-management-honours-in-hrm-1756411293.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Bachelor of Business Administration</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                           The Bachelor of Business Administration is a three-year degree program designed to provide students with a solid foundation in core areas of business and management.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/11?slug=bachelor-of-business-management-honours-in-hrm" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 7. BBM Honours in Tourism and Hospitality Management -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bachelor-of-business-management-honours-in-tourism-and-hospitality-management-1756412136.jpg" class="img-fluid rounded-2 w-100" alt="BBM Marketing" onerror="this.onerror=null;this.src='/images/programs/bachelor-of-business-management-honours-in-marketing-1756411431.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Bachelor of Business Management Honours in Tourism and Hospitality Management</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                           The Bachelor of Business Management (Honours) in Tourism and Hospitality Management Degree is a four-year academic program designed to provide students with a solid foundation in tourism, hospitality management, and industry practices.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/12?slug=bachelor-of-business-management-honours-in-marketing" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        <!-- SUBSECTION 2: TOP-UP DEGREES -->
        <div id="top-up" class="dept-course-category-block margin_bottom_90">
            <div class="category-title-header margin_bottom_40">
                <h2 class="category-heading">
                    <i class="fas fa-globe-americas me-2 font_light_blue"></i>
                    Top-Up <span class="font_light_blue">Degrees</span>
                </h2>
                <p class="text-muted fs-15 mt-2 mb-0">Offered in exclusive partnership with Canterbury Christ Church University (UK).</p>
            </div>

            <div class="row g-4">
                <!-- 1. BSc (Hons) Business Management (Top-Up) -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/BSc (Hons) Business Management_1756410038.jpg" class="img-fluid rounded-2 w-100" alt="BSc Top-Up" onerror="this.onerror=null;this.src='/images/programs/BSc (Hons) Business Management_1756410038.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">BSc (Hons) Business Management (Top-Up)</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The BSc (Hons) in Business Management, offered in exclusive partnership with Canterbury Christ Church University, is meticulously designed to provide you with comprehensive skills for corporate leadership.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/28?slug=bsc-hons-business-management" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. BSc (Hons) Accounting & Finance (Top-Up) -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bsc-(hons)-accounting-&-finance-1756414414.jpg" class="img-fluid rounded-2 w-100" alt="BSc Accounting Topup" onerror="this.onerror=null;this.src='/images/programs/bsc-(hons)-accounting-&-finance-1756414414.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">BSc (Hons) Accounting & Finance (Top-Up)</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The BSc (Hons) in Accounting & Finance, offered with Canterbury Christ Church University, is structured to equip students with in-depth analytical and financial knowledge.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/29?slug=bsc-hons-accounting-finance" class="btn_a overlay text-decoration-none">
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

        <!-- SUBSECTION 3: HIGHER NATIONAL DIPLOMAS -->
        <div id="hnd" class="dept-course-category-block margin_bottom_90">
            <div class="category-title-header margin_bottom_40">
                <h2 class="category-heading">
                    <i class="fas fa-layer-group me-2 font_light_blue"></i>
                    Higher National <span class="font_light_blue">Diplomas (HND)</span>
                </h2>
                <p class="text-muted fs-15 mt-2 mb-0">Pearson UK qualifications providing direct access to UK top-up degrees.</p>
            </div>

            <div class="row g-4">
                <!-- 1. HND in Business Management -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/hnd-in-business-(business-management)-1756414349.jpg" class="img-fluid rounded-2 w-100" alt="HND Business" onerror="this.onerror=null;this.src='/images/programs/hnd-in-business-(business-management)-1756414349.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">HND in Business (Business Management)</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            BTEC Higher Nationals are internationally-recognised qualifications equivalent to the first two years of a university degree.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/32?slug=hnd-in-business-business-management" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. HND in Business (Accounting & Finance) -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/hnd-in-business-(accounting-and-finance)-1756412765.jpg" class="img-fluid rounded-2 w-100" alt="HND Accounting" onerror="this.onerror=null;this.src='/images/programs/hnd-in-business-(accounting-and-finance)-1756412765.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">HND in Business (Accounting & Finance)</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            BTEC Higher Nationals at Level 4 and 5 offer practical vocational preparation for accounting and financial management roles.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/33?slug=hnd-in-business-accounting-and-finance" class="btn_a overlay text-decoration-none">
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

        <!-- SUBSECTION 4: DIPLOMAS -->
        <div id="diplomas" class="dept-course-category-block">
            <div class="category-title-header margin_bottom_40">
                <h2 class="category-heading">
                    <i class="fas fa-award me-2 font_light_blue"></i>
                    Diplomas & <span class="font_light_blue">Professional Certifications</span>
                </h2>
                <p class="text-muted fs-15 mt-2 mb-0">Specialized certifications tailored for immediate corporate deployment.</p>
            </div>

            <div class="row g-4">
                <!-- 1. Diploma in Event Management -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/pearson-international-level3-event-management.jpg" class="img-fluid rounded-2 w-100" alt="Event Management Diploma" onerror="this.onerror=null;this.src='/images/programs/pearson-international-level3-event-management.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Diploma in Event Management & Marketing</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            Pearson BTEC International Level 3 Specialist Diploma designed for students seeking specialist practical training in international event management.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://iemms.saegis.ac.lk/" target="_blank" rel="noopener noreferrer" class="btn_a overlay text-decoration-none">
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