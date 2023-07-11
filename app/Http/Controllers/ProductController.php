<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Seller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Auth::user()->seller->product()->paginate(8);
        $seller = Auth::user()->seller;
        $user = Auth::user();

        return view('seller.product', compact(['products', 'user', 'seller']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $seller = Auth::user()->seller;

        $seller->product()->create([
            'game_name' => $request->game_name,
            'price' => $request->price,
            'product_name' => $request->product_name
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('seller.product-edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $file = $request->file('product_image');
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/photo', $fileName);

        $product->update([
            'game_name' => $request->input('product_game_name'),
            'product_name' => $request->input('product_name'),
            'product_image' => $fileName,
            'price' => $request->input('product_price'),
            'updated_at' => Carbon::now(),
        ]);

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }
}
