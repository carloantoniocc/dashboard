<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{



    /**
    * Funcion que retorna Comuna Asociadas a un Establecimiento
    *
    * @return void clase Comuna
    */
    public function Commune()
    {
        return $this->hasMany('App\Commune');
    }


    /**
    * Funcion que retorna departamentos Asociados a un Establecimiento
    *
    * @return void clase departamentos
    */
    public function Department()
    {
        return $this->hasMany('App\Department');
    }


}
