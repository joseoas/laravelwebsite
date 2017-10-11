<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table='payments';
    protected $fillable=['name_payment','type_payment','cost_payment'];

    public function payment_sallers(){
    	return $this->hasMany('App\Payment_saller','id_saller','id')
    }
}
