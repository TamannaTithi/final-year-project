@extends('layouts.master')
@section('title','Cake')
@section('content')
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/cake/cake.jpg')">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Cake</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">Special Offer</li>
                    <li class="breadcrumb-item active">Cake</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section class="cake-about-area">
    <div class="container">
        <div class="cake-row">
                <div class="col50">
                <h2 class="titleText">Get The<span> Cake!</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
                Perferendis nemo earum nihil error.Lorem ipsum dolor sit amet consectetur,adipisicing elit. Neque esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
                Perferendis nemo earum nihil error.Lorem ipsum dolor sit amet consectetur,adipisicing elit. <br> <br> esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
                Perferendis nemo earum nihil error.Lorem ipsum dolor sit amet consectetur,adipisicing elit. Neque esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
                Perferendis nemo earum nihil error.</p>
                </div>
                <div class="col50">
                    <div class="imgBX">
                        <img src="{{asset('public/user_asset/asset')}}/image/cake/cakeabout.jpg">
                    </div>
                </div>
        </div>
    </div>
</section>
<section class="cake-list">
        <div class="container">
        <div class="titleCAKE">
            <h2 class="titleText">what they <span>Say!</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

        </div>
        <div class="row content">
            <div class="col-md-4 col-sm-6">
                <div class="boxCAKE">
                <div class="imgBX">
                    <img src="{{asset('public/user_asset/asset')}}/image/cake/cakechef1.png">
                </div>
                <div class="textCAKE">
                    <h4>Ruksana Islam <br> <span>(Founder, Coffee Express)</span></h4>
                    <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam id totam iure dolorem, animi ducimus numquam, corporis laborum similique accusamus facere, beatae dolorum vero amet necessitatibus commodi harum repudiandae illum?"</p>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="boxCAKE">
                <div class="imgBX">
                    <img src="{{asset('public/user_asset/asset')}}/image/cake/cakechef2.jpg">
                </div>
                <div class="textCAKE">
                    <h4>Ferdousy Ahmed <br> <span>(Founder, Ferdousy's Cake)</span></h4>
                    <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam id totam iure dolorem, animi ducimus numquam, corporis laborum similique accusamus facere, beatae dolorum vero amet necessitatibus commodi harum repudiandae illum?"</p>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="boxCAKE">
                <div class="imgBX">
                    <img src="{{asset('public/user_asset/asset')}}/image/cake/cakechef3.jpg">
                </div>
                <div class="textCAKE">
                    <h4>Nazmul Haque <br> <span>(Founder, Afza Sweet)</span></h4>
                    <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam id totam iure dolorem, animi ducimus numquam, corporis laborum similique accusamus facere, beatae dolorum vero amet necessitatibus commodi harum repudiandae illum?"</p>
                </div>
                </div>
            </div> 
        </div>
        <div class="titleCAKE">
            <a href="#" class="cake-btn">Book Now</a>
        </div>
</div>
</section>
<section class="Cake-shop">
        <div class="container">
            <div class="titleCAKE">
                 <h2 class="titleText">Top cake <span>shops!</span></h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
      <!-----------------------------------1st Shop-------------------------------------------->  
        <ul>
         <li>
            <div class="shop-box">
                <div class="titleCAKE">
                    <h2 class="titleText">Ferdousy's Cake</h2>    
                </div>
               <div class="row-shop">
                <div class="col50-shop">
                    <div class="slideIMG SlideOne">
                    </div>
                    <div class="call-now">
                        <i class="fas fa-phone-alt"></i>
                        <h4><span>Call:</span> 0197424124</h4> 
                    </div>
                </div>                
                <div class="col50-shop">
                    <div class="shop-content">
                <h2 class="titleText"><span>About</span> Us</h2>
                <ul>
                    <li><p><span>Location:</span> Bondor Bazar</p></li>
                    <li><p><span>More Branch:</span> Arcadia, Zindabazar</p></li>
                    <li><p><span>Location:</span> Amberkhana</p></li>
                    <li><p><span>Opening:</span> 9AM to 10PM</p></li>

                </ul>
                <div class="paragraph">
                    
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
                Perferendis nemo earum nihil error.Lorem ipsum dolor sit amet consectetur,adipisicing elit. Neque esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
                Perferendis nemo earum nihil error.</p>
                <a href="javascript:void();" class=readmore-btn>Read More</a>
                <div class="cake-social">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="dropdown">
                    <div class="dropdown-icon">
                        <span class="select">Price List</span>
                        <i class="fas fa-caret-down"></i>
                    
                    </div>
                    <div class="dropdown-list">
                        <ul>
                            <li><span>400gm</span> - 360TK</li>
                            <li><span>1kg</span> - 1800TK</li>
                            <li><span>2kg</span> - 2800TK</li>

                        </ul>
                    </div>
                </div>
            </div>
            
                </div>
                </div>
            </div>
        </li>
<!-----------------------------------------------------2nd Page-------------------->
<li>
    <div class="shop-box">
        <div class="titleCAKE">
            <h2 class="titleText" style="color: #cc1919;">Afza Sweet & Desert</h2>    
        </div>
               <div class="row-shop">
                <div class="col50-shop">
                    <div class="slideIMG SlideTwo">
                    </div>
                    <div class="call-now">
                        <i class="fas fa-phone-alt"></i>
                        <h4><span>Call:</span> 0197424124</h4> 
                </div>
                </div>
                <div class="col50-shop">
                    <div class="shop-content">
                <h2 class="titleText"><span>About</span> Us</h2>
                <ul>
                    <li><p><span>Location:</span> Bondor Bazar</p></li>
                    <li><p><span>More Branch:</span> Arcadia, Zindabazar</p></li>
                    <li><p><span>Location:</span> Amberkhana</p></li>
                    <li><p><span>Opening:</span> 9AM to 10PM</p></li>

                </ul>
                <div class="paragraph">
                    
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
                Perferendis nemo earum nihil error.Lorem ipsum dolor sit amet consectetur,adipisicing elit. Neque esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
                Perferendis nemo earum nihil error.</p>
                <a href="javascript:void();" class=readmore-btn>Read More</a>
                <div class="cake-social">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="dropdown">
                    <div class="dropdown-icon">
                        <span class="select">Price List</span>
                        <i class="fas fa-caret-down"></i>
                    
                    </div>
                    <div class="dropdown-list">
                        <ul>
                            <li><span>400gm</span> - 360TK</li>
                            <li><span>1kg</span> - 1800TK</li>
                            <li><span>2kg</span> - 2800TK</li>

                        </ul>
                    </div>
                </div>
                </div>            
            </div>
        </div>
    </div>
</li>
<!----------------------------3rd shop---------------------------------------->  
<li>
            <div class="shop-box">
            <div class="titleCAKE">
                <h2 class="titleText" style="color: #ffc107;">Coffee Express</h2>    
           </div>
           <div class="row-shop">
            <div class="col50-shop">
                <div class="slideIMG SlideThree">
                </div>
                <div class="call-now">
                    <i class="fas fa-phone-alt"></i>
                    <h4><span>Call:</span> 0197424124</h4> 
            </div>
            </div>
            
            <div class="col50-shop">
                <div class="shop-content">
            <h2 class="titleText"><span>About</span> Us</h2>
            <ul>
                <li><p><span>Location:</span> Bondor Bazar</p></li>
                <li><p><span>More Branch:</span> Arcadia, Zindabazar</p></li>
                <li><p><span>Opening:</span> 9AM to 10PM</p></li>

            </ul>
            <div class="paragraph">
                
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
            Perferendis nemo earum nihil error.Lorem ipsum dolor sit amet consectetur,adipisicing elit. Neque esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
            Perferendis nemo earum nihil error.</p>
            <a href="javascript:void();" class=readmore-btn>Read More</a>
            <div class="cake-social">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="dropdown">
                <div class="dropdown-icon">
                    <span class="select">Price List</span>
                    <i class="fas fa-caret-down"></i>
                
                </div>
                <div class="dropdown-list">
                    <ul>
                        <li><span>400gm</span> - 360TK</li>
                        <li><span>1kg</span> - 1800TK</li>
                        <li><span>2kg</span> - 2800TK</li>

                    </ul>
                </div>
            </div>
            </div>
        
            </div>
                 </div>
                </div>
            </li>
        </ul> 
    </div>
</section> 
<div class="photographer-portfolio-area pb-100">
    <div class="container">
        <div class="photography-main">
            <div class="row">
                <div class="col-md-12">
                    <div class="titleCAKE pb-5">
                        <h2 class="titleText">get your <span>desired </span>cakes!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <ul class="portfolio-menu">
                        <li class="active" data-filter active="*">All</li>
                        <li data-filter=".one">Cup Cake</li>
                        <li data-filter=".two">Urgent Delivery</li>
                        <li data-filter=".three">Customized</li>
                        <li data-filter=".four">Premium</li>
                    </ul>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="col-md-4 two">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/cake/moremenuCAKE1.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>Cup Story</h4>
                            <ul>
                                <li><p><span>Location:</span> Noyasharak</p></li>
                                <li><p><span>  Call:</span> 01724532982</p></li>
                                <li><p><span>Opening:</span> 9AM to 8PM</p></li>
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4 three">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/cake/moremenuCAKE2.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>Artisan</h4>
                            <ul>
                                <li><p><span>Location:</span> Kumarpara</p></li>
                                <li><p><span>Call:</span> 01732242842</p></li>
                                <li><p><span>Opening:</span> 9AM to 9PM</p></li>
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4 three four">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/cake/moremenuCAKE3.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>Coffee Club</h4>
                            <ul>
                                <li><p><span>Location:</span> Kumarpara</p></li>
                                <li><p><span>Call:</span> 01732522452</p></li>
                                <li><p><span>Opening:</span> 9AM to 10PM</p></li>
                                
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4 two three four">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/cake/moremenuCAKE4.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>Coffee Club</h4>
                            <ul>
                                <li><p><span>Location:</span> Kumarpara</p></li>
                                <li><p><span>Call:</span> 01732522452</p></li>
                                <li><p><span>Opening:</span> 9AM to 10PM</p></li>
                                
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4 one three">
                    <div class="single-portfolio mb-5">
                            <img src="{{asset('public/user_asset/asset')}}/image/cake/moremenuCAKE5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <h4>Tasty Treat</h4>
                                <ul>
                                    <li><p><span>Location:</span> Shibgonj</p></li>
                                    <li><p><span>Call:</span> 0193287454</p></li>
                                    <li><p><span>Opening:</span> 9AM to 9PM</p></li>

                                </ul> 
                            </div>
                    </div>
                </div>
                <div class="col-md-4 two three four">
                    <div class="single-portfolio mb-5">
                            <img src="{{asset('public/user_asset/asset')}}/image/cake/moremenuCAKE6.jpg" alt="">
                        <div class="portfolio-overlay">
                                <h4>Kings Confectionary</h4>
                                <ul>
                                    <li><p><span>Location:</span> Barutkhana</p></li>
                                    <li><p><span>Call:</span> 01732423428</p></li>
                                    <li><p><span>Opening:</span> 9AM to 10PM</p></li>

                                </ul>  
                        </div>
                    </div>
                </div>
               
            </div>           
        </div>                   
    </div>
</div>  
@endsection