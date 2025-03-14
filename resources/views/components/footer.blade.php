@php
    $contact = serverAPI()->contacts();
     $categoryStakeHolders = serverAPI()->categoryStakeHolder();
@endphp

<!--Footer-->
<div class="bg-primary-500">
    <div class="max-w-screen-2xl mx-auto text-white px-4 py-6">
        <div class="mb-4">
            <img class="bg-white rounded" width="150" src="/images/logo5.png" alt="logo">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="col-span-1 md:col-span-2">
                <h3 class="text-lg font-svn-medium font-bold uppercase mb-1.5">{{ $contact->companyName }}</h3>
                <div class="text-sm *:mb-1.5">
                    <p>{{ $contact->address }}</p>
                    <p>Hotline: {{ join(', ', [$contact->phone, $contact->cellPhone]) }}</p>
                    <p>Email: {{ $contact->email }}</p>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-svn-medium font-bold uppercase">@lang('content.footer.about_us')</h3>
                <ul class="text-gray-300 text-sm">
                    <li class="py-1 hover:text-white">
                        <a href="{{ autoRoute('about_us') }}">@lang('menu.about_us')</a>
                    </li>
                    <li class="py-1 hover:text-white">
                        <a href="{{ autoRoute('projects') }}">@lang('menu.projects')</a>
                    </li>
                    <li class="py-1 hover:text-white">
                        <a href="{{ autoRoute('docs') }}">@lang('menu.shareholder')</a>
                    </li>
                    <li class="py-1 hover:text-white">
                        <a href="{{ autoRoute('news') }}">@lang('menu.event_news')</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-svn-medium font-bold uppercase">@lang('menu.shareholder')</h3>
                <ul class="text-gray-300 text-sm">
                    @foreach($categoryStakeHolders as $item)
                        <li class="py-1 hover:text-white">
                            <a  href="{{ $item->url }}">
                                {{ langCurrent() == 'vi' ? $item->categoryName : $item->categoryNameEN }}
                            </a>
                        </li>
                    @endforeach

{{--                    <li class="py-1 hover:text-white">--}}
{{--                        <a href="{{ autoRoute('docs') }}">Báo cáo tài chính</a>--}}
{{--                    </li>--}}
{{--                    <li class="py-1 hover:text-white">--}}
{{--                        <a href="{{ autoRoute('docs') }}">Điều lệ công ty</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </div>
</div>