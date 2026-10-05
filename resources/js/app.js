<<<<<<< HEAD
import './menu.js';

// Dynamic Navigation & Search Handling
document.addEventListener('DOMContentLoaded', function () {
    const heroSlides = document.querySelectorAll('.hero-slide');
    const heroPrev = document.getElementById('heroPrev');
    const heroNext = document.getElementById('heroNext');
    const heroDotsContainer = document.getElementById('heroDots');

    if (heroSlides.length && heroDotsContainer) {
        let heroCurrent = 0;
        let heroTimer = null;

        const heroDots = heroDotsContainer.querySelectorAll('.hero-dot');

        function goToHeroSlide(index) {
            heroSlides[heroCurrent].classList.remove('active');
            heroDots[heroCurrent].classList.remove('active');

            heroCurrent = (index + heroSlides.length) % heroSlides.length;

            heroSlides[heroCurrent].classList.add('active');
            heroDots[heroCurrent].classList.add('active');
        }

        function changeHeroSlide(direction) {
            goToHeroSlide(heroCurrent + direction);
            restartHeroTimer();
        }

        function restartHeroTimer() {
            clearInterval(heroTimer);
            heroTimer = setInterval(() => goToHeroSlide(heroCurrent + 1), 5000);
        }

        restartHeroTimer();
    }
});
=======
// don't replace below codes - this is work of member 4

//    testimonial

const testimonialSlides = document.querySelectorAll('.ts-slide');
const testimonialDotsWrap = document.getElementById('tsDots');

if (testimonialSlides.length && testimonialDotsWrap) {
    let testimonialCurrent = 0;
    let testimonialTimer;

    testimonialSlides.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.className = 'ts-dot' + (i === 0 ? ' active' : '');
        dot.addEventListener('click', () => goToTestimonial(i));
        testimonialDotsWrap.appendChild(dot);
    });
    const testimonialDots = testimonialDotsWrap.querySelectorAll('.ts-dot');

    function goToTestimonial(index) {
        testimonialSlides[testimonialCurrent].classList.remove('active');
        testimonialDots[testimonialCurrent].classList.remove('active');
        testimonialCurrent = (index + testimonialSlides.length) % testimonialSlides.length;
        testimonialSlides[testimonialCurrent].classList.add('active');
        testimonialDots[testimonialCurrent].classList.add('active');
        resetTestimonialTimer();
    }

    function resetTestimonialTimer() {
        clearInterval(testimonialTimer);
        testimonialTimer = setInterval(() => goToTestimonial(testimonialCurrent + 1), 6000);
    }

    const tsPrevBtn = document.getElementById('tsPrevBtn');
    const tsNextBtn = document.getElementById('tsNextBtn');
    if (tsNextBtn) tsNextBtn.addEventListener('click', () => goToTestimonial(testimonialCurrent + 1));
    if (tsPrevBtn) tsPrevBtn.addEventListener('click', () => goToTestimonial(testimonialCurrent - 1));

    const testimonialStage = document.getElementById('tsStage');
    testimonialStage.addEventListener('mouseenter', () => clearInterval(testimonialTimer));
    testimonialStage.addEventListener('mouseleave', resetTestimonialTimer);

    resetTestimonialTimer();
}

// partners & affiliations

const paTrack = document.getElementById('paTrack');
if (paTrack) {
  Array.from(paTrack.children).forEach(item => {
    const clone = item.cloneNode(true);
    clone.setAttribute('aria-hidden', 'true');
    paTrack.appendChild(clone);
  });
}






>>>>>>> main
