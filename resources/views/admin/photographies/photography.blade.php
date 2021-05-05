@extends('layouts.Admin_master')
@section('title')
    Photography
@endsection
@section('content')
<!-- begin page title -->
 <div class="d-block d-sm-flex flex-nowrap align-items-center">
    <div class="page-title mb-2 mb-sm-0">
        <h1 class="mb-2 text-white">Photographer</h1>
    </div>
    <div class="ml-auto d-flex align-items-center">
        <nav>
            <ol class="breadcrumb p-0 m-b-0">
                <li class="breadcrumb-item">
                    <a href="#"><i class="ti ti-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">photographers</a>
                </li>
                 <li class="breadcrumb-item active text-primary" aria-current="page">Photographers</li>
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
            <div class="card-head">
                <a href="{{action('Admin\PhotographyController@create')}}" class="btn btn-primary btn-create ml-2 mt-2 mb-2">Create new photographer</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table display responowrap table-light table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Description</th>
                                <th>Experience</th>
                                <th>Availability</th>
                                <th>image</th>
                                <th>Profile Image</th>
                                <th>Background Image</th>
                                <th class="text-right">Action</th>
                            </tr>                
                        </thead>
                        <tbody class="tbody-bc">
                            @foreach ($photographers as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{str_limit($item->description, 15,'----')}}</td>
                                <td>{{$item->experience}}</td>
                                <td>{{$item->isAvailabile}}</td>
                                <td>
                                    <img src="{{asset('public/uploads/photographers/'.$item->image)}}" width="40" height="30" alt="photographers image">
                                </td>
                                <td>
                                    <img src="{{asset('public/uploads/photographers/profile/'.$item->profile_img)}}" width="40" height="30" alt="photographers image">
                                </td>
                                <td>
                                    <img src="{{asset('public/uploads/photographers/back/'.$item->background_img)}}" width="40" height="30" alt="photographers image">
                                </td>
                                <td class="text-right">
                                    @if ($item->isAvailabile == 'yes')
                                    <a onclick="return confirm('Sure to on?')" href="{{action('Admin\PhotographyController@book_off',['id'=> $item->id])}}"class="btn btn-sm btn-warning bg-warning">Off</a>
                                    @else
                                    <a onclick="return confirm('Sure to off?')" href="{{action('Admin\PhotographyController@book_on',['id'=> $item->id])}}"class="btn btn-sm btn-warning bg-warning">on</a>
                                    @endif
                                     || <a href="{{action('Admin\PhotographyController@view',['id'=> $item->id])}}"class="btn btn-sm btn-success bg-dark">view</a> || <a href="{{action('Admin\PhotographyController@update_page',['id'=> $item->id])}}"class="btn btn-sm btn-primary bg-dark">Edit</a> || <a onclick="return confirm('Are you sure?')" href="{{action('Admin\PhotographyController@delete',['id'=>$item->id])}}" class="btn btn-sm btn-danger">Del</a>
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