<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GameTypeController extends Controller
{
    public function __invoke($game_type)
    {
        return view('guest.game', [
            'game_type' => $game_type,
        ]);
    }
}
