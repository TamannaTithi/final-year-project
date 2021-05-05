<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventPage;
use App\EventServices;

class EventPageController extends Controller
{
     public function index()
     {
      $events=EventPage::all();
       return view('admin.event.eventpage',compact('events'));
     }
     public function create()
     {
         return view('admin.event.eventpagecreate');
     }
     public function store(Request $request)
     {
       $events= new EventPage();
       $events->event_type=$request->event_type;
       
    //   $events->slug=str_slug($request->name,'_');
       $events->save();

       return redirect('admin/eventpage');
    }
    public function delete($id)
    {
       $events = EventPage::find($id);
    //   $parlours->images()->delete();
       $events->services()->delete();
     //  $parlours->book()->delete();
       $events->delete();
       return redirect()->back();
    }
  
    public function view($id){
        $events= EventPage::find($id);
        $services = EventServices::where('event_page_id',$id)->get();
        return view('admin.event.eventbookview',compact('events','services'));
      }
     
      
        
      
      
      public function service_store(Request $request)
      {
         $services= new EventServices ();
         $services->event_page_id=$request->id;
         $services->name=$request->name;
          $packages = [];
          foreach ($request->package as $name){
              $packages[] = [
                  'name' => $name,
              ];
          }
          $services->packages = json_encode($packages);
         $services->price=$request->price;
         $services->save();
  
         return redirect()->back();
      }
      public function service_delete($id)
      {
          $services=EventServices::find($id);
          $services->delete();
          return redirect()->back();
       }
  }
  
  


