<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Profile & Product') }}
      </h2>
  </x-slot>
  
  <livewire:seller-product></livewire:seller-product>

</x-app-layout>