<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasiens';
     protected $fillable = ['nama','nip','dokter_id'];
     public $timestamps = true;

	public function Dokter()
	{
		return $this->belongsTo('App\Dokter','dokter_id');
	}

    public function Ortu()
    {
    	return $this->hasOne('App\Ortu','ortu_id');
    }
}

