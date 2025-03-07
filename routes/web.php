<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;


Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('/articoli', [PageController::class, 'articles'])->name('articles');

Route::get('/articoli/{id}', [PageController::class, 'article'])->name('article');

Route::get('/chi-siamo', [PageController::class, 'aboutUs'])->name('aboutUs');




/* contatti */

Route::get('/contatti', [ContactController::class,'form'])->name('contacts');

/* form */
Route::post('/contatti',[ContactController::class, 'handle'])->name('contacts.receive');

/*  */

Route::get('/account/articles/create',[ArticleController::class,'create'])->name('article_create');
Route::post('/account/articles/store',[ArticleController::class,'create'])->name('article_store');

