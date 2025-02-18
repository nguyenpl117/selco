@props(['active' => 1])
@php
    function btn_class($active = false){
        if (!$active) return 'rounded bg-gray-100 hover:bg-primary-500 hover:text-white uppercase px-6 py-2 inline-block font-medium';
        return 'rounded text-white bg-primary-500 uppercase px-6 py-2 inline-block font-medium';
    }
@endphp
<!--Menu-->
<div data-aos-duration="1000" data-aos="fade-up">
    <div class="pb-1 px-2 my-6 gap-2 overflow-auto whitespace-nowrap">
        <a href="/gioi-thieu"
           class="{{ btn_class($active == 1) }}">
            Giới thiệu
        </a>
        <a href="/lich-su"
           class="{{ btn_class($active == 2) }}">
            Lịch sử hình thành
        </a>
        <a href="/co-cau"
           class="{{ btn_class($active == 3) }}">
            Cơ cấu tổ chức
        </a>
        <a href="/thanh-tich"
           class="{{ btn_class($active == 4) }}">
            Thành tích đạt được
        </a>
    </div>
    <h3 class="text-center uppercase font-bold text-3xl pb-10">LỊCH SỬ HÌNH THÀNH</h3>
</div>