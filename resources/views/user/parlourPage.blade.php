@extends('layouts.master')
@section('title','Parlour')
@section('content')
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/parlour/banner2.jpg'); ">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Parlour</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">Parlour List</li>
                    <li class="breadcrumb-item active">Parlour</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section class="parlour-area py-5">
    <div class="container">
        <div class="pr-banner-text pr-title-text">
            <h1>{{$parlours->name}}<p></p></h1>
            <h5>Style Your Beauty Is Style Your Life </h5>
            <div class="row pt-3">
                <div class="card">
                    <h4>Location</h4>
                    <p>{{$parlours->address}}</p>
                </div>
                <div class="card ml-3">
                    <h4>Contact</h4>
                    <p>{{$parlours->mobile_no}}</p>
                </div>
                <div class="card ml-3">
                    <h4>Email</h4>
                   <a class="s" href=""> <p>{{$parlours->email}}</p></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Features-->
<section class="pr-features-area">
    <div class="container">
       <div class="pr-feature-box">
             <div class="pr-features">
                <h1 class="subtitle2">Famous Parlours</h1>
                 <div class="pr-features-desc">                
                <div class="pr-feature-icon">
                    <i class="fas fa-thumbs-up"></i>
                </div>
                <div class="pr-feature-text">
                    <p>This kind of service is new for town. we will serve you the beautiful things</p>
                </div>
                 </div>
            <h1 class="subtitle2">Pre Booking online</h1>
            <div class="pr-features-desc">                
                <div class="pr-feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="pr-feature-text">
                    <p>This kind of service is new for town. we will serve you the beautiful things</p>
                </div>
            </div>
            <h1 class="subtitle2">Best Services in price</h1>
            <div class="pr-features-desc">                
                <div class="pr-feature-icon">
                    <i class="fas fa-search-dollar"></i>
                </div>
                <div class="pr-feature-text">
                    <p>This kind of service is new for town. we will serve you the beautiful things</p>
                </div>
            </div>
             </div>
            <div class="pr-features-img">
                <img src="{{asset('public/user_asset/asset')}}/image/parlour/f33.jpg">                
            </div>
        </div>
    </div>
</section>
<!-- shops service-->
<section class="pr-service-area pt-100 pb-100">
    <div class="container">
        <div class="pr-title-text">
            <p>Popular Service</p>
            <h1>We Provide Better</h1>
        </div>
        <div class=" row pr-service-box">
            <div class="pr-single-service">
                <img src="{{asset('public/user_asset/asset')}}/image/parlour/p5.jpg">
                <div class="parlour-overlay">
                    <h6>Hair style</h6>
                    <P>৳300</P>
                </div>
                <hr>
            </div>
            <div class="pr-single-service">
                <img src="{{asset('public/user_asset/asset')}}/image/parlour/face-makeover.jpg">
                <div class="parlour-overlay">
                    <h6>Face Makeover</h6>
                    <P>From ৳1200</P>
                </div>
                <hr>
            </div>
            <div class="pr-single-service">
                <img src="{{asset('public/user_asset/asset')}}/image/parlour/eyebrow-threading.webp">
                <div class="parlour-overlay">
                    <h6>Eyebrow Threading</h6>
                    <p>৳100</p>
                </div>
                <hr>
            </div>
        </div>
        <div class="row pr-service-box">
           <div class="pr-single-service">
                <img src="{{asset('public/user_asset/asset')}}/image/parlour/b3.jpg">
                <div class="parlour-overlay">
                    <h6>Manicure & Pedicures</h6>
                    <P>৳600</P>
                </div>
                <hr>
            </div>
            <div class="pr-single-service">
                <img src="{{asset('public/user_asset/asset')}}/image/parlour/pf3.jpg">
                <div class="parlour-overlay">
                    <h6>Filler / Botox</h6>
                    <P>From ৳500</P>
                </div>
                <hr>
            </div>
            <div class="pr-single-service">
                <img src="{{asset('public/user_asset/asset')}}/image/parlour/makeup-servies66.jpg">
                <div class="parlour-overlay">
                    <h6>Semi-Permanent<br>Makeup</h6>
                    <p>From ৳1000</p>
                </div>
                <hr>
            </div>
        </div>
    </div>
