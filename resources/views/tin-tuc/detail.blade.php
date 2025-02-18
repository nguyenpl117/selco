<x-layouts.base>
    <x-breadcrumbs title="Tin tức" link="/tin-tuc"/>
    <main>
        <div class="max-w-screen-2xl mx-auto px-4 mb-10">
            <div class="relative">
                <div class="image-cover" style="padding-top: 45%">
                    <img class="w-full lozad m-0 lg:group-hover:scale-110 transition-all duration-500 safelyLoadImage"
                         alt="Ra nước ngoài, lục từng container để đưa thiết bị về làm đường dây 500kV"
                         width="1920"
                         height="1080"
                         src="https://songda11.com.vn/wp-content/uploads/dji-0921-2910.jpg">
                </div>
                <div class="h-[120px]"></div>
                <div class="bg-gray-300 h-[200px] w-2/3 absolute z-10 bottom-0">
                </div>
                <div class="bg-white w-10/12 lg:w-5/12 max-w-full absolute z-10 md:left-[100px] rounded p-7 bottom-[40px] right-3">
                    <a href="#" class="text-primary-500 hover:text-black">Tin tức sự kiện</a>,
                    <a href="#" class="text-primary-500 hover:text-black">Tin tức</a>
                    <h1 class="text-3xl">Treo mình giữa không gian thi công cột điện cao 145m kéo đường dây 500kV mạch 3
                        vượt sông Hồng</h1>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-8 mt-8">
                <div class="col-span-12 lg:col-span-9">
                    <div class="shadow p-5 *:my-6">
                        <p>
                            Công trình 500kV mạch 3 có một đoạn phải vượt sông Hồng. Tại đây, cột hai bên bờ sông cao
                            tới 145m để đảm bảo cho dây không võng xuống mặt sông, cản trở tàu thuyền… Những ngày này,
                            tốc độ thi công đang được đẩy mạnh để đưa công trình kịp về đích đúng hẹn…
                        </p>
                        <p>&nbsp;</p>
                        <img src="https://songda11.com.vn/wp-content/uploads/dji-0921-2910.jpg" alt="123">
                        <p>
                            Sáng 23-6, Thủ tướng Phạm Minh Chính tiếp tục đi kiểm tra hiện trường, đôn đốc, động viên
                            đội ngũ cán bộ, công nhân viên, người lao động và chủ trì cuộc họp với các cơ quan liên quan
                            về việc thực hiện dự án đường dây tải điện 500kV mạch 3 Quảng Trạch – Phố Nối.

                        </p>
                        <p>Đến kiểm tra tình hình thi công vị trí cột 22 trên địa bàn xã Quỳnh Trang, thị xã Hoàng Mai,
                            Thủ tướng đánh giá cao kết quả triển khai của các lực lượng, khi đã vận chuyển gần 200 tấn
                            thép trên địa hình đồi núi gập ghềnh, khó khăn để dựng được cột điện cao 88m.
                        </p>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-3">
                    <x-blog_categories/>
                </div>
            </div>
        </div>
    </main>
    <div class="max-w-screen-2xl mx-auto px-4 mb-10">
        <x-news title="Bài viết liên quan" :posts="[1,2,3]"/>
    </div>
</x-layouts.base>