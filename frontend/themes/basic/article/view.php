<?php
/* @var $this yii\web\View */
/* @var $commentModel common\models\Comment */
/* @var $hots common\models\Article */
/* @var $commentModels common\models\Comment */
/* @var $pages yii\data\Pagination */
use common\helpers\Html;
use frontend\models\Article;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => $model->category, 'url' => ['/article/index', 'cate' => \common\models\Category::find()->where(['id' => $model->category_id])->select('name')->scalar()]];
$this->params['breadcrumbs'][] = $model->title;

//上一篇
$prev=Article::getprev($model->id);
if($prev){
    $prev_a='<a href="/article/view?id='.$prev['id'].'">'.$prev['title'].'</a>';
}else{
    $prev_a='无';
}
//下一篇
$next=Article::getnext($model->id);
if($next){
    $next_a='<a href="/article/view?id='.$next['id'].'">'.$next['title'].'</a>';
}else{
    $next_a='无';
}
?>
<link href="/new_static/css/news.css" rel="stylesheet" type="text/css" />
<div class="bread">
        <p>您的位置：<a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/news/">新闻资讯</a>&nbsp;&gt;&nbsp;<a href="/news/?cid=34">攻略</a>&nbsp;&gt;&nbsp;正文</p>
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
   <div class="newsPage">
       <div class="newsPageT">
         <div class="newsPageT2"><p>时间：<?php echo date("Y-m-d h:i:s",$model->created_at);?>&nbsp;&nbsp;&nbsp;&nbsp;来源：<?= $model->category;?>&nbsp;&nbsp;&nbsp;&nbsp;点击：<?= $model->trueView?></p><span>(编辑：<?= $model->author?>)</span></div>
       </div>
       <div class="newsPageMain">
           <div class="newsPageMain2">
               <h1><?= $model->title;?></h1>
               <?php if(!empty($model->title)) echo '<div class="brief">'.$model->title.'</div>';?>
					<div class="newsContent">
					<?= \yii\helpers\Markdown::process($model->data->content, 'gfm') ?>
                    </div>
           </div>
       </div>
       <div class="newsPageB">
           <div class="newsPageB2">
                <span class="prevPage">上一篇：<?= $prev_a;?></span>
                <span class="prevNext">下一篇：<?= $next_a;?></span>
           </div>
       </div>
       
       <div style=" margin-top:30px; border-top:2px solid #96B879;">
       <?= $this->render('comment', ['model' => $model, 'commentModel' => $commentModel, 'commentModels' => $commentModels, 'pages' => $pages, 'commentDataProvider' => $commentDataProvider])?>
       </div>
   </div>
   <div class="newsR">
     <?php echo $this->render('_article_right', ['rightnews' => $rightnews]); ?>
   </div>
</div>