<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    //
    public function projects() {
        return $this->belongToMany('App\Project');
    }
}
