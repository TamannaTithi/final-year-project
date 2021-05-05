@extends('layout.admin_master')
@section('title','Deshboard')
@section('content')
<div class="row no-gutters">
    <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
        <div class="d-flex align-items-center h-100-vh">
            <div class="login p-50">
                <h1 class="mb-2">We Are Mentor</h1>
                <p>Welcome back, please login to your account.</p>
                <form action="http://themes.potenzaglobalsolutions.com/html/mentor-bootstrap-4-admin-dashboard-template/auth-login.html" class="mt-3 mt-sm-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">User Name*</label>
                                <input type="text" class="form-control" placeholder="Username" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Password*</label>
                                <input type="password" class="form-control" placeholder="Password" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-block d-sm-flex  align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Remember Me
                                    </label>
                                </div>
                                <a href="javascript:void(0);" class="ml-auto">Forgot Password ?</a>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <a href="index.html" class="btn btn-primary text-uppercase">Sign In</a>
                        </div>
                        <div class="col-12  mt-3">
                            <p>Don't have an account ?<a href="auth-register.html"> Sign Up</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
        <div class="row align-items-center h-100">
            <div class="col-7 mx-auto ">
                <img class="img-fluid" src="assets/img/bg/login.svg" alt="">
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!--end login contant-->
@endsection