<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Country;
use App\Model\State;
class OneToManyController extends Controller
{

    public function oneToMany()
    {
        $country = Country::where('name', 'Brasil')->with('states')->get()->first();
        echo $country->name . '<hr>';
        $states = $country->states;
        echo '<table>
            <thead>
                <th>Nome</th>
                <th>Sigla</th>
            </head>
            <tbody>
        ';
        foreach($states as $state){
            echo '<tr>';
            echo '<td>'.$state->name.'</td>';
            echo '<td>'.$state->initials.'</td>';
            echo '</tr>';

        }
        echo '</tbody>';
        echo '</table>';
    }
    public function manyToOne()
    {
        $stateName = 'São Paulo';
        $state =  State::where('name', "{$stateName}")->get()->first();
        echo $state->country->name;
    }
}
