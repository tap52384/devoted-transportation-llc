<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function contacts()
    {
        return $this->belongsTo('App\Contact');
    }
}
