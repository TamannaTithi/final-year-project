<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parlour extends Model
{
    protected $table="parlours";
    
    public function images(){
        return $this-> hasMany('App\ParlourImages', 'parlour_id');
    }
    public function services()
    {
        return $this->hasMany('App\ParlourServices','parlour_id');
    }
    public function book(){
        return $this-> hasMany('App\ParlourBook', 'parlour_id');
    }
}
