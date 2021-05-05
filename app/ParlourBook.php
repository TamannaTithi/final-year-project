<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParlourBook extends Model
{
    protected $table="parlour_books";

    protected $fillable = [
      'parlour_name',  'name', 'email', 'mobile_no','package_name','message','start','end', 'package_id','parlour_id'
    ];
}