<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Photographer;
use App\PhotographerServices;
use App\Parlour;
use App\ParlourServices;
use App\PhotographersImage;
use App\Offers;
use App\OfferImages;
use App\OfferDetails;
use App\Shopping;
use App\EventVenue;
use App\Contact;
use App\EventList;
use App\BirthdayBook;
use App\AnniversaryBook;
use App\EventVenueBook;
use App\EventPage;
use App\EventServices;




class IndexController extends Controller
{
    public function index(){
       return view('user.index');
    }
    public function gallery(){
        return view('user.gallery');
    }
    public function photoList(){
        /*return view('user.profile-photography');*/
        $photographers=Photographer::all();
        return view('user.profile-photography',compact('photographers'));
       
    }
    public function photo($id){
       /* return view('user.portfolio-photography');*/
       $photographer=Photographer::find($id);
       $images=PhotographersImage::where('photographer_id',$id)->get();
        $services=PhotographerServices::where('photographer_id',$id)->get();
        return view('user.portfolio-photography',compact('photographer','services', 'images' ));
    }
    public function event(){
       return view('user.events');
    }
    public function birthdayEvent(){
        $bookbirthday=BirthdayBook::all();
        return view('user.birthday-event');
    }
    public function weddingEvent(){
        return view('user.wedding-event');
    }
    public function anniversaryEvent(){
        $bookanniversary=AnniversaryBook::all();
        return view('user.anniversary-event');
    }
    public function parlourList(){
        /*return view('user.parlorList');*/
        $parlours=Parlour::all();
        return view('user.parlorList',compact('parlours'));
       
    }
    public function parlour($id){
     /*   return view('user.parlourPage');*/
        $parlours=Parlour::find($id);
        $parlour_services=ParlourServices::where('parlour_id',$id)->get();
        return view('user.parlourPage',compact('parlour_services','parlours'));
        
    }
    public function shopping(){
      /*  return view('user.shopping');*/
       $shop=Shopping::all();
       return view('user.shopping',compact('shop'));
   
    }
    public function venue(){
        $venues = EventVenue::all();
        return view('user.venue',compact('venues'));
    
    }
    public function about(){
        return view('user.whoWeare');
    }
    public function contact(){
        $contact=Contact::all();
        return view('user.contact');
    }
    public function offer(){
      /*  return view('user.sp-offer');*/
      $offer = Offers::all();
       return view('user.sp-offer',compact('offer'));
    }
    public function content(){
        return view('user.content');
    }
    public function cake(){
        return view('user.cake');
    }
    public function appointment(){
    //  $events=Eventpage::find($id);
    //  $events=EventList::where('event_page_id',$id)->get();
    //     $services=EventServices::where('event_page_id',$id)->get();
    //      return view('user.appointment',compact('events','services'));
    $events=EventList::all();
    return view('user.appointment', compact('events'));
        
    }
    public function event_services(){
        $events=EventPage::all();
        return view('user.eventname',compact('events'));
       
      //  return view('user.eventname');
    }
   
    public function package($id){
        $events=EventPage::find($id);
        
         $services=EventServices::where('event_page_id',$id)->get();
         return view('user.packagebook',compact('events','services'));
      //  return view('user.packagebook');
    }
   
}
