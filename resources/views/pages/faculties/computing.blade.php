@extends('layouts.app')

@section('title', 'Faculty of Computing & Technology')

@section('content')
    <section class="faculty-page">

        <!-- Departments Section -->
<section class="computing-section" id="departments">
  <div class="computing-container">

    <div class="section-heading">
      <span class="section-label">DISCOVER YOUR PATH</span>
      <h2>Our Departments</h2>
      <p>
        Explore the departments within the Faculty of Computing
        and Technology and discover your academic path.
      </p>
    </div>

    <div class="department-grid">

      <!-- Department 1: Computing -->
      <article class="department-card">
        <div
          class="department-image software-image"
          role="img"
          aria-label="Computing, software development and programming">
        </div>

        <div class="department-body">
          <span class="card-number">DEPARTMENT</span>

          <h3>Department of Computing</h3>

          <p>
            Explore software engineering, programming, information
            technology, databases, computer networks, and software
            development to build practical computing skills.
          </p>

          <a
            class="text-link"
            href="#"
            target="_blank"
            rel="noopener noreferrer">
            Explore Programmes <span>↗</span>
          </a>
        </div>
      </article>

      <!-- Department 2: Technology -->
      <article class="department-card">
        <div
          class="department-image computing-image"
          role="img"
          aria-label="Technology, innovation and emerging technologies">
        </div>

        <div class="department-body">
          <span class="card-number">DEPARTMENT</span>

          <h3>Department of Technology</h3>

          <p>
            Discover technology-focused learning, digital innovation,
            emerging technologies, and practical technical skills
            for solving real-world problems.
          </p>

          <a
            class="text-link"
            href="#"
            target="_blank"
            rel="noopener noreferrer">
            Explore Programmes <span>↗</span>
          </a>
        </div>
      </article>

    </div>
  </div>
