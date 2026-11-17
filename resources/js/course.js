// ==========================================
// COURSE PAGE SCRIPTS - MEMBER 4
// Sticky Navigation, Smooth Scroll & Scroll Spy
// ==========================================

document.addEventListener('DOMContentLoaded', function () {
    const stickyNav = document.getElementById('course_sticky_nav');
    if (!stickyNav) return;

    const mainHeader = document.querySelector('.main-header');
    const navLinks = document.querySelectorAll('#course_sticky_nav .course-nav-item');
    const allAnchorLinks = document.querySelectorAll('#course_sticky_nav a[href^="#"]');
    const sections = [];

    // Dynamically keep sticky nav flush below the main header
    function syncStickyTop() {
        const headerHeight = mainHeader ? mainHeader.offsetHeight : 86;
        stickyNav.style.top = headerHeight + 'px';
    }

    syncStickyTop();
    window.addEventListener('resize', syncStickyTop);

    // Map nav links to their target DOM sections
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
        }
    });

    // Smooth scroll with exact combined header offset for all links (including Apply Now)
    allAnchorLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                e.preventDefault();

                const headerHeight = mainHeader ? mainHeader.offsetHeight : 86;
                const stickyHeight = stickyNav.offsetHeight;
                const totalOffset = headerHeight + stickyHeight + 20;

                const elementTop = targetElement.getBoundingClientRect().top + window.scrollY;
                window.scrollTo({
                    top: elementTop - totalOffset,
                    behavior: 'smooth'
                });

                // Update URL hash cleanly without browser jump
                history.pushState(null, '', targetId);
            }
        });
    });

    // Scroll Spy using getBoundingClientRect() (accurate regardless of nested containers)
    function updateActiveLink() {
        const headerHeight = mainHeader ? mainHeader.offsetHeight : 86;
        const stickyHeight = stickyNav.offsetHeight;
        const triggerOffset = headerHeight + stickyHeight + 40;

        let currentSection = null;

        sections.forEach(function (item) {
            const rect = item.element.getBoundingClientRect();
            if (rect.top <= triggerOffset && rect.bottom > triggerOffset) {
                currentSection = item;
            }
        });

        if (currentSection) {
            navLinks.forEach(function (link) {
                link.classList.remove('active');
            });
            currentSection.link.classList.add('active');
        }
    }

    window.addEventListener('scroll', updateActiveLink, { passive: true });
    updateActiveLink();
});