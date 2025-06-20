/*-----------------------------------------------------------------------------------*/
/* 		Mian Js Start 
/*-----------------------------------------------------------------------------------*/
$(document).ready(function($) {
    "use strict";
    /*-----------------------------------------------------------------------------------*/
    /*		STICKY NAVIGATION
/*-----------------------------------------------------------------------------------*/
    $(".sticky").sticky({ topSpacing: 0 });
    /*-----------------------------------------------------------------------------------*/
    /* 	LOADER
/*-----------------------------------------------------------------------------------*/
    $("#loader")
        .delay(500)
        .fadeOut("slow");
    /*-----------------------------------------------------------------------------------*/
    /*  FULL SCREEN
/*-----------------------------------------------------------------------------------*/
    $(".full-screen").superslides({});
    /*-----------------------------------------------------------------------------------*/
    /* 	COUNTER
/*-----------------------------------------------------------------------------------*/
    $(".counter").counterUp({
        delay: 50,
        time: 2000
    });
    /*-----------------------------------------------------------------------------------*/
    /* 	MagnificPopup
/*-----------------------------------------------------------------------------------*/
    $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});
