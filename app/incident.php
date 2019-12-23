<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class incident extends Model
{
    //has one or many photo's
    //belongsto a rental record
    public function rental_record()
    {
        return $this->belongsTo(Rental_record::class);
    }

}
