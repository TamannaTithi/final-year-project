<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Photographer;
use App\PhotographerServices;
use App\PhotographyBook;
use DB;

class PhotographyBookController extends Controller
{
    public function index(Request $request)
    {
       $book=Photographer::all();
       $book=PhotographyBook::all();

       return view('admin.photographies.photographybook',compact('book'));
       return view('user.portfolio-photography', compact('book'));

    }
   //  public function create(){
   //    $dt = Carbon::now()->toDateString();
   //    $book =PhotographyBook::where('start', '>','$dt')->get();

   //    return view('user.portfolio-photography', compact('book'));

   //  }

    public function store(Request $request)
    {
       //dd($request->all());

       $photographer = Photographer::find($request->photographer_id);
       $package = PhotographerServices::find($request->package_id);

       $startTime = date('Y-m-d H:m:s',strtotime($request->start));
      $endTime = date('Y-m-d H:m:s',strtotime($request->end));

      if($startTime > $endTime )
      {
         return redirect()->back()->with('message', 'starting date must be greater than ending date');
       }
   
    //   $photographer= new PhotographyBook();
    //   $photographer->name=$request->name;
    //   $photographer->email=$request->email;
    //   $photographer->package_id=$package->id;
    //   $photographer->mobile_no=$request->mobile_no;
    //   $photographer->message=$request->message;
    //   $photographer->start = $datTime;
    //   $photographer->end = $datTime;
    //   $photographer->bday = $request->bday;
    //    $photographer->package_name=$package->name;
    //    $photographer->photographer_id=$photographer->id;
    //    $photographer->save();



    $check_date = PhotographyBook::where(function ($query) use ($startTime, $endTime) {
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
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'email'=>$request->email,
        'photographer_id'=>$photographer->id,
        'photographer_name'=>$photographer->name,
       'mobile_no' => $request->mobile_no,
        'message' => $request->message,
        'package_name'=>$package->name,
        'package_id'=>$package->id,
        'start' =>$startTime,
        'end' =>$endTime

         ];
         PhotographyBook::create($input);

      //DB::table('photography_books')->insert($input);
       //return redirect()->back();
       return redirect()->back()->with('message', 'Thanks for contacting us! We will get back to you soon.');
     }


    //   $photographer = $request->validate([

    //      'name' => 'required|alpha_spaces',
    //    //  'email' => 'required|email',
    //     // 'email' => 'required|email|exists:users,email',
    //  //  'mobile_no' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
    //     // 'photographer_id' => 'required|string|size:4|unique:photgrapher_id,'.$photographer_id.',photographer_id',
    //       'mobile_no' => 'required',
    //      'message'=>'required',
    //      'package_name'=>'required',
    //     'photographer_id'=>'required|exists:photographers,id',
    //      'package_id'=>'required|exists:photographers,id',
    //      'start' =>'required',
    //      'end'  =>'required',
    //      'bday'=>'required'
    //  ]);
    //  \App\PhotographyBook::create( $photographer);
    //  return redirect()->back()->with('message', 'Thanks for contacting us! We will get back to you soon.');

    // DB::table('photography_books')->insert($input);


//       $photographer = DB::table('photography_books')
//     ->where('photographer_id', '=', $request->photographer_id)
//      ->whereTime('start', '>=', $request->start)  // or use $request->strtotime('time_start')
//     ->whereTime('end', '<=', $request->end)
//     ->where(function ($query) {
//         $query

//             ->orWhere('start', '=', 'pending')
//             ->orWhere('end', '=', 'completed');
//     })
//     ->get();

// if ($photographer->count() > 0) {
    // Not allowed
   // return redirect()->back()->with('message', 'not available');
// } else {
//     // OK to proceed
//     //return redirect()->back()->with('message', 'available');
// }



      // $input=[

      //    'name'=>$request->name,
      //    'email'=>$request->email,
      //    'photographer_id'=>$photographer->id,
      //   'mobile_no' => $request->mobile_no,
      //   'message' => $request->message,
      //    'package_name'=>$package->name,
      //    'package_id'=>$package->id,
      //    'start' =>$datTime,
      //     'end' =>$datTime

      // ];
      //    PhotographyBook::create($input);
      //    DB::table('photography_books')->insert($input);

      //   return redirect()->back();


     //}

    //  function checkDate() {

    //     $photographer = new PhotographyBook(document.getElementById('biday').value);
    //      $photographer1= new PhotographyBook();
    //     if ($photographer.getTime() > $photographer1.getTime()) {
    //       alert("The first date is after the second date!");
    //     }
    //   }



     public function delete($id)
     {
      // $photographer=PhotographyBook::find($id);
      //   $photographer->delete();
      PhotographyBook::where('id', $id)->delete();
         return redirect()->back();
     }


}
