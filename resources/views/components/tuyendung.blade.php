@props(['title' => '', 'posts' => []])
<div>
    <h1 class="post_cat_title uppercase">{{ $title }}</h1>
</div>
<div class="grid grid-cols-1 gap-6">
    @foreach($posts as $post)
        <div class="shadow hover:shadow-2xl rounded-lg duration-300 border border-gray-100 p-3">
            <h2 class="font-svn-medium font-bold text-[20px] mb-2.5">
                <a href="/tin-tuyen-dung-chi-tiet" class="text-primary-500 hover:text-[#222]">
                    Tin tuyển dụng IT – T5/2024
                </a>
            </h2>
            <div class="h-[75px] line-clamp-3 *:mb-4">
                <p>Nội dung mô tả công việc</p>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <i class="fa fa-user text-red-500"></i>
                    <strong>Vị trí: </strong>
                    Chuyên viên IT
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-4">
                    <i class="fa fa-money-bill-alt text-red-500"></i>
                    <strong>Mức lương: </strong>
                    10.000.000vnđ/tháng
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-4">
                    <i class="fa fa-calendar text-red-500"></i>
                    <strong>Thời hạn ứng tuyển: </strong>
                    30/05/2024
                </div>
                <div class="col-span-12 md:col-span-12 lg:col-span-2">
                    <a href="/tin-tuyen-dung-chi-tiet"
                       class="bg-primary-500 hover:bg-primary-600 px-4 py-2 inline-block text-white rounded">
                        Xem chi tiết
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@if(count($posts) > 6)
    <x-paginate/>
@endif
