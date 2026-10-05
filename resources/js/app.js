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