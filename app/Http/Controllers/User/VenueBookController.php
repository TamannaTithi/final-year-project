<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\EventVenue;
use App\EventVenueBook;

class VenueBookController extends Controller
{
    public function index(Request $request)
    {
      $venues=EventVenue::all();
       $venues=EventVenueBook::all();

       return view('admin.venue.venuebook',compact('venues'));
       return view('user.venue', compact('venues')); 
            
    }
    
    public function store(Request $request)
    {
       //dd($request->all());

       $venues = EventVenue::find($request->event_venue_id);
    
       
       $datTime1 = date('Y-m-d H:m:s',strtotime($request->start));
       $datTime = date('Y-m-d H:m:s',strtotime($request->end));
       if($datTime1 > $datTime )
      {
         return redirect()->back()->with('message', 'starting date must be greater than ending date');
       }
   

    $input = [
        'username'=>$request->username,
        'email'=>$request->email,
        'event_venue_id'=>$venues->id,
       'mobile_no' => $request->mobile_no,
       'eventvenue_name'=>$venues->name,
        'amount'=>$venues->price,
        'message' => $request->message,
        'start' =>$datTime1,
        'end' =>$datTime
        
         ];
         EventVenueBook::create($input);

      //DB::table('photography_books')->insert($input);
       //return redirect()->back();
       return redirect()->back()->with('message', 'Thanks for contacting us! We will get back to you soon.');
     }
    
     public function delete($id)
     {
      EventVenueBook::where('id', $id)->delete();
         return redirect()->back();
     }
       

}


