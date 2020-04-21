<?php

namespace App\Http\Controllers;

use App\HomeElement;
use Illuminate\Http\Request;
USE App\Service;
class ServicePageController extends Controller
{
    public function index(){

        $services = Service::latest('id')->paginate(9);
        $homeElement = HomeElement::first();
        return view('servicePage',compact('services','homeElement'));
    }
}
