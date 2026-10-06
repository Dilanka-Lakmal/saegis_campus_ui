const menuData = {
    academics: {
        label: "PROGRAMMES",
        columns: [
            {
                heading: "Programmes",
                links: [
                    { label: "All Programmes", url: "#all-programmes" },
                    { label: "Certificate", url: "#certificate" },
                    { label: "Foundation", url: "#foundation" },
                    { label: "Undergraduate", url: "#diploma" },
                    { label: "Professional", url: "#hnd" },
                    { label: "Ministry Programs", url: "#undergraduate" },
                    { label: "Postgraduate", url: "#postgraduate" }
                ]
            },
            {
                heading: "Faculties",
                links: [
                    { label: "Management, Humanities & Social Sciences", url: "#management-humanities" },
                    { label: "Computing & Technology", url: "#computing-technology" },
                    { label: "Faculty of Graduate Studies", url: "#graduate-studies" },
                    { label: "International Programmes", url: "#international-programmes" }
                ]
            },
            {
                heading: "Study Areas",
                links: [
                    { label: "Business & Management", url: "#business" },
                    { label: "Accounting & Finance", url: "#accounting" },
                    { label: "Computing & IT", url: "#computing" },
                    { label: "English & Languages", url: "#english" },
                    { label: "Tourism & Hospitality", url: "#tourism" },
                    { label: "Applied Science", url: "#science" }
                ]
            }
        ],
        feature: {
            
            label: "Find Your Future",
            title: "Find the right programme",
            text: "Add your qualifications and discover programmes you may be eligible for.",
            type: "eligibilityFinder"
            }
        
    },
    about: {
        label: "ABOUT",
        columns: [
            { heading: "Saegis", links: [{ label: "Overview", url: "#about-saegis" }, { label: "Vision & Mission", url: "#vision-mission" }] },
            { heading: "Leadership", links: [{ label: "Top Management", url: "#top-management" }, { label: "Governing Council", url: "#governing-council" }] },
            { heading: "Academic Community", links: [{ label: "Key Academics", url: "#key-academics" }, { label: "Visiting Lecturers", url: "#visiting-lecturers" }] }
        ],
        feature: { label: "Discover Saegis", title: "Learn about Saegis", text: "Discover our institution, leadership, mission and academic community.", button: "Explore Saegis", url: "#about-saegis" }
    },
    campus: {
        label: "CAMPUS",
        columns: [
            { heading: "Life at Saegis", links: [{ label: "Life at Saegis", url: "#life" }, { label: "Clubs & Societies", url: "#clubs" }, { label: "Student Forum", url: "#forum" }] },
            { heading: "Student Support", links: [{ label: "Career Guidance", url: "#career-guidance" }, { label: "Student Services", url: "#student-services" }] },
            { heading: "Global Opportunities", links: [{ label: "Study Abroad", url: "#study-abroad" }, { label: "International Opportunities", url: "#international" }] }
        ],
        feature: { label: "Student Experience", title: "Life beyond the classroom", text: "Discover student activities, support and opportunities.", button: "Explore Campus", url: "#campus" }
    },
    research: {
        label: "RESEARCH",
        columns: [
            { heading: "Research", links: [{ label: "SIRC", url: "#sirc" }, { label: "SURS", url: "#surs" }] },
            { heading: "Knowledge", links: [{ label: "Journals", url: "#journals" }, { label: "Publications", url: "#publications" }, { label: "Conferences", url: "#conferences" }] },
            { heading: "Research Community", links: [{ label: "Research Areas", url: "#research-areas" }, { label: "Researchers", url: "#researchers" }] }
        ],
        feature: { label: "Discover", title: "Research at Saegis", text: "Explore research, publications and academic initiatives.", button: "Explore Research", url: "#research" }
    },
    resources: {
        label: "RESOURCES",
        columns: [
            { heading: "Information", links: [{ label: "News & Events", url: "#news-events" }, { label: "FAQs", url: "#faqs" }, { label: "Downloads", url: "#downloads" }] },
            { heading: "Academic", links: [{ label: "Academic Calendar", url: "#calendar" }, { label: "Library", url: "#library" }] },
            { heading: "Students", links: [{ label: "Student Resources", url: "#student-resources" }, { label: "Student Portal", url: "#student-portal" }] }
        ],
        feature: { label: "Quick Access", title: "Useful resources", text: "Find important information, academic resources and student services.", button: "View Resources", url: "#resources" }
    }
};

