<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Contact Us') }}
    </h2>
  </x-slot>

    
<div class="mx-36 grid grid-cols-2 gap-16 pt-20 pb-20">

  @include('layouts.card', 
  ['text' => 'Ada Masalah apa?', 'description' => 'kami standby 24 jam untuk anda', 'img_path' => '/build/img/mobilegamer.jpg'])

  <div>
    <div class="bg-tridary rounded-3xl bg-tridary hover:shadow-slate-900 hover:z-40 p-10">
      <h1 class=" text-center text-2xl font-semibold">Contact Us</h1>
      <form action="{{ route('contact.check') }}" method="POST" class="gap-5 pt-5" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="grid grid-cols-2 gap-5">
          <div class="flex flex-col gap-4">
            <div>
              <x-input-label for="complaint_type" :value="__('Complaint Type :')" />
              <x-text-input id="complaint_type" class="block mt-1 w-full" type="text" name="complaint_type" :value="old('complaint_type')" required autofocus/>
              <x-input-error :messages="$errors->get('complaint_type')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="phone_number" :value="__('Phone Number :')" />
              <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required autofocus/>
              <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="email" :value="__('Email :')" />
              <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus/>
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
          </div>
          <div class="flex flex-col gap-3">
            <div>
              <x-input-label for="invoice_name" :value="__('Invoice Name :')" />
              <x-text-input id="invoice_name" class="block mt-1 w-full" type="text" name="invoice_name" :value="old('invoice_name')" required autofocus/>
              <x-input-error :messages="$errors->get('invoice_name')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="complaint_details" :value="__('Complaint Details :')" />
              <x-text-input id="complaint_details" class="block mt-1 w-full" type="text" name="complaint_details" :value="old('complaint_details')" required autofocus/>
              <x-input-error :messages="$errors->get('complaint_details')" class="mt-2" />
            </div>
            {{-- <label>
              Kirim Bukti :
              <input type="file" name="userfile" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:border-none file:h-full file:p-2.5" />
            </label> --}}
          </div>
        </div>
        <div class="flex items-center justify-center">      
          <x-primary-button class="mt-4">
            {{ __('SEND') }}
          </x-primary-button>
        </div>
      </form>
    </div>

    <div>

      <div class="mt-5">
        <div class="container mx-auto py-8">
          @isset($invoiceCondition)
            @if($invoiceCondition === true)
                <h1 class="text-3xl font-bold mb-4 text-center">Invoice Found</h1>
                <p>Invoice Name: {{ $invoice->invoice_name }}</p>
                <!-- Tambahkan kode lain untuk menampilkan detail invoice -->
            @elseif ($invoiceCondition === false)
                <h1 class="text-3xl font-bold mb-4 text-center">Invoice Not Found</h1>
            @endif
          @endisset
        </div>
      </div>  
    
    </div>
    
  </div>

</div>

</x-app-layout>