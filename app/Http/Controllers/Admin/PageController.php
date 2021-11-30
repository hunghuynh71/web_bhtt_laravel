<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function __construct()
    {
        $this->middleware(function($request,$next){
            session(['mod_active'=>'page']);
            return $next($request);
        });
    }

    function index(){
        return view('admin.pages.index');
    }

    function add(){
        return view('admin.pages.add');
    }
}
