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

Route::get('/test', function() {
    return "just testing";
});

Route::get('/contact', function(){
    return view('contact', ['name' => 'KYM', 'role' => 'admin']);
});
// Route::view('/contact', 'contact', ['name' => 'KYM', 'role' => 'admin']); // cara simpel jika hanya untuk menampilkan halaman