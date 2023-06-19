<div class="border rounded-lg bg-tridary hover:bg-blue-400 hover:transition-colors ml-16 w-4/6">
  <img src="/build/img/apexm.jpg" alt="product" class="rounded-t-lg aspect-square object-cover object-center inset-0 w-full h-full">
  <div class="py-2 px-4">
    <p class="text-sm">{{ $product->game_name }}</p>
    <div class="mt-2 flex flex-wrap">
      <p class="font-semibold w-full md:w-8/12">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
      <p class="text-sm font-medium w-full md:w-4/12 text-accent md:text-right"><a class="uil-star"> 5.0</a></p>
    </div>
    <hr class="my-2">
    <p class="text-sm font-medium">Description:</p>
    <p class="text-sm leading-relaxed">
      {{ $product->product_name }}
    </p>
  </div>
</div>
