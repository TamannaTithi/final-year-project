<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventVenue;

class VenueController extends Controller
{
    public function index()
    {
      $venues= EventVenue::all();
      return view('admin.venue.venue',compact('venues'));

       return view('admin.venue.venue');
    }
    public function create()
    {
        return view('admin.venue.venuecreate');
    }
    public function store(Request $request)
    {
      $venues= new EventVenue();
      $venues->name=$request->name;
      $venues->description=$request->description;
      $venues->price=$request->price;
      $venues->eventvenue_type=$request->eventvenue_type;
       if($request->hasFile('image')){
        $extension=$request->image->extension();
        $fileName=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName=$fileName.'.'.$extension;
        $venues->image=$fileName;
        $request->image->move('public/uploads/venues/',$fileName);

      }
      $venues->save();
      return redirect()->back(); 
}
public function update_page($id)
{
  $venues= EventVenue::find($id);
  return view('admin.venue.venueupdate', compact('venues'));
}
public function update(Request $request){
  $venues= EventVenue::find($request->id);
  $venues->name=$request->name;
  $venues->description=$request->description;
  $venues->price=$request->price;
  $venues->eventvenue_type=$request->eventvenue_type;
      
  if($request->hasFile('image')){

    $path=public_path('uploads/venues/'.$venues->image);
    if(file_exists($path)){
        unlink($path);
    }

    $extension=$request->image->extension();
    $fileName=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
    $fileName=$fileName.'.'.$extension;
    $venues->image=$fileName;
    $request->image->move('public/uploads/venues/',$fileName);

  }
     $venues->save();
     return redirect('admin/venues');

}

public function delete($id)
{
   $venues=EventVenue::find($id);
   $venues->delete();
    return redirect()->back();
}



}
