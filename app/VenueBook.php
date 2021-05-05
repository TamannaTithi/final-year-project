<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueBook extends Model
{
    protected $table="venue_books";

    protected $fillable = [
        'name', 'email', 'mobile_no','message','start', 'end','venue_id'
    ];
    protected $dates = ['start', 'end'];
}
