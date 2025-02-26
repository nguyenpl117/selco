<x-layouts.base>
    <x-breadcrumbs title="Các dự án" link="/du-an"/>
    <main>
        <div class="max-w-screen-2xl mx-auto px-4 mb-10">
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-12 lg:col-span-7">
                    <div class="product-slider">
                        @foreach($post->get('images') as $image)
                            <div class="carousel-cell w-full">
                                <div class="relative group rounded-xl image-cover" style="padding-top: 56.25%">
                                    <a title="{{ $post->get('title') }}">
                                        <img class="w-full"
                                             alt="{{ $post->get('title') }}"
                                             src="{{ $image }}">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="product-thumbnail my-4">
                        @foreach($post->get('images') as $image)
                            <div class="carousel-cell h-[80px] w-[100px] mr-3">
                                <div class="relative group rounded-xl image-cover" style="padding-top: 75%">
                                    <img class="w-full"
                                         alt="{{ $post->get('title') }}"
                                         src="{{ $image }}">
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5">
                    <h1 class="font-svn-medium font-bold text-[30px] border-b border-dotted border-gray-900 mb-4">
                        Dự án: ĐZ 500kV Nam Định I - Phố Nối - Gói thầu (42; 49; 58; 61)</h1>
                    {!! str_replace('fa-money', 'fa-money-bill', $post->get('desc')) !!}
{{--                    <ul class="*:py-2.5 *:border-b">--}}
{{--                        <li>--}}
{{--                            <i class="fa fa-users w-6 text-primary-700"></i>--}}
{{--                            <strong>Chủ đầu tư</strong>: Ban quản lý các công trình điện Miền Bắc--}}
{{--                        </li>--}}
{{--                        <li><i class="fa fa-map-marker w-6 text-primary-700"></i><strong>Địa điểm</strong>: Nam Định 1 - Phố Nối</li>--}}
{{--                        <li><i class="fa fa-money-bill w-6 text-primary-700"></i><strong>Tổng mức đầu tư</strong>: 380 tỷ đồng</li>--}}
{{--                        <li><i class="fa fa-calendar w-6 text-primary-700"></i><strong>Thời gian thực hiện</strong>: Từ 01/2024 - 09/2024</li>--}}
{{--                    </ul>--}}
                </div>
                <div class="col-span-12">
                    <p class="font-svn-medium font-bold text-[30px] border-b border-dotted border-gray-900 mb-4">
                        Thông tin dự án
                    </p>
                    {!! str_replace('<ul>', '<ul class="ml-5 *:my-2.5 list-disc">', $post->get('body')) !!}
{{--                    <ul class="ml-5 *:my-2.5 list-disc">--}}
{{--                        <li>Giá trị : 380 tỷ đồng</li>--}}
{{--                        <li>Chú đầu tư: Ban quản lý các công trình điện Miền Bắc</li>--}}
{{--                        <li>Thời gian khới công: 01/2024</li>--}}
{{--                        <li>Thời gian hoàn thành: T9/2024</li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
    </main>
    <div class="max-w-screen-2xl mx-auto px-4 mb-10">
        <div>
            <h1 class="post_cat_title uppercase border-b border-dotted border-gray-900">Dự án khác</h1>
        </div>
        <x-projects title="" :posts="$posts"/>
    </div>
</x-layouts.base>