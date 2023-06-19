<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke()
    {
        $seller = Auth::user()->seller;

        return view('seller.main', compact(['seller']));
    }
}
