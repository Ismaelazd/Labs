<?php

namespace App\Http\Controllers;

use App\Service;
use App\HomeElement;
use App\About;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        
        $services = Service::inRandomOrder()->take(9)->get();
        $servicesTrois = Service::latest('id')->take(3)->get();
        $homeElement = HomeElement::first();
        $about = About::first();
        return view('welcome',compact('servicesTrois','services','homeElement','about'));
    }
}
