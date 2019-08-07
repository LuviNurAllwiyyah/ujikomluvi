<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bayarcicilan extends Model
{
    protected $fillable = ['cicilan_kode', 'kridit_kode', 'cicilan_tanggal', 'cicilan_jumlah', 'cicilan_ke', 'cicilan_sisa_ke', 'cicilan_sisa_harga'];

    public $timestaps = true;
}
