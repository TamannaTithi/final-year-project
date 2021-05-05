<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParlourServices extends Model
{
    public function book(){
        return $this->hasMany('App\ParlourBook', 'package_id');
    }
}
