<x-layouts.base>
    <x-breadcrumbs :title="$page_title"/>
    <main>
        <div class="max-w-screen-2xl mx-auto px-4 mb-10">
            <div>
                <h1 class="post_cat_title uppercase">Quan hệ cổ đông</h1>
            </div>
            <x-docs :posts="$posts"/>
        </div>
    </main>
</x-layouts.base>