<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quittance extends Model
{
    //quittance.

      protected $table = 'quittance';

     

          public function location()
    {
        return $this->belongsTo('App\Location','location_id');
    }

       protected $fillable = [
        'location_id', 'datequiitance','loyer','descrption','Etat'
    ];



}
