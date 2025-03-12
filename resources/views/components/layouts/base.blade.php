<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page_title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/libs/flickity/flickity.min.css') }}">
    <script src="{{ asset('/libs/flickity/flickity.pkgd.min.js') }}"></script>
{{--    <script src="https://cdn.jsdelivr.net/gh/phucbm/flickity-responsive@2.0.6/flickity-responsive.min.js"></script>--}}

    <link rel="stylesheet" href="{{ asset('/libs/aos/aos.min.css') }}"/>

    <link rel="stylesheet" href="{{ asset('/libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/libs/swiper/css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('/libs/swiper/css/swiper-custom.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ asset('/libs/fontawesome/js/all.min.js') }}"></script>
{{--    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>--}}
{{--    <script src="https://mozilla.github.io/pdf.js/build/pdf.mjs" type="module"></script>--}}
</head>
<body class="font-svn overflow-x-hidden" x-data>
<x-menu/>
{{ $slot }}
<x-footer/>
<!--Copyright-->
<div class="py-4 px-4 text-center">
    <p class="text-sm">Copyright 2025 © <strong>DooTech</strong></p>
</div>
<script src="{{ asset('/libs/aos/aos.min.js') }}"></script>
<script>
    AOS.init({
        duration: 1000,
    });
</script>
<script src="/libs/swiper/js/swiper.min.js"></script>
<script src="/libs/swiper/js/swiper-custom.js"></script>
<script src="/js/countUp.min.js"></script>
<script src="/js/script.js?v=123"></script>

</body>

</html>
