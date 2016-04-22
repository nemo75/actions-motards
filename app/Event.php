<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
    'association', 'prix', 'lieux'];

    public function region()
    {
    	return $this->belongsTo('App\Region');
    }
}