document.addEventListener("DOMContentLoaded", function () {
    const desktopNav = document.getElementById("desktopNav");
    if (!desktopNav) return;

    Object.entries(menuData).forEach(([key, menu]) => {
        const li = document.createElement("li");
        li.className = "nav-item";
        li.innerHTML = `
            <button class="nav-button" aria-expanded="false">
                ${menu.label}
                <span class="arrow">▾</span>
            </button>
            <div class="mega-menu">
                <div class="mega-inner">
                    <div class="mega-grid">
                        ${createColumns(menu.columns)}
                        ${createFeature(menu.feature)}
                    </div>
                </div>
            </div>
        `;
        desktopNav.appendChild(li);
    });

    // Add Contact Link
    const contactLi = document.createElement("li");
    contactLi.innerHTML = `<a href="#contact" class="contact-link">CONTACT</a>`;
    desktopNav.appendChild(contactLi);

    // Add Apply Button
    const applyLi = document.createElement("li");
    applyLi.innerHTML = `<a href="#" class="apply-button" data-bs-toggle="modal" data-bs-target="#registerModal">APPLY NOW</a>`;
    desktopNav.appendChild(applyLi);

    // Dropdown Interactions
    const navItems = document.querySelectorAll(".nav-item");
    navItems.forEach(item => {
        const button = item.querySelector(".nav-button");
        if (!button) return;
        button.addEventListener("click", function (e) {
            e.stopPropagation();
            const isOpen = item.classList.contains("open");
            navItems.forEach(i => i.classList.remove("open"));
            if (!isOpen) item.classList.add("open");
        });
    });

    document.addEventListener("click", () => navItems.forEach(i => i.classList.remove("open")));
});

function createColumns(columns) {
    return columns.map(col => `
        <div class="mega-column">
            <div class="mega-heading">${col.heading}</div>
            <div class="mega-links">
                ${col.links.map(link => `<a href="${link.url}">${link.label}</a>`).join("")}
            </div>
        </div>
    `).join("");
}

function createFeature(feature) {

    // ==========================================
    // PROGRAMME ELIGIBILITY FINDER
    // ==========================================

    if (feature.type === "eligibilityFinder") {

        return `
            <div class="mega-column programme-finder-column">

                <div class="feature-panel programme-finder-panel">

                    <!-- Header -->
                    <div class="feature-label">
                        ${feature.label}
                    </div>

                    <h3>
                        ${feature.title}
                    </h3>

                    <p class="finder-description">
                        ${feature.text}
                    </p>


                    <!-- Qualification -->
                    <div class="finder-field">

                        <label>
                            Add your qualifications
                        </label>

                        <div class="qualification-buttons">

                            <button
                                type="button"
                                class="qualification-btn active"
                                data-qualification="al">

                                <span class="qualification-short">
                                    A/L
                                </span>

                                <span class="qualification-name">
                                    Advanced Level
                                </span>

                            </button>


                            <button
                                type="button"
                                class="qualification-btn"
                                data-qualification="ol">

                                <span class="qualification-short">
                                    O/L
                                </span>

                                <span class="qualification-name">
                                    Ordinary Level
                                </span>

                            </button>


                            <button
                                type="button"
                                class="qualification-btn"
                                data-qualification="foundation">

                                <span class="qualification-short">
                                    FND
                                </span>

                                <span class="qualification-name">
                                    Foundation
                                </span>

                            </button>

                        </div>

                    </div>


                    <!-- Action -->
                    <button
                        type="button"
                        class="finder-button"
                        id="findEligibleProgrammes">

                        FIND ELIGIBLE PROGRAMMES

                        <span>→</span>

                    </button>

                </div>

            </div>
        `;
    }


    // ==========================================
    // NORMAL FEATURE CARD
    // ==========================================

    return `
        <div class="mega-column">

            <div class="feature-panel">

                <div class="feature-label">
                    ${feature.label}
                </div>

                <h3>
                    ${feature.title}
                </h3>

                <p>
                    ${feature.text}
                </p>

                <a
                    href="${feature.url}"
                    class="feature-button">

                    ${feature.button} →

                </a>

            </div>

        </div>
    `;
}