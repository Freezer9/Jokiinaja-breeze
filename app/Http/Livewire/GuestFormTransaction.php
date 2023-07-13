<?php

namespace App\Http\Livewire;

use App\Helpers\InvoiceHelper;
use App\Models\Invoice;
use App\Models\Transaction;
use Livewire\Component;

class GuestFormTransaction extends Component
{

    public $product, $seller, $invoice;
    public $email, $nickname, $password, $notes, $phone_number, $login_via, $payment_gateway, $total_price;

    public $showSummaryModal = false;
    public $showInvoiceModal = false;

    protected $rules = [
        'email' => 'required|email',
        'nickname' => 'required|min:3',
        'password' => 'required|min:5',
        'notes' => 'required|min:8',
        'phone_number' => 'required|min:8|numeric',
        'login_via' => 'required',
        'payment_gateway' => 'required',
    ];

    public function render()
    {
        return view('livewire.guest-form-transaction');
    }

    public function confirmAddTransaction()
    {
        $this->validate();

        $this->showSummaryModal = true;

        $this->total_price = $this->product->price;
    }

    public function confirmTransaction()
    {
        $this->validate();

        $transaction = Transaction::create([
            'email' => $this->email,
            'nickname' => $this->nickname,
            'password' => bcrypt($this->password),
            'notes' => $this->notes,
            'phone_number' => $this->phone_number,
            'login_via' => $this->login_via,
            'payment_id' => $this->payment_gateway,
            'product_id' => $this->product->product_id,
        ]);

        $invoice = Invoice::create([
            'transaction_id' => $transaction->transaction_id,
            'transaction_status' => 'Belum Dibayar',
            'total_amount' => $this->product->price,
            'invoice_name' => InvoiceHelper::generateInvoiceNumber($this->product->game_name),
        ]);

        $this->invoice = Invoice::where('invoice_id', $invoice->invoice_id)->first();

        $this->showSummaryModal = false;
        $this->showInvoiceModal = true;
    }

    public function checkInvoice()
    {
        $this->showInvoiceModal = false;

        return redirect('/checkinvoice');
    }

    public function okayInvoice()
    {
        $this->showInvoiceModal = false;

        return redirect('/index');
    }
}
