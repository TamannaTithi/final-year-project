<!DOCTYPE html>
<html> 
<head>
    <title>The Eras Service||@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('public/user_asset/asset')}}/css/animate.min.css">  
    <link rel="stylesheet" href="{{asset('public/user_asset/asset')}}/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="{{asset('public/user_asset/asset')}}/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('public/user_asset/asset')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('public/user_asset/asset')}}/css/owl.theme.min.css">
    <link rel="stylesheet" href="{{asset('public/user_asset/asset')}}/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/user_asset/asset')}}/css/lightslider.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/user_asset/asset')}}/css/mobilemenu.min.css">
    <link rel="stylesheet" href="{{asset('public/user_asset/asset')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('public/user_asset/asset')}}/css/responsive.css">
</head>
<body>

    <!--start header part-->
    @include('inc.user.header')
    <!--End header part--> 
    @yield('content')

    @include('inc.user.footer')
    
    <script type="text/javascript" src="{{asset('public/user_asset/asset')}}/js/jquery-1.12.0.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-1.12.0.js" integrity="sha256-yFU3rK1y8NfUCd/B4tLapZAy9x0pZCqLZLmFL3AWb7s=" crossorigin="anonymous"></script> --}}
    <script type="text/javascript" src="{{asset('public/user_asset/asset')}}/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{asset('public/user_asset/asset')}}/js/popper.min.js"></script>
    <script type="text/javascript" src="{{asset('public/user_asset/asset')}}/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="{{asset('public/user_asset/asset')}}/js/mobilemenu.min.js"></script><!-- ts -->
    <script src="{{asset('public/user_asset/asset')}}/js/lightslider.js"></script>   
    <script src="{{asset('public/user_asset/asset')}}/js/fontawesome.min.js"></script>
    <script src="{{asset('public/user_asset/asset')}}/js/isotope.min.js"></script>
    <script src="{{asset('public/user_asset/asset')}}/js/animated-left.js"></script>
    <script src="{{asset('public/user_asset/asset')}}/js/countup.js"></script>
    <script src="{{asset('public/user_asset/asset')}}/js/photographyslide.js"></script>
    <script src="{{asset('public/user_asset/asset')}}/js/slideshow.js"></script>
    <script src="{{asset('public/user_asset/asset')}}/js/portfolio.js"></script> 
    <script src="{{asset('public/user_asset/asset')}}/js/photo.js"></script>
    <script src="{{asset('public/user_asset/asset')}}/js/testimonial.js"></script>
    <script type="text/javascript" src="{{asset('public/user_asset/asset')}}/js/shop.js"></script>
    <script src="{{asset('public/user_asset/asset')}}/js/typed.min.js"></script>
    <script src="{{asset('public/user_asset/asset')}}/js/typed.js"></script>
    <script src="{{asset('public/user_asset/asset')}}/js/typeCake.js"></script>

    <script type="text/javascript">
        var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="{{asset('public/user_asset/asset')}}/image/service/arrow23.webp"/>',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();
    </script>
    <script>
        $('#logoutBtn').click(function(e){
            e.preventDefault();
        });
        $('#mobileMenu').slicknav();
    </script>
</body>
</html>
