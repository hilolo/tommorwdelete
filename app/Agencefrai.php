<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agencefrai extends Model
{
     protected $table = 'agencefrais';


       public function locataire()
    {
        return $this->belongsTo('App\Locataire','locataires_id');
    }
     
}
