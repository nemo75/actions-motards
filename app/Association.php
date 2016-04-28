<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    public function region()
    {
    	return $this->belongsTo('App\Region');
    }
}
