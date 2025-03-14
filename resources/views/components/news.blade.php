@props(['title' => '', 'posts' => []])
<div>
    <h1 class="post_cat_title uppercase">{{ $title }}</h1>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @foreach($posts as $post)
        <div class="shadow overflow-hidden hover:shadow-xl duration-300">
            <div class="relative overflow-hidden group image-cover" style="padding-top: 56.25%">
                <a title="{{ $post->title }}"
                   href="{{ $post->url }}">
                    <img class="w-full lozad m-0 lg:group-hover:scale-110 transition-all duration-500 safelyLoadImage"
                         alt="{{ $post->title }}"
                         src="{{ $post->imageLink }}"
                         data-loaded="true">
                </a>
            </div>
            <div class="p-4">
                <h3 class="text-base lg:text-lg line-clamp-2 font-semibold !mt-0">
                    <a href="{{ $post->url }}" class="hover:text-primary-500 line-clamp-2">
                        {{ $post->title }}
                    </a>
                </h3>
                <div class="text-sm line-clamp-3 md:line-clamp-3 my-2 py-0 text-black/60">
                    {{ $post->desc }}
                </div>
            </div>
        </div>
    @endforeach
</div>
@if(method_exists($posts, 'withQueryString'))
<div class="py-2">
    {{ $posts->withQueryString()->links() }}
</div>
@endif