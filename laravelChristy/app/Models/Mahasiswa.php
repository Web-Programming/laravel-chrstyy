<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    //jika nama tabel berbeda
    protected $table = "mahasiswas";

    //mengatur yg harus diisi
    protected $fillable = [
        'npm', 'nama', 'tempat_lahir', 'tanggal_lahir'
    ];

    //mengatur yg tidak perlu diisi
    protected $guarded = [];

    public function prodi(){
        return $this->belongsTo('App\Models\Prodi');
    }
}
