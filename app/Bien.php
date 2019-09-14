<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
     protected $table = 'biens';

       public function locataire()
    {
        return $this->belongsTo('App\Locataire','locataires_id');
    }



        public function Location()
    {
        return $this->hasMany('App\Location','biens_id');
    }


  

   




    
}
