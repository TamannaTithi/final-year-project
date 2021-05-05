<!-- begin app-nabar -->
<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu " id="sidebarNav">
            <li class="nav-static-title">Personal</li>
            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="nav-icon ti ti-rocket"></i>
                    <span class="nav-title">Dashboards</span>
           
                    <span class="nav-label label label-danger">1</span>
                </a>
                <ul aria-expanded="false">
                    <li> <a href="{{action('Admin\AdminController@dashboard')}}">Default</a> </li>
                    {{-- <li> <a href='index-ecommerce.html'>Ecommerce</a> </li>
                    <li> <a href='index-car-dealer.html'>Car Dealer</a> </li>
                    <li> <a href='index-stock-market.html'>Stock Market</a> </li>                     --}}
                </ul>
            </li>
             <li class="@if(Request::is('photographers')) active @endif">
                <a class="has-arrow" href="{{action('Admin\PhotographyController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-camera"></i>
                    <span class="nav-title">Photographers</span>
                    <span class="nav-label label label-danger">2</span>

                </a>
            <ul>
                <li class="@if(Request::is('photographers')) active @endif">
                <a class="" href="{{action('Admin\PhotographyController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-camera"></i>
                    <span class="nav-title">Photographers</span>
                    
                </a>
            </li>
            <li  class="@if(Request::is('photographybook')) active @endif">
                <a class="" href="{{action('User\PhotographyBookController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-camera"></i>
                    <span class="nav-title">Book Photographer</span>
                </a>
            </li>
        </ul>
          </li>
           
            <li class="@if(Request::is('parlours')) active @endif">
                <a class="has-arrow" href="{{action('Admin\ParlourController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Parlours</span>
                    <span class="nav-label label label-danger">2</span>
                </a>
            <ul>
                <li class="@if(Request::is('parlours')) active @endif">
                    <a class="" href="{{action('Admin\ParlourController@index')}}" aria-expanded="false">
                        <i class="nav-icon ti ti-file"></i>
                        <span class="nav-title">Parlours</span>
                    </a>
                </li>
            <li class="@if(Request::is('parlourbook')) active @endif">
                <a class="" href="{{action('User\ParlourbookController@book')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Book Parlour</span>
                </a>
            </li>
        </ul>
        </li>
           
            <li class="@if(Request::is('offer')) active @endif">
                <a class="" href="{{action('Admin\OfferController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Offers</span>
                </a>
            </li>
            <li class="@if(Request::is('shopping')) active @endif">
                <a class="" href="{{action('Admin\ShoppingController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Shopping</span>
                </a>
            </li>
            <li class="@if(Request::is('venue')) active @endif">
                <a class="has-arrow" href="{{action('Admin\VenueController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Venues</span>
                    <span class="nav-label label label-danger">2</span>
                </a>
            
            <ul>
            <li class="@if(Request::is('venue')) active @endif">
                <a class="" href="{{action('Admin\VenueController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Venues</span>
                </a>
            </li>
            <li class="@if(Request::is('venuebook')) active @endif">
                <a class="" href="{{action('User\VenueBookController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Venue Book</span>
                </a>
            </li>
        </ul>
            </li>
            <li class="@if(Request::is('event')) active @endif">
                <a class="has-arrow" href="{{action('User\EventBookController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Events</span>
                    <span class="nav-label label label-danger">6</span>
                </a>
            <ul>
                 <li class="@if(Request::is('eventname')) active @endif">
                    <a class="" href="{{action('Admin\EventPageController@index')}}" aria-expanded="false">
                        <i class="nav-icon ti ti-file"></i>
                        <span class="nav-title">Event Services</span>
                     </a>
                </li>   
                <li class="@if(Request::is('packagebook')) active @endif">
                    <a class="" href="{{action('User\PackageController@book')}}" aria-expanded="false">
                        <i class="nav-icon ti ti-file"></i>
                        <span class="nav-title">Packages Book</span>
                     </a>
                </li>   
            <li class="@if(Request::is('birthdaybook')) active @endif">
                <a class="" href="{{action('User\BirthdayBookController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Birthday Book</span>
                </a>
            </li>
            <li class="@if(Request::is('weddingbook')) active @endif">
                <a class="" href="{{action('User\WeddingBookController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Wedding Book</span>
                </a>
            </li>
            <li class="@if(Request::is('anniversarybook')) active @endif">
                <a class="" href="{{action('User\AnniversaryBookController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Anniversary Book</span>
                </a>
            </li>
       
            <li class="@if(Request::is('appointment')) active @endif">
                <a class="" href="{{action('User\EventBookController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Appointment & Booking</span>
                </a>
            </li>
       

        </ul>
        
       
        <li>
            <li class="@if(Request::is('contact')) active @endif">
                <a class="" href="{{action('User\ContactController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Contact</span>
                </a>
            </li>
           
            <li class="@if(Request::is('user')) active @endif">
                <a class="" href="{{action('Admin\UserController@index')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-file"></i>
                    <span class="nav-title">Users</span>
                </a>
            </li>
           
           
            
           
            {{-- <li class="@if(Request::is('mail')) active @endif"><a href="{{action('Admin\AdminController@mail')}}" aria-expanded="false"><i class="nav-icon ti ti-email"></i><span class="nav-title">Mail</span></a> </li> --}}
            @if(isset (Auth::user()->email))
            <a href="#">{{Auth::user()->name}}</a>
        
            <a class="" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
             @else
            <a href="{{ route('login') }}">Login</a>

            <a href="{{ route('register') }}">Register</a>
            @endif

        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>
<!-- end app-navbar -->