// JavaScript Document

$(function(){
	
//webfont
try { Typekit.load({async: true}); } catch (e) {}

	
//header
var $header = $('header');
var wpos = $(window).scrollTop();
var wh = $(window).height();
var mh = $('.header-change').offset().top;
var bo = $('body').offset().top;

//header change
	$(window).on('load resize scroll',function(){	
		
		wpos = $(window).scrollTop();
		wh = $(window).height();
		mh = $('.header-change').offset().top;
		bo = $('body').offset().top;
		
		if(wpos > (mh - 300)){
			$header.addClass('change');
		} else if ( bo == 0 ){
			$header.removeClass('change');
		} else {
			$header.removeClass('change');
		}
	});
		 
	
// page top
	$(window).on('load scroll',function() {
		if($(this).scrollTop() >600) {
		 	$('.pagetop').stop().fadeIn(); 
		} else {
		 	$('.pagetop').stop().fadeOut();
		}
	});
	
	$('.pagetop a').click(function() {
		$('html,body').animate({scrollTop: 0}, 500, 'swing');
	});		

	
});	


$(window).on('load resize scroll',function(){
// fadein
	var scrollWindow = $(window).scrollTop();
	var windowHeight = $(window).height();
	
	//fade
	$('.fade-box').each(function(){
		targetPosition = $(this).offset().top;
		
		if($(window).width() > 768){
			if(scrollWindow > targetPosition - windowHeight + 300){
				$(this).addClass("fade");
			}
		} else {
			if(scrollWindow > targetPosition - windowHeight + 100){
				$(this).addClass("fade");
			}
		}
	});

//ttl-en
	$('.ttl-wrap').each(function(){
		ttlPosition = $(this).offset().top;
		
		if($(window).width() > 768){
			if(scrollWindow > ttlPosition - windowHeight + 300){
				$(this).children('.en').addClass("anime");
			}
		} else {
			if(scrollWindow > ttlPosition - windowHeight + 100){
				$(this).children('.en').addClass("anime");
			}
		}
		
	});

	
});	

