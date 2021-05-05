@extends('layouts.Admin_master')
@section('title')
    Venue
@endsection
@section('content')
<!-- begin page title -->
<div class="d-block d-sm-flex flex-nowrap align-items-center">
    <div class="page-title mb-2 mb-sm-0">
        <h1 class="mb-2 text-white">Venue</h1>
    </div>
    <div class="ml-auto d-flex align-items-center">
        <nav>
            <ol class="breadcrumb p-0 m-b-0">
                <li class="breadcrumb-item">
                    <a href="#"><i class="ti ti-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Venues</a>
                </li>
                <li class="breadcrumb-item active text-primary" aria-current="page">Venue</li>
            </ol>
        </nav>
    </div>
</div>
<!-- end page title -->
<!-- end row -->
<!-- begin row -->
<div class="row editable-wrapper">
    <div class="col-lg-12 ">
        <div class="card card-statistics">
            <div class="card-head ml-3">
                <a href="{{action('Admin\VenueController@create')}}" class="btn btn-primary btn-create ml-2 mt-2 mb-2">Create </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table display responsive nowrap table-light table-bordered">
                        <thead class="thead-light">
                            <tbody class="tbody-bc">
                                <tr>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th class="text-right">Action</th>
                                </tr>              
                        </thead>
                        <tbody class="tbody-bc">
                            @foreach($venues as $item)
                            <tr>             
                                <td>{{$item->eventvenue_type}}</td>                                              
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->price}}</td>
                                <td><img src="{{asset('public/uploads/venues/'.$item->image)}}" width="40" height="30" alt="venue image"></td>
                                <td class="text-right">
                                <a href="{{action('Admin\VenueController@update_page',['id'=> $item->id])}}"class="btn btn-sm btn-primary bg-dark">Edit</a> || <a onclick="return confirm('Are you sure?')" href="{{action('Admin\VenueController@delete',['id'=>$item->id])}}" class="btn btn-sm btn-danger">Del</a>
                                </td>                  
                            </tr>
                            @endforeach
                        </tbody>
                    </table>             
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection