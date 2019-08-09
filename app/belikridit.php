<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belikridit extends Model
{
    protected $fillable = ['kridit_kode', 'pembeli_no_ktp', 'paket_kode', 'motor_kode', 'kridit_tanggal', 'fotokopi_ktp', 'fotokopi_kk', 'fotokopi_slip_gaji'];
    public $timestamps = true;
}
