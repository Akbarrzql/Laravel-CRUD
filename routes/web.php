<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublisherController;
use App\Models\article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home',[
        'articles' => article::all(),
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::group(["prefix"  => "/article" ], function(){
    Route::get('/allarticle', [ArticleController::class, 'index']);
    Route::get('/detailarticle/{article:tittle}', [ArticleController::class, 'detail']);
    Route::get('/editarticle/{article}', [ArticleController::class, 'edit']);
    Route::post('/update/{article}', [ArticleController::class, 'update']);
    Route::get('/createarticle', [ArticleController::class, 'create']);
    Route::post('/add', [ArticleController::class, 'publish']);
    Route::delete('/delete/{article}', [ArticleController::class, 'delete']);
});

Route::group(["prefix"  => "/publisher" ], function(){
    Route::get('/allpublisher', [PublisherController::class, 'index']);
    Route::get('/detail/{publisher:name_publisher}', [PublisherController::class, 'detail']);
});
