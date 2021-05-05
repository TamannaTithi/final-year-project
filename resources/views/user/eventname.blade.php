@extends('layouts.master')
@section('title','Booking')
@section('content')
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/venue6.jpg');">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Services</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">Event</li>
                </ol>
            </nav>
        </div>

    </div>
</div>
<div class="wed-event-booking-area pt-100 pb-100">
<div class="brth-service-area pt-100 pb-100">
    <div class="container">
           <div class="row">
            @foreach($events as $item)
               <div class="col-md-4">
                   <div class="brth-service-main">
                  
                       <div class="service">
                       
                           <div class="service-logo">
                               <img src="{{asset('public/user_asset/asset')}}/image/birthday/venue.png">
                            </div>
                           
                           <h4>{{$item->event_type}}</h4>
                           <p>Lorem ipsum dolor sit amet, di dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Excepteur sint qui officia deserunt Excepteur.</p>
                           <a href="{{action('User\IndexController@package',['id' => $item->id])}}"><button type="button" class="btn btn-danger">Book package</button></a>
                           
                       </div>
                       
                       <div class="shadowone">

                       </div>
                       <div class="shadowtwo">

                       </div>
                       {{-- <a href="{{action('User\IndexController@package',['id' => $item->id])}}"><button type="button" class="btn btn-danger">Book package</button></a>
                       --}}
                   </div>
                  
                </div>
                @endforeach
           </div>
           {{-- <a href=""><button type="button" class="btn btn-danger my-5">More Services</button></a> --}}
    </div>
</div>
</div>

@endsection