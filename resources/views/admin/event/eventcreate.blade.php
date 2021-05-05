@extends('layouts.admin_master')
@section('title','Deshboard')
@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title">Profile</h4>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{action('Admin\EventController@store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Profile Picture</label>
                        <input type="file" multiple class="form-control" name="image" onchange="document.getElementById('profile_image').src = window.URL.createObjectURL(this.files[0])">
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