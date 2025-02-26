@props(['title', 'items' => []])
<div class="my-10 flex flex-col gap-6 mx-4 branch-all">
    <div data-aos-duration="1000" data-aos="fade-up" class="relative h-12 flex flex-col justify-center">
        <hr class="border-primary-500">
        <div class="absolute left-0 right-0 flex justify-center">
            <h3 class="uppercase font-bold text-xl lg:text-2xl px-8 rounded-full h-12 bg-primary-500 flex flex-col justify-center text-white">
                {{ $title }}
            </h3>
        </div>
    </div>
    <div class="">
        <div class="branch-carousel">
            @foreach($items as $item)
               <div class="carousel-cell md:max-w-[50%] xl:max-w-[33.33%] p-2">
                   <div class=" border border-primary-700 p-6 rounded-lg shadow">
                       <div>
                           <img src="./images/logo5.png" alt="" class="mx-auto">
                       </div>
                       <div class="">
                           <h3 class="text-center font-medium text-2xl">Chi nhánh Công ty TNHH MTV Sông Đà Thăng Long</h3>
                           <p class="my-4">BT03 - VT24 - KĐT mới Xa La - Phường Phúc La - Quận Hà Đông - TP. Hà Nội</p>

                           <p class="my-4">(024) 8588 7666</p>

                           <p class="my-4">....</p>

                           <p class="my-4">songda11thanglong@gmail.com</p>
                       </div>
                   </div>
               </div>
            @endforeach
        </div>
    </div>
</div>