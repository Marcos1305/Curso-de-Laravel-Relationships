<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Location;

class Country extends Model
{
    public function location()
    {
        return $this->hasOne(Location::class);
    }
}
