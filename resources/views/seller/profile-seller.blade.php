<div class="mb-5">
  <div class="flex justify-center items-center w-full content-section md:my-0">
    <div class="flex flex-wrap justify-center items-center border bg-tridary rounded-xl w-11/12 md:w-9/12">
      <div class="md:w-6/12 w-full flex justify-end items-center h-full overflow-hidden">
        <img src="/build/img/fifa23.jpg" alt="profile" class="sm:rounded-s-xl sm:rounded-none rounded-t-xl aspect-square inset-0 w-full h-full object-cover object-center">
      </div>
      <div class="md:w-6/12 w-full flex flex-col justify-center items-start h-full md:px-10 px-5 py-3 md:py-0 ">
        <h3 class="<?php echo (isset($_GET['edit'])) ? 'hidden ' : 'block '; ?> text-2xl">Hi, <span class="font-semibold">{{ $seller->profile_name ?? 'there! Set up your Profile' }}</span></h3>
        <form action="" method="post" class="m-0 p-0 w-full" enctype="multipart/form-data">
          <hr class="border-0 h-[1px] w-full bg-gray-200 my-3 <?php echo (isset($_GET['edit'])) ? 'hidden ' : 'block '; ?>" />
          <table class="text-sm">
            <tr>
              <td colspan="2">
                <p class="font-semibold text-accent mb-2 text-xl text-yellow-500">Personal Biodata</p>
              </td>
            </tr>
            <tr>
              <td class="w-1/2 font-medium"> Full Name </td>
              <td> {{ $seller->full_name ?? '-' }} </td>
            </tr>
            <tr>
              <td class="font-medium"> Address </td>
              <td>{{ $seller->address ?? '-' }} </td>
            </tr>
            <tr>
              <td class="font-medium"> Gender </td>
              <td>{{ $seller->gender ?? '-'}} </td>
            </tr>
            <tr>
              <td class="font-medium"> Date of Birth </td>
              <td>{{ $seller->dob ?? '-' }}</td>
            </tr>
            <tr>
              <td colspan="2">
                <p class="font-semibold pt-5 text-accent mb-2 text-xl text-red-500">Account Information</p>
              </td>
            </tr>
            <tr>
              <td class="font-medium"> Phone Number </td>
              <td>{{ $seller->phone_number ?? '-' }}</td>
            </tr>
            <tr>
              <td class="font-medium"> Email </td>
              <td>{{ $user->email ?? '-' }}</td>
            </tr>
            <tr>
              <td class="font-medium"> Description </td>
              <td>{{ $seller->profile_description ?? '-' }}</td>
            </tr>
            <tr>
              <td class="font-medium"> User Type </td>
              <td>{{ $seller->user_type ?? '-' }}</td>
            </tr>
          </table>
          <div class="flex justify-end items-center w-full mt-6">
            <div class="flex flex-col items-start justify-center pr-4  <?php echo (isset($_GET['edit'])) ? 'block' : 'hidden'; ?>">
              <input type="file" name="file" class="block w-full text-sm text-gray-900 file:mr-4 file:py-2 file:px-4 file:rounded file:border-[.5px] file:border-gray-300 file:text-sm file:bg-gray-50 file:text-text-gray-900 " />
            </div>
            <div class="flex">
              <a class="text-sm font-medium px-5 py-2 border border-primbuttn rounded text-primbuttn mr-3 <?php echo (isset($_GET['edit'])) ? 'block' : 'hidden'; ?>" href="">Cancel</a>
              <button class="text-sm font-medium px-5 py-2 border bg-primbuttn rounded text-secondary <?php echo (isset($_GET['edit'])) ? 'block' : 'hidden'; ?>" type="submit">Update</button>
              <a class="text-sm font-medium px-5 py-2 border border-primbuttn rounded text-primbuttn <?php echo (isset($_GET['edit'])) ? 'hidden' : 'block'; ?>" href="">Edit Profile</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
