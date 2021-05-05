@extends('layouts.admin_master')
@section('title','Update User Type')
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
                <form method="post" action="{{action('Admin\UserController@update')}}" enctype="multipart/form-data">
                    @csrf
        
                    <input type="hidden" name="id" value="{{$user->id}}">              
                    <div class="form-group">
                        <select name="user_type" class="form-control">
                            <option value="">Select a User Type</option>
                            <option value="admin" @if($user->user_type =='admin') selected @endif>Admin</option>
                            <option value="user" @if($user->user_type =='user') selected @endif>User</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}"aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection