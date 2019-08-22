<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quittance extends Model
{
    //quittance.

      protected $table = 'quittance';

        protected $fillable = [
        'location_id', 'datequiitance',
    ];
}
