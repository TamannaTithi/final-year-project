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
                <form method="post" action="{{action('Admin\ShoppingController@update')}}" enctype="multipart/form-data">
                    @csrf
        
                    <input type="hidden" name="id" value="{{$shop->id}}">
                    <div class="form-group">
                        <label>Type</label>
                        <select name="type" id="" class="form-control">
                            <option value="">Select a Type</option>
                            <option value="Men" @if($shop->type=='Men') selected @endif>Men</option>
                            <option value="Women" @if($shop->type=='Women') selected @endif>Women</option>
                            <option value="Kids" @if($shop->type=='Kids') selected @endif>Kids</option>
                            <option value="New Arrival" @if($shop->type=='New Arrival') selected @endif>New Arrival</option>
                           </select>

                        
                    </div>

                   
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$shop->name}}"aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price"  value="{{$shop->price}}"aria-describedby="emailHelp" placeholder="Enter price">
                    </div>
                  
                    <div class="form-group">
                        <label>Details</label>
                        <textarea class="form-control" name="description"  cols="30" rows="10">{{$shop->details}}</textarea>
                    </div>
                  
                   
                    <div id="dynamicDetails">
                        
                   
                 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Profile Picture</label>
                        <input type="file" class="form-control" name="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <div class="form-group">
                        <img alt="" id="image" width="200" height="100">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection
@section('script')

@endsection