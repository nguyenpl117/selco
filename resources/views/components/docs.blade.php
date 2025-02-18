@props(['posts' => []])
<div>
    <table class="w-full">
        <thead>
        <tr class="bg-primary-600 text-white">
            <th class="text-left p-2 font-normal text-xl">Tiêu đề</th>
            <th class="p-2 font-normal text-xl">Ngày</th>
            <th class="p-2 font-normal text-xl">Xem</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td class="p-2 border">
                    <h2 class="mb-2">Báo cáo kết quả GDCP có bảo đảm của người nội bộ và người liên quan của người nội bộ – Ông Nguyễn Văn Sơn</h2>
                </td>
                <td class="text-[#666] text-sm text-center p-2 border">
                    <i class="fa-regular fa-calendar-days"></i>
                    12/02/2025
                </td>
                <td class="text-center p-2 border">
                    <a href="/quan-he-co-dong-chi-tiet" class="text-primary-500 px-2" title="">
                        <i class="fa fa-eye w-4"></i>
                    </a>
                    <a href="#" class="text-primary-500 px-2" target="_blank">
                        <i class="fa fa-download w-4"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>