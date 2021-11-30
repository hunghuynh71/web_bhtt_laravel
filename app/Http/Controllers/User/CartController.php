<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function show(){
        return view('user.carts.show');
    }

    function checkout(){
        return view('user.carts.checkout');
    }
}
