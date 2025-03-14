<x-layouts.base>
    <!--Banner-->
    <style>
        .banner {
            img {
                width: 100%;
            }
        }
    </style>
    <div class="banner">
        {!! hauto($introduces->introduceContent) !!}
{{--        <img src="{{ asset('images/sl001.jpg') }}" alt="" class="w-full">--}}
    </div>

    <x-intro-menu/>

    <!--About me-->
    <div class="my-10 flex flex-col lg:flex-row gap-4 mx-4">
        <div class="flex-1" data-aos-duration="1000" data-aos="fade-right">
            <!--        <img src="https://songda11.com.vn/wp-content/uploads/gioi-thieu-1.jpg" alt="">-->
            <img class="rounded-lg" src="{{ $introduces->introduceImageUrl }}" alt="intro">
        </div>
        <div class="flex-1 lg:max-h-[480px] overflow-auto ck-content" data-aos-duration="1000" data-aos="fade-left">
            {!! hauto($introduces->introduceInfo) !!}
{{--            <h3 class="text-2xl uppercase font-medium">CÔNG TY TNHH MTV SÔNG ĐÀ 11 THĂNG LONG</h3>--}}
{{--            <p class="my-4">Địa chỉ: BT03 - VT24 - KĐT mới Xa La - Phường Phúc La - Quận Hà Đông - TP. Hà Nội</p>--}}

{{--            <p class="my-4">Điện thoại: (024) 8588 7666</p>--}}

{{--            <p class="my-4">Fax: (024) 33554511</p>--}}

{{--            <p class="my-4">Email: songda11thanglong@gmail.com</p>--}}

