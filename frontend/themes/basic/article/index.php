<?php

use common\helpers\Html;

/* @var $this yii\web\View */
$this->title = '新闻资讯';
?>
<link href="/new_static/css/news.css" rel="stylesheet" type="text/css" />
<div class="bread">
        <p>您的位置：<a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/news/">新闻资讯</a></p>
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
                   	 	<h4><a target="_blank" href="/article/view?id=<?= $item['id'];?>"><?= $item['title']?></a></h4>
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
     <!--热门资讯_Action-->
      <div class="hotNews">
         <a href="/news/?newsTop=hits" class="mainTit tit7">热门资讯</a>
         <a href="/news/?newsTop=hits" class="moreA">更多</a>
         <ul>
            
            <li class='firstLi'>
                <p><a target="_blank" href="newsPage-34-47-1.html">如何才能拍出一张特别好看...</a><span>点击：890</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-34-47-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20150105/1420428926.jpg" alt="攻略:如何才能拍出一张特别好看的自拍照？" title="攻略:如何才能拍出一张特别好看的自拍照？" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=34" class="olive">[攻略]</a><a target="_blank" href="newsPage-34-47-1.html">如何才能拍出一张特别好看的自拍照？</a><br/><span>点击：890</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-30-37-1.html">“1839-2014直接摄影原作展...</a><span>点击：485</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-30-37-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419845119.jpg" alt="影讯:“1839-2014直接摄影原作展”心得分享会" title="影讯:“1839-2014直接摄影原作展”心得分享会" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=30" class="olive">[影讯]</a><a target="_blank" href="newsPage-30-37-1.html">“1839-2014直接摄影原作展”心得分享会</a><br/><span>点击：485</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-34-35-1.html">全球的欢庆时刻 十个跨年旅...</a><span>点击：484</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-34-35-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419843522.jpg" alt="攻略:全球的欢庆时刻 十个跨年旅行圣地推荐" title="攻略:全球的欢庆时刻 十个跨年旅行圣地推荐" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=34" class="olive">[攻略]</a><a target="_blank" href="newsPage-34-35-1.html">全球的欢庆时刻 十个跨年旅行圣地推荐</a><br/><span>点击：484</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-31-38-1.html">多项技术新升级 佳能EF ...</a><span>点击：478</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-31-38-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419842973.jpg" alt="器材:多项技术新升级 佳能EF 100-400 II" title="器材:多项技术新升级 佳能EF 100-400 II" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=31" class="olive">[器材]</a><a target="_blank" href="newsPage-31-38-1.html">多项技术新升级 佳能EF 100-400 II</a><br/><span>点击：478</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-35-41-1.html">一览全球最高大上的苹果店</a><span>点击：471</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-35-41-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419845897.jpg" alt="其它:一览全球最高大上的苹果店" title="其它:一览全球最高大上的苹果店" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=35" class="olive">[其它]</a><a target="_blank" href="newsPage-35-41-1.html">一览全球最高大上的苹果店</a><br/><span>点击：471</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-31-32-1.html">另类大底DC 量产版徕卡D...</a><span>点击：459</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-31-32-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419834523.jpg" alt="器材:另类大底DC 量产版徕卡D-LUX" title="器材:另类大底DC 量产版徕卡D-LUX" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=31" class="olive">[器材]</a><a target="_blank" href="newsPage-31-32-1.html">另类大底DC 量产版徕卡D-LUX</a><br/><span>点击：459</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-34-46-1.html">另一种角度之美 王建军航拍...</a><span>点击：459</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-34-46-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20150103/1420291144.jpg" alt="攻略:另一种角度之美 王建军航拍美国西部作品" title="攻略:另一种角度之美 王建军航拍美国西部作品" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=34" class="olive">[攻略]</a><a target="_blank" href="newsPage-34-46-1.html">另一种角度之美 王建军航拍美国西部作品</a><br/><span>点击：459</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-30-42-1.html">得色空间：拉黑、高山《无...</a><span>点击：455</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-30-42-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20150102/1420187173.jpg" alt="影讯:得色空间：拉黑、高山《无知流放》展讯" title="影讯:得色空间：拉黑、高山《无知流放》展讯" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=30" class="olive">[影讯]</a><a target="_blank" href="newsPage-30-42-1.html">得色空间：拉黑、高山《无知流放》展讯</a><br/><span>点击：455</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-31-39-1.html">国产骄傲 永诺/佳能50mm...</a><span>点击：430</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-31-39-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419844742.jpg" alt="器材:国产骄傲 永诺/佳能50mm F1.8对比图赏" title="器材:国产骄傲 永诺/佳能50mm F1.8对比图赏" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=31" class="olive">[器材]</a><a target="_blank" href="newsPage-31-39-1.html">国产骄傲 永诺/佳能50mm F1.8对比图赏</a><br/><span>点击：430</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-31-43-1.html">FE卡口新镜 福伦达40mm...</a><span>点击：419</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-31-43-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20150102/1420187082.jpg" alt="器材:FE卡口新镜 福伦达40mm f/2.8头" title="器材:FE卡口新镜 福伦达40mm f/2.8头" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=31" class="olive">[器材]</a><a target="_blank" href="newsPage-31-43-1.html">FE卡口新镜 福伦达40mm f/2.8头</a><br/><span>点击：419</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-31-44-1.html">新年礼物？外媒盘点奇异像...</a><span>点击：368</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-31-44-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20150102/1420186080.jpg" alt="器材:新年礼物？外媒盘点奇异像钟的奇特相机" title="器材:新年礼物？外媒盘点奇异像钟的奇特相机" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=31" class="olive">[器材]</a><a target="_blank" href="newsPage-31-44-1.html">新年礼物？外媒盘点奇异像钟的奇特相机</a><br/><span>点击：368</span></dd>
                </dl>
            </li>
            
                       
         </ul>
      </div>
     <!--热门资讯_End-->
     <!--推荐资讯_Action-->
      <div class="hotNews">
         <a href="/news/?newsTop=t" class="mainTit tit8">推荐资讯</a>
         <a href="/news/?newsTop=t" class="moreA">更多</a>
         <ul>
         
             
            <li class='firstLi'>
                <p><a target="_blank" href="newsPage-31-49-1.html">可搭配X-T1 富士发布16-...</a><span>点击：332</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-31-49-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20150106/1420551938.jpg" alt="器材:可搭配X-T1 富士发布16-55mm f/2.8镜头" title="器材:可搭配X-T1 富士发布16-55mm f/2.8镜头" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=31" class="olive">[器材]</a><a target="_blank" href="newsPage-31-49-1.html">可搭配X-T1 富士发布16-55mm f/2.8镜头</a><br/><span>点击：332</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-31-48-1.html">选好入门很重要 4000元热门...</a><span>点击：304</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-31-48-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20150105/1420444549.jpg" alt="器材:选好入门很重要 4000元热门单电单反推荐" title="器材:选好入门很重要 4000元热门单电单反推荐" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=31" class="olive">[器材]</a><a target="_blank" href="newsPage-31-48-1.html">选好入门很重要 4000元热门单电单反推荐</a><br/><span>点击：304</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-34-47-1.html">如何才能拍出一张特别好看...</a><span>点击：890</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-34-47-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20150105/1420428926.jpg" alt="攻略:如何才能拍出一张特别好看的自拍照？" title="攻略:如何才能拍出一张特别好看的自拍照？" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=34" class="olive">[攻略]</a><a target="_blank" href="newsPage-34-47-1.html">如何才能拍出一张特别好看的自拍照？</a><br/><span>点击：890</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-34-46-1.html">另一种角度之美 王建军航拍...</a><span>点击：459</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-34-46-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20150103/1420291144.jpg" alt="攻略:另一种角度之美 王建军航拍美国西部作品" title="攻略:另一种角度之美 王建军航拍美国西部作品" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=34" class="olive">[攻略]</a><a target="_blank" href="newsPage-34-46-1.html">另一种角度之美 王建军航拍美国西部作品</a><br/><span>点击：459</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-31-44-1.html">新年礼物？外媒盘点奇异像...</a><span>点击：368</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-31-44-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20150102/1420186080.jpg" alt="器材:新年礼物？外媒盘点奇异像钟的奇特相机" title="器材:新年礼物？外媒盘点奇异像钟的奇特相机" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=31" class="olive">[器材]</a><a target="_blank" href="newsPage-31-44-1.html">新年礼物？外媒盘点奇异像钟的奇特相机</a><br/><span>点击：368</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-31-43-1.html">FE卡口新镜 福伦达40mm...</a><span>点击：419</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-31-43-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20150102/1420187082.jpg" alt="器材:FE卡口新镜 福伦达40mm f/2.8头" title="器材:FE卡口新镜 福伦达40mm f/2.8头" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=31" class="olive">[器材]</a><a target="_blank" href="newsPage-31-43-1.html">FE卡口新镜 福伦达40mm f/2.8头</a><br/><span>点击：419</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-30-42-1.html">得色空间：拉黑、高山《无...</a><span>点击：455</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-30-42-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20150102/1420187173.jpg" alt="影讯:得色空间：拉黑、高山《无知流放》展讯" title="影讯:得色空间：拉黑、高山《无知流放》展讯" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=30" class="olive">[影讯]</a><a target="_blank" href="newsPage-30-42-1.html">得色空间：拉黑、高山《无知流放》展讯</a><br/><span>点击：455</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-35-41-1.html">一览全球最高大上的苹果店</a><span>点击：471</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-35-41-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419845897.jpg" alt="其它:一览全球最高大上的苹果店" title="其它:一览全球最高大上的苹果店" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=35" class="olive">[其它]</a><a target="_blank" href="newsPage-35-41-1.html">一览全球最高大上的苹果店</a><br/><span>点击：471</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-30-40-1.html">一位女摄影师的复仇：偷我...</a><span>点击：288</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-30-40-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419843876.jpg" alt="影讯:一位女摄影师的复仇：偷我包后果很严重" title="影讯:一位女摄影师的复仇：偷我包后果很严重" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=30" class="olive">[影讯]</a><a target="_blank" href="newsPage-30-40-1.html">一位女摄影师的复仇：偷我包后果很严重</a><br/><span>点击：288</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-31-39-1.html">国产骄傲 永诺/佳能50mm...</a><span>点击：430</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-31-39-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419844742.jpg" alt="器材:国产骄傲 永诺/佳能50mm F1.8对比图赏" title="器材:国产骄傲 永诺/佳能50mm F1.8对比图赏" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=31" class="olive">[器材]</a><a target="_blank" href="newsPage-31-39-1.html">国产骄傲 永诺/佳能50mm F1.8对比图赏</a><br/><span>点击：430</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="newsPage-31-38-1.html">多项技术新升级 佳能EF ...</a><span>点击：478</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="newsPage-31-38-1.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419842973.jpg" alt="器材:多项技术新升级 佳能EF 100-400 II" title="器材:多项技术新升级 佳能EF 100-400 II" />
                    </a>
                    </dt>
                    <dd><a href="/news/?cid=31" class="olive">[器材]</a><a target="_blank" href="newsPage-31-38-1.html">多项技术新升级 佳能EF 100-400 II</a><br/><span>点击：478</span></dd>
                </dl>
            </li>
            
                       
         </ul>
      </div>
     <!--推荐资讯_End-->
     <!--灵感渲染_Action-->
      <div class="hotNews">
         <a href="/edify/" class="mainTit tit9">灵感渲染</a>
         <a href="/edify/" class="moreA">更多</a>
         <ul>
         
             
            <li class='firstLi'>
                <p><a target="_blank" href="/edify/edifyPage-40-36.html">泰北玫瑰</a><span>点击：133</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="/edify/edifyPage-40-36.html">
                    <img src="http://img.sxunt.com/uploads/image/20150103/1420294944.jpg" alt="泰北玫瑰" title="泰北玫瑰" />
                    </a>
                    </dt>
                    <dd><a href="/edify/?source=3" class="olive">[纪实]</a><a target="_blank" href="/edify/edifyPage-40-36.html">泰北玫瑰</a><br/><span>点击：133</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="/edify/edifyPage-40-35.html">金色奇缘</a><span>点击：173</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="/edify/edifyPage-40-35.html">
                    <img src="http://img.sxunt.com/uploads/image/20150102/1420176126.jpg" alt="金色奇缘" title="金色奇缘" />
                    </a>
                    </dt>
                    <dd><a href="/edify/?source=1" class="olive">[人物]</a><a target="_blank" href="/edify/edifyPage-40-35.html">金色奇缘</a><br/><span>点击：173</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="/edify/edifyPage-40-34.html">等待着你</a><span>点击：204</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="/edify/edifyPage-40-34.html">
                    <img src="http://img.sxunt.com/uploads/image/20150102/1420177100.jpg" alt="等待着你" title="等待着你" />
                    </a>
                    </dt>
                    <dd><a href="/edify/?source=1" class="olive">[人物]</a><a target="_blank" href="/edify/edifyPage-40-34.html">等待着你</a><br/><span>点击：204</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="/edify/edifyPage-40-32.html">一组浙江湖州南浔的记忆</a><span>点击：114</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="/edify/edifyPage-40-32.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419864037.jpg" alt="一组浙江湖州南浔的记忆" title="一组浙江湖州南浔的记忆" />
                    </a>
                    </dt>
                    <dd><a href="/edify/?source=7" class="olive">[其它]</a><a target="_blank" href="/edify/edifyPage-40-32.html">一组浙江湖州南浔的记忆</a><br/><span>点击：114</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="/edify/edifyPage-40-31.html">别问我是谁</a><span>点击：160</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="/edify/edifyPage-40-31.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419868482.jpg" alt="别问我是谁" title="别问我是谁" />
                    </a>
                    </dt>
                    <dd><a href="/edify/?source=6" class="olive">[商业]</a><a target="_blank" href="/edify/edifyPage-40-31.html">别问我是谁</a><br/><span>点击：160</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="/edify/edifyPage-40-30.html">《成都车展2014》－－－－...</a><span>点击：227</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="/edify/edifyPage-40-30.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419860261.jpg" alt="《成都车展2014》－－－－－－" title="《成都车展2014》－－－－－－" />
                    </a>
                    </dt>
                    <dd><a href="/edify/?source=7" class="olive">[其它]</a><a target="_blank" href="/edify/edifyPage-40-30.html">《成都车展2014》－－－－－－</a><br/><span>点击：227</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="/edify/edifyPage-40-29.html"> A7是个好相机 </a><span>点击：121</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="/edify/edifyPage-40-29.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419866832.jpg" alt=" A7是个好相机 " title=" A7是个好相机 " />
                    </a>
                    </dt>
                    <dd><a href="/edify/?source=5" class="olive">[生活]</a><a target="_blank" href="/edify/edifyPage-40-29.html"> A7是个好相机 </a><br/><span>点击：121</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="/edify/edifyPage-40-28.html">感受秋天的味道，武康路扫...</a><span>点击：100</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="/edify/edifyPage-40-28.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419865165.jpg" alt="感受秋天的味道，武康路扫街" title="感受秋天的味道，武康路扫街" />
                    </a>
                    </dt>
                    <dd><a href="/edify/?source=5" class="olive">[生活]</a><a target="_blank" href="/edify/edifyPage-40-28.html">感受秋天的味道，武康路扫街</a><br/><span>点击：100</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="/edify/edifyPage-40-27.html">大凉山</a><span>点击：117</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="/edify/edifyPage-40-27.html">
                    <img src="http://img.sxunt.com/uploads/image/20141229/1419859090.jpg" alt="大凉山" title="大凉山" />
                    </a>
                    </dt>
                    <dd><a href="/edify/?source=3" class="olive">[纪实]</a><a target="_blank" href="/edify/edifyPage-40-27.html">大凉山</a><br/><span>点击：117</span></dd>
                </dl>
            </li>
            
            
            <li >
                <p><a target="_blank" href="/edify/edifyPage-40-26.html">三股泉村</a><span>点击：115</span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="/edify/edifyPage-40-26.html">
                    <img src="http://img.sxunt.com/uploads/image/20141230/1419908008.jpg" alt="三股泉村" title="三股泉村" />
                    </a>
                    </dt>
                    <dd><a href="/edify/?source=2" class="olive">[风光]</a><a target="_blank" href="/edify/edifyPage-40-26.html">三股泉村</a><br/><span>点击：115</span></dd>
                </dl>
            </li>
            
                       
         </ul>
      </div>
     <!--灵感渲染_End-->
   </div>

