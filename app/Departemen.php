<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    //
    protected $table = "departemen";
    public $timestamps = false;
    public function Manajer()
    {
    	return $this->belongsTo('App\Pegawai','id_manajer','id_pegawai');
	}
}
