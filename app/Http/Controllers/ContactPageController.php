<?php

namespace App\Http\Controllers;

use App\HomeElement;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index(){
        $homeElement = HomeElement::first();
        return view('contactPage',compact('homeElement'));
    }
}
