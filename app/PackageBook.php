<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageBook extends Model
{
    protected $table="package_books";

    protected $fillable = [
        'username', 'email', 'mobile_no','message','event_page_id','event_page_name','package_name','start', 'end'
    ];
    protected $dates = ['date_from', 'date_to'];
    protected $primaryKey = 'event_page_id';
    // public $timestamps = true;
}
