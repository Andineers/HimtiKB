<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    // Home
    Route::get('/', 'HomeController@index')->name('home.home');

    // tentang
    Route::get('/tentang', 'TentangController@index')->name('tentang.tentang');

    //sharing
    Route::get('/sharing', 'SharingController@index')->name('sharing.sharing');

    //tutorial
    Route::get('/tutorial','TutorialController@index')->name('tutorial.tutorial');

    //artikel
    Route::get('/artikel','ArtikelController@index')->name('artikel.artikel');

    //klinik
    Route::get('/klinik','KlinikController@index')->name('klinik.klinik');

    // Login
    Route::get('/login','LoginController@index')->name('auth.login');

    //Register
    Route::get('/register','RegisterController@index')->name('auth.register');

    //Anggota
    Route::get('/anggota','AnggotaController@index')->name('anggota.anggota');

    //Peserta
    Route::get('/peserta','PesertaController@index')->name('peserta.peserta');

    //Berkas
    Route::get('/berkas','BerkasController@index')->name('berkas.berkas');

    //Donasi
    Route::get('/donasi','DonasiController@index')->name('donasi.donasi');


});
