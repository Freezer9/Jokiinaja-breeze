@php
    $profileImage = $user->seller->profile_image;
    $defaultImage = 'defaultprofile.png'; // Nama file gambar default
    $imagePath = 'storage/photo/' . ($profileImage ? $profileImage : $defaultImage);
@endphp

<div class="mb-5">
      
  @if (session()->has('profile_message'))
    <div class="text-center justify-center text-green-700 bg-green-200 rounded-lg px-2 py-4 text-xl mb-4">
      {{ session('profile_message') }}
    </div>
  @endif

  <div class="flex justify-center items-center w-full content-section md:my-0">
    <div class="flex flex-wrap justify-center items-center border bg-tridary rounded-xl w-11/12 md:w-9/12">
      <div class="md:w-6/12 w-full flex justify-end items-center h-full overflow-hidden">
        <img src="{{ asset($imagePath) }}" alt="profile" class="sm:rounded-s-xl sm:rounded-none rounded-t-xl aspect-square inset-0 w-full h-full object-cover object-center">
      </div>
      <div class="md:w-6/12 w-full flex flex-col justify-center items-start h-full md:px-10 px-5 py-3 md:py-0 ">
        <h3 class="text-2xl">Hi, <span class="font-semibold">{{ $user->seller->profile_name ?? 'there! Set up your Profile' }}</span></h3>
        <form wire:submit.prevent="updateProfile" class="m-0 p-0 w-full" enctype="multipart/form-data">
          <hr class="border-0 h-[1px] w-full bg-gray-200 my-3" />
          <table class="text-sm">
            <tr>
              <td colspan="2">
                <p class="font-semibold text-accent mb-2 text-xl text-yellow-500">Personal Biodata</p>
              </td>
            </tr>
            <tr>
              <td class="w-1/2 font-medium"> Full Name </td>
              <td> {{ $user->seller->full_name ?? '-' }} </td>
            </tr>
            <tr>
              <td class="font-medium"> Address </td>
              <td>{{ $user->seller->address ?? '-' }} </td>
            </tr>
            <tr>
              <td class="font-medium"> Gender </td>
              <td>{{ $user->seller->gender ?? '-'}} </td>
            </tr>
            <tr>
              <td class="font-medium"> Date of Birth </td>
              <td>{{ $user->seller->dob ?? '-' }}</td>
            </tr>
            <tr>
              <td colspan="2">
                <p class="font-semibold pt-5 text-accent mb-2 text-xl text-red-500">Account Information</p>
              </td>
            </tr>
            <tr>
              <td class="font-medium"> Phone Number </td>
              <td>{{ $user->seller->phone_number ?? '-' }}</td>
            </tr>
            <tr>
              <td class="font-medium"> Email </td>
              <td>{{ $user->email ?? '-' }}</td>
            </tr>
            <tr>
              <td class="font-medium"> Description </td>
              <td>{{ $user->seller->profile_description ?? '-' }}</td>
            </tr>
            <tr>
              <td class="font-medium"> User Type </td>
              <td>{{ $user->seller->user_type ?? '-' }}</td>
            </tr>
          </table>
          <div class="flex justify-end items-center w-full mt-6">
              <button type="button" class="text-sm font-medium px-5 py-2 border border-primary rounded text-primary hover:bg-green-700 transition-colors bg-green-500" wire:click="confirmEditProfile({{ $user }})" >Edit Profile</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <x-modal.dialog wire:model.defer="showEditProfileModal">
    <x-slot name="title">
      <h2 class="text-2xl font-semibold mb-4 text-center text-white">Edit Profile</h2>
    </x-slot>
    <x-slot name="content">
      <label class="block mb-2 text-white">
        Profile Name :
        <x-text-input wire:model="profile_name" class="block mt-1 w-full p-2.5" type="text" required autofocus placeholder="Your profile name"/>
        <x-input-error :messages="$errors->get('profile_name')" class="mt-2" />
      </label>
      <label class="block mb-2 text-white">
        Full Name :
        <x-text-input wire:model="full_name" class="block mt-1 w-full p-2.5" type="text" required autofocus placeholder="Your full name"/>
        <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
      </label>
      <label class="block mb-2 text-white">
        Address :
        <x-text-input wire:model="address" class="block mt-1 w-full p-2.5" type="text" required autofocus placeholder="Your address"/>
        <x-input-error :messages="$errors->get('address')" class="mt-2" />
      </label>
      <label class="block mb-2 text-white">
        Gender :
        <x-text-input wire:model="gender" class="block mt-1 w-full p-2.5" type="text" required autofocus placeholder="Your gender"/>
        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
      </label>
      <label class="block mb-2 text-white">
        Date of Birth :
        <x-text-input wire:model="dob" class="block mt-1 w-full p-2.5" type="date" required autofocus placeholder="Your date of birth"/>
        <x-input-error :messages="$errors->get('dob')" class="mt-2" />
      </label>
      <label class="block mb-2 text-white">
        Profile Description :
        <x-text-input wire:model="profile_description" class="block mt-1 w-full p-2.5" type="text" required autofocus placeholder="Your profile description"/>
        <x-input-error :messages="$errors->get('profile_description')" class="mt-2" />
      </label>
      <label class="block mb-2 text-white">
        Profile Image :
        <x-text-input wire:model="profile_image" class="block mt-1 w-full p-2.5" type="file" autofocus placeholder="Your profile image"/>
        <x-input-error :messages="$errors->get('profile_image')" class="mt-2" />
      </label>
    </x-slot>
    <x-slot name="footer">
      <div class="flex gap-2 justify-center">
        <x-danger-button wire:click="$set('showEditProfileModal', false)" wire:loading.attr="disabled"> Cancel </x-danger-button>
        <x-primary-button wire:click="editProfile" wire:loading.attr="disabled">Save Changes</x-primary-button>
      </div>
    </x-slot>
  </x-modal.dialog>

</div>
