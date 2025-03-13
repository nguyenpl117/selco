@props(['posts' => []])
<div>
    <table class="w-full">
        <thead>
        <tr class="bg-primary-600 text-white">
            <th class="text-left p-2 font-normal text-xl">Tiêu đề</th>
            <th class="p-2 font-normal text-xl">Ngày</th>
            <th class="p-2 font-normal text-xl">Xem</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td class="p-2 border">
                    <h2 class="mb-2">{{ $post->title }}</h2>
                </td>
                <td class="text-[#666] text-sm text-center p-2 border">
                    <i class="fa-regular fa-calendar-days"></i>
                    {{ $post->date?->format('d/m/Y') }}
                </td>
                <td class="text-center p-2 border">
                    <a href="{{ $post->url }}" class="text-primary-500 px-2" title="">
                        <i class="fa fa-eye w-4"></i>
                    </a>
                    @if($post->canDownload)
                        <a href="{{ $post->file }}"
                           download=""
                           class="text-primary-500 px-2" target="_blank">
                            <i class="fa fa-download w-4"></i>
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="py-2">
    {{ $posts->withQueryString()->links() }}
</div>