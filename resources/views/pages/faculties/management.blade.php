@extends('layouts.app')

@section('title', 'Faculty of Management, Humanities & Social Sciences')

@section('content')
    <section class="faculty-page">


<!-- Departments Section -->
<section class="management-section" id="departments">
  <div class="management-container">

    <div class="section-heading">
      <span class="section-label">DISCOVER YOUR PATH</span>
      <h2>Our Departments</h2>
      <p>Explore the academic areas within our faculty.</p>
    </div>

    <div class="department-grid">

      <!-- Department of Management -->
      <article class="department-card">
        <div class="department-image">
          <img
            src="images/faculty/management/hero/department-of-management.jpg"
            alt="Department of Management"
            loading="lazy">
        </div>

        <div class="department-body">
          <span class="card-number">01 / DEPARTMENT</span>
          <h3>Department of Management</h3>
          <p>
            Explore management education, business knowledge,
            leadership, and professional development.
          </p>
          <a class="text-link" href="department-of-management">
            Explore Department <span>↗</span>
          </a>
        </div>
      </article>

      <!-- Department of Languages -->
      <article class="department-card">
        <div class="department-image">
          <img
            src="images/faculty/management/hero/department-of-language.jpg"
            alt="Department of Languages"
            loading="lazy">
        </div>

        <div class="department-body">
          <span class="card-number">02 / DEPARTMENT</span>
          <h3>Department of Languages</h3>
          <p>
            Develop language, communication, and academic skills
            to support your educational and professional journey.
          </p>
          <a class="text-link" href="department-of-languages">
            Explore Department <span>↗</span>
          </a>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- Academic Staff Section -->
