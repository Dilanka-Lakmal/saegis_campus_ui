// Course page scripts (Member 4)

document.addEventListener('DOMContentLoaded', () => {
    // Run only on course pages, so other pages never break
    if (!document.getElementById('course_sticky_nav')) return;
     
    // Member 4: sticky nav, scroll-spy, inquiry form and carousel go here
});

// ==========================================
// COURSE PAGE SCRIPTS - MEMBER 4
// Sticky Navigation, Smooth Scroll & Scroll Spy
// ==========================================

document.addEventListener('DOMContentLoaded', function () {

    // Check if this is a course page
    const stickyNav = document.getElementById('course_sticky_nav');

    if (!stickyNav) {
        return;
    }

    const navLinks = document.querySelectorAll('.nav-sticky-link');
    const sections = [];

    // Find all sections connected to navigation links
    navLinks.forEach(function (link) {

        const targetId = link.getAttribute('href');

        if (targetId && targetId.startsWith('#')) {

            const section = document.querySelector(targetId);

            if (section) {
                sections.push({
                    link: link,
                    element: section
                });
            }

            // Smooth scroll when navigation link is clicked
            link.addEventListener('click', function (e) {

                const targetElement = document.querySelector(targetId);

                if (targetElement) {

                    e.preventDefault();

                    // Get current sticky navigation height
                    const navHeight = stickyNav.offsetHeight;

                    // Calculate target position
                    const elementPosition =
                        targetElement.getBoundingClientRect().top +
                        window.pageYOffset;

                    const offsetPosition =
                        elementPosition - navHeight - 15;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        }
    });


    // ==========================================
    // SCROLL SPY
    // ==========================================

    function updateActiveLink() {

        // Position used to determine current section
        const scrollPosition =
            window.scrollY + stickyNav.offsetHeight + 100;

        let currentSection = null;

        sections.forEach(function (item) {

            const sectionTop = item.element.offsetTop;
            const sectionHeight = item.element.offsetHeight;

            if (
                scrollPosition >= sectionTop &&
                scrollPosition < sectionTop + sectionHeight
            ) {
                currentSection = item;
            }
        });

        // Update active navigation link
        if (currentSection) {

            navLinks.forEach(function (link) {
                link.classList.remove('active');
            });

            currentSection.link.classList.add('active');
        }
    }

    // Run while scrolling
    window.addEventListener('scroll', updateActiveLink);

    // Run once when page loads
    updateActiveLink();

});