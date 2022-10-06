<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Role extends Model
{
    protected $table = "tbl_role";
    protected $fillable = [
        'kd_role',
        'name_role',
        'deks'
    ];
}
