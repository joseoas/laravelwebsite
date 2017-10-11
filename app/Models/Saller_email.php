<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saller_email extends Model
{
    protected $table='sallers_emails';
    protected $fillable=['status_saller_email','id_saller','id_email'];

    public function saller(){
    	return $this->belongsTo('App\Saller','id_saller','id');
    }

    public function email(){
    	return $this->belongsTo('App\Email','id_email','id');
    }
}
