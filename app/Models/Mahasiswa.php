<?php

namespace App\Models;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    protected $table='mahasiswas'; //elloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    protected $primaryKey = 'Nim'; // memanggil isi DB dengan primary key
     /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
     'Nim',
     'Nama',
     'kelas_id',
     'Jurusan',
     'No_Handphone',
     'Email',
     'TanggalLahir'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function mataKuliah(){
        return $this->belongsToMany(Matakuliah::class, "mahasiswa_matakuliah", "mahasiswa_id", "matakuliah_id")->withPivot('nilai');
    }
    
}