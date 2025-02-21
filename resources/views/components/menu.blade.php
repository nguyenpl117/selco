<header x-data="{openMobile: false}"
        @if(isset($fixedMenu))
            class="bg-gray-100/50 shadow transition-all duration-300 fixed w-full top-0 z-40 menu_header"
        @else
            class="bg-gray-100 shadow transition-all duration-300 sticky w-full top-0 z-40"
        @endif
>
    <div class="mx-auto max-w-screen-2xl px-4">
        <div class="flex justify-between space-x-6 items-center py-2 lg:py-0">
            <div class="items-center flex">
                <h1 title="Laravel">
                    <a href="/" data-pjax-state="">
                        <img class="h-16 w-16 logo-header safelyLoadImage" width="48" height="48" alt="Laravel"
                             onerror="this.onerror=null; this.src='/images/placeholder.jpg';"
                             src="./images/logo5.png">
                    </a>
                </h1>
            </div>

            <div class="hidden items-center grow lg:flex justify-end">
                <!-- Menu Main -->
                <ul class="lg:flex flex-wrap menu" lv="1">
                    <li class="relative group group/lv1">
                        <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-gray-700 text-gray-700 hover:text-green-700 p-3"
                           href="/" data-pjax-state="">Trang Chủ</a>
                    </li>
                    <li class="relative group group/lv1">
                        <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-gray-700 text-gray-700 hover:text-green-700 p-3"
                           href="/gioi-thieu" data-pjax-state="">Giới thiệu</a>
                        <div class="inline-block w-1"></div>
                        <svg class="w-2.5 h-2.5 absolute top-[20px] right-1" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 4 4 4-4"></path>
                        </svg>
                        <ul class="sub-menu absolute hidden max-w-[260px] min-w-[200px] w-max py-2 rounded bg-white border z-10 group group-hover/lv1:block"
                            lv="2">
                            <li class=" relative group border-b last:border-b-0 group/lv2">
                                <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-green-500 text-green-500 hover:text-green-700 p-3"
                                   href="/gioi-thieu">Giới thiệu chung</a>
                            </li>
                            <li class=" relative group border-b last:border-b-0 group/lv2">
                                <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-green-500 text-green-500 hover:text-green-700 p-3"
                                   href="/lich-su">Lịch sử hoàn thành</a>
                            </li>
                            <li class=" relative group border-b last:border-b-0 group/lv2">
                                <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-green-500 text-green-500 hover:text-green-700 p-3"
                                   href="/co-cau">Cơ cấu tổ chức</a>
                            </li>
                            <li class=" relative group border-b last:border-b-0 group/lv2">
                                <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-green-500 text-green-500 hover:text-green-700 p-3"
                                   href="/thanh-tich">Thành tích đạt được</a>
                            </li>

                        </ul>
                    </li>
                    <li class="relative group group/lv1">
                        <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-gray-700 text-gray-700 hover:text-green-700 p-3"
                           href="#" data-pjax-state="">Lĩnh vực hoạt động</a>
                        <div class="inline-block w-1"></div>
                        <svg class="w-2.5 h-2.5 absolute top-[20px] right-1" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 4 4 4-4"></path>
                        </svg>
                        <ul class="sub-menu absolute hidden max-w-[260px] min-w-[200px] w-max py-2 rounded bg-white border z-10 group group-hover/lv1:block"
                            lv="2">
                            <li class=" relative group border-b last:border-b-0 group/lv2">
                                <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-green-500 text-green-500 hover:text-green-700 p-3"
                                   href="/thi-cong-tram-bien-ap">Thi công trạm biến áp</a>
                            </li>
                            <li class=" relative group border-b last:border-b-0 group/lv2">
                                <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-green-500 text-green-500 hover:text-green-700 p-3"
                                   href="/lap-dung-cot">Lắp dựng cột</a>
                            </li>
                            <li class=" relative group border-b last:border-b-0 group/lv2">
                                <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-green-500 text-green-500 hover:text-green-700 p-3"
                                   href="/cang-day-dan">Căng dây dẫn</a>
                            </li>
                            <li class=" relative group border-b last:border-b-0 group/lv2">
                                <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-green-500 text-green-500 hover:text-green-700 p-3"
                                   href="/keo-day">Kéo dây</a>
                            </li>
                            <li class=" relative group border-b last:border-b-0 group/lv2">
                                <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-green-500 text-green-500 hover:text-green-700 p-3"
                                   href="/kinh-doanh">Kinh doanh</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative group group/lv1">
                        <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-gray-700 text-gray-700 hover:text-green-700 p-3"
                           href="/du-an">Các dự án</a>
                    </li>
                    <li class="relative group group/lv1">
                        <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-gray-700 text-gray-700 hover:text-green-700 p-3"
                           href="/quan-he-co-dong">Quan hệ cổ đông</a>
                    </li>
                    <li class="relative group group/lv1">
                        <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-gray-700 text-gray-700 hover:text-green-700 p-3"
                           href="/tin-tuc">Tin tức</a>
                        <div class="inline-block w-1"></div>
                        <svg class="w-2.5 h-2.5 absolute top-[20px] right-1" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 4 4 4-4"></path>
                        </svg>
                        <ul class="sub-menu absolute hidden max-w-[260px] min-w-[200px] w-max py-2 rounded bg-white border z-10 group group-hover/lv1:block"
                            lv="2">
                            <li class=" relative group border-b last:border-b-0 group/lv2">
                                <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-green-500 text-green-500 hover:text-green-700 p-3"
                                   href="/tin-tuc">Tin tức sự kiện</a>
                            </li>
                            <li class=" relative group border-b last:border-b-0 group/lv2">
                                <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-green-500 text-green-500 hover:text-green-700 p-3"
                                   href="/tin-tuyen-dung">Tin tuyển dụng</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative group group/lv1">
                        <a class="text-base font-bold group-[.sub-menu]:text-gray-600 group-[.sub-menu]:py-1 group-[.sub-menu]:block inline-block group-[.sub-menu]:hover:text-gray-700 text-gray-700 hover:text-green-700 p-3"
                           href="/lien-he" data-pjax-state="">Liên hệ</a>
                    </li>
                </ul>
                <!-- End Menu Main -->
            </div>

            <!-- Menu mobile -->
            <div class="-mr-2 -my-2 lg:hidden">


                <button x-on:click="openMobile = !openMobile" type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none"
                        aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- End Menu mobile -->
        </div>
    </div>
    <div x-show="openMobile" x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform scale-50"
         x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-50" class="absolute top-0 inset-x-0 z-50"
         style="display: none;">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50 h-screen">
            <div class="flex items-center justify-between px-4 pt-1">
                <div>


                </div>
                <div class="-mr-2">
                    <button x-on:click="openMobile = !openMobile" type="button"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">

                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="overflow-y-auto px-4 h-screen pb-4">
                <div class="my-4">
                    <nav>
                        <div>
                            <a x-on:click="openMobile = !openMobile" href="/"
                               class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50" data-pjax-state="">
                                        <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                            Trang Chủ
                                        </span>
                            </a>

                        </div>
                        <div>
                            <div class="-m-3 px-3 py-2 rounded-md hover:bg-gray-50" x-data="{openNav: false}">
                                <div class="flex items-center justify-between">
                                    <a href="/gioi-thieu" data-pjax-state="">
                                                    <span class="text-sm font-medium text-gray-900">
                                                       Giới thiệu
                                                    </span>
                                    </a>

                                    <div x-on:click="openNav = ! openNav"
                                         class="cursor-pointer w-16 md:w-20 h-8 text-lg flex-shrink-0 flex items-center justify-center -mr-4">
                                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 9l-7 7-7-7"></path>
                                        </svg>

                                    </div>
                                </div>
                                <nav x-show="openNav" class="ml-0 my-1">
                                    <div x-data="{openSubNav: false}">
                                        <a href="/gioi-thieu"
                                           class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50">
                                            <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                                - Giới thiệu chung
                                            </span>
                                        </a>
                                        <a href="/lich-su"
                                           class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50">
                                            <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                                - Lịch sử hoàn thành
                                            </span>
                                        </a>
                                        <a href="/co-cau"
                                           class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50">
                                            <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                                - Cơ cấu tổ chức
                                            </span>
                                        </a>
                                        <a href="/thanh-tich"
                                           class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50">
                                            <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                                - Thành tích đạt được
                                            </span>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div>
                            <div class="-m-3 px-3 py-2 rounded-md hover:bg-gray-50" x-data="{openNav: false}">
                                <div class="flex items-center justify-between">
                                    <a href="#">
                                        <span class="text-sm font-medium text-gray-900">
                                            Lĩnh vực hoạt động
                                        </span>
                                    </a>

                                    <div x-on:click="openNav = ! openNav"
                                         class="cursor-pointer w-16 md:w-20 h-8 text-lg flex-shrink-0 flex items-center justify-center -mr-4">
                                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </div>
                                <nav x-show="openNav" class="ml-0 my-1">
                                    <div x-data="{openSubNav: false}">
                                        <a href="/thi-cong-tram-bien-ap"
                                           class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50">
                                            <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                                - Thi công trạm biến áp
                                            </span>
                                        </a>
                                        <a href="/lap-dung-cot"
                                           class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50">
                                            <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                                - Lắp dựng cột
                                            </span>
                                        </a>
                                        <a href="/cang-day-dan"
                                           class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50">
                                            <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                                - Căng dải dây dẫn
                                            </span>
                                        </a>
                                        <a href="/keo-day"
                                           class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50">
                                            <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                                - Kéo dây
                                            </span>
                                        </a>
                                        <a href="/kinh-doanh"
                                           class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50">
                                            <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                                - Kinh doanh
                                            </span>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div>
                            <a x-on:click="openMobile = !openMobile" href="/du-an"
                               class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50" data-pjax-state="">
                                <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                   Các dự án
                                </span>
                            </a>

                        </div>
                        <div>
                            <a x-on:click="openMobile = !openMobile" href="./quan-he-co-dong"
                               class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50" data-pjax-state="">
                                <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                    Quan hệ cổ đông
                                </span>
                            </a>
                        </div>
                        <div>
                            <div class="-m-3 px-3 py-2 rounded-md hover:bg-gray-50" x-data="{openNav: false}">
                                <div class="flex items-center justify-between">
                                    <a href="/tin-tuc">
                                        <span class="text-sm font-medium text-gray-900">
                                            Tin tức
                                        </span>
                                    </a>

                                    <div x-on:click="openNav = ! openNav"
                                         class="cursor-pointer w-16 md:w-20 h-8 text-lg flex-shrink-0 flex items-center justify-center -mr-4">
                                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </div>
                                <nav x-show="openNav" class="ml-0 my-1">
                                    <div x-data="{openSubNav: false}">
                                        <a href="/tin-tuc"
                                           class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50">
                                            <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                                - Tin tức sự kiện
                                            </span>
                                        </a>
                                        <a href="/tin-tuyen-dung"
                                           class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50">
                                            <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                                - Tin tuyển dụng
                                            </span>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div>
                            <a x-on:click="openMobile = !openMobile" href="/lien-he"
                               class="-m-3 px-3 py-2 flex items-center rounded-md hover:bg-gray-50" data-pjax-state="">
                                <span class="text-sm font-medium text-gray-900 h-8 leading-8">
                                    Liên hệ
                                </span>
                            </a>

                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>