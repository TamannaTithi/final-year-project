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
                <form method="post" action="{{action('Admin\EventPageController@store')}}" enctype="multipart/form-data"> --}}
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="event_type" aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                   <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection 