<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table="contacts";

    protected $fillable = [
        'name', 'email', 'mobile_no','service_name', 'service_type','message','time_and_date','footer_email','slug'
    ];
}
