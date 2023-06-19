<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

    protected $fillable = ['seller_id', 'game_name', 'product_name', 'price', 'updated_at'];

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id', 'seller_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'product_id', 'product_id');
    }
}
