@extends('layouts.master')
@section('title','Shopping')
@section('content')
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/offer/shopping.jpg')">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Shopping</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">Shopping</li>
                </ol>
            </nav>
        </div>
    </div>
</div>  
 <!--menu-bar----------------------------------------->
<div class="shp-navigation">
	 <!--menu-icon------------->
	 <div class="toggle"></div>
	 <!--menu----------------->
	 <ul class="shp-menu">
		 <li><a href="#">Home</a></li>
		 <li><a href="#men">Men</a>
			 <!--lable---->
			 <span class="sale-lable">Sale</span>
		 </li>
		 <li><a href="#women">Women</a></li>
		 <li><a href="#kids">Kids</a></li>
         <li><a href="#new arrival">New Arrival</a></li>
     </ul>
	 <!--right-menu----------->
	{{-- <div class="right-shp-menu">
		 <a href="javascript:void(0);" class="search">
			 <i class="fas fa-search"></i>
		 </a>
		 <a href="javascript:void(0);" class="user">
			 <i class="far fa-user"></i>
		 </a>
		 <a href="#">
			 <i class="fas fa-shopping-cart">
				 <span class="num-cart-product">0</span>
			 </i>
		 </a>
	</div> --}}
</div>
     <!--search-bar----------------------------------->
	 <div class="search-bar">
    
        <!--search-input------->
        <div class="search-input">
        <input type="text" placeholder="Search For Product" name="search" />
        <!--cancel-btn--->
        <a href="javascript:void(0);" class="search-cancel">
            <i class="fas fa-times"></i>
        </a>
    
    </div>
    </div>
	<!---login-and-sign-up--------------------------------->
    <div class="form">
        <!--login---------->
        <div class="login-form">
            <!--cancel-btn---------------->
            <a href="javascript:void(0);" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <strong>Log In</strong>
            <!--inputs-->
            <form>
                <input type="email" name="email" placeholder="Example@gmail.com" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <input type="submit" value="Log In"/>
            </form>
            <!--forget-and-sign-up-btn-->
            <div class="form-btns">
                <a href="#" class="forget">Forget Your Password?</a>
                <a href="javascript:void(0);" class="sign-up-btn">Create Account</a>
            </div>
        </div>
            <!--Sign-up---------->
            <div class="sign-up-form">
                <!--cancel-btn---------------->
            <a href="javascript:void(0);" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
                <strong>Sign Up</strong>
                <!--inputs-->
                <form>
                    <input type="text" name="fullname" placeholder="Full Name" required/>
                    <input type="email" name="email" placeholder="Example@gmail.com" required/>
                    <input type="password" name="password" placeholder="Password" required/>
                    <input type="submit" value="Sign Up"/>
                </form>
                <!--forget-and-sign-up-btn-->
                <div class="form-btns">
                    <a href="javascript:void(0);" class="already-account">
                        Already Have Account?</a>
    
                </div>
            </div>
    </div>
 @php
$men = App\shopping::where('type','Men')->get();
$women = App\shopping::where('type','Women')->get();
$kids = App\shopping::where('type','kids')->get();
$arrival = App\shopping::where('type','New Arrival')->get();
@endphp

<!-----------full-slider----------------------------->
<div class="shp-slider-area pt-100 pb-100">
    <div class="container">
        <ul id="adaptive" class="cs-hidden">
        <!--box-1--------------------------->
            <li class="item-a">
         <!---box------------------->
        <div class="full-slider-box f-slide-1">
            <div class="f-slider-text-container">
                <div class="f-slider-text">
                    <span>Limited Offer</span>
                    <strong>50% Off<br/>on <font>Branded Items</font></strong>
                    <a href="{{action('User\IndexController@offer')}}" class="f-slider-btn">See Offer</a>
                </div>
            </div>
        </div>
            </li>
         <!--box-2--------------------------->
            <li class="item-b">
                <!---box------------------->
        <div class="full-slider-box f-slide-2">
            <div class="f-slider-text-container">
                <div class="f-slider-text">
                    <span>Limited Offer</span>
                    <strong>Upto 50% Off<br/> on <font>This Summer</font></strong>
                    <a href="{{action('User\IndexController@offer')}}" class="f-slider-btn">See Offer</a>
                </div>
            </div>
        </div>
            </li>
        <!--box-3--------------------------->
        <li class="item-c">
        <!---box------------------->
        <div class="full-slider-box f-slide-3">
            <div class="f-slider-text-container">
                <div class="f-slider-text">
                    <span>Limited Offer</span>
                    <strong>Upto 30% off<br/> on <font>Combo Products</font></strong>
                    <a href="{{action('User\IndexController@offer')}}" class="f-slider-btn">See Offer</a>
                </div>
            </div>
        </div>
        </li>
        </ul>
    </div>
