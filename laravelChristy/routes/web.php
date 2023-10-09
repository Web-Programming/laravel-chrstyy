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

Route::get('/', function () {
    return view('welcome');
});

//membuat route ke halaman profile
Route::get('/profile', function () {
    return view('profile');
});

//membuat route ke halaman mahasiswa
Route::get('/mahasiswa/{nama}', function ($nama){
    echo "<h2>Halo semua</h2>";
    echo "Nama saya $nama";
});

// //Parameter opsional/tidak wajib diisi ditandai dengan ? di belakang nama parameter, lalu di dalam function diberi default parameter
// Route::get('/mahasiswa/{nama?}', function ($nama = 'christy'){
//     echo "<h2>Halo semua</h2>";
//     echo "Nama saya $nama";
// });

//klo ada lebih dari 1 parameter
Route::get('/mahasiswa/{nama?}/{pekerjaan?}', function ($nama = 'christy', $pekerjaan = 'mahasiswa'){
    echo "<h2>Halo semua</h2>";
    echo "Nama saya $nama, sebagai $pekerjaan";
});

//melakukan redirect antar route
Route::get('/hubungi', function(){
    echo "<h2>Hubungi Kami...</h2>";
})->name('/call');

Route::redirect('/contact', '/hubungi');

Route::get('/halo', function(){
    echo "a href=". route('call') . "'>" . route('call') . "</a>";
});

Route::prefix('/dosen')->group(function (){
    Route::get('/jadwal', function () {
        return "<h2>Jadwal</h2>";
    });

    Route::get('/materi', function () {
        return "<h2>Materi Perkuliahan</h2>";
    });
});