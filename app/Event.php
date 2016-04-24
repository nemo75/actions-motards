<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
class Event extends Model
{
    protected $fillable = [
    'association', 'prix', 'lieux', 'region_id', 'date', 'time','description', 'association', 'site_asso', 'email_asso', 'telephone_asso'];

    public function region()
    {
    	return $this->belongsTo('App\Region');
    }
    public function image()
    {
    	return $this->hasOne('App\Image');

    }
}
