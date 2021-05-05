@extends('layouts.Admin_master')
@section('title')
    Package Booking For Event
@endsection
@section('content')
<!-- begin page title -->
<div class="d-block d-sm-flex flex-nowrap align-items-center">
    <div class="page-title mb-2 mb-sm-0">
        <h1 class="mb-2 text-white">Package Booking For Event</h1>
    </div>
    <div class="ml-auto d-flex align-items-center">
        <nav>
            <ol class="breadcrumb p-0 m-b-0">
                <li class="breadcrumb-item">
                    <a href="#"><i class="ti ti-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Event</a>
                </li>
                <li class="breadcrumb-item active text-primary" aria-current="page"> Package Booking</li>
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
                <div class="table-responsive" >
                    <table id="" class="table display responsive nowrap table-light table-bordered">
                        <thead class="thead-light">
                            <tr>
                                
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Event Type</th>
                                <th>Package Name</th>
                                <th>Start </th>
                                <th>End </th>
                                <th>Message</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class= "tbody-bc">
                            @foreach ($bookevents as $item)
                             <tr>
                                
                                <td>{{$item->username}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->mobile_no}}</td>
                                 <td>{{$item->event_page_name}}</td> 
                                <td>{{$item->package_name}}</td>
                                <td>{{$item->start}}</td>
                                <td>{{$item->end}}</td>
                                {{-- <td>{{$item->date}}</td> --}}
                                <td>{{$item->message}}</td>
                                <td class="text-right">
                                <a onclick="return confirm('Are you sure?')" href="{{action('User\PackageController@delete',['id'=>$item->id])}}" class="btn btn-sm btn-danger">Del</a>
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