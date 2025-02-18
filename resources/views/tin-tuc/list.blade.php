<x-layouts.base>
    <x-breadcrumbs :title="$page_title"/>
    <main>
        <div class="max-w-screen-2xl mx-auto px-4 mb-10">
            <x-news title="Tin tức sự kiện" :posts="[1,2,3,4,5,6,7,8,9]"/>
        </div>
    </main>
</x-layouts.base>