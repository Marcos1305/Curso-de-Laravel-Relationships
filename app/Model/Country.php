<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Location;

class Country extends Model
{
    protected $fillable = ['name'];
    public function location()
    {
        return $this->hasOne(Location::class); //Caso Tennha seguido todos os padrões do Laravel
        /*

            Caso Não tenha seguido o padrão de chave estrangeira na tabela Location

            // return $this->hasOne(Location::class, 'country_id')
        */

        /*
            Caso Não tenha seguido o padrão de chave estrangeira na table Location e nem o padrão da columa ID
            // return $this->hasOne(Location::class, 'country_id', 'id)

        */

    }

    public function states()
    {
        return $this->hasMany(State::class);
    }

    public function cities()
    {
        return $this->hasManyThrough(City::class, State::class);
    }
}
