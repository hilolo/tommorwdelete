<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caution extends Model
{
     protected $table = 'cautions';


          public function location()
    {
        return $this->belongsTo('App\Location','locations_id');
    }


}
