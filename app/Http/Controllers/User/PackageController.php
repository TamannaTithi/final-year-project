<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PackageBook;
use App\EventPage;
use App\EventServices;
class PackageController extends Controller
{
    public function book(Request $request)
    {
        $bookevents=EventPage::all();
       $bookevents=PackageBook::all();
       

       return view('admin.event.eventservicebook',compact('bookevents'));
       return view('user.packagebook', compact('bookevents')); 
            
    }
    public function store(Request $request)
    {
       //dd($request->all());
       $events = EventPage::find($request->event_page_id);
       $services = EventServices::find($request->package_id);
       $datTime1 = date('Y-m-d H:m:s',strtotime($request->start));
       $datTime2 = date('Y-m-d H:m:s',strtotime($request->end));
      
      //  $book= new ParlourBook();
      //  $book->name=$request->name;
      //  $book->email=$request->email;
      //  $book->package_id=$package->id;
      //  $book->mobile_no=$request->mobile_no;
      //  $book->query=$request->query;
      //  $book->time_and_date = $datTime;
      //  $book->package_name=$package->name;
      //  $book->parlour_id=$parlour->id;
      //  $book->save();
      $input = [
         'username'=>$request->username,
        
         'email'=>$request->email,
         'event_page_id'=>$events->id,
         'event_page_name'=>$events->event_type,
        'mobile_no' => $request->mobile_no,
         'message' => $request->message,
         
       //  'package_id'=>$services->id,
       'package_name'=>$request->package_name,
         'start' =>$datTime1,
         'end' =>$datTime2
         
          ];
         PackageBook::create($input);
 
    //  DB::table('parlour_books')->insert($input);
       //return redirect()->back();
       return redirect()->back()->with('message', 'Thanks for contacting us! We will get back to you soon.');
     }
     
     
     public function delete($id)
     {
      // $photographer=PhotographyBook::find($id);
      //   $photographer->delete();
      PackageBook::where('id', $id)->delete();
         return redirect()->back();
     }

    
}


