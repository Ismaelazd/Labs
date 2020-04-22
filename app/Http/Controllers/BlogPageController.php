<?php

namespace App\Http\Controllers;

use App\Footer;
use App\HomeElement;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function index(){
        $homeElement = HomeElement::first();
        $footer = Footer::first();
        return view('blogPage',compact('homeElement','footer'));
    }
}
