<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immeuble extends Model
{
    //
     protected $table = 'immeubles';



         public function immeublebiens()
    {
       return $this->hasMany('App\Bien');
    }
}
