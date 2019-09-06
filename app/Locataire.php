<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Locataire extends Model
{
      protected $table = 'locataires';


       public function bien()
    {
        return $this->hasMany('App\Bien');
    }

        public function Location()
    {
        return $this->hasMany('App\Location','locataires_id');
    }

    
}
