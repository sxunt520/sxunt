// JavaScript Document
$(function(){
	//$(' .slider_list ul').width(3000);
	
	if($(window).width()>767){	
		$('.main_title .title_box').height($('.main_title .title_explanation').height());
		$('.main_title .title_box h2').css('margin-top', ($('.main_title .title_box').height()-$('.main_title .title_box h2').height())/2 );
	}else{
		$('.main_title .title_box').css('min-height','60px');	
		$('.main_title .title_box h2').css('margin-top', ($('.main_title .title_box').height()-$('.main_title .title_box h2').height())/2 );
	}
	$('#slider0 .slider_list ul').width($('#slider0 .slider_list li').length * ($('#slider0 .slider_list li').width() + parseInt($('#slider0 .slider_list ul li').css('margin-right'))));
	$('#slider1 .slider_list ul').width($('#slider1 .slider_list li').length * ($('#slider1 .slider_list li').width() + parseInt($('#slider1 .slider_list ul li').css('margin-right'))));
	$('#slider2 .slider_list ul').width($('#slider2 .slider_list li').length * ($('#slider2 .slider_list li').width() + parseInt($('#slider2 .slider_list ul li').css('margin-right'))));
	$('#slider3 .slider_list ul').width($('#slider3 .slider_list li').length * ($('#slider3 .slider_list li').width() + parseInt($('#slider3 .slider_list ul li').css('margin-right'))));
	$('#slider4 .slider_list ul').width($('#slider4 .slider_list li').length * ($('#slider4 .slider_list li').width() + parseInt($('#slider4 .slider_list ul li').css('margin-right'))));
	$('#slider5 .slider_list ul').width($('#slider5 .slider_list li').length * ($('#slider5 .slider_list li').width() + parseInt($('#slider5 .slider_list ul li').css('margin-right'))));
	
	/*mask*/
	$('#slider0 .mask').css({'top':$('#slider0 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider0 .slider_list ul li.active i').attr('data_gpsx')});
	$('#slider0 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider0 .slider_list ul li.active i').attr('data_src'));
	$('#slider0 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider0 .slider_list ul li.active i').attr('data_src1'));
	$('#slider1 .mask').css({'top':$('#slider1 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider1 .slider_list ul li.active i').attr('data_gpsx')});
	$('#slider1 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider1 .slider_list ul li.active i').attr('data_src'));
	$('#slider1 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider1 .slider_list ul li.active i').attr('data_src1'));
	$('#slider2 .mask').css({'top':$('#slider2 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider2 .slider_list ul li.active i').attr('data_gpsx')});
	$('#slider2 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider2 .slider_list ul li.active i').attr('data_src'));
	$('#slider2 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider2 .slider_list ul li.active i').attr('data_src1'));
	$('#slider3 .mask').css({'top':$('#slider3 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider3 .slider_list ul li.active i').attr('data_gpsx')});
	$('#slider3 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider3 .slider_list ul li.active i').attr('data_src'));
	$('#slider3 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider3 .slider_list ul li.active i').attr('data_src1'));
	$('#slider4 .mask').css({'top':$('#slider4 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider4 .slider_list ul li.active i').attr('data_gpsx')});
	$('#slider4 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider4 .slider_list ul li.active i').attr('data_src'));
	$('#slider4 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider4 .slider_list ul li.active i').attr('data_src1'));
	$('#slider5 .mask').css({'top':$('#slider5 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider5 .slider_list ul li.active i').attr('data_gpsx')});
	$('#slider5 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider5 .slider_list ul li.active i').attr('data_src'));
	$('#slider5 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider5 .slider_list ul li.active i').attr('data_src1'));
	
	$('#slider0 .slider_list ul li').click(function(){
		$('#slider0 .slider_list ul li').removeClass('active');
		$(this).addClass('active');	
		list_index[0] = $(this).index(); 
		$('#slider0 .mask').css({'top':$('#slider0 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider0 .slider_list ul li.active i').attr('data_gpsx')});
		$('#slider0 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider0 .slider_list ul li.active i').attr('data_src'));
		$('#slider0 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider0 .slider_list ul li.active i').attr('data_src1'));
		$('#slider0 .slider_caption .caption_txt').html($('#slider0 .slider_list ul li.active i').attr('data_cap'));
	});
	$('#slider1 .slider_list ul li').click(function(){
		$('#slider1 .slider_list ul li').removeClass('active');
		$(this).addClass('active');	
		list_index[1] = $(this).index(); 
		$('#slider1 .mask').css({'top':$('#slider1 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider1 .slider_list ul li.active i').attr('data_gpsx')});
		$('#slider1 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider1 .slider_list ul li.active i').attr('data_src'));
		$('#slider1 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider1 .slider_list ul li.active i').attr('data_src1'));
		$('#slider1 .slider_caption .caption_txt').html($('#slider1 .slider_list ul li.active i').attr('data_cap'));
	});
	$('#slider2 .slider_list ul li').click(function(){
		$('#slider2 .slider_list ul li').removeClass('active');
		$(this).addClass('active');	
		list_index[2] = $(this).index(); 
		$('#slider2 .mask').css({'top':$('#slider2 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider2 .slider_list ul li.active i').attr('data_gpsx')});
		$('#slider2 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider2 .slider_list ul li.active i').attr('data_src'));
		$('#slider2 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider2 .slider_list ul li.active i').attr('data_src1'));
		$('#slider2 .slider_caption .caption_txt').html($('#slider2 .slider_list ul li.active i').attr('data_cap'));
	});
	$('#slider3 .slider_list ul li').click(function(){
		$('#slider3 .slider_list ul li').removeClass('active');
		$(this).addClass('active');	
		list_index[3] = $(this).index(); 
		$('#slider3 .mask').css({'top':$('#slider3 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider3 .slider_list ul li.active i').attr('data_gpsx')});
		$('#slider3 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider3 .slider_list ul li.active i').attr('data_src'));
		$('#slider3 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider3 .slider_list ul li.active i').attr('data_src1'));
		$('#slider3 .slider_caption .caption_txt').html($('#slider3 .slider_list ul li.active i').attr('data_cap'));
	});
	$('#slider4 .slider_list ul li').click(function(){
		$('#slider4 .slider_list ul li').removeClass('active');
		$(this).addClass('active');	
		list_index[4] = $(this).index(); 
		$('#slider4 .mask').css({'top':$('#slider4 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider4 .slider_list ul li.active i').attr('data_gpsx')});
		$('#slider4 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider4 .slider_list ul li.active i').attr('data_src'));
		$('#slider4 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider4 .slider_list ul li.active i').attr('data_src1'));
		$('#slider4 .slider_caption .caption_txt').html($('#slider4 .slider_list ul li.active i').attr('data_cap'));
	})
	$('#slider5 .slider_list ul li').click(function(){
		$('#slider5 .slider_list ul li').removeClass('active');
		$(this).addClass('active');	
		list_index[5] = $(this).index(); 
		$('#slider5 .mask').css({'top':$('#slider5 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider5 .slider_list ul li.active i').attr('data_gpsx')});
		$('#slider5 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider5 .slider_list ul li.active i').attr('data_src'));
		$('#slider5 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider5 .slider_list ul li.active i').attr('data_src1'));
		$('#slider5 .slider_caption .caption_txt').html($('#slider5 .slider_list ul li.active i').attr('data_cap'));
	})
	/*lightboxInit();
	function lightboxInit() {
		  $('.let-there-be-light').click(function(e){
			if($(window).width()>960) {
			  e.preventDefault();
			  var $thisHref = $(this).attr('href');
			  buildLightBox($thisHref);
			}else{
				var $thisHref = $(this).attr('href');
				$('html').html('<img onclick="window.location.reload()" src="'+$thisHref+'" alt="" />');
				$('body').css('margin','0');
				return false;
			}
		  });
	}
		
	function buildLightBox(src) {
			var img = new Image;
			img.onload = function(){
			$('<div class="lightbox">').appendTo('body').html('<img src="'+src+'" alt="" />');
			var imgTop = ($(window).height() - img.height)/2;
			var imgLeft = ($(window).width() - img.width)/2;
			if(imgTop<0){imgTop = 0;}
			if(imgLeft<0){imgLeft = 0;}
			var lightboxTop = $(window).height() + $(window).scrollTop() - img.height - imgTop;
			$(".lightbox").css({"position":"absolute", "height":$("body").height()})
			$(".lightbox img").css({"position":"absolute", "top": lightboxTop, "left": imgLeft });
			}
			img.src = src;
		  $('body').on('click','.lightbox',function(e) {
			 $('.lightbox').remove();
		  });
		}
	*/
	
	
	var $deviceW = $(window).width();
	$(window).resize(function(){
		if($(window).width() != $deviceW){
		if($(window).width()>767){	
		$('.main_title .title_box').height($('.main_title .title_explanation').height());
		$('.main_title .title_box h2').css('margin-top', ($('.main_title .title_box').height()-$('.main_title .title_box h2').height())/2 );
		}else{
			$('.main_title .title_box').css('min-height','60px');	
			$('.main_title .title_box h2').css('margin-top', ($('.main_title .title_box').height()-$('.main_title .title_box h2').height())/2 );
		}
		$('#slider0 .slider_list ul').width($('#slider0 .slider_list li').length * ($('#slider0 .slider_list li').width() + parseInt($('#slider0 .slider_list ul li').css('margin-right'))));
		$('#slider1 .slider_list ul').width($('#slider1 .slider_list li').length * ($('#slider1 .slider_list li').width() + parseInt($('#slider1 .slider_list ul li').css('margin-right'))));
		$('#slider2 .slider_list ul').width($('#slider2 .slider_list li').length * ($('#slider2 .slider_list li').width() + parseInt($('#slider2 .slider_list ul li').css('margin-right'))));
		$('#slider3 .slider_list ul').width($('#slider3 .slider_list li').length * ($('#slider3 .slider_list li').width() + parseInt($('#slider3 .slider_list ul li').css('margin-right'))));
		$('#slider4 .slider_list ul').width($('#slider4 .slider_list li').length * ($('#slider4 .slider_list li').width() + parseInt($('#slider4 .slider_list ul li').css('margin-right'))));
		$('#slider5 .slider_list ul').width($('#slider5 .slider_list li').length * ($('#slider5 .slider_list li').width() + parseInt($('#slider5 .slider_list ul li').css('margin-right'))));
		
		sliderL = 0;
		list_index[0] = 0;
		list_index[1] = 0;
		list_index[2] = 0;
		list_index[3] = 0;
		list_index[4] = 0;
		list_index[5] = 0;
		sliderW = 3000;
		//moveS = $('.slider_list ul li').width() + parseInt($('.slider_list ul li').css('margin-right'));
		sliderLW = $('.slider_list').width();
		$('.slider_thumbnails').each(function(z){
			$('#slider' + z +' .slider_list ul:not(:animated)').animate({'left' : 0}, 'fast');	
			$('#slider' + z + ' .slider_list ul li').removeClass('active');
			$('#slider' + z +' .slider_list ul li:eq(0)').addClass('active');
		});
		$('#slider0 .mask').css({'top':$('#slider0 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider0 .slider_list ul li.active i').attr('data_gpsx')});
		$('#slider0 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider0 .slider_list ul li.active i').attr('data_src'));
		$('#slider0 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider0 .slider_list ul li.active i').attr('data_src1'));
		$('#slider0 .slider_caption .caption_txt').html($('#slider0 .slider_list ul li.active i').attr('data_cap'));
		$('#slider1 .mask').css({'top':$('#slider1 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider1 .slider_list ul li.active i').attr('data_gpsx')});
		$('#slider1 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider1 .slider_list ul li.active i').attr('data_src'));
		$('#slider1 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider1 .slider_list ul li.active i').attr('data_src1'));
		$('#slider1 .slider_caption .caption_txt').html($('#slider1 .slider_list ul li.active i').attr('data_cap'));
		$('#slider2 .mask').css({'top':$('#slider2 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider2 .slider_list ul li.active i').attr('data_gpsx')});
		$('#slider2 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider2 .slider_list ul li.active i').attr('data_src'));
		$('#slider2 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider2 .slider_list ul li.active i').attr('data_src1'));
		$('#slider2 .slider_caption .caption_txt').html($('#slider2 .slider_list ul li.active i').attr('data_cap'));
		$('#slider3 .mask').css({'top':$('#slider3 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider3 .slider_list ul li.active i').attr('data_gpsx')});
		$('#slider3 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider3 .slider_list ul li.active i').attr('data_src'));
		$('#slider3 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider3 .slider_list ul li.active i').attr('data_src1'));
		$('#slider3 .slider_caption .caption_txt').html($('#slider3 .slider_list ul li.active i').attr('data_cap'));
		$('#slider4 .mask').css({'top':$('#slider4 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider4 .slider_list ul li.active i').attr('data_gpsx')});
		$('#slider4 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider4 .slider_list ul li.active i').attr('data_src'));
		$('#slider4 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider4 .slider_list ul li.active i').attr('data_src1'));
		$('#slider4 .slider_caption .caption_txt').html($('#slider4 .slider_list ul li.active i').attr('data_cap'));
		$('#slider5 .mask').css({'top':$('#slider5 .slider_list ul li.active i').attr('data_gpsy'), 'left':$('#slider5 .slider_list ul li.active i').attr('data_gpsx')});
		$('#slider5 .slider_caption .caption_img .caption_img_l img').attr('src', $('#slider5 .slider_list ul li.active i').attr('data_src'));
		$('#slider5 .slider_caption .caption_img .caption_img_r img').attr('src', $('#slider5 .slider_list ul li.active i').attr('data_src1'));
		$('#slider5 .slider_caption .caption_txt').html($('#slider5 .slider_list ul li.active i').attr('data_cap'));
		
		}
		
		
	});
	
	/*navgation*/
	$('.menu_bt').click(function(){
		$('.nav_menu').slideToggle('fast');						 
	});
	
	
});

