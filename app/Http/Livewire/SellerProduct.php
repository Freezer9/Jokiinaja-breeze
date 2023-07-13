<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class SellerProduct extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $product, $game_name, $product_name, $price, $product_image;

    public $showEditModal = false;
    public $showDeleteModal = false;
    public $showAddModal = false;

    protected $paginationTheme = 'tailwind';

    protected $listeners = [
        'productStored' => 'handleStored',
    ];

    protected $rules = [
        'price' => 'required',
        'product_name' => 'required|min:8',
        'product_image' => 'sometimes|max:2048',
    ];

    public function render()
    {
        $products = Auth::user()->seller->product()->latest()->paginate(8);

        return view('livewire.seller-product', compact(['products']));
    }

    public function handleStored($data)
    {
        // dd($data);
        session()->flash('message', 'Your product has been created!');
    }

    public function confirmAddProduct()
    {
        $this->resetInput();
        $this->showAddModal = true;
    }

    public function AddProduct()
    {
        $this->validate();

        // dd(auth()->user()->seller->product());

        auth()->user()->seller->product()->create([
            'game_name' => $this->game_name,
            'price' => $this->price,
            'product_name' => $this->product_name,
            'product_image' => $this->product_image,
        ]);

        $this->showAddModal = false;
        session()->flash('message', 'Your product has been created!');
    }

    public function confirmEditProduct(Product $product)
    {
        $this->showEditModal = true;
        $this->product = $product;
        $this->game_name = $product->game_name;
        $this->product_name = $product->product_name;
        $this->price = $product->price;
        $this->product_image = $product->product_image;
    }

    public function updateProduct()
    {
        $this->validate();

        // dd($this->product_image);

        $this->product->update([
            'game_name' => $this->game_name,
            'product_name' => $this->product_name,
            'price' => $this->price,
            'product_image' => $this->product_image,
        ]);

        $this->showEditModal = false;

        session()->flash('message', 'Your product has been updated!');
    }

    public function confirmDeleteProduct($productId)
    {
        // dd($productId);
        $this->showDeleteModal = $productId;
    }

    public function deleteProduct(Product $product)
    {
        // dd($product);
        $product->delete();
        $this->showDeleteModal = false;
        session()->flash('message', 'Your product has been deleted!');
    }

    public function resetInput()
    {
        $this->product = null;
        $this->game_name = null;
        $this->product_name = null;
        $this->price = null;
        $this->product_image = null;
    }
}
