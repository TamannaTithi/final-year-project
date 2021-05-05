<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Photographer;
use App\PhotographersImage;
use App\PhotographerServices;
use app\ProfileImage;
class PhotographyController extends Controller
{
    public function index()
    {
         $photographers=Photographer::all();
       return view('admin.photographies.photography',compact('photographers'));
    }
    public function create()
    {
        return view('admin.photographies.photocreate');
    }
    public function store(Request $request)
    {
      
       $photographers= new Photographer ();
       $photographers->name=$request->name;
       $photographers->address=$request->address;
       $photographers->description=$request->description;
       $photographers->experience=$request->experience;
       if($request->hasFile('image')){
        $extension=$request->image->extension();
        $fileName=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName=$fileName.'.'.$extension;
        $photographers->image=$fileName;
        $request->image->move('public/uploads/photographers/',$fileName);

      }
      if($request->hasFile('profile_img')){
        $extension2=$request->profile_img->extension();
        $fileName2=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName2=$fileName2.'.'.$extension2;
        $photographers->profile_img=$fileName2;
        $request->profile_img->move('public/uploads/photographers/profile',$fileName2);

      }
      if($request->hasFile('background_img')){
        $extension1=$request->background_img->extension();
        $fileName1=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName1=$fileName1.'.'.$extension1;
        $photographers->background_img=$fileName1;
        $request->background_img->move('public/uploads/photographers/back',$fileName1);

      }
       $photographers->slug=str_slug($request->name,'_');
       $photographers->save();
       return redirect('admin/photographers');
    }
    public function update_page($id)
    {
      $photographer=Photographer::find($id);
      return view('admin.photographies.photoupdate', compact('photographer'));
    }
    public function update(Request $request){
      $photographer=Photographer::find($request->id);
      //return $photographer;
     $photographer->name=$request->name;
     $photographer->address=$request->address;
      $photographer->description=$request->description;
      $photographer->experience=$request->experience;
      if($request->hasFile('image')){

        $path=public_path('uploads/photographers/'.$photographer->image);
        // if(file_exists($path)){
        //     unlink($path);
        // }

        $extension=$request->image->extension();
        $fileName=str_slug($request->name,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName=$fileName.'.'.$extension;
        $photographer->image=$fileName;
        $request->image->move('public/uploads/photographers',$fileName);

      }
      if($request->hasFile('profile_img')){

        $path=public_path('uploads/photographers/profile/'.$photographer->profile_img);
        // if(file_exists($path)){
        //     unlink($path);
        // }

        $extension2=$request->profile_img->extension();
        $fileName2=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName2=$fileName2.'.'.$extension2;
        $photographer->profile_img=$fileName2;
        $request->profile_img->move('public/uploads/photographers/profile',$fileName2);

      }
     
      if($request->hasFile('background_img')){

        $path=public_path('uploads/photographers/back/'.$photographer->background_img);
        // if(file_exists($path)){
        //     unlink($path);
        // }

        $extension1=$request->background_img->extension();
        $fileName1=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName1=$fileName1.'.'.$extension1;
        $photographer->background_img=$fileName1;
        $request->background_img->move('public/uploads/photographers/back',$fileName1);

      }
         $photographer->save();
         return redirect('admin/photographers');
    }
    public function delete($id)
    {
       $photographer=Photographer::find($id);
       $photographer->images()->delete();
       $photographer->services()->delete();
       $photographer->delete();
        return redirect()->back();
    }
    public function book_off($id)
    {
      $photographer=Photographer::find($id);
      $photographer->isAvailabile='no';
      $photographer->save();
        return redirect()->back();
    }
    public function book_on($id)
    {
      $photographer=Photographer::find($id);
      $photographer->isAvailabile='yes';
      $photographer->save();
        return redirect()->back();
    }
   
    public function view($id){
      $photographer = Photographer::find($id);
      $images = PhotographersImage::where('photographer_id',$id)->get();
      $services = PhotographerServices::where('photographer_id',$id)->get();
      return view('admin.photographies.photoview',compact('photographer','images','services'));
    }
    public function photographer_images(Request $request){
      //dd($request->all());
      if ($request->hasFile('image')) {

        $images = $request->file('image');
        $count = count($images);

        for ($i=0; $i < $count; $i++) { 
          $extension = $images[$i]->extension();
          $fileName = rand(178902,000000).'.'.$extension;
          $path = public_path('uploads/photographers/gallary');
          $images[$i]->move($path,$fileName);

          $pi = new PhotographersImage();
          $pi->photographer_id = $request->id;
          $pi->image = $fileName;
          $pi->save();
        }
      }
      return redirect()->back();
      
    }
    public function photo_delete($id)
    {
       $photos=PhotographersImage::find($id);
       $photos->delete();
        return redirect()->back();
    }

    public function service_store(Request $request)
    {
       $services= new PhotographerServices ();
       $services->photographer_id=$request->id;
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
       $services=PhotographerServices::find($id);
       $services->delete();
        return redirect()->back();
    }
}

