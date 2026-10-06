<section class="as-section">
  <div class="as-grid">

    <!-- LEFT: intro -->
    <div class="as-intro">

      <p class="as-eyebrow">
        Situated in <span class="as-accent">Nugegoda,</span> Sri Lanka.
      </p>

      <h2 class="as-heading">
        <span class="as-accent">We are</span> Saegis Campus
      </h2>

      <div class="as-divider"></div>

      <p class="as-text">
        Saegis Campus, a member of Sakya Group, assures you of an unparalleled tertiary
        education experience that is geared to meet the next generation graduate
        requirements of Sri Lanka and the Globe. Located in a picturesque and scenic
        block of land with easy access to the capital city, Saegis Campus is equipped
        with all the modern facilities a campus should have — from the latest
        teaching/learning technological appliances to comfortable, air-conditioned
        lecture theatres, IT laboratories and auditoriums.
      </p>

      <a href="#about-saegis" class="as-cta">Read More</a>

    </div>


    <!-- RIGHT: strength stats -->
    <div class="as-strength">

      <p class="as-eyebrow">Get to know more</p>

      <h2 class="as-heading">
        Saegis <span class="as-accent">Strength</span>
      </h2>

      <div class="as-divider"></div>


      <div class="as-stat-grid">

        <!-- Students Graduated -->
        <div class="as-stat-card">

          <div class="as-stat-icon as-icon-navy">
            <i class="fas fa-user-graduate"></i>
          </div>

          <div class="as-stat-number">
            <span class="counter" data-target="10000">0</span><span class="as-plus">+</span>
          </div>

          <div class="as-stat-label">
            Students Graduated
          </div>

        </div>


        <!-- Our Staff -->
        <div class="as-stat-card">

          <div class="as-stat-icon as-icon-royal">
            <i class="fas fa-chalkboard-teacher"></i>
          </div>

          <div class="as-stat-number">
            <span class="counter" data-target="100">0</span><span class="as-plus">+</span>
          </div>

          <div class="as-stat-label">
            Our Staff
          </div>

        </div>


        <!-- Years of Excellence -->
        <div class="as-stat-card">

          <div class="as-stat-icon as-icon-sky">
            <i class="fas fa-award"></i>
          </div>

          <div class="as-stat-number">
            <span class="counter" data-target="11">0</span><span class="as-plus">+</span>
          </div>

          <div class="as-stat-label">
            Years of Excellence
          </div>

        </div>

      </div>

    </div>

  </div>
</section>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const counters = document.querySelectorAll(".counter");

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                const counter = entry.target;
                const target = Number(counter.dataset.target);

                let current = 0;
                const duration = 2000; // 2 seconds
                const startTime = performance.now();

                function updateCounter(currentTime) {

                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);

                    current = Math.floor(progress * target);

                    counter.textContent = current.toLocaleString();

                    if (progress < 1) {
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                }

                requestAnimationFrame(updateCounter);

                // Prevent animation from running again
                observer.unobserve(counter);
            }

        });

    }, {
        threshold: 0.3
    });

    counters.forEach(counter => {
        observer.observe(counter);
    });

});
</script>