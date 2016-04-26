<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Api Routes

Route::any('api/orange', 'ApiController@orangeData');
Route::any('api/orange-vue', 'ApiController@orangeVueData');

// Orange Routes

Route::resource('orange', 'OrangeController');
// Api Routes

Route::any('api/fruit-basket', 'ApiController@fruitBasketData');
Route::any('api/fruit-basket-vue', 'ApiController@fruitBasketVueData');

// FruitBasket Routes

Route::resource('fruit-basket', 'FruitBasketController');
// Api Routes

Route::any('api/paper-plates', 'ApiController@paperPlatesData');
Route::any('api/paper-plates-vue', 'ApiController@paperPlatesVueData');

// PaperPlates Routes

Route::resource('paper-plates', 'PaperPlatesController');
// Api Routes

Route::any('api/groove-hammer', 'ApiController@grooveHammerData');
Route::any('api/groove-hammer-vue', 'ApiController@grooveHammerVueData');

// GrooveHammer Routes

Route::resource('groove-hammer', 'GrooveHammerController');
// Api Routes

Route::any('api/groove-stone', 'ApiController@grooveStoneData');
Route::any('api/groove-stone-vue', 'ApiController@grooveStoneVueData');

// GrooveStone Routes

Route::resource('groove-stone', 'GrooveStoneController');