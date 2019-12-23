<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal_set extends Model
{
    //many to many with the materials
    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }
}
