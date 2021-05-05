@extends('layouts.master')
@section('title','event')
@section('content')
<!--Start bannar-->
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/venue.jpg');">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Event</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">Event</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="event-wed-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               
                <h1>WEDDING CELEBRATION</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias porro vitae, culpa facere illo aperiam, quae perspiciatis doloremque laudantium voluptas amet incidunt sit dignissimos pariatur eveniet officia rem commodi doloribus. <br>
                Tempore explicabo modi atque praesentium nesciunt rerum natus possimus vel rem impedit!</p>
                <a href="{{action('User\IndexController@weddingEvent')}}"><button type="button" class="btn btn-danger mr-3">Go to wedding</button></a>
                <a href="{{action('User\IndexController@event_services')}}"><button type="button" class="btn btn-warning">View Services</button></a>
               
            </div>
            <div class="col-md-6 event-wed">
                <img src="{{asset('public/user_asset/asset')}}/image/bride1.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<div class="event-brth-area bg pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center event-brth">
                <a href="{{action('User\IndexController@birthdayEvent')}}"><button type="button" class="btn btn-warning mr-3">Go to birthday</button></a>
                <a href="{{action('User\IndexController@event_services')}}"><button type="button" class="btn btn-danger">View Services</button></a>
            </div>    
        </div>
    </div>
</div>
<div class="event-anniversary-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 event-wed">
                <img src="{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography3.jpg" alt="">
            </div>
            <div class="col-md-6">
                <h1>ANNIVERSARY CELEBRATION</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias porro vitae, culpa facere illo aperiam, quae perspiciatis doloremque laudantium voluptas amet incidunt sit dignissimos pariatur eveniet officia rem commodi doloribus. <br>
                Tempore explicabo modi atque praesentium nesciunt rerum natus possimus vel rem impedit!</p>
                <a href="{{action('User\IndexController@anniversaryEvent')}}"><button type="button" class="btn btn-danger mr-3">Go to anniversary</button></a>
               
                <a href="{{action('User\IndexController@event_services')}}"><button type="button" class="btn btn-warning">View Services</button></a>
            </div>
        </div>
    </div>
</div>
<div class="event-others-area pt-100 pb-100" style="background-color: rgb(255, 249, 249)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-3">
                    <h5>Are you planning for an upcoming event like reunion or anything, and want to celebrate your best?</h4>
                    <a href="{{action('User\IndexController@appointment')}}"><button type="button" class="btn btn-warning mt-2">Contact Us</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection