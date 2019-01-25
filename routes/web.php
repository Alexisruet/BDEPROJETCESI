<?php

use App\Model\Idea;
use App\Model\Product;
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
    return view('/home');
});

Route::get('/mentionslgl', function () {
    return view('page/mentionslgl');
});

Route::get('/shop', function () {
    return view('page/shop');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ideas', 'IdeaController@showIdeas')->name('showIdea');
Route::get('/events', 'EventController@showEvents')->name('showEvent');
Route::get('/home', 'HomeController@index')->name('connected');
// Route::post('/eventss', 'EventController@commenter')->name('commenter');
Route::get('/contact', 'GestionController@contact')->name('contact');




Route::middleware(['auth'])->group(function(){
    Route::get('/idea', 'IdeaController@index')->name("idea");
    Route::post('/idea', 'IdeaController@create')->name('createIdea');
    Route::post('/events', 'EventController@inscrire')->name('inscrire');
    Route::post('/eventss', 'EventController@commenter')->name('commenter');


});

Route::middleware(['salarie'])->group(function(){
    Route::get('/report', 'ReportController@index')->name('report');
});

Route::middleware(['admin'])->group(function(){
		Route::get('/event', 'EventController@index')->name('event');
		Route::post('/event', 'EventController@create')->name('createEvent');
    Route::get('/report', 'ReportController@indexAdmin')->name('report');
    Route::get('/gestion', 'GestionController@index')->name('gestion');
    Route::get('/product', 'ProductController@index')->name("product");
    Route::post('/addproduct', 'ProductController@create')->name('addproduct');
});
