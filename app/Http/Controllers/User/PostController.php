<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        return view('user.posts.index');
    }

    function detail(){
        return view('user.posts.detail');
    }
}
