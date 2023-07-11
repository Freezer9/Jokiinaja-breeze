<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $primaryKey = 'seller_id';

    protected $fillable = ['user_id', 'full_name', 'phone_number', 'address', 'profile_name', 'profile_description', 'gender', 'dob', 'user_type', 'profile_image'];

    public function product()
    {
        return $this->hasMany(Product::class, 'seller_id', 'seller_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function chat()
    {
        return $this->hasMany(Chat::class, 'chat_id', 'chat_id');
    }
}
