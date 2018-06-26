<?php

namespace App\Http\Controllers;
use App\Model\City;
use App\Model\Comment;
use App\Model\State;

use Illuminate\Http\Request;

class PolymorphicController extends Controller
{
    public function polymorphic()
    {

    }

    public function polymorphicInsert()
    {
        $city = City::where('name', 'Vilhena')->get()->first();
        echo $city->name;

        $comment = $city->comments()->create([
            'description' => 'Textando comentário'
        ]);

        var_dump($comment);
    }
}
