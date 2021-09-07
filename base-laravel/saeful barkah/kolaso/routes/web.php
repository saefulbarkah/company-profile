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
Route::get('/tentang', 'AboutController@about');
Route::get('/layanan', 'ServiceController@service');
Route::get('/layanan/full-order', 'ServiceController@serviceFullOrder');
Route::get('/portofolio', 'PortfolioController@portfolio');
Route::get('/kontak', 'ContactController@contact');

// Auth::routes();


// Route::middleware(['auth'])->group(function () {
//     Route::get('admin/dashboard', 'DashboardController@dashboard')->name('home');

//     // portfolio
//     Route::get('admin/list-portfolio', 'PortfolioController@listPortfolio');
//     Route::post('admin/portfolio/post', 'PortfolioController@portfolioPost');

//     // tag-portfolio
//     Route::get('admin/list-tag-portfolio', 'PortfolioController@listTagPortfolio');
//     Route::post('admin/tag-portfolio/post', 'PortfolioController@listTagPost');
// });
