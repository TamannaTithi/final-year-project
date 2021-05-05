@extends('layouts.master')
@section('title','Home')
@section('content')
<div class="slide-area">
    <div class="container-fluid p-off">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade"   data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img  src="{{asset('public/user_asset/asset')}}/image/wedding1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block slide-center">
                    <h1 class="cake">WELCOME TO THE ERAS</h1>
                    <p class="animate__animated animate__fadeInDown">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="{{asset('public/user_asset/asset')}}/image/photo.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block slide-center ">
                    <h1>We Can Decorate As You Love</h1>
                    <p class="animate__animated animate__fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="{{asset('public/user_asset/asset')}}/image/shop.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block slide-center">
                    <h1>You Can Shop Whatever You Want</h1>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset('public/user_asset/asset')}}/image/makeup.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block slide-center">
                    <h1>We serve with our heart</h1>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="{{asset('public/user_asset/asset')}}/image/wedding1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block slide-center">
                        <h1>Customer Are Our Main Priority</h1>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
             </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="intro-area pt-100 pb-100 ">
    <div class="container">
        <div class="heading-part">
            <h5 class="subtitle2">Hello there!</h5>
            <h1><span class="red">We’ll make your next celebration <br/>
                very special!</span></h1>
        </div>
        <div class="intro-main pb-5">
           <div class="row">
                <div class="intro-content">
                    <div class="card intro-card">
                        <figure>
                        <div id="zoom-in"> 
                            <img
                            src="{{asset('public/user_asset/asset')}}/image/service/service-1.jpg" style="width:300px; height:200px"
                            alt="..."
                            /> 
                        </div> 
                        </figure>
                        <div class="content">
                        <a href="{{action('User\IndexController@birthdayEvent')}}"><h5>Birthdays</h5></a>
                        </div>
                    </div> 
                </div>
                <div class="intro-content">
                    <div class="card intro-card ">
                        <figure>
                            <div id="zoom-in">
                                <img
                                src="{{asset('public/user_asset/asset')}}/image/wedding2.jpg" style="width:300px; height:200px"
                                alt="..."
                            />
                            </div>
                        </figure>                   
                        <div class="content">
                            <a href="{{action('User\IndexController@weddingEvent')}}"><h5>Weddings</h5></a>
                        </div>
                    </div>
                </div>
           </div>
            <div class="row">
                <div class="intro-content">
                    <div class="card intro-card ">
                        <figure>
                            <div id="zoom-in">
                                <img
                                src="{{asset('public/user_asset/asset')}}/image/photo/wedd1.jpg" style="width:300px; height:200px"
                                alt="..."
                              />
                            </div>
                        </figure>    
                      <div class="content">
                        <a href="{{action('User\IndexController@weddingEvent')}}"><h5>Wedding</h5></a>                        
                      </div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="card intro-card ">
                        <figure>
                            <div id="zoom-in">
                               <img src="{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography.jpg" style="width:300px; height:200px" alt="..."/> 
                            </div>
                        </figure> 
                        <div class="content">
                            <a href="{{action('User\IndexController@anniversaryEvent')}}"><h5>Anniversary</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- <a href=""><button type="button" class="btn btn-warning btn-view-info">View info</button></a>     --}}
    </div>
</div>
<div class="single-img-area bg pt-100 pb-100 ">
    <div class="container">
        <div class="single-img">
            <h1 class="yellow pb-5">
                We create,
                you –<br>
                celebrate!
            </h1>
            <h5 class="subtitle2 pb-5" style="color: white">Order birthday package from ৳ 9,999 </h5>
            <a href="{{action('User\IndexController@birthdayEvent')}}">        <button type="button" class="btn btn-warning">View info</button></a>
        </div>
    </div>
