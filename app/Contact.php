<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Log;

class Contact extends Model
{
    // https://stackoverflow.com/a/34224409/1620794
    protected $dates = [
        'pickup_date',
        'return_date'
    ];

    private function setDateAttribute($attrName, $value) {
        $this->attributes[$attrName] = Carbon::createFromFormat('m/d/Y g:i A', $value);
        Log::debug('date transformed for Contact model: "' . $value . '"');
        Log::debug('date is valid: ' . ($this->attributes[$attrName]->isValid() === true ? 'true' : 'false'));
    }

    /**
     * Use a mutator to format an attribute before it is set on this model.
     */
    public function setPickupDateAttribute($value) {
        $this->setDateAttribute('pickup_date', $value);
    }

    /**
     * Use a mutator to format an attribute before it is set on this model.
     */
    public function setReturnDateAttribute($value) {
        $this->setDateAttribute('return_date', $value);
    }

    public function state() {
        return $this->hasOne('App\State');
    }
}
