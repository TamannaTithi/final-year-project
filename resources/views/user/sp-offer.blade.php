@extends('layouts.master')
@section('title','Special Offer')
@section('content')
<!--Start bannar-->
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/offer/offerBg.jpg')">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Special Offer</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">Special Offer</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@php
$special = App\Offers::where('offer_type','Special Offer')->get();
$summer = App\Offers::where('offer_type','Summer Sale')->get();
$combo = App\Offers::where('offer_type','Combo Offer')->get();
@endphp
<!--------Offer part-1------->
<div class="offer-main-area pt-100 pb-100">
    <div class="container">
          <div class="text-center py-5">                
              <h4 class="subtitle2 red">Special Offer<br><br>Offers on Branded Items</h4>
              <p>Get 50% discount on top brands.Limited Offer.Grab yours.</p>
          </div>           
        <div class="row"> 
            @foreach($special as $item)
                <div class="col-md-4 sp-card">
                    <div class="card__content">
                    <div class="card__front" style="background-image: url('{{asset('public/uploads/offers/'.$item->image)}}">
                        <h3 class="card__title">{{$item->name}}</h3>
                        <p class="card__subtitle">Discount on Branded Items</p>
                    </div> 
                    <div class="card__back">
                        <p class="card__body">{{$item->description}}</p>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!------------Offer part-2----------->

<div class="offer-part2-area pt-100 pb-100">
    <div class="container">
        <div class="text-center py-5">                
            <h4 class="subtitle2 yellow">Hello Summer<br>Summer Sale</h4>
            <p>Get upto 50% discount on popular items.Limited Offer.Grab yours</p>
        </div>
       <div class="sp-m-left wrapper2">
        @foreach($summer as $item)
        <div class="card_offer sp-p">
            <img src="{{asset('public/uploads/offers/'.$item->image)}}">
                <div class="info">
                    <h1>{{$item->name}}</h1>
                    <p>{{$item->description}}</p>
                    <a href="#" class="offer-btn">Read More</a>
                </div>
        </div>
        @endforeach
       </div>
    </div>
</div>

<!--Offer part-3---------------------->
<div class="offer-part3-area pt-100 pb-100">
    <div class="container"> 
         <div class="text-center py-5">
              <h4 class="subtitle2 red">Offers on Combo Product <br>Combo Offer</h4>
              <p>Get discounts on combo products.Limited Offer.Grab yours</p>
         </div>
       <div class="offer-part3">
            @foreach($combo as $item)
               <div class="card_offer3">
                    <div class="face face1">  
                        <div class="content">
                            <img src="{{asset('public/uploads/offers/'.$item->image)}}">
                             <h2>{{$item->name}}</h2>
                       </div>
                     </div>
                <div class="face face2">
                       <div class="content">
                          <p>{{$item->description}}</p>
                       </div>
                </div>
             </div>
            @endforeach
        </div>
    </div>
</div>
@endsection