<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    //memanggil table
    protected $table = 'nilai';
    //memanggil ke kolom field
    protected $fillabel = ['nilai', 'perihal', 'guru_id', 'tugas_id', 'siswa_id'];
}
