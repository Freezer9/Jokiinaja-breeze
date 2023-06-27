<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Customer Order') }}
      </h2>
  </x-slot>

  
<section class="container mx-auto md:px-14 px-5 py-3">
  <div class="mb-5">

    @isset($result)
    
    @if ($result->isEmpty())
      <p class="w-full text-center text-2xl text-red-500 font-bold mt-5 mb-5">Your Transactions is Empty!</p>
    @else

    @foreach ($result as $product)
        @foreach ($product->transaction as $row)
            
    <div class="shadow-lg rounded-lg border mt-5 
    @if ($row->invoice->transaction_status == "Sudah Selesai!")
      bg-green-500 text-black border border-green-800
    @elseif ($row->invoice->transaction_status == 'Sedang Dikerjakan')
      bg-yellow-500 text-black border border-yellow-800
    @elseif ($row->invoice->transaction_status == "Dibatalkan!")
      bg-red-500 text-black border border-red-800
    @elseif ($row->invoice->transaction_status == 'Belum Dibayar')
      bg-primary
    @else
      bg-white
    @endif">
      <div class="px-6 py-4">
            <div class="flex justify-between">
              <h2 class="text-2xl font-bold
              @if ($row->invoice->transaction_status == "Sudah Selesai!")
                text-black line-through
              @elseif ($row->invoice->transaction_status == 'Sedang Dikerjakan')
                text-black 
              @elseif ($row->invoice->transaction_status == "Dibatalkan!")
                text-white line-through
              @elseif ($row->invoice->transaction_status == 'Belum Dibayar')
                text-bold
              @else
                bg-white
              @endif">Invoice : {{ $row->invoice->invoice_name }}</h2>
              <h2 class="font-bold text-xl"> {{ $row->invoice->transaction_status }} </h2>
              <p>Date: <span class="font-medium">{{ $row->created_at->diffForHumans() }}</span></p>
            </div>
            <div>
              <div class="flex justify-between">
                <div class="w-1/2">
                  <h4 class="text-lg font-bold">Customer Information</h4>
                  <p class="mt-2">Email: {{ $row->email }}</p>
                  <p>Nickname: {{ $row->nickname }}</p>
                  <p>Phone Number: {{ $row->phone_number }}</p>
                  <p>Login Via: {{ $row->login_via }}</p>
                </div>
                <div class="w-1/2">
                  <h4 class="text-lg font-bold">Payment Information</h4>
                  <p class="mt-2">Payment Gateway: {{ $row->payment->payment_name }}</p>
                  <p>Notes: {{ $row->notes }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="px-6 py-4 flex flex-row">
            <table class="w-full">
              <thead>
                <tr class="text-left">
                  <th class="py-2">Product</th>
                  <th class="py-2">Price</th>
                  <th class="py-2">Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-2 text-xl font-semibold">{{ $row->product->product_name }}</td>
                  <td class="py-2 text-xl font-semibold">Rp. {{ number_format($row->product->price, 0, ',', '.') }}</td>
                  <td class="py-2 text-xl font-semibold">Rp. {{ number_format($row->payment->admin_price, 0, ',', '.') }}</td>
                </tr>
                <!-- Add more rows for additional products if needed -->
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2" class="text-right py-2"></td>
                  <td class="py-2 text-xl font-semibold">Rp. {{ number_format($row->product->price + $row->payment->admin_price, 0, ',', '.') }}</td>
                </tr>
              </tfoot>
              <tfoot>
              </tfoot>
            </table>
            <div class="text-center justify-center">
              <a class="btn mb-2 bg-green-400 hover:bg-green-500">Confirm</a>
              <a class="btn mb-2 bg-green-400 hover:bg-green-500 ">Done</a>
              <a class="btn mb-2 bg-red-400 hover:bg-red-500">Cancel</a>
              <a class="btn mb-2" href="{{ route('transactions.show', ['transaction_id' => $row]) }}">Chat</a>
            </div>
          </div>
        </div>
        
        @endforeach
    @endforeach
    @endif

    @else
      <p class="w-full text-center text-2xl text-red-500 font-bold mt-5 mb-5">Your Transactions is Empty!</p>
    @endisset

  </div>
</section>

  </x-app-layout>
    