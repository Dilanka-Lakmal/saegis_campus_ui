const departmentsSwiper = new Swiper(".saegis_home_departments", {
    slidesPerView: 1,
    spaceBetween: 24,

    loop: false,

    pagination: {
        el: ".faculty-pagination",
        clickable: true
    },

    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 24
        },

        1100: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});
