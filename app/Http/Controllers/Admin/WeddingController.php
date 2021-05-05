<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Wedding;

class WeddingController extends Controller
{
    public function index()
    {
      $wedding=Wedding::all();
       return view('admin.wedding.wedding',compact('wedding'));
    }
}