</div>
<div class="shp-women-cloth-area pt-100 pb-100" id="women">
    <div class="container">
        <!--product-categories-slider---------------------->
	    <ul id="autoWidth" class="container" class="cs-hidden">
            @foreach($women as $item)
		    <!--box-1--------------------->
		    <li class="item">
			    <div class="feature-box">
				    <a href="#">
                    <img src="{{asset('public/uploads/shopping/'.$item->image)}}">
				    </a>
			    </div>
			    <span>
                <ul>
                    @foreach(json_decode($item->description) as $rr)
                      <li>{{$rr->name}}</li></span>
                    @endforeach  
                    {{-- <li>{{$item->description}}</li> --}}
                    <li><h4> ৳
                        {{$item->price}}</h4></li>
                </ul>
            </li>
            @endforeach
	    </ul>
    </div>
</div>
<!--NEW ARRIVAL-------------------------------->
<div class="shp-arrival-area pt-100 " id="new arrival">
    <div class="new-arrival">            
        <!--heading-------->
        <div class="arrival-heading">
            <strong>New Arrival</strong>
            <p>We Provide You New Fasion Design Clothes</p>
        </div>
        <!--products----------------------->
        <div class="product-container">
        @foreach($arrival as $item)                  
        <!--product-box-1---------->
            <div class="product-box">
                 <!--product-img------------>
                 <div class="product-img">
                     <!--add-cart---->
                     <a href="#" class="add-cart">
                        <i class="fas fa-store"></i>
                       </a>
                     <!--img------>
                   <img src="{{asset('public/uploads/shopping/'.$item->image)}}">
                 </div>
                 <!--product-details-------->
                 <div class="product-details">
                    <a href="#" class="p-name">
                       <ul>
                       @foreach(json_decode($item->description) as $rr)
                         <li>{{$rr->name}}</li>
                       @endforeach  
                       {{-- <li>{{$item->description}}</li> --}}
                       </ul>
		    	    </a>
                    <span class="p-price">৳
                        {{$item->price}}</span>
                 </div>
            </div>
         @endforeach
        </div>
    </div>
</div>
<div class="shp-men-cloth-area pt-100 pb-100" id="men">
    <!---man------------------------------------>
    <div class="man">
    <!--man-box-1-------------------->
    @foreach($men as $item)
		<div class="man-box sale-1">
            <div class="box21 ">
                <img src="{{asset('public/uploads/shopping/'.$item->image)}}">
                <div class="box-content text-center">
                    <h3 class="title">{{$item->name}}</h3>
                    <span class="post"><p><ul>
                        @foreach(json_decode($item->description) as $rr)
                          <li>{{$rr->name}}</li>
                        @endforeach  
                        {{-- <li>{{$item->description}}</li> --}}
                        </ul></p>৳
                        {{$item->price}}</span>
                </div>
            </div>
		</div>
    @endforeach
    </div>
 </div>
 <!--Kids-items-------------------------------->
<div class="sh-kids-area pt-100 pb-100" id="kids">
    <div class="container overflow-hidden">
        <div class="new-arrival">            
            <!--heading-------->
            <div class="arrival-heading">
                <strong>Kids Items</strong>
                <p>We Provide You New Fasion Design Clothes</p>
            </div>
              <!--products----------------------->
             
            <div class="product-container">  
                @foreach($kids as $item)
                <!--product-box-1---------->
                <div class="product-box">
                      <!--product-img------------>
                    <div class="product-img">
                          <!--add-cart---->
                          <a href="#" class="add-cart"><i class="fas fa-store"></i></a>
                          <!--img------>
                          <img src="{{asset('public/uploads/shopping/'.$item->image)}}">
                     </div>
                      <!--product-details-------->
                    <div class="product-details">
                        <a href="#" class="p-name">
                        </a><ul><li>  <ul>
                            @foreach(json_decode($item->description) as $rr)
                              <li>{{$rr->name}}</li>
                            @endforeach  
                            {{-- <li>{{$item->description}}</li> --}}
                            <li><h4></h4></li>
                        </ul></li></ul>
                        <span class="p-price">৳
                            {{$item->price}}</span>
                    </div>
                </div>
                @endforeach
            </div>  
        </div> 
    </div>
</div>
<!--banner-->
<div class="banner-box f-slide-3">        
	<div class="banner-text-container">
	    <div class="banner-text">
            <strong>Enjoy Shopping<br/> For your <font> Special Day</font></strong>
            <a href="{{action('User\IndexController@offer')}}" class="f-slider-btn">See Offer</a>
	    </div>
	</div>						
</div> 
<!--services------------------------->
<section class="services">
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-shipping-fast"></i>
            <span>Free Shipping</span>
            <p>Free Shipping for all US order</p>
        </div>
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-headphones-alt"></i>
            <span>Support 24/7</span>
            <p>We support 24h a day</p>
        </div>
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-sync"></i>
            <span>100% Money Back</span>
            <p>You have 30 days to Return</p>
        </div>
        
</section>

@endsection