<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['longitude', 'latitude'];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
