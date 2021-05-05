@extends('layouts.Admin_master')
@section('title')
    Parlour
@endsection
@section('content')
<!-- begin page title -->
 <div class="d-block d-sm-flex flex-nowrap align-items-center">
    <div class="page-title mb-2 mb-sm-0">
        <h1 class="mb-2 text-white">Parlour</h1>
    </div>
    <div class="ml-auto d-flex align-items-center">
        <nav>
            <ol class="breadcrumb p-0 m-b-0">
                <li class="breadcrumb-item">
                    <a href="#"><i class="ti ti-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Parlours</a>
                </li>
                <li class="breadcrumb-item active text-primary" aria-current="page">Parlours</li>
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
            <div class="card-body">
                <div class="card-head mb-2">
                    <a href="{{action('Admin\ParlourController@create')}}" class="btn btn-primary btn-create ml-2 mt-2 mb-2">Create new parlour </a>
                </div> 
                <div class="table-responsive">
                    <table id="" class="table display responsive nowrap table-light table-bordered">
                        <thead class="thead-light bg2">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Address</th>
                                <th>Contact No.</th>
                                <th>email</th>
                                <th>image</th>
                                <th>Availability</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="tbody-bc">
                            @foreach($parlours as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->mobile_no}}</td>
                                <td>{{$item->email}}</td>
                                <td><img src="{{asset('public/uploads/parlours/'.$item->image)}}" width="40" height="30" alt="parlours image"></td>
                                <td>{{$item->isAvailable}}</td>
                                <td class="text-right">
                                    @if ($item->isAvailable == 'yes')
                                    <a onclick="return confirm('Sure to on?')" href="{{action('Admin\ParlourController@book_off',['id'=> $item->id])}}"class="btn btn-sm btn-warning bg-warning">Off</a>
                                    @else
                                    <a onclick="return confirm('Sure to off?')" href="{{action('Admin\ParlourController@book_on',['id'=> $item->id])}}"class="btn btn-sm btn-warning bg-warning">on</a>
                                    @endif
                                    ||<a href="{{action
                                    ('Admin\ParlourController@view',['id'=> $item->id])}}"class="btn btn-sm btn-primary bg-dark">View</a> ||<a href="{{action('Admin\ParlourController@update_page',['id'=> $item->id])}}"class="btn btn-sm btn-primary bg-dark">Edit</a> ||<a onclick="return confirm('Are you sure?')" href="{{action('Admin\ParlourController@delete',['id'=>$item->id])}}" class="btn btn-sm btn-danger">Del</a>
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