<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insertElq(){
        // $mahasiswa = new Mahasiswa;
        // $mahasiswa->npm = '2226250005';
        // $mahasiswa->nama_mahasiswa = 'Christy';
        // $mahasiswa->tempat_lahir = 'Mars';
        // $mahasiswa->tanggal_lahir = date("y-m-d");
        // $mahasiswa->save(); //menyimpan data ke tabel mahasiswa
        // dump($mahasiswa); //melihat isi $mahasiswa

        //mass assigment, klo datanya bnyk pke mask assigment
        $mahasiswa = Mahasiswa::insert(
            ['nama' => 'Haha',
            'npm' => '2226250003',
            'tempat_lahir' => 'Pluto',
            'tanggal_lahir' => '2004-07-13',
            ]
        );
        dump($mahasiswa);
    }

     public function updateElq(){
        $mahasiswa = Mahasiswa::where('npm', '2226250003')->first(); //cari data tabel mahasiswa berdasarkan npm
        $mahasiswa ->nama = 'Hehe';
        $mahasiswa->save(); //simpan data ke tabel mahasiswas
        dump($mahasiswa); //melihat isi $mahasiswa
    }

     public function deleteElq(){
        $mahasiswa = Mahasiswa::where('npm','2226250003') ->first();
        $mahasiswa->delete();
        dump($mahasiswa);
    }

    public function selectElq(){
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswa = Mahasiswa::all();
        //dump($allmahasiswa);
        return view('mahasiswa.index', ['allmahasiswa' => $mahasiswa,'kampus'=> $kampus]);
    }

     public function allJoinElq(){
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswas = Mahasiswa::has('prodi')->get();
        return view('mahasiswa.index', ['allmahasiswa'=> $mahasiswas, 'kampus' => $kampus]);
     }

}
