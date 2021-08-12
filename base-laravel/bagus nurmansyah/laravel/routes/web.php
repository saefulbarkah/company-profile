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


Route::get('/','HomeController@home');
Route::get('/About','AboutController@about');
Route::get('/service','ServiceController@services');
Route::get('/process','ProcessController@process');
Route::get('/portfolio','PortfolioController@portfolio');
Route::get('/testimonial','TestimonialController@testimonials');
Route::get('/contact','ContactController@contact');
