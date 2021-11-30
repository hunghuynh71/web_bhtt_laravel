<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view('user.products.index');
    }

    function detail(){
        return view('user.products.detail');
    }
}
