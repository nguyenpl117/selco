<x-layouts.base>
    <!--Banner-->
    <div>
        <img src="./images/banner-lien-he.jpg" alt="" class="w-full">
    </div>

    <div class="my-10 grid grid-cols-2 gap-8 mx-auto max-w-screen-2xl px-4">
        <div data-aos-duration="1000" data-aos="fade-right" class="py-6">
            <h3 class="text-3xl font-bold text-primary-500 mb-6">{{ $contact->companyName }}</h3>
            <p class="my-4">
                <i class="w-5 text-primary-500 fa fa-map-marker"></i> {{ $contact->address }}</p>
            <p class="my-4">
                <i class="w-5 text-primary-500 fa fa-phone"></i> {{ $contact->phone }}</p>
            <p class="my-4">
                <i class="w-5 text-primary-500 fa fa-fax"></i> {{ $contact->cellPhone }}</p>
            <p class="my-4">
                <i class="w-5 text-primary-500 fa fa-envelope"></i> {{ $contact->email }}</p>
            <p class="my-4">
                <i class="w-5 text-primary-500 fa fa-globe"></i> {{ $contact->website }}</p>
        </div>
        <div class="flex-1" data-aos-duration="1000" data-aos="fade-left">
            <form action="" method="post" class="grid gap-4">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <input type="text"
                               class="w-full border border-primary-500 h-10 rounded px-3 outline-none"
                               placeholder="Họ tên (*)">
                    </div>
                    <div>
                        <input type="text"
                               class="w-full border border-primary-500 h-10 rounded px-3 outline-none"
                               placeholder="Số điện thoại (*)">
                    </div>
                    <div>
                        <input type="text"
                               class="w-full border border-primary-500 h-10 rounded px-3 outline-none"
                               placeholder="Email (*)">
                    </div>
                    <div>
                        <input type="text"
                               class="w-full border border-primary-500 h-10 rounded px-3 outline-none"
                               placeholder="Tiêu đề">
                    </div>
                </div>
                <div>
                <textarea name="" id="" rows="3"
                          class="w-full py-3 border border-primary-500 h-32 rounded px-3 outline-none"
                          placeholder="Nội dung liên hệ"></textarea>
                </div>
                <div>
                    <button class="uppercase bg-primary-500 hover:bg-primary-600 text-white h-10 rounded px-4 font-medium">Gửi đi</button>
                </div>
            </form>
        </div>
    </div>
    <div class="mx-auto max-w-screen-2xl px-4 py-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1830.8632779574712!2d105.78884646005105!3d20.963316701441872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zQlQwMyAtIFZUMjQgLSBLxJBUIG3hu5tpIFhhIExhIC0gUGjGsOG7nW5nIFBow7pjIExhIC0gUXXhuq1uIEjDoCDEkMO0bmcgLSBUUC4gSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1736513670714!5m2!1svi!2s"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</x-layouts.base>