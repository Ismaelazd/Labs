<?php

namespace App\Http\Controllers;

use App\Service;
use App\HomeElement;
use App\About;
use App\Contact;
use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        
        $services = Service::inRandomOrder()->take(9)->get();
        $servicesTrois = Service::latest('id')->take(3)->get();
        $homeElement = HomeElement::first();
        $about = About::first();
        $CEO = User::where('role_id','=', 3)->first();
        $randomUsers = User::inRandomOrder()->where('role_id','!=', 3)->where('role_id','!=', 1)->get();
        $contact = Contact::first();
        return view('welcome',compact('servicesTrois','services','homeElement','about','CEO','randomUsers','contact'));
    }
}