/*imgchange*/
var curIndex = 0;
var timeInterval = 400;
var ImgAr = new Array(); //获取选择器下的所有图片
var z;  //获取选择器名称
function changeImg(z){
	ImgAr = $( z +' img');
	if(curIndex == ImgAr.length - 1){
		/*获得到最后一张图片的时候将计数器curIndex归零*/
		$(z + ' img:eq('+(curIndex)+')').fadeOut();
		curIndex = 0;
		$(z + ' img:eq('+(curIndex)+')').fadeIn();
	}else{
		$(z + ' img:eq('+curIndex+')').fadeOut();
		$(z + ' img:eq('+(curIndex + 1)+')').fadeIn();
		curIndex ++;
	}

}

/*selected*/
function select_box(select_name, selectedI){
	$(select_name + ' select').get(0).selectedIndex = selectedI;
	$(select_name + ' .img_sel').attr('src', $(select_name + ' select').find('option:selected').val());
	$(select_name + ' select').change(function(){
		$(select_name + ' .img_sel').attr('src', $(this).find('option:selected').val());	
	})	
};



var sliderL;
var sliderW;
var sliderN;
var list_index = new Array;
list_index[0] = 0;
list_index[1] = 0;
list_index[2] = 0;
list_index[3] = 0;
list_index[4] = 0;
list_index[5] = 0;

