<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumable extends Model
{
    //belongsto a material or to many materials many to many
    //pivot table consumable_material
    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }

}
