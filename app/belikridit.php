<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belikridit extends Model
{
    protected $fillable = ['kridit_kode', 'pembeli_no_ktp', 'paket_kode', 'motor_kode', 'kriidt_tanggal', 'fotokopi_KTP', 'fotokopi_KK', 'fotokopi_slip_gaji'];
    public $timestamps = true;
}
