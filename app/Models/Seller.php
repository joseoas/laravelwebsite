<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table='sellers';
    protected $fillable=['rut_seller','name_seller','lastname_seller','smartphone_seller','phone_seller','email_seller','id_isapre'];

    public function isapre(){
    	return $this->belongsTo('App\Isapre','id_isapre');
    	//CLAVE EXTERNA A SELLER  SE SEÑALA PK LARAVEL BUSCA ISAPRE_ID
    }

    public function saller_emails(){
    	return $this->hasMany('App\Saller_email','id_saller','id');
    }
}


