<?php

namespace NxTMateriaalbeheer;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //belongs to a subcategory
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    //has many photos
    //polymorphic reltionship
    public function photos()
    {
        return $this->morphMany(Photo::class, "viewable");
    }

    //many to many rental_records
    //pivot table material_rental_record
    public function rental_records()
    {
        return $this->belongsToMany(Rental_record::class);
    }

    //material many to many consumable
    //pivot table consumable_material
    public function consumables()
    {
        return $this->belongsToMany(consumable::class);
    }

    //material many to many standard sets
    //pivot table material_standard_set
    public function standard_sets()
    {
        return $this->belongsToMany(Standard_set::class);
    }

    //material many to many personal_sets
    //pivot table material_personal-set
    public function personal_sets()
    {
        return $this->belongsToMany(Personal_set::class);
    }
}
