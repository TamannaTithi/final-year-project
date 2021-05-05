@extends('layouts.master')
@section('title','venue')
@section('content')
<!--Start bannar-->
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/eventslider2.jpg');">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Venue</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">Service We Provide</li>
                    <li class="breadcrumb-item active">Venue</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@php
$luxury = App\EventVenue::where('eventvenue_type','Luxury Venue')->get();
$premium = App\EventVenue::where('eventvenue_type','Premium Venue')->get();
$budget  = App\EventVenue::where('eventvenue_type','Budget Friendly Venue')->get();
$decoration  = App\EventVenue::where('eventvenue_type','Decoration')->get();
$last_slider  = App\EventVenue::where('eventvenue_type','Last_Slider')->get();
@endphp
<div class="venue-main-area pt-100 pb-100">
    <div class="container">
        <div class="text-center py-5">
            <h1 >Two Luxury halls for you</h1>
            <h5 class="subtitle2 pt-2">Select the halls for your<span> special day</span></h5>
        </div>
        <div class="offset-2 col-md-8 ">
            <div class="row">
                @foreach($luxury as $item)
                    <div class="col-md-6 sp-card">
                        <div class="card__content">
                          <div class="card__front" style="background-image: url('{{asset('public/uploads/venues/'.$item->image)}}');">
                            
                            <h5 class="card__title">{{$item->name}}</h5>
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
</div>
<!--start events hall-->
<section class="venue-area pt-100 pb-100">
    <div class="container">
            <div class="text-center py-5">
                <h1 >All the premium halls for you</h1>
                <h5 class="subtitle2 pt-2">Select the halls for your<span> special day</span></h5>
            </div>
        <div class="row">
        @foreach($premium as $item)
          <div class="col-md-4 col-sm-6 single-premium-venue">
           
                <div class="box21">
                    <img src="{{asset('public/uploads/venues/'.$item->image)}}" alt="">
                    <div class="box-content">
                        <h3 class="title">Premium Hall</h3>
                        <span class="post">৳
                            {{$item->price}}<br>
                            East Dargah Gate, Amberkhana, Sylhet.
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">{{$item->description}}</p>
                    <a class="ven-btn" href="#booked">Book Now</a> 
                  </div>
            </div>
            @endforeach
            
        </div>
    </div>     
</section>
<div class="normal-venue-area pt-100 pb-100">
    <div class="container">
        <div class="text-center py-5">
            <h1 class="subtitle2 pb-2">Explore Some Budget-friendly Halls!</h1>
            <h5>A chance to be more delightful</h5>   
        </div>         
        <div id="hall" class="owlCarousel">
        @foreach($budget as $item)
            <div class="box21 ">
                <img src="{{asset('public/uploads/venues/'.$item->image)}}" alt="">
                <div class="box-content">
                    <h3 class="title">Exclusive Hall</h3>
                    <span class="post">Price started from ৳
                        {{$item->price}}</span>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                <p class="card-text">{{$item->description}}</p>
                <a class="ven-btn" href="#booked">Book Now</a>                       
            </div>          
               @endforeach
        </div>
    </div>
</div>
<!--start birthday-hall-->
<section class="birthday-hall-area pt-100">
    <div class="container">
            <h1 class="subtitle2 text-center py-5">Some Restaurants Offers Exclusive Birthday Decoration!</h1>
        <div class="row ">
            @foreach($decoration as $item)
                <div class="col-md-4 col-sm-6 single-premium-venue pb-5">    
                    <div class="box20">
                        <img src="{{asset('public/uploads/venues/'.$item->image)}}" alt="" height="250px">
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                        <div class="box-content">
                            <h3 class="title">Birthday Hall</h3>
                            <span class="post">৳
                                {{$item->price}}</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">{{$item->description}}</p>
                        <a class="ven-btn" href="#booked">Book Now</a> 
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--start story area-->
{{-- <section class="story-area pt-100 pb-100">
    <div class="container">
        <div class="text-center py-5">
            <h1 class="subtitle2 pb-2">Let's Discuss More!</h1>
            <h5>Discover the best spots to host a celebration, gathering or getaway.</h5>    
        </div>
        <div id="story-lists"  class="owl-carousel">
        @foreach($last_slider as $item)
                <div class="single-story">
                    <img src="{{asset('public/uploads/venues/'.$item->image)}}" alt=""/>
                    <div class="story-content">
                        <p>{{$item->description}} </p>
                    </div>
                    
                </div>
            <!--    <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg2.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
               <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg3.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg4.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg5.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg6.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg7.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg8.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>-->
                @endforeach
        </div>
    </div>
</section> --}}
<section class="story-area pt-100 pb-100">
    <div class="container">
        <div class="text-center py-5">
            <h1 class="subtitle2 pb-2">Let's Discuss More!</h1>
            <h5>Discover the best spots to host a celebration, gathering or getaway.</h5>    
        </div>
        <div id="story-lists"  class="owl-carousel">
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg1.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg2.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg3.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg4.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg5.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg6.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg7.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
                <div class="single-story">
                    <img src="{{asset('public/user_asset/asset')}}/image/eventstoryimg8.jpg" alt=""/>
                    <div class="story-content">
                        <p>When you think of a tropical getaway with your friends or loved ones, what comes to </p>
                    </div>
                </div>
        </div>
    </div>
