<x-layouts.base>
    <!--Header slider-->
    <div class="bg-gray-50">
        <div class="slider_header">
            <div class="swiper w-full h-full">
                <div class="home-carousel">
                    <div class="carousel-cell">
                        <div class="relative">
                            <img class="object-cover" style="height: 100vh; width: 100vw;"
                                 src="./images/image5.jpg"
                                 alt="image">
                            <div class="content text-white px-4 max-w-[750px] text-xl lg:text-3xl absolute top-[30%] lg:top-[50%] items-center justify-center">
                                Công ty chính thức thành lập ngày 04 tháng 07 năm 2008 với chuyên ngành xây lắp đường
                                dây
                                truyền tải điện và trạm biến áp có cấp điện áp đến 500kV,
                                thi công lắp đặt hệ hống cơ điện, cấp thoát nước trong các tòa nhà cao tầng, khu đô thị,
                                khu công nghiệp và nước sạch nông thôn, đầu tư các dự án thủy điện, dự án khu công
                                nghiệp,
                                đô thị mới...
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <img class="object-cover" style="height: 100vh; width: 100vw;"
                             src="./images/image4.jpg" alt="image">
                    </div>

                </div>
            </div>
        </div>
        <div class="scrolldownbutton flex items-center flex-col text-white">
            <a class="btndown flex flex-col items-center" href="#scrolldown">
            <span class="vii-home-banner_scroll-down-arrows pointer-events-none">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </span>
                <span class="pointer-events-none">Kéo xuống</span>
            </a>
            <!--        <a class="btndown" href="#scrolldown"><span>Kéo xuống</span></a>-->
        </div>
    </div>

    <!--Tin mới cập nhật-->
    <div class="mt-24">
        <div class="max-w-screen-2xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="px-4 flex flex-col justify-center">
                    <div class="flex flex-col gap-4">
                        <div class="flex justify-between" data-aos="fade-up">
                            <h2 class="text-3xl font-medium">Tin mới cập nhật</h2>
                            <a href="{{ autoRoute('news') }}" class="flex gap-2 py-5 text-primary-300">
                                <span>Xem tất cả</span>
                                <div class="relative w-6 h-6 flex justify-center items-center">
                                    <span class="absolute animate-ping flex h-4/5 w-4/5 rounded-full bg-primary-600 opacity-75"></span>
                                    <div class="absolute bg-primary-600 w-6 h-6 rounded-full text-white justify-center items-center flex">
                                        <i class="fa-solid fa-chevron-right text-xs"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        @foreach($news as $post)
                            <div data-aos="fade-up"
                                 class="rounded overflow-hidden flex justify-between items-center bg-gray-100">
                                <div class="bg-primary-500 py-4 px-3 text-white flex flex-col items-center">
                                    <span class="text-3xl font-medium">{{ $post->createdDate?->format('d') }}</span>
                                    <span class="text-xs">Tháng {{ $post->createdDate?->format('m') }}</span>
                                </div>
                                <div class="flex-1 px-2">
                                    {{ $post->title }}
                                </div>
                                <div class="px-4">
                                    <a href="{{ $post->url }}"
                                         class="border border-primary-500 rounded text-primary-500 px-4 py-2 hover:border-black hover:text-black">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{--                commend--}}
                <div class="px-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="main-carousel">
                        @foreach($news as $post)
                            <div class="carousel-cell">
                                <a href="{{ $post->url }}" class="group block relative overflow-hidden rounded-tr-2xl rounded-bl-2xl">
                                    <img class="group-hover:scale-110 transition-all duration-500 aspect-[10/8]"
                                         src="{{ $post->imageLink }}"
                                         alt="{{ $post->title }}">
                                    <div class="absolute bottom-0 text-white p-4">
                                        <h3>{{ $post->title }}</h3>
                                        <div>
                                            <i class="fa-solid fa-calendar"></i>
                                            <span>{{ $post->createdDate?->format('d/m/Y')  }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Lĩnh vực hoạt động-->
    <div id="scrolldown" class="mt-12">
        <div class="max-w-screen-2xl mx-auto px-4">
            <div class="flex flex-col gap-4">
                <h2 class="text-3xl mb-6 font-medium" data-aos-duration="1000" data-aos="fade-up">Lĩnh vực hoạt
                    động</h2>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach($listOperations as $key => $item)
                        <a href="#" class="block group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{ $key * 50 }}">
                            <div class="aspect-[9/10] relative overflow-hidden rounded-tr-xl rounded-bl-xl">
                                <img class="object-cover absolute top-0 right-0 h-full"
                                     src="{{ $item->imageLink }}"
                                     alt="{{ $item->title }}">
                                <div class="opacity-1 lg:opacity-0 group-hover:opacity-100 flex absolute w-full h-full top-0 left-0 transition-all justify-center items-center bg-gray-950/50">
                                </div>
                                <div class="absolute w-full h-full top-0 left-0 flex justify-center items-center">
                                    <div class="opacity-1 px-2 lg:opacity-0 group-hover:opacity-100 transition-all duration-500">
                                        <span class="text-xl lg:text-2xl text-white uppercase font-medium">{{ $item->title }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
{{--                    <a href="#" class="block group" data-aos="fade-up" data-aos-duration="1000">--}}
{{--                        <div class="aspect-[9/10] relative overflow-hidden rounded-tr-xl rounded-bl-xl">--}}
{{--                            <img class="object-cover absolute top-0 right-0 h-full"--}}
{{--                                 src="./images/tram-bien-ap-la-giphan-loai-tinh-toan-lua-chon-tram-bien-ap-01-1.jpg"--}}
{{--                                 alt="thi công trạm biến áp">--}}
{{--                            <div class="opacity-1 lg:opacity-0 group-hover:opacity-100 flex absolute w-full h-full top-0 left-0 transition-all justify-center items-center bg-gray-950/50">--}}
{{--                            </div>--}}
{{--                            <div class="absolute w-full h-full top-0 left-0 flex justify-center items-center">--}}
{{--                                <div class="opacity-1 px-2 lg:opacity-0 group-hover:opacity-100 transition-all duration-500">--}}
{{--                                    <span class="text-xl lg:text-2xl text-white uppercase font-medium"> thi công trạm biến áp </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="block group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">--}}
{{--                        <div class="aspect-[9/10] relative overflow-hidden rounded-tr-xl rounded-bl-xl">--}}
{{--                            <img class="object-cover absolute top-0 right-0 h-full"--}}
{{--                                 src="./images/Anh3Hoanthanhdongdien252024.jpg"--}}
{{--                                 alt="lắp dựng cột">--}}
{{--                            <div class="opacity-1 lg:opacity-0 group-hover:opacity-100 flex absolute w-full h-full top-0 left-0 transition-all justify-center items-center bg-gray-950/50">--}}
{{--                            </div>--}}
{{--                            <div class="absolute w-full h-full top-0 left-0 flex justify-center items-center">--}}
{{--                                <div class="opacity-1 px-2 lg:opacity-0 group-hover:opacity-100 transition-all duration-500">--}}
{{--                                    <span class="text-xl lg:text-2xl text-white uppercase font-medium"> lắp dựng cột </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="block group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">--}}
{{--                        <div class="aspect-[9/10] relative overflow-hidden rounded-tr-xl rounded-bl-xl">--}}
{{--                            <img class="object-cover absolute top-0 right-0 h-full"--}}
{{--                                 src="./images/dd500kv-1722252541611119095424.jpg"--}}
{{--                                 alt="Căng dải dây dẫn">--}}
{{--                            <div class="opacity-1 lg:opacity-0 group-hover:opacity-100 flex absolute w-full h-full top-0 left-0 transition-all justify-center items-center bg-gray-950/50">--}}
{{--                            </div>--}}
{{--                            <div class="absolute w-full h-full top-0 left-0 flex justify-center items-center">--}}
{{--                                <div class="opacity-1 px-2 lg:opacity-0 group-hover:opacity-100 transition-all duration-500">--}}
{{--                                    <span class="text-xl lg:text-2xl text-white uppercase font-medium"> Căng dải dây dẫn</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="block group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">--}}
{{--                        <div class="aspect-[9/10] relative overflow-hidden rounded-tr-xl rounded-bl-xl">--}}
{{--                            <img class="object-cover absolute top-0 right-0 h-full"--}}
{{--                                 src="./images/1.jpeg"--}}
{{--                                 alt="Kéo dây">--}}
{{--                            <div class="opacity-1 lg:opacity-0 group-hover:opacity-100 flex absolute w-full h-full top-0 left-0 transition-all justify-center items-center bg-gray-950/50">--}}
{{--                            </div>--}}
{{--                            <div class="absolute w-full h-full top-0 left-0 flex justify-center items-center">--}}
{{--                                <div class="opacity-1 px-2 lg:opacity-0 group-hover:opacity-100 transition-all duration-500">--}}
{{--                                    <span class="text-xl lg:text-2xl text-white uppercase font-medium"> Kéo dây </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
                </div>
            </div>
        </div>
    </div>

    <!--Giới thiệu-->
    <div class="mt-24">
        <div class="max-w-screen-2xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="px-4 flex flex-col justify-center" data-aos="zoom-in" data-aos-duration="1000">
                    <div class='wy overflow-hidden rounded-lg'>
                        <div class='youtube'>
                            <iframe width="1067" height="600" src="https://www.youtube.com/embed/MOdtX4_bLB8"
                                    title="Công ty Cổ Phần Sông Đà 11 - Tiếp nối những thành công" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="px-4">
                    <h3 class="text-4xl font-medium mb-4" data-aos="fade-up">Công ty TNHH MTV Sông Đà 11 Thăng Long</h3>
                    <div class="text-gray-700" data-aos="fade-up">
                        Công ty TNHH MTV Sông Đà 11 Thăng Long là đơn vị thành viên của Tổng công ty Sông
                        Đà, đã tham gia thi công xây lăp nhiều dự án quan trọng của đất nước về thủy điện, hệ thống
                        đường
                        dây truyền tải điện cao thế, hệ thống cấp thoát nước trong các khu đô thị và công nghiệp…
                        Thực hiện chủ trương sắp xếp đổi mới doanh nghiệp, trên cơ sở chức năng nhiệm vụ, lực lượng cán
                        bộ
                        công nhân viên, tài sản tiền vốn và trang thiết bị thi công của Xí nghiệp Sông Đà 11.2 và Xí
                        nghiệp
                        Sông Đà 11.5 thuộc Công ty cổ phần Sông Đà 11.
                        Công ty chính thức thành lập ngày 04 tháng 07 năm 2008 với chuyên ngành xây lắp đường dây truyền
                        tải
                        điện và trạm biến áp có cấp điện áp đến 500kV, thi công lắp đặt hệ hống cơ điện, cấp thoát nước
                        trong các tòa nhà cao tầng, khu đô thị, khu công nghiệp và nước sạch nông thôn,
                        đầu tư các dự án thủy điện, dự án khu công nghiệp,đô thị mới.
                        Trong những năm vừa qua (2008 – 2013) cùng với sự nỗ lực của tập thể CBCNV đơn vị đã hoàn thành
                        xuất
                        sắc nhiệm vụ SXKD với tổng giá trị sản lượng đạt 1.600 tỷ đồng, lợi nhuận đạt 61 tỷ đồng.
                        Kế hoạch đến năm 2015 và định hướng đến năm 2020 của Công ty trở thành đơn vị chủ lực của Tổng
                        công
                        ty Sông Đà trong lĩnh vực đầu tư phát triển nguồn điện,
                        đầu tư đô thị và hạ tầng công nghiệp đồng thời không ngừng khẳng định vị thế là nhà thầu EPC
                        mạnh
                        trong kĩnh vực xây lắp các công trình điện nước.

                    </div>
                    <div class="py-2" data-aos="fade-up">
                        <a href="/gioi-thieu"
                           class="py-2 px-4 inline-block text-primary-500 hover:bg-primary-500 hover:text-white font-medium transition-all border border-primary-500 rounded">
                            Xem thêm
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Dự án nổi bật-->
    <div class="mt-24">
        <div class="max-w-screen-2xl mx-auto px-4">
            <h2 class="text-4xl font-medium py-4" data-aos="fade-up">Dự án nổi bật</h2>
            <div class="project-carousel" data-aos="fade-up">
                @foreach($projects as $post)
                    <div class="carousel-cell">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="order-2 md:order-1 flex flex-col justify-center max-w-2xl">
                                <div>
                                    <h3 class="text-xl md:text-3xl font-medium pb-4">
                                        <a href="{{ $post->url }}" class="text-primary-500 hover:text-black">
                                            {{ $post->title }}
                                        </a>
                                    </h3>
                                </div>
                                <p class="text-gray-700">
                                    Giá trị : {{ $post->value }} tỷ đồng
                                    Chú đầu tư: {{ $post->investor }}
                                    Thời gian khới công: {{ $post->startTime?->format('m-Y') }}
                                    Thời gian hoàn thành: {{ $post->endTime?->format('m-Y') }}
                                </p>
                                <div class="py-4 ">
                                    <a href="{{ $post->url }}"
                                       class="py-2 px-4 font-medium text-primary-500 inline-block hover:bg-gray-200 transition-all duration-200 border border-primary-500 rounded">
                                        Xem chi tiết
                                    </a>
                                </div>
                            </div>
                            <div class="order-1 md:order-2">
                                <div class="aspect-[4/3] rounded-tr-2xl rounded-bl-2xl overflow-hidden">
                                    <img class="aspect-[4/3]"
                                         src="{{ $post->image }}"
                                         alt="{{ $post->title }}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--Quan hệ cổ đông-->
    <div class="mt-24">
        <div class="max-w-screen-2xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col justify-center" data-aos-duration="1000" data-aos="fade-right">
                    <img class="rounded-tr-2xl rounded-bl-2xl"
                         src="https://songda11.com.vn/wp-content/uploads/5443-1752.jpg" alt="image">
                </div>
                <div>
                    <h3 class="text-4xl font-medium mb-4" data-aos="fade-up" data-aos-duration="1000">Quan hệ cổ
                        đông</h3>
                    <div class="text-gray-700" data-aos="fade-up" data-aos-duration="1000">
                        Tại Selco, chúng tôi luôn hướng đến sự tăng trưởng bền vững, mang đến những giá trị cao nhất
                        cho cổ đông và nhà đầu tư thông qua việc thiết lập các mối quan hệ lâu dài, xây dựng lòng tin,
                        đối
                        xử công bằng, minh bạch, chủ động và cung cấp thông tin tới các bên liên quan. Với cam kết tăng
                        trưởng bền vững, các kết quả kinh doanh Selco đạt được đều vượt xa mong đợi từ cổ đông và nhà
                        đầu tư.
                    </div>
                    <div>
                        <ul>
                            @foreach($docs as $post)
                                <li class="border-b last:border-b-0 py-2" data-aos="fade-up" data-aos-duration="1000">
                                    <a href="{{ $post->url }}" class="text-primary-500 hover:text-black font-medium py-2">
                                        {{ $post->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <a href="{{ autoRoute('docs') }}" class="flex gap-2 py-5 text-primary-300" data-aos="fade-up" data-aos-duration="1000">
                        <span>Xem tất cả</span>
                        <div class="relative w-6 h-6 flex justify-center items-center">
                            <span class="absolute animate-ping flex h-4/5 w-4/5 rounded-full bg-primary-600 opacity-75"></span>
                            <div class="absolute bg-primary-600 w-6 h-6 rounded-full text-white justify-center items-center flex">
                                <svg class="svg-inline--fa fa-chevron-right text-xs" aria-hidden="true"
                                     focusable="false"
                                     data-prefix="fas" data-icon="chevron-right" role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                          d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                </svg>
                                <!-- <i class="fa-solid fa-chevron-right text-xs"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--Partners-->
    <div class="my-12 partners">
        <div class="max-w-screen-2xl mx-auto px-4">
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-12 md:col-span-4 lg:col-span-3 flex flex-col justify-center">
                    <h3 class="text-4xl" data-aos="fade-up">Partners</h3>
                </div>
                <div class="col-span-12 md:col-span-8 lg:col-span-9" data-aos="fade-up">
                    <div class="partners-carousel" data-aos="fade-up">
                        @foreach($partners as $partner)
                            <div class="carousel-cell px-2 mb-8 w-full max-w-[75%] md:max-w-[35%] lg:max-w-[25%]">
                                <div class="aspect-[5/3] overflow-hidden border rounded shadow hover:shadow-lg">
                                    <img class="aspect-[5/3] object-contain"
                                         src="{{ $partner->imageLink }}" alt="{{ $partner->title }}">
                                </div>
                            </div>
                        @endforeach

{{--                        <div class="carousel-cell px-2 mb-8 w-full max-w-[75%] md:max-w-[35%] lg:max-w-[25%]">--}}
{{--                            <div class="aspect-[5/3] overflow-hidden border rounded shadow hover:shadow-lg">--}}
{{--                                <img class="aspect-[5/3] object-contain"--}}
{{--                                     src="https://songda11.com.vn/wp-content/uploads/vietinbank.jpg">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-cell px-2 mb-8 w-full max-w-[75%] md:max-w-[35%] lg:max-w-[25%]">--}}
{{--                            <div class="aspect-[5/3] overflow-hidden border rounded shadow hover:shadow-lg">--}}
{{--                                <img class="aspect-[5/3] object-contain"--}}
{{--                                     src="https://songda11.com.vn/wp-content/uploads/agribank.jpg">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-cell px-2 mb-8 w-full max-w-[75%] md:max-w-[35%] lg:max-w-[25%]">--}}
{{--                            <div class="aspect-[5/3] overflow-hidden border rounded shadow hover:shadow-lg">--}}
{{--                                <img class="aspect-[5/3] object-contain"--}}
{{--                                     src="https://songda11.com.vn/wp-content/uploads/bidv.jpg">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.base>