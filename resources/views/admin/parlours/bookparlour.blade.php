@extends('layouts.Admin_master')
@section('title')
    Parlour
@endsection
@section('content')
<!-- begin page title -->
<div class="d-block d-sm-flex flealign-items-center">
                <div class="page-title mb-2 mb-sm-0">
                    <h1 class="mb-2 text-white">Parlour Book</h1>
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
                                                <li class="breadcrumb-item active text-primary" aria-current="page">ParlourBook</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                    
                        <!-- end row -->

@php
$package1 = App\ParlourBook::where('package_name','Package1')->get();
$package2 = App\ParlourBook::where('package_name','Package2')->get();
$package3 = App\ParlourBook::where('package_name','Package3')->get();
@endphp

                        <!-- begin row -->
                        <div class="row editable-wrapper">
                            <div class="col-lg-12 ">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                        <table id="" class="table display responsive nowrap table-light table-bordered">
                                                <thead class="thead-light bg2" >
                                                   
                                                    <tr>
                                                        <th> Parlour Name</th>
                                                        <th>Name</th>
                                                        <th>Mobile_No</th>
                                                        <th>Email</th>
                                                        <th>Package Name</th>
                                                        <th>Time Start</th>
                                                        <th>Time End</th>
                                                        <th>Query</th>
                                                        <th class="text-right">Action</th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody class="tbody-bc">
                                                    @foreach ($book as $item)
                                                     <tr>
                                                        <td>{{$item->parlour_name}}</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->mobile_no}}</td>
                                                        <td>{{$item->email}}</td>
                                                        <td>{{$item->package_name}}</td>
                                                        <td>{{$item->start}}</td>
                                                        <td>{{$item->end}}</td>
                                                        <td>{{$item->message}}</td>
                                                        <td class="text-right">
                                                        <a onclick="return confirm('Are you sure?')" href="{{action('User\ParlourbookController@delete',['id'=>$item->id])}}" class="btn btn-sm btn-danger">Del</a>
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