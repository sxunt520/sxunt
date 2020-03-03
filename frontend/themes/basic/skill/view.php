<?php
use common\helpers\Myfunction;
use common\models\Skill;
/* @var $this yii\web\View */
$this->title="{$model->title}";
//上一篇
$prev=Skill::getprev($model->id);
if($prev){
    $prev_a='<a href="/skill/view?id='.$prev['id'].'">'.$prev['title'].'</a>';
}else{
    $prev_a='无';
}
//下一篇
$next=Skill::getnext($model->id);
if($next){
    $next_a='<a href="/skill/view?id='.$next['id'].'">'.$next['title'].'</a>';
}else{
    $next_a='无';
}
?>
<link href="/new_static/css/css.css" rel="stylesheet" type="text/css" />
<div class="diaBox">
<div class="diapage">
    <div class="diapageT">  
        <div class="diapageTC">  
        <p><a href="/">首页</a> >> <a href="/skill/">摄影技巧</a> >> <a href="javascript:void(0);"><?= $model->title;?></a></p><span>下一篇：<?= $next_a;?></span>
        </div>
    </div>
    <div class="diapageB">
      <div class="diapageBC">  
             <div class="diatime2">
                <div class="diatimeL">
                时间：<?= $model->datetime;?>　　来源：<?= $model->from;?>　　作者:<?= $model->author;?>                </div>
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
         <div class="diaMain2">
              <h2 class="diaTitle"><?= $model->title;?></h2>
             <?= $model->content?>
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