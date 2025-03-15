<x-layouts.base>
    <!--Banner-->
    <div>
        <img src="./images/sl001.jpg" alt="" class="w-full">
    </div>

    <x-intro-menu active="2"/>

    <!--About me-->
    <div class="my-10 flex flex-col md:flex-row gap-8 mx-4">
        <div data-aos-duration="1000" data-aos="fade-right" class="py-6">
            <img class="rounded-lg" src="https://songda11.com.vn/wp-content/uploads/anh-lich-su-hinh-thanh.jpg" alt="">
        </div>
        <div class="flex-1 ck-content" data-aos-duration="1000" data-aos="fade-left">
            {!! hauto($introduces?->historyContent) !!}
        </div>
    </div>
</x-layouts.base>