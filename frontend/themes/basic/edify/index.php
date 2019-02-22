<?php
/* @var $this yii\web\View */
$this->title="灵感渲染";
?>
<link href="/new_static/css/edifyCss.css" type="text/css" rel="stylesheet" />
<div class="px80"></div>
<div class="topMenu yapiskan">
  <div class="topMenuC">
     <div class="topMenuBg"></div>
     <div class="topMenuText">
     <a href="/edify/" <?php if(!$source)echo "class='flHover'";?>>全部</a><span>|</span>
     <a href="?source=1" <?php if($source==1)echo "class='flHover'";?>>人物</a><span>|</span>
     <a href="?source=2" <?php if($source==2)echo "class='flHover'";?>>风光</a><span>|</span>
     <a href="?source=3" <?php if($source==3)echo "class='flHover'";?>>纪实</a><span>|</span>
     <a href="?source=4" <?php if($source==4)echo "class='flHover'";?>>生态</a><span>|</span>
     <a href="?source=5" <?php if($source==5)echo "class='flHover'";?>>生活</a><span>|</span>
     <a href="?source=6" <?php if($source==6)echo "class='flHover'";?>>商业</a><span>|</span>
     <a href="?source=7" <?php if($source==7)echo "class='flHover'";?>>其它</a>
     </div>
  </div>
</div>
<div id="lanrenzhijia">
    <?php
        foreach ($models as $k=>$v){
            if($v['px260Pic']!='') $px260Pic = $v['px260Pic'];
    		else $px260Pic = '/new_static/images/nofoundpic.gif';
    		$height=getimagesize("{$px260Pic}");
    		if($height){
    		    $height2=round(260/$height[0]*$height[1]);
    		}else{
    		    $height2=300;
    		}
    ?>
        <div class="box">
         <div class="info">
           <div class="pic">
              <img src="<?= $v['px260Pic'];?>" title="<?= $v['title'];?>" alt="<?= $v['title'];?>">
              <a href="<?php echo '/edify/view?id='.$v['id'];?>" target="_blank" class="rsp" style="height:<?= $height2; ?>px"></a>
              <a href="<?php echo '/edify/view?id='.$v['id']?>" target="_blank" class="text">
              <h3><?= $v['title']?></h3>
              <div><?= $v['digest']?></div>
              </a>
          </div>
        </div>
      </div>
    <?php }?>

    </div>
  