function prevClick(slider, index){
	sliderL = parseInt( $(slider + ' .slider_list ul').css('left'));
	sliderW = $(slider + ' .slider_list ul').width();
	sliderN = $(slider + ' .slider_list ul li').length;
	$(slider + ' .slider_list ul').width(($(slider + ' .slider_list ul li').width() + parseInt($(slider + ' .slider_list ul li').css('margin-right'))) * $(slider + ' .slider_list ul li').length);
		var moveS = $(slider + ' .slider_list ul li').width() + parseInt($(slider + ' .slider_list ul li').css('margin-right'));
		if(sliderL >= 0){
			$(slider + ' .slider_list ul').css('left', 0);
			if(list_index[index]>0){
			$(slider + ' .slider_list ul li').removeClass('active');
			list_index[index] --;
			$(slider + ' .slider_list ul li:eq('+list_index[index]+')').addClass('active');
			$(slider + ' .mask').css({'top':$(slider + ' .slider_list ul li.active i').attr('data_gpsy'), 'left':$(slider + ' .slider_list ul li.active i').attr('data_gpsx')});
			$(slider + ' .slider_caption .caption_img .caption_img_l img').attr('src', $(slider + ' .slider_list ul li.active i').attr('data_src'));
			$(slider + ' .slider_caption .caption_img .caption_img_r img').attr('src', $(slider + ' .slider_list ul li.active i').attr('data_src1'));
			$(slider + ' .slider_caption .caption_txt').html($(slider + ' .slider_list ul li.active i').attr('data_cap'));	
			}
		}else{
			$(slider + ' .slider_list ul:not(:animated)').animate({'left' : sliderL+moveS}, 'fast');
			sliderL += moveS;
			$(slider + ' .slider_list ul li').removeClass('active');
			list_index[index] --;
			$(slider + ' .slider_list ul li:eq('+list_index[index]+')').addClass('active');
			$(slider + ' .mask').css({'top':$(slider + ' .slider_list ul li.active i').attr('data_gpsy'), 'left':$(slider + ' .slider_list ul li.active i').attr('data_gpsx')});
			$(slider + ' .slider_caption .caption_img .caption_img_l img').attr('src', $(slider + ' .slider_list ul li.active i').attr('data_src'));
			$(slider + ' .slider_caption .caption_img .caption_img_r img').attr('src', $(slider + ' .slider_list ul li.active i').attr('data_src1'));
			$(slider + ' .slider_caption .caption_txt').html($(slider + ' .slider_list ul li.active i').attr('data_cap'));
		}
		
}

