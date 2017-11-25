//顶部滚动相关JS,begin
	var focusWrap = $('.fWrap'),
	aLeft = $('.aLeft',focusWrap),
	aRight = $('.aRight',focusWrap),
	slide = $('.slide',focusWrap),
	liArrow = $('.iArrow',aLeft),
	riArrow = $('.iArrow',aRight),
	slidePic = $('#focus'),
	ulObj = $('ul',focusWrap);
	ulObj.append(ulObj.html());//BT的无缝滚动
	arryLi = $('li',focusWrap);
	var copyLen = arryLi.length,   //无缝滚动拷贝后的长度
	picLen = copyLen/2,        //保存原始长度
	curPage = 1,
	switchHover = 0,  //选择框里的当前状态设置
	saveLen = tLen = arryLi.eq(0).width()+10;  //保存每次移动的宽度，要求所有li宽度一致
	arryLi.eq(curPage).find(".pos").css("bottom", "0px");
	//右切换
	function scrollRight(){
		if(curPage < copyLen - 1){
			isFx = true;
			arryLi.eq(curPage).find(".pos").animate({bottom: "-52px"},300);
			tLen += saveLen;
			curPage++;
			slide.animate({left: -tLen},300,"swing",function(){
				if(curPage == picLen+1){
				slide.css("left",-saveLen + 'px')
				curPage = 1;
				tLen = saveLen;
				}
				isFx = false;
				var picUrl = arryLi.eq(curPage+1).find("img").attr("picUrl");
				if(picUrl!=""){
					arryLi.eq(curPage+1).find("img").attr("src",picUrl)	
					arryLi.eq(curPage+1).find("img").attr("picUrl","")
				}
				arryLi.eq(curPage).find(".pos").animate({bottom: 0},300);
			});
			(curPage > picLen) && (switchHover = -1);
		}
	}
	//左切换
	function scrollLeft(){
		if(curPage > 0){
			isFx = true;
			arryLi.eq(curPage).find(".pos").animate({bottom: "-52px"},300);
			tLen -= saveLen;
			curPage--;
			//选择框状态同步
			(curPage == picLen) && (switchHover = picLen - 1);
			(curPage == 0) && (switchHover = picLen);
			
			slide.animate({left: -tLen},300,"swing",function(){
				if(curPage == 0){
					slide.css("left",-saveLen * (picLen) + 'px');
					curPage = picLen;
					tLen = saveLen * picLen;
				}
				isFx = false;
				var picUrl = arryLi.eq(curPage-1).find("img").attr("picUrl");
				if(picUrl!=""){
					arryLi.eq(curPage-1).find("img").attr("src",picUrl)	
					arryLi.eq(curPage-1).find("img").attr("picUrl","")
				}
				arryLi.eq(curPage).find(".pos").animate({bottom: 0},300);
			});
		}
	}
	aLeft.click(function(){
		!isFx && scrollLeft();	
	})
	aRight.click(function(){
		!isFx && scrollRight();	
	})

	var myTime = setInterval(scrollRight,6000);

	focusWrap.hover(function(){
		isFx = false;
		clearInterval(myTime);		
	},function(){
		isFx = true;
		myTime = setInterval(scrollRight,6000);
	})
	//onload跟resize时，设置左右两按钮区域的宽度
	window.onload = window.onresize = function (){
		var arrowWidth = Math.round((document.body.clientWidth-slidePic.width())/2);
		aLeft.css("width",arrowWidth+"px")
		aRight.css("width",arrowWidth+"px")
		//alert(arrowWidth)
		var winScreenWidth = window.screen.width;
		if(arrowWidth<=90){
			liArrow.css("right",-60+"px")
			riArrow.css("left",-60+"px")
		}else{
			liArrow.css("right",62+"px")
			riArrow.css("left",62+"px")	
		}
	};
	//顶部滚动相关JS,end