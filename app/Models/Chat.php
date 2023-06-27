<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $primaryKey = 'chat_id';

    protected $fillable = ['message'];

    public function transaction()
    {
        return $this->belongsTo('transactions', 'transaction_id', 'transaction_id');
    }

    public function seller()
    {
        return $this->belongsTo('sellers', 'seller_id', 'seller_id');
    }
}