<section class="management-section staff-section" id="staff">
  <div class="management-container">

    <div class="section-heading">
      <span class="section-label">MEET OUR TEAM</span>
      <h2>Academic Staff Members</h2>
      <p>Meet the academic team supporting our students.</p>
    </div>

    <div class="staff-grid" id="staffGrid">

      <!-- Staff 01 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img src="images/faculty/management/staff/Yamuna Fernando.jpeg"
               alt="Ms. Yamuna Fernando"
               class="staff-photo" loading="lazy">
        </div>
        <div class="staff-info">
          <span class="staff-number">01</span>
          <h3>Ms. Yamuna Fernando</h3>
          <p class="staff-role">Dean - FMHSS</p>
          <p class="staff-qualifications">PhD (Reading), MBA (USJ), BSc (SUSL)</p>
        </div>
      </article>

      <!-- Staff 02 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img src="images/faculty/management/staff/Iruni Satharasinghe.jpg"
               alt="Iruni Satharasinghe"
               class="staff-photo" loading="lazy">
        </div>
        <div class="staff-info">
          <span class="staff-number">02</span>
          <h3>Ms. Iruni Satharasinghe</h3>
          <p class="staff-role">HOD - DOM (Saegis Programmes)</p>
          <p class="staff-qualifications">MBA (UoM), BSc (USJ)</p>
        </div>
      </article>

      <!-- Staff 03 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img src="images/faculty/management/staff/selvananthan gopikrishna.jpg"
               alt="Mr. Selvananthan Gopikrishna"
               class="staff-photo" loading="lazy">
        </div>
        <div class="staff-info">
          <span class="staff-number">03</span>
          <h3>Mr. Selvananthan Gopikrishna</h3>
          <p class="staff-role">Senior Lecturer</p>
          <p class="staff-qualifications">PhD (Reading), MPhil (USJ), MBA (Wales), BA (Wolverhampton)</p>
        </div>
      </article>

      <!-- Staff 04 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img src="images/faculty/management/staff/Paramitha Herath.jpeg"
               alt="Ms. Paramitha Herath"
               class="staff-photo" loading="lazy">
        </div>
        <div class="staff-info">
          <span class="staff-number">04</span>
          <h3>Ms. Paramitha Herath</h3>
          <p class="staff-role">Senior Lecturer</p>
          <p class="staff-qualifications">MSc (CMB), MBA (CCCU), CTHE (USJ), BSc (CCCU)</p>
        </div>
      </article>

      <!-- Staff 05 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img src="images/faculty/management/staff/ms-dinusha-rathnayake.jpg"
               alt="Ms. Dinusha Rathnayake"
               class="staff-photo" loading="lazy">
        </div>
        <div class="staff-info">
          <span class="staff-number">05</span>
          <h3>Ms. Dinusha Rathnayake</h3>
          <p class="staff-role">Senior Lecturer</p>
          <p class="staff-qualifications">MIT (KLN), MSc (Northumbria), BSc (Northumbria), BBM (UWU)</p>
        </div>
      </article>

      <!-- Staff 06 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img src="images/faculty/management/staff/Pipuni-Dharmathilake.jpg"
               alt="Ms. Pipuni Dharmathilake"
               class="staff-photo" loading="lazy">
        </div>
        <div class="staff-info">
          <span class="staff-number">06</span>
          <h3>Ms. Pipuni Dharmathilake</h3>
          <p class="staff-role">Lecturer</p>
          <p class="staff-qualifications">MSc (Reading) UoM, BSc (USJ), CTHE (KLN)</p>
        </div>
      </article>

      <!-- Staff 07 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img src="images/faculty/management/staff/Niroshani-Sandamali.jpg"
               alt="Ms. Niroshani Sandamali"
               class="staff-photo" loading="lazy">
        </div>
        <div class="staff-info">
          <span class="staff-number">07</span>
          <h3>Ms. Niroshani Sandamali</h3>
          <p class="staff-role">Assistant Lecturer</p>
          <p class="staff-qualifications">MBA (Reading) (PIM), BBM (KLN)</p>
        </div>
      </article>

      <!-- Staff 08 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img src="images/faculty/management/staff/Nethmini-Sandalekha.jpg"
               alt="Ms. Nethmini Sandalekha"
               class="staff-photo" loading="lazy">
        </div>
        <div class="staff-info">
          <span class="staff-number">08</span>
          <h3>Ms. Nethmini Sandalekha</h3>
          <p class="staff-role">Assistant Lecturer</p>
          <p class="staff-qualifications">BBA (RUH)</p>
        </div>
      </article>

      <!-- Staff 09 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img src="images/faculty/management/staff/Kaumini Hasanga.jpeg"
               alt="Ms. Kaumini Hasanga"
               class="staff-photo" loading="lazy">
        </div>
        <div class="staff-info">
          <span class="staff-number">09</span>
          <h3>Ms. Kaumini Hasanga</h3>
          <p class="staff-role">Assistant Lecturer</p>
          <p class="staff-qualifications">BSc (SUSL)</p>
        </div>
      </article>

      <!-- Staff 10 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img src="images/faculty/management/staff/ms-nethmi-umaya.jpg"
               alt="Ms. Nethmi Umaya"
               class="staff-photo" loading="lazy">
        </div>
        <div class="staff-info">
          <span class="staff-number">10</span>
          <h3>Ms. Nethmi Umaya</h3>
          <p class="staff-role">Assistant Lecturer</p>
          <p class="staff-qualifications">BSc (RJT)</p>
        </div>
      </article>

      <!-- Staff 11 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img src="images/faculty/management/staff/ms-himashi-muthugala.jpg"
               alt="Ms. Himashi Muthugala"
               class="staff-photo" loading="lazy">
        </div>
        <div class="staff-info">
          <span class="staff-number">11</span>
          <h3>Ms. Himashi Muthugala</h3>
          <p class="staff-role">Assistant Lecturer (Intermediate)</p>
          <p class="staff-qualifications">MSc (Reading) (CMB), BBA (SLIIT)</p>
        </div>
      </article>

    </div>

    

  </div>
</section>


        
    </section>
@endsection
