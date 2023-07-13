<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class SellerProfile extends Component
{
    use WithFileUploads;

    public $showEditProfileModal = false;
    public $seller, $profile_name, $full_name, $address, $gender, $dob, $profile_description, $profile_image;

    protected function rules(): array
    {
        return [
            'profile_name' => 'required|min:5|max:15|unique:sellers,profile_name,' . auth()->id() . ',user_id',
            'full_name' => 'required|min:5|max:20',
            'address' => 'required|min:8',
            'gender' => 'required|min:3',
            'dob' => 'required',
            'profile_description' => 'required|min:8',
            // 'profile_image' => 'sometimes|file|image|mimes:png,jpg,jpeg|max:2048',
        ];
    }

    public function render()
    {
        $user = Auth::user();

        return view('livewire.seller-profile', compact('user'));
    }

    public function confirmEditProfile(User $user)
    {
        $this->showEditProfileModal = true;
        $this->seller = $user->seller;
        $this->profile_name = $this->seller->profile_name;
        $this->full_name = $this->seller->full_name;
        $this->address = $this->seller->address;
        $this->gender = $this->seller->gender;
        $this->dob = $this->seller->dob;
        $this->profile_description = $this->seller->profile_description;
        $this->profile_image = $this->seller->profile_image;
    }

    public function editProfile()
    {
        $this->validate();

        // dd($this->profile_name);

        $this->seller->update([
            'profile_name' => $this->profile_name,
            'full_name' => $this->full_name,
            'address' => $this->address,
            'gender' => $this->gender,
            'dob' => $this->dob,
            'profile_description' => $this->profile_description,
            // 'profile_image' => $this->profile_image,
        ]);

        $this->showEditProfileModal = false;

        session()->flash('profile_message', 'Your profile has been updated!');
    }
}
