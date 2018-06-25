<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\City;
use App\Model\Company;

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

    public function manyToManyInverse()
    {
        $company = Company::where('name', 'COLCH')->get()->first();
        echo 'Nome da empresa: ' . $company->name . '<Br>';
        $cities = $company->cities;
        foreach($cities as $city){
            echo 'Nome da Cidade: ' . $city->name . '<br>';
        }
    }
}
