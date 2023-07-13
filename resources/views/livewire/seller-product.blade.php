<section class="container">
    
    <livewire:seller-profile></livewire:seller-profile>
    
    {{-- Your Products --}}
    <hr class="mt-2">
    <h2 class="text-3xl mt-16 font-bold text-center">Your Products </h2>
    <hr class="mt-2">
    
    @if (session()->has('message'))
        <div class="text-center items-center text-green-700 bg-green-200 mt-2 rounded-lg px-2 py-4 text-xl">
            {{ session('message') }}
        </div>
    @endif

    <div class="mt-4">
        {{ $products->links() }}
        <x-primary-button wire:click="confirmAddProduct">Add Products</x-primary-button>
    </div>

    <div class="flex flex-wrap mt-3 mx-2">

        @isset($products)
        @if ($products->isEmpty())
            <p class="w-full text-center text-2xl text-red-500 font-bold mt-5 mb-5">Your Products is Empty!</p>
        @else

            @foreach ($products as $product)

            @php
                $productImage = $product->product_image;
                $defaultImage = 'photo/defaultproduct.png'; // Nama file gambar default
                $imagePath = 'storage/' . ($productImage ? $productImage : $defaultImage);
            @endphp
        
        <div class="w-1/2 md:w-3/12 p-2">
            <div class="border rounded-lg bg-tridary">
                <img src="{{ asset($imagePath) }}" alt="product" class="rounded-t-lg aspect-square object-cover object-center inset-0 w-full h-full">
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
                        <button wire:click="confirmDeleteProduct({{ $product->product_id }})" class="px-5 py-2 border rounded text-sm font-medium text-accent border-accent mt-2 mr-1 hover:bg-red-700 transition-colors bg-red-500">Delete</button>
                        <button wire:click="confirmEditProduct({{ $product }})" class="px-5 py-2 border rounded text-sm font-medium text-accent border-accent mt-2 hover:bg-green-700 transition-colors bg-green-500">Edit</button>
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

    <x-modal.dialog wire:model.defer="showEditModal">
        <x-slot name="title">
            <h2 class="text-2xl font-semibold mb-4 text-center text-white">Edit Product</h2>
        </x-slot>
        <x-slot name="content">
            <label class="block text-white">
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
            
                <select wire:model="game_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2">
                    @foreach($gameOptions as $option)
                        <option value="{{ $option }}" {{ $product->game_name == $option ? 'selected' : '' }}>{{ $option }}</option>
                    @endforeach
                </select>
              </label>
      
              <label class="block mt-2 text-white">
                Price:
                <input wire:model="price" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2" value="{{ old('product_price') ?? $product->price }}" />
              </label>
      
              @isset($product_image)
                <input type="hidden" name="oldPhoto" value="{{ $product_image }}">
              @endisset
              
              <label class="block mt-2 text-white">
                Product Image
                <input wire:model="product_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:border-none file:h-full file:p-2.5 mt-2" type="file" >
                <x-input-error :messages="$errors->get('product_image')" />
              </label>
      
              <label class="block mt-2 text-white">
                Product Name:
                <input wire:model="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2" value="{{ old('product_name') ?? $product->product_name }}" />
                <x-input-error :messages="$errors->get('product_name')" />
              </label>
        </x-slot>
        <x-slot name="footer">
            <div class="flex gap-2 justify-center">
                <x-danger-button wire:click="$set('showEditModal', false)" wire:loading.attr="disabled"> Cancel </x-danger-button>
                <x-primary-button wire:click="updateProduct" wire:loading.attr="disabled">Save Changes</x-primary-button>
            </div>
        </x-slot>
    </x-modal.dialog>

    <x-modal.dialog wire:model.defer="showAddModal">
        <x-slot name="title">
            <h2 class="text-2xl font-semibold mb-4 text-center text-white">Edit Product</h2>
        </x-slot>
        <x-slot name="content">
            <label class="block text-white">
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
            
                <select wire:model="game_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2">
                        <option selected value="">-- Pilih Game --</option>
                    @foreach($gameOptions as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                    @endforeach
                </select>
              </label>
      
              <label class="block mt-2 text-white">
                Price:
                <input wire:model="price" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2" value="{{ old('product_price') ?? $product->price }}" />
                <x-input-error :messages="$errors->get('price')" />
              </label>
      
              <label class="block mt-2 text-white">
                Product Name:
                <input wire:model="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2" value="{{ old('product_name') ?? $product->product_name }}" />
                <x-input-error :messages="$errors->get('product_name')" />
              </label>

              @isset($product_image)
                <input type="hidden" name="oldPhoto" value="{{ $product_image }}">
              @endisset
                      
              <label class="block mt-2 text-white">
                Product Image
                <input wire:model="product_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:border-none file:h-full file:p-2.5 mt-2" type="file" >
                <x-input-error :messages="$errors->get('product_image')" />
              </label>
      
        </x-slot>
        <x-slot name="footer">
            <div class="flex gap-2 justify-center">
                <x-danger-button wire:click="$set('showAddModal', false)" wire:loading.attr="disabled"> Cancel </x-danger-button>
                <x-primary-button wire:click="AddProduct()" wire:loading.attr="disabled">Add Product</x-primary-button>
            </div>
        </x-slot>
    </x-modal.dialog>

    <x-modal.confirmation wire:model.defer="showDeleteModal">
        <x-slot name="title">
            <h3>Delete Product</h3>
        </x-slot>
        <x-slot name="content">
            <p>Are you sure you want to delete your product?</p>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$set('showDeleteModal', false)" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>

            <x-danger-button class="ml-3" wire:click="deleteProduct({{ $showDeleteModal }})">
                Delete Product
            </x-danger-button>
        </x-slot>
    </x-modal.confirmation>

</section>

