<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $articles;


    public function __construct()
    {
        $this->articles = [
            1 => ['id' => 1, 'title' => 'Articolo #1', 'category' => 'PHP', 'visible' => true],
            2 => ['id' => 2, 'title' => 'Articolo #2', 'category' => 'JS', 'visible' => true],
            3 => ['id' => 3, 'title' => 'Articolo #3', 'category' => 'Java', 'visible' => true],
            4 => ['id' => 4, 'title' => 'Articolo #4', 'category' => 'CSS', 'visible' => true],
        ];
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function articles()
    {
        return view('pages.articles', [
            'articles' => $this->articles,
        ]);
    }

    public function article($id)
    {
        if ((! array_key_exists($id, $this->articles)) || (! $this->articles[$id]['visible'])) {
            abort(404);
        }

        return view('pages.article', [
            'title' => $this->articles[$id]['title'],
            'category' => $this->articles[$id]['category'],
        ]);
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }

    
}
