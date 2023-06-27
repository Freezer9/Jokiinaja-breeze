<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Main Menu Seller') }}
      </h2>
  </x-slot>

<div class="mx-36 grid grid-cols-2 gap-16 pt-48 items-center">

  <div class="flex flex-col items-center justify-center py-12">
    <div class="grid grid-cols-2 gap-4">
      <div class="bg-tridary p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Product Count</h2>
        <p class="text-3xl font-bold">{{ ($seller == '[]') ? 0 : $seller }}</p>
      </div>
      <div class="bg-tridary p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Completed Orders</h2>
        <p class="text-3xl font-bold">2</p>
      </div>
      <div class="bg-tridary p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Orders in Progress</h2>
        <p class="text-3xl font-bold">3</p>
      </div>
      <div class="bg-tridary p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Unconfirmed Orders</h2>
        <p class="text-3xl font-bold">4</p>
      </div>
    </div>
  </div>

  <div class="flex flex-col items-center ml-16 w-3/4 p-6 bg-tridary rounded-lg shadow-lg h-48">
    <h2 class="text-3xl font-bold mb-4">Halo, <span class="text-yellow-500">5</span></h2>
    <p class="text-xl mb-4">Mari kita siapkan profil Anda!</p>
    <a href="Product.php" class="btn hover:bg-orange-500 hover:scale-105">Let's Go!</a>
  </div>
</div>

</x-app-layout>