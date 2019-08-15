<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
     protected $table = 'biens';

       public function locataire()
    {
        return $this->belongsTo('App\Locataire');
    }


    
}
