<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
