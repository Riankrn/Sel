<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/about', function () {
    $data = [
        'pageTitle' => 'oh jadi',
        'content' => 'ini halaman tentang kami.'
    ];
    return view('about', $data);
});
Route::resource('users','UseController');

Route::get('/produk', 'App\Http\Controllers\produkController@index');

Route::resource('/profile','App\Http\Controllers\ProfileController');
