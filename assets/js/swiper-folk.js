/* banner materials */
const swiperMagazine = new Swiper( '.js-swiper-magazine', {
    slidesPerView: 3,
    spaceBetween: 30,

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 0,
        },

        992: {
            slidesPerView: 2,
            spaceBetween: 30,
        },

        1200: {
            slidesPerView: 3,
            spaceBetween: 30,   
        }
    },

    navigation: {
        prevEl: '.js-swiper-button-prev-magazine',
        nextEl: '.js-swiper-button-next-magazine'
    }
})
