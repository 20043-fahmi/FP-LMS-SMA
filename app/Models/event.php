<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $table = 'event';
    //memanggil ke kolom field
    protected $fillabel = ['nama', 'tgl', 'deskripsi'];
}
