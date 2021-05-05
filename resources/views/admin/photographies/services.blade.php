@extends('layouts.Admin_master')
@section('title')
    Services
@endsection
@section('content')
                               <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1 class="mb-2">Photographers</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="#"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="#">Dashboard</a>
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
                                        <a href="" class="btn btn-primary ml-2 mt-2 mb-2">Create </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                        <table id="" class="table display responsive nowrap table-light table-bordered">
                                                <thead class="thead-light">
                                                   
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Contact No.</th>
                                                        <th>email</th>
                                                        <th>image</th>
                                                        <th class="text-right">Action</th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>name</td>
                                                        <td>name</td>
                                                        <td>name</td>
                                                        <td>name></td>
                                                       
                                                        
                                                     </tr>
                                                         
                                                    
                                                   </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                @endsection