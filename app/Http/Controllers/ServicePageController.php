<?php

namespace App\Http\Controllers;

use App\Article;
use App\Contact;
use App\Footer;
use App\HomeElement;
use Illuminate\Http\Request;
USE App\Service;
class ServicePageController extends Controller
{
    public function index(){

        $services = Service::latest('id')->paginate(9);
        $homeElement = HomeElement::first();
        $contact = Contact::first();
        $footer = Footer::first();
        $lastSix = Service::latest('id')->take(6)->get();
        $titreFeature = HomeElement::latest('id')->first();
        $articles = Article::latest('id')->take(3)->get();
        return view('servicePage',compact('services','homeElement','footer','contact','lastSix','titreFeature','articles'));
    }
}
