<?php

namespace App\Http\Controllers;

use App\HomeElement;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function index(){
        $homeElement = HomeElement::first();
        return view('blogPage',compact('homElement'));
    }
}
