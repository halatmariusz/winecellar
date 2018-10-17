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
})->name('home');

Route::get('/wines/list', ['as' => 'wines.list', 'uses' => 'WineController@showList']);
Route::get('/wines/drain/{wine_id}', ['as' => 'wines.drain', 'uses' => 'WineController@setDrain']);
Route::post('/wines/drain/{wine_id}', ['as' => 'wines.drainPost', 'uses' => 'WineController@setDrainPost']);
Route::get('/wines/sugar/{wine_id}', ['as' => 'wines.sugar', 'uses' => 'WineController@setSugar']);
Route::post('/wines/sugar/{wine_id}', ['as' => 'wines.sugarPost', 'uses' => 'WineController@setSugarPost']);
Route::get('/wines/water/{wine_id}', ['as' => 'wines.water', 'uses' => 'WineController@setWater']);
Route::post('/wines/water/{wine_id}', ['as' => 'wines.waterPost', 'uses' => 'WineController@setWaterPost']);

Route::get('/calculator/sugar', ['as' => 'calculator.sugarForm', 'uses' => 'CalculatorController@sugarForm']);
Route::post('/calculator/sugar', ['as' => 'calculator.sugarFormPost', 'uses' => 'CalculatorController@sugarFormPost']);
