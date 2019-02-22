<?php

use common\helpers\Html;

/* @var $this yii\web\View */
$this->title = '新闻资讯';
?>
<link href="/new_static/css/news.css" rel="stylesheet" type="text/css" />
<div class="bread">
        <p>您的位置：<a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/article/">新闻资讯</a><?php if(!empty($tagname)){echo '&nbsp;&gt;&nbsp;热门标签:'.$tagname;}?></p>
        <div class="breadFx">
            <div id="ckepop">
            <span class="jiathis_txt">分享到：</span>
            <a class="jiathis_button_weixin">微信</a>
            <a class="jiathis_button_qzone">QQ空间</a>
            <a class="jiathis_button_tsina">新浪微博</a>
            <a class="jiathis_button_renren">人人网</a> 
            <a href="http://www.jiathis.com/share"  class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
            <a class="jiathis_counter_style"></a>
            </div> 
            <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
        </div>
</div>
<div class="news">
   <div class="newsL">
      <div class="newsTit">
      <h2>新闻资讯/NEWS</h2>
     <h3>
         <a href="/article/" <?php echo $cate==false?"class='h3aHover'":'';?>>全部</a>
         <a href="/article/?cate=1" <?php echo $cate==1?"class='h3aHover'":'';?>>影讯</a>
         <a href="/article/?cate=2" <?php echo $cate==2?"class='h3aHover'":'';?>>器材</a>
         <a href="/article/?cate=3" <?php echo $cate==3?"class='h3aHover'":'';?>>影赛</a>
         <a href="/article/?cate=4" <?php echo $cate==4?"class='h3aHover'":'';?>>旅行</a>
         <a href="/article/?cate=5" <?php echo $cate==5?"class='h3aHover'":'';?>>攻略</a>
         <a href="/article/?cate=6" <?php echo $cate==6?"class='h3aHover'":'';?>>其它</a>
     </h3>
      </div>
    <div class="newsList">
            <div class="newsListC">
            <?php foreach($models as $k=>$item){?>
                <dl >
                    <dt>
                        <a target="_blank" href="/article/view?id=<?= $item['id'];?>">
                        <img src="<?= $item['cover']?>" alt="<?= $item['title']?>" title="<?= $item['title']?>" /></a>
                    </dt>
                    <dd>
                   	 	<h4>
                       	 	<a target="_blank" href="/article/view?id=<?= $item['id'];?>">
                       	 	  <?php
                           	 	  $title=$item['title'];
                           	 	  if(!empty($tagname)){
                           	 	      $title=str_replace($tagname,'<span style="color:#BC411D;">'.$tagname.'</span>',$title);
                           	 	  }
                           	 	  echo $title;
                       	 	  ?>
                       	 	</a>
                   	 	</h4>
                    	<h5><span><?= date("Y-m-d h:i:s",$item['created_at']);?></span><span>来源：<a href="/article/?cate=<?= $item['category_id']?>"><?= $item['category']?></a></span><span>点击：<?= $item->trueView?></span></h5>
                   		 <p><?= Html::truncate_utf8_string($item['desc'],95,false);?><a target="_blank" href="/article/view?id=<?= $item['id'];?>">&lt;&lt;详情</a>
                   		 </p>
                    </dd> 
                </dl>
             <?php }?>              
                            </div>
      </div>

      <div class="page_ul">
          <?php if (!(new \Detection\MobileDetect())->isMobile()): ?>
            <?= \yii\widgets\LinkPager::widget([
                'pagination' => $pages,
                'options' => ['class' => 'my_pager'],
            ]); ?>
            <?php else:?>
            <?= \yii\widgets\LinkPager::widget([
                'pagination' => $pages,
                'nextPageLabel' => '下一页',
                'prevPageLabel' => '上一页',
                'maxButtonCount' => 0,
                'prevPageCssClass' => 'previous',
                'nextPageCssClass' => 'next',
                'options' => ['class' => 'my_pager'],
            ]); ?>
          <?php endif;?>
      </div>
      
    </div>
    
   <div class="newsR">
     <?php echo $this->render('_article_right', ['rightnews' => $rightnews]); ?>
   </div>

</div>
