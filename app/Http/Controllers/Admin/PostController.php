<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function __construct()
    {
        $this->middleware(function($request,$next){
            session(['mod_active'=>'post']);
            return $next($request);
        });
    }

    function index(){
        return view('admin.posts.index');
    }

    function add(){
        return view('admin.posts.add');
    }
}
