<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 transitional//EN" "http://www.w3.org/tr/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?= Yii::$app->language ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
<?= Html::csrfMetaTags() ?>
<title><?= Html::encode($this->title) ?></title>
<?php $this->registerMetaTag(['name' => 'keywords', 'content' => Yii::$app->config->get('SEO_SITE_KEYWORDS')]);?>
<?php $this->registerMetaTag(['name' => 'description', 'content' => Yii::$app->config->get('SEO_SITE_DESCRIPTION')]);?>
<?php $this->head() ?>
<link rel="Shortcut Icon" href="/new_static/images/favicon.ico"/>
<script type="text/javascript" src="/new_static/js/jquery.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>
<?php
$CCC=Yii::$app->controller->id;
$AAA=Yii::$app->controller->action->id;
$CCC_AAA=$CCC.'_'.$AAA;
?>
<!--top_Action-->
<div class="top">
    <div class="topC">
        <h1><a href="/"><img src="/new_static/images/logo.png" width="230" height="80" /></a></h1>
        <div class="nav">
<ul>
    <li><a href="/" <?php if(in_array($CCC_AAA, ['site_index'])){echo 'class="navhover"';}?>>首&nbsp;页</a></li>
    <li>
    <a href="/edify/" <?php if(in_array($CCC, ['edify'])){echo 'class="navhover"';}?>>灵感渲染</a>
        <div class="navList">
          <span></span>
          <a href="/edify/?source=1">人物写真</a><a href="/edify/?source=2">风光拍摄</a><a href="/edify/?source=3">纪实抓拍</a><a href="/edify/?source=4">生态微距</a><a href="/edify/?source=5">生活记录</a><a href="/edify/?source=6">商业摄影</a><a href="/edify/?source=7">其它拍摄</a>
          </div>
    </li>
    <li>
    <a href="/article/" <?php if(in_array($CCC, ['article'])){echo 'class="navhover"';}?>>新闻资讯</a>
        <div class="navList">
          <span></span>
              <a href="/article/?cate=1">影讯</a>
              <a href="/article/?cate=2">器材</a>
              <a href="/article/?cate=3">影赛</a>
              <a href="/article/?cate=4">旅行</a>
              <a href="/article/?cate=5">攻略</a>
              <a href="/article/?cate=6">其它</a>
          </div>
    </li>
    <li>
    <a href="/skill/" <?php if(in_array($CCC, ['skill'])){echo 'class="navhover"';}?>>摄影技巧</a>
      <div class="navList">
      <span></span>
      <a href="/skill/?subNav=1">名词解释</a><a href="/skill/?subNav=2">器材基础</a><a href="/skill/?subNav=3">拍摄技巧</a><a href="/skill/?subNav=4">后期处理</a>
      </div>
    </li>
    <li>
    <a href="/course/" <?php if(in_array($CCC_AAA, ['course_index'])){echo 'class="navhover"';}?>>摄影教程</a>
        <div class="navList">
          <span></span>
              <a href="/course/approach/">入门篇</a>
              <a href="/course/beginner/">初级篇</a>
              <a href="/course/intermediate/">中级篇</a>
              <a href="/course/lens/">镜头篇</a>
              <a href="/course/tips/">拍摄篇</a>
              <a href="/course/movie/">短片篇</a>
              <a href="/course/application/">电脑篇</a>
          </div>
    </li>
    <li>
    <a href="/about/" <?php if(in_array($CCC, ['about'])){echo 'class="navhover"';}?>>关于始渲</a>
         <div class="navList">
          <span></span>
              <a href="/about/gallery/">画廊</a>
              <a href="/about/diary/">日记</a>
              <a href="/about/message/">建议</a>
              <a href="/about/aboutme/">About me</a>
          </div>
    </li>
    
</ul>
        </div>
    </div>
</div>
<!--top_End-->
<?= $content ?>
<?php if(!in_array($CCC_AAA, ['edify_index','about_gallery'])&&!in_array($CCC, ['course'])){?>
<!--footNav_Action-->
<div class="footNav">
<div class="footNavC">
   <div class="footbox">
   <div class="part">
   <h3>Partners</h3>
      <a href="http://www.poco.cn/" target="_blank">POCO</a><br />
        <a href="http://www.fengniao.com/" target="_blank">蜂鸟网</a><br />
        <a href="http://www.haibao.com/" target="_blank">海报网</a><br />
        <a href="http://www.yoka.com/" target="_blank">YOKA时尚网</a><br />
        <a href="http://www.vogue.com.cn/" target="_blank">VOGUE 时尚网</a><br />
    </div>
   <div class="navi">
    <h3>Navigation</h3>
        <a href="/">主页</a><br />
        <a href="/edify/">灵感渲染</a><br />
        <a href="/article/">新闻资讯</a><br />
        <a href="/skill/">摄影技巧</a><br />
        <a href="/course/">摄影教程</a><br />
        <a href="/about/">关于始渲</a><br />
   </div>
   <div class="me">
   <h3>About Us</h3><br />
       <a href="/about/"><img src="http://img.sxunt.com/uploadimg/1418131992.jpg" width="260" height="100" /></a><br />
       <p>—— 最初渲染(Original Render) | 始渲(SXUNT)</p>
       <div class="button"><a href="/about/">More</a></div>
   </div>
   </div>
</div>
</div>
<!--footNav_End-->
<?php }?>

<?php if(!in_array($CCC_AAA, ['edify_index'])){?>
<div class="footer">
<div class="footerC">
<p>Copyright © 2018 - All Rights Reserved - Original Render(SXUNT)</p>		
</div>
</div>
<?php }?>

<script type="text/javascript">
$(document).ready(function() {	
	/*navList*/
	$(".nav ul li").mouseover(function(){
		$(this).find(".navList").show();
		$(this).children("a").addClass("navhover2");
	}).mouseout(function(){
		$(this).find(".navList").hide();
		$(this).children("a").removeClass("navhover2");
	});
	
})
</script>

<?php if(!in_array($CCC_AAA, ['about_index','gallery_index','article_view'])&&!in_array($CCC, ['course'])){?>
<link href="/new_static/css/lanrenzhijia.css" rel="stylesheet" type="text/css" />
<script src="/new_static/js/lanrenzhijia.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(this).dwseeTopBottomMenu()
})
</script>
<div class="TopBottomMenu">
	<ul style="background: #fff;">
		<li><a href="/">首&nbsp;页</a></li>
        <li><a href="/edify/">灵感渲染</a></li>
        <li><a href="/article/">新闻资讯</a></li>
		<li><a href="/skill/">摄影技巧</a></li>
        <li><a href="/course/">摄影教程</a></li>
        <li><a href="/about/">关于始渲</a></li>
   </ul>
</div>
<?php } ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>