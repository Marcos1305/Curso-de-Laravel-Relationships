<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Country;
use App\Model\Location;

class OneToOneController extends Controller
{
    public function oneToOne()
    {
        $country = Country::find(1);
        $location = $country->location;

        echo $country->name;
        echo "<hr>";
        echo 'latitude: ' . $location->latitude;
        echo "<hr>";
        echo 'longitude: ' . $location->longitude   ;
    }

    public function oneToOneInverse()
    {
        $latitude = 123;
        $longitude = 321;

        $location = Location::where('latitude', $latitude)->where('longitude', $longitude)->get()->first();
        $country  = $location->country()->get()->first();
        echo $country->name;
    }
}
