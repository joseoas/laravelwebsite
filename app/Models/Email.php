<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table='emails';
    protected $fillable=['name_email','phone_email','addess_email','content_email','banmedica_email','colmena_email','consalud_email','cruzblanca_email','vidatres_email','masvida_email'];

    public function saller_emails(){
    	return $this->hasMany('App\Saller_email','id_email','id');
    }
}
