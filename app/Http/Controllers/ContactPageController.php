<?php

namespace App\Http\Controllers;

use App\Contact;
use App\HomeElement;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index(){
        $homeElement = HomeElement::first();
        $contact = Contact::first();
        return view('contactPage',compact('homeElement','contact'));
    }
}
