<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Contact;
use App\Session;





class ContactController extends Controller
{
    public function index(Request $request)
    {

       $bookcontact=Contact::all();
       return view('admin.contact.contact',compact('bookcontact'));
       return view('user.contact',compact('bookcontact'));
       
    }
    public function store(Request $request)
    {
      // $table = new Contact();
      //   $table->name = $request->name;
      //   $table->email = $request->email;
      //   $table->mobile_no = $request->mobile_no;
      //   $table->message = $request->message;



   //      $table = $request->validate([
   //       'name' => 'required|alpha_spaces',
   //       'email' => 'required|email',
   //        'mobile_no' => 'required|digits:11',
   //  //     'mobile_no' => 'required|numeric|countryCode',
   //     //  'email' => 'required|email|exists:users,email',
   //   //  'mobile_no' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
   //       'message'=>'required'
   //   ]);


 //    \App\Contact::create($table);
 $input = [
   'name'=>$request->name,
  
   'email'=>$request->email,
  'mobile_no' => $request->mobile_no,
   'message' => $request->message,
 
   
   
    ];
    Contact::create($input);


//return response()->json('Form is successfully validated and data has been saved');
//\Contact::to('xxx@mail.com')->send(new Contact($table));
   return redirect()->back()->with('message', 'Thanks for contacting us! We will get back to you soon.');
  

  
   


      //  $table->save();
     }
     public function delete($id)
     {
        $book=Contact::find($id);
        $book->delete();
         return redirect()->back();
     }
     

}
