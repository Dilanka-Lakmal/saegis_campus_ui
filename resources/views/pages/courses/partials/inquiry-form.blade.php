<!-- ==========================================
     INQUIRY FORM SECTION
========================================== -->
<section id="inner_contact_form" class="course-inquiry-section margin_bottom_68 bg_ice_blue">
    <div class="container py-5"> 
        <!-- Title Heading -->
        <div class="row text-center mb-4" data-aos="fade-up">
            <h3 class="inquiry-subtitle">Got a Question on the Course?</h3>
            <h1 class="inquiry-title">
                <span class="text-cyan">Please</span> <span class="text-navy">fill out the form</span>
            </h1>
            <div class="w-100 d-flex justify-content-center mt-3">
                <hr class="heading-line-center">
            </div>
        </div>

        <!-- Form Container -->
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="inquiry-card shadow-sm p-4 p-md-5">
                    <form class="register-form php-email-form" method="post" id="frminq" action="{{ url('/register-inqury') }}" autocomplete="off" data-aos="fade-up">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6 form-group">
                                <input type="text" name="inqname" id="inqname" class="form-control form-control-lg custom-input" placeholder="Your Full Name" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" name="inqemail" id="inqemail" class="form-control form-control-lg custom-input" placeholder="Your Email" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" name="inqphone" id="inqphone" class="form-control form-control-lg custom-input" placeholder="Your Phone" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" name="inqdegreeid" id="inqdegreeid" class="form-control form-control-lg custom-input" placeholder="Your Degree" value="{{ $courseTitle ?? '' }}" required>
                            </div>
                            <div class="col-12 form-group">
                                <textarea class="form-control custom-input" name="inqcomments" id="inqcomments" rows="6" placeholder="Message" required></textarea>
                            </div>
                        </div>

                        <!-- Form Response Alerts -->
                        <div class="row mt-3">
                            <div class="col-12" id="messageContainer">
                                <div class="alert alert-success contact__msg" style="display: none;" role="alert">
                                    Your message was sent successfully.
                                </div>
                                <div class="alert alert-danger contact__msg" id="errorMessage" style="display: none;" role="alert"></div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center mt-4">
                            <button type="submit" name="btnsubmit" id="btnsubmit" class="inquiry-submit-btn">
                                <span class="btn-circle">+</span>
                                <span class="btn-text">Submit Now</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     INSTITUTIONAL QUOTE SECTION
========================================== -->
<section id="inner_thought" class="course-quote-section py-5 my-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center" data-aos="fade-up">
                <h2 class="institutional-quote-text">
                    With an excellent staff of well experienced and much respected lecturers and professors as resource persons; efficient non academic staff, the management of Saegis Campus strives to deliver qualitative tertiary education on par with the international standards.
                </h2>
            </div>
        </div>
    </div>
</section>