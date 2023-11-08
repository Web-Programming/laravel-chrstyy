<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\prodiController;
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
// Route::get('/mahasiswa/{nama}', function ($nama){
//     echo "<h2>Halo semua</h2>";
//     echo "Nama saya $nama";
// });

// //Parameter opsional/tidak wajib diisi ditandai dengan ? di belakang nama parameter, lalu di dalam function diberi default parameter
// Route::get('/mahasiswa/{nama?}', function ($nama = 'christy'){
//     echo "<h2>Halo semua</h2>";
//     echo "Nama saya $nama";
// });

//klo ada lebih dari 1 parameter
// Route::get('/mahasiswa/{nama?}/{pekerjaan?}', function ($nama = 'christy', $pekerjaan = 'mahasiswa'){
//     echo "<h2>Halo semua</h2>";
//     echo "Nama saya $nama, sebagai $pekerjaan";
// });

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

Route::get('/dosen', function(){
    return view('dosen');
});

Route::get('/dosen/index', function(){
    return view('dosen.index');
});

Route::get('/fakultas', function(){
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer dan Rekayasa"]);
    // return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]]);
    // return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]);

    $kampus = "Universitas Multi Data Palembang";
    // $fakultas = [];
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"];
    return view('fakultas.index', compact('fakultas', 'kampus'));
});

Route::get('/prodi', [prodiController::class, 'index']);

Route::resource('/kurikulum', KurikulumController::class);

Route::apiResource('/dosen', DosenController::class);

//tes dgn :
//http://localhost:8000/kurikulum
//http://localhost:8000/kurikulum/create
//http://localhost:8000/kurikulum/1000
//http://localhost:8000/kurikulum/1000/edit


Route::get('/mahasiswa/insert-elq', [MahasiswaController::class, 'insertElq']);
Route::get('/mahasiswa/update-elq', [MahasiswaController::class, 'updateElq']);
Route::get('/mahasiswa/delete-elq', [MahasiswaController::class, 'deleteElq']);
Route::get('/mahasiswa/select-elq', [MahasiswaController::class, 'selectElq']);

Route::get('/prodi/all-join-facade', [ProdiController::class, 'allJoinFacade']);
Route::get('/prodi/all-join-elq', [ProdiController::class, 'allJoinElq']);
Route::get('/mahasiswa/all-join-elq', [MahasiswaController::class, 'allJoinElq']);

Route::get('/prodi/create', [ProdiController::class, 'create']);
Route::post('prodi/store', [ProdiController::class, 'store']);

