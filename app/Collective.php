<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collective extends Model
{
   
	public function users()
	{
	    return $this->hasMany('TCG\Voyager\Models\User');
	}
   
}
