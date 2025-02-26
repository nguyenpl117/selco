<x-layouts.base>
    <x-breadcrumbs :title="$page_title"/>
    <main>
        <div class="max-w-screen-2xl mx-auto px-4 mb-10">
            <div>
                <h1 class="post_cat_title uppercase">Các Dự án</h1>
            </div>
            <x-projects title="Các Dự án" :posts="$posts"/>
        </div>
    </main>
</x-layouts.base>