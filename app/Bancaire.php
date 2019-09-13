<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bancaire extends Model
{
    protected $table = 'bancaires';

         public function locataire()
    {
        return $this->belongsTo('App\Locataire','locataires_id');
    }
}
