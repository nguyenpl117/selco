<x-layouts.base>
    <x-breadcrumbs title="Các dự án" link="{{ autoRoute('projects') }}"/>
    <main>
        <div class="max-w-screen-2xl mx-auto px-4 mb-10">
            <div class="relative">
                <div class="image-cover" style="padding-top: 45%">
                    <img class="w-full lozad m-0 lg:group-hover:scale-110 transition-all duration-500 safelyLoadImage"
                         alt="Ra nước ngoài, lục từng container để đưa thiết bị về làm đường dây 500kV"
                         width="1920"
                         height="1080"
                         src="https://songda11.com.vn/wp-content/uploads/dji-0921-2910.jpg">
                </div>
                <div class="h-[120px]"></div>
                <div class="bg-gray-300 h-[200px] w-2/3 absolute z-10 bottom-0">
                </div>
                <div class="bg-white w-10/12 lg:w-5/12 max-w-full absolute z-10 md:left-[100px] rounded p-7 bottom-[40px] right-3">
                    <a href="{{ autoRoute('news') }}" class="text-primary-500 hover:text-black">Tin tức sự kiện</a>,
                    <a href="{{ autoRoute('news') }}" class="text-primary-500 hover:text-black">Tin tức</a>
                    <h1 class="text-3xl">{{ $post->title }}</h1>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-8 mt-8">
                <div class="col-span-12 lg:col-span-9">
                    <div class="shadow p-5 *:my-6">
                        {!! hauto($post->description) !!}
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-3">
                    <x-blog_categories/>
                </div>
            </div>
        </div>
    </main>
    <div class="max-w-screen-2xl mx-auto px-4 mb-10">
        <div>
            <h1 class="post_cat_title uppercase border-b border-dotted border-gray-900">Dự án khác</h1>
        </div>
        <x-projects title="" :posts="$posts" :hidden-page="true"/>
    </div>
</x-layouts.base>