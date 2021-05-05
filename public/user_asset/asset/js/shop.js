
   $(document).on('click','.search',function(){
	   $('.search-bar').addClass('search-bar-active')
   });

   $(document).on('click','.search-cancel',function(){
	   $('.search-bar').removeClass('search-bar-active')
   });
     /*---For Login and Sign-up----------------------------*/
	 $(document).on('click','.user,.already-account',function(){
        $('.form').addClass('login-active').removeClass('sign-up-active')
    });
 
    $(document).on('click','.sign-up-btn',function(){
        $('.form').addClass('sign-up-active').removeClass('login-active')
    });
 
    $(document).on('click','.form-cancel',function(){
        $('.form').removeClass('login-active').removeClass('sign-up-active')
    });
  /*----Full Page Slider---------------*/
 
  $(document).ready(function() {
    $('#adaptive').lightSlider({
        adaptiveHeight:true,
        auto:true,
        item:1,
        slideMargin:0,
        loop:true
    });
});
    /*--For-Product-SLider----------------*/
    $(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });
  /*-------------For Fix Menu When Scroll------------------*/
$(window).scroll(function(){
	if($(document).scrollTop()>50){
		$('.shp-navigation').addClass('fix-nav');
	}
	else{
		$('.shp-navigation').removeClass('fix-nav');
	}
});
   /*--For-make-Menu-responsive------------*/
   $(document).ready(function(){
		$('.toggle').click(function(){
			$('.toggle').toggleClass('active')
			$('.shp-navigation').toggleClass('active')
		})
	});
  
  

 