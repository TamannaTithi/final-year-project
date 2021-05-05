<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BirthdayBook extends Model
{
    protected $table="birthday_books";

    protected $fillable = [
        'name', 'email', 'mobile_no','message','time_date'
    ];
    protected $dates = ['start', 'end'];
}
