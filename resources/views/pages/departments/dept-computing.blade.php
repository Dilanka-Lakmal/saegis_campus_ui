@extends('layouts.app')

@section('title', 'Department of Computing & Technologies - Saegis Campus')

@section('content')
<!-- BREADCRUMBS BANNER -->
<section class="inner_banner_bread_crumbs margin_bottom_30" style="background: url('/images/computer-department.jpg');">
    <div class="container-fluid container-xl">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread_crumbs_padding_inner_txt">
                    <h1 class="font_white bullet_title">Department of Computing & Technologies</h1>
                    <h3 class="font_light_blue bullet_title">The right place for your higher education!</h3>
                </div>
                <div class="d-flex align-items-center bc_max_width">
                    <div class="d-flex me-4 align-items-center">
                        <a href="/" class="font_white">Home</a>
                    </div>
                    <div class="d-flex me-4 align-items-center">
                        <a href="/faculty-of-computing" class="font_white">Faculty of Computing & Technologies</a>
                    </div>
                    <div class="d-flex me-4 align-items-center">
                        <span class="font_white">Department of Computing & Technologies</span>
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
                <a href="#undergraduate" class="dept-nav-item">Undergraduate Degrees</a>
                <a href="#hnd" class="dept-nav-item">HND Programmes</a>
                <a href="#top-up" class="dept-nav-item">Top-Up Degrees</a>
                <a href="#foundation" class="dept-nav-item">Foundation</a>
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
                    The Department of Computing & Technologies at Saegis Campus is dedicated to developing world-class IT software engineers, cybersecurity specialists, data scientists, and network architects. Through hands-on laboratory experiences, industry-aligned curricula, and academic partnerships with global powerhouses like Canterbury Christ Church University and Pearson BTEC, we empower students to lead innovation in the evolving global digital economy.
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
                    <i class="fas fa-laptop-code me-2 font_light_blue"></i>
                    Undergraduate <span class="font_light_blue">Degrees</span>
                </h2>
                <p class="text-muted fs-15 mt-2 mb-0">Four-year honours degree programmes recognized by the Ministry of Education.</p>
            </div>

            <div class="row g-4">
                <!-- 1. BSc (Hons) Computer Science -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bsc-(hons)-computer-science-1756412989.jpg" class="img-fluid rounded-2 w-100" alt="BSc Computer Science" onerror="this.onerror=null;this.src='/images/programs/bsc-(hons)-computer-science-1756412989.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">BSc (Hons) Computer Science</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The BSc (Hons) in Computer Science intends to provide comprehensive theoretical foundations and practical skills across algorithmic problem solving, software design, and modern computing systems.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/19?slug=bsc-hons-computer-science" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. BSc (Hons) Software Engineering -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bsc-(hons)-software-engineering-1756413041.jpg" class="img-fluid rounded-2 w-100" alt="BSc Software Engineering" onerror="this.onerror=null;this.src='/images/programs/bsc-(hons)-software-engineering-1756413041.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">BSc (Hons) Software Engineering</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The BSc (Hons) in Software Engineering prepares students to engineer complex enterprise applications through rigorous software architecture, agile methodologies, and modern programming practices.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/20?slug=bsc-hons-software-engineering" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3. BSc (Hons) Information Technology -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bsc-(hons)-information-technology-1756413080.jpg" class="img-fluid rounded-2 w-100" alt="BSc Information Technology" onerror="this.onerror=null;this.src='/images/programs/bsc-(hons)-information-technology-1756413080.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">BSc (Hons) Information Technology</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The BSc (Hons) in Information Technology degree delivers specialized knowledge in database management, web systems development, network security, and IT infrastructure management.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/21?slug=bsc-hons-information-technology" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 4. Bachelor of Information Technology (BIT) -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bachelor-of-information-technology-1756413138.jpg" class="img-fluid rounded-2 w-100" alt="Bachelor of Information Technology" onerror="this.onerror=null;this.src='/images/programs/bachelor-of-information-technology-1756413138.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Bachelor of Information Technology (BIT)</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            The Bachelor of Information Technology (BIT) is a three-year degree program providing students with strong practical competence across modern software development and cloud technologies.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/23?slug=bachelor-of-information-technology" class="btn_a overlay text-decoration-none">
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

        <!-- SUBSECTION 2: HIGHER NATIONAL DIPLOMAS -->
        <div id="hnd" class="dept-course-category-block margin_bottom_90">
            <div class="category-title-header margin_bottom_40">
                <h2 class="category-heading">
                    <i class="fas fa-layer-group me-2 font_light_blue"></i>
                    Higher National <span class="font_light_blue">Diplomas (HND)</span>
                </h2>
                <p class="text-muted fs-15 mt-2 mb-0">Pearson UK BTEC Level 5 qualifications offering direct entry to final-year UK top-up degrees.</p>
            </div>

            <div class="row g-4">
                <!-- 1. HND Network Engineering -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/higher-national-diploma-in-network-engineering-1756413174.jpg" class="img-fluid rounded-2 w-100" alt="HND Network Engineering" onerror="this.onerror=null;this.src='/images/programs/higher-national-diploma-in-network-engineering-1756413174.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">BTEC HND in Computing (Network Engineering)</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            Pearson BTEC Level 5 HND in Network Engineering offers extensive practical training in network architecture, routing, protocols, and infrastructure security.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/24?slug=btec-hnd-in-computing-network-engineering" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. BTEC AI Solutions -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/btec-artificial-intelligence-(ai)-solutions-and-applications-1788501539.jpg" class="img-fluid rounded-2 w-100" alt="BTEC AI Solutions" onerror="this.onerror=null;this.src='/images/programs/btec-artificial-intelligence-(ai)-solutions-and-applications-1788501539.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">BTEC Artificial Intelligence (AI) Solutions & Applications</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            Designed to equip learners with cutting-edge expertise in machine learning, neural networks, natural language processing, and AI application engineering.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/55?slug=btec-artificial-intelligence-ai-solutions-and-applications" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3. BTEC Cybersecurity -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/btec-cybersecurity-1788501832.jpg" class="img-fluid rounded-2 w-100" alt="BTEC Cybersecurity" onerror="this.onerror=null;this.src='/images/programs/btec-cybersecurity-1788501832.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">BTEC Cybersecurity</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            A specialized digital security qualification covering vulnerability assessments, ethical hacking, digital forensics, and defensive network security.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/56?slug=btec-cybersecurity" class="btn_a overlay text-decoration-none">
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

        <!-- SUBSECTION 3: TOP-UP DEGREES -->
        <div id="top-up" class="dept-course-category-block margin_bottom_90">
            <div class="category-title-header margin_bottom_40">
                <h2 class="category-heading">
                    <i class="fas fa-globe-americas me-2 font_light_blue"></i>
                    Top-Up <span class="font_light_blue">Degrees</span>
                </h2>
                <p class="text-muted fs-15 mt-2 mb-0">UK degree completion programmes in exclusive partnership with Canterbury Christ Church University (UK).</p>
            </div>

            <div class="row g-4">
                <!-- 1. BEng (Hons) Software Engineering -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/beng-(hons)-software-engineering-1756413829.jpg" class="img-fluid rounded-2 w-100" alt="BEng Software Engineering" onerror="this.onerror=null;this.src='/images/programs/beng-(hons)-software-engineering-1756413829.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">BEng (Hons) Software Engineering (Top-Up)</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            Offered with Canterbury Christ Church University, this engineering top-up focuses on software engineering patterns, system reliability, and full-stack development.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/42?slug=beng-hons-software-engineering" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. BSc (Hons) Data Computing Intelligence -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bsc-(hons)-data-computing-intelligence-1787542113.png" class="img-fluid rounded-2 w-100" alt="BSc Data Computing Intelligence" onerror="this.onerror=null;this.src='/images/programs/bsc-(hons)-data-computing-intelligence-1787542113.png';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">BSc (Hons) Data Computing Intelligence</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            A specialized top-up programme equipping students with data engineering, big data analytics, visualization, and intelligent decision-support skills.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/49?slug=bsc-hons-data-computing-intelligence" class="btn_a overlay text-decoration-none">
                                <div class="d-flex align-items-center site_btn_navy overlay text_uppercase">
                                    <div class="inline_block me-2"><div class="btn_circle_white">+</div></div>
                                    <div class="inline_block"><p class="font_white mb-0 fw-bold fs-12">Read More</p></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3. BSc (Hons) Computer Forensics & Cybersecurity -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/bsc-(hons)-computer-forensics-and-security-1787543630.jpg" class="img-fluid rounded-2 w-100" alt="BSc Computer Forensics" onerror="this.onerror=null;this.src='/images/programs/bsc-(hons)-computer-forensics-and-security-1787543630.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">BSc (Hons) Computer Forensics & Cybersecurity</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            Delivers specialized training in evidence collection, digital investigation, network forensics, and cybersecurity operations management.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/50?slug=bsc-hons-computer-forensics-cybersecurity" class="btn_a overlay text-decoration-none">
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

        <!-- SUBSECTION 4: FOUNDATION PROGRAMMES -->
        <div id="foundation" class="dept-course-category-block">
            <div class="category-title-header margin_bottom_40">
                <h2 class="category-heading">
                    <i class="fas fa-shield-alt me-2 font_light_blue"></i>
                    Foundation <span class="font_light_blue">Programmes</span>
                </h2>
                <p class="text-muted fs-15 mt-2 mb-0">International Level 3 foundation entry pathways into undergraduate computing degrees.</p>
            </div>

            <div class="row g-4">
                <!-- 1. Pearson BTEC Level 3 Foundation Diploma in IT -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="common_box shadow-sm flex-column h-100 bg-white rounded-3 p-3 d-flex">
                        <div class="card-img-box margin_bottom_18">
                            <img src="/images/programs/management/pearson-btec-international-level-3-foundation-diploma-in-information-technology-1756413494.jpg" class="img-fluid rounded-2 w-100" alt="Pearson Foundation IT" onerror="this.onerror=null;this.src='/images/programs/pearson-btec-international-level-3-foundation-diploma-in-information-technology-1756413494.jpg';">
                        </div>
                        <h2 class="margin_bottom_12 text_align_left fs-18 fw-bold font_navy_blue">Pearson BTEC International Level 3 Foundation Diploma in IT</h2>
                        <div class="card-full-line margin_bottom_15"></div>
                        <p class="margin_bottom_20 text_align_justify title_long fs-14 text-secondary">
                            A 135-credit foundation diploma (540 GLH) providing learners with fundamental computing skills required for direct admission to undergraduate IT degrees.
                        </p>
                        <div class="w-100 text-center btn_dwn mt-auto pt-3">
                            <a href="https://saegis.ac.lk/degree-program/46?slug=pearson-btec-international-level-3-foundation-diploma-in-information-technology" class="btn_a overlay text-decoration-none">
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