</section>

   
<!-- Academic Staff Section -->
<section class="computing-section staff-section" id="staff">
  <div class="computing-container">

    <div class="section-heading">
      <span class="section-label">MEET OUR TEAM</span>
      <h2>Academic Staff Members</h2>
      <p>
        Meet the academic team supporting our computing students.
      </p>
    </div>

    <!-- Staff Search -->


    <!-- Computing Faculty Staff Cards -->
    <div class="staff-grid" id="staffGrid">

      <!-- Staff 1 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img
            src="images/computing-staff-1.jpg"
            alt="Mr. Navoda Kotugoda"
            class="staff-photo"
            loading="lazy"
          >
        </div>
        <div class="staff-info">
          <span class="staff-number">01</span>
          <h3>Mr. Navoda Kotugoda</h3>
          <p class="staff-role">Dean - FOCT</p>
          <p class="staff-qualifications">MSc (CMB), BSc (CMB)</p>
        </div>
      </article>

      <!-- Staff 2 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img
            src="images/computing-staff-2.jpg"
            alt="Ms. Navodi Sithara"
            class="staff-photo"
            loading="lazy"
          >
        </div>
        <div class="staff-info">
          <span class="staff-number">02</span>
          <h3>Ms. Navodi Sithara</h3>
          <p class="staff-role">Lecturer</p>
          <p class="staff-qualifications">MSc (Reading), BSc (NSBM)</p>
        </div>
      </article>

      <!-- Staff 3 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img
            src="images/computing-staff-3.jpg"
            alt="Ms. Tharushi Pramodhya"
            class="staff-photo"
            loading="lazy"
          >
        </div>
        <div class="staff-info">
          <span class="staff-number">03</span>
          <h3>Ms. Tharushi Pramodhya</h3>
          <p class="staff-role">Lecturer</p>
          <p class="staff-qualifications">PhD (Reading), BSc (USJ)</p>
        </div>
      </article>

      <!-- Staff 4 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img
            src="images/computing-staff-4.jpg"
            alt="Ms. Ashani Gallage"
            class="staff-photo"
            loading="lazy"
          >
        </div>
        <div class="staff-info">
          <span class="staff-number">04</span>
          <h3>Ms. Ashani Gallage</h3>
          <p class="staff-role">Lecturer</p>
          <p class="staff-qualifications">MSc (CSU), BSc (KLN)</p>
        </div>
      </article>

      <!-- Staff 5 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img
            src="images/computing-staff-5.jpg"
            alt="Mr. Udaya Perera"
            class="staff-photo"
            loading="lazy"
          >
        </div>
        <div class="staff-info">
          <span class="staff-number">05</span>
          <h3>Mr. Udaya Perera</h3>
          <p class="staff-role">Lecturer</p>
          <p class="staff-qualifications">BEng (IIC)</p>
        </div>
      </article>

      <!-- Staff 6 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img
            src="images/computing-staff-6.jpg"
            alt="Ms. Wasana Manathunga"
            class="staff-photo"
            loading="lazy"
          >
        </div>
        <div class="staff-info">
          <span class="staff-number">06</span>
          <h3>Ms. Wasana Manathunga</h3>
          <p class="staff-role">Lecturer</p>
          <p class="staff-qualifications">BSc (WUSL)</p>
        </div>
      </article>

      <!-- Staff 7 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img
            src="images/computing-staff-7.jpg"
            alt="Mr. Janidu Fernando"
            class="staff-photo"
            loading="lazy"
          >
        </div>
        <div class="staff-info">
          <span class="staff-number">07</span>
          <h3>Mr. Janidu Fernando</h3>
          <p class="staff-role">Assistant Lecturer</p>
          <p class="staff-qualifications">PhD (Reading) (PDN), BSc (NSBM)</p>
        </div>
      </article>

      <!-- Staff 8 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img
            src="images/computing-staff-8.jpg"
            alt="Mr. Abilaas Renganathan"
            class="staff-photo"
            loading="lazy"
          >
        </div>
        <div class="staff-info">
          <span class="staff-number">08</span>
          <h3>Mr. Abilaas Renganathan</h3>
          <p class="staff-role">Assistant Lecturer</p>
          <p class="staff-qualifications">BSc (Herts)</p>
        </div>
      </article>

      <!-- Staff 9 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img
            src="images/computing-staff-9.jpg"
            alt="Ms. Vidushani Imanthika"
            class="staff-photo"
            loading="lazy"
          >
        </div>
        <div class="staff-info">
          <span class="staff-number">09</span>
          <h3>Ms. Vidushani Imanthika</h3>
          <p class="staff-role">Assistant Lecturer (Intermediate)</p>
          <p class="staff-qualifications">MSc (Reading) (USJ), BSc (Saegis Campus)</p>
        </div>
      </article>

      <!-- Staff 10 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img
            src="images/computing-staff-10.jpg"
            alt="Mr. Themira Edirisinghe"
            class="staff-photo"
            loading="lazy"
          >
        </div>
        <div class="staff-info">
          <span class="staff-number">10</span>
          <h3>Mr. Themira Edirisinghe</h3>
          <p class="staff-role">Assistant Lecturer (Intermediate)</p>
          <p class="staff-qualifications">BSc (NSBM)</p>
        </div>
      </article>

      <!-- Staff 11 -->
      <article class="staff-card">
        <div class="staff-photo-wrap">
          <img
            src="images/computing-staff-11.jpg"
            alt="Mr. Ajan Sri Sheheran"
            class="staff-photo"
            loading="lazy"
          >
        </div>
        <div class="staff-info">
          <span class="staff-number">11</span>
          <h3>Mr. Ajan Sri Sheheran</h3>
          <p class="staff-role">Assistant Lecturer (Intermediate)</p>
          <p class="staff-qualifications">BIT (Saegis Campus)</p>
        </div>
      </article>

    </div>

    <!-- No Search Results -->
    <p class="no-results" id="noResults" hidden>
      No academic staff members match your search.
    </p>

  </div>
</section>

        
    </section>
@endsection
