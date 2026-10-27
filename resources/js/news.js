
(() => {
    const slider = document.querySelector(".news-slider");

    if (!slider) return;

    const viewport = slider.querySelector("#newsViewport");
    const track = slider.querySelector("#newsTrack");
    const prevButton = slider.querySelector("#newsPrev");
    const nextButton = slider.querySelector("#newsNext");
    const dotsContainer = slider.querySelector("#newsDots");
    const cards = Array.from(track.querySelectorAll(".news-card"));

    if (!viewport || !track || !prevButton || !nextButton ||
        !dotsContainer || cards.length === 0) return;

    let currentIndex = 0;
    let visibleCards = 3;
    let maxIndex = 0;
    let resizeTimer;

    function getVisibleCards() {
        if (window.matchMedia("(max-width: 575px)").matches) return 1;
        if (window.matchMedia("(max-width: 991px)").matches) return 2;
        return 3;
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
            });

            dotsContainer.appendChild(dot);
        }
    }

    function updateSlider() {
        const firstCard = cards[0];
        const cardWidth = firstCard.getBoundingClientRect().width;
        const trackStyle = window.getComputedStyle(track);
        const gap = parseFloat(trackStyle.columnGap) || 0;

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
        const newVisibleCards = getVisibleCards();

        if (newVisibleCards !== visibleCards) {
            visibleCards = newVisibleCards;
        }

        maxIndex = Math.max(0, cards.length - visibleCards);
        currentIndex = Math.min(currentIndex, maxIndex);

        createDots();
        updateSlider();
    }

    prevButton.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    nextButton.addEventListener("click", () => {
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateSlider();
        }
    });

    window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(setupSlider, 150);
    });

    setupSlider();
})();
