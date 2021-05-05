<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Parlour;
use App\ParlourImages;
use App\ParlourServices;
use App\ParlourBook;

class ParlourController extends Controller
{
    public function index()
    {
         $parlours=Parlour::all();
       return view('admin.parlours.parlour',compact('parlours'));
    }
    public function create()
    {
         return view('admin.parlours.photocreate');
    }
    public function store(Request $request)
    {
       $parlours= new Parlour();
       $parlours->name=$request->name;
       $parlours->description=$request->description;
       $parlours->address=$request->address;
       $parlours->mobile_no=$request->mobile_no;
       $parlours->email=$request->email;
       if($request->hasFile('image')){
        $extension=$request->image->extension();
        $fileName=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName=$fileName.'.'.$extension;
        $parlours->image=$fileName;
        $request->image->move('public/uploads/parlours/',$fileName);

      }
      
       $parlours->slug=str_slug($request->name,'_');
       $parlours->save();

       return redirect('admin/parlours');
    }
    public function update_page($id)
    {
      $parlours=Parlour::find($id);
      return view('admin.parlours.photoupdate', compact('parlours'));
    }
    public function update(Request $request){
      $parlours=Parlour::find($request->id);
      //return $parlours;
      $parlours->name=$request->name;
      $parlours->description=$request->description;
      $parlours->address=$request->address;
      $parlours->mobile_no=$request->mobile_no;
      $parlours->email=$request->email;
      if($request->hasFile('image')){

        $path=public_path('uploads/parlours/'.$parlours->image);
        // if(file_exists($path)){
        //     unlink($path);
        // }

        $extension=$request->image->extension();
        $fileName=str_slug($request->name,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName=$fileName.'.'.$extension;
        $parlours->image=$fileName;
        $request->image->move('public/uploads/parlours',$fileName);

      }
         $parlours->save();
         return redirect('admin/parlours');
  
    }
    public function delete($id)
    {
       $parlours = Parlour::find($id);
       $parlours->images()->delete();
       $parlours->services()->delete();
       $parlours->book()->delete();
       $parlours->delete();
       return redirect()->back();
    }
    public function book_off($id)
    {
      $parlours= Parlour::find($id);
      $parlours->isAvailable='no';
      $parlours->save();
        return redirect()->back();
    }
    public function book_on($id)
    {
      $parlours= Parlour::find($id);
      $parlours->isAvailable='yes';
      $parlours->save();
        return redirect()->back();
    }
   
    public function view($id){
      $parlour = Parlour::find($id);
      $images = ParlourImages::where('parlour_id',$id)->get();
      $services = ParlourServices::where('parlour_id',$id)->get();
      return view('admin.parlours.parlourview',compact('parlour','images','services'));
    }
    public function parlour_images(Request $request){
      //dd($request->all());
      if ($request->hasFile('image')) {

        $images = $request->file('image');
        $count = count($images);

        for ($i=0; $i < $count; $i++) { 
          $extension = $images[$i]->extension();
          $fileName = rand(178902,000000).'.'.$extension;
          $path = public_path('uploads/parlours/gallary');
          $images[$i]->move($path,$fileName);

          $pi = new ParlourImages();
          $pi->parlour_id = $request->id;
          $pi->image = $fileName;
          $pi->save();
        }
      }
      return redirect()->back();
      
    }
    public function photo_delete($id)
    {
       $photos=ParlourImages::find($id);
       $photos->delete();
        return redirect()->back();
    }

    public function service_store(Request $request)
    {
       $services= new ParlourServices ();
       $services->name=$request->name;
       $services->parlour_id=$request->id;
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
       $services=ParlourServices::find($id);
       $services->book()->delete();
       $services->delete();
        return redirect()->back();
    }

   
    


}
