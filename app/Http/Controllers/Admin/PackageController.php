<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function index()
    {
      $events=EventList::all();
       return view('admin.event.event',compact('events'));
    }
   
}
