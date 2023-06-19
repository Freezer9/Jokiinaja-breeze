<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Check Invoice') }}
    </h2>
</x-slot>

<div class="mx-36 grid grid-cols-2 gap-16 pt-20">
  
  @include('layouts.card', 
  ['text' => 'Check Your Invoice', 'description' => 'Make sure you have paid it before 1 day after your order', 'img_path' => '/build/img/invoicecheck.jpg'])

  <div>
    <div class="bg-tridary rounded-3xl bg-tridary hover:shadow-slate-900 hover:z-40 p-8">
      <h1 class="text-center text-2xl font-semibold">Check Invoice</h1>
      <form action="{{ route('invoice.check') }}" method="post" class="flex flex-col gap-6 text-slate-50 pt-4">
        @method('POST')
        @csrf
        <div class="relative">
          <x-text-input id="invoice_name" class="block w-full" type="number" name="invoice_name" :value="old('invoice_name')" required autofocus placeholder="Your invoice"/>            
          <span class="absolute inset-y-0 right-0 flex items-center pr-3">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 hover:scale-105 transition-all text-white px-4 py-2 rounded-lg focus:outline-none">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
              </svg>
            </button>
          </span>
        </div>
      </form>
    </div>
    
    <div class="mt-5">
      <div class="container mx-auto py-8">
        @isset($invoiceCondition)
          @if($invoiceCondition === true)
          <h1 class="text-3xl font-bold mb-4 text-center">Invoice Found</h1>
          <p>Invoice Name: {{ $invoice->invoice_name }}</p>
          <p>Status: {{ $invoice->transaction_status }}</p>
          <p>Game Name : {{ $invoice->transaction->product->game_name }}</p>
          <p>Product Name : {{ $invoice->transaction->product->product_name }}</p>
          <p>Seller Penjoki : {{ $invoice->transaction->product->seller->profile_name }}</p>
          <p>Pembayaran : {{ $invoice->transaction->payment->payment_name }}</p>
          <p>Total Amount: Rp. {{ number_format($invoice->total_amount, 0, ',', '.') }}</p>
          <!-- Tambahkan kode lain untuk menampilkan detail invoice -->
          @elseif ($invoiceCondition === false)
          <h1 class="text-3xl font-bold mb-4 text-center">Invoice Not Found</h1>
          @endif
        @endisset
      </div>
    </div>
  
  </div>
</div>



</x-app-layout>