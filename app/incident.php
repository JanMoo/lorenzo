<?php

namespace NxTMateriaalbeheer;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    //has one or many photo's polymorphic
    public function photos()
    {
        return $this->morphMany(Photo::class);
    }
    //has to be checked

    //belongsto a rental record
    public function rental_record()
    {
        return $this->belongsTo(Rental_record::class, "viewable");
    }

    //belongsto a material
    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
