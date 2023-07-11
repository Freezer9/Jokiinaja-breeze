@php
    $profileImage = $seller->profile_image;
    $defaultImage = 'defaultprofile.png'; // Nama file gambar default
    $imagePath = 'storage/photo/' . ($profileImage ? $profileImage : $defaultImage);
@endphp

<div class="bg-tridary w-3/4 shadow-md rounded-lg p-6 ml-24">
  <div class="flex items-center mb-4">
    <img src="{{ asset($imagePath) }}" alt="Seller Profile" class="w-16 h-16 rounded-full">
    <div class="ml-4">
      <h2 class="text-2xl font-semibold">{{ $seller->profile_name }}</h2>
      <p class="text-slate-50">{{ $seller->user_type }}</p>
    </div>
  </div>
  <div class="border-t border-gray-300 pt-4">
    <h3 class="text-xl font-semibold mb-2">Profil Penjual</h3>
    <p class="text-slate-50">{{ $seller->profile_description }}</p>
  </div>
</div>