<?php

namespace App\Http\Controllers\User;
use App\Parlour;
use DB;
use App\ParlourBook;
use App\ParlourServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParlourbookController extends Controller

{   
    public function book(Request $request)
    {

       $book=ParlourBook::all();

       return view('admin.parlours.bookparlour',compact('book'));
       return view('user.parlourPage',compact('book'));
       
    }

    public function store(Request $request)
    {
       //dd($request->all());
       $parlour = Parlour::find($request->parlour_id);
       $package = ParlourServices::find($request->package_id);
       $startTime = date('Y-m-d H:m:s',strtotime($request->start));
       $endTime = date('Y-m-d H:m:s',strtotime($request->end));
     
    
      //  $datTime1 = date('Y-m-d H:m:s',strtotime($request->start));
      //  $datTime2 = date('Y-m-d H:m:s',strtotime($request->end));
      
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
      if($startTime > $endTime )
      {
         return redirect()->back()->with('message', 'starting date must be greater than ending date');
       }

      $check_date = ParlourBook::where(function ($query) use ($startTime, $endTime) {
         $query->where(function ($query) use ($startTime, $endTime) {
             $query->where('start', '<=', $startTime)
                 ->where('end', '>=', $startTime);
         })->orWhere(function ($query) use ($startTime, $endTime) {
             $query->where('start', '<=', $endTime)
                 ->where('end', '>=', $endTime);
         })->orWhere(function ($query) use ($startTime, $endTime) {
             $query->where('start', '>=', $startTime)
                 ->where('end', '<=', $endTime);
         });
     })->count();

if($check_date)
{
return redirect()->back()->with('message', 'Sorry this date is not available');
}
      $input = [
        'name'=>$request->name,
         'email'=>$request->email,
        'parlour_id'=>$parlour->id,
        'parlour_name'=>$parlour->name,
         'mobile_no' => $request->mobile_no,
        'message' => $request->message,
        'package_name'=>$package->name,
        'package_id'=>$package->id,
      //   'start' =>$datTime1,
      //   'end'=>$datTime2
      'start' =>$startTime,
      'end' =>$endTime
        
         ];
         ParlourBook::create($input);

    //  DB::table('parlour_books')->insert($input);
       //return redirect()->back();
       return redirect()->back()->with('message', 'Thanks for contacting us! We will get back to you soon.');
     }
     
     
     public function delete($id)
     {
        $book=ParlourBook::find($id);
        $book->delete();
        return redirect()->back();
     }
   
    
}