</div>
<script type="text/javascript">
    $(document).ready(function() {	
    	/*news列表页右测*/
    	$(".hotNews ul li").mouseover(function(){
    		$(this).siblings().removeClass("firstLi");
    		$(this).addClass("firstLi");
    	})
    	
    })
</script>

<!--
<div class="col-lg-8">
    <div class="article-list">
        <?php foreach ($models as $item):?>
            <div class="media">
                <div class="media-body">
                    <h4 class="media-heading">
                        <a href="<?= \yii\helpers\Url::toRoute(['article/view', 'id' => $item['id']])?>"><?= $item['title']?></a>
                    </h4>
                    <div class="media-action">
                        <span class="views"><?= Html::icon('eye')?> 浏览 <?= $item->trueView?></span>
                        <span class="comments"><?= Html::a(Html::icon('comments-o') . '评论' . $item->comment, ['article/view', 'id' => $item->id, '#' => 'comments'])?></span>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <?php if (!(new \Detection\MobileDetect())->isMobile()): ?>
    <?= \yii\widgets\LinkPager::widget([
        'pagination' => $pages,
    ]); ?>
    <?php else:?>
    <?= \yii\widgets\LinkPager::widget([
        'pagination' => $pages,
        'nextPageLabel' => '下一页',
        'prevPageLabel' => '上一页',
        'maxButtonCount' => 0,
        'prevPageCssClass' => 'previous',
        'nextPageCssClass' => 'next',
        'options' => ['class' => 'pager'],
    ]); ?>
    <?php endif;?>
</div>
<div class="col-lg-4">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h5>热门标签</h5>
        </div>
        <div class="panel-body">
            <ul class="tag-list list-inline">
                <?php foreach($hotTags as $tag): ?>
                    <li><a class="label label-<?= $tag->level ?>" href="<?= \yii\helpers\Url::to(['article/tag', 'name' => $tag->name])?>"><?= $tag->name ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
-->