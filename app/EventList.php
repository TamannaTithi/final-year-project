<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventList extends Model
{
    protected $table="event_lists";
    protected $fillable = [
        'name', 'email', 'mobile_no', 'event_type', 'time_date',  'message','slug'
    ];
}
