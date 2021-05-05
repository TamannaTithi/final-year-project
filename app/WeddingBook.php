<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeddingBook extends Model
{
    protected $table="wedding_books";

    protected $fillable = [
        'name', 'email', 'mobile_no','message','time_date'
    ];
    protected $dates = ['start', 'end'];
}
