@extends('layouts.master')
@section('title','Photography')
 @section('content')  
 

<div class="photographer-header-area" style="background-image: url('{{asset('public/uploads/photographers/back/'.$photographer->background_img)}}'); background-size:cover;background-position:center;">
	<div class="container">
        <div class="begin ">
            <section class="main">
                <div class="main-content">
                    <span class="hello">Hello Everyone!</span>
                    <h1 class="main-title">I'm {{$photographer->name}} and a photographer.</h1>
                    <figure>
                        <blockquote class="blockquote" style="color: white">
                          <p>" A photograph is a secret about a secret. The more it  tells you <br/>the less you know."</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                          Someone famous  <cite title="Source Title"></cite>
                        </figcaption>
                    </figure>
                    <div class="social">
                        <a href="#"><img src="{{asset('public/user_asset/asset')}}/icons/social/twitter.svg" alt=""></a>
                        <a href="#"><img src="{{asset('public/user_asset/asset')}}/icons/social/instagram.svg" alt=""></a>
                        <a href="https://dribbble.com/ashleylewis/collections/245645-prv-chr"><img src="{{asset('public/user_asset/asset')}}/icons/social/dribbble.svg" alt=""></a>
                        <a href="#"><img src="{{asset('public/user_asset/asset')}}/icons/social/send.svg" alt=""></a>
                    </div>
                </div> 
            </section>         
        </div>
    </div>  
</div>
<div class="about-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 photography-about">
                 <h5>About</h5>
                <div class="about-info">
                    <h1>My name is {{$photographer->name}} and I have been a professional photographer since 2003.</h1>
                    <p>What is important to my work is the individual picture. I photograph stories on assignment, and of course they have to be put together coherently. But what matters most is that each picture stands on its own, with its own place and feeling </p>
                    <div class="py-2">
                        <h6>Lifestyle Photos​</h6>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="pb-2">
                        <h6>Birthday photography:</h6>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="pb-2">
                        <h6>Anniversary photography:</h6>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="pb-5">
                        <h6>Fashion photography:</h6>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    {{-- <a href="{{action('User\IndexController@contact')}}">Learn More</a> --}}
                </div>
            </div>         
            <div class="col-md-6 about-img">
                <img src="{{asset('public/uploads/photographers/profile/'.$photographer->profile_img)}}" alt="">
            </div> 
        </div>
    </div>
</div>
<div class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 about-img">                
                    <img src="{{asset('public/user_asset/asset')}}/image/portfolio/birthdayphotography2.jpg" alt="">
            </div>
            <div class="col-md-1 pt-5"> 
                <h5>Services</h5>
            </div>
            <div class="col-md-5 pt-5">                
                 <div class="about-info">
                     <h1 span>
                    Lifestyle Photos​
                    Landscape Photos​
                    Wedding Photos​
                    Fashion Photos​
                    Birthday Photos​
                    Studio Photos​
                     </h1>    
                     <div class="col-md-5 pb-5">
                        <iframe width="400px" height="250px" src="https://www.youtube.com/embed/NfjhI7GYyR4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>           
                    <a href="#package">View Services</a>
                 </div>
            </div>
        </div>
    </div>
</div>
<div class="ph-gallery-area pt-100">
    <div class="container">
        <div class="row">
           <div class="col-md-2">
               <h5>Portfolio</h5>
           </div>
          <div class="col-md-10 image-gallary">
             <!---Full-width images with number text-->
             @foreach($images as $row)
               <div class="mySlides">
                 <div class="numbertext">1 / 6</div>
                   <img src="{{asset('public/uploads/photographers/gallary/'.$row->image)}}" style="width:100%;height:500px;">
               </div>
           @endforeach
            <!-- Next and previous buttons -->
               <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
               <a class="next" onclick="plusSlides(1)">&#10095;</a>
           
               <!-- Image text -->
               <div class="caption-container">
                 <p id="caption"></p>
               </div>
           
               <div class="r">
               @foreach($images as $key => $row)
                 <div class="column">
                   <img class="demo cursor" src="{{asset('public/uploads/photographers/gallary/'.$row->image)}}" style="width:100%; height:100px" onclick="currentSlide({{$key+1}})" alt="The newborn photography">
                 </div>
                 @endforeach
                 <!-- <div class="column">
                   <img class="demo cursor" src="{{asset('public/user_asset/asset')}}/image/portfolio/birthdayphotography1.jpg" style="width:100%;height:100px" onclick="currentSlide(2)" alt="Enjoy moment of birthday">
                 </div>
                 <div class="column">
                   <img class="demo cursor" src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography2.jpg" style="width:100% ;height:100px" onclick="currentSlide(3)" alt="Wedding Mhs and fjords">
                 </div>
                 <div class="column">
                   <img class="demo cursor" src="{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography6.jpg" style="width:100%; height:100px" onclick="currentSlide(4)" alt="15th anniversary sam's family">
                 </div>
                 <div class="column">
                   <img class="demo cursor" src="{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography4.jpg" style="width:100%; height:100px" onclick="currentSlide(5)" alt="10th anniversary sans Couple">
                 </div>
                 <div class="column">
                   <img class="demo cursor" src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography4.jpg" style="width:100%; height:100px" onclick="currentSlide(6)" alt="Wedding ceremony">
                 </div>
               </div> -->
            </div>
        </div>
    </div>
</div>
<div class="price-area pt-100 pb-100 " id="package">
  <div class="container">
          <div class="heading-part pb-5">
              <h5 class="subtitle2">Choose your holiday</h5>
              <h1><span class="red">My Photography Packages</span></h1>
            </div>
      <div class="row"  id="package">
      @foreach($services as $row)
          <div class="col-md-4 col-sm-6 p-off">
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
                  <a href="#booked" class="read">Book Now<i class="fa fa-angle-right"></i></a>
              </div>
          </div>
      @endforeach
          
      </div>
  </div>
</div>
<div class="photographer-contact-area bg" id="booked" style="background-image: url('{{asset('public/user_asset/asset')}}/image/bg-01.jpg');">
  <div class="container">
      <div class="row" style="color: white">
          <div class="col-md-5 my-5 pt-5" >
              <div class="row">
                  <div class="col-xl-7 mx-5 my-5 mt-5">
                      <h4><i class="fas fa-map-marker-alt"></i> Address</h4>
                      <p>Zindabazar,Sylhet,Bangladesh</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12 mx-5">
                      <h4><i class="fas fa-phone-alt"></i> Lets Talk</h4>
                      <p>+880 160 1236879</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12 mx-5 my-5">
                      <h4><i class="fas fa-envelope-open-text"></i> General Support</h4>
                      <p>eras234@gmail.com</p>
                  </div>
              </div>
          </div>
          <div class="col-md-7 px-5 py-5">

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
                {{-- {{$photographer->name}} --}}
                @if ($photographer->isAvailabile == 'yes')
                <form  method="post" action="{{action ('User\PhotographyBookController@store')}}">
                @csrf
                    <input type="hidden" name="photographer_id" value="{{$photographer->id}}">
                  
                <div class="form-group pt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Your First Name*</label>
                             <input type="text" class="form-control" name="first_name" style="text-transform: capitalize;" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" 
                             class="form-control"  placeholder="Enter First Name" required>
                        </div>
                        <div class="col-md-6">
                            <label>Your Last Name*</label>
                             <input type="text" class="form-control" name="last_name" style="text-transform: capitalize;" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" 
                             class="form-control"  placeholder="Enter last Name" required>
                        </div>
                        
                    </div>
                </div>
                <div class="form-group">
                
                        
                            <label>Photographer Name*</label>
                             <input type="text" class="form-control" name="name" value="{{$photographer->name}}" style="text-transform: capitalize;" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" 
                             class="form-control"  placeholder="Enter First Name" required disabled="disabled">
                       
                </div>
                <div class="form-group">
                    <label>Email Address (please double check spelling)</label>
                    <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="name@example.com" required>
                </div>
            
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="tel" class="form-control" name="mobile_no" placeholder="+880" pattern="[+880]{4}[0-9]{10}" title="Mobile number should only contain lowercase letters. e.g. +88017********" required>
                    </div>
                    <div class="form-group">
                        <label>Package name</label>
                        <select name="package_id" class="form-control">
                        
                        <option value="">Select a  Name</option>
                        
                        @foreach ($services as $item)
                            <option value="{{$item->id}}">{{$item->name}}  [ ${{$item->price}}]</option>
                        @endforeach
                    </select>
                </div>

                {{-- <div class="row">
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
                </div> --}}

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
                      <div class="mt-3 alert alert-success">
                          {{ session()->get('message') }}
                      </div>  
                      @endif      
                </form>
                @else
                  <h4 class="px-5" style="margin-top:200px">This photographer is not available right now</h4>
                @endif 
            </div>
        </div>
    </div>
</div> 

@endsection 