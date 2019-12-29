<?php

namespace NxTMateriaalbeheer;

use Illuminate\Database\Eloquent\Model;

class Consumable extends Model
{
    // many to many
    //pivot table consumable_material
    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }

    //many to many
    //pivot table consumable_rental-record
    //tells us the amount used
    public function rental_record()
    {
        return $this->hasMany(Rental_record::class);
    }

}
