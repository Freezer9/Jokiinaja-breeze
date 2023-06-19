<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Invoice;

class ContactController extends Controller
{
    public function check(ContactRequest $request)
    {
        $invoiceName = $request->input('invoice_name');
        $invoiceExists = Invoice::where('invoice_name', $invoiceName)->exists();

        if ($invoiceExists) {
            Contact::create($request->all());
            return $this->show($invoiceName);
        } else {
            return view('guest.contact', ['invoiceCondition' => false]);
        }
    }

    public function show($invoiceName)
    {
        $invoice = Invoice::where('invoice_name', $invoiceName)->first();

        return view('guest.contact', ['invoice' => $invoice, 'invoiceCondition' => true]);
    }
}
