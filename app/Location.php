<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
     protected $table = 'locations';


         public function bien()
    {
        return $this->belongsTo('App\Bien','biens_id');
    }


         public function locataire()
    {
        return $this->belongsTo('App\Locataire','locataires_id');
    }
   
}
