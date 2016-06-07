<?php

namespace App;

use App\Event;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function imageable()
    {
    	return $this->hasTo();
    }
}
