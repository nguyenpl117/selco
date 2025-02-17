(function () {
    // Swiper

    function swiperSlider(el, config = {}) {
        return new Swiper(el.querySelector('.swiper'), {
            ... config,
            navigation: {
                nextEl: el.querySelector('.swiper-button-next'),
                prevEl: el.querySelector('.swiper-button-prev')
            },
            pagination: {
                el: el.querySelector('.swiper-pagination'),
            },
        });
    }

    // swiperSlider(document.querySelector('.slider_header'), {
    //     spaceBetween: 16,
    //     slidesPerView: 1,
    //     autoplay: false,
    // })

    // swiperSlider(document.querySelector('.slider_news'), {
    //     spaceBetween: 16,
    //     slidesPerView: 1,
    //     autoplay: false,
    // })
})()
