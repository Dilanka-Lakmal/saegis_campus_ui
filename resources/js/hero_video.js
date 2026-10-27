document.addEventListener("DOMContentLoaded", function () {
    const heroSlides = document.querySelectorAll(".hero-slide");
    const heroDots = document.querySelectorAll(".hero-dot");
    const heroVideo = document.getElementById("heroVideo");
    
    if (!heroSlides.length) return;

    let currentSlide = 0;
    let slideTimer = null;

    function showSlide(index) {
        // Clear active image timer
        if (slideTimer) clearTimeout(slideTimer);

        // Deactivate previous slides & dots
        heroSlides.forEach(slide => slide.classList.remove("active"));
        heroDots.forEach(dot => dot.classList.remove("active"));

        currentSlide = index;
        const targetSlide = heroSlides[currentSlide];

        // Activate targeted slide and corresponding dot
        targetSlide.classList.add("active");
        if (heroDots[currentSlide]) {
            heroDots[currentSlide].classList.add("active");
        }

        const slideType = targetSlide.getAttribute("data-type");

        if (slideType === "video") {
            if (heroVideo) {
                heroVideo.currentTime = 0;
                heroVideo.play().catch(err => console.log("Video Play Error:", err));
            }
        } else {
            // Pause video during image slides
            if (heroVideo) heroVideo.pause();

            // Auto-advance after duration (default 5000ms)
            const duration = parseInt(targetSlide.getAttribute("data-duration")) || 5000;
            slideTimer = setTimeout(nextSlide, duration);
        }
    }

    function nextSlide() {
        const nextIndex = (currentSlide + 1) % heroSlides.length;
        showSlide(nextIndex);
    }

    // 1. Play next slide when video ends
    if (heroVideo) {
        heroVideo.removeAttribute("loop");
        heroVideo.addEventListener("ended", nextSlide);
    }

    // 2. Add Dot Click Handlers
    heroDots.forEach(dot => {
        dot.addEventListener("click", function () {
            const slideIndex = parseInt(this.getAttribute("data-slide"));
            showSlide(slideIndex);
        });
    });

    // 3. Initialize First Slide
    showSlide(0);
});