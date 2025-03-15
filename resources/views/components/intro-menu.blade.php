@props(['active' => 1])
@php
    function btn_class($active = false){
        if (!$active) return 'rounded bg-gray-100 hover:bg-primary-500 hover:text-white uppercase px-6 py-2 inline-block font-medium';
        return 'rounded text-white bg-primary-500 uppercase px-6 py-2 inline-block font-medium';
    }
@endphp
        <!--Menu-->
<div data-aos-duration="1000" data-aos="fade-up">
    <div class="pb-1 px-2 my-6 gap-2 overflow-auto whitespace-nowrap text-center">
        <a href="{{ autoRoute('about_us') }}"
           class="{{ btn_class($active == 1) }}">
            @lang('menu.introduction')
        </a>
        <a href="{{ autoRoute('history') }}"
           class="{{ btn_class($active == 2) }}">
            @lang('menu.history')
        </a>
        <a href="{{ autoRoute('organizational') }}"
           class="{{ btn_class($active == 3) }}">
            @lang('menu.organizational')
        </a>
        <a href="{{ autoRoute('achievements') }}"
           class="{{ btn_class($active == 4) }}">
            @lang('menu.achievements')
        </a>
    </div>

    <h3 class="text-center uppercase font-svn-medium font-bold text-[40px] leading-[52px] pb-10">
        @if($active == 1)
            @lang('menu.introduction')
        @endif
        @if($active == 2)
            @lang('menu.history')
        @endif
        @if($active == 3)
            @lang('menu.organizational')
        @endif
        @if($active == 4)
            @lang('menu.achievements')
        @endif
    </h3>
</div>