<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ $game_name }}
    </h2>
  </x-slot>

  
<section class="container mx-auto md:px-14 px-5 py-3 pt-20 pb-10">
  <h2 class="text-3xl font-bold">{{ $game_name }}</h2>
  <div class="flex flex-wrap mt-3 -mx-2">

    @foreach ($products as $product)
    
      <div class="w-3/6 md:w-3/12 p-2">
        <a href="/form-transaksi/{{ $product->seller->seller_id }}/{{ $product->product_id }}">
          <div class="bg-tridary hover:cursor-pointer hover:bg-blue-400 hover:transition-all transition-all rounded-xl border p-1 hover:scale-105">
            <img src="/build/img/csgo.jpeg" alt="product" class="rounded-t-lg aspect-square object-cover object-center inset-0 w-full h-full">
            <div class="py-2 px-4">
              <p class="text-sm font-medium">{{ $product->game_name }}</p>
              <div class="mt-2 flex flex-wrap justify-between align-center">
                <p class="font-semibold w-full">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <p class="text-sm font-medium w-full md:w-4/12 text-accent md:text-right"><a class="uil-star"> 5.0</a></p>
              </div>
              <hr class="my-2">
              <p class="text-sm font-medium">Description:</p>
              <p class="text-sm leading-relaxed">
                {{ $product->product_name }}
              </p>
            </div>
          </div>
        </a>
      </div>
      
    @endforeach
      
  </div>
</section>

</x-app-layout>