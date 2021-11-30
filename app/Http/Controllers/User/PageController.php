<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function about_us(){
        return view('user.pages.about_us');
    }

    function contact(){
        return view('user.pages.contact');
    }
}