</section>
<!--End story area-->
{{-- <div class="venue-part4-area">
    <div class="container">
        <div class="card-columns">
            <div class="card">
              <img class="card-img-top" src="{{asset('public/user_asset/asset')}}/image/birthdayhall8.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title that wraps to a new line</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
            <div class="card p-3">
              <blockquote class="blockquote mb-0 card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                  <small class="text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{asset('public/user_asset/asset')}}/image/birthdayhall8.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card bg-primary text-white text-center p-3">
              <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                <footer class="blockquote-footer">
                  <small>
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="{{asset('public/user_asset/asset')}}/image/birthdayhall8.jpg" alt="Card image">
            </div>
            <div class="card p-3 text-right">
              <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                  <small class="text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
    </div>
</div> --}}
<!--end birthday-hall-->
<!--End events hall-->
<div class="wed-event-booking-area pt-100 pb-100" id="booked">
  <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="wed-book">
                    <div class="wed-book-title">
                      <h2>Need Help? Book an Appointment</h2>
                    </div>
                    <form  method="post" action="{{action ('User\VenueBookController@store')}}">
                      @csrf                 
                      <!-- Form start -->
                        <div class="row">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br/>
                            @endif
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Name*</label>
                                    <input type="text" name="username" style="text-transform: capitalize;" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" 
                                    class="form-control"  placeholder="Enter Your Name" required>
                                </div>
                            </div>
                          <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="name@example.com" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="phone">Mobile Number</label>
                                    <input type="tel" class="form-control input-md" name="mobile_no" placeholder="+880" pattern="[+880]{4}[0-9]{10}" title="Mobile number should only contain lowercase letters. e.g. +88017********" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Venue name</label>
                                        <select name="event_venue_id"   class="form-control">
                                            <option value="">Select a  Name</option>
                                            @foreach ($venues as $item)
                                                <option value="{{$item->id}}">{{$item->name}}  [ ৳
                                            {{$item->price}}]</option>
                                            @endforeach
                                
                                        </select>
                                </div>
                            </div>
                       
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Starting Time & Date </label>
                                    <input class="form-control" type="datetime-local" name="start" value="2021-03-18T13:00"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>To</label>
                                    <input class="form-control" type="datetime-local" name="end" value="2021-03-18T13:00">  
                                    
                                </div>
                            </div>                        
                          <!-- Select Basic -->
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Let's write something</label>
                                  <textarea class="form-control" name="message" placeholder="Write something.." >
                                      
                                  </textarea>
                                </div>
                            </div>
                          <!-- Button -->
                            <div class="col-md-12">
                              <div class="form-group">
                                  <button type="submit" button id="singlebutton" name="singlebutton" class="btn btn-warning">Make An Appointment</button>
                              </div>
                            </div>
                        </div>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>  
                        @endif  
                    </form>
                  <!-- form end -->
                </div>
          </div>
          <div class="col-md-5">
              <div class="well-block">
                  <div class="well-title">
                      <h2>Why Appointment with Us</h2>
                  </div>
                  <div class="feature-block">
                      <div class="feature feature-blurb-text">
                          <h4 class="feature-title">24/7 Hours Available</h4>
                          <div class="feature-content">
                              <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                          </div>
                      </div>
                      <div class="feature feature-blurb-text">
                          <h4 class="feature-title">Experienced Staff Available</h4>
                          <div class="feature-content">
                              <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                          </div>
                      </div>
                      <div class="feature feature-blurb-text">
                          <h4 class="feature-title">Low Price & Fees</h4>
                          <div class="feature-content">
                              <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
  