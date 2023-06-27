<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Check Invoice') }}
    </h2>
  </x-slot>


<div class="mx-36 grid grid-cols-2 gap-16 pt-20">

  <div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4 text-center">Invoice Details </h1>
    <div class="bg-tridary p-4 mb-6 rounded-xl">
      <p class="text-center">Harap dibayar Sebelum : {{ $invoice->created_at->diffForHumans()}}</p>
    </div>
    <table class="w-full bg-tridary border border-gray-300">
      <tr>
        <th class="py-2 px-4 border-b font-bold text-left">No. Transaksi</th>
        <td class="py-2 px-4 border-b">{{ $invoice->invoice_name }}</td>
      </tr>
      <tr>
        <th class="py-2 px-4 border-b font-bold text-left">Nama Game</th>
        <td class="py-2 px-4 border-b">{{ $invoice->transaction->product->game_name }}</td>
      </tr>
      <tr>
        <th class="py-2 px-4 border-b font-bold text-left">Nama Produk</th>
        <td class="py-2 px-4 border-b">{{ $invoice->transaction->product->product_name }}</td>
      </tr>
      <tr>
        <th class="py-2 px-4 border-b font-bold text-left">Seller Penjoki</th>
        <td class="py-2 px-4 border-b">{{ $invoice->transaction->product->seller->profile_name }}</td>
      </tr>
      <tr>
        <th class="py-2 px-4 border-b font-bold text-left">Pembayaran</th>
        <td class="py-2 px-4 border-b">{{ $invoice->transaction->payment->payment_name }}</td>
      </tr>
      <tr>
        <th class="py-2 px-4 border-b font-bold text-left">Status Transaksi</th>
        <td class="py-2 px-4 border-b">{{ $invoice->transaction_status }}</td>
      </tr>
      <tr>
        <th class="py-2 px-4 border-b font-bold text-left">Total Amount</th>
        <td class="py-2 px-4 border-b">Rp. {{ number_format($invoice->total_amount, 0, ',', '.') }}</td>
      </tr>
    </table>
  </div>

  <x-chat></x-chat>

</div>

</x-app-layout>