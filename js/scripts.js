
  $(window).scroll(function() {
    if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
    {
        $('.opaque-navbar').addClass('co');
    } else {
        $('.opaque-navbar').removeClass('co');
   }
});
    $(window).scroll(function() {
    if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
    {
        $('img.logo-img').addClass('co');
    } else {
        $('.opaque-navbar').removeClass('co');
   }
});

$(document).scroll(function() {
  
  if ($(this).scrollTop() >= 50) {
    
    $(".logoContainer").html("<img src='https://s29.postimg.org/3y6vk08dz/logoblack.png'>");
    $(".navbar-inverse .navbar-nav>li>a").css('color', '#000');
    $(".navbar-toggle").css('background-color', '#fff');
    $(".navbar-inverse .navbar-toggle .icon-bar").css('background-color', '#000');
  } else {
  
    $(".logoContainer").html("<img src='https://s29.postimg.org/7givge99z/logo.png'>");
    $(".navbar-inverse .navbar-nav>li>a").css('color', '#fff');
  }
  
});

$(document).ready(function() {
	
	"use strict";
		$(".loader_inner").fadeOut();
		$(".loader").delay(400).fadeOut("fast");

// ######### video background #########
$('.video').YTPlayer({
  videoId: 'hIKXyuqCdeU', // id from youtube link example: https://www.youtube.com/watch?v=z-m5CROSNZE  
  callback: function() {
    //console.log("playerFinshed");
  }
});

	// ################ ANIMATION ##############
	
	$(".top_text h1").addClass("fadeInDown animated");
	$(".top_text p").addClass("fadeInUp animated");
	$('.animation1').waypoint(function(down) {
		$(this).addClass('animation');
		$(this).addClass('fadeInUp');
	}, { offset: '100%' });
	
	

	function heightDetect() {
		$(".top").css("height", $(window).height());
	};
	heightDetect();
	$(window).resize(function() {
		heightDetect();
	});
	
	
	
	//########### slide toggle read more ####################
	$(".stoggle").on("click",function() {
  $(".hide_more").animate({ opacity: 1.0 },200).slideToggle(500, function() {
    $(".stoggle").text($(this).is(':visible') ? "Show less" : "Read more");
  });
});
//########### Counter ####################
$('.counter_number').counterUp({
                delay: 10,
                time: 1000
            });
});


 
 /*
  **********************************************************
  * Smooth Scrolling
  **********************************************************
  */

 $(document).on('click', 'a', function(event){
     $('html, body').animate({
         scrollTop: $( $.attr(this, 'href') ).offset().top
     }, 500);
 });
 $(document).ready(function() { 

    $("html").niceScroll();

  }

);

 /*
  **********************************************************
  * Navbar active
  **********************************************************
  */

$('ul li').click(function(){
  $(this).addClass('active');
  $(this).parent().children('li').not(this).removeClass('active');
});