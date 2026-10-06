<section class="course-categories">

  <div class="course-heading">
    <span class="heading-small">Explore</span>
    <h2>Our <span>Course Categories</span></h2>
    <p>Discover a wide range of programmes designed to help you achieve your academic and career goals.</p>
  </div>

  <div class="level-slider">
    <button class="level-slider-btn prev" id="levelPrev" aria-label="Previous courses">&#10094;</button>

    <div class="level-track" id="levelTrack">

      <div class="card">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=400&h=280&fit=crop" alt="">
        <div class="card-body">
          <p class="card-title">Certificate Courses</p>
          <ul class="facts">
            <li><i class="fas fa-clock"></i>Weekdays</li>
            <li class="intake"><i class="fas fa-calendar-check"></i>Next intake: loading…</li>
          </ul>
          <div class="card-actions">
            <a href="#" class="btn btn-outline">Enquire</a>
            <a href="#" class="btn btn-solid">View details</a>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=400&h=280&fit=crop" alt="">
        <div class="card-body">
          <p class="card-title">Foundation Courses</p>
          <ul class="facts">
            <li><i class="fas fa-clock"></i>Weekdays / Weekends</li>
            <li class="intake"><i class="fas fa-calendar-check"></i>Next intake: loading…</li>
          </ul>
          <div class="card-actions">
            <a href="#" class="btn btn-outline">Enquire</a>
            <a href="#" class="btn btn-solid">View details</a>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?w=400&h=280&fit=crop" alt="">
        <div class="card-body">
          <p class="card-title">Diploma Courses</p>
          <ul class="facts">
            <li><i class="fas fa-clock"></i>Weekdays</li>
            <li class="intake"><i class="fas fa-calendar-check"></i>Next intake: loading…</li>
          </ul>
          <div class="card-actions">
            <a href="#" class="btn btn-outline">Enquire</a>
            <a href="#" class="btn btn-solid">View details</a>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?w=400&h=280&fit=crop" alt="">
        <div class="card-body">
          <p class="card-title">Higher National Diploma</p>
          <ul class="facts">
            <li><i class="fas fa-clock"></i>Weekdays</li>
            <li class="intake"><i class="fas fa-calendar-check"></i>Next intake: loading…</li>
          </ul>
          <div class="card-actions">
            <a href="#" class="btn btn-outline">Enquire</a>
            <a href="#" class="btn btn-solid">View details</a>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=280&fit=crop" alt="">
        <div class="card-body">
          <p class="card-title">Top-Up Degrees</p>
          <ul class="facts">
            <li><i class="fas fa-clock"></i>Weekdays / Weekends</li>
            <li class="intake"><i class="fas fa-calendar-check"></i>Next intake: loading…</li>
          </ul>
          <div class="card-actions">
            <a href="#" class="btn btn-outline">Enquire</a>
            <a href="#" class="btn btn-solid">View details</a>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=400&h=280&fit=crop" alt="">
        <div class="card-body">
          <p class="card-title">Undergraduate Degrees</p>
          <ul class="facts">
            <li><i class="fas fa-clock"></i>Weekdays</li>
            <li class="intake"><i class="fas fa-calendar-check"></i>Next intake: loading…</li>
          </ul>
          <div class="card-actions">
            <a href="#" class="btn btn-outline">Enquire</a>
            <a href="#" class="btn btn-solid">View details</a>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=400&h=280&fit=crop" alt="">
        <div class="card-body">
          <p class="card-title">Postgraduate Programmes</p>
          <ul class="facts">
            <li><i class="fas fa-clock"></i>Weekdays</li>
            <li class="intake"><i class="fas fa-calendar-check"></i>Next intake: loading…</li>
          </ul>
          <div class="card-actions">
            <a href="#" class="btn btn-outline">Enquire</a>
            <a href="#" class="btn btn-solid">View details</a>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=400&h=280&fit=crop" alt="International Studies">
        <div class="card-body">
          <p class="card-title">International Studies Courses</p>
          <ul class="facts">
            <li><i class="fas fa-clock"></i>Weekdays / Weekends</li>
            <li class="intake"><i class="fas fa-calendar-check"></i>Next intake: loading…</li>
          </ul>
          <div class="card-actions">
            <a href="#" class="btn btn-outline">Enquire</a>
            <a href="#" class="btn btn-solid">View details</a>
          </div>
        </div>
      </div>

    </div>

    <button class="level-slider-btn next" id="levelNext" aria-label="Next courses">&#10095;</button>
  </div>
</section>

<script>
  (function () {
    var track = document.getElementById('levelTrack');
    var prev = document.getElementById('levelPrev');
    var next = document.getElementById('levelNext');
    if (!track || !prev || !next) return;

    var DELAY = 2500; // time between slides (ms)

    // Clone all cards and add them to the end for a seamless loop
    var originals = Array.prototype.slice.call(track.querySelectorAll('.card'));
    originals.forEach(function (card) {
      var clone = card.cloneNode(true);
      clone.setAttribute('aria-hidden', 'true');
      track.appendChild(clone);
    });

    // Snap would fight the instant jump, so turn it off
    track.style.scrollSnapType = 'none';

    var cards = track.querySelectorAll('.card');
    var step = cards[1].offsetLeft - cards[0].offsetLeft;        // card width + gap
    var loopWidth = cards[originals.length].offsetLeft - cards[0].offsetLeft;

    function jumpTo(x) {
      track.scrollTo({ left: x, behavior: 'instant' });
    }

    function goNext() {
      if (track.scrollLeft >= loopWidth - 2) jumpTo(track.scrollLeft - loopWidth);
      track.scrollBy({ left: step, behavior: 'smooth' });
    }

    function goPrev() {
      if (track.scrollLeft <= 2) jumpTo(track.scrollLeft + loopWidth);
      track.scrollBy({ left: -step, behavior: 'smooth' });
    }

    var timer = setInterval(goNext, DELAY);

    function restart() {
      clearInterval(timer);
      timer = setInterval(goNext, DELAY);
    }

    next.addEventListener('click', function () { goNext(); restart(); });
    prev.addEventListener('click', function () { goPrev(); restart(); });
  })();
</script>