</div>
<!--  Start Service   -->
<div class="other-services-area pt-100 pb-100 " style="background: linear-gradient(#f3eaea,#8b107821);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mx-5 my-5">
                <h5 class="subtitle2">Other Services</h5>
                <h1> <span class="red"> All of our customers are partner <br>in our mission</span></h1>
            </div>
        </div>
        <div class="services-main">
            <div class="services">
                <div class="double-service">
                    <div id="zoom-in">
                        <figure>
                                <img src="{{asset('public/user_asset/asset')}}/image/service/3.jpg" alt="">
                                <figcaption>
                                    <div class="info">
                                    <a href="{{action('User\IndexController@photoList')}}">                                   
                                    ...</a>
                                    </div>
                                </figcaption>
                        </figure>
                    </div>
                    <h5>Photography</h5>
                    <p>Dolor oluptatem nostrum sapiente explicabo? Temporevoluptate doloremque, totam nemo?</p>
                </div>   
                <div class="double-service py-3">    
                    <div id="zoom-in">
                        <figure>
                            <img src="{{asset('public/user_asset/asset')}}/image/parlour/face-makeover.jpg" alt="">
                            <figcaption>
                                <div class="info">
                                    <a href="{{action('User\IndexController@parlourList')}}">...
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <h5>Makeup</h5>
                    <p>Consectetur elit sed lusm tempor incidant temdore ut labore etua dolore.</p>
                </div>    
            </div>
            <div class="middle-service px-4">
                <div class="sp-card p-off h-650">
                    <div class="card__content">
                      <div class="card__front h-650" style="background-image: url('{{asset('public/user_asset/asset')}}/image/service/1.jpg'); ">
                        <h3 class="card__title"></h3>
                        <p class="card__subtitle"></p>
                      </div> 
                      
                      <div class="card__back h-650">
                        <p class="card__body">Stay with us and Get more services</p>
                      </div>
                    </div>
                </div>
            </div>
            <div class="services2">
                <div class="double-service">  
                    <div id="zoom-in">
                        <figure>
                        <img src="{{asset('public/user_asset/asset')}}/image/photo/venue.jpg" alt="">
                        <figcaption>
                            <div class="info">
                                <a href="{{action('User\IndexController@venue')}}">...</a>
                            </div>
                        </figcaption>
                        </figure>
                    </div>
                        <h5>Venue</h5>
                        <p>Sit incidant temdore ut labore etua dolore.</p>                    
                </div> 
                <div class="double-service py-3"> 
                    <div id="zoom-in">
                        <figure>
                            <img src="{{asset('public/user_asset/asset')}}/image/service/shopping1.jpg" alt="">
                            <figcaption>
                                <div class="info">
                                <a href="{{action('User\IndexController@photoList')}}">...</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <h5>Shopping</h5>
                    <p>Lorem ipsum a nihil asperiores tempora expedita quos alias nobis mollitia ab impedit.</p>
                </div>    
            </div> 
        </div>  
    </div>
</div>
<!--                             Working process          -->
<div class="working-process-area light-bg  pt-100 pb-100">
    <div class="container">
        <div class="heading-part pb-5">
            <h5 class="subtitle2">How it works</h5>
            <h1><span class="yellow">It’s simple. You have an event<br/>
                to plan and we have the solutions</span></h1>
        </div>
        <div class="works py-5">
            <div class="works-design">
                <span>
                    1
                </span>
                <h5>Find the perfect<br> venue for free</h5>
                <a href="{{action('User\IndexController@venue')}}"><i class="fas fa-chevron-circle-down"></i></a>
            </div>
            <div class="works-design">
                <span>
                    2
                </span>
                <h5>Connect with the best vendor</h5>
                <a href="{{action('User\IndexController@contact')}}"><i class="fas fa-chevron-circle-down"></i></a>
            </div>
            <div class="works-design">
                <span>
                    3
                </span>
                <h5>Let us help you with the event</h5>
                <a href="{{action('User\IndexController@event')}}"><i class="fas fa-chevron-circle-down"></i></a>
            </div>
        </div>
        <div class='mx-auto col-12' style="text-align: center">
            <div class="hd red">Why People Believe in Us</div>
            <p><small class="text-muted1">Always render more and better service than <br />is expected of you, no matter what your ask may be.</small></p>
            <div class="row" style="justify-content: center; margin-top:3rem;">
                <div class="card col-md-3 col-12 work-content">
                    <div class="card-content">
                        <div class="card-body"> <img class="img" src="{{asset('public/user_asset/asset')}}/image/service/best1.png" />
                            <div class="shadow"></div>
                            <div class="card-title"> We're Free </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted1">We spent thousands of hours creating on algorithm that does this for you in seconds. We collect a small fee from the professional after they meet your</small> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-md-3 col-12 ml-2 work-content">
                    <div class="card-content">
                        <div class="card-body"> <img class="img" src="{{asset('public/user_asset/asset')}}/image/service/best2.png" />
                            <div class="card-title"> We're Unbiased </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted1"> We don't accept ads from anyone. We use actual data to match you who the best person for each job </small> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-md-3 col-12 ml-2 work-content">
                    <div class="card-content">
                        <div class="card-body"> <img class="img rck" src="{{asset('public/user_asset/asset')}}/image/service/best3.png" />
                            <div class="card-title"> We Guide you </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted1 dark">Buying or selling a home is often the largest transaction anyone does in their life. we guide you through the process so that you can be confident in reaching your dream outcome.</small> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{action('User\IndexController@about')}}"><button class="btn btn-warning btn-works">Learn More</button></a>
    </div>
