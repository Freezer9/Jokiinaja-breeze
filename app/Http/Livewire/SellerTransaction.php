<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SellerTransaction extends Component
{
    public function render()
    {
        $transactions = Auth::user()->seller->product()->with('transaction')->get();

        return view('livewire.seller-transaction', compact(['transactions']));
    }
}