{{--            <p class="my-4">Website: https://www.selco.com.vn</p>--}}
{{--            <h3 class="text-2xl uppercase font-medium">Vị thế công ty</h3>--}}
{{--            <p class="my-4">--}}
{{--                Công ty TNHH MTV Sông Đà 11 Thăng Long (SELCO SONG DA) là đơn vị thành viên của Tổng công ty Sông Đà, đã--}}
{{--                tham gia thi công xây lăp nhiều dự án quan trọng của đất nước về thủy điện, hệ thống đường dây truyền tải--}}
{{--                điện cao thế, hệ thống cấp thoát nước trong các khu đô thị và công nghiệp…--}}
{{--            </p>--}}
        </div>
    </div>

    <div class="my-10 flex flex-col lg:flex-row gap-6 mx-4">
        <div data-aos-duration="1000" data-aos="fade-left" class="flex-1 ck-content">
            {!! hauto($introduces->strategy) !!}
        </div>
        <div data-aos-duration="1000" data-aos="fade-right" class="flex-1">
            <img class="aspect-[4/3] rounded-lg" src="{!! $introduces->strategyImageUrl !!}" alt="IMAGE">
        </div>
    </div>

    <div class="my-10 flex flex-col lg:flex-row gap-6 mx-4">
        <div data-aos-duration="1000" data-aos="fade-right" class="flex-1">
            <img class="w-full" src="{{ $introduces->projectImageUrl }}" alt="image">
        </div>
        <div data-aos-duration="1000" data-aos="fade-left" class="flex-1 lg:max-h-[480px] overflow-auto p-4 ck-content">
            {!! hauto($introduces->project) !!}
{{--            <h3 class="text-2xl uppercase font-medium">CÁC DỰ ÁN LỚN</h3>--}}
{{--            <p class="my-4">--}}
{{--                Với bề dày lịch sử và truyền thống lao động cần cù, sáng tạo làm nên sự phát triển mạnh mẽ qua nhiều năm Công ty--}}
{{--                Sông Đà 11 ký Hợp đồng và thực hiện rất nhiều gói thầu lớn, dưới đây là những Dự án trọng điểm trong những năm--}}
{{--                gần đây:--}}
{{--            </p>--}}
{{--            <p class="my-4"><strong>Dự án: ĐZ 220/110kV Cầu Bông - Bình Tân</strong></p>--}}
{{--            <ul class="list-disc *:my-4 mx-6">--}}
{{--                <li>Khối lượng: 8.7 km</li>--}}
{{--                <li>Giá trị: 176 tỷ đồng</li>--}}
{{--                <li>Chủ đầu tư: Ban QLDA Lưới điện TPHCM</li>--}}
{{--                <li>Thời gian khởi công: 05/2024</li>--}}
{{--                <li>Thời gian hoàn thành: QII/2025</li>--}}
{{--            </ul>--}}
{{--            <p class="my-4"><strong>Dự án: ĐZ 220kV Bát Xát - Bảo Thắng/TBA 500kV Lào Cai</strong></p>--}}
{{--            <ul class="list-disc *:my-4 mx-6">--}}
{{--                <li>Khối lượng: 15 km</li>--}}
{{--                <li>Giá trị: 146 tỷ đồng</li>--}}
{{--                <li>Chủ đầu tư: Ban quản lý các công trình điện Miền Bắc</li>--}}
{{--                <li>Thời gian khởi công: 11/2022</li>--}}
{{--                <li>Thời gian hoàn thành: QIV/2024</li>--}}

{{--            </ul>--}}
{{--            <p class="my-4"><strong>Dự án: TBA 220 Khu kinh tế Nghi Sơn và ĐZ đấu nối</strong></p>--}}
{{--            <ul class="list-disc *:my-4 mx-6">--}}
{{--                <li>Khối lượng: Toàn bộ</li>--}}
{{--                <li>Giá trị: 115 tỷ đồng</li>--}}
{{--                <li>Chủ đầu tư: Ban quản lý các công trình điện Miền Trung</li>--}}
{{--                <li>Thời gian khởi công: 7/2022</li>--}}
{{--                <li>Thời gian hoàn thành: Q.IV/2024</li>--}}
{{--            </ul>--}}

{{--            <p class="my-4"><strong>Dự án: ĐZ 230kV NMTĐ Xekaman 1 đến biên giới Lào-VN</strong></p>--}}
{{--            <ul class="list-disc *:my-4 mx-6">--}}
{{--                <li>Khối lượng: 76 km</li>--}}
{{--                <li>Giá trị: 810 tỷ đồng</li>--}}
{{--                <li>Chủ đầu tư: CTTNHH Điện Xekaman 1</li>--}}
{{--                <li>Thời gian khởi công: 05/2015</li>--}}
{{--                <li>Thời gian hoàn thành: 08/2016</li>--}}
{{--            </ul>--}}
{{--            <p class="my-4"><strong>Dự án: ĐZ 110kV Bắc Giang - Lạng Sơn</strong></p>--}}
{{--            <ul class="list-disc *:my-4 mx-6">--}}
{{--                <li>Khối lượng: 30 km</li>--}}
{{--                <li>Giá trị: 110 tỷ đồng</li>--}}
{{--                <li>Chủ đầu tư: Ban QLDA PT Điện lực</li>--}}
{{--                <li>Thời gian khởi công: 11/2022</li>--}}
{{--                <li>Thời gian hoàn thành: 2024</li>--}}
{{--            </ul>--}}
{{--            <p class="my-4"><strong>Dự án: ĐZ 110kV Bắc Quang</strong></p>--}}
{{--            <ul class="list-disc *:my-4 mx-6">--}}
{{--                <li>Khối lượng: (chưa có thông tin cụ thể)</li>--}}
{{--                <li>Giá trị: 99 tỷ đồng</li>--}}
{{--                <li>Chủ đầu tư: Ban QLDA Lưới điện</li>--}}
{{--                <li>Thời gian khởi công: 10/2021</li>--}}
{{--                <li>Thời gian hoàn thành: Q.IV / 2022</li>--}}
{{--            </ul>--}}
        </div>
    </div>

{{--    <div data-aos-duration="1000" data-aos="fade-up" class="my-10 flex flex-col gap-6 mx-4 items-center">--}}
{{--        <h3 class="uppercase text-2xl font-medium">CÁC ĐƠN VỊ TRỰC THUỘC VÀ CÁC CÔNG TY CON</h3>--}}
{{--        <p class="text-center">--}}
{{--            Thực hiện đề án tái cấu trúc doanh nghiệp đã được Tổng Công ty Sông Đà và Bộ Xây dựng phê duyêt, Công ty TNHH MTV Sông Đà Thăng Long--}}
{{--            đã tổ chức và sắp xếp lại cơ cấu của các đơn vị thành viên. Quy mô của Công ty sau tái cấu trúc hiện--}}
{{--            bao gồm 07 đơn vị trực thuộc và 05 Công ty có vốn góp--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <div class="h-10"></div>--}}

{{--    <x-branch title="Các đơn vị trực thuộc - Công ty góp vốn" :items="[1,2,3,4,5]"/>--}}
{{--    <x-branch title="Các công ty góp vốn" :items="[1,2,3,4,5]"/>--}}
</x-layouts.base>