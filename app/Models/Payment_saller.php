<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment_saller extends Model
{
    protected $table='payments_sallers';
    protected $fillable=['status_payment_saller'];

    public function saller(){
    	return $this->belongsTo('App\Payment_saller','id_saller','id');
    }
}
