@extends('layouts.admin_master')
@section('title','Mail')  
@section('content')
<!-- begin row -->
<div class="row">
    <div class="col-md-12 m-b-30">
        <!-- begin page title -->
        <div class="d-block d-sm-flex flex-nowrap align-items-center">
            <div class="page-title mb-2 mb-sm-0">
                <h1>Mail</h1>
            </div>
            <div class="ml-auto d-flex align-items-center">
                <nav>
                    <ol class="breadcrumb p-0 m-b-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-home"></i></a>
                        </li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">Mail</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end page title -->
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-12">
        <div class="card card-statistics mail-contant">
            <div class="card-body p-0">
                <div class="row no-gutters">
                    <div class="col-md-4 col-xxl-2 col-md-4">
                        <div class="mail-sidebar">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="text-center mail-sidebar-title px-4">
                                        <a href="javascript:void(0)" class="btn btn-primary btn-block py-3 font-weight-bold font-18">Compose <i class="fa fa-plus pl-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="px-4 py-4">
                                        <ul class="pl-0">
                                            <li class="py-2">
                                                <a href="javascript:void(0)">
                                                    <span class="nav align-items-center">
                                                                <span>
                                                                    <i class="fa fa-envelope-o text-primary pr-4"></i>
                                                                </span>
                                                    <span>
                                                                    <span>Inbox</span>
                                                    </span>
                                                    <span class="nav-item ml-auto text-right">
                                                                     <span class="badge badge-pill badge-primary float-right">99+</span>
                                                    </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="py-2">
                                                <a href="javascript:void(0)">
                                                    <span class="nav align-items-center">
                                                                <span>
                                                                    <i class="fa fa-paper-plane-o pr-4"></i>
                                                                </span>
                                                    <span>
                                                                    <span>Sent Mail</span>
                                                    </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="py-2">
                                                <a href="javascript:void(0)">
                                                    <span class="nav align-items-center">
                                                                <span>
                                                                    <i class="fa fa-file-o pr-4"></i>
                                                                </span>
                                                    <span>
                                                                    <span>Drafts</span>
                                                    </span>
                                                    <span class="nav-item ml-auto text-right">
                                                                     <span class="badge badge-pill badge-primary float-right">20</span>
                                                    </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="py-2">
                                                <a href="javascript:void(0)">
                                                    <span class="nav align-items-center">
                                                                <span>
                                                                    <i class="fa fa-trash-o pr-3 pr-4"></i>
                                                                </span>
                                                    <span>
                                                                    <span>Deleted</span>
                                                    </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="py-2">
                                                <a href="javascript:void(0)">
                                                    <span class="nav align-items-center">
                                                                <span>
                                                                    <i class="fa fa-clock-o pr-4"></i>
                                                                </span>
                                                    <span>
                                                                    <span>Reminder</span>
                                                    </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="py-2">
                                                <a href="javascript:void(0)">
                                                    <span class="nav align-items-center">
                                                                <span>
                                                                    <i class="fa fa-heart-o pr-4"></i>
                                                                </span>
                                                    <span>
                                                                    <span>Favorite</span>
                                                    </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="pl-0 mt-5">
                                            <li class="py-2">
                                                <a href="javascript:void(0)">
                                                    <span class="nav align-items-center">
                                                                <span>
                                                                    <i class="fa fa-circle-o text-danger pr-4"></i>
                                                                </span>
                                                    <span>
                                                                    <span>Personal</span>
                                                    </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="py-2">
                                                <a href="javascript:void(0)">
                                                    <span class="nav align-items-center">
                                                                <span>
                                                                    <i class="fa fa-circle-o pr-4 text-warning"></i>
                                                                </span>
                                                    <span>
                                                                    <span>Work</span>
                                                    </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="py-2">
                                                <a href="javascript:void(0)">
                                                    <span class="nav align-items-center">
                                                                <span>
                                                                    <i class="fa fa-plus pr-4"></i>
                                                                </span>
                                                    <span>
                                                                    <span>Add Category</span>
                                                    </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8  col-xxl-4 border-md-t">
                        <div class="mail-content  border-right border-n h-100">
                            <div class="mail-search border-bottom">
                                <div class="row align-items-center mx-0">
                                    <div class="col-12">
                                        <div class="form-group pt-3">
                                            <input type="text" class="form-control" id="search" placeholder="Search..">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mail-msg scrollbar scroll_dark">
                                <div class="mail-msg-item">
                                    <a href="javascript:void(0)">
                                        <div class="media align-items-center">
                                            <div class="mr-3">
                                                <div class="bg-img">
                                                    <img src="assets/img/avtar/01.jpg" class="img-fluid" alt="user">
                                                </div>
                                            </div>
                                            <div class="w-100">
                                                <div class="mail-msg-item-titel justify-content-between">
                                                    <p>Martin smith</p>
                                                    <p class="d-none d-xl-block">06:59 <span> PM </span></p>
                                                </div>
                                                <h5 class="mb-0 my-2">Saas Designer</h5>
                                                <p>Since there is not an "all the above" category, I'll take the opportunity to enthusiastically congratulate you on the very high quality.</p>
                                                <p class="d-xl-none">06:59 <span> PM </span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mail-msg-item">
                                    <a href="javascript:void(0)">
                                        <div class="media align-items-center">
                                            <div class="mr-3">
                                                <div class="bg-img">
                                                    <img src="assets/img/avtar/02.jpg" class="img-fluid" alt="user">
                                                </div>
                                            </div>
                                            <div class="w-100">
                                                <div class="mail-msg-item-titel justify-content-between">
                                                    <p>DutcaPatrick</p>
                                                    <p class="d-none d-xl-block">06:59 <span> PM </span></p>
                                                </div>
                                                <h5 class="mb-0 my-2">Mobile app Designer </h5>
                                                <p>Very nice template, lots of pages and good documentation.</p>
                                                <p class="d-xl-none">06:59 <span> PM </span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mail-msg-item">
                                    <a href="javascript:void(0)">
                                        <div class="media align-items-center">
                                            <div class="mr-3">
                                                <div class="bg-img">
                                                    <img src="assets/img/avtar/03.jpg" class="img-fluid" alt="user">
                                                </div>
                                            </div>
                                            <div class="w-100">
                                                <div class="mail-msg-item-titel justify-content-between">
                                                    <p>m_morsch</p>
                                                    <p class="d-none d-xl-block">06:59 <span> PM </span></p>
                                                </div>
                                                <h5 class="mb-0 my-2">Landing page Designer</h5>
                                                <p>Excellent and at a great price... thank you very much!</p>
                                                <p class="d-xl-none">06:59 <span> PM </span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mail-msg-item">
                                    <a href="javascript:void(0)">
                                        <div class="media align-items-center">
                                            <div class="mr-3">
                                                <div class="bg-img">
                                                    <img src="assets/img/avtar/04.jpg" class="img-fluid" alt="user">
                                                </div>
                                            </div>
                                            <div class="w-100">
                                                <div class="mail-msg-item-titel justify-content-between">
                                                    <p>AnnaHorno</p>
                                                    <p class="d-none d-xl-block">06:59 <span> PM </span></p>
                                                </div>
                                                <h5 class="mb-0 my-2">Re-Design ios app</h5>
                                                <p>Solved my theme problem in 10 minutes. We thank you.</p>
                                                <p class="d-xl-none">06:59 <span> PM </span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mail-msg-item">
                                    <a href="javascript:void(0)">
                                        <div class="media align-items-center">
                                            <div class="mr-3">
                                                <div class="bg-img">
                                                    <img src="assets/img/avtar/05.jpg" class="img-fluid" alt="user">
                                                </div>
                                            </div>
                                            <div class="w-100">
                                                <div class="mail-msg-item-titel justify-content-between">
                                                    <p>Wdcorbitt</p>
                                                    <p class="d-none d-xl-block">06:59 <span> PM </span></p>
                                                </div>
                                                <h5 class="mb-0 my-2">Mobil UX/UI Designer</h5>
                                                <p>Asked for information and received it EXTREMELY quickly. Great layout - good code - great price! </p>
                                                <p class="d-xl-none">06:59 <span> PM </span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mail-msg-item">
                                    <a href="javascript:void(0)">
                                        <div class="media align-items-center">
                                            <div class="mr-3">
                                                <div class="bg-img">
                                                    <img src="assets/img/avtar/06.jpg" class="img-fluid" alt="user">
                                                </div>
                                            </div>
                                            <div class="w-100">
                                                <div class="mail-msg-item-titel justify-content-between">
                                                    <p>Anne Smith</p>
                                                    <p class="d-none d-xl-block">06:59 <span> PM </span></p>
                                                </div>
                                                <h5 class="mb-0 my-2">Jobly Opportunity</h5>
                                                <p>Mentor has so many features and layouts. Its a great choice.</p>
                                                <p class="d-xl-none">06:59 <span> PM </span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mail-msg-item">
                                    <a href="javascript:void(0)">
                                        <div class="media align-items-center">
                                            <div class="mr-3">
                                                <div class="bg-img">
                                                    <img src="assets/img/avtar/07.jpg" class="img-fluid" alt="user">
                                                </div>
                                            </div>
                                            <div class="w-100">
                                                <div class="mail-msg-item-titel justify-content-between">
                                                    <p>Paul Flavius</p>
                                                    <p class="d-none d-xl-block">06:59 <span> PM </span></p>
                                                </div>
                                                <h5 class="mb-0 my-2">Saas Designer</h5>
                                                <p>There are many people in the world with amazing talents who realize only a small percentage of their potential. </p>
                                                <p class="d-xl-none">06:59 <span> PM </span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mail-msg-item">
                                    <a href="javascript:void(0)">
                                        <div class="media align-items-center">
                                            <div class="mr-3">
                                                <div class="bg-img">
                                                    <img src="assets/img/avtar/08.jpg" class="img-fluid" alt="user">
                                                </div>
                                            </div>
                                            <div class="w-100">
                                                <div class="mail-msg-item-titel justify-content-between">
                                                    <p>Sara Lisbon</p>
                                                    <p class="d-none d-xl-block">06:59 <span> PM </span></p>
                                                </div>
                                                <h5 class="mb-0 my-2">UI Designer</h5>
                                                <p>We can look a bit further back in time to Albert Einstein or even further back to Abraham Lincoln.</p>
                                                <p class="d-xl-none">06:59 <span> PM </span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mail-msg-item">
                                    <a href="javascript:void(0)">
                                        <div class="media align-items-center">
                                            <div class="mr-3">
                                                <div class="bg-img">
                                                    <img src="assets/img/avtar/09.jpg" class="img-fluid" alt="user">
                                                </div>
                                            </div>
                                            <div class="w-100">
                                                <div class="mail-msg-item-titel justify-content-between">
                                                    <p>Annahorno</p>
                                                    <p class="d-none d-xl-block">06:59 <span> PM </span></p>
                                                </div>
                                                <h5 class="mb-0 my-2">Saas Designer</h5>
                                                <p>One of the most difficult aspects of achieving success is staying motivated over the long haul.</p>
                                                <p class="d-xl-none">06:59 <span> PM </span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 border-t border-xxl-t">
                        <div class="mail-chat py-5 px-5">
                            <div class="media align-items-center">
                                <div class="bg-img mr-3">
                                    <img src="assets/img/avtar/03.jpg" class="img-fluid" alt="user">
                                </div>
                                <div>
                                    <h4 class="mb-0">Dutca Patrick</h4>
                                    <p>30 Min ago</p>
                                </div>
                            </div>
                            <div class="mt-4 d-flex justify-content-between">
                                <div>
                                    <h3>Landing page Designer...</h3>
                                </div>
                                <div class="d-flex">
                                    <a href="javascript:void(0)"><i class="fa fa-reply font-22 pr-3"></i></a>
                                    <a href="javascript:void(0)"><i class="fa fa-print font-22"></i></a>
                                </div>
                            </div>
                            <div>
                                <p class="my-4">hey adminjon...</p>
                                <p class="mb-2">I truly believe Augustine’s words are true and if you look at history you know it is true. There are many people in the world with amazing talents who realize only a small percentage of their potential. We all know people who live this truth.</p>
                                <p>We also know those epic stories, those modern-day legends surrounding the early failures of such supremely successful folks as Michael Jordan and Bill Gates. We can look a bit further back in time to Albert Einstein or even further back to Abraham Lincoln. What made each of these people so successful? Motivation.</p>
                                <p>We know this in our gut, but what can we do about it? How can we motivate ourselves? One of the most difficult aspects of achieving success is staying motivated over the long haul.</p>
                                <div class="my-5">
                                    <p>Have lovely Day,</p>
                                    <p>adminjon</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex px-5 py-4">
                            <div class="flex-fill align-items-center">
                                <div class="d-flex">
                                    <i class="ti ti-clip pr-3 font-22"></i>
                                    <p class="pr-3 font-weight-bold">Wireframe</p>
                                    <p>(220.MB)</p>
                                </div>
                            </div>
                            <div class="flex-fill text-left text-md-right"><a href="javascript:void(0)" class="text-primary"><i class="ti ti-download pr-2"></i><span>Download</span></a></div>
                        </div>
                        <div class="bg-light mail-f px-4 py-3">
                            <div class="py-2 bg-white px-4 py-3 d-flex justify-content-between">
                                <p>Click here to <a href="#editer" data-toggle="collapse" class="text-primary px-1">Reply</a>or<a href="#forward" data-toggle="collapse" class="text-primary px-1">Forward</a></p>
                                <a href="javascript:void(0)" class="text-primary"><i class="fa fa-microphone"></i></a>
                            </div>
                            <div class="collapse" id="editer">
                                <div class="form-group">
                                    <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3" placeholder="Type here..."></textarea>
                                </div>
                            </div>
                            <div class="collapse" id="forward">
                                <div class="form-group">
                                    <input class="form-control mt-3" id="exampleFormControl" placeholder="Email Address" />
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between py-2">
                                <div>
                                    <ul class="nav">
                                        <li class="nav-item pr-3"><a href="javascript:void(0)"><i class="ti ti-clip font-20"></i></a></li>
                                        <li class="nav-item pr-3"><a href="javascript:void(0)"><i class="ti ti-face-smile font-20"></i></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><i class="ti ti-gallery font-20"></i></a></li>
                                    </ul>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="btn btn-primary"><span>Send</span> <i class="fa fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection