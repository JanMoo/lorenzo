<?php

namespace NxTMateriaalbeheer;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //belongs to a category
    //each subcategory has one main category
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    //has many materials
    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
