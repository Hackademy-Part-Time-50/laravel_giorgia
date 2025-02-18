<?php

use Illuminate\Support\Facades\Route;


Route::get('/benvenuti', function () {

    return view('welcome', [
        'benvenuto' => 'Benvenuto',

    ]);
})->name('home');



/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/articoli', function () {

        $articles=[
        ['title' =>'Articolo 1'],
        ['title' =>'Articolo 2'],
        ['title' =>'Articolo 3'],
        ];

        $articles=[];

        return view('pages.articles', 
        ['articolo' => 'Ecco gli articoli:', 'articles'=>$articles],
       
    /* compact('articles') */);


})->name('articoliDisponibili');

/* Route::get('articoli', function () {
    return view('pages.articles');
}); */


Route::get('chi-siamo', function () {

    return view('pages.about-us', [
        'chi_siamo' => 'Chi siamo',

    ]);
})->name('aboutUs');



/* Route::get('chi-siamo', function () {
    return view('pages.about-us');
}); */



Route::get('contatti', function () {



    return view('pages.contacts', [
        'title' => 'Contatti',


    ]);
})->name('contatto');






Route::get('nuovo-articolo', function () {
    return view('pages.newarticles', [
        'title_nuovo' => 'Nuovo articolo',


    ]);
})->name('nuovoArticolo');
