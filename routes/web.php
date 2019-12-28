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

Route::get('/about', 'PagesController@about');

Route::get('/mobil', 'MobilController@index');

//Project Baru
Route::get('/cars', 'CarsController@index');

Route::get('/cars/create', 'CarsController@create');

Route::get('/cars/{car}', 'CarsController@show')->name('detailCar');

Route::post('/cars', 'CarsController@store');

Route::delete('/cars/{car}', 'CarsController@destroy');

Route::get('/cars/{car}/edit', 'CarsController@edit');

Route::patch('/cars/{car}', 'CarsController@update');
Auth::routes();

Route::get('/cars', 'CarsController@index')->name('index');

Route::group(['middleware' => 'web'], function(){
    Route::auth();
});


Route::group(['middleware' => ['web', 'auth']], function()
{
    Route::get('/cars', 'CarsController@index');
    Route::get('/', function()
    {
        if (Auth::user()->admin == 1)
        {
            return view ('index');
        }else{
            return view('cars.meneger');
        }
    });
});

Route::get('admin', ['middlewere' => ['web', 'auth', 'admin'], function()
{
    return view('admin/meneger');
}]);