<form action="{{ route('transaction.store', ['product_id' => $product->product_id]) }}" method="post" class="max-w-md mx-auto bg-blue-950 shadow-md rounded-xl border p-6">
@csrf
  <div class="text-center justify-center">
    <h2 class="text-2xl font-bold mb-6 text-center text-white justify-center items-center">Form Transaksi</h2>
  </div>

  <div class="w-full flex flex-row gap-5">
    <div>
      <div class="mb-4">
        <x-input-label for="email" :value="__('Email :')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <div class="mb-4">
        <x-input-label for="nickname" :value="__('Nickname :')" />
        <x-text-input id="nickname" class="block mt-1 w-full" type="text" name="nickname" :value="old('nickname')" required autofocus />
        <x-input-error :messages="$errors->get('nickname')" class="mt-2" />
      </div>

      <div class="mb-4">
        <x-input-label for="password" :value="__('Password :')" />
        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')" required autofocus autocomplete="password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <div class="mb-4">
        <x-input-label for="notes" :value="__('Notes :')" />
        <x-text-input id="notes" class="block mt-1 w-full" type="text" name="notes" :value="old('notes')" required autofocus/>
        <x-input-error :messages="$errors->get('notes')" class="mt-2" />
      </div>
    </div>

    <div>

      <div class="mb-4">
        <x-input-label for="phone_number" :value="__('Phone Number :')" />
        <x-text-input id="phone_number" class="block mt-1 w-full" type="number" name="phone_number" :value="old('phone_number')" required autofocus/>
        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
      </div>

      <div class="mb-4">
        <x-input-label for="login_via" :value="__('Login Method :')" />
        <select name="login_via" required class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm placeholder-slate-600 block mt-1 w-full">
          <option value="Google">Google</option>
          <option value="Facebook">Facebook</option>
          <option value="Twitter">Twitter</option>
          <option value="Instagram">Instagram</option>
          <!-- Add more options if needed -->
        </select>
      </div>

      <div class="mb-4">
        <x-input-label for="payment_gateway" :value="__('Payment Gateway :')" />
        <select name="payment_gateway" required class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm placeholder-slate-600 block mt-1 w-full">
          <option value="1">QRIS</option>
          <option value="2">BRIVA</option>
          <option value="3">GoPay</option>
          <option value="4">Shopeepay</option>
          <!-- Add more options if needed -->
        </select>
      </div>
    </div>
  </div>

  <div class="text-center">
    <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit">
      Submit
    </button>
  </div>
</form>