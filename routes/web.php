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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hai/{nama}', function ($nama) {
//     return "halo laravel $nama";
// });

// Route::get('/gilang/{angka}', function ($angka) {
//     return view('gil', ["angka" => $angka]);
// });

// Route::get('/form', 'RegisterController@form');

Route::get('/', 'HomeController@rumah');

Route::get('/register', 'AuthController@register');

Route::get('/welcome1', 'AuthController@welcome1');

Route::post('/welcome1', 'AuthController@welcome11');
