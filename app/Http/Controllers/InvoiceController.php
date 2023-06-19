<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use App\Models\Seller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoice = Auth::user()->seller->product->flatMap->transaction;

        return view('seller.transaction', [
            'result' => $invoice,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    }


    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        // $product = Product::where('product_id', $id)->first(); // Digunakan saat where yg dicari selain ID
        // $product = Product::find($id);
        // return view('seller.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice, $transactionStatus)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return back();
    }
}
