<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class SellerProductCreate extends Component
{
    use WithFileUploads;

    public $game_name;
    public $price;
    public $product_name;
    public $product_image;

    protected $rules = [
        'product_name' => 'required|min:8',
        'product_image' => 'required|max:2048',
    ];

    public function render()
    {
        return view('livewire.seller-product-create');
    }

    public function save()
    {
        $this->validate();

        $fileName = $this->product_image->store('photo', 'public');

        $seller = Auth::user()->seller;

        $data = $seller->product()->create([
            'game_name' => $this->game_name,
            'price' => $this->price,
            'product_name' => $this->product_name,
            'product_image' => $fileName,
        ]);

        $this->resetInput();

        $this->emit('productStored', $data);
    }

    private function resetInput()
    {
        $this->game_name = null;
        $this->product_name = null;
        $this->product_image = null;
        $this->price = null;
    }
}
