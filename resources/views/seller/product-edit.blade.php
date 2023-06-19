<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Product') }}
    </h2>
  </x-slot>
  
      
<section class="container">
  <div id="editNotification" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 transition-opacity duration-300">
    <div class="bg-white w-1/2 p-6 rounded-lg">
      <h2 class="text-2xl font-semibold mb-4 text-black text-center">Edit Product</h2>
      <form action="{{ route('products.update', $product->product_id) }}" method="post" class="flex flex-col gap-2">
        @method('put')
        @csrf
        <label class="block mb-2 text-black">
          Game Name
          @php
          $gameOptions = [
              'Mobile Legends',
              'Apex Legends Mobile',
              'PUBG Mobile',
              'COD Mobile',
              'Freefire',
              'Genshin Impact',
              'Clash Royale',
              'Clash of Clans',
              'Apex Legends',
              'Dota 2',
              'CSGO',
              'PUBG',
              'Forza Horizon 4',
              'GTA V',
              'NBA 2k22',
              'Clash Royale'
          ];
          @endphp
      
        <select name="product_game_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            @foreach($gameOptions as $option)
                <option value="{{ $option }}" {{ $product->game_name == $option ? 'selected' : '' }}>{{ $option }}</option>
            @endforeach
        </select>
                      
        </label>
        <label class="block mb-2 text-black">
          Price:
          <input type="number" name="product_price" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ old('product_price') ?? $product->price }}" />
        </label>
        {{-- <label class="block mb-2 text-black">
          Upload Image
          <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:border-none file:h-full file:p-2.5" type="file" name="image">
        </label> --}}
        <label class="block mb-2 text-black">
          Description:
          <input name="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ old('product_name') ?? $product->product_name }}" />
        </label>
        @error('product_name')
          <div class="mt-2 text-red-500 border border-red-500 rounded-lg bg-red-200 flex-1 py-2 px-3">
            {{ $message }}
          </div>
        @enderror
        <div class="flex justify-center">
          <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
          <button type="button" class="bg-red-500 text-white px-4 py-2 rounded-md ml-2">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</section>

</x-app-layout>