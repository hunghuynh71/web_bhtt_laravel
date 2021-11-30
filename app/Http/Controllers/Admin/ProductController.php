<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware(function($request,$next){
            session(['mod_active'=>'product']);
            return $next($request);
        });
    }

    function index(){
        return view('admin.products.index');
    }

    function add(){
        return view('admin.products.add');
    }
}
