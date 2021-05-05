<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shopping;

class ShoppingController extends Controller
{
    public function index()
    {
      /* return view('admin.shopping.shopping');*/
       $shop=Shopping::all();
       return view('admin.shopping.shopping',compact('shop'));
    }
    public function create()
    {
        return view('admin.shopping.shoppingcreate');
    }
    public function store(Request $request)
    {
       $shop= new Shopping ();
       $shop->name=$request->name;
       $shop->type=$request->type;
       $shop->details=$request->details;
       if($request->hasFile('image')){
        $extension=$request->image->extension();
        $fileName=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName=$fileName.'.'.$extension;
        $shop->image=$fileName;
        $request->image->move('public/uploads/shopping/',$fileName);

      }
      if($request->hasFile('slider_image')){
        $extension=$request->slider_image->extension();
        $fileName=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName=$fileName.'.'.$extension;
        $request->slider_image->move('public/uploads/shopping/',$fileName);

      }
      $info = [];
      foreach ($request->description as $name){
          $info[] = [
              'name' => $name,
          ];
      }
      $shop->  description= json_encode($info);

      
     
       $shop->price=$request->price;
      
       $shop->slug=str_slug($request->name,'_');
       $shop->save();

       return redirect('admin/shopping');
    }
    public function update_page($id)
    {
      $shop=Shopping::find($id);
      return view('admin.shopping.shoppingupdate', compact('shop'));
    }
    public function update(Request $request){
        $shop=Shopping::find($request->id);
        $shop->type=$request->type;
        $shop->name=$request->name;
       
       $shop->details=$request->details;

     
       $shop->price=$request->price;
      
        if($request->hasFile('image')){
  
          $path=public_path('uploads/shopping/'.$shop->image);
          if(file_exists($path)){
              unlink($path);
          }
  
          $extension=$request->image->extension();
          $fileName=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
          $fileName=$fileName.'.'.$extension;
          $shop->image=$fileName;
          $request->image->move('public/uploads/shopping/',$fileName);
  
        }
        if($request->hasFile('slider_image')){
  
          $path=public_path('uploads/shopping/'.$shop->slider_image);
          if(file_exists($path)){
              unlink($path);
          }
  
          $extension=$request->slider_image->extension();
          $fileName=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
          $fileName=$fileName.'.'.$extension;
          $request->slider_image->move('public/uploads/shopping/',$fileName);
  
        }
       
        
       
           $shop->save();
           return redirect('admin/shopping');
    
      }
  
      public function delete($id)
      {
         $shop=Shopping::find($id);
         $shop->delete();
          return redirect()->back();
      }
         
  
        
}
