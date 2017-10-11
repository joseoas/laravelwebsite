<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Isapre extends Model
{
    protected $table='isapres';
    protected $fillable=['name_isapre'];

    public function sallers(){ 
	    return $this->hasMany('App\Saller','id_isapre','id');
	    // ESTA ES LA TABLA DESTINADA A LOS VENDEDORES Y ES EN PLURAR YA QUE ESTA ISAPRE PUEDE PERTENESER A VARIOS VENDEDORES
    }
}
