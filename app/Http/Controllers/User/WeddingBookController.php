<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\WeddingBook;

class WeddingBookController extends Controller
{
    public function index(Request $request)
    {

       $bookwedding=WeddingBook::all();
       return view('admin.wedding.weddingbook',compact('bookwedding'));
       return view('user.wedding-event',compact('bookwedding'));
       
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
         WeddingBook::create($input);

     // DB::table('wedding_books')->insert($input);
       //return redirect()->back();
        return redirect()->back()->with('message', 'Thanks for contacting us! We will get back to you soon.');
     }
    
     public function delete($id)
     {
        $book=WeddingBook::find($id);
        $book->delete();
        return redirect()->back();
     }
   

}
