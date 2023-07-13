<x-app-layout>
  
<div class="pt-48 grid grid-cols-3 justify-center items-center">
  
  @include('components.seller-profile')

  @livewire('guest-form-transaction', ['product' => $product, 'seller' => $seller])

  @include('components.card-product')

</div>

</x-app-layout>