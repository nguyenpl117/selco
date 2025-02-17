<x-layouts.base>
    <div class="max-w-screen-2xl mx-auto p-4 mb-5">
        <p>
            <a href="./index.html" class="text-primary-400 hover:text-black">Trang chủ</a> / <a href="./tin-tuc.html">Tin
                tức</a>
        </p>
    </div>

    <main>
        <div class="max-w-screen-2xl mx-auto px-4 mb-10">
            <div>
                <h1 class="post_cat_title uppercase">Tin tức sự kiện</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8" x-data>
                <template x-for="item in [1,2,3,4,5,6,7,8,9]">
                    <div class="shadow overflow-hidden hover:shadow-xl duration-300">
                        <div class="relative overflow-hidden group image-cover" style="padding-top: 56.25%">
                            <a title="Tiếng Hoa Cho Trẻ Em3: Bắt Đầu Từ Khi Nào Là Tốt Nhất?"
                               href="./tin-tuc-chi-tiet.html">
                                <img class="w-full lozad m-0 lg:group-hover:scale-110 transition-all duration-500 safelyLoadImage"
                                     alt="Tiếng Hoa Cho Trẻ Em3: Bắt Đầu Từ Khi Nào Là Tốt Nhất?"
                                     src="https://songda11.com.vn/wp-content/uploads/img5805-1719119298915929670737-171912599464240319999.webp"
                                     data-loaded="true">
                            </a>
                        </div>
                        <div class="p-4">
                            <h3 class="text-base lg:text-lg line-clamp-2 font-semibold !mt-0">
                                <a href="./tin-tuc-chi-tiet.html" class="hover:text-primary-500 line-clamp-2">
                                    Thủ tướng: Ra nước ngoài, lục từng container để đưa thiết bị về làm đường dây 500kV
                                </a>
                            </h3>
                            <div class="text-sm line-clamp-3 md:line-clamp-3 my-2 py-0 text-black/60">
                                Thủ tướng yêu cầu mở đợt thi đua cao điểm đặc biệt, “nước rút”, “thần tốc” để phấn đấu cơ bản dựng cột kéo dây xong đường dây 500kV trong tháng 6 và hoàn thành công trình vào tháng 7
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <div class="flex flex-col items-center justify-center my-4">
                <nav aria-label="Page navigation example">
                    <ul class="flex items-center -space-x-px h-8 text-sm">
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Previous</span>
                                <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
</x-layouts.base>