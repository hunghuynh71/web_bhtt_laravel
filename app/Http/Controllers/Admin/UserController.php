<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware(function($request,$next){
            session(['mod_active'=>'user']);
            return $next($request);
        });
    }

    function index(){
        return view('admin.users.index');
    }

    function add(){
        return view('admin.users.add');
    }
}
