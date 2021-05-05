<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPage extends Model
{
     protected $table="event_pages";

     public function services(){
        return $this->hasMany('App\EventServices','event_page_id');
     }
}
