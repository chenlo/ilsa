<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    //
   	public function projects() {
        return $this->belongsToMany('App\Project');
    }
}
