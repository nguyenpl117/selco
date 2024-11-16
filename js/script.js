(function () {
    // var elem = document.querySelector('.main-carousel');
    // var flkty = new Flickity( elem, {
    //     // options
    //     cellAlign: 'left',
    //     contain: true
    // });
    document.querySelector('.btndown').addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(e.target.getAttribute('href')).scrollIntoView({behavior: 'smooth'});
    });

    new Flickity('.home-carousel', {
        cellAlign: 'left',
        contain: true,
        prevNextButtons: false,
        autoPlay: 3000,
        pageDots: true
    });

    // element argument can be a selector string
    //   for an individual element
    const flkty = new Flickity( '.main-carousel', {
        cellAlign: 'left',
        contain: true,
        prevNextButtons: false,
        autoPlay: 3000,
    });


    new Flickity( '.project-carousel', {
        cellAlign: 'left',
        contain: true,
        prevNextButtons: false,
    });

    const homeElm = document.querySelector('.home-carousel');
    const resizeHomeObserver = new ResizeObserver((entries) => {
        for (const entry of entries) {
            const { width, height } = entry.contentRect;
            // console.log(width, height)
        }
    });
    resizeHomeObserver.observe(homeElm);

    const divElm = document.querySelector('.partners');
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

    document.addEventListener('scroll', function (e) {
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