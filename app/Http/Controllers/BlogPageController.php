<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categorie;
use App\Footer;
use App\HomeElement;
use App\Quote;
use App\Tag;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function index(){
        $homeElement = HomeElement::first();
        $footer = Footer::first();
        $articles = Article::where('accepted',true)->latest('id')->paginate(3);
        $tags = Tag::inRandomOrder()->take(9)->get();
        $categories = Categorie::inRandomOrder()->take(6)->get();
        $quote = Quote::first();
        return view('blogPage',compact('homeElement','footer','articles','tags','categories','quote'));
    }
}
 