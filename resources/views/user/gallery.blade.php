@extends('layouts.master')
@section('title','Gallery')
@section('content')
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography7.jpg')">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Gallery</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">...</li>
                    <li class="breadcrumb-item active">Gallery</li>

                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="photographer-portfolio-area pb-100">
    <div class="container">
        <div class="photography-main">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-part pb-5">
                        <h5 class="subtitle2">Portfolio</h5>
                        <h1><span class="red">Our Best Events Gallery</span></h1>
                    </div>
                    <ul class="portfolio-menu">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".wed">Wedding</li>
                        <li data-filter=".brith">Birthday</li>
                        <li data-filter=".anniv">Anniversary</li>
                        <li data-filter=".newborn">Newborn</li>
                    </ul>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="col-md-4 newborn">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/newbornphotography2.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>NewBorn Photography</h4>
                            <p>Alisha aman</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wed">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography6.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>Sam's & San's Wedding</h4>
                            <p>Happy Couple on their most memorable moment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wed">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography8.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>Bride with bridemaid</h4>
                            <p>project short description</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 brith">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/birthdayphotography.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>Birthday Photography</h4>
                            <p>Two little siblings with their parent</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wed">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography1.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>Wedding Photography</h4>
                            <p>project short description</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 anniv">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography3.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>Anniversary Photography</h4>
                            <p>30th anniversary</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wed">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography3.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>project title</h4>
                            <p>project short description</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 newborn">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/newbornphotography4.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>NewBorn Photography</h4>
                            <p>Ronni Fredrick with his sister</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 brith">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/birthdayphotography2.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>Birthday Photography</h4>
                            <p>project short description</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wed">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography5.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>project title</h4>
                            <p>project short description</p>
                        </div>
                    </div>
                </div>                
                <div class="col-md-4 wed">
                    <div class="single-portfolio mb-5">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography7.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>project title</h4>
                            <p>project short description</p>
                        </div>
                    </div>
                </div>                
                <div class="col-md-4 wed">
                    <div class="single-portfolio">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography9.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>project title</h4>
                            <p>project short description</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wed">
                    <div class="single-portfolio">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography10.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>Wedding Photography</h4>
                            <p>project short description</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 newborn">
                    <div class="single-portfolio">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/newbornphotography.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>project title</h4>
                            <p>project short description</p>
                        </div>
                    </div>
                </div>  
                <div class="col-md-4 newborn">
                    <div class="single-portfolio">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/newbornphotography3.jpg" alt="">
                        <div class="portfolio-overlay">
                            <h4>project title</h4>
                            <p>project short description</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 anniv">
                    <div class="single-portfolio">
                        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography1.jpg" alt="" width="100%">
                        <div class="portfolio-overlay">
                            <h4>project title</h4>
                            <p>project short description</p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>                   
    </div>
</div>

@endsection