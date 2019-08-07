<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belicash extends Model
{
    protected $fillable = ['kode_cash', 'no_ktp_pembeli', 'kode_motor', 'cash_tanggal', 'cash_bayar'];

    public $timestamps = true;
}
