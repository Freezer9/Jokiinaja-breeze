<?php

namespace App\Http\Controllers;

use App\Helpers\InvoiceHelper;
use App\Http\Requests\FormTransaksiRequest;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Seller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class FormTransaksiController extends Controller
{
    public function index($sellerId, $productId)
    {
        $product = Product::where('product_id', $productId)->first();
        $seller = Seller::where('seller_id', $sellerId)->first();

        return view('guest.order', compact(['product', 'seller']));
    }

    public function store(FormTransaksiRequest $request, $productId)
    {
        $transaction = Transaction::create([
            'email' => $request->email,
            'nickname' => $request->nickname,
            'password' => bcrypt($request->password),
            'notes' => $request->notes,
            'phone_number' => $request->phone_number,
            'login_via' => $request->login_via,
            'product_id' => $productId,
            'payment_id' => $request->payment_gateway,
        ]);

        $product = Product::where('product_id', $productId)->first();

        Invoice::create([
            'transaction_id' => $transaction->transaction_id,
            'transaction_status' => 'Belum Dibayar',
            'total_amount' => $product->price,
            'invoice_name' => InvoiceHelper::generateInvoiceNumber($product->game_name),
        ]);

        return redirect('/index');
    }
}
