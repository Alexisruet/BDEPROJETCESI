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

Route::get('/idea', function () {
    return view('page/idea');
});

Auth::routes();

Route::get('/tets', 'ProductController@index')->name("product");
Route::post('/addproduct', 'ProductController@create')->name('addproduct');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ideas', 'IdeaController@showIdeas')->name('showIdea');
Route::get('/events', 'EventController@showEvents')->name('showEvent');
Route::get('/home', 'HomeController@index')->name('connected');


Route::middleware(['auth'])->group(function(){
    Route::get('/idea', 'IdeaController@index')->name("idea");
    Route::post('/idea', 'IdeaController@create')->name('createIdea');
    Route::get('/event', 'EventController@index')->name('event');
    Route::post('/event', 'EventController@create')->name('createEvent');

});

Route::middleware(['salarie'])->group(function(){
    Route::get('/report', 'ReportController@index')->name('report');
});

Route::middleware(['admin'])->group(function(){
    Route::get('/gestion', 'GestionController@index')->name('gestion');
    Route::get('/report', 'ReportController@index')->name('report');
    Route::post('/addEvent', 'EventController@index')->name('addEvent');
    Route::post('/addProduct', 'ProductController@create')->name('addProduct');

});
