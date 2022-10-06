<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class M_Setting extends Model
{
    protected $table = "tbl_setting";
    protected $fillable = [
        'kd_setting',
        'nama_setting',
        'value'
    ];
}