<script type="text/javascript">
window.onload = function(){
	//运行瀑布流主函数
	PBL('lanrenzhijia','box');
	
//	var data = [
//		{'src':'http://img.sxunt.com/uploads/image/20150103/1420292528.jpg','title':'泰北玫瑰','href':'edifyPage-40-36.html','content':'清迈一年中节日无数，佛诞日鲜花节守夏节，有两个节是重头戏，绝对不允许错过的，著名的泼水节和天灯节。'},
//		{'src':'http://img.sxunt.com/uploads/image/20141219/1419000865.jpg','title':'蔓越红颜','href':'edifyPage-40-9.html','content':''},
//		];
	
	var iii=2;//从2+1=3页开始取
	var flag=1;//取数据开关
	//设置滚动加载
	window.onscroll = function(){

		//校验数据请求
		if(getCheck()){
			
			if(flag==1){
				flag=0;
				iii++;
				data='';
    			$.ajax({
    				   type: "GET",
    				   url: "/edify/ajaxgetedify",
    				   data: 'page='+iii+'&source=<?= $source?>',
    				   success: function(msg){
        				   if(msg){
        					   eval("var data="+msg);
       					       console.log(data);
       					    
        					   var lanrenzhijia = document.getElementById('lanrenzhijia');
        						for(i in data){
        							//创建box
        							var box = document.createElement('div');
        							box.className = 'box';
        							lanrenzhijia.appendChild(box);
        							//创建info
        							var info = document.createElement('div');
        							info.className = 'info';
        							box.appendChild(info);
        							//创建pic
        							var pic = document.createElement('div');
        							pic.className = 'pic';
        							info.appendChild(pic);
        							
        							//创建img_
        							var img = document.createElement('img');
        							img.src = data[i].src;
        							
        							var imgDemo = new Image();
        							imgDemo.src = data[i].src;
        							var imgheight=260/imgDemo.width*imgDemo.height;
        							img.style.height = Math.round(imgheight)+'px';
        							
        							pic.appendChild(img);
        							
        							//创建图片Hover背景
        							var imgHoverBg = document.createElement('a');
        							imgHoverBg.className = 'rsp';;
        							imgHoverBg.style.height = Math.round(imgheight)+'px';
        							imgHoverBg.href = data[i].href;
        							imgHoverBg.target = '_blank';
        							pic.appendChild(imgHoverBg);
        							
        							//链接文字
        							var linktext = document.createElement('a');
        							linktext.className = 'text';;
        							linktext.style.height = Math.round(imgheight)+'px';
        							linktext.href = data[i].href;
        							linktext.target = '_blank';
        							pic.appendChild(linktext);
        							//h3标题
        							var h3Title = document.createElement('h3');
        							h3Title.innerHTML = data[i].title;
        							linktext.appendChild(h3Title);
        							//contend
        							var leirong = document.createElement('div');
        							leirong.innerHTML = data[i].content;
        							linktext.appendChild(leirong);
        							
        							$(".rsp").hide();	
        							$("#lanrenzhijia .box .info .pic").hover(function(){
        								$(this).find(".rsp").stop().fadeTo(500,0.5)
        								$(this).find(".text").stop().animate({left:'0'}, {duration: 500})
        						    },function(){
        								$(this).find(".rsp").stop().fadeTo(500,0)
        								$(this).find(".text").stop().animate({left:'260'}, {duration: "fast"})
        								$(this).find(".text").animate({left:'-260'}, {duration: 0})
        							});
        						}
        						PBL('lanrenzhijia','box');
        						flag=1;
        				   }else{
        					   flag=0;
        					   data='';  
        				   }   
          					   
    				   }
    				});
			  }
			  
		}
	}
}
/**
* 瀑布流主函数
* @param  lanrenzhijia	[Str] 外层元素的ID
* @param  box 	[Str] 每一个box的类名
*/
function PBL(lanrenzhijia,box){
	//	1.获得外层以及每一个box
	var lanrenzhijia = document.getElementById(lanrenzhijia);
	var boxs  = getClass(lanrenzhijia,box);
	//	2.获得屏幕可显示的列数
	var boxW = boxs[0].offsetWidth;
	var colsNum = Math.floor(document.documentElement.clientWidth/boxW);
	lanrenzhijia.style.width = boxW*colsNum+'px';//为外层赋值宽度
	//	3.循环出所有的box并按照瀑布流排列
	var everyH = [];//定义一个数组存储每一列的高度
	for (var i = 0; i < boxs.length; i++) {
		if(i<colsNum){
			everyH[i] = boxs[i].offsetHeight;
		}else{
			var minH = Math.min.apply(null,everyH);//获得最小的列的高度
			var minIndex = getIndex(minH,everyH); //获得最小列的索引
			getStyle(boxs[i],minH,boxs[minIndex].offsetLeft,i);
			everyH[minIndex] += boxs[i].offsetHeight;//更新最小列的高度
		}
	}
}
/**
* 获取类元素
* @param  warp		[Obj] 外层
* @param  className	[Str] 类名
*/
function getClass(lanrenzhijia,className){
	var obj = lanrenzhijia.getElementsByTagName('*');
	var arr = [];
	for(var i=0;i<obj.length;i++){
		if(obj[i].className == className){
			arr.push(obj[i]);
		}
	}
	return arr;
}
/**
* 获取最小列的索引
* @param  minH	 [Num] 最小高度
* @param  everyH [Arr] 所有列高度的数组
*/
function getIndex(minH,everyH){
	for(index in everyH){
		if (everyH[index] == minH ) return index;
	}
}
/**
* 数据请求检验
*/
function getCheck(){
	var documentH = document.documentElement.clientHeight;
	var scrollH = document.documentElement.scrollTop || document.body.scrollTop;
	return documentH+scrollH>=getLastH() ?true:false;
}
/**
* 获得最后一个box所在列的高度
*/
function getLastH(){
	var lanrenzhijia = document.getElementById('lanrenzhijia');
	var boxs = getClass(lanrenzhijia,'box');
	return boxs[boxs.length-1].offsetTop+boxs[boxs.length-1].offsetHeight;
}
/**
* 设置加载样式
* @param  box 	[obj] 设置的Box
* @param  top 	[Num] box的top值
* @param  left 	[Num] box的left值
* @param  index [Num] box的第几个
*/
var getStartNum = 0;//设置请求加载的条数的位置
function getStyle(box,top,left,index){
    if (getStartNum>=index) return;
    $(box).css({
    	'position':'absolute',
        'top':top,
        "left":left,
        "opacity":"0"
    });
    $(box).stop().animate({
        "opacity":"1"
    },999);
    getStartNum = index;//更新请求数据的条数位置
}
</script>
<script>
$(function(){	
    //$(this).dwseeTopBottomMenu()
    var cubuk_seviye = $(document).scrollTop();
    var header_yuksekligi = $('.yapiskan').outerHeight();

    $(window).scroll(function() {
        var kaydirma_cubugu = $(document).scrollTop();

        if (kaydirma_cubugu > 0){$('.yapiskan').addClass('gizle');} 
        else {$('.yapiskan').removeClass('gizle');}

        if (kaydirma_cubugu = cubuk_seviye){$('.yapiskan').removeClass('sabit');} 
        else {$('.yapiskan').addClass('sabit');}				

        cubuk_seviye = $(document).scrollTop();	
     });

    $(".rsp").hide();	
	$("#lanrenzhijia .box .info .pic").hover(function(){
		$(this).find(".rsp").stop().fadeTo(500,0.5)
		$(this).find(".text").stop().animate({left:'0'}, {duration: 500})
	},
	function(){
		$(this).find(".rsp").stop().fadeTo(500,0)
		$(this).find(".text").stop().animate({left:'260'}, {duration: "fast"})
		$(this).find(".text").animate({left:'-260'}, {duration: 0})
	});
	
});
</script>