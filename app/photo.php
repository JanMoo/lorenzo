<?php

namespace NxTMateriaalbeheer;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //belongsto an incident or a material
    public function viewable()
    {
        return $this->morphTo();
    }
}
