<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
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
