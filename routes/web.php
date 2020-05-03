<?php

use App\Http\Controllers\PesertaController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:Administrator']], function () {
    Route::get('/a', function() { return 'Saya administrator'; });
});

Route::group(['middleware' => ['role:Panitia']], function () {
    Route::get('/p', 'PanitiaController@index')->name('index.panitia');

    // Manajemen Peserta
    Route::get('/p/data-peserta', 'PanitiaController@indexPeserta')->name('index.data-peserta');
    Route::get('/p/verifikasi', 'PanitiaController@verifikasi')->name('panitia.verifikasi');
    Route::get('/p/pembayaran', 'PanitiaController@pembayaran')->name('panitia.pembayaran');

    // Laporan
    Route::get('/p/laporan/verifikasi', 'PanitiaController@laporanVerifikasi')->name('panitia.laporan-verifikasi');
    Route::get('/p/laporan/pembayaran', 'PanitiaController@laporanPembayaran')->name('panitia.laporan-pembayaran');
    
    // Seleksi
    Route::get('/p/seleksi/pencarian', 'PanitiaController@pencarianDataPengumuman')->name('panitia.pencarian-pengumuman');
    Route::get('/p/seleksi/laporan', 'PanitiaController@laporanSeleksi')->name('panitia.laporan');
});

Route::group(['middleware' => ['role:Peserta']], function () {
    Route::get('/u', 'HomeController@index')->name('peserta.index');

    // Isi Formulir
    Route::get('/u/formulir/isi/registrasi', 'PesertaController@isiRegistrasi')->name('formulir.registrasi');
    Route::get('/u/formulir/isi/data-pribadi', 'PesertaController@isiDataPribadi')->name('formulir.data-pribadi');
    Route::get('/u/formulir/isi/alamat', 'PesertaController@isiAlamat')->name('formulir.alamat');
    Route::get('/u/formulir/isi/data-ayah', 'PesertaController@isiDataAyah')->name('formulir.data-ayah');
    Route::get('/u/formulir/isi/data-ibu', 'PesertaController@isiDataIbu')->name('formulir.data-ibu');
    Route::get('/u/formulir/isi/data-sekolah', 'PesertaController@isiDataSekolah')->name('formulir.data-sekolah');
    Route::get('/u/formulir/isi/data-nilai', 'PesertaController@isiDataNilai')->name('formulir.data-nilai');    

    // Cetak Formulir
    Route::get('/u/formulir/cetak', 'PesertaController@cetakFormulir')->name('formulir.cetak');

    // Pembayaran
    Route::get('/u/pembayaran', 'PesertaController@pembayaran')->name('pembayaran.index');


    // Pengumuman
    Route::get('/u/pengumuman', 'PesertaController@pengumuman')->name('pengumuman.index');

    
});