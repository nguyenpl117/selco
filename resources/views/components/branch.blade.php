@props(['title', 'items' => []])
@php
/** @var \App\Models\AffilicatedUnit[] $affiliatedUnits */
$affiliatedUnits = serverAPI()->affiliatedUnits()

@endphp
<div class="my-10 flex flex-col gap-6 mx-4 branch-all">
    <div class="relative h-12 flex flex-col justify-center">
        <hr class="border-primary-500">
        <div class="absolute left-0 right-0 flex justify-center">
            <h3 class="uppercase font-bold text-xl lg:text-2xl px-8 rounded-full h-12 bg-primary-500 flex flex-col justify-center text-white">
                {{ $title }}
            </h3>
        </div>
    </div>
    <div class="">
        <div class="branch-carousel">
            @foreach($affiliatedUnits as $item)
               <div class="carousel-cell w-full md:max-w-[50%] xl:max-w-[33.33%] p-2">
                   <div class=" border border-primary-700 p-6 rounded-lg shadow">
                       <div>
                           <img src="{{ $item->imageLink }}" alt="{{ $item->companyName }}" class="mx-auto">
                       </div>
                       <div class="">
                           <h3 class="text-center font-medium text-2xl">{{ $item->companyName }}</h3>
                           <p class="my-4"><i class="fa fa-map-marker"></i> {{ $item->address }}</p>

                           <p class="my-4"><i class="fa fa-phone"></i> {{ $item->phone }}</p>
                           <p class="my-4"><i class="fa fa-fax"></i> ...</p>
                           <p class="my-4"><i class="fa fa-envelope"></i> {{ $item->email }}</p>
                       </div>
                   </div>
               </div>
            @endforeach
        </div>
    </div>
</div>