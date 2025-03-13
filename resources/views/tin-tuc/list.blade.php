<x-layouts.base>
    <x-breadcrumbs :title="$page_title"/>
    <main>
        <div class="max-w-screen-2xl mx-auto px-4 mb-10">
            <x-news title="Tin tức sự kiện" :posts="$posts"/>
        </div>
    </main>
</x-layouts.base>