</section>
<div class="pr-price-area pt-100 pb-5">
    <div class="container">
        <div class="heading-part pb-5">
            <h5 class="subtitle2">Choose your holiday</h5>
            <h1><span class="yellow">Our Events Packages</span></h1>
        </div>
        <div class="row">
            <div class="col-md-6 pr-price-left">
                <div class="pr-price-left-content">
                    <h5>Makeover</h5>
                    <p>-</p>
                    <p>৳1000</p>
                </div>
                <div class="pr-price-left-content">
                    <h5>Cut & Style</h5>
                    <p>-</p>
                    <p>৳500</p>
                </div>
                <div class="pr-price-left-content">
                    <h5>Makeover</h5>
                    <p>-</p>
                    <p>৳800</p>
                </div>
                <div class="pr-price-left-content">
                    <h5>Makeover</h5>
                    <p>-</p>
                    <p>৳1000</p>
                </div>
                <div class="pr-price-left-content">
                    <h5>Makeover</h5>
                    <p>-</p>
                    <p>৳500</p>
                </div>
            </div>
            <div class="col-md-6 pr-price">
                @foreach($parlour_services as $row)
                <div class="col-md-6 col-sm-6 p-off">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="heading">{{$row->name}}</h3>
                            <span class="subtitle">From</span>
                            <div class="price-value">{{$row->price}} 
                                <span class="currency"> ৳</span>
                            </div>
                        </div>
                        <ul class="pricing-content">
                            @foreach(json_decode($row->packages) as $item)
                                <li>{{$item->name}}</li>
                            @endforeach  
                        </ul>
                        <a href="#booked" class="read">Book Now<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="pr-price-area2 pt-5 pb-100 ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pr-price">
            @foreach($parlour_services as $row)
                <div class="col-md-6 col-sm-6 p-off">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="heading">{{$row->name}}</h3>
                        <span class="subtitle">From</span>
                        <div class="price-value">{{$row
                        ->price}} 
                            <span class="currency"> ৳</span>
                            
                        </div>
                    </div>
                    <ul class="pricing-content">
                        @foreach(json_decode($row->packages) as $item)
                        <li>{{$item->name}}</li>
                      @endforeach               
                                             
                    </ul>
                    <a href="#booked" class="read">Book Now<i class="fa fa-angle-right"></i></a>
                </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6 pr-price-left">
                

                <div class="pr-price-left-content">
                    <h5>Makeover</h5>
                    <p>-</p>
                    <p>৳500</p>
                </div>
                
                <div class="pr-price-left-content">
                    <h5>Makeover</h5>
                    <p>-</p>
                    <p>৳1200</p>
                </div>
                <div class="pr-price-left-content">
                    <h5>Makeover</h5>
                    <p>-</p>
                    <p>৳1000</p>
                </div>
                <div class="pr-price-left-content">
                    <h5>Makeover</h5>
                    <p>-</p>
                    <p>৳600</p>
                </div>
                <div class="pr-price-left-content">
                    <h5>Makeover</h5>
                    <p>-</p>
                    <p>৳400</p>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="photographer-contact-area text-white pt-100 pb-100" id="booked">
    <div class="container">
        <div class="row">
            <div class="col-md-5 my-5" style="background-image: url('{{asset('public/user_asset/asset')}}/image/parlour/barber-man.jpg'); height:700px; background-size:cover; color:white;">
                <div class="row">
                    <div class="col-xl-7 mx-5 my-5 mt-5">
                        <h4><i class="fas fa-map-marker-alt"></i> Address</h4>
                        <p>Zindabazar, Sylhet, Bangladesh
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 mx-5">
                        <h4><i class="fas fa-phone-alt"></i> Lets Talk</h4>
                        <p>+88 0163 456 789
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 mx-5 my-5">
                        <h4><i class="fas fa-envelope-open-text"></i> General Support</h4>
                        <p>eras234@Gmail.Com
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 px-5 py-5 text-dark">
  
             @if ($errors->any())
              <div class="alert alert-danger">
                 <ul>
                    @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                   @endforeach
                </ul>
             </div><br />
             @endif
              <h3 class="text-center">Get In Touch</h3>
                @if ($parlours->isAvailable == 'yes')
                <form  method="post" action="{{action('User\ParlourbookController@store')}}">
                  @csrf
                  <input type="hidden" name="parlour_id" value="{{$parlours->id}}">
                       
                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Parlours Name*</label>
                             <input type="text" name="parlour_name" value="{{$parlours->name}}"style="text-transform: capitalize;" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" 
                             class="form-control"  placeholder="Enter First Name" required disabled="disabled">
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="row">
                          <div class="col-md-12">
                              <label>Your Name*</label>
                               <input type="text" name="name" style="text-transform: capitalize;" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" 
                               class="form-control"  placeholder="Enter First Name" required>
                          </div>
                        </div>
                  </div>
                  <div class="form-group">
                      <label>Email Address (please double check spelling)</label>
                      <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="name@example.com" required>
                  </div>
              
                      <div class="form-group">
                          <label>Mobile Number: </label>
                          <input type="tel" class="form-control" name="mobile_no" placeholder="+880" pattern="[+880]{4}[0-9]{10}" title="Mobile number should only contain lowercase letters. e.g. +88017********" required>
                      </div>
                      <div class="form-group">
                        <label>Package name</label>
                        <select name="package_id" id="" class="form-control">
                           <option value="">Select a  Name</option>
                         @foreach ($parlour_services as $item)
                            <option value="{{$item->id}}">{{$item->name}}  [ ৳{{$item->price}}]</option>
                        @endforeach
                        </select>
                      </div>                     
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Starting Time & Date </label>
                            <input class="form-control my-2" type="datetime-local" name="start" value="2021-06-13T13:00"> 
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>To</label>
                            <input class="form-control my-2" type="datetime-local" name="end" value="2021-06-13T13:00">    
                                
                          </div>
                    </div>
                </div>

                        {{--  <div class="form-group">
                  
                          <label class="control-label" for="date">From</label>
                          <input id="date" name="date" type="date" placeholder="Preferred Date" class="form-control input-md">
                      </div>
                      <div class="form-group">
                          <label class="control-label" for="date">To</label>
                          <input placeholder="Preferred Date" type="date" class="form-control input-md">
                      </div>
                      <div class="form-group row g-3">
                          <label class="control-label" for="date">Prefered Time</label>
                          <div class="col-md-3">
                              <input id="date" name="date" type="time" placeholder="Preferred Date" class="form-control input-md">
                          </div>
                          
                          <label class="control-label" for="date">To</label>
                          <div class="col-md-3">
                              <input id="date" name="date" type="time" placeholder="Preferred Date" class="form-control input-md">
                          </div>
                          
                      </div> --}}
                      <div class="form-group">   
                    <label>Let's set you up for a session! Ask us anything in here.</label>
                    <textarea class="form-control" name="message" required></textarea>
                  </div>
               <div class="form-group">
                  <button type="submit" class="mt-3 btn btn-danger submit">Confirm</button>               
                @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>  
                        @endif      
                </form>
                @else                   
                    <h4 class="pl-5" style="margin-top:200px">This parlour service is not available right now</h4>
                @endif 
          </div>  
             
        </div>
    </div>
  </div> 
</div>  
@endsection
