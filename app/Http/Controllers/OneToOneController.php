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


    public function oneToOneinsert()
    {
        $dataForm = [
            'name' => 'Argentina',
            'longitude' => '1245',
            'latitude' => '05421',
        ];

        $country = Country::create($dataForm);

        //Primeiro Método
        // $location = new Location;
        // $location->latitude = $dataForm['latitude'];
        // $location->longitude = $dataForm['longitude'];
        // $location->country_id = $country->id;
        // $saveLocation = $location->save();

        $location = $country->location()->create($dataForm);
        dd($location);
    }
}
