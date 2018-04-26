<?php

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
use QR_Code\QR_Code;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('mahasiswa','MahasiswaController');
Route::get('/login', 'UsersController@login');
Route::get('/qrcode', function () {
    $qr = new QR_Code;
    return view('cek', compact('qr'));

});

