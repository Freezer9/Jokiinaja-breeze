<?php

namespace App\Http\Controllers;

use App\Http\Requests\SellerRequest;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function edit(Seller $seller, $sellerId)
    {
        $myseller = $seller->where('seller_id', $sellerId)->first();

        return view('seller.seller-edit', ['seller' => $myseller]);
    }

    public function update(SellerRequest $request)
    {
        $seller = Auth::user()->seller;

        $seller->update([
            'profile_name' => $request->input('profile_name'),
            'full_name' => $request->input('full_name'),
            'address' => $request->input('address'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'profile_description' => $request->input('profile_description'),
        ]);

        return redirect()->route('products.index');
    }
}
