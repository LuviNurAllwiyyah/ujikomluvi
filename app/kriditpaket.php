<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kriditpaket extends Model
{
    protected $fillable = ['paket_kode', 'paket_harga-cash', 'paket_uang_muka', 'paket_jumlah_cicilan', 'paket-bunga', 'paket_nilai_cicilan'];
    public $timestamps = true;
}
