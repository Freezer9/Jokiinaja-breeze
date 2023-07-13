<?php

namespace App\Http\Controllers;

use App\Models\Product;

class GameController extends Controller
{
    public function index($game_type, $game_name)
    {
        return view('guest.products', [
            'game_type' => $game_type,
            'game_name' => $game_name,
        ]);
    }
}
