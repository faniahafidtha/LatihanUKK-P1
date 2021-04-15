<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis','nama','jk','tmp_lahir','tgl_lahir','alamat','asal_sekolah','kelas','jurusan'
    ];
}
