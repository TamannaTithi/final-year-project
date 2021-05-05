<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Offers;
//use App\OfferDetails;
//use App\OfferImages;

class OfferController extends Controller
{
    
        public function index()
        {
          /*  return view('admin.offer.offer');*/
            $offers=Offers::all();
           return view('admin.offer.offer',compact('offers'));
        }
   public function create()
    {
        return view('admin.offer.offercreate');
    }
    public function store(Request $request)
    {
       $offer= new Offers ();
       $offer->name=$request->name;
       $offer->description=$request->description;
       $offer->offer_type=$request->offer_type;
       if($request->hasFile('image')){
        $extension=$request->image->extension();
        $fileName=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
        $fileName=$fileName.'.'.$extension;
        $offer->image=$fileName;
        $request->image->move('public/uploads/offers/',$fileName);

      }
      
       $offer->slug=str_slug($request->name,'_');
       $offer->save();

       return redirect('admin/offers');
    }
   public function update_page($id)
    {
      $offer=Offers::find($id);
      return view('admin.offer.offerupdate', compact('offer'));
    }
    public function update(Request $request){
        $offer=Offers::find($request->id);
        //return $photographer;
       $offer->name=$request->name;
        $offer->description=$request->description;
        $offer->offer_type=$request->offer_type;

        if($request->hasFile('image')){
  
          $path=public_path('uploads/offers/'.$offer->image);
          if(file_exists($path)){
              unlink($path);
          }
  
          $extension=$request->image->extension();
          $fileName=str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s' ));
          $fileName=$fileName.'.'.$extension;
          $offer->image=$fileName;
          $request->image->move('public/uploads/offers/',$fileName);
  
        }
           $offer->save();
           return redirect('admin/offers');
    
      }
  
      public function delete($id)
      {
         $offer=Offers::find($id);
         $offer->delete();
          return redirect()->back();
      }
      // public function offer_details($id){
      //   $offer = Offers::find($id);
      //   $images = OfferImages::where('offer_id',$id)->get();
      //   $details =OfferDetails::where('offer_id',$id)->get();
      //   return view('admin.offer.offerdetails',compact('offer','images','details'));
      // }
  
      // public function offer_images(Request $request){
      //   //dd($request->all());
      //   if ($request->hasFile('image')) {
  
      //     $images = $request->file('image');
      //     $count = count($images);
  
      //     for ($i=0; $i < $count; $i++) { 
      //       $extension = $images[$i]->extension();
      //       $fileName = rand(178902,000000).'.'.$extension;
      //       $path = public_path('uploads/offers/gallary');
      //       $images[$i]->move($path,$fileName);
  
      //       $offer = new OfferImages();
      //       $offer->offer_id = $request->id;
      //       $offer->image = $fileName;
      //       $offer->save();
      //     }
      //   }
      //   return redirect()->back();
        
      // }
      // public function photo_delete($id)
      // {
      //    $photos= OfferImages::find($id);
      //    $photos->delete();
      //     return redirect()->back();
      // }
  
      // public function details_store(Request $request)
      // {
      //    $details= new OfferDetails ();
      //    $details->name=$request->name;
      //    $details->offer_id=$request->id;
      //    $detail = [];
      //     foreach ($request->description as $name){
      //         $detail[] = [
      //             'name' => $name,
      //         ];
      //     }
      //     $details->description = json_encode($detail);
        
      //    $details->save();
  
      //    return redirect()->back();
      // }
      
      // public function details_delete($id)
      // {
      //    $details=OfferDetails::find($id);
      //    $details->delete();
      //     return redirect()->back();
      // }
  
     
    
    
}
