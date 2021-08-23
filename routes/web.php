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
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
	Route::get('/logout', 'Auth\LoginController@logout')->name('user.logout');
	
    Route::middleware(['kasir'])->group(function () {
	/* menu */
	Route::get('/kasir', 'Menucontroller@index')->name('kasir');
	Route::get('/menu', 'Menucontroller@index')->name('menu');
	Route::get('/form_menu_create', 'Menucontroller@create')->name('form_menu_create');
	Route::post('/menu_save', 'Menucontroller@save')->name('menu_save');
	Route::get('/cari_menu', 'Menucontroller@search');

	/* pengguna */
	Route::get('/pengguna', 'UserController@index')->name('pengguna');
	Route::get('/pengguna_create', 'UserController@create')->name('pengguna_create');
	Route::post('/pengguna_save', 'UserController@save')->name('pengguna_save');
	Route::get('/cari', 'UserController@search');
	Route::get('/hapus/{id}', 'UserController@hapus');
	Route::get('export_excel', 'UserController@export_excel')->name('export_excel');

	/* pelanggan */
	Route::get('/pelanggan', 'Pelanggancontroller@index')->name('pelanggan');
	Route::get('/form_pelanggan_create', 'Pelanggancontroller@create')->name('form_pelanggan_create');
	Route::post('/pelanggan_save', 'Pelanggancontroller@save')->name('pelanggan_save');
	Route::get('/cari_pelanggan', 'Pelanggancontroller@search');

	/* meja */
	Route::get('/meja', 'Mejacontroller@index')->name('meja');	
	Route::get('/form_meja_create', 'Mejacontroller@create')->name('form_meja_create');
	Route::post('/meja_save', 'Mejacontroller@save')->name('meja_save');

    });

    Route::middleware(['kitchen'])->group(function () {
       Route::get('kitchen', 'DashbordKitchenController@index')->name('kitchen');	
		
    });   
	

});

Route::get('input_pesenan', 'PesenanController@index')->name('input_pesenan');
