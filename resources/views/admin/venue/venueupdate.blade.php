@extends('layouts.admin_master')
@section('title','Deshboard')
@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title text-white">Update</h4>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{action('Admin\VenueController@update')}}" enctype="multipart/form-data">
                    @csrf
        
                    <input type="hidden" name="id" value="{{$venues->id}}">
                    
                    <div class="form-group">
                        <label>Hall Type</label>
                        <select name="eventvenue_type" id="" class="form-control">
                            <option value="">Select a  Type</option>
                            <option value="Luxury Venue" @if($venues->eventvenue_type =='Luxury Venue') selected @endif>Luxury Venue</option>
                            <option value="Premium Venue" @if($venues->eventvenue_type =='Premium Venue') selected @endif>Premium Venue</option>
                            <option value="Budget Friendly Venue" @if($venues->eventvenue_type =='Budget Friendly Venue') selected @endif>Budget Fiendly Venue</option>
                            <option value="Decoration" @if($venues->eventvenue_type =='Decoration') selected @endif>Decoration</option>
                            <option value="Last_Slider" @if($venues->eventvenue_type =='Last_Slider') selected @endif>Last Slider</option>
                        
                            </select>
                    </div>
                  
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$venues->name}}"aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"  cols="30" rows="10">{{$venues->description}}</textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Prices</label>
                     <input type="number"  class="form-control" name="price" value="{{$venues->price}}" >
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