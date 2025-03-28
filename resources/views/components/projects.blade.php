@props(['title' => '', 'posts' => [], 'hiddenPage' => false])
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @foreach($posts as $slug => $post)
        <a href="{{ $post->url }}" class="block group" data-aos="fade-up" data-aos-duration="1000">
            <div class="aspect-[4/3] relative overflow-hidden rounded-tr-xl rounded-bl-xl">
                <img class="object-cover absolute top-0 right-0 h-full w-full"
                     src="{{ $post->image }}"
                     alt="{{ $post->title }}">
                <div class="opacity-1 lg:opacity-0 group-hover:opacity-100 duration-300 flex absolute w-full h-full top-0 left-0 transition-all justify-center items-center bg-gray-950/50">
                </div>
                <div class="absolute w-full h-full top-0 left-0 flex justify-center items-center">
                    <div class="opacity-1 px-2 lg:opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <span class="text-xl lg:text-xl text-white uppercase font-medium">
                                 {{ $post->title }}
                            </span>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>
@if(!$hiddenPage && method_exists($posts, 'withQueryString'))
    <div class="py-2">
        {{ $posts->withQueryString()->links() }}
    </div>
@endif