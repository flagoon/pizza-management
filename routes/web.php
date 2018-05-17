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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pizzas', 'PizzaController@show')->name('pizzas');
Route::get('/categories', 'PizzaController@showCategories')->name('categories');
Route::get('/ingredients', 'IngredientController@index')->name('ingredients');
Route::get('/ingredients/{ingredient}', 'IngredientController@edit')->name('edit-ingredient');
Route::delete('/ingredients/{ingredient}', 'IngredientController@destroy');
Route::post('/ingredients', 'IngredientController@store')->name('add-ingredient');
Route::put('/ingredients/{id}', 'IngredientController@update')->name('modify-ingredient');
Route::get('/extras', 'ExtraController@show')->name('extras');
Route::get('/admin', 'AdminController@show')->name('admin');
Route::get('/contact', 'PlaceController@show')->name('contact');