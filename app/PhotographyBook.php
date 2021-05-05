<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotographyBook extends Model
{
    protected $table="photography_books";

    protected $fillable = [
        'first_name','last_name',  'email', 'mobile_no','package_name','message','package_id','photographer_id', 'photographer_name', 'start', 'end'
    ];
   // protected $dates = ['date_from', 'date_to'];
    protected $primaryKey = 'photographer_id';
    public $timestamps = true;
}
