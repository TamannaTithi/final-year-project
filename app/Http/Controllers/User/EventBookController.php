<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventList;
use App\EventPage;
use Validator;

class EventBookController extends Controller
{
    public function index()
   
    {
      $bookevent=EventList::all();
      // $events = EventPage::find($request->event_page_id);
      //  $package = EventServices::find($request->package_id);
       
       return view('admin.event.eventbook',compact('bookevent'));
       return view('user.appointment', compact('bookevent')); 

      
    }
    public function store(Request $request)
    {
      
     
      $datTime = date('Y-m-d H:m:s',strtotime($request->time_date));
    //   $events = new EventList();
    //   $events->name = $request->name;
    //   $events->email = $request->email;
    //   $table->event_type= $request->event_type;
    //   $table->package_name= $request->package_name;
    //   $events->mobile_no = $request->mobile_no;
    //  $table->message = $request->message;
    //  $table->event_type= $request->event_type;
    //  $table->package_name= $request->package_name;
     $input = [
     'name'=>$request->name,
       
        'email'=>$request->email,
       'mobile_no' => $request->mobile_no,
    //   'event_page_id'=>$events_id,
    //   'event_list_id'=>$bookevent_id,
     //  'package_id'=>$package_id,
       'event_type'=> $request->event_type,
    // 'package_name'=>$request->package_name,
        'message' => $request->message,
        
        'time_date' =>$datTime
    // 'request_date_time' => 'required|date_format:Y-m-d H:i:s|after:5 hours'
      ];
      EventList::create($input);
       
//         $events = $request->validate([
//          'name' => 'required|alpha_spaces',
//          'email' => 'required|email',
//        //  'time' => 'required|time',
//        //  'date' => 'required|date',
//          'type' => 'required|in:Wedding,Birthday,Anniversary,Others',
//           //'mobile_no' => 'required|numeric|countryCode',
//           'message'=>'required'
//      ]);
//      \App\EventList::create($events);

// //return response()->json('Form is successfully validated and data has been saved');
// //\Contact::to('xxx@mail.com')->send(new Contact($table));
  return redirect()->back()->with('message', 'Thanks for contacting us! We will get back to you soon.');
  
   
     }
     public function delete($id)
     {
        $events=EventList::find($id);
        $events->delete();
         return redirect()->back();
     }
  
}
