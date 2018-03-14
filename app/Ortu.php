<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    protected $table = 'ortus';
    protected $fillable = array('nama','umur','pasien_id');

    public $timestamps = true;

        public function Pasien()
    {
    	return $this->belongsTo('App\Pasien','pasien_id');
    }
}

