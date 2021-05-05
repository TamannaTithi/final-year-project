$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination: true,
        slideSpeed:2000,
        singleItem:true,
        transitionStyle:"fadeUp",
        autoPlay:true
    });
});
$(document).ready(function(){
    $("#story-lists").owlCarousel({
        items:4,
        loop:true,
        margin:10,
        slideSpeed:2000,
        autoPlay:true
    });
});
$(document).ready(function(){
    $("#hall").owlCarousel({
        items:4,
        loop:true,
        slideSpeed:2000,
        autoPlay:true
    });
});
$(document).ready(function(){
    $("#index-offer").owlCarousel({
        navigation : true, // Show next and prev buttons 
        slideSpeed : 300,
        paginationSpeed : 400,
        autoPlay:true,
        items : 1, 
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        itemsMobile : false

    });
});

