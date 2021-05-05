@extends('layouts.Admin_master')
@section('title')
    Wedding
@endsection
@section('content')
<!-- begin page title -->
 <div class="d-block d-sm-flex flex-nowrap align-items-center">
    <div class="page-title mb-2 mb-sm-0">
        <h1 class="mb-2 text-white">Wedding Book</h1>
    </div>
    <div class="ml-auto d-flex align-items-center">
        <nav>
            <ol class="breadcrumb p-0 m-b-0">
                <li class="breadcrumb-item">
                    <a href="#"><i class="ti ti-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Events</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Events</a>
                </li>
                 <li class="breadcrumb-item active text-primary" aria-current="page">Wedding Book</li>
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
                <div class="table-responsive">
                    <table id="" class="table display responowrap table-light table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                               <th class="text-right">Action</th>
                            </tr>                
                        </thead>
                        <tbody class="tbody-bc">
                            @foreach ($wedding as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td class="text-right">
                                <a href="{{action('Admin\WeddingController@package',['id'=> $item->id])}}"class="btn btn-sm btn-success bg-dark">view</a> || <a onclick="return confirm('Are you sure?')" href="{{action('Admin\WeddingController@delete',['id'=>$item->id])}}" class="btn btn-sm btn-danger">Del</a>
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