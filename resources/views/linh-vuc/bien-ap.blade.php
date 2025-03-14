<x-layouts.base>
    <!--Banner-->
    <div>
        <img src="./images/sl001.jpg" alt="" class="w-full">
    </div>

    <div class="my-10">
        <div class="max-w-screen-2xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
                <div class="px-4 @if(count($post->images)) col-span-5 @else col-span-12 @endif flex flex-col justify-center">
                    <div class="flex flex-col gap-4" data-aos="fade-right">
                        <div class="flex justify-between">
                            <h2 class="font-bold font-svn-medium text-[34px]">{{ $post->title }}</h2>
                        </div>
                        <div>
                            {{ $post->content }}
                        </div>
                    </div>
                </div>
                @if(count($post->images))
                <div class="px-4 col-span-7 flex flex-col justify-center" data-aos="fade-left" data-aos-duration="1000">
                   <div class="">
                       <div class="lv-carousel">
                           @foreach($post->images as $image)
                               <div class="carousel-cell w-1/3 px-2">
                                   <a href="#" class="group block relative image-cover rounded-tr-2xl rounded-bl-2xl" style="padding-top: 120%">
                                       <img class="group-hover:scale-110 transition-all duration-500"
                                            src="{{ $image }}"
                                            alt="{{ $post->title }}">
                                   </a>
                               </div>
                           @endforeach

{{--                           <div class="carousel-cell w-1/3 px-2">--}}
{{--                               <a href="#" class="group block relative image-cover rounded-tr-2xl rounded-bl-2xl" style="padding-top: 120%">--}}
{{--                                   <img class="group-hover:scale-110 transition-all duration-500"--}}
{{--                                        src="./images/image5.jpg"--}}
{{--                                        alt="image">--}}
{{--                               </a>--}}
{{--                           </div>--}}
{{--                           <div class="carousel-cell w-1/3 px-2">--}}
{{--                               <a href="#" class="group block relative image-cover rounded-tr-2xl rounded-bl-2xl" style="padding-top: 120%">--}}
{{--                                   <img class="group-hover:scale-110 transition-all duration-500"--}}
{{--                                        src="./images/image11.png"--}}
{{--                                        alt="image">--}}
{{--                               </a>--}}
{{--                           </div>--}}
{{--                           <div class="carousel-cell w-1/3 px-2">--}}
{{--                               <a href="#" class="group block relative image-cover rounded-tr-2xl rounded-bl-2xl" style="padding-top: 120%">--}}
{{--                                   <img class="group-hover:scale-110 transition-all duration-500"--}}
{{--                                        src="./images/image12.jpg"--}}
{{--                                        alt="image">--}}
{{--                               </a>--}}
{{--                           </div>--}}
{{--                           <div class="carousel-cell w-1/3 px-2">--}}
{{--                               <a href="#" class="group block relative image-cover rounded-tr-2xl rounded-bl-2xl" style="padding-top: 120%">--}}
{{--                                   <img class="group-hover:scale-110 transition-all duration-500"--}}
{{--                                        src="./images/img-aV7Tun36iN6nOHwWQGhiuJx0.png"--}}
{{--                                        alt="image">--}}
{{--                               </a>--}}
{{--                           </div>--}}
                       </div>
                   </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div style="background-image: url(./images/img-aV7Tun36iN6nOHwWQGhiuJx0.png)" class="bg-cover">
        <div class="pt-[80px] pb-[40px] bg-black bg-opacity-70 text-white">
            <div class="max-w-screen-2xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                    <div class="col-span-3 flex flex-col justify-end">
                        <p>Kết quả kinh doanh 2024</p>
                    </div>
                    <div class="col-span-9">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <p class="number pb-[26px] text-[yellow] text-[20px] font-light font-svn">
                                    <span class="count-up active text-[48px] font-svn-medium font-bold mr-2.5">{{ $post->revenue }}</span>tỉ đồng
                                </p>
                                <p class="subtitle border-t pt-5 pb-7">Doanh thu</p>
                            </div>
                            <div>
                                <p class="number pb-[26px] text-[yellow] text-[20px] font-light font-svn">
                                    <span class="count-up active text-[48px] font-svn-medium font-bold mr-2.5">{{ $post->profit }}</span>tỉ đồng
                                </p>
                                <p class="subtitle border-t pt-5 pb-7">Lợi nhuận sau thuế</p>
                            </div>
                            <div>
                                <p class="number pb-[26px] text-[yellow] text-[20px] font-light font-svn">
                                    <span class="count-up active text-[48px] font-svn-medium font-bold mr-2.5">{{ $post->assets }}</span>tỉ đồng
                                </p>
                                <p class="subtitle border-t pt-5 pb-7">Tổng tài sản</p>
                            </div>
                            <div>
                                <p class="number pb-[26px] text-[yellow] text-[20px] font-light font-svn">
                                    <span class="count-up active text-[48px] font-svn-medium font-bold mr-2.5">{{ $post->equity }}</span>tỉ đồng
                                </p>
                                <p class="subtitle border-t pt-5 pb-7">Vốn chủ sở hữu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lĩnh vực khác -->
    <div id="scrolldown" class="my-12">
        <div class="max-w-screen-2xl mx-auto px-4">
            <div class="flex flex-col gap-4">
                <h2 class="font-bold font-svn-medium text-[34px]" data-aos-duration="1000" data-aos="fade-up">Lĩnh vực khác</h2>
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($posts as $post)
                        <a href="#" class="block group" data-aos="fade-up" data-aos-duration="1000">
                            <div class="aspect-[9/10] relative overflow-hidden rounded-tr-xl rounded-bl-xl">
                                <img class="object-cover absolute top-0 right-0 h-full"
                                     src="{{ $post->imageLink }}"
                                     alt="{{ $post->title }}">
                                <div class="opacity-1 lg:opacity-0 group-hover:opacity-100 flex absolute w-full h-full top-0 left-0 transition-all justify-center items-center bg-gray-950/50">
                                </div>
                                <div class="absolute w-full h-full top-0 left-0 flex justify-center items-center">
                                    <div class="opacity-1 px-2 lg:opacity-0 group-hover:opacity-100 transition-all duration-500">
                                        <span class="text-xl lg:text-2xl text-white uppercase font-medium">{{ $post->title }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
{{--                    <a href="#" class="block group" data-aos="fade-up" data-aos-duration="1000">--}}
{{--                        <div class="aspect-[9/10] relative overflow-hidden rounded-tr-xl rounded-bl-xl">--}}
{{--                            <img class="object-cover absolute top-0 right-0 h-full"--}}
{{--                                 src="./images/img-nCAxjxvMofvjMUIaS0i7mVwC.png"--}}
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
{{--                                 src="./images/img-4pyso9WqUfaRJAkE2NeeiamP.png"--}}
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
{{--                                 src="./images/img-RBgje3nZXKCZQzordLIf3vvd.png"--}}
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
{{--                                 src="./images/img-hEdULJ16irWgwkrsGGqYdJol.png"--}}
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
</x-layouts.base>