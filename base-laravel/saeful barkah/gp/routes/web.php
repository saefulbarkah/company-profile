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

Route::get('/', 'HomeController@home');
Route::get('/tentang', 'AboutController@aboutUs');
Route::get('/layanan', 'ServiceController@Services');
Route::get('/portofolio', 'PortfolioController@portfolio');
Route::get('/kontak', 'ContactController@contact');
Route::get('/layanan/full-order', 'ServiceController@fullOrder');
Route::get('/layanan/makloon-sublime', 'ServiceController@makloonSublime');
