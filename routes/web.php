<?php

use App\IdeaBox;
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
    return view('template');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('connected');

Route::middleware(['auth'])->group(function(){
    Route::get('/idea', 'IdeaBoxController@index')->name("idea");
    Route::post('/idea', 'IdeaBoxController@create')->name('createIdea');
    Route::get('/ideas', 'IdeaBoxController@showIdeas')->name('showIdea');

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


   