</div>
<div class="index-working-process-area pt-100 pb-100">
    <div class="container">
        <div class="row">
             <div class="col-md-6 py-5 index-video-left">
                <h1>Our Working Process</h1>
                 <p>You have an event to plan and we have the solution. As the premier event planning company in our country, we know that it’s not “one size fits all.” Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, nihil. Recusandae, alias doloremque fugit nam at vel eius ab, enim, dolorum nihil illum aliquam consectetur rerum. In commodi doloremque tempora?</p>
                <a href="{{action('User\IndexController@about')}}"><button class="btn btn-danger">Learn More</button></a>
             </div>  
             <div class="col-md-6 py-5 text-center">
                <iframe width="450" height="360" src="https://www.youtube.com/embed/ipw1fQad5sg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div>
        </div>
    </div>
</div>
<div class="testimonial-area py-5">
    <div class="container">
        <div class="heading-part pt-5">
            <h5 class="subtitle2" style="color: white">Testimonials</h5>
            <h1><span class="yellow">Satisfied clients about us</span></h1>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-12">
                <span class="top-icon"><i class="fa fa-quote-left"></i></span>
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{asset('public/user_asset/asset')}}/image/home/img-3.jpg" alt="">
                            
                        </div>
                        <div class="testimonial-content">
                            <h3 class="testimonial-title">Williamson </h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem. Est, exercitationem id ipsa ipsum laboriosam perferendis temporibus!
                            </p>
                        </div>
                    </div> 
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{asset('public/user_asset/asset')}}/image/home/img-2.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3 class="testimonial-title">kristiana</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem. Est, exercitationem id ipsa ipsum laboriosam perferendis temporibus!
                            </p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{asset('public/user_asset/asset')}}/image/home/img-4.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3 class="testimonial-title">Miranada Joy - </h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem. Est, exercitationem id ipsa ipsum laboriosam perferendis temporibus!
                            </p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{asset('public/user_asset/asset')}}/image/home/img-5.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3 class="testimonial-title">Miranada Joy</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem. Est, exercitationem id ipsa ipsum laboriosam perferendis temporibus!
                            </p>
                        </div>
                    </div>
                </div>
                <span class="bottom-icon"><i class="fa fa-quote-right"></i></span>
            </div>
        </div>
    </div>
</div>
<div class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row  pb-5">
           <div class="col text-center">
                <h5 class="heading subtitle2"><span>Eras</span> Gallery</h5>
                <h1 class="red">Make your event special!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md p-off border-around">
                <div class="single-portfolio">
                    <div id="zoom-in">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/birthdayphotography.jpg" alt="" width="100%">
                    </div> 
                    <div class="portfolio-overlay">
                        <a href="{{action('User\IndexController@gallery')}}"><i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md p-off border-around">
                <div class="single-portfolio" id="zoom-in">
                    <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography6.jpg" alt="" width="100%">
                    <div class="portfolio-overlay">
                        <i class="fas fa-plus-circle"></i>
                    </div>
                </div>
            </div>
            <div class="col-md p-off border-around">
                <div class="single-portfolio" id="zoom-in">
                    <img src="{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography3.jpg" alt="" width="100%">
                    <div class="portfolio-overlay">
                        <i class="fas fa-plus-circle"></i>
                    </div>
                </div>
            </div>
            <div class="col-md p-off border-around">
                <div class="single-portfolio" id="zoom-in">
                    <img src="{{asset('public/user_asset/asset')}}/image/portfolio/newbornphotography4.jpg" alt="" width="100%">
                    <div class="portfolio-overlay">
                        <i class="fas fa-plus-circle"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md p-off border-around">
                <div class="single-portfolio" id="zoom-in">
                    <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography7.jpg" alt="" width="100%" height="350px">
                    <div class="portfolio-overlay">
                        <i class="fas fa-plus-circle"></i>
                    </div>
                </div>
            </div>
            <div class="col-md p-off border-around">
                <div class="single-portfolio" id="zoom-in">
                    <img src="{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography1.jpg" alt="" width="100%" height="350px">
                    <div class="portfolio-overlay">
                        <i class="fas fa-plus-circle"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-off border-around bg" style="background-image: url('{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography6.jpg')">
                <h5 class="yellow ">See Our Best Events Gallery!</h5>
                <a href="{{action('User\IndexController@gallery')}}"><button type="button" class="btn btn-danger">View Gallery </button></a>
            </div>
        </div>
    </div>
