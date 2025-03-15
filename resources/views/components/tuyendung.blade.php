@props(['title' => '', 'posts' => []])
<div>
    <h1 class="post_cat_title uppercase">{{ $title }}</h1>
</div>
<div class="grid grid-cols-1 gap-6">
    @foreach($posts as $post)
        <div class="shadow hover:shadow-2xl rounded-lg duration-300 border border-gray-100 p-3">
            <h2 class="font-svn-medium font-bold text-[20px] mb-2.5">
                <a href="{{ $post->url }}" class="text-primary-500 hover:text-[#222]">
                    {{ $post->title }}
                </a>
            </h2>
            <div class="h-[75px] line-clamp-3 *:mb-4">
                {!! hauto($post->description) !!}
            </div>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <i class="fa fa-user text-red-500"></i>
                    <strong>Vị trí: </strong>
                    {{ $post->position }}
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-4">
                    <i class="fa fa-money-bill-alt text-red-500"></i>
                    <strong>Mức lương: </strong>
                    {{ $post->salary }}vnđ/tháng
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-4">
                    <i class="fa fa-calendar text-red-500"></i>
                    <strong>Thời hạn ứng tuyển: </strong>
                    {{ $post->deadline?->format('d/m/Y') }}
                </div>
                <div class="col-span-12 md:col-span-12 lg:col-span-2">
                    <a href="{{ $post->url }}"
                       class="bg-primary-500 hover:bg-primary-600 px-4 py-2 inline-block text-white rounded">
                        Xem chi tiết
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="py-2">
    {{ $posts->withQueryString()->links() }}
</div>