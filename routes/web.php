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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/belajar',function(){
    echo'<h1>Hello World</h1>';
    echo'<p>Sedang Belajar Laravel</p>';
});

Route::get('/siswa/smkbpi/rpl',function(){
echo '<h2 style="text-align:center"><u>Welcome to 11 RPL</u></h2>';
});

Route::get('/siswa/{Arlanda}',function ($Arlanda){
return "Tampilkan data siswa bernama $Arlanda";
});

Route::get('/stok_barang/{jenis}/{merek}',function($jenis,$merk){
    return "Cek sisa stock untuk $  ";

});

Route::get('/profile', function () {
    return view('profile ');
});