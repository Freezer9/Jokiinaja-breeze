<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index($game_type, $game_name)
    {
        $products = Product::where('game_name', $game_name)->paginate(8);
        return view('guest.products', [
            'game_type' => $game_type,
            'game_name' => $game_name,
            'products' => $products,
        ]);
    }
}
