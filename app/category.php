<?php

namespace NxTMateriaalbeheer;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   //has many subcategories
   public function subcategories()
   {
       return $this->hasMany(Subcategory::class);
   }
   //belongs to materials has many materials
   public function materials()
   {
       return $this->hasMany(Material::class);
   }

}
