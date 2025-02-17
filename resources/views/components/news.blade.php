@props(['title' => '', 'posts' => []])
<div>
    <h1 class="post_cat_title uppercase">{{ $title }}</h1>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8" x-data>
    @foreach($posts as $post)
        <div class="shadow overflow-hidden hover:shadow-xl duration-300">
            <div class="relative overflow-hidden group image-cover" style="padding-top: 56.25%">
                <a title="Tiếng Hoa Cho Trẻ Em3: Bắt Đầu Từ Khi Nào Là Tốt Nhất?"
                   href="/tin-tuc-chi-tiet">
                    <img class="w-full lozad m-0 lg:group-hover:scale-110 transition-all duration-500 safelyLoadImage"
                         alt="Tiếng Hoa Cho Trẻ Em3: Bắt Đầu Từ Khi Nào Là Tốt Nhất?"
                         src="https://songda11.com.vn/wp-content/uploads/img5805-1719119298915929670737-171912599464240319999.webp"
                         data-loaded="true">
                </a>
            </div>
            <div class="p-4">
                <h3 class="text-base lg:text-lg line-clamp-2 font-semibold !mt-0">
                    <a href="/tin-tuc-chi-tiet" class="hover:text-primary-500 line-clamp-2">
                        Thủ tướng: Ra nước ngoài, lục từng container để đưa thiết bị về làm đường dây 500kV
                    </a>
                </h3>
                <div class="text-sm line-clamp-3 md:line-clamp-3 my-2 py-0 text-black/60">
                    Thủ tướng yêu cầu mở đợt thi đua cao điểm đặc biệt, “nước rút”, “thần tốc” để phấn đấu cơ bản dựng cột kéo dây xong đường dây 500kV trong tháng 6 và hoàn thành công trình vào tháng 7
                </div>
            </div>
        </div>
    @endforeach
</div>
@if(count($posts) > 6)
    <x-paginate/>
@endif
