@extends('layouts.master')
@section('title','Contact')
@section('content')
<div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/service.jpg')">
    <div class="container">
        <div class="contact-bg-overlay">
            <h1>Contact</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="contact-map-area py-5">
    <div class="container">
        <div class="map">
           <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d755.8797087044293!2d-74.00793637080619!3d40.72860769870812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sMada%20Center%208th%20floor%2C%20379%20Hudson%20St%2C%20New%20York%2C%20NY%2010018%20US!5e0!3m2!1sen!2sbd!4v1610941695621!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<div class="photographer-contact-area " id="booked" style="background-color: #141413">
    <div class="container">
        <div class="row" style="color: white">
            <div class="col-md-5 my-5 bg" style="background-image: url('{{asset('public/user_asset/asset')}}/image/table.jpg'); height:700px">
                <div class="row">
                    <div class="col-xl-7 mx-5 my-5 mt-5">
                        <h4><i class="fas fa-map-marker-alt"></i> Address</h4>
                        <p>Zindabazar, Sylhet, Bangladesh</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 mx-5">
                        <h4><i class="fas fa-phone-alt"></i> Lets Talk</h4>
                        <p>+88 0163 456 789</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 mx-5 my-5">
                        <h4><i class="fas fa-envelope-open-text"></i> General Support</h4>
                        <p>eras234@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 px-5 py-5">
            
                @if ($errors->any())
                 <div class="alert alert-danger">
                    <ul>
                       @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                   </ul>
                </div><br />
                @endif
    
                <h3 class="text-center">Get In Touch</h3>
                <form  method="post" action="{{action('User\ContactController@store')}}">
                    @csrf
                    <div class="form-group">
                      <label >Your name*</label>
                      <input type="text"  class="form-control" name="name" style="text-transform: capitalize;" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" placeholder=" Enter Name">
                    </div>
                    <div class="form-group">
                        <label >Email Address (please double check spelling)</label>
                        <input type="email"  class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="tel" class="form-control" id="telephone" name="mobile_no" placeholder="+880" pattern="[+880]{4}[0-9]{10}" title="Mobile number should only contain lowercase letters. e.g. +88017********" required placeholder=" Enter 10-digit mobile no.">
                    </div>
                      <div class="form-group">
                        <label>Let's set you up for a session! Ask us anything in here.</label>
                        <textarea class="form-control" name="message"></textarea>
                      </div> 
                      <button type="submit" class="btn btn-danger submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                      @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>  
                      @endif     
                </form>
               
            </div>    
           
        </div>
       
     
     
        
    </div>
</div>

@endsection