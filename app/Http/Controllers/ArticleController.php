<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
   public function create()
    {
        return view('articles.create');
    
    }
    public function store (Request $request)
{
   

    Article::create ([
        'title' => $request->title,
        'category' => $request->category,
        'body' => $request->body,
        
    ]);


    return redirect()->back()->with(['success'=> 'Articolo creato correttamente!']);


}
   
}
