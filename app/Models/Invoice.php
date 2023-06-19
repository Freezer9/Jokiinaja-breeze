<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $primaryKey = 'invoice_id';

    protected $fillable = ['transaction_id', 'transaction_status', 'total_amount', 'invoice_name'];

    public function getRouteKeyName()
    {
        return 'invoice_name';
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
