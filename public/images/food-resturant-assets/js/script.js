
var swiper = new Swiper('.food-menu-slider', {
    // pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.food_menu_section .swiper-button-next',
    prevButton: '.food_menu_section .swiper-button-prev',
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    breakpoints: {
        1050: {
            slidesPerView: 2,
        },
        550: {
            slidesPerView: 1,
            spaceBetween: 10,
        }
    }
});


