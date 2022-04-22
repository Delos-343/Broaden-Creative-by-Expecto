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
    return view('index');
});
Route::get('/produkpage', function () {
    return view('produkpage');
});
Route::get('/tentangpage', function () {
    return view('tentangpage');
});
Route::get('/default', function () {
    return view('default');
});


Route::resource('/portofolio','PortofolioController');
Route::post('/portofolio/update/{id}', 'PortofolioController@update')->name('portofolio.update');
Route::post('/portofolio/delete/{id}', 'PortofolioController@destroy')->name('portofolio.destroy');
Route::get('/portofolio/search', 'PortofolioController@search')->name('portofolio.search');
Route::resource('/klien','KlienController');
Route::post('/klien/update/{id}', 'KlienController@update')->name('klien.update');
Route::post('/klien/delete/{id}', 'KlienController@destroy')->name('klien.destroy');
Route::resource('/produk','ProdukController');
Route::post('/produk/update/{id}', 'ProdukController@update')->name('produk.update');
Route::post('/produk/delete/{id}', 'ProdukController@destroy')->name('produk.destroy');
Route::get('/','LandingController@index');
Route::get('/portofoliopage','LandingController@portofoliopage');
Route::get('/produkpage','LandingController@produkpage');
Route::get('/portofolio/json','PortofolioController@json');
Route::get('/admin', 'AuthController@showFormLogin')->name('login');
Route::get('/admin', 'AuthController@showFormLogin')->name('login');
Route::post('/auth/login', 'AuthController@login')->name('auth.login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
Route::get('/', 'GuestController@utama');
Route::resource('/feedback','FeedbackController');
Route::post('/feedback/update/{id}', 'FeedbackController@update')->name('feedback.update');
Route::post('/feedback/delete/{id}','FeedbackController@destroy')->name('feedback.destroy');
Route::get('/index', 'GuestController@klien');
Route::post('/','HubunginkamiController@store')->name('hubunginkami.store');
Route::get('/portofoliopage', 'GuestController@index');
Route::get('/produkpage', 'GuestController@produk');
Route::resource('/portofoliopage','GuestController');
Route::get('/tentangpage','GuestController@tentang');
Route::resource('/hubunginkami','HubunginkamiController');
Route::resource('/datacollection','DataCollectionController');
Route::post('/datacollection','DataCollectionController@store')->name('datacollection.store');
Route::resource('/kontak','KontakController');
Route::post('/kontak/update/{id}', 'KontakController@update')->name('kontak.update');
Route::post('/kontak/delete/{id}','KontakController@destroy')->name('kontak.destroy');
Route::get('/hubunginkami/search','HubunginkamiController@search')->name('hubunginkami.search');
Route::resource('/bannerhome','BannerHomeController');
Route::post('/bannerhome/update/{id}', 'BannerHomeController@update')->name('bannerhome.update');
Route::post('/bannerhome/delete/{id}','BannerHomeController@destroy')->name('bannerhome.destroy');
Route::resource('/bannerproduk','BannerProdukController');
Route::post('/bannerproduk/update/{id}', 'BannerProdukController@update')->name('bannerproduk.update');
Route::post('/bannerproduk/delete/{id}','BannerProdukController@destroy')->name('bannerproduk.destroy');
Route::resource('/bannerportofolio','BannerPortofolioController');
Route::post('/bannerportofolio/update/{id}', 'BannerPortofolioController@update')->name('bannerportofolio.update');
Route::post('/bannerportofolio/delete/{id}', 'BannerPortofolioController@destroy')->name('bannerportofolio.destroy');
Route::resource('/bannertentang','BannerTentangController');
Route::post('/bannertentang/update/{id}', 'BannerTentangController@update')->name('bannertentang.update');
Route::post('/bannertentang/delete/{id}', 'BannerTentangController@destroy')->name('bannertentang.destroy');
Route::resource('/produksosialmedia','ProdukSosialMediaController');
Route::post('/produksosialmedia/update/{id}', 'ProdukSosialMediaController@update')->name('produksosialmedia.update');
Route::post('/produksosialmedia/delete/{id}', 'ProdukSosialMediaController@destroy')->name('produksosialmedia.destroy');
Route::resource('/produkcontentmarketing','ProdukContentMarketingController');
Route::post('/produkcontentmarketing/update/{id}', 'ProdukContentMarketingController@update')->name('produkcontentmarketing.update');
Route::post('/produkcontentmarketing/delete/{id}', 'ProdukContentMarketingController@destroy')->name('produkcontentmarketing.destroy');
Route::resource('/produkbrandingdesign','ProdukBrandingDesignController');
Route::post('/produkbrandingdesign/update/{id}', 'ProdukBrandingDesignController@update')->name('produkbrandingdesign.update');
Route::post('/produkbrandingdesign/delete/{id}', 'ProdukBrandingDesignController@destroy')->name('produkbrandingdesign.destroy');
Route::resource('/produkphotography','ProdukPhotographyController');
Route::post('/produkphotography/update/{id}', 'ProdukPhotographyController@update')->name('produkphotography.update');
Route::post('/produkphotography/delete/{id}', 'ProdukPhotographyController@destroy')->name('produkphotography.destroy');
Route::resource('/tentang','TentangController');
Route::post('/tentang/update/{id}', 'TentangController@update')->name('tentang.update');
Route::post('/tentang/delete/{id}', 'TentangController@destroy')->name('tentang.destroy');
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('logout', 'AuthController@logout')->name('logout');
 
});
