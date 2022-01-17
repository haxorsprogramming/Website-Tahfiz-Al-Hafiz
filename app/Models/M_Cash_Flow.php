<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Cash_Flow extends Model
{

    protected $table = "tbl_cash_flow";

    protected $fillable = [
        'token_flow',
        'flow',
        'id_event',
        'type',
        'total',
        'active'
    ];

}
