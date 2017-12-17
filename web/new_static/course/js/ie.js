// JavaScript Document

$(function(){
	if($(window).width()>940){
		$('.headbk').css('width','100%');	
	}else{
		$('.headbk').css('width','940px');	
	}
	
	$(window).resize(function(){
		if($(window).width()>940){
			$('.headbk').css('width','100%');	
		}else{
			$('.headbk').css('width','940px');	
		}
	});
});