<x-layouts.base>
    <x-breadcrumbs title="Các dự án" link="{{ autoRoute('projects') }}"/>
    <main>
        <div class="max-w-screen-2xl mx-auto px-4 mb-10">
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-12 lg:col-span-7">
                    <div class="product-slider">
                        @foreach($post->images as $image)
                            <div class="carousel-cell w-full">
                                <div class="relative group rounded-xl image-cover" style="padding-top: 56.25%">
                                    <a title="{{ $post->title }}">
                                        <img class="w-full"
                                             alt="{{ $post->title }}"
                                             src="{{ $image }}">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="product-thumbnail my-4">
                        @foreach($post->images as $image)
                            <div class="carousel-cell h-[80px] w-[100px] mr-3">
                                <div class="relative group rounded-xl image-cover" style="padding-top: 75%">
                                    <img class="w-full"
                                         alt="{{ $post->title }}"
                                         src="{{ $image }}">
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5">
                    <h1 class="font-svn-medium font-bold text-[30px] border-b border-dotted border-gray-900 mb-4">
                    {{ $post->title }}
                    </h1>
{{--                    {!! str_replace('fa-money', 'fa-money-bill', $post->content) !!}--}}
                    <ul class="*:py-2.5 *:border-b">
                        <li>
                            <i class="fa fa-users w-6 text-primary-700"></i>
                            <strong>Chủ đầu tư</strong>: {{ $post->investor }}
                        </li>
                        <li><i class="fa fa-map-marker w-6 text-primary-700"></i><strong>Địa điểm</strong>: {{ $post->location }}</li>
                        @if($post->value)
                        <li><i class="fa fa-money-bill w-6 text-primary-700"></i><strong>Tổng mức đầu tư</strong>: {{ $post->value }} tỷ đồng</li>
                        @endif
                        @if($post->startTime && $post->endTime)
                            <li><i class="fa fa-calendar w-6 text-primary-700"></i><strong>Thời gian thực hiện</strong>: Từ {{ $post->startTime?->format('m-Y') }} - {{ $post->endTime?->format('m-Y') }}</li>
                        @endif
                        @if($post->startTime && !$post->endTime )
                            <li><i class="fa fa-calendar w-6 text-primary-700"></i><strong>Thời gian thực hiện</strong>: Từ {{ $post->startTime?->format('m-Y') }} }}</li>
                        @endif
                        @if($post->numberOfUnits)
                            <li><i class="fa fa-industry w-6 text-primary-700"></i><strong>Số tổ máy</strong>: {{ $post->numberOfUnits }} tổ</li>
                        @endif
                        @if($post->installedCapacity)
                            <li><i class="fa fa-power-off w-6 text-primary-700"></i><strong>Công suất lắp đặt</strong>: {{ $post->installedCapacity }}MW</li>
                        @endif
                    </ul>
                </div>
                <div class="col-span-12">
                    <p class="font-svn-medium font-bold text-[30px] border-b border-dotted border-gray-900 mb-4">
                        Thông tin dự án
                    </p>
                    {!! hauto($post->content) !!}
{{--                    {!! str_replace('<ul>', '<ul class="ml-5 *:my-2.5 list-disc">', $post->content) !!}--}}
                    <ul class="ml-5 *:my-2.5 list-disc">
{{--                        <li>--}}
{{--                            <i class="fa fa-users w-6 text-primary-700"></i>--}}
{{--                            <strong>Chủ đầu tư</strong>: {{ $post->investor }}--}}
{{--                        </li>--}}
{{--                        <li><i class="fa fa-map-marker w-6 text-primary-700"></i><strong>Địa điểm</strong>: {{ $post->location }}</li>--}}
{{--                        <li><i class="fa fa-money-bill w-6 text-primary-700"></i><strong>Tổng mức đầu tư</strong>: {{ $post->value }} tỷ đồng</li>--}}
{{--                        <li><i class="fa fa-calendar w-6 text-primary-700"></i><strong>Thời gian thực hiện</strong>: Từ {{ $post->startTime?->format('m-Y') }} - {{ $post->endTime?->format('m-Y') }}</li>--}}


                        @if($post->value)
                            <li>Giá trị : {{ $post->value }} tỷ đồng</li>
                        @endif
                        <li>Chú đầu tư: {{ $post->investor }}</li>
                        <li>Thời gian khới công: {{ $post->startTime?->format('m-Y') }}</li>
                        <li>Thời gian hoàn thành: {{ $post->endTime?->format('m-Y') }}</li>
                        @if($post->installedCapacity)
                            <li>Công suất lắp đặt: {{ $post->installedCapacity }}MW</li>
                        @endif
                    </ul>
                    {!! hauto($post->description) !!}
                </div>
            </div>
        </div>
    </main>
    <div class="max-w-screen-2xl mx-auto px-4 mb-10">
        <div>
            <h1 class="post_cat_title uppercase border-b border-dotted border-gray-900">Dự án khác</h1>
        </div>
        <x-projects title="" :posts="$posts" :hidden-page="true"/>
    </div>
</x-layouts.base>