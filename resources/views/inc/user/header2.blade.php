<!-- <header class="p-header-area">
    <div class="container ">
        <div class="header">
            <div class="logo">
                <a href="">Eras</a>
            </div> 
            <div class="nav-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>        
        
        <div class="full-menu">
            <div class="fullmenu-content">
                <ul class="page-menu">
                    <li><a class="active" href="{{action('User\IndexController@index')}}">Home</a></li>
                    <li><a href="{{action('User\IndexController@about')}}">Who we are</a></li>
                    <li><a href="{{action('User\IndexController@index')}}">Service we provide</a></li>
                        <ul class="sub-menu">
                            <li><a href="{{action('User\IndexController@index')}}">Event</a></li>
                            <li><a href="{{action('User\IndexController@index')}}">Palour</a></li>
                            <li><a href="{{action('User\IndexController@index')}}">Shopping</a></li>
                            <li><a href="{{action('User\IndexController@index')}}">Venue</a></li>
                            <li><a href="{{action('User\IndexController@index')}}">Other Services</a>
                                <ul class="sub-menu2">
                                    <li><a href="">Food</a></li>
                                    <li><a href="">Medicine</a></li>
                                    <li><a href="">Electrician</a></li>
                                </ul>
                                
                            </li>
                        </ul>                        
                    <li><a href="{{action('User\IndexController@index')}}">Offer</a></li>
                    <li><a href="{{action('User\IndexController@index')}}">Let's Talk</a></li>
                    <li class="social">
                        <a href="#"><img src="{{asset('public/user_asset/asset')}}/icons/social/twitter.svg" alt=""></a>
                        <a href="https://dribbble.com/ashleylewis/collections/245645-prv-chr"><img src="{{asset('public/user_asset/asset')}}/icons/social/dribbble.svg" alt=""></a>
                        <a href="https://www.instagram.com/ashleyrossstudios/?hl=en"><img src="{{asset('public/user_asset/asset')}}/icons/social/instagram.svg" alt=""></a>
                        <a href="#"><img src="{{asset('public/user_asset/asset')}}/icons/social/send.svg" alt=""></a>
                    </li>
                </ul>
            </div>            
            <a href="#0" class="modal-close" style="background-image: url('{{asset('public/user_asset/asset')}}/image/portfolio/cd-icon-close.svg');"></a>
        </div>
        <div class="cd-transition-layer" style="background-image: url('{{asset('public/user_asset/asset')}}/image/portfolio/ink.png');"> 
            <div class="bg-layer" style="background-image: url('{{asset('public/user_asset/asset')}}/image/portfolio/ink.png');"></div>
        </div>
    </div>
</header> -->
<!------ Include the above in your HEAD tag ---------->

<header class="p-header-area">
    <div class="container ">
        <div id="wrapper">
            <div class="overlay">
            </div>
                <!-- Sidebar -->
                <nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">
                    <ul class="nav sidebar-nav">
                        <li class="sidebar-brand">
                            <a href="#">
                                <i class="fab fa-viadeo"></i>Eras
                            </a>
                        </li>
                        <li>
                            <a href="{{action('User\IndexController@index')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{action('User\IndexController@about')}}">Who we are</a>
                        </li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services we provide <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header">Dropdown heading</li>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Special Offer</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="">Let's Talk</a>
                        </li>
                    </ul>
                </nav>
                <!-- /#sidebar-wrapper -->

                <div id="page-content-wrapper">
                    <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                    </button>
                </div>

            </div>
            </div>
</header>