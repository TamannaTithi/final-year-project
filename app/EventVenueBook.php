<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventVenueBook extends Model
{
    protected $table="event_venue_books";

    protected $fillable = [
        'username', 'email', 'mobile_no','message','start', 'end','event_venue_id','eventvenue_name','amount'
    ];
    protected $dates = ['start', 'end'];
}
