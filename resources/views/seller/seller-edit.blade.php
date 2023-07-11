<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Profile') }}
    </h2>
  </x-slot>
  
<section class="container">
  <div id="editNotification" class="flex items-center justify-center bg-gray-800 bg-opacity-75 transition-opacity duration-300">
    <div class="bg-white w-1/2 p-6 rounded-lg">
      <h2 class="text-2xl font-semibold mb-4 text-black text-center">Edit Profile</h2>
      <form action="{{ route('seller.update') }}" method="post" class="flex flex-col gap-2" enctype="multipart/form-data">
        @method('put')
        @csrf
        <label class="block mb-2 text-black">
          Profile Name :
          <x-text-input id="profile_name" class="block mt-1 w-full p-2.5" type="text" name="profile_name" :value="old('profile_name') ?? $seller->profile_name" required autofocus placeholder="Your profile name"/>
          <x-input-error :messages="$errors->get('profile_name')" class="mt-2" />
        </label>
        <label class="block mb-2 text-black">
          Full Name :
          <x-text-input id="full_name" class="block mt-1 w-full p-2.5" type="text" name="full_name" :value="old('full_name') ?? $seller->full_name" required autofocus placeholder="Your full name"/>
          <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
        </label>
        <label class="block mb-2 text-black">
          Address :
          <x-text-input id="address" class="block mt-1 w-full p-2.5" type="text" name="address" :value="old('address') ?? $seller->address" required autofocus placeholder="Your address"/>
          <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </label>
        <label class="block mb-2 text-black">
          Gender :
          <x-text-input id="gender" class="block mt-1 w-full p-2.5" type="text" name="gender" :value="old('gender') ?? $seller->gender" required autofocus placeholder="Your gender"/>
          <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </label>
        <label class="block mb-2 text-black">
          Date of Birth :
          <x-text-input id="dob" class="block mt-1 w-full p-2.5" type="date" name="dob" :value="old('dob') ?? $seller->dob" required autofocus placeholder="Your date of birth"/>
          <x-input-error :messages="$errors->get('dob')" class="mt-2" />
        </label>
        <label class="block mb-2 text-black">
          Profile Description :
          <x-text-input id="profile_description" class="block mt-1 w-full p-2.5" type="text" name="profile_description" :value="old('profile_description') ?? $seller->profile_description" required autofocus placeholder="Your profile description"/>
          <x-input-error :messages="$errors->get('profile_description')" class="mt-2" />
        </label>
        <label class="block mb-2 text-black">
          Profile Image :
          <x-text-input id="profile_image" class="block mt-1 w-full p-2.5" type="file" name="profile_image" :value="old('profile_image') ?? $seller->profile_image" autofocus placeholder="Your profile image"/>
          <x-input-error :messages="$errors->get('profile_image')" class="mt-2" />
        </label>
        <div class="flex justify-center">
          <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
          <button type="button" class="bg-red-500 text-white px-4 py-2 rounded-md ml-2">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</section>

</x-app-layout>