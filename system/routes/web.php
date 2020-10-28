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
    return view('home');
});

Route::get('login', function(){
	return view('login');
});

Route::get('signup', function(){
	return view('signup');
});

Route::get('fullview', function(){
	return view('fullview');
});

Route::get('admin', function(){
	return view('adminlogin');
});

Route::get('beranda', function(){
	return view('beranda');
});

Route::get('produk', function(){
	return view('produk');
});

Route::get('kategori', function(){
	return view('kategori');
});

Route::get('pelanggan', function(){
	return view('pelanggan');
});

Route::get('supplier', function(){
	return view('supplier');
});
