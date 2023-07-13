<div>
    <div class="max-w-md mx-auto bg-blue-950 shadow-md rounded-xl border p-6">
        @csrf
          <div class="text-center justify-center">
            <h2 class="text-2xl font-bold mb-6 text-center text-white justify-center items-center">Form Transaksi</h2>
          </div>
        
          <div class="w-full flex flex-row gap-5">
            <div>
              <div class="mb-4">
                <x-input-label for="email" :value="__('Email :')" />
                <x-text-input wire:model="email" class="block mt-1 w-full" type="email" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
        
              <div class="mb-4">
                <x-input-label for="nickname" :value="__('Nickname :')" />
                <x-text-input wire:model="nickname" class="block mt-1 w-full" type="text" required autofocus />
                <x-input-error :messages="$errors->get('nickname')" class="mt-2" />
              </div>
        
              <div class="mb-4">
                <x-input-label for="password" :value="__('Password :')" />
                <x-text-input wire:model="password" class="block mt-1 w-full" type="password" required autofocus  />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
        
              <div class="mb-4">
                <x-input-label for="notes" :value="__('Notes :')" />
                <x-text-input wire:model="notes" class="block mt-1 w-full" type="text"  required autofocus/>
                <x-input-error :messages="$errors->get('notes')" class="mt-2" />
              </div>
            </div>
        
            <div>
              <div class="mb-4">
                <x-input-label for="phone_number" :value="__('Phone Number :')" />
                <x-text-input wire:model="phone_number" class="block mt-1 w-full" type="number" required autofocus/>
                <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
              </div>
        
              <div class="mb-4">
                <x-input-label for="login_via" :value="__('Login Method :')" />
                <select wire:model="login_via" required class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm placeholder-slate-600 block mt-1 w-full">
                  <option value="">-- Choose Login --</option>
                  <option value="Google">Google</option>
                  <option value="Facebook">Facebook</option>
                  <option value="Twitter">Twitter</option>
                  <option value="Instagram">Instagram</option>
                  <!-- Add more options if needed -->
                </select>
                <x-input-error :messages="$errors->get('login_via')" class="mt-2" />
              </div>
        
              <div class="mb-4">
                <x-input-label for="payment_gateway" :value="__('Payment Gateway :')" />
                <select wire:model="payment_gateway" required class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm placeholder-slate-600 block mt-1 w-full">
                    <option value="">-- Choose Payment --</option>
                    <option value="1">QRIS</option>
                    <option value="2">BRIVA</option>
                    <option value="3">GoPay</option>
                    <option value="4">Shopeepay</option>
                    <!-- Add more options if needed -->
                </select>
                <x-input-error :messages="$errors->get('payment_gateway')" class="mt-2" />
              </div>
            </div>
          </div>
        
        <div class="text-center">
            <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="button" wire:click="confirmAddTransaction"> Submit </button>
        </div>
    </div>

    <x-modal.dialog wire:model.defer="showSummaryModal">
        <x-slot name="title">
            <h2 class="text-2xl font-semibold mb-3 text-white text-center">Order Summary</h2>
            <hr>
        </x-slot>
        <x-slot name="content">
            <div class="text-center flex flex-col justify-center items-center">
                <div class="grid grid-cols-2 items-center justify-center">
                    <x-input-label :value="__('Game Name: ')" class="text-right" />
                    <h3 class="text-lg ml-2 text-left">{{ $product->game_name }}</h3>
                </div>
                <hr class="mt-1 mb-1">
                <div class="grid grid-cols-2 items-center justify-center">
                    <x-input-label :value="__('Product Name: ')" class="text-right"  />
                    <h3 class="text-lg ml-2 text-left">{{ $product->product_name }}</h3>
                </div>
                <hr class="mt-1 mb-1">
                <div class="grid grid-cols-2 items-center justify-center">
                    <x-input-label :value="__('Email: ')" class="text-right" />
                    <h3 class="text-lg ml-2 text-left">{{ $email }}</h3>
                </div>
                <hr class="mt-1 mb-1">
                <div class="grid grid-cols-2 items-center justify-center">
                    <x-input-label :value="__('Nickname: ')"  class="text-right" />
                    <h3 class="text-lg ml-2 text-left">{{ $nickname }}</h3>
                </div>
                <hr class="mt-1 mb-1">
                <div class="grid grid-cols-2 items-center justify-center">
                    <x-input-label :value="__('Password: ')"  class="text-right" />
                    <h3 class="text-lg ml-2 text-left">{{ '** ENCRYPTED **' }}</h3>
                </div>
                <hr class="mt-1 mb-1">
                <div class="grid grid-cols-2 items-center justify-center">
                    <x-input-label :value="__('Notes: ')"  class="text-right" />
                    <h3 class="text-lg ml-2 text-left">{{ $notes }}</h3>
                </div>
                <hr class="mt-1 mb-1">
                <div class="grid grid-cols-2 items-center justify-center">
                    <x-input-label :value="__('Phone Number: ')"  class="text-right" />
                    <h3 class="text-lg ml-2 text-left">{{ $phone_number }}</h3>
                </div>
                <hr class="mt-1 mb-1">
                <div class="grid grid-cols-2 items-center justify-center">
                    <x-input-label :value="__('Login Via: ')"  class="text-right" />
                    <h3 class="text-lg ml-2 text-left">{{ $login_via }}</h3>
                </div>
                <hr class="mt-1 mb-1">
                <div class="grid grid-cols-2 items-center justify-center">
                    <x-input-label :value="__('Payment Gateway: ')"  class="text-right" />
                    <h3 class="text-lg ml-2 text-left"> 
                        @if($payment_gateway == 1)
                            QRIS
                        @elseif($payment_gateway == 2)
                            BRIVA
                        @elseif($payment_gateway == 3)
                            Gopay
                        @elseif($payment_gateway == 4)
                            Shopeepay
                        @else
                            Unknown
                        @endif
                    </h3>
                </div>
                <hr class="mt-1 mb-1">
                <div class="grid grid-cols-2 items-center justify-center">
                    <x-input-label :value="__('Total Price: ')"  class="text-right" />
                    <h3 class="text-lg ml-2 text-left">Rp {{ number_format($total_price + 2500, 0, ',', '.') }}</h3>
                </div>
                <hr class="mt-1 mb-1">
            </div>
            <hr class="mt-3">
        </x-slot>
        <x-slot name="footer">
            <div class="flex gap-2 justify-center items-center">
                <x-danger-button wire:click="$set('showSummaryModal', false)" wire:loading.attr="disabled"> Cancel </x-danger-button>
                <x-primary-button wire:click="confirmTransaction" wire:loading.attr="disabled">Confirm Order</x-primary-button>
            </div>
        </x-slot>
    </x-modal.dialog>

    <x-modal.dialog wire:model.defer="showInvoiceModal">
      <x-slot name="title">
        <div class="flex items-center justify-center">
          <svg width="200px" height="200px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.8754 19.4874L16.0559 19.3625C16.6209 18.9719 16.9035 18.7765 17.1562 18.567C18.5294 17.4289 19.4518 15.8424 19.7588 14.0905C19.8153 13.7681 19.8446 13.4271 19.9033 12.7449L19.9337 12.3922C20.0309 11.2632 20.0212 10.1275 19.9048 9.00023L19.8687 8.65139C19.665 6.6787 18.4539 4.94971 16.6644 4.07663C13.7221 2.64112 10.2779 2.64112 7.33559 4.07663C5.54608 4.94971 4.33504 6.6787 4.13127 8.65139L4.09524 9.00023C3.9788 10.1275 3.96911 11.2632 4.0663 12.3922L4.09666 12.7449C4.15537 13.4271 4.18473 13.7681 4.24123 14.0905C4.54821 15.8424 5.47055 17.4289 6.8438 18.567C7.09652 18.7765 7.3791 18.9719 7.94406 19.3626L8.12461 19.4874C8.89273 20.0185 9.27682 20.2842 9.66175 20.4687C11.1393 21.1771 12.8607 21.1771 14.3382 20.4687C14.7232 20.2842 15.1073 20.0186 15.8754 19.4874Z" stroke="#0095FF" stroke-width="1.5" />
            <path d="M19.9033 12.7449L19.9337 12.3922C20.0309 11.2632 20.0212 10.1275 19.9048 9.00023L19.8687 8.65139C19.665 6.6787 18.4539 4.94971 16.6644 4.07663C13.7221 2.64112 10.2779 2.64112 7.33559 4.07663C5.54608 4.94971 4.33504 6.6787 4.13127 8.65139L4.09524 9.00023C3.9788 10.1275 3.96911 11.2632 4.0663 12.3922L4.09666 12.7449C4.15537 13.4271 4.18473 13.7681 4.24123 14.0905C4.54821 15.8424 5.47055 17.4289 6.8438 18.567C7.09652 18.7765 7.3791 18.9719 7.94406 19.3626L8.12461 19.4874C8.89273 20.0185 9.27682 20.2842 9.66175 20.4687" stroke="#FFFF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M9.25 11.75L11.25 13.75L14.75 10" stroke="#0095FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
          <h2 class="text-2xl font-semibold mb-3 text-white text-center">Order Created</h2>
          <hr>
      </x-slot>
      <x-slot name="content">
            <div class="text-center flex flex-col justify-center items-center">
              <h3 class="mb-4 text-xl font-semibold text-green-500">Be sure to save your Invoice!</h3>
              <div class="grid grid-cols-2 items-center justify-center">
                <x-input-label :value="__('Your Invoice: ')" class="text-right" />
                @isset($invoice->invoice_name)
                    <h3 class="text-lg ml-2 text-left text-white hover:text-blue-500 hover:cursor-pointer">{{ $invoice->invoice_name }}</h3>
                @endisset
              </div>
            </div>
          <hr class="mt-3">
      </x-slot>
      <x-slot name="footer">
          <div class="flex gap-2 justify-center items-center">
              <x-secondary-button wire:click="okayInvoice" wire:loading.attr="disabled"> Okay </x-secondary-button>
              <x-primary-button wire:click="checkInvoice" wire:loading.attr="disabled">Check Invoice</x-primary-button>
          </div>
      </x-slot>
  </x-modal.dialog>

</div>
