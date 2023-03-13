(function($){
	
	/* set equal price plan slide height */
 	function updateRotatorHeight() {
	  $('.plan-list').on('setPosition', function () {
	    $(this).find('.slick-slide').height('auto');
	    var slickTrack = $(this).find('.slick-track');
	    var slickTrackHeight = $(slickTrack).height();
	    $(this).find('.slick-slide').css('height', slickTrackHeight + 'px');
		});
	}

	var userAgent = window.navigator.userAgent;

	if (!(userAgent.match(/iPad/i) || userAgent.match(/iPhone/i)) ) {
		var svg = $('.defs-only');
	  	svg.next().remove();
	    svg.removeClass('defs-only');
	}



	var positionFixed;	
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	var version = detectIE();
	if (version !== false) {
	  $('#my-svg').addClass('in-ie');
	}
	var ua = navigator.userAgent.toLowerCase();
	if (ua.indexOf('safari') != -1) { 
	  if (ua.indexOf('chrome') > -1) {	   
	  } else {
	  	var svg = $('.defs-only');
	  	svg.next().remove();
	    svg.removeClass('defs-only');
	  }
	}


	/* detect ie and edge browser */
	function detectIE() {
	  var ua = window.navigator.userAgent;
	  var msie = ua.indexOf('MSIE ');
	  if (msie > 0) {
	    return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
	  }
	  var trident = ua.indexOf('Trident/');
	  if (trident > 0) {
	    var rv = ua.indexOf('rv:');
	    return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
	  }
	  var edge = ua.indexOf('Edge/');
	  if (edge > 0) {
	    return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
	  }
	  return false;
	}
	var wHeight = $(window).height();
	$(document).ready(function($) {
		document.addEventListener( 'wpcf7mailsent', function( event ) {
      		jQuery('.get-started-form').addClass('submitted');
    	}, false );
		if(!isTouchDevice) {
			$('body').addClass('is-desktop');
		}
		if(msieversion()) {
			var _h = $(window).width()*0.38;
			$('.in-ie').css('height' , _h + 'px');
		}
		/* set correct active price plan in drop down menu */
		$('select').val('Plan: Advanced $5,000').trigger('change');

		/* init svg animation */
		if($('#my-svg').length) {			
			new Vivus('my-svg', {type: 'delayed', duration: 300});
			$('svg + svg').addClass('play');
			$('body').addClass('navFixed');
		}		
		
		/* init plans slider */
		$('.plan-list').slick({
		  dots: false,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  arrows: false,
		  responsive: [
		    {
		      breakpoint: 767,
		      settings: {
		      	variableWidth: false,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        arrows: false,
		        dots: true,
		        adaptiveHeight: true
		      }
		    }
		  ]
		});
		
		/* init case study slider */
		$('.case-wrap').slick({
		  dots: false,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  arrows: false,
		  responsive: [
		    {
		      breakpoint: 767,
		      settings: {
		      	variableWidth: false,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        arrows: false,
		        dots: true
		      }
		    }
		  ]
		});		

		

		$(window).scroll(function(){
			animationVertical();
			mobileHeader();
			positionFixed = $("#nav").offset().top;
			if($(window).scrollTop() >= positionFixed){
				$("body").addClass("navFixed");
				$("#nav").addClass('animate'); 
			}else{
				$("body").removeClass("navFixed");
			}
		});

		$("#nav li a").on("click", function(){
			var id = $(this).attr("href");		
			var navPosition = $(id).offset().top - $("#nav").outerHeight();					
			$("html, body").animate({scrollTop : navPosition}, 1000);
			return false;
		}); 

		/*Fancyselect init*/
  	$("select").fancySelect();
	});

	/*mobile header*/
	function mobileHeader() {  
	  if(window.pageYOffset > 46 ){ 
	    $("body").addClass("fixed");  	    
	  }else{
	    $("body").removeClass("fixed");	    
	  }
	}

	$(window).load(function(){
		mobileHeader();
		updateRotatorHeight();
		animationVertical();
		setEqualMinHeight($(".team-item-inner"));
		$(".facke-nav").height($("#nav").outerHeight());
		
		positionFixed = $("#nav").offset().top;
		if($(window).scrollTop() >= positionFixed){
			$("body").addClass("navFixed");
		}else{
			$("body").removeClass("navFixed");
		}
	});

	$(window).resize(function(){
		$(".facke-nav").height($("#nav").outerHeight());
		setEqualMinHeight($(".team-item-inner"));
		updateRotatorHeight();
		if(msieversion()) {
			var _h = $(window).width()*0.38;
			$('.in-ie').css('height' , _h + 'px');
		}
	});

	// EqualHeight
	function setEqualMinHeight(columns){
	  var tallestcolumn = 0;
	  columns.each(function(){
	    $(this).css({"height":"auto"});
	    currentHeight = $(this).height();
	    if(currentHeight > tallestcolumn){
	      tallestcolumn = currentHeight;
	    }
	  });
	  
	  columns.css({height: tallestcolumn});
	}

	function animationVertical() {
		k = 0.8;

		if($('#header').length){  
	    if((window.pageYOffset + wHeight*k) > $("#header").offset().top ){
	      $("#header").addClass('animate'); 
	    }
	  }

	  if($('#footer').length){  
	    if((window.pageYOffset + wHeight*1.2) > $("#footer").offset().top ){
	      $("#footer").addClass('animate'); 
	    }
	  }

	  // if($('#nav').length){  
	  //   if((window.pageYOffset + wHeight*k) > $("#nav").offset().top ){
	  //     $("#nav").addClass('animate'); 
	  //   }
	  // }

	  $(".our-success").each(function(){
      if((window.pageYOffset + wHeight*k) > $(this).offset().top ){
        $(this).addClass('animate');
      }
    });
	  
	  $(".section-row").each(function(){
      if((window.pageYOffset + wHeight*k) > $(this).offset().top ){
        $(this).addClass('animate');
      }
    });

    $(".benefits").each(function(){
      if((window.pageYOffset + wHeight*k) > $(this).offset().top ){
        $(this).addClass('animate');
      }
    });

    $(".cases-study .inner").each(function(){
      if((window.pageYOffset + wHeight*k) > $(this).offset().top ){
        $(this).addClass('animate');
      }
    });

    $(".team").each(function(){
      if((window.pageYOffset + wHeight*k) > $(this).offset().top ){
        $(this).addClass('animate');
      }
    });

    $(".clients").each(function(){
      if((window.pageYOffset + wHeight*k) > $(this).offset().top ){
        $(this).addClass('animate');
      }
    });

    $(".plans").each(function(){
      if((window.pageYOffset + wHeight*k) > $(this).offset().top ){
        $(this).addClass('animate');
      }
    });

    $(".get-started").each(function(){
      if((window.pageYOffset + wHeight*k) > $(this).offset().top ){
        $(this).addClass('animate');
      }
    });
	}
	/*detect ie11 browser*/
	function msieversion() {
	  var ua = window.navigator.userAgent;
	  var msie = ua.indexOf("MSIE ");
	  if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
	    return true;
	  } else {  
	  	return false;
	  }
	}

})(jQuery);


