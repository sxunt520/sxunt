//设置
myFocus.set({
	id:'myFocus',//ID
	pattern:'mF_fancy'//风格
});

$(document).ready(function(){
	
	/*最新资讯*/
	$('#nowRMain').jCarouselLite({
		btnPrev: '#prevNow',
		btnNext: '#nextNow',
		visible: 5,
		scroll: 5,
		auto: 10000,
		speed: 500,
		vertical: true
	});	
	
	/*摄影技巧*/
	$('#nowRMain2').jCarouselLite({
		btnPrev: '#prevNow2',
		btnNext: '#nextNow2',
		visible: 6,
		scroll: 6,
		auto: 15000,
		speed: 500,
		vertical: true
	});	
	
	/*器材推介*/
	$('#equipmentC').jCarouselLite({
		btnPrev: '#equipmentPrev',
		btnNext: '#equipmentNext',
		visible: 4,
		scroll: 4,
		auto: 5000,
		speed: 500
	});
	
	/*后期处理*/
	$('#equipmentC2').jCarouselLite({
		btnPrev: '#equipmentPrev2',
		btnNext: '#equipmentNext2',
		visible: 4,
		scroll: 4,
		auto: 5000,
		speed: 500
	});	
	
	/*首页灵感渲染*/
	$(".apply ul li").hover(function(){
		$(this).find(".xrBg").stop().fadeTo(500,0.5)
		$(this).find(".xrText").stop().animate({left:'0'}, {duration: 500})
	},
	function(){
		$(this).find(".xrBg").stop().fadeTo(500,0)
		$(this).find(".xrText").stop().animate({left:'260'}, {duration: "fast"})
		$(this).find(".xrText").animate({left:'-260'}, {duration: 0})
	});
	
	/*摄影教程图片*/
	$(".syL dl dd").mouseover(function(){
		$(this).find("span").show();
        $(this).find("p").show();
	}).mouseout(function(){
		$(this).find("span").hide();
        $(this).find("p").hide();
	});
	
		
});