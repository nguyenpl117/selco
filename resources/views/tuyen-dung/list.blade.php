<x-layouts.base>
    <x-breadcrumbs :title="$page_title"/>
    <main>
        <div class="max-w-screen-2xl mx-auto px-4 mb-10">
            <x-tuyendung title="Tin Tuyển dụng" :posts="$posts"/>
        </div>
    </main>
</x-layouts.base>