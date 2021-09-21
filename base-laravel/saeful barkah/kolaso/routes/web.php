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
Route::get('/layanan/makloon-sublime', 'ServiceController@serviceMakloonSublim');
Route::get('/portofolio', 'PortfolioController@portfolio');
Route::get('/kontak', 'ContactController@contact');

// Auth::routes();


// Route::middleware(['auth'])->group(function () {
//     Route::get('admin/dashboard', 'DashboardController@dashboard')->name('home');

//     // portfolio
//     Route::get('admin/portofolio', 'PortfolioController@listPortfolio');
//     Route::get('admin/portofolio/tambah', 'PortfolioController@createPortfolio');
//     Route::get('admin/portofolio/edit={id}', 'PortfolioController@editPortfolio');
//     Route::post('admin/portofolio/post', 'PortfolioController@portfolioPost');
//     Route::post('admin/portofolio/update/{id}', 'PortfolioController@portfolioUpdate');
//     Route::get('admin/portofolio/hapus/{id}', 'PortfolioController@portfolioDestroy');

//     // tag-portfolio
//     Route::get('admin/list-tag-portfolio', 'PortfolioController@listTagPortfolio');
//     Route::post('admin/tag-portfolio/post', 'PortfolioController@listTagPost');


//     // Profiles
//     Route::get('admin/profile', 'ProfileController@profile');
//     Route::post('admin/profile/update/{id}', 'ProfileController@profileUpdate');
// });
