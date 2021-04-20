<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekanan_data extends Model
{
    protected $connection = 'sqlsrv';
    // protected $primaryKey = "ids"; 
    protected $table = "rekanan_data";

    public $timestamps = false;
    // public $incrementing = false;
}
