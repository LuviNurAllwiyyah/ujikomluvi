<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    protected $fillable = ['pembeli_no_ktp', 'pembeli_nama', 'pembeli_alamat', 'pembeli_telpon', 'pembeli_hp'];
    public $timestamps = true;
}
