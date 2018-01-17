<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function lines() {
        return $this->belongsToMany('App\Line');
    }

    public function developments() {
        return $this->belongsToMany('App\Development');
    }

    public function publications() {
        return $this->belongsToMany('App\Publication');
    }
}
