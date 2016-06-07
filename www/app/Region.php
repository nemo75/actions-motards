<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
     protected $fillable = [
    	'name', 'code'];

	public function events()
	{
		return $this->hasMany('App\Event');
	}
	public function associations()
	{
		return $this->hasMany('App\Association');
	}
}
