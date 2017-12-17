// JavaScript Document
$(function(){
	if($(window).width()>767){	
		$('.main_title .title_box').height($('.main_title .title_explanation').height());
		$('.main_title .title_box h2').css('margin-top', ($('.main_title .title_box').height()-$('.main_title .title_box h2').height())/2 );
	}else{
		$('.main_title .title_box').css('height','auto');	
		$('.main_title .title_box h2').css('margin-top', ($('.main_title .title_box').height()-$('.main_title .title_box h2').height())/2 );
	}
	
	$('.menu_bt').click(function(){
		$('.nav_menu').slideToggle('fast');						 
	});
	if($(window).width()<480){
		$('.Hback, .Hback1, .box2, .box3').width($(window).width());	
	}
	var $deviceW = $(window).width();
	$(window).resize(function(){
		if($(window).width()<600){
			if($(window).width() != $deviceW){
				location.reload();
			}
			$('.Hback, .Hback1, .box2, .box3').width($(window).width());	
		}					  
	});
	
	var sc = $('.scroll_con');
	$('.text_next').click(function(){
		if(sc.height() - Math.abs(parseInt(sc.css('top'))) <= $('.scroll_txt').height() ){
			
		}else{
			$('.scroll_con:not(:animated)').animate({'top': (parseInt(sc.css('top')) - 76) + 'px'},'fast');
			$('.text_prev').fadeIn();
		}
	});
	$('.text_prev').click(function(){
		if(parseInt(sc.css('top')) >= 0){
			
		}else{
			if(parseInt(sc.css('top')) >= -152){
				$('.scroll_con:not(:animated)').animate({'top': (parseInt(sc.css('top')) + 76) + 'px'},'fast');
				$('.text_prev').fadeOut();	
			}else{
				$('.scroll_con:not(:animated)').animate({'top': (parseInt(sc.css('top')) + 76) + 'px'},'fast');
			}
		}
	});
	if($(window).width()<480){
		$('.box3').width($(window).width()-40);	
	}
	
	
	$(window).resize(function(){
		if($(window).width()>767){	
			$('.main_title .title_box').height($('.main_title .title_explanation').height());
			$('.main_title .title_box h2').css('margin-top', ($('.main_title .title_box').height()-$('.main_title .title_box h2').height())/2 );
			}else{
				$('.main_title .title_box').css('height','auto');	
				$('.main_title .title_box h2').css('margin-top', ($('.main_title .title_box').height()-$('.main_title .title_box h2').height())/2 );
			}
			
			if($(window).width()<480){
				$('.box3').width($(window).width()-40);	
			}
	});
});