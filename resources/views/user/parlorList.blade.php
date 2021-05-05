@extends('layouts.master')
@section('title','Parlour List')
@section('content')
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/parlour/pbg.jpg')">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Parlour List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">Parlour List</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="parlour-list-area">
    <div class="container">
        <div class=" box-area">
        @foreach($parlours as $item)
            <div class="single-box">
                <div class="img-area">
                    <img src="{{asset('public/uploads/parlours/'.$item->image)}}" alt="">
                </div>
                <div class="img-text py-4">
                   <h3>{{$item->name}}</h3>
                   <p>{{$item->description}}</p> 
                   <h6>{{$item->address}}</h6>
                </div>
                <a class="btn btn-danger" href="{{action('User\IndexController@parlour',['id' => $item->id, 'slug' => str_slug($item->name)])}}">Learn More</a>
            </div>
        @endforeach
        </div>  
    </div> 
</div>
@endsection
           