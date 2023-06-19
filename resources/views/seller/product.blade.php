<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Profile & Product') }}
      </h2>
  </x-slot>
  
  <section class="container">

      @include('seller.profile-seller')

      <!-- Add Products -->
      <hr class="mt-2">
      <h2 class="text-3xl mt-16 font-bold text-center">Add Products</h2>
      <hr class="mt-2">
  
      <div class="mt-5 mb-5 bg-tridary rounded-lg p-10">
        <form action="{{ route('products.store') }}" method="post" class="space-y-4 md:space-y-6">
          @csrf
          <div class="flex space-x-3">
            <div class="w-1/3">
              <label for="game_name" class="block mb-2 text-sm font-medium ">Game Name</label>
              <select name="game_name" id="game_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                <option value="Mobile Legends">Mobile Legends</option>
                <option value="Apex Legends Mobile">Apex Legends Mobile</option>
                <option value="PUBG Mobile">PUBG Mobile</option>
                <option value="COD Mobile">COD Mobile</option>
                <option value="Freefire">Freefire</option>
                <option value="Genshin Impact">Genshin Impact</option>
                <option value="Clash Royale">Clash Royale</option>
                <option value="Clash of Clans">Clash of Clans</option>
                <option value="Apex Legends">Apex Legends</option>
                <option value="Dota 2">Dota 2</option>
                <option value="CSGO">CSGO</option>
                <option value="PUBG">PUBG</option>
                <option value="Fifa 23">Fifa 23</option>
                <option value="GTA V">GTA V</option>
              </select>
            </div>
            <div class="w-1/3">
              <label for="price" class="block mb-2 text-sm font-medium ">Price</label>
              <input type="number" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required placeholder="1.000.000" value="{{ old('price')}}">
            </div>
            <div class="w-1/3">
              <label for="product_name" class="block mb-2 text-sm font-medium ">Deskripsi Produk</label>
              <input type="text" name="product_name"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required placeholder="Rank 1 - Rank 100" value="{{ old('product_name')}}">
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="w-1/2">
              <label class="block mb-2 text-sm font-medium" for="image">Upload Image</label>
              <input type="file" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:border-none file:h-full file:p-2.5">
            </div>
            <input type="submit" class="w-1/2 bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm text-center cursor-pointer hover:text-indigo-300 mt-5 transition-colors">
          </div>
          @error('product_name')
          <div class="w-2/5">
            <div class="mt-4 text-red-500 border border-red-500 rounded-lg bg-red-200 flex-1 py-2 px-3">
              {{ $message }}
            </div>
          </div>
          @enderror
        </form>
      </div>
  
      {{-- Your Products --}}
    <hr class="mt-2">
    <h2 class="text-3xl mt-16 font-bold text-center">Your Products </h2>
    <hr class="mt-2">
  
      <div class="flex flex-wrap mt-3 mx-2">

        @isset($seller->product)
        
          @if ($seller->product->isEmpty())
              <p class="w-full text-center text-2xl text-red-500 font-bold mt-5 mb-5">Your Products is Empty!</p>
          @else

            @foreach ($seller->product as $product)
              
          <div class="w-1/2 md:w-3/12 p-2">
            <div class="border rounded-lg bg-tridary">
                <img src="/build/img/gta5.jpg" alt="product" class="rounded-t-lg aspect-square object-cover object-center inset-0 w-full h-full">
                <div class="py-2 px-4">
                  <p class="text-sm">{{ $product->game_name }}</p>
                  <div class="mt-2 flex flex-wrap justify-between align-center">
                    <p class="font-semibold w-full md:w-8/12">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                    <p class="text-sm font-medium w-full md:w-4/12 text-accent md:text-right"><a class="uil-star"> 5.0</a></p>
                  </div>
                  <hr class="my-2">
                  <p class="text-sm font-medium">Description:</p>
                  <p class="text-sm leading-relaxed"> {{ $product->product_name }} </p>
                  <div class="flex justify-end">
                    <form action="{{ route('products.destroy', $product->product_id) }}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button class="px-5 py-2 border rounded text-sm font-medium text-accent border-accent mt-2 mr-1 hover:bg-red-700 transition-colors bg-red-500">Delete</button>
                    </form>
                    <a class="px-5 py-2 border rounded text-sm font-medium text-accent border-accent mt-2 hover:bg-green-700 transition-colors bg-green-500" href="{{ route('products.edit', $product->product_id) }}">Edit</a>
                  </div>
                </div>
              </div>
            </div>
          
            @endforeach
          @endif

        @else
              <p class="w-full text-center text-2xl text-red-500 font-bold mt-5 mb-5">Your Products is Empty!</p>
        @endisset

        </div>      
    </div>
  </section>
  
</x-app-layout>