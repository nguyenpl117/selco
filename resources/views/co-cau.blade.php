<x-layouts.base>
    <!--Banner-->
    <div>
        <img src="./images/sl001.jpg" alt="" class="w-full">
    </div>

    <x-intro-menu active="3"/>

    <div class="max-w-5xl mx-auto ck-content">
        <!--    <img src="https://songda11.com.vn/wp-content/uploads/Co-cau-to-chuc-Tai-co-cau-25.10.24.jpg" alt="">-->
{{--        <img src="./images/sodo.36.28.png" alt="">--}}
        {!! hauto($introduces->organizationalContent) !!}
    </div>
</x-layouts.base>