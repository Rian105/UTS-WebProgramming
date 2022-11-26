<?php

use App\Models\books;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublishController;
use App\Models\book_category;
use App\Models\categories;
use App\Models\publishers;


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
    return view('Home', [
        "title" => "Home",
        "page_container" => "Book List",
        "Home" => books::all()
    ]);
});

//Single Post for Home Display

Route::get('Home/{id}', [BookController::class, 'index']);

Route::get('/CategoryFantasy{id}', [BookController::class, 'CategoryFantasy']);

Route::get('/CategoryFiction{id}', [BookController::class, 'CategoryFiction']);

Route::get('/Publisher', [BookController::class, 'Publisher']);

Route::get('/PublisherHarry{id}', [PublishController::class, 'PublisherHarry']);

Route::get('/PublisherTokyo{id}', [PublishController::class, 'PublisherTokyo']);

Route::get('/Contact', [BookController::class, 'Contact']);