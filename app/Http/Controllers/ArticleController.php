<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categorie;
use App\Commentaire;
use App\Footer;
use App\HomeElement;
use App\Quote;
use App\Tag;
use App\TagArticle;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.viewArticle',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('article.addArticle',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'titre' => 'required|max:150',
            'texte' => 'required',
        ]);
          
        $article = new Article();
        $image = $request->file('image');
        $newName = Storage::disk('public')->put('',$image);
        $article->image = $newName ;
        $article->titre = $request->input('titre');
        $article->texte = $request->input('texte');

        $article->accepted = false;
        $article->categorie_id = $request->input('categorie_id');
        $article->user_id = Auth::id();
        $article->save();

        if($request->has('tag')){

            foreach ($request->tag as $tag) {
               Tag::find($tag)->articles()->attach($article->id);
               $article->tags()->attach($tag);
            }
        }
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $homeElement = HomeElement::first();
        $commentaires = Commentaire::where('article_id',$article->id)->get();
        $footer = Footer::first();
        $tags = Tag::inRandomOrder()->take(9)->get();
        $categories = Categorie::inRandomOrder()->take(6)->get();
        $quote = Quote::first();
        return view('article.showArticle',compact('homeElement','footer','tags','categories','article','quote','commentaires'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Categorie::all();
        $tags = Tag::all();
        $articletag = TagArticle::where('article_id',$article->id)->get();
        return view('article.editArticle',compact('article','categories','tags','articletag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'image' => 'sometimes|image',
            'titre' => 'required|max:150',
            'texte' => 'required|',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $newName = Storage::disk('public')->put('',$image);
            Storage::disk('public')->delete($article->image);
            $article->image = $newName ;
        }
        
        if (Auth::id()==2) {
            if($request->input('accepted')){
                $article->accepted = true;
            }else{ 
                $article->accepted = false;
            }        
        }

        $article->titre = $request->input('titre');
        $article->texte = $request->input('texte');
        $article->categorie_id = $request->input('categorie_id');
        $article->user_id = Auth::id();
        $article->save();

        if($request->has('tag')){
            $article->tags()->detach();
            foreach ($request->tag as $tag) {
               Tag::find($tag)->articles()->attach($article->id);
               $article->tags()->attach($tag);
            }
        }
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::disk('public')->delete($article->img);
        $articleTags = TagArticle::all()->where('article_id','=',$article->id);
        foreach($articleTags as $tag){
            $tag->delete();
        }
        $article->delete();
        return redirect()->route('article.index');
    }

    public function search(Request $request){
        
        $search = $request->input('search');
        $users = User::where('id','>',1)->where('name','LIKE', '%'.$search.'%')->get();
       

        return view('viewUsers',compact('users','search'));
    }
}
