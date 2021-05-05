<div class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">     
                <a class="top-bar-a" href=""><i class="fas fa-phone-alt"></i>+88 0163 456 789</a>
                <a class="top-bar-a" href=""><i class="fas fa-envelope-open"></i> eras234@gmail.com</a>
                <a class="top-bar-a" href=""><i class="fas fa-door-open"></i>Mon – Fri(9.00 am – 6.00 pm)</a>	
            </div>  
            <div class="col-md-3 text-right auth-menu">
                @if (isset(Auth::user()->email))
                <a href="{{route('/')}}" onclick="event.preventDefault();" id="logoutBtn">LogOut</a>

                @else

                <a href="{{route('login')}}">login</a>
                <a href="{{route('register')}}">Register</a>
                @endif
            </div>
     <!-- <div class="col-md-3 text-right">
            <button type="button" class="ven-btn btn-danger pb-2" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Log In</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"   aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Log In Form</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body bg" style="background-image: url('{{asset('public/user_asset/asset')}}/image/celebrate.jpg')">
                            
                                <form>
                                    <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-white">Email/Phone:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                    <label for="message-text" class="col-form-label text-white">Password:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        </div>
    </div>
</div>
<nav class="nav-bar">
    <div class="container ">  
        <div class="row header">
            <div class="col-md-3">
                <div class="logo">
                    <a href=""><i class="fab fa-viadeo"></i>Eras</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="menu">
                    <ul id="mobileMenu">
                        <li><a href="{{action('User\IndexController@index')}}"><span class="yellow"> Home</span></a></li>
                        <li><a href="{{action('User\IndexController@about')}}">Who we are</a></li>
                        <li><a href="#">Services we provide  <i class="fas fa-caret-down"></i></a>
                            <ul>
                                <li>
                                    <a href="{{action('User\IndexController@event')}}">Event</a>
                                    <ul class=sub-event> 
                                        <li><a href="{{action('User\IndexController@birthdayEvent')}}">Birthday</a></li>
                                        <li><a href="{{action('User\IndexController@weddingEvent')}}">Wedding</a></li>
                                        <li><a href="{{action('User\IndexController@anniversaryEvent')}}">Anniversary</a></li>
                                    </ul>
                                </li>                                
                                <li><a href="{{action('User\IndexController@parlourList')}}">Parlour</a></li>                                
                                <li><a href="{{action('User\IndexController@shopping')}}">Shopping</a></li>
                                    <li><a href="{{action('User\IndexController@venue')}}">Venue</a></li>                      
                                    <li><a href="{{action('User\IndexController@photoList')}}">Photographer</a></li>                               
                                </ul>
                        </li>
                        {{-- <li><a href="">Other Services  <i class="fas fa-caret-down"></i></a>
                            <ul class=sub-services>
                                <li><a href="{{action('User\IndexController@cake')}}">Cake</a></li>
                                <li><a href="{{action('User\IndexController@index')}}">Others</a></li>
                            </ul>
                        </li>  --}}
                        <li><a href="{{action('User\IndexController@offer')}}">Special Offers</a>
                        </li>
                        <li><a href="{{action('User\IndexController@contact')}}">Let's Talk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>
</nav>
