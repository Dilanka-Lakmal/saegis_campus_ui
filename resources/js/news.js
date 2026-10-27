
(() => {
    const slider = document.querySelector(".news-slider");

    if (!slider) return;

    const viewport = slider.querySelector("#newsViewport");
    const track = slider.querySelector("#newsTrack");
    const prevButton = slider.querySelector("#newsPrev");
    const nextButton = slider.querySelector("#newsNext");
    const dotsContainer = slider.querySelector("#newsDots");
    const cards = Array.from(track?.querySelectorAll(".news-card") || []);

    if (
        !viewport ||
        !track ||
        !prevButton ||
        !nextButton ||
        !dotsContainer ||
        cards.length === 0
    ) return;

    const reducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    );

    let currentIndex = 0;
    let visibleCards = 4;
    let maxIndex = 0;
    let autoTimer = null;
    let resizeTimer = null;
    let resumeTimer = null;

    function getVisibleCards() {
        if (window.matchMedia("(max-width: 575px)").matches) return 1;
        if (window.matchMedia("(max-width: 991px)").matches) return 2;
        return 4;
    }

    function createDots() {
        dotsContainer.innerHTML = "";

        for (let i = 0; i <= maxIndex; i++) {
            const dot = document.createElement("button");

            dot.type = "button";
            dot.className = "news-slider__dot";
            dot.setAttribute("aria-label", `Go to news slide ${i + 1}`);

            dot.addEventListener("click", () => {
                currentIndex = i;
                updateSlider();
                pauseThenResume();
            });

            dotsContainer.appendChild(dot);
        }
    }

    function updateSlider() {
        const firstCard = cards[0];
        const cardWidth = firstCard.getBoundingClientRect().width;
        const gap = parseFloat(
            window.getComputedStyle(track).columnGap
        ) || 0;

        track.style.transform =
            `translateX(-${currentIndex * (cardWidth + gap)}px)`;

        prevButton.disabled = currentIndex === 0;
        nextButton.disabled = currentIndex >= maxIndex;

        Array.from(dotsContainer.children).forEach((dot, index) => {
            const active = index === currentIndex;

            dot.classList.toggle("is-active", active);

            if (active) {
                dot.setAttribute("aria-current", "true");
            } else {
                dot.removeAttribute("aria-current");
            }
        });
    }

    function setupSlider() {
        visibleCards = getVisibleCards();
        maxIndex = Math.max(0, cards.length - visibleCards);
        currentIndex = Math.min(currentIndex, maxIndex);

        createDots();
        updateSlider();

        stopAutoSlide();

        if (maxIndex > 0 && !reducedMotion.matches) {
            startAutoSlide();
        }
    }

    function nextSlide() {
        if (maxIndex <= 0) return;

        currentIndex = currentIndex >= maxIndex
            ? 0
            : currentIndex + 1;

        updateSlider();
    }

    function previousSlide() {
        if (maxIndex <= 0) return;

        currentIndex = currentIndex <= 0
            ? maxIndex
            : currentIndex - 1;

        updateSlider();
    }

    function startAutoSlide() {
        stopAutoSlide();

        if (reducedMotion.matches || maxIndex <= 0) return;

        autoTimer = setInterval(nextSlide, 4000);
    }

    function stopAutoSlide() {
        if (autoTimer) {
            clearInterval(autoTimer);
            autoTimer = null;
        }
    }

    function pauseThenResume() {
        stopAutoSlide();
        clearTimeout(resumeTimer);

        if (reducedMotion.matches || maxIndex <= 0) return;

        resumeTimer = setTimeout(startAutoSlide, 8000);
    }

    prevButton.addEventListener("click", () => {
        previousSlide();
        pauseThenResume();
    });

    nextButton.addEventListener("click", () => {
        nextSlide();
        pauseThenResume();
    });

    slider.addEventListener("mouseenter", stopAutoSlide);
    slider.addEventListener("mouseleave", startAutoSlide);
    slider.addEventListener("focusin", stopAutoSlide);
    slider.addEventListener("focusout", event => {
        if (!slider.contains(event.relatedTarget)) {
            startAutoSlide();
        }
    });

    reducedMotion.addEventListener("change", setupSlider);

    window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(setupSlider, 180);
    });

    setupSlider();
})();
