<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Country;
use App\Model\State;
class OneToManyController extends Controller
{

    public function oneToMany()
    {
        $country = Country::where('name', 'Brasil')->get()->first();
        echo $country->name . '<hr>';
        $states = $country->states()->where('name', 'Like', '%a')->get();
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
}
