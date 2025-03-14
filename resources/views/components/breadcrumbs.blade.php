@props(['link' => '', 'title' => ''])
<div class="max-w-screen-2xl mx-auto p-4 mb-5">
    <p>
        <a href="{{ autoRoute('home') }}" class="text-primary-400 hover:text-black">Trang chủ</a>
        <span class="separator"> | </span>
        @if($link)
            <a class="text-primary-400 hover:text-black" href="{{ $link }}">{{ $title }}</a>
        @else
            <span>{{ $title }}</span>
        @endif
    </p>
</div>