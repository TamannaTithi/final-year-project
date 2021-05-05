<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    protected $table="photographers";

    public function images(){
        return $this->hasMany('App\PhotographersImage', 'photographer_id');
    }
    public function services(){
        return $this->hasMany('App\PhotographerServices','photographer_id');
    }
}
