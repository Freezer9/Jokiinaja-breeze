<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use LivewireUI\Modal\ModalComponent;

class GuestProduct extends Component
{
    use WithPagination;

    public $game_name;
    public $paginate = 8;
    public $search;
    public $searchOption;

    protected $updatesQueryString = ['search', 'searchOption'];

    public function mount()
    {
        $gameName = str_replace("+", " ", $this->game_name);

        $this->game_name = $gameName;
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        $query = Product::where('game_name', $this->game_name);

        if ($this->searchOption === 'Latest') {
            $query->latest();
        } elseif ($this->searchOption === 'Oldest') {
            $query->oldest();
        }

        $products = $query->paginate($this->paginate);

        $productSearch = $query
            ->where('product_name', 'like', '%' . $this->search . '%')
            ->paginate($this->paginate);

        return view('livewire.guest-product', [
            'game_name' => $this->game_name,
            'products' => $this->search === null ? $products : $productSearch,
        ]);
    }
}
