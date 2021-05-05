@extends('layouts.master')
@section('title','Who We Are')
@section('content')
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/gallery/gallery-4.jpg')">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Who We Are</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">Who we are</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="who-we-are-area pt-100 pb-100">
    <div class="container">
        <div class="cake-row animate__animated animate__fadeInDown">
            <div class="col50">
            <h2 class="titleText">We serve with <span> our heart!</span></h2>
            <p>We make your events smart & impactful by personalised event management services. Neque esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
            Perferendis nemo earum nihil error.Lorem ipsum dolor sit amet consectetur,adipisicing elit. Neque esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
            Perferendis nemo earum nihil error.Lorem ipsum dolor sit amet consectetur,adipisicing elit. <br> <br> esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
            Perferendis nemo earum nihil error.Lorem ipsum dolor sit amet consectetur,adipisicing elit. Neque esse architecto reiciendis, minima explicabo ad dolores reprehenderit rem illum commodi eligendi, iure eius expedita ex. 
            Perferendis nemo earum nihil error.</p>
            </div>
            <div class="col50">
                <div class="imgBX">
                    <img src="{{asset('public/user_asset/asset')}}/image/gallery/gallery-1.jpg">
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
                                <p> Team Leader</p>
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


