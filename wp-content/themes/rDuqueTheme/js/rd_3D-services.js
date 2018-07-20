var step1 = false;
var step2 = false;
var step3 = false;

$(document).ready(function(){

	// Servicer Title layer off, 5s delay
	setTimeout("rd_3D_services_Title_Animation_out()",5000);
	setTimeout('rd_3D_services_thooth_weal_call_action()',5000);

	// Click on primary swiip circle
	$('.rd_3D-services-core-circle').click(
	  function() {

	  	var k = $('.rd_3D-services-core-circle').hasClass('inactive');

	  	if (k==false){ 

	  		$('.rd_3D-services-core-circle-web-unblock, .rd_3D-services-core-circle-mk-unblock, .rd_3D-services-core-circle-learn-unblock').addClass('explode');
	  		
	  		$('.rd_3D-services-core-circle').addClass('animated hinge');
	  		setTimeout("$('.rd_3D-services-core-circle-web-unblock, .rd_3D-services-core-circle-mk-unblock, .rd_3D-services-core-circle-learn-unblock').addClass('hide')",500);
	  		setTimeout("location.href ='http://rduque.com/solicitud-swiip/'",2000);
	  		
	  		} else {

			  	if ( $('.rd_3D-services-que-es-swiip').hasClass('show') ) {
			  		$('.rd_3D-services-que-es-swiip').removeClass('show');
			  	} else {
				  	$('.rd_3D-services-que-es-swiip').addClass('show');
				  	rd_3D_services_Title_Animation_out();
				  	rd_3D_services_services_off();
			  	}
	  		}

	  		
	});

	// CLICK ON EACH SERVICE TOOTH WHEAL
	// Actions on tooth core learn
	$('.rd_3D-services-core-circle-web').click(function(){
		rd_3D_services_core_circle_web($(this));
	});

	// Actions on tooth core MK
	$('.rd_3D-services-core-circle-mk').click(function(){
		rd_3D_services_core_circle_mk($(this));
	});

	// Actions on tooth core learn
	$('.rd_3D-services-core-circle-learn').click(function(){
		rd_3D_services_core_circle_learn($(this));
	});

	// All off on veil click
	$('.veil.active').click(function(){
		rd_3D_services_all_off();
		rd_3D_services_veil_back();
		$('ul > h3').addClass('arrow');
		rd_3D_services_step_completed();
	});

	// On h3 services click
	$('li > h3').click(function(){
		h3 = $(this);
		el = $(this).parent().find('.rd_3D-services-info');
		if ($(el).css('display') == 'block'){
			$(el).slideUp();
			h3.addClass('arrow');
		} else {
			$('.rd_3D-services-info').css('display','none');
			$('li > h3').addClass('arrow');
			$(el).parent().find('.rd_3D-services-info').slideToggle();
			h3.toggleClass('arrow');
		}
	});

	// Menu show bottom triangle
	$('.rd_show-menu-bottom, .rd_show-menu-bottom-area-push').click(function(){
		$('.rd_menu-bottom').slideToggle();
	});

	// Show vídeo food
	$('.rd_3D-services-learn-show-video').click(function(){
		$('.rd_3D-services-learn-video').slideToggle();
	});

});

rd_3D_services_Title_Animation_out = function(){
	$('.rd_3D-services-title').css('animation-name','rd_3D_services-title_Animation_out');
	setTimeout("$('.rd_3D-services-title').removeClass('show');",1000);
}

rd_3D_services_thooth_weal_inactive = function(){
	$('.rd_3D-services-core-circle-web').removeClass('active');
	$('.rd_3D-services-core-circle-mk').removeClass('active');
	$('.rd_3D-services-core-circle-learn').removeClass('active');
}

rd_3D_services_services_off = function(){
	$('.rd_3D-services-web, .rd_3D-services-mk, .rd_3D-services-learn').removeClass('show');
	rd_3D_services_thooth_weal_inactive();
}

rd_3D_services_all_off = function(){
	rd_3D_services_Title_Animation_out();
	rd_3D_services_thooth_weal_inactive();
	$('.rd_3D-services-web, .rd_3D-services-mk, .rd_3D-services-learn, .rd_3D-services-que-es-swiip').removeClass('show');
}

