<div>

    <!-- Add Products -->
    <hr class="mt-2">
    <h2 class="text-3xl mt-16 font-bold text-center">Add Products</h2>
    <hr class="mt-2">
  
    <div class="mt-5 mb-5 bg-tridary rounded-lg p-10">
        <form wire:submit.prevent="save" class="space-y-4 md:space-y-6">
            @csrf
            <div class="flex space-x-3">
                <div class="w-1/3">
                    <label for="game_name" class="block mb-2 text-sm font-medium ">Game Name</label>
                    <select wire:model='game_name' name="game_name" id="game_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option value="" selected >-- Pilih Game --</option>
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
                    <input wire:model='price' type="number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required placeholder="1.000.000">
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>
                <div class="w-1/3">
                    <label for="product_name" class="block mb-2 text-sm font-medium ">Nama Produk</label>
                    <input wire:model='product_name' type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required placeholder="Rank 1 - Rank 100">
                    @error('product_name') <x-input-error :messages="$message" class="mt-2" /> @enderror
                </div>
            </div>
            <div class="flex space-x-3">
                <div class="w-1/2">
                    <label class="block mb-2 text-sm font-medium" for="product_image">Product Image</label>
                    <input wire:model="product_image" type="file" required class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:border-none file:h-full file:p-2.5">
                    <x-input-error :messages="$errors->get('product_image')" class="mt-2" />
                </div>
                <input type="submit" class="w-1/2 bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm text-center cursor-pointer hover:text-indigo-300 mt-5 transition-colors">
            </div>
        </form>
    </div>
</div>