</div>
<div class="price-area pt-100 pb-100 ">
    <div class="container">
            <div class="heading-part pb-5">
                <h5 class="subtitle2">Choose your holiday</h5>
                <h1><span class="red">Our Most Demanded Events Packages</span></h1>
              </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="heading">BIRTHDAY <br> PACKAGES</h3>
                        <span class="subtitle">From</span>
                        <div class="price-value">29,999
                            <span class="currency">৳</span>                            
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>4 Hours</li>
                        <li>Up to 50 Persons</li>
                        <li>Decoration</li>
                        <li>Catering</li>                    
                    </ul>
                    <a href="{{action('User\IndexController@birthdayEvent')}}" class="read">View Packages<i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="heading">WEDDING <br> PACKAGES</h3>
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
                    <a href="{{action('User\IndexController@weddingEvent')}}" class="read">View Packages<i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="heading">ANNIVERSARY PACKAGES</h3>
                        <span class="subtitle">From</span>
                        <div class="price-value">59,999
                            <span class="currency">৳</span>
                            
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>9 Hours</li>
                        <li>Up to 100 Persons</li>
                        <li>Decoration</li>
                        <li>Catering</li>                    
                    </ul>
                    <a href="{{action('User\IndexController@anniversaryEvent')}}" class="read">View Packages<i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="countup-area bg  pt-100 pb-100"  style="background-image: url('{{asset('public/user_asset/asset')}}/image/venue.jpg')">
    <div class="container">
        <div class="row text-center">
            <div class="col">
               <div class="counter">
                    <i class="fa fa-code fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="320" data-speed="90000">100</h2>
                    <p class="count-text">Featured Events</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <i class="fa fa-coffee fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="152" data-speed="80000"></h2>
                    <p class="count-text ">Loyal Customers</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <i class="far fa-lightbulb fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="594" data-speed="90000"></h2>
                    <p class="count-text ">Good Comments</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <i class="fa fa-bug fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="157" data-speed="90000"></h2>
                    <p class="count-text">Trophies Won</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="team section">
    <div class="container">
        <h5 class="subtitle2">Our best team</h5>
        <h1 class="team-section-title red">Our Team of Professionals</h1>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item">
                    <figure>
                        <img src="{{asset('public/user_asset/asset')}}/image/home/team3.jpg" alt="">
                        <figcaption>
                            <div class="info">
                                <h3>Jessica Smith</h3>
                                <p>Developer</p>
                            </div>
                            <div class="team-social">
                                <a href="#" class="twitter" data-abc="true"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="facebook" data-abc="true"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="google-plus" data-abc="true"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item">
                    <figure>
                        <img src="{{asset('public/user_asset/asset')}}/image/home/team6.jpg" alt="">
                        <figcaption>
                            <div class="info">
                                <h3>Temta Swang</h3>
                                <p>Team Leader</p>
                            </div>
                            <div class="team-social">
                                <a href="#" class="twitter" data-abc="true"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="facebook" data-abc="true"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="google-plus" data-abc="true"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item">
                    <figure>
                        <img src="{{asset('public/user_asset/asset')}}/image/home/team4.jpg" alt="">
                        <figcaption>
                            <div class="info">
                                <h3>Michael Slater</h3>
                                <p>Junior Developer</p>
                            </div>
                            <div class="team-social">
                                <a href="#" class="twitter" data-abc="true"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="facebook" data-abc="true"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="google-plus" data-abc="true"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection