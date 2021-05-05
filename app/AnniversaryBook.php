<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnniversaryBook extends Model
{
    protected $table="anniversary_books";

    protected $fillable = [
        'name', 'email', 'mobile_no','message','time_date'
    ];
    protected $dates = ['start', 'end'];
}