function nextClick(slider, index){
	sliderL = parseInt( $(slider + ' .slider_list ul').css('left'));
	sliderW = $(slider + ' .slider_list ul').width();
	sliderN = $(slider + ' .slider_list ul li').length;
	//alert('ok');
	$(slider + ' .slider_list ul').width(($(slider + ' .slider_list ul li').width() + parseInt($(slider + ' .slider_list ul li').css('margin-right'))) * $(slider + ' .slider_list ul li').length);
		var moveS = $(slider + ' .slider_list ul li').width() + parseInt($(slider + ' .slider_list ul li').css('margin-right'));
		//alert (sliderW);
		var sliderM =  Math.abs(sliderL);
		var sliderLW = $(slider + ' .slider_list').width();
		if(sliderW - sliderM < (sliderLW + moveS)){
			if(list_index[index] < sliderN-1){
			$(slider + ' .slider_list ul li').removeClass('active');
			list_index[index] ++;
			$(slider + ' .slider_list ul li:eq('+ list_index[index] +')').addClass('active');
			$(slider + ' .mask').css({'top':$(slider + ' .slider_list ul li.active i').attr('data_gpsy'), 'left':$(slider + ' .slider_list ul li.active i').attr('data_gpsx')});
			$(slider + ' .slider_caption .caption_img .caption_img_l img').attr('src', $(slider + ' .slider_list ul li.active i').attr('data_src'));
			$(slider + ' .slider_caption .caption_img .caption_img_r img').attr('src', $(slider + ' .slider_list ul li.active i').attr('data_src1'));
			$(slider + ' .slider_caption .caption_txt').html($(slider + ' .slider_list ul li.active i').attr('data_cap'));	
			}else{
			
			}
		}else{
			$(slider + ' .slider_list ul:not(:animated)').animate({'left' : sliderL-moveS}, 'fast');
			sliderL -= moveS;
			$(slider + ' .slider_list ul li').removeClass('active');
			list_index[index] ++;
			$(slider + ' .slider_list ul li:eq('+list_index[index]+')').addClass('active');
			$(slider + ' .mask').css({'top':$(slider + ' .slider_list ul li.active i').attr('data_gpsy'), 'left':$(slider + ' .slider_list ul li.active i').attr('data_gpsx')});
			$(slider + ' .slider_caption .caption_img .caption_img_l img').attr('src', $(slider + ' .slider_list ul li.active i').attr('data_src'));
			$(slider + ' .slider_caption .caption_img .caption_img_r img').attr('src', $(slider + ' .slider_list ul li.active i').attr('data_src1'));
			$(slider + ' .slider_caption .caption_txt').html($(slider + ' .slider_list ul li.active i').attr('data_cap'));
		}
	
}

$(window).load(function(){
	$('#table .img_fiveF').width($('#table .img_fiveF img').width() + 70)	
})

function lightbox(img1){
	if($(window).width() >= 940){
	$('body').append('<div class="lb-bg"></div><div class="lb-co"><img src="' + img1 + '" /></div>');	
	$('.lb-bg, .lb-co').css({'width':$(window).width(), 'height':$('.container').height()});
	var img = new Image;
	img.onload = function(){
		var imgTop = ($(window).height() - img.height)/2;
		var imgLeft = ($(window).width() - img.width)/2;
		if($.browser.msie && $.browser.version == '6.0'){
			$('.lb-co img').css('top', eval(document.documentElement.scrollTop + imgTop));
			$('.lb-co img').css('left', eval(document.documentElement.scrollLeft + imgLeft));	
		}else{
			$('.lb-co img').css('top', imgTop);	
			$('.lb-co img').css('left', imgLeft);
		}
	}
	img.src = img1;
	
	$('body').on('click','.lb-co',function(e) {
		 $('.lb-bg, .lb-co').remove();
	  });
	return false;
	}else{
		$('html').html('<img onclick="window.location.reload()" src="'+img1+'" alt="" />');	
	}
}