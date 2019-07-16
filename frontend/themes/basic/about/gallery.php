<?php
/* @var $this yii\web\View */
?>
<link href="/new_static/css/css.css" rel="stylesheet" type="text/css" />
<link href="/new_static/css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" />
<link href="/new_static/css/demo.css" rel="stylesheet" type="text/css" />
<style>
body{background:#000;}
</style>
<div style="height:auto; overflow:hidden;">
<div class="container">
    <div class="am-container" id="am-container">
                <?php
                foreach($models as $k=>$item){
                    $pic=strpos($item['picsrc'], 'http:') === false ? (\Yii::getAlias('@static') . '/' . $item['picsrc']) : $item['picsrc'];
                    ?>
                    <a href="diary_page-25.html" target="_blank">
                    <img src="<?= $pic?>" alt="<?= $item['describe']?>" title="<?= $item['describe']?>" />
                    </a>
                <?php }?> 
    			</div>
    <div id="loadmore" class="loadmore" style="width:100%;">load more...</div>
    </div>
    <script type="text/javascript" src="/new_static/js/jquery-1.4.min.js"></script>
    <script type="text/javascript" src="/new_static/js/jquery.montage.min.js"></script>
    <script type="text/javascript">
    $(function() {
    	/* 
    	 * just for this demo:
    	 */
    	$('#showcode').toggle(
    		function() {
    			$(this).addClass('up').removeClass('down').next().slideDown();
    		},
    		function() {
    			$(this).addClass('down').removeClass('up').next().slideUp();
    		}
    	);
    	$('#panel').toggle(
    		function() {
    			$(this).addClass('show').removeClass('hide');
    			$('#overlay').stop().animate( { left : - $('#overlay').width() + 20 + 'px' }, 300 );
    		},
    		function() {
    			$(this).addClass('hide').removeClass('show');
    			$('#overlay').stop().animate( { left : '0px' }, 300 );
    		}
    	);
    	
    	var $container 	= $('#am-container'),
    		$imgs		= $container.find('img').hide(),
    		totalImgs	= $imgs.length,
    		cnt			= 0;
    	
    	$imgs.each(function(i) {
    		var $img	= $(this);
    		$('<img/>').load(function() {
    			++cnt;
    			if( cnt === totalImgs ) {
    				$imgs.show();
    				$container.montage({
    					minw : 100,
    					alternateHeight : true,
    					alternateHeightrange : {
    						min	: 50,
    						max	: 350
    					},
    					margin : 8,
    					fillLastrow : true
    				});
    				
    				/* 
    				 * just for this demo:
    				 */
    				$('#overlay').fadeIn(500);
    				var imgarr	= new Array();
    			   
    												
    			       imgarr.push( "<a href='diary_page-45.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1428652673.jpg' alt='两年了/离开了-中国丽人网' title='两年了/离开了-中国丽人网'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-44.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1427266152.JPG' alt='2015CHIC-中国国际服装服饰博览会(上海)' title='2015CHIC-中国国际服装服饰博览会(上海)'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-44.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1427266044.JPG' alt='2015CHIC-中国国际服装服饰博览会(上海)' title='2015CHIC-中国国际服装服饰博览会(上海)'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-44.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1427265988.JPG' alt='2015CHIC-中国国际服装服饰博览会(上海)' title='2015CHIC-中国国际服装服饰博览会(上海)'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-44.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1427265887.JPG' alt='2015CHIC-中国国际服装服饰博览会(上海)' title='2015CHIC-中国国际服装服饰博览会(上海)'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-43.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1423279435.jpg' alt='喝了瓶红酒，摇摇晃晃的，哈哈\\！现场灯光有点暗！今年的舞台效果也不是很好，感觉跳的还是一般般吧！YAHOOOOO！' title='喝了瓶红酒，摇摇晃晃的，哈哈\\！现场灯光有点暗！今年的舞台效果也不是很好，感觉跳的还是一般般吧！YAHOOOOO！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-42.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1423279381.jpg' alt='话剧、魔术、小提琴、街舞、墨尔本鬼步舞/POPPING、时装SHOW、小品、功夫、太极.....' title='话剧、魔术、小提琴、街舞、墨尔本鬼步舞/POPPING、时装SHOW、小品、功夫、太极.....'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-40.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1420976177.JPG' alt='<br />SHEN时装2015春夏新品发布会' title='<br />SHEN时装2015春夏新品发布会'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-40.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1420976021.JPG' alt='SHEN时装2015春夏新品发布会' title='SHEN时装2015春夏新品发布会'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-40.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1420975987.JPG' alt='SHEN时装2015春夏新品发布会' title='SHEN时装2015春夏新品发布会'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-40.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1420975954.JPG' alt='SHEN时装2015春夏新品发布会' title='SHEN时装2015春夏新品发布会'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-40.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1420975918.JPG' alt='SHEN时装2015春夏新品发布会' title='SHEN时装2015春夏新品发布会'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-39.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1420547645.JPG' alt='丽人网络-西溪湿地' title='丽人网络-西溪湿地'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-38.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1412407945.jpg' alt='10月重阳节【上海街头刷街】' title='10月重阳节【上海街头刷街】'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-38.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1412407701.jpg' alt='10月重阳节【上海街头刷街】' title='10月重阳节【上海街头刷街】'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-38.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1412407565.jpg' alt='10月重阳节【上海街头刷街】' title='10月重阳节【上海街头刷街】'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-37.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1412407487.jpg' alt='10月国庆车展拍摄(靓模篇)' title='10月国庆车展拍摄(靓模篇)'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-37.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1412407454.jpg' alt='10月国庆车展拍摄(靓模篇)' title='10月国庆车展拍摄(靓模篇)'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-37.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1412407402.jpg' alt='10月国庆车展拍摄(靓模篇)' title='10月国庆车展拍摄(靓模篇)'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-37.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1412407353.jpg' alt='10月国庆车展拍摄(靓模篇)' title='10月国庆车展拍摄(靓模篇)'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-38.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1412407257.jpg' alt='10月国庆车展拍摄(靓模篇)' title='10月国庆车展拍摄(靓模篇)'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-36.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1412407178.jpg' alt='10月国庆车展拍摄(香车篇)' title='10月国庆车展拍摄(香车篇)'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-36.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1412407074.jpg' alt='10月国庆车展拍摄(香车篇)' title='10月国庆车展拍摄(香车篇)'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-38.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1412406978.jpg' alt='10月重阳节【上海街头刷街】' title='10月重阳节【上海街头刷街】'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-33.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1405436095.jpg' alt='十四届中国（深圳）国际服装展靓女拍摄' title='十四届中国（深圳）国际服装展靓女拍摄'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-34.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1405435967.jpg' alt='十四届中国（深圳）国际服装展VKK走秀现场' title='十四届中国（深圳）国际服装展VKK走秀现场'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-33.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1405435860.jpg' alt='十四届中国（深圳）国际服装展靓女拍摄' title='十四届中国（深圳）国际服装展靓女拍摄'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-32.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402541306.jpg' alt='嵊泗列岛旅游（第三天）' title='嵊泗列岛旅游（第三天）'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-31.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402451464.JPG' alt='嵊泗列岛旅游（第二天）' title='嵊泗列岛旅游（第二天）'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-31.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402450622.jpg' alt='嵊泗列岛旅游（第二天）' title='嵊泗列岛旅游（第二天）'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-32.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402450533.jpg' alt='嵊泗列岛旅游（第三天）' title='嵊泗列岛旅游（第三天）'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-32.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402450510.jpg' alt='嵊泗列岛旅游（第三天）' title='嵊泗列岛旅游（第三天）'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-32.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402450475.jpg' alt='嵊泗列岛旅游（第三天）' title='嵊泗列岛旅游（第三天）'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-31.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402450438.jpg' alt='嵊泗列岛旅游（第二天）' title='嵊泗列岛旅游（第二天）'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-31.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402450417.jpg' alt='嵊泗列岛旅游（第二天）' title='嵊泗列岛旅游（第二天）'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-31.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402450394.jpg' alt='嵊泗列岛旅游（第二天）' title='嵊泗列岛旅游（第二天）'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-31.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402450370.jpg' alt='嵊泗列岛旅游（第二天）' title='嵊泗列岛旅游（第二天）'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-31.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402450332.jpg' alt='嵊泗列岛旅游（第二天）' title='嵊泗列岛旅游（第二天）'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-30.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402449372.jpg' alt='嵊泗列岛旅游（第一天）' title='嵊泗列岛旅游（第一天）'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-30.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402449258.jpg' alt='嵊泗列岛旅游（第一天）,东海渔村夜景！' title='嵊泗列岛旅游（第一天）,东海渔村夜景！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-30.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402449221.jpg' alt='嵊泗列岛旅游（第一天）,有点吓人！' title='嵊泗列岛旅游（第一天）,有点吓人！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-30.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402449187.jpg' alt='嵊泗列岛旅游（第一天）,她对我笑了哦！' title='嵊泗列岛旅游（第一天）,她对我笑了哦！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-30.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402449155.jpg' alt='嵊泗列岛旅游（第一天）,弹跳式拍一张！' title='嵊泗列岛旅游（第一天）,弹跳式拍一张！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-30.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402449106.jpg' alt='嵊泗列岛旅游（第一天），YELLOW！丽丽住的房间，真漂亮！' title='嵊泗列岛旅游（第一天），YELLOW！丽丽住的房间，真漂亮！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-30.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1402449062.jpg' alt='嵊泗列岛旅游（第一天）,渔民的家门口!' title='嵊泗列岛旅游（第一天）,渔民的家门口!'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-21.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1401538447.jpg' alt='中国丽人网年会<br />小文芭鹿SHOW场Popping机械舞！' title='中国丽人网年会<br />小文芭鹿SHOW场Popping机械舞！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-29.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1401465432.jpg' alt='5.25继成村烧烤游泳' title='5.25继成村烧烤游泳'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-28.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1400391926.jpg' alt='记录着那些年我们的回忆——《那些年》Coffee厅！' title='记录着那些年我们的回忆——《那些年》Coffee厅！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-28.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1400391888.jpg' alt='记录着那些年我们的回忆——《那些年》Coffee厅！' title='记录着那些年我们的回忆——《那些年》Coffee厅！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-28.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1400391855.jpg' alt='记录着那些年我们的回忆——《那些年》Coffee厅！' title='记录着那些年我们的回忆——《那些年》Coffee厅！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-28.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1400391823.jpg' alt='记录着那些年我们的回忆——《那些年》Coffee厅！' title='记录着那些年我们的回忆——《那些年》Coffee厅！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-28.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1400391799.jpg' alt='记录着那些年我们的回忆——《那些年》Coffee厅！' title='记录着那些年我们的回忆——《那些年》Coffee厅！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-28.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1400391103.jpg' alt='记录着那些年我们的回忆——《那些年》Coffee厅！' title='记录着那些年我们的回忆——《那些年》Coffee厅！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-24.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398701254.jpg' alt='这个周末无聊！刚买单反没几天，拿出去练练手！拍拍油菜花！' title='这个周末无聊！刚买单反没几天，拿出去练练手！拍拍油菜花！'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-27.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398655540.jpg' alt='4.27江西三清山徙步野营' title='4.27江西三清山徙步野营'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-27.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398655307.jpg' alt='4.27江西三清山徙步野营' title='4.27江西三清山徙步野营'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-27.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398655276.jpg' alt='4.27江西三清山徙步野营' title='4.27江西三清山徙步野营'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-27.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398655217.jpg' alt='4.27江西三清山徙步野营' title='4.27江西三清山徙步野营'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-27.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398654964.jpg' alt='4.27江西三清山徙步野营' title='4.27江西三清山徙步野营'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-26.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398271570.jpg' alt='4.13丽人网神丽峡野炊' title='4.13丽人网神丽峡野炊'/></a>" );
    						
    					 imgarr.push( "<a href='javascript:void(0)' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398271167.jpg' alt='即将拆除的佛堂老街道' title='即将拆除的佛堂老街道'/></a>" );
    						
    					 imgarr.push( "<a href='javascript:void(0)' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398271086.jpg' alt='即将拆除的佛堂老街道' title='即将拆除的佛堂老街道'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-26.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398270833.jpg' alt='4.13丽人网神丽峡野炊' title='4.13丽人网神丽峡野炊'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-26.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398270515.jpg' alt='4.13丽人网神丽峡野炊' title='4.13丽人网神丽峡野炊'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-26.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398270472.jpg' alt='4.13丽人网神丽峡野炊' title='4.13丽人网神丽峡野炊'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-26.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398270443.jpg' alt='4.13丽人网神丽峡野炊' title='4.13丽人网神丽峡野炊'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-26.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398270408.jpg' alt='4.13丽人网神丽峡野炊' title='4.13丽人网神丽峡野炊'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-26.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398270382.jpg' alt='4.13丽人网神丽峡野炊' title='4.13丽人网神丽峡野炊'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-26.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398270335.jpg' alt='4.13丽人网神丽峡野炊' title='4.13丽人网神丽峡野炊'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-26.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398269141.jpg' alt='4.13丽人网神丽峡野炊' title='4.13丽人网神丽峡野炊'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-26.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398269099.jpg' alt='4.13丽人网神丽峡野炊' title='4.13丽人网神丽峡野炊'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-25.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398267543.jpg' alt='4.5松瀑山，我也感受下山水之间的宁静' title='4.5松瀑山，我也感受下山水之间的宁静'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-25.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398267417.jpg' alt='4.5松瀑山，我也感受下山水之间的宁静' title='4.5松瀑山，我也感受下山水之间的宁静'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-25.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398266124.jpg' alt='4.5松瀑山，我也感受下山水之间的宁静' title='4.5松瀑山，我也感受下山水之间的宁静'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-23.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398262011.jpg' alt='小仙女和小葡萄' title='小仙女和小葡萄'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-23.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398261931.jpg' alt='小仙女和小葡萄' title='小仙女和小葡萄'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-23.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398261651.jpg' alt='小仙女和小葡萄' title='小仙女和小葡萄'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-22.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398261259.jpg' alt='米小仙女广州随拍一起来记录吧!' title='米小仙女广州随拍一起来记录吧!'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-22.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398261162.jpg' alt='米小仙女广州随拍一起来记录吧!' title='米小仙女广州随拍一起来记录吧!'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-22.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398261110.jpg' alt='米小仙女广州随拍一起来记录吧!' title='米小仙女广州随拍一起来记录吧!'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-22.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398261058.jpg' alt='米小仙女广州随拍一起来记录吧!' title='米小仙女广州随拍一起来记录吧!'/></a>" );
    						
    					 imgarr.push( "<a href='diary_page-22.html' target='_blank'><img src='http://img.sxunt.com/uploadimg/1398260942.jpg' alt='米小仙女广州随拍一起来记录吧!' title='米小仙女广州随拍一起来记录吧!'/></a>" );
    						
    											
    				$('#loadmore').show().bind('click', function() {
    					var len = imgarr.length;
    					for( var i = 0, newimgs = ''; i < 5; ++i ) {
    						var pos = Math.floor( Math.random() * len ),
    							src	= imgarr[pos];
    						newimgs	+= src ;
    					}
    					
    					var $newimages = $( newimgs );
    					$newimages.imagesLoaded( function(){
    						$container.append( $newimages ).montage( 'add', $newimages );
    					});
    				});
    			}
    		}).attr('src',$img.attr('src'));
    	});	
    	
    });
    </script>
    </div>