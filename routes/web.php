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

Route::get('/', 'FrontedController@home')->name('portal.home');
Route::get('/artikel', 'FrontedController@post_all')->name('portal.post.all');
Route::get('/artikel/{id}/baca', 'FrontedController@post_read')->name('portal.post.read');
Route::get('/artikel/kategori/{id}', 'FrontedController@post_category')->name('portal.post.category');
Route::get('/artikel/tagar/{id}', 'FrontedController@post_tag')->name('portal.post.tag');
Route::get('/galeri', 'FrontedController@galery_all')->name('portal.galery_all');
Route::get('/galeri/{id}/lihat', 'FrontedController@galery_read')->name('portal.galery.read');
Route::get('/pengurus', 'FrontedController@management')->name('portal.management');
Route::get('/pengurus/{id}/lihat', 'FrontedController@management_read')->name('portal.management.read');
