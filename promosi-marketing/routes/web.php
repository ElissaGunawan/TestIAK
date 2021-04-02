<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;

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

Route::get('/', [PromoController::class, 'index']);

Route::get('/promos/create', 'PromoController@create');

Route::post('/promos', 'PromoController@store');

Route::get('promos/{promo}/edit', 'PromoController@edit');

Route::put('promos/{promo}', 'PromoController@update');

Route::get('/promos/{promo}/delete', 'PromoController@delete');
