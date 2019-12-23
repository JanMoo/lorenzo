<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental_record extends Model
{
   //has many incidents
   public function incidents()
   {
       return $this->hasMany(Incident::class);
   }

   //has many materials many to many realtionship with pivot table
   public function materials()
   {
       return $this->belongsToMany(Material::class);
   }

   //belongs to a user
   public function user()
   {
       return $this->belongsTo(User::class);
   }

   //has many consumables tied to the materials

}
