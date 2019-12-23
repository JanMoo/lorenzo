<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standard_set extends Model
{
    //has many to many relationship pivot table material_standard_set
    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }
    //belongs to a user

}
