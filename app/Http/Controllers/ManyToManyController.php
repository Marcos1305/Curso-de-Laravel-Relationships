<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\City;

class ManyToManyController extends Controller
{
    public function manyToMany()
    {
        $city = City::where('name', 'Corumbiara')->get()->first();
        echo 'Cidade: ' . $city->name. '<br>';
        $companies = $city->companies;
        foreach($companies  as $company){
            echo 'Empresa: '.$company->name;
        }
    }
}
