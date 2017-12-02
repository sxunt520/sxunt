<?php
use common\helpers\Myfunction;
use common\models\Edify;
/* @var $this yii\web\View */
$this->title="{$model->title}";
//上一篇
$prev=Edify::getprev($model->id);
if($prev){
    $prev_a='<a href="/edify/view?id='.$prev['id'].'">'.$prev['title'].'</a>';
}else{
    $prev_a='无';
}
//下一篇
$next=Edify::getnext($model->id);
if($next){
    $next_a='<a href="/edify/view?id='.$next['id'].'">'.$next['title'].'</a>';
}else{
    $next_a='无';
}
?>
<link href="/new_static/css/css.css" rel="stylesheet" type="text/css" />
<LINK href="/new_static/css/sexylightbox.css" type=text/css rel=stylesheet>
<div class="diaBox">
<div class="diapage">
    <div class="diapageT">  
        <div class="diapageTC">  
        <p><a href="./">首页</a> >> <a href="/edify/">灵感渲染</a> >> <a href="javascript:void(0);"><?php echo $model->title;?></a></p><span>下一篇：<?= $next_a;?></span>
        </div>
    </div>
    <div class="diapageB">
      <div class="diapageBC">  
             <div class="diatime">
                <div class="diatimeL">
             Time：<?php echo date("Y-m-d",$model->posttime);?>&nbsp;&nbsp;　　来源：<?php $sourceArr=['1'=>'人物写真','2'=>'风光拍摄','3'=>'纪实抓拍','4'=>'生态微距','5'=>'生活记录','6'=>'商业摄影','7'=>'其它拍摄'];echo $sourceArr[$model->source];?>&nbsp;&nbsp;　　点击：<?php echo $model->trueHits;?></div>
                <div class="diatimeR">
                    <!-- JiaThis Button BEGIN -->
                    <div id="ckepop">
                    <span class="jiathis_txt">分享到：</span>
                    <a class="jiathis_button_weixin">微信</a>
                    <a class="jiathis_button_qzone">QQ空间</a>
                    <a class="jiathis_button_tsina">新浪微博</a>
                    <a class="jiathis_button_renren">人人网</a> 
                    <a href="http://www.jiathis.com/share"  class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
                    <a class="jiathis_counter_style"></a> </div> 
                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
                    </div>
                    <!-- JiaThis Button END -->
                </div>
             </div>
         <div class="tq">
             <span class="tq1">作者:<?php echo !empty($model->author)?$model->author:'未知';?></span>
             <span class="tq2">器材 ：<?php echo !empty($model->camera)?$model->camera:'未知';?></span>
             <span class="tq3">地点 ：<?php echo !empty($model->address)?$model->address:'未知';?></span>
           </div>
         <div class="diaMain22" id="container">
              <h2 class="diaTitle22"><?php echo $model->title;?></h2>
              <?php
                if($model->digestPage){
                    echo '<div class="edifyText">'.$model->digestPage.'</div>';
                }
                ?>
            
            <?php foreach ($EdifyImg_Arr as $k=>$v){?>    
            <div class="edifyBox">
            <?php 
                $edify_url=Yii::getAlias('@static').$v['edify_url'];
                $width=@getimagesize($edify_url);
                if($width[0]<=830){
                    $widthNum=$width[0];
                }
                else $widthNum=830;
            ?>
                <div class="edifyPic" style="width:<?php echo $widthNum;?>px">
                    <h3>第<?php echo $k+1;?>幅</h3>
                    <a href="<?php echo $edify_url;?>" rel=sexylightbox[group1]><img src="<?php echo $edify_url;?>"  title="<?php echo $model->title;?>"/></a>
                            <?php 
                				$exif = Myfunction::GetImageInfo($edify_url);
                            ?>
                            <div class="exif">
                               <div class="exif2">
                                  <div class="exifBg"></div>
                                    <div class="exifText">
                                        <dl>
                                        <dt>品　　牌</dt><dd><?php if(!empty($exif['制造商'])){echo $exif['制造商'];}else echo '-----'?></dd>
                                        <dt>型　　号</dt><dd><?php if(!empty($exif['型号'])){echo $exif['型号'];}else echo '-----'?></dd>
                                        <dt>光　　圈</dt><dd><?php if(!empty($exif['快门光圈'])){echo $exif['快门光圈'];}else echo '-----'?></dd>
                                        <dt>快　　门</dt><dd><?php if(!empty($exif['曝光时间'])){echo $exif['曝光时间'];}else echo '-----'?></dd>
                                        <dt>I　S　O</dt><dd><?php if(!empty($exif['ISO感光度'])){echo $exif['ISO感光度'];}else echo '-----'?></dd>
                                        <dt>焦　　距</dt><dd><?php if(!empty($exif['焦距'])){echo $exif['焦距'];}else echo '-----'?></dd>
                                        <dt>白 平 衡</dt><dd><?php if(!empty($exif['白平衡'])){echo $exif['白平衡'];}else echo '-----'?></dd>
                                        <dt>曝光程序</dt><dd><?php if(!empty($exif['曝光程序'])){echo $exif['曝光程序'];}else echo '-----'?></dd>
                                        <dt>曝光模式</dt><dd><?php if(!empty($exif['曝光模式'])){echo $exif['曝光模式'];}else echo '-----'?></dd>
                                        <dt>曝光补偿</dt><dd><?php if(!empty($exif['曝光补偿'])){echo $exif['曝光补偿'];}else echo '-----'?></dd>
                                        <dt>测光模式</dt><dd><?php if(!empty($exif['测光模式'])){echo $exif['测光模式'];}else echo '-----'?></dd>
                                        <dt>闪 光 灯</dt><dd><?php if(!empty($exif['闪光灯'])){echo $exif['闪光灯'];}else echo '-----'?></dd>
                                        <dt>日　　期</dt><dd><?php if(!empty($exif['拍摄时间'])){echo $exif['拍摄时间'];}else echo '-----'?></dd>
                                        </dl>             
                                    </div>
                                  <a href="javascript:void(0);">Exif</a>
                               </div>
                      
                    </div>
                
                </div>
            </div>
           <?php if($v['text']){echo '<div class="edifyText2">'.$v['text'].'</div>';}?> 
	       <?php }?>    
          
          <?php if(!empty($model->other)){?>
             <div class="edifyContent">
             <?php echo $model->other; ?>
             </div>
         <?php } ?>
          
         </div>
      </div>
       <div class="diapageBB">  
            <div class="diapageTC">  
                <p>上一篇：<?= $prev_a;?></p>
                <span>下一篇：<?= $next_a;?></span>
            </div>
        </div>  
    </div> 
</div>
<script src="/new_static/js/jqueryedify.min.js" type="text/javascript"></script>
<script src="/new_static/js/jquery.easing.1.3.js" type=text/javascript></script>
<script src="/new_static/js/sexylightbox.v2.3.jquery.js" type=text/javascript></script>
<script type="text/javascript">
$(document).ready(function() {
	
	//$(this).dwseeTopBottomMenu()
	
	/*Exif*/
	$(".edifyPic").mouseover(function(){
		$(this).find(".exif").show();
	}).mouseout(function(){
		$(this).find(".exif").hide();
	});
	
	$(".exif2").mouseover(function(){
		$(this).find(".exifBg").show();
		$(this).find(".exifText").show();
		$(this).find("a").addClass("xHover");
	}).mouseout(function(){
		$(this).find(".exifBg").hide();
		$(this).find(".exifText").hide();
		$(this).find("a").removeClass("xHover");
	});
	
	/*暗箱弹图  color颜色选择 : white black blanco negro */
	SexyLightbox.initialize({color:'black', dir: '/new_static/images'});
	
})
</script>