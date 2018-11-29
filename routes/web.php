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

Auth::routes();

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/wines', function () {
        return redirect()->route('wines.list');
    });
    Route::get('/wines/list', ['as' => 'wines.list', 'uses' => 'WineController@showList']);
    Route::get('/wines/new', ['as' => 'wines.new', 'uses' => 'WineController@newWine']);
    Route::post('/wines/new', ['as' => 'wines.newPost', 'uses' => 'WineController@newWinePost']);
    Route::get('/wines/add-data/{wine_id}', ['as' => 'wines.add-data', 'uses' => 'WineController@addWineData']);
    Route::post('/wines/add-data/{wine_id}', ['as' => 'wines.add-dataPost', 'uses' => 'WineController@addWineDataPost']);
    Route::get('/wines/show/{wine_id}', ['as' => 'wines.show', 'uses' => 'WineController@showWine']);

    Route::get('/calendar', ['as' => 'calendar', 'uses' => 'CalendarController@showCalendar']);

    Route::get('/calculator/sugar', ['as' => 'calculator.sugarForm', 'uses' => 'CalculatorController@sugarForm']);
    Route::post('/calculator/sugar', ['as' => 'calculator.sugarFormPost', 'uses' => 'CalculatorController@sugarFormPost']);

    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->to('/');
    });
});
