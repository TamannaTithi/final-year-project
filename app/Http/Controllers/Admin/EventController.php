<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventList;

class EventController extends Controller
{
    public function index()
    {
      $events=EventList::all();
       return view('admin.event.event',compact('events'));
    }
    public function create()
    {
        return view('admin.event.eventcreate');
    }
    public function store(Request $request)
    {
       $events= new EventList ();
       $events->name=$request->name;
       $events->description=$request->description;
       if($request->hasFile('image')){
        $extension=$request->image->extension();
        $fileName=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName=$fileName.'.'.$extension;
        $events->image=$fileName;
        $request->image->move('public/uploads/events/',$fileName);

      }
      
       $events->slug=str_slug($request->name,'_');
       $events->save();

       return redirect('admin/events');
    }
   public function update_page($id)
    {
        $events=EventList::find($id);
      return view('admin.event.eventupdate', compact('events'));
    }
  
    public function delete($id)
      {
        $events= EventList::find($id);
        $events->delete();
          return redirect()->back();
      }
      public function update(Request $request){
        $events=EventList::find($request->id);
        $events->name=$request->name;
        $events->description=$request->description;
        if($request->hasFile('image')){
  
          $path=public_path('uploads/events/'.$events->image);
          if(file_exists($path)){
              unlink($path);
          }
  
          $extension=$request->image->extension();
          $fileName=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
          $fileName=$fileName.'.'.$extension;
          $events->image=$fileName;
          $request->image->move('public/uploads/events/',$fileName);
  
        }
        $events->save();
           return redirect('admin/events');
    
      }
  
}
