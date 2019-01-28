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

Route::get('/shop', [
    'uses' => 'ProductController@showProducts',
    'as' => 'product.index'
]);

Route::get('/remove/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/add-to-cart/{id}', [
    'uses'=>'ProductController@getAddToCart',
    'as'=> 'product.addToCart'
]);

Route::get('/shop', function () {
    return view('page/shop');
});


Route::get('/mentionslgl', function () {
    return view('page/mentionslgl');
});

Route::get('/shop', function () {
    return view('page/shop');
});
Route::get('/send', 'MailController@send')->name('send');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ideas', 'IdeaController@showIdeas')->name('showIdea');
Route::get('/home', 'HomeController@index')->name('connected');
Route::get('/eventss/{id}', 'EventController@commenter')->name('commenter');
Route::get('/contact', 'GestionController@contact')->name('contact');
//Route::get('/events/{id}', 'EventController@inscrire');

Route::get('/futurevent','EventController@futurevent');
Route::get('/pastevent','EventController@pastevent');
Route::get('/send', 'MailController@send')->name('send');



Route::get('/product', 'ProductController@index')->name("product");
Route::post('/addproduct', 'ProductController@create')->name('addproduct');
Route::get('/shop', 'ProductController@showProducts')->name('showProduct');

Route::middleware(['auth'])->group(function(){
    Route::get('/idea', 'IdeaController@index')->name("idea");
    Route::post('/idea', 'IdeaController@create')->name('createIdea');
    Route::post('/events', 'EventController@inscrire')->name('inscrire');
    Route::post('/eventss', 'EventController@commenter')->name('commenter');
    Route::get('/futurevent','EventController@futurevent');
    Route::get('/pastevent','EventController@pastevent');

    //events/{{ $event -> id}}"


});

Route::middleware(['salarie'])->group(function(){
});

Route::middleware(['admin'])->group(function(){
		Route::get('/event', 'EventController@index')->name('event');
		Route::post('/event', 'EventController@create')->name('createEvent');
    Route::get('/gestion', 'GestionController@index')->name('gestion');
    Route::get('/delIdea/{id}', 'IdeaController@delIdea');
		Route::get('/idToEvent/{id}', 'IdeaController@idToEvent');
  //  Route::get('/product', 'ProductController@index')->name("product");
  //  Route::post('/addproduct', 'ProductController@create')->name('addproduct');
});
