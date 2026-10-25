document.addEventListener("DOMContentLoaded", function () {
    const navItems = document.querySelectorAll(".dept-nav-item");
    const sections = document.querySelectorAll("section[id], div[id]");

    // Smooth Scroll on Sticky Nav Click
    navItems.forEach((item) => {
        item.addEventListener("click", function (e) {
            const targetId = this.getAttribute("href");
            if (targetId && targetId.startsWith("#")) {
                e.preventDefault();
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const offset = 200; // Offset accounting for topbar, main header & sticky nav
                    const bodyRect = document.body.getBoundingClientRect().top;
                    const elementRect = targetElement.getBoundingClientRect().top;
                    const elementPosition = elementRect - bodyRect;
                    const offsetPosition = elementPosition - offset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });
                }
            }
        });
    });

    // Active Navigation Highlight on Scroll
    window.addEventListener("scroll", function () {
        let current = "";
        const scrollPosition = window.pageYOffset + 220;

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                current = "#" + section.getAttribute("id");
            }
        });

        navItems.forEach((item) => {
            item.classList.remove("active");
            if (item.getAttribute("href") === current) {
                item.classList.add("active");
            }
        });
    });
});