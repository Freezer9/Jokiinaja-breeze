<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class CheckInvoiceController extends Controller
{
    public function check(Request $request)
    {
        $invoiceName = $request->input('invoice_name');
        $invoiceExists = Invoice::where('invoice_name', $invoiceName)->exists();

        if ($invoiceExists) {
            return redirect()->route('invoice.show', ['invoice_name' => $invoiceName]);
        } else {
            return view('guest.checkinvoice', ['invoiceCondition' => false]);
        }
    }

    public function show($invoiceName)
    {
        $invoice = Invoice::where('invoice_name', $invoiceName)->first();
        $invoiceCondition = true;

        return view('guest.invoice', compact('invoice', 'invoiceCondition'));
    }
}
