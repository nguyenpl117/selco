(function () {
    // var elem = document.querySelector('.main-carousel');
    // var flkty = new Flickity( elem, {
    //     // options
    //     cellAlign: 'left',
    //     contain: true
    // });
    if (document.querySelector('.btndown')) {
        document.querySelector('.btndown').addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(e.target.getAttribute('href')).scrollIntoView({behavior: 'smooth'});
        });
    }

    if (document.querySelector('.home-carousel')) {
        new Flickity('.home-carousel', {
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
            autoPlay: 3000,
            pageDots: true
        });
    }


    if (document.querySelector('.main-carousel')) {
        // element argument can be a selector string
        //   for an individual element
        const flkty = new Flickity('.main-carousel', {
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
            autoPlay: 3000,
        });
    }

    if (document.querySelector('.project-carousel')) {
        new Flickity( '.project-carousel', {
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
        });
    }
    if (document.querySelector('.project-carousel2')) {
        new Flickity( '.project-carousel2', {
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
        });
    }

    const homeElm = document.querySelector('.home-carousel');
    if (homeElm) {
        const resizeHomeObserver = new ResizeObserver((entries) => {
            for (const entry of entries) {
                const { width, height } = entry.contentRect;
                // console.log(width, height)
            }
        });
        resizeHomeObserver.observe(homeElm);
    }

    if (document.querySelector('.product-slider')) {
        new Flickity( '.product-slider', {
            cellAlign: 'center',
            wrapAround: true,
            autoPlay: false,
            prevNextButtons: true,
            adaptiveHeight: true,
            imagesLoaded: true,
            lazyLoad: 1,
            dragThreshold: 15,
            pageDots: false,
            rightToLeft: false,
            fullscreen: true
        });
        new Flickity('.product-thumbnail', {
            cellAlign: 'center',
            wrapAround: false,
            autoPlay: false,
            prevNextButtons: false,
            asNavFor: '.product-slider',
            percentPosition: true,
            imagesLoaded: true,
            pageDots: false,
            rightToLeft: false,
            contain: true,
        });
    }

    if (document.querySelector('.lv-carousel')) {
        new Flickity('.lv-carousel', {
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
            groupCells: 3,
        });
    }
    document.addEventListener('DOMContentLoaded', function () {
        const options = {
            duration: 2, // Duration of the animation in seconds
        };

        document.querySelectorAll(".count-up").forEach(function (e) {
            const countUp = new CountUp(e, e.textContent, options);
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        });
    });

    const divElm = document.querySelector('.partners');
    if (divElm) {
        const resizeObserver = new ResizeObserver((entries) => {
            requestAnimationFrame(() => {
                for (const entry of entries) {
                    const { width } = entry.contentRect;
                    switch (true) {
                        case width < 550:
                            new Flickity('.partners-carousel', {
                                cellAlign: 'left',
                                contain: true,
                                prevNextButtons: false,
                                groupCells: 1,
                            });
                            break;
                        case width < 1024:
                            new Flickity('.partners-carousel', {
                                cellAlign: 'left',
                                contain: true,
                                prevNextButtons: false,
                                groupCells: 3,
                            });
                            break;
                        default:
                            new Flickity('.partners-carousel', {
                                cellAlign: 'left',
                                contain: true,
                                prevNextButtons: false,
                                groupCells: 4,
                            });
                            break;
                    }
                }
            });
        });
        resizeObserver.observe(divElm);
    }

    document.addEventListener('scroll', function (e) {
        if (!document.querySelector('.menu_header')) {
            return;
        }
        if (e.currentTarget.scrollingElement.scrollTop > 50) {
            document.querySelector('.menu_header').classList.remove('bg-gray-100/50');
            document.querySelector('.menu_header').classList.add('bg-white');
            document.querySelector('.menu_header').classList.add('shadow');
        } else {
            document.querySelector('.menu_header').classList.add('bg-gray-100/50');
            document.querySelector('.menu_header').classList.remove('bg-white');
            document.querySelector('.menu_header').classList.remove('shadow');
        }
    })
})()