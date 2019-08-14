<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    protected $fillable = ['no_ktp', 'nama', 'alamat', 'telpon', 'hp'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

}
