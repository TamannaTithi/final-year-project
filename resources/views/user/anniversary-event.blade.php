@extends('layouts.master')
@section('title','Anniversary')
@section('content')
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography.jpg')">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Anniversary</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">Event</li>
                    <li class="breadcrumb-item active">Anniversary</li>
                </ol>
            </nav>
        </div>
    </div>
</div>  
<div class="event-main-area pt-100">
    <div class="container">
        <div class="brth-content text-center">
            <img src="{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography7.jpg" alt="" width="950px">
            <div class="brth-main py-5">
                <div class="brth-single-content">
                    <img src="{{asset('public/user_asset/asset')}}/image/service/balloon3.1.png" alt="" width="300px">
                </div>
                <div class="brth-single-content">
                    <h1 class="red subtitle2">Choose as you want</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente consequatur maxime temporibus laborum cum hic, esse enim bus deleniti dicta eum eligendi tempore expedita, aperiam nesciunt animi molestias! Maxime libero ea aliquid doloremque dolore.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente consequatur maxime temporibus laborum cum hic, esse enim quae iste doloribus fugit? Id laboriosam voluptate earum exercitationem atque, ipsum voluptas. Dolorem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure illo quo repellendus! Quia suscipit, est provident fugiat ab sapiente nobis amet nostrum qui eveniet quo enim voluptatum doloremque, maiores doloribus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis iure praesentium ipsum qui doloribus deleniti dicta eum eligendi tempore expedita, aperiam nesciunt animi molestias! Maxime libero ea aliquid doloremque dolore</p>
                     <a href="{{action('User\IndexController@contact')}}"><button type="button" class="btn btn-danger mt-3">Know More</button></a>
                </div>
                <div class="brth-single-content">
                    <img src="{{asset('public/user_asset/asset')}}/image/service/balloon3.png" alt="" width="300px">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brth-booking-area bg  pt-100 pb-100" style="background-image: url('{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography3.jpg')">
    <div class="container">
        <div class="col-md-12">
            <h1 class="yellow pb-5">We make your events smart & impactful by personalised event management services</h1>
            <a href="#booked"><button class="btn btn btn-warning">Book Appointment</button></a> 
        </div>
    </div>
</div>
<div class="brth-part1-area">
    <div class="container">
        <div class="row pt-100 h-400">
            <div class="col-md-6 py-5">
                <h1 class="red py-3">COUPLE CELEBRATION</h1>
                <p class="pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit reiciendis praesentium suscipit fugit. Perferendis cumque facilis magnam asperiores veniam nostrum accusantium repellendus voluptatum laboriosam error. Qui rerum nostrum ex provident!</p>
            </div>
            <div class="col-md-6 bg" style="background-image: url('{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography5.jpg" alt="">
            </div>
        </div>
        <div class="row pb-100 h-400">
            <div class="col-md-6 bg" style="background-image: url('{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography6.jpg" alt="">

            </div>
            <div class="col-md-6 py-5">
                <h1 class="yellow py-3">FAMILY CELEBRATION!</h1>
                <p class="pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit reiciendis praesentium suscipit fugit. Perferendis cumque facilis magnam asperiores veniam nostrum accusantium repellendus voluptatum laboriosam error. Qui rerum nostrum ex provident!</p>
            </div>
        </div>
    </div>
</div>
{{-- <div class="brth-service-area pt-100 pb-100">
    <div class="container">
           <div class="row">
               <div class="col-md-4">
                   <div class="brth-service-main">
                       <div class="service">
                           <div class="service-logo">
                               <img src="{{asset('public/user_asset/asset')}}/image/birthday/venue.png">
                            </div>
                           <h4>Venue</h4>
                           <p>Lorem ipsum dolor sit amet, di dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Excepteur sint qui officia deserunt Excepteur.</p>
                       </div>
                       <div class="shadowone">

                       </div>
                       <div class="shadowtwo">

                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                <div class="brth-service-main">
                    <div class="service">
                        <div class="service-logo">
                            <img src="{{asset('public/user_asset/asset')}}/image/birthday/photography.png">
                         </div>
                        <h4>Photographer</h4>
                        <p>Lorem ipsum dolor sit amet, di dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Excepteur sint qui officia deserunt Excepteur.</p>
                    </div>
                    <div class="shadowone">

                    </div>
                    <div class="shadowtwo">
                        
                    </div>
                </div>
            
               </div>
               <div class="col-md-4">
                <div class="brth-service-main">
                    <div class="service">
                        <div class="service-logo">
                            <img src="{{asset('public/user_asset/asset')}}/image/birthday/eyeshadow.jpg">
                         </div>
                        <h4>MakeUp</h4>
                        <p>Lorem ipsum dolor sit amet, di dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Excepteur sint qui officia deserunt Excepteur.</p>
                    </div>
                    <div class="shadowone">

                    </div>
                    <div class="shadowtwo">
                        
                    </div>
                </div>
            
               </div>
           </div>
            <a href=""><button type="button" class="btn btn-danger my-5">More Services</button></a> 
    </div>
</div>
<div class="price-area pb-100 ">
    <div class="container">
            <div class="heading-part pb-5">
                <h5 class="subtitle2">Choose your holiday</h5>
                <h1><span class="red">Our Events Packages</span></h1>
              </div>
        <div class="row"  id="package">
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="heading">BASIC</h3>
                        <span class="subtitle">From</span>
                        <div class="price-value">29,999
                            <span class="currency">৳</span>
                            
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>4 Hours</li>
                        <li>Up to 10 Persons</li>
                        <li>Decoration</li>
                        <li>Catering</li>                    
                    </ul>
                    <a href="#booked" class="read">Book Now<i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 ">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="heading">STARDARDED</h3>
                        <span class="subtitle">From</span>
                        <div class="price-value">89,999
                            <span class="currency">৳</span>
                            
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>6 Hours</li>
                        <li>Up to 70 Persons</li>
                        <li>Decoration</li>
                        <li>Catering</li>                    
                    </ul>
                    <a href="#booked" class="read">Book Now<i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="heading">PRIMIUM</h3>
                        <span class="subtitle">From</span>
                        <div class="price-value">99,999
                            <span class="currency">৳</span>
                            
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>9 Hours</li>
                        <li>Up to 100 Persons</li>
                        <li>Decoration</li>
                        <li>Catering</li>                    
                    </ul>
                    <a href="#booked" class="read">Book Now<i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="wed-event-booking-area pt-100 pb-100" id="booked">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="wed-book">
                    <div class="wed-book-title">
                        <h2>Need Help? Book an Appointment</h2>
                    </div>
                    <form  method="post" action="{{action('User\AnniversaryBookController@store')}}">
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
                           </div><br />
                           @endif
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Name*</label>
                                    <input type="text" name="name" style="text-transform: capitalize;" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" 
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
                                    <label>Time & Date</label>
                                    <input class="form-control my-2" type="datetime-local" name="time_date" value="2021-03-18T16:00">
                                </div>
                            </div>
                            
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
