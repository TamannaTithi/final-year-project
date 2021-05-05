@extends('layouts.master')
@section('title','Photographers List')
@section('content')
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/wedd.jpg')">
  <div class="container">
      <div class="contact-bg-overlay">
          <h1>Photographers List</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                  <li class="breadcrumb-item active">Photographers List</li>
              </ol>
          </nav>
      </div>
  </div>
</div>

<div class="profile-list-area pt-5" style="background-color: rgb(255, 193, 7)">
  <div class="container">
  @foreach($photographers as $item)
      <div class="card bg1 animate__animated animate__fadeInLeft ad mt-3 mb-3" >
          <div class="row g-0">
            <div class="col-md-4">              
              <a href="{{action('User\IndexController@photo',['id' => $item->id, 'slug' => str_slug($item->name)])}}"><img class= "btn-btn-primary m-3" src="{{asset('public/uploads/photographers/'.$item->image)}}" alt="..." width="250px" height="180px"></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                  <h5 class="card-title ">{{$item->name}}<i class="fas fa-star  mx-2"></i><i class="fas fa-star"></i><i class="fas fa-star mx-2"></i><i class="fas fa-star  mx-2"></i><i class="far fa-star"></i></h5>
                  <p class="card-text"> {{$item->description}}  </p>
                  <i class="fas fa-home"> {{$item->address}} </i>
                  <i class="fas fa-briefcase  mx-3"> {{$item->experience}}</i>

                  <a href="{{action('User\IndexController@photo',['id' => $item->id, 'slug' => str_slug($item->name)])}}" class="ph-button">Available for work</a>
                  <p class="card-text"><small class="text-muted">Last worked 3 days ago</small></p>
              </div>
            </div>
          </div>
        </div>

        
    @endforeach      
  </div>  
@endsection