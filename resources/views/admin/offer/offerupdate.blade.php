@extends('layouts.admin_master')
@section('title','Deshboard')
@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title">Update</h4>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{action('Admin\OfferController@update')}}" enctype="multipart/form-data">
                    @csrf
        
                    <input type="hidden" name="id" value="{{$offer->id}}">
                    
                    <div class="form-group">
                        <label>Offer Type</label>
                        <select name="offer_type" id="" class="form-control">
                            <option value="">Select a  Type</option>
                            <option value="Special Offer" @if($offer->offer_type =='Special Offer') selected @endif>Special Offer</option>
                            <option value="Summer Sale" @if($offer->offer_type =='Summer Sale') selected @endif>Summer Sale</option>
                            <option value="Combo Offer" @if($offer->offer_type =='Combo Offer') selected @endif>Combo Offer</option>
                        
                            </select>
                    </div>
                  
                   
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$offer->name}}"aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"  cols="30" rows="10">{{$offer->description}}</textarea>
                    </div>
                             <div class="form-group">
                        <label for="exampleInputEmail1">Profile Picture</label>
                        <input type="file" class="form-control" name="image" onchange="document.getElementById('profile_image').src = window.URL.createObjectURL(this.files[0])" name="image">
                    </div>
                    <div class="form-group">
                        <img alt="" id="profile_image" width="200" height="100">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

@endsection