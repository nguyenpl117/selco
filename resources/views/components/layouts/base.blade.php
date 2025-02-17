<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/phucbm/flickity-responsive@2.0.6/flickity-responsive.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <link rel="stylesheet" href="./libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./libs/swiper/css/swiper.css">
    <link rel="stylesheet" href="./libs/swiper/css/swiper-custom.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./libs/fontawesome/js/all.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ["Open Sans", "serif"],
                    },
                    colors: {
                        primary: {
                            '50': '#cce5ff',
                            '100': '#9acafe',
                            '200': '#67b0fe',
                            '300': '#3496fe',
                            '400': '#0163cb',
                            '500': '#0156b2',
                            '600': '#014a98',
                            '700': '#01458e',
                            '800': '#013e7f',
                            '900': '#013165',
                            '950': '#00254c'
                        },
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans" x-data>
<x-menu/>
{{ $slot }}
<x-footer/>
<!--Copyright-->
<div class="py-4 px-4 text-center">
    <p class="text-sm">Copyright 2024 © <strong>DooTech</strong></p>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
    });
</script>
<script src="./libs/swiper/js/swiper.min.js"></script>
<script src="./libs/swiper/js/swiper-custom.js"></script>
<script src="./js/script.js"></script>

</body>

</html>
