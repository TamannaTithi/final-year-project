@extends('layouts.master')
@section('title','Booking')
@section('content')
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/venue10.jpg');">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Packages</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">Event</li>
                    <li class="breadcrumb-item active">Services</li>
                    <li class="breadcrumb-item active">Package</li>
                </ol>
            </nav>
        </div>

    </div>
</div>
<div class="price-area pb-100 pt-100 ">
    <div class="container">
            <div class="heading-part pb-5">
                <h5 class="subtitle2">Choose your holiday</h5>
                <h1><span class="red">Our Events Packages</span></h1>
              </div>
        <div class="row" id="package">
            @foreach($services as $row)
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="heading">{{$row->name}}</h3>
                        <span class="subtitle">From</span>
                        <div class="price-value">{{$row->price}}
                            <span class="currency">৳</span>
                            
                        </div>
                    </div>
                    <ul class="pricing-content">
                        @foreach(json_decode($row->packages) as $item)
                        <li>{{$item->name}}</li>
                      @endforeach               
                   
                                            
                    </ul>
                    <a href="" class="read">Book Now<i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        @endforeach
            
        </div>
    </div>
</div>

 
<div class="wed-event-booking-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="wed-book">
                    <div class="wed-book-title">
                        <h2>Need Help? Book an Appointment</h2>
                    </div>
                    <form  method="post" action="{{action('User\PackageController@store')}}">
                        @csrf
                         <input type="hidden" name="event_page_id" value="{{$events->id}}">
                        <!-- Form start -->
                        <div class="row">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                               <ul>
                                  @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                                 @endforeach
                              </ul>
                           </div><br />
                           @endif
               
                           <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label" for="name"> Event Name</label>
                              <input id="name" name="event_type" value="{{$events->event_type}}" type="text"onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"  placeholder="Name" class="form-control input-md">
                          </div>
                      </div>
                            <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label" for="name"> Your Name</label>
                                    <input id="name" name="username" type="text"onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"  placeholder="Name" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                    <input id="email" name="email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="E-Mail" class="form-control input-md">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="phone">Mobile Number</label>
                                    <input type="tel" class="form-control input-md" name="mobile_no" placeholder="+880" pattern="[+880]{4}[0-9]{10}" title="Mobile number should only contain lowercase letters. e.g. +88017********" required>
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label" for="name">Event Type</label>
                                  <input id="name" name="event_type" type="text"onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"  placeholder="Enter  Your Event Name" class="form-control input-md">
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label" for="name">Package Name</label>
                              <input id="name" name="package_name" type="text"onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"  placeholder="Enter  Your Event Name" class="form-control input-md">
                          </div>
                      </div> --}}
                          {{-- <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label" for="name">Package</label>
                              <input id="name" name="package_name" type="text"onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"  placeholder="Enter Package Name" class="form-control input-md">
                          </div>
                      </div> --}}
                            <!-- Text input-->
                            {{-- <div class="col-md-6">
                                <div class="form-group"> 
                                    <label class="control-label" for="date">Preferred Date</label>
                                    <input id="date" name="date" type="date" placeholder="Preferred Date" class="form-control input-md">
                                </div>
                            </div> --}}
                            <!-- Select Basic -->
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="time">Preferred Time</label>
                                    <select name="event_page_id"   class="form-control">
                                        <option value="">Select a  Name</option>
                                        @foreach ($events as $item)
                                            <option value="{{$item->id}}">{{$item->event_type}}</option>
                                        @endforeach
                            
                                    </select>
                                </div>
                            </div>  --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label class="control-label" for="name"> Package Name</label>
                                  <input id="name" name="package_name" type="text"onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"  placeholder="Name" class="form-control input-md">
                              </div>
                          </div>
                                
                            
                            <!-- Select Basic --> 
                            {{-- <div class="row"> --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Start time & date</label>
                                        <input class="form-control my-2" type="datetime-local" name="start" value="2021-03-18T16:00">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>End time & date</label>
                                        <input class="form-control my-2" type="datetime-local" name="end" value="2021-03-18T16:00">
                                    </div>
                                </div>
                            {{-- </div> --}}
                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="appointmentfor">Appointment For</label>
                                    <input name="others" type="text" placeholder="Others" class="form-control input-md">
                                </div>
                            </div> --}}
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Anything you wanna to add</label>
                                    <textarea class="form-control" name="message" placeholder="Write something..">
                                        
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