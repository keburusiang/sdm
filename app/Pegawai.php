<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    public $timestamps = false;
    protected $primaryKey = 'id_pegawai';
    public function Departemen()
    {
    	return $this->belongsTo('App\Departemen','departemen','kode_departemen');
	}
	public function Supervisor()
	{
		return $this->belongsTo('App\Pegawai','supervisor','id_pegawai');
	}
}
