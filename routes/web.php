<?php

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

Route::get('/idea', function () {
    return view('page/createidea');
});

Route::get('/ideas', function () {
    return view('page/idea');
});

Auth::routes();


Route::get('/ideas', 'IdeaBoxController@index')->name('ideas');
Route::get('/home', 'HomeController@index')->name('connected');
Route::post('/idea', 'IdeaBoxController@create')->name('createIdea');


Route::middleware(['admin'])->group(function(){
    Route::get('/admin/gestion', 'GestionController@index')->name('gestion');
    Route::post('/admin/addEvent', 'EventController@create')->name('addEvent');
    Route::post('/admin/addProduct', 'ProductController@create')->name('addProduct');

});

Route::middleware(['salariés'])->group(function(){
});

Route::middleware(['étudiants'])->group(function(){
    Route::post('/étudiants/addIdea', 'IdeaController@create')->name('addIdea');

});


   

