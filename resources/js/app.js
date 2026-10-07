import '../css/app.css';
import './menu.js';
import './faculties.js';

// ==========================================
// MEMBER 4: TESTIMONIALS & PARTNERS SLIDER
// ==========================================

// Testimonial Slider
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
    if (testimonialStage) {
        testimonialStage.addEventListener('mouseenter', () => clearInterval(testimonialTimer));
        testimonialStage.addEventListener('mouseleave', resetTestimonialTimer);
    }

    resetTestimonialTimer();
}

// Partners & Affiliations Infinite Scroll
const paTrack = document.getElementById('paTrack');
if (paTrack) {
    Array.from(paTrack.children).forEach(item => {
        const clone = item.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');
        paTrack.appendChild(clone);
    });
}