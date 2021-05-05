<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\BirthdayBook;

class BirthdayBookController extends Controller
{
    public function index(Request $request)
    {

       $bookbirthday=BirthdayBook::all();
       return view('admin.birthday.birthday',compact('bookbirthday'));
       return view('user.birthday-event',compact('bookbirthday'));
       
    }
    public function store(Request $request)
    {
        $datTime = date('Y-m-d H:m:s',strtotime($request->time_date));
      
    //   $table = new Contact();
      //   $table->name = $request->name;
      //   $table->email = $request->email;
      //   $table->mobile_no = $request->mobile_no;
      //   $table->message = $request->message;
      $input = [
        'name'=>$request->name,
       
        'email'=>$request->email,
       'mobile_no' => $request->mobile_no,
        'message' => $request->message,
        'time_date' =>$datTime
       
        
        
         ];
         BirthdayBook::create($input);

     // DB::table('birthday_books')->insert($input);
       //return redirect()->back();
        return redirect()->back()->with('message', 'Thanks for contacting us! We will get back to you soon.');
     }
    

     
     public function delete($id)
     {
        $bookbirthday=BirthdayBook::find($id);
        $bookbirthday->delete();
         return redirect()->back();
     }
     

}


