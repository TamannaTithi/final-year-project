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
                <form method="post" action="{{action('Admin\PhotographyController@update')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$photographer->id}}">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$photographer->name}}"aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" name="address"  value="{{$photographer->address}}" aria-describedby="emailHelp" placeholder="Enter location">
                    </div>
                 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Profile Picture</label>
                        <input type="file" class="form-control" name="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <div class="form-group">
                        <img alt="" id="image" width="200" height="100">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Page Picture</label>
                        <input type="file" multiple class="form-control" name="profile_img" onchange="document.getElementById('profile_img').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <div class="form-group">
                        <img alt="" id="profile_img" width="200" height="100">
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Background Image</label>
                        <input type="file" multiple class="form-control" name="background_img" onchange="document.getElementById('background_img').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <div class="form-group">
                        <img alt="" id="background_img" width="200" height="100">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"  cols="30" rows="10">{{$photographer->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Experience</label>
                        <input type="text" class="form-control" name="experience" value="{{$photographer->experience}}" aria-describedby="emailHelp" placeholder="Enter experience">
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection