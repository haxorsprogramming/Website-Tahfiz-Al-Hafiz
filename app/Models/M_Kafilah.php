<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Kafilah extends Model
{
    protected $table = "tbl_kafilah";

    protected $fillable = [
        'id_kafilah',
        'nama',
        'deksripsi',
        'username_wali',
        'active'
    ];
}