rd_3D_services_thooth_weal_call_action = function(){
	$('.rd_3D-services-core-circle-web, .rd_3D-services-core-circle-mk, .rd_3D-services-core-circle-learn').addClass('animated pulse');
	setTimeout('$(".rd_3D-services-core-circle-web, .rd_3D-services-core-circle-mk, .rd_3D-services-core-circle-learn").removeClass("animated pulse")',1000);
}

rd_3D_services_core_circle_web = function(el){
	rd_3D_services_Title_Animation_out();
	rd_3D_services_thooth_weal_inactive();
	rd_3D_services_hide_menu();
	rd_3D_services_veil_front();
	$('.rd_3D-services-que-es-swiip').removeClass('show');
	el.addClass('active');

	// <ul> services
	$('.rd_3D-services-mk, .rd_3D-services-learn').removeClass('show');
	$('.rd_3D-services-mk ul li, .rd_3D-services-learn ul li').removeClass('animated slideInRight slideInLeft');
	$('.rd_3D-services-web').toggleClass('show');

	el2 = $('.rd_3D-services-web').hasClass('show');
	if(el2){
		$('.rd_3D-services-web ul li').addClass('animated slideInLeft');
	} else {
		$('.rd_3D-services-web ul li').removeClass('animated slideInLeft');
	}

	step1 = true;
}

rd_3D_services_core_circle_mk = function(el){
	rd_3D_services_Title_Animation_out();
	rd_3D_services_thooth_weal_inactive();
	rd_3D_services_hide_menu();
	rd_3D_services_veil_front();
	$('.rd_3D-services-que-es-swiip').removeClass('show');
	el.addClass('active');

	// <ul> services
	$('.rd_3D-services-web, .rd_3D-services-learn').removeClass('show');
	$('.rd_3D-services-web ul li, .rd_3D-services-learn ul li').removeClass('animated slideInRight slideInLeft');
	$('.rd_3D-services-mk').toggleClass('show');

	el2 = $('.rd_3D-services-mk').hasClass('show');
	if(el2){
		$('.rd_3D-services-mk ul li').addClass('animated slideInRight');
	} else {
		$('.rd_3D-services-mk ul li').removeClass('animated slideInRight');
	}

	step2 = true;
}

rd_3D_services_core_circle_learn = function(el){
	rd_3D_services_Title_Animation_out();
	rd_3D_services_thooth_weal_inactive();
	rd_3D_services_hide_menu();
	rd_3D_services_veil_front();
	$('.rd_3D-services-que-es-swiip').removeClass('show');
	el.addClass('active');

	// <ul> services
	$('.rd_3D-services-web, .rd_3D-services-mk').removeClass('show');
	$('.rd_3D-services-web ul li, .rd_3D-services-mk ul li').removeClass('animated slideInRight slideInLeft');
	$('.rd_3D-services-learn').toggleClass('show');

	el2 = $('.rd_3D-services-learn').hasClass('show');
	if(el2){
		$('.rd_3D-services-learn ul li').addClass('animated slideInRight');
	} else {
		$('.rd_3D-services-learn ul li').removeClass('animated slideInRight');
	}

	step3 = true;
}

rd_3D_services_hide_menu = function(){
	el = $('.rd_menu-bottom');

	if (el.css('display')=='block') {
		el.hide();
	}
}

// veil to front
rd_3D_services_veil_front = function(){
	$('.veil.active').addClass('front');
	$('.rd_show-menu-bottom').hide();
}

// veil to back
rd_3D_services_veil_back = function(){
	$('.veil.active').removeClass('front');
	$('.rd_show-menu-bottom').show();
}


rd_3D_services_step_completed = function(){

	if (step1 == true) {
		rd_3D_services_step_motion('.rd_3D-services-core-circle-web-unblock');		 
	}

	if (step2 == true) {
		rd_3D_services_step_motion('.rd_3D-services-core-circle-mk-unblock');
	}

	if (step3 == true) {
		rd_3D_services_step_motion('.rd_3D-services-core-circle-learn-unblock');
	}

	if (step1 == true & step2 == true & step3 == true ) {
		$('.rd_3D-services-core-circle, .rd_3D-services-core-title').removeClass('inactive');
		$('.rd_3D-services-core-circle').addClass('active');
		$('.rd_3D-services-core-title').html('Swiip');
		$('.rd_3D-services-core-title').addClass('active');
	}

}

rd_3D_services_step_motion = function(item){
	var el = $(item);
	el.addClass('active');
}