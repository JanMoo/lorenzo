<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    //belongs to a standard set, but part of many so -> many to many
    public function standard_sets()
    {
        return $this->belongsToMany(Standard_set::class);
    }
    //belongs to a category
    //belongs to a subcategory
    //has many photos
    //many to many rental_records
    public function rental_records()
    {
        return $this->belongsToMany(Rental_record::class);
    }
}
