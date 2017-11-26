<?php

use common\helpers\Html;
/* @var $this yii\web\View */

?>
<link href="/new_static/css/index.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/new_static/js/pc.js"></script>
<script type="text/javascript" src="/new_static/js/jcarousellite.js"></script>
<script type="text/javascript" src="/new_static/js/mf-pattern/mF_fancy.js"></script>
<script type="text/javascript" src="/new_static/js/myfocus-2.0.1.min.js"></script>
<script type="text/javascript" src="/new_static/js/index.js"></script>
<!--Banner_Action-->
<div class="fWrap">
<a href="javascript:void(0)" class="aLeft">
<span class="sBg"></span><i class="iArrow"></i>
</a>
  <div class="focus" id="focus">
    <div class="slide"> 
      <ul>
      <!-- 
              <li>
        <a href="/edify/edifyPage-40-35.html" target="_blank" title="金色奇缘">
        <img picurl="" alt="金色奇缘" src="http://img.sxunt.com/uploads/image/20150102/1420175848.jpg" height="400" width="1000">
        <i class="mask pos"></i> <i class="pos fTxt yh">金色奇缘</i> </a> 
        </li>
                <li>
        <a href="/edify/edifyPage-40-34.html" target="_blank" title="等待着你">
        <img picurl="" alt="等待着你" src="http://img.sxunt.com/uploads/image/20150102/1420173029.jpg" height="400" width="1000">
        <i class="mask pos"></i> <i class="pos fTxt yh">等待着你</i> </a> 
        </li>
                <li>
        <a href="/edify/edifyPage-40-30.html" target="_blank" title="成都车展2014车展风景线">
        <img picurl="" alt="成都车展2014车展风景线" src="http://img.sxunt.com/uploads/image/20141217/1418834930.jpg" height="400" width="1000">
        <i class="mask pos"></i> <i class="pos fTxt yh">成都车展2014车展风景线</i> </a> 
        </li>
      -->   
      <?php foreach($adv_banner as $v): ?>
          <li>
            <a href="<?= $v->jumpurl ?>" target="_blank" title="<?= $v->title ?>">
            <img picurl="" alt="<?= $v->title ?>" src="<?php echo strpos($v->advimg, 'http:') === false ? (\Yii::getAlias('@static') . '/' . $v->advimg) : $v->advimg;?>" height="400" width="1000">
            <i class="mask pos"></i> <i class="pos fTxt yh"><?= $v->title ?></i> </a> 
          </li> 
      <?php endforeach; ?>    
      </ul>
    </div>
  </div>
      <a href="javascript:void(0)" class="aRight">
      <span class="sBg"></span><i class="iArrow"></i>
      </a>
   </div>
   <!--Banner_End-->
   <!--now_Action-->
   <div class="now">
     <div class="nowL">
       <div class="focusPic">
            <div id="myFocus"><!--焦点图盒子-->
            <div class="loading"><img src="images/loading.gif" alt="请稍候..." /></div><!--载入画面(可删除)-->
            <div class="pic"><!--图片列表-->
            <ul>
            <!--
                <li><a href="/diary_page-40.html" target="_blank"><img src="http://img.sxunt.com/uploads/image/20150114/1421239770.jpg" thumb="" alt="SHEN时装2015春夏新品发布会" text="SHEN时装2015春夏新品发布会" /></a></li>
                <li><a href="/news/newsPage-34-47-1.html" target="_blank"><img src="http://img.sxunt.com/uploads/image/20150105/1420433114.jpg" thumb="" alt="如何才能拍出一张特别好看的自拍照？" text="如何才能拍出一张特别好看的自拍照？" /></a></li>
                <li><a href="/news/newsPage-34-35-1.html" target="_blank"><img src="http://img.sxunt.com/uploads/image/20141230/1419926975.jpg" thumb="" alt="全球的欢庆时刻 十个跨年旅行圣地推荐" text="全球的欢庆时刻 十个跨年旅行圣地推荐" /></a></li>
                <li><a href="/diary_page-22.html" target="_blank"><img src="http://img.sxunt.com/uploads/image/20141217/1418835488.jpg" thumb="" alt="米小仙女-广州中部地区站" text="米小仙女-广州中部地区站" /></a></li>
                -->
                <?php foreach($adv_news as $v): ?>
                    <li><a href="<?= $v->jumpurl ?>" target="_blank"><img src="<?php echo strpos($v->advimg, 'http:') === false ? (\Yii::getAlias('@static') . '/' . $v->advimg) : $v->advimg;?>" thumb="" alt="<?= $v->title ?>" text="<?= $v->title ?>" /></a></li>
                <?php endforeach; ?>  
            </ul>
            </div>
            </div>
       </div>
       <div class="nowFocusList">
        <ul>
           <li class='firstList'><a href="/news/newsPage-35-41-1.html" target="_blank">一览全球最高大上的苹果店</a></li>
           <li ><a href="/edify/edifyPage-40-30.html" target="_blank">成都车展2014</a></li>
           </ul>   
       </div>
     </div>
     <div class="nowC">
       <h2>what's right now</h2>
     <div class="nowFocusList2">
            <ul>
            <?php foreach($rightnow_news as $k=>$v): ?>
            <li <?php echo $k==0?'class="firstLi"':'';?>><a target="_blank" href="/news/newsPage-34-<?= $v->id ?>-1.html"><?= $v->title ?></a></li>
            <?php endforeach; ?>
            <!-- 
              <li class='firstLi'><a target="_blank" href="/news/newsPage-31-49-1.html">可搭配X-T1 富士发布16-55mm f/2.8镜头</a></li>
              <li ><a target="_blank" href="/news/newsPage-34-47-1.html">如何才能拍出一张特别好看的自拍照？</a></li>
              <li ><a target="_blank" href="/news/newsPage-34-46-1.html">另一种角度之美 王建军航拍美国西部作品</a></li>
              <li ><a target="_blank" href="/news/newsPage-30-42-1.html">得色空间：拉黑、高山《无知流放》展讯</a></li>
              <li ><a target="_blank" href="/news/newsPage-35-41-1.html">一览全球最高大上的苹果店</a></li>
             -->  
           </ul>   
           </div>
           <h4 class="yx">影讯</h4>
               <dl>
                 <dt>
                    <a target="_blank" href="/news/newsPage-30-<?= $consult_news[0]->id ?>-1.html"><img src="<?= $consult_news[0]->cover ?>" alt="<?= $consult_news[0]->title ?>" title="<?= $consult_news[0]->title ?>" /></a>
                </dt>
                <dd>
                <ul>
                <?php foreach($consult_news as $k=>$v): ?>
                <li><a target="_blank" href="/news/newsPage-34-<?= $v->id ?>-1.html"><?= $v->title ?></a></li>
                <?php endforeach; ?>
                <!--
                    <li><a target="_blank" href="/news/newsPage-30-42-1.html">得色空间：拉黑、高山《无知流放》展讯</a></li>
                    <li><a target="_blank" href="/news/newsPage-30-40-1.html">一位女摄影师的复仇：偷我包后果很严重</a></li>
                    <li><a target="_blank" href="/news/newsPage-30-37-1.html">“1839-2014直接摄影原作展”心得分享会</a></li>
                    <li><a target="_blank" href="/news/newsPage-30-31-1.html">2014 PSA China特克斯国际摄影展开幕</a></li>
                -->
                </ul>
                 </dd>
               </dl>
           <h4 class="qc">器材</h4>
              <dl class="floatR">
                 <dt>
                 <a target="_blank" href="/news/newsPage-30-<?= $equlpment_news[0]->id ?>-1.html"><img src="<?= $equlpment_news[0]->cover ?>" alt="<?= $equlpment_news[0]->title ?>" title="<?= $equlpment_news[0]->title ?>" /></a>
                  </dt>
                 <dd>
                    <ul>
		            <?php foreach($equlpment_news as $k=>$v): ?>
                    <li><a target="_blank" href="/news/newsPage-34-<?= $v->id ?>-1.html"><?= $v->title ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                 </dd>
               </dl>
       <h4 class="qt">其它</h4>
           <dl>
             <dt>
             <a target="_blank" href="/news/newsPage-30-<?= $other_news[0]->id ?>-1.html"><img src="<?= $other_news[0]->cover ?>" alt="<?= $other_news[0]->title ?>" title="<?= $other_news[0]->title ?>" /></a>
             </dt>
           <dd>
            <ul>
                <?php foreach($other_news as $k=>$v): ?>
                    <li><a target="_blank" href="/news/newsPage-34-<?= $v->id ?>-1.html"><?= $v->title ?></a></li>
                <?php endforeach; ?>
             </ul>
           </dd>
         </dl>
     </div>
     <div class="nowR">
       <div class="nowRC">
         <a href="/news/" class="mainTit tit1">最新资讯</a>
         <a href="/news/" class="moreA">更多</a>
         <div class="nowRMain" id="nowRMain">
             <ul>
             <?php foreach($now_news as $k=>$v): ?>
              <li>
                 <dl>
                   <dt>
                   <a target="_blank" href="/news/newsPage-31-<?= $v->id ?>-1.html">
                   <img src="<?= $v->cover ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>" />
                   </a>
                   </dt>
                   <dd><a href="/news/news-<?= $v->category_id ?>-1.html" class="olive">[<?= $v->category ?>]</a><span><a target="_blank" href="/news/newsPage-31-<?= $v->id ?>-1.html"><?= Html::truncate_utf8_string($v->title,8,false)?></a></span><br /><?= Html::truncate_utf8_string($v->desc,22)?></dd>
                 </dl>
             </li>
             <?php endforeach; ?>
                <!-- 
                   <li>
                     <dl>
                       <dt>
                       <a target="_blank" href="/news/newsPage-31-49-1.html">
                       <img src="http://img.sxunt.com/uploads/image/20150106/1420551938.jpg" alt="器材:可搭配X-T1 富士发布16-55mm f/2.8镜头" title="器材:可搭配X-T1 富士发布16-55mm f/2.8镜头" />
                       </a>
                       </dt>
                       <dd><a href="/news/news-31-1.html" class="olive">[器材]</a><span><a target="_blank" href="/news/newsPage-31-49-1.html">可搭配X-T1 富...</a></span><br />根据dpreview最 新消息，富士发布XF 16-55...</dd>
                     </dl>
                 </li>
                                 <li>
                     <dl>
                       <dt>
                       <a target="_blank" href="/news/newsPage-31-48-1.html">
                       <img src="http://img.sxunt.com/uploads/image/20150105/1420444549.jpg" alt="器材:选好入门很重要 4000元热门单电单反推荐" title="器材:选好入门很重要 4000元热门单电单反推荐" />
                       </a>
                       </dt>
                       <dd><a href="/news/news-31-1.html" class="olive">[器材]</a><span><a target="_blank" href="/news/newsPage-31-48-1.html">选好入门很重要...</a></span><br />对于相机没什么概念的新手来说，如果你一开始...</dd>
                     </dl>
                 </li>
                                 <li>
                     <dl>
                       <dt>
                       <a target="_blank" href="/news/newsPage-34-47-1.html">
                       <img src="http://img.sxunt.com/uploads/image/20150105/1420428926.jpg" alt="攻略:如何才能拍出一张特别好看的自拍照？" title="攻略:如何才能拍出一张特别好看的自拍照？" />
                       </a>
                       </dt>
                       <dd><a href="/news/news-34-1.html" class="olive">[攻略]</a><span><a target="_blank" href="/news/newsPage-34-47-1.html">如何才能拍出一...</a></span><br />旅途当中没有小伙伴或者不想麻烦小伙伴的话，...</dd>
                     </dl>
                 </li>
                                 <li>
                     <dl>
                       <dt>
                       <a target="_blank" href="/news/newsPage-34-46-1.html">
                       <img src="http://img.sxunt.com/uploads/image/20150103/1420291144.jpg" alt="攻略:另一种角度之美 王建军航拍美国西部作品" title="攻略:另一种角度之美 王建军航拍美国西部作品" />
                       </a>
                       </dt>
                       <dd><a href="/news/news-34-1.html" class="olive">[攻略]</a><span><a target="_blank" href="/news/newsPage-34-46-1.html">另一种角度之美...</a></span><br />2014年3 月1日—3月 14 日，中国著名摄影家王...</dd>
                     </dl>
                 </li>
                                 <li>
                     <dl>
                       <dt>
                       <a target="_blank" href="/news/newsPage-31-45-1.html">
                       <img src="http://img.sxunt.com/uploads/image/20150103/1420298825.jpg" alt="器材:数量惊人 外网曝光2015年适马新镜列表" title="器材:数量惊人 外网曝光2015年适马新镜列表" />
                       </a>
                       </dt>
                       <dd><a href="/news/news-31-1.html" class="olive">[器材]</a><span><a target="_blank" href="/news/newsPage-31-45-1.html">数量惊人 外网曝...</a></span><br />2015年即将来临，已经有不少厂家已在暗自发力...</dd>
                     </dl>
                 </li>
                                 <li>
                     <dl>
                       <dt>
                       <a target="_blank" href="/news/newsPage-31-44-1.html">
                       <img src="http://img.sxunt.com/uploads/image/20150102/1420186080.jpg" alt="器材:新年礼物？外媒盘点奇异像钟的奇特相机" title="器材:新年礼物？外媒盘点奇异像钟的奇特相机" />
                       </a>
                       </dt>
                       <dd><a href="/news/news-31-1.html" class="olive">[器材]</a><span><a target="_blank" href="/news/newsPage-31-44-1.html">新年礼物？外媒...</a></span><br />新年将至，相信不少读者朋友都在为新的开始做...</dd>
                     </dl>
                 </li>
                                 <li>
                     <dl>
                       <dt>
                       <a target="_blank" href="/news/newsPage-31-43-1.html">
                       <img src="http://img.sxunt.com/uploads/image/20150102/1420187082.jpg" alt="器材:FE卡口新镜 福伦达40mm f/2.8头" title="器材:FE卡口新镜 福伦达40mm f/2.8头" />
                       </a>
                       </dt>
                       <dd><a href="/news/news-31-1.html" class="olive">[器材]</a><span><a target="_blank" href="/news/newsPage-31-43-1.html">FE卡口新镜 福...</a></span><br />福伦达HELIAR 40mm F2.8 VM新镜成为...</dd>
                     </dl>
                 </li>
                                 <li>
                     <dl>
                       <dt>
                       <a target="_blank" href="/news/newsPage-30-42-1.html">
                       <img src="http://img.sxunt.com/uploads/image/20150102/1420187173.jpg" alt="影讯:得色空间：拉黑、高山《无知流放》展讯" title="影讯:得色空间：拉黑、高山《无知流放》展讯" />
                       </a>
                       </dt>
                       <dd><a href="/news/news-30-1.html" class="olive">[影讯]</a><span><a target="_blank" href="/news/newsPage-30-42-1.html">得色空间：拉黑...</a></span><br />2014年下半年，拉黑和高山通过众筹的方式完成...</dd>
                     </dl>
                 </li>
                                 <li>
                     <dl>
                       <dt>
                       <a target="_blank" href="/news/newsPage-35-41-1.html">
                       <img src="http://img.sxunt.com/uploads/image/20141229/1419845897.jpg" alt="其它:一览全球最高大上的苹果店" title="其它:一览全球最高大上的苹果店" />
                       </a>
                       </dt>
                       <dd><a href="/news/news-35-1.html" class="olive">[其它]</a><span><a target="_blank" href="/news/newsPage-35-41-1.html">一览全球最高大...</a></span><br />手机固然重要，但是对于苹果来说，店 面是宣传...</dd>
                     </dl>
                 </li>
                                 <li>
                     <dl>
                       <dt>
                       <a target="_blank" href="/news/newsPage-30-40-1.html">
                       <img src="http://img.sxunt.com/uploads/image/20141229/1419843876.jpg" alt="影讯:一位女摄影师的复仇：偷我包后果很严重" title="影讯:一位女摄影师的复仇：偷我包后果很严重" />
                       </a>
                       </dt>
                       <dd><a href="/news/news-30-1.html" class="olive">[影讯]</a><span><a target="_blank" href="/news/newsPage-30-40-1.html">一位女摄影师的...</a></span><br />2011年，女摄影师Jessamyn Lovell发现她的...</dd>
                     </dl>
                 </li>
                  -->
                </ul>
         </div>
        </div>
        <div class="nextPrevBtn">
             <a href="javascript:void(0);" class="nextNow" id="nextNow"></a>
             <a href="javascript:void(0);" class="prevNow" id="prevNow"></a>
        </div>
     </div>
   </div>
   <!--now_Action-->
   <!--器材推荐_Action-->
    <div class="equipment">
        <a href="/news/?cid=31" class="mainTit tit2">器材推荐</a>
        <a href="/news/?cid=31" class="moreA">更多</a>
        <a href="javascript:void(0);" class="equipmentPrev" id="equipmentPrev"></a>
        <a href="javascript:void(0);" class="equipmentNext" id="equipmentNext"></a>
        <div class="equipmentC" id="equipmentC">
          <ul>
          <?php foreach($tj_equlpment_news as $k=>$v): ?>
            <li>
                  <h3>
                      <a target="_blank" href="/news/newsPage-31-<?= $v->id ?>-1.html">
                      <img src="<?= $v->qcPic ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="/news/newsPage-31-<?= $v->id ?>-1.html"><?= $v->title ?></a></p>
              </li>
          <?php endforeach; ?>
                <!--  
                        <li>
                  <h3>
                      <a target="_blank" href="/news/newsPage-31-49-1.html">
                      <img src="http://img.sxunt.com/uploads/image/20150106/1420559390.jpg" alt="影讯:可搭配X-T1 富士发布16-55mm f/2.8镜头" title="影讯:可搭配X-T1 富士发布16-55mm f/2.8镜头" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="/news/newsPage-31-49-1.html">可搭配X-T1 富士发布16-55mm f/2.8镜头</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="/news/newsPage-31-48-1.html">
                      <img src="http://img.sxunt.com/uploads/image/20150105/1420443161.jpg" alt="影讯:选好入门很重要 4000元热门单电单反推荐" title="影讯:选好入门很重要 4000元热门单电单反推荐" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="/news/newsPage-31-48-1.html">选好入门很重要 4000元热门单电单反推荐</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="/news/newsPage-31-44-1.html">
                      <img src="http://img.sxunt.com/uploads/image/20150102/1420180931.jpg" alt="影讯:新年礼物？外媒盘点奇异像钟的奇特相机" title="影讯:新年礼物？外媒盘点奇异像钟的奇特相机" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="/news/newsPage-31-44-1.html">新年礼物？外媒盘点奇异像钟的奇特相机</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="/news/newsPage-31-43-1.html">
                      <img src="http://img.sxunt.com/uploads/image/20150102/1420184792.jpg" alt="影讯:FE卡口新镜 福伦达40mm f/2.8头" title="影讯:FE卡口新镜 福伦达40mm f/2.8头" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="/news/newsPage-31-43-1.html">FE卡口新镜 福伦达40mm f/2.8头</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="/news/newsPage-31-39-1.html">
                      <img src="http://img.sxunt.com/uploads/image/20141229/1419842397.jpg" alt="影讯:国产骄傲 永诺/佳能50mm F1.8对比图赏" title="影讯:国产骄傲 永诺/佳能50mm F1.8对比图赏" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="/news/newsPage-31-39-1.html">国产骄傲 永诺/佳能50mm F1.8对比图赏</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="/news/newsPage-31-38-1.html">
                      <img src="http://img.sxunt.com/uploads/image/20141229/1419837440.jpg" alt="影讯:多项技术新升级 佳能EF 100-400 II" title="影讯:多项技术新升级 佳能EF 100-400 II" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="/news/newsPage-31-38-1.html">多项技术新升级 佳能EF 100-400 II</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="/news/newsPage-31-33-1.html">
                      <img src="http://img.sxunt.com/uploads/image/20141229/1419840507.jpg" alt="影讯:强力虚化 富士56mm F1.2 APD" title="影讯:强力虚化 富士56mm F1.2 APD" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="/news/newsPage-31-33-1.html">强力虚化 富士56mm F1.2 APD</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="/news/newsPage-31-32-1.html">
                      <img src="http://img.sxunt.com/uploads/image/20141229/1419839052.jpg" alt="影讯:另类大底DC 量产版徕卡D-LUX" title="影讯:另类大底DC 量产版徕卡D-LUX" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="/news/newsPage-31-32-1.html">另类大底DC 量产版徕卡D-LUX</a></p>
              </li>
           -->   
          </ul>
        </div>
    </div>
   <!--器材推荐_End-->
   <!--摄影教程、摄影技巧_Action-->
    <div class="sy">
        <div class="syL">
            <a href="/course/" class="mainTit tit3">摄影教程</a>
            <a href="/course/" class="moreA">更多</a>
          <a href="/course/approach/" class="syBtn no1">入门篇</a>
          <a href="/course/beginner/" class="syBtn no2">初级篇</a>
          <a href="/course/intermediate/" class="syBtn no3">中级篇</a>
          <a href="/course/lens/" class="syBtn no4">镜头篇</a>
          <a href="/course/tips/" class="syBtn no5">拍摄篇</a>
              <ul class="No1Ul">
                 <li><a target="_blank" href="/course/approach/approach01.html">数码单反相机的魅力</a></li>
                 <li><a target="_blank" href="/course/approach/approach02.html">了解相机各部分</a></li>
                 <li><a target="_blank" href="/course/approach/approach03.html">拍摄之前的准备工作</a></li>
                 <li><a target="_blank" href="/course/approach/approach04.html">首先来尝试进行拍摄</a></li>
                 <li><a target="_blank" href="/course/approach/approach05.html">拍摄图像的回放和删除</a></li>
                 <li><a target="_blank" href="/course/approach/approach06.html">相机的持机方法</a></li>
             </ul>
             <ul class="No2Ul">
                 <li><a target="_blank" href="/course/beginner/beginner05.html">拍好人物照</a></li>
                 <li><a target="_blank" href="/course/beginner/beginner06.html">使风景显得更加鲜明</a></li>
                 <li><a target="_blank" href="/course/beginner/beginner07.html">放大拍摄微小物体</a></li>
                 <li><a target="_blank" href="/course/beginner/beginner08.html">拍摄高速运动物体</a></li>
                 <li><a target="_blank" href="/course/beginner/beginner09.html">不使用闪光灯进行拍摄</a></li>
                 <li><a target="_blank" href="/course/beginner/beginner10.html">不用三脚架也能拍出美丽夜景</a></li>
             </ul>
             <ul class="No3Ul">
                 <li><a target="_blank" href="/course/intermediate/intermediate06.html">取景器拍摄</a></li>
                 <li><a target="_blank" href="/course/intermediate/intermediate07.html">实时显示拍摄</a></li>
                 <li><a target="_blank" href="/course/intermediate/intermediate08.html">了解白平衡</a></li>
                 <li><a target="_blank" href="/course/intermediate/intermediate09.html">灵活运用曝光补偿</a></li>
                 <li><a target="_blank" href="/course/intermediate/intermediate10.html">使用闪光灯进行拍摄</a></li>
                 <li><a target="_blank" href="/course/intermediate/intermediate11.html">照片风格</a></li>
             </ul>
            <ul class="No4Ul">
                 <li><a target="_blank" href="/course/lens/lens05.html">标准变焦镜头的特征</a></li>
                 <li><a target="_blank" href="/course/lens/lens06.html">远摄变焦镜头的特征</a></li>
                 <li><a target="_blank" href="/course/lens/lens07.html">定焦镜头的特征</a></li>
                 <li><a target="_blank" href="/course/lens/lens08.html">微距镜头的特征</a></li>
                 <li><a target="_blank" href="/course/lens/lens09.html">佳能镜头技术</a></li>
                 <li><a target="_blank" href="/skill_page-113.html">清洁镜头</a></li>
             </ul>
             <ul class="No5Ul">
                 <li><a target="_blank" href="/course/tips/tips06.html">理解并控制抖动</a></li>
                 <li><a target="_blank" href="/skill_page-126.html">人像摄影技巧</a></li>
                 <li><a target="_blank" href="/skill_page-144.html">冷暖光源的运用</a></li>
                 <li><a target="_blank" href="/skill_page-169.html">微距摄影入门指南</a></li>
                 <li><a target="_blank" href="/skill_page-185.html">快速对焦技巧</a></li>
                 <li><a target="_blank" href="/skill_page-203.html">七种偷拍技巧</a></li>
             </ul>
             <dl class="dl_X No2Dl">
           <dd><a href="/course/beginner/beginner01.html" target="_blank"><img src="/new_static/images/jc1.png" width="130" height="60" /></a><span></span><p><a href="/course/beginner/beginner01.html" target="_blank">单反相机的结构原理</a></p></dd>
           <dd><a href="/course/beginner/beginner02.html" target="_blank"><img src="/new_static/images/jc2.png" width="130" height="60" /></a><span></span><p><a href="/course/beginner/beginner02.html" target="_blank">镜头的结构原理</a></p></dd>
           <dd><a href="/course/beginner/beginner03.html" target="_blank"><img src="/new_static/images/jc3.jpg" width="130" height="60" /></a><span></span><p><a href="/course/beginner/beginner03.html" target="_blank">了解构图的基本知识</a></p></dd>
           <dd><a href="/course/beginner/beginner04.html" target="_blank"><img src="/new_static/images/jc4.jpg" width="130" height="60" /></a><span></span><p><a href="/course/beginner/beginner05.html" target="_blank">根据拍摄场景自动设置</a></p></dd>
             </dl>
             <dl class="dl_Y No3Dl">
           <dd class="firstDD"><a href="/course/intermediate/intermediate01.html"><img src="/new_static/images/zj1.jpg" width="130" height="60" /></a><span></span><p><a href="/course/intermediate/intermediate01.html" target="_blank">曝光的原理</a></p></dd>
           <dd><a href="/course/intermediate/intermediate02.html"><img src="/new_static/images/zj2.jpg" width="130" height="60" /></a><span></span><p><a href="/course/intermediate/intermediate02.html" target="_blank">自动曝光模式</a></p></dd>
           <dd><a href="/course/intermediate/intermediate03.html"><img src="/new_static/images/zj3.jpg" width="130" height="60" /></a><span></span><p><a href="/course/intermediate/intermediate03.html" target="_blank">理解光圈</a></p></dd>
           <dd><a href="/course/intermediate/intermediate04.html"><img src="/new_static/images/zj4.jpg" width="130" height="60" /></a><span></span><p><a href="/course/intermediate/intermediate04.html" target="_blank">掌握快门速度</a></p></dd>
           <dd><a href="/course/intermediate/intermediate05.html"><img src="/new_static/images/zj5.jpg" width="130" height="60" /></a><span></span><p><a href="/course/intermediate/intermediate05.html" target="_blank">理解ISO感光度</a></p></dd>
             </dl>
             <dl class="dl_X No4Dl">
           <dd><a target="_blank" href="/course/lens/lens01.html"><img src="/new_static/images/jt1.jpg" width="130" height="60" /></a><span></span><p><a href="/course/lens/lens01.html" target="_blank">焦距与视角和纵深</a></p></dd>
           <dd><a target="_blank" href="/course/lens/lens02.html"><img src="/new_static/images/jt2.jpg" width="130" height="60" /></a><span></span><p><a href="/course/lens/lens02.html" target="_blank">焦距带来的图像变形</a></p></dd>
           <dd><a target="_blank" href="/course/lens/lens03.html"><img src="/new_static/images/jt3.jpg" width="130" height="60" /></a><span></span><p><a href="/course/lens/lens03.html" target="_blank">镜头名解读</a></p></dd>
           <dd><a target="_blank" href="/course/lens/lens04.html"><img src="/new_static/images/jt4.jpg" width="130" height="60" /></a><span></span><p><a href="/course/lens/lens04.html" target="_blank">广角变焦镜头的特征</a></p></dd>
             </dl>
             <dl class="dl_Y No5Dl">
           <dd class="firstDD"><a target="_blank" href="/course/tips/tips01.html"><img src="/new_static/images/ps1.jpg" width="130" height="60" /></a><span></span><p><a href="/course/tips/tips01.html" target="_blank">风光拍摄技巧</a></p></dd>
           <dd><a target="_blank" href="/course/tips/tips02.html"><img src="/new_static/images/ps2.jpg" width="130" height="60" /></a><span></span><p><a href="/course/tips/tips02.html" target="_blank">动物拍摄技巧</a></p></dd>
           <dd><a target="_blank" href="/course/tips/tips03.html"><img src="/new_static/images/ps3.jpg" width="130" height="60" /></a><span></span><p><a href="/course/tips/tips03.html" target="_blank">街头抓拍技巧</a></p></dd>
           <dd><a target="_blank" href="/course/tips/tips04.html"><img src="/new_static/images/ps4.jpg" width="130" height="60" /></a><span></span><p><a href="/course/tips/tips04.html" target="_blank">花卉微距拍摄技巧</a></p></dd>
           <dd><a target="_blank" href="/course/tips/tips05.html"><img src="/new_static/images/ps5.jpg" width="130" height="60" /></a><span></span><p><a href="/course/tips/tips05.html" target="_blank">夜景拍摄技巧</a></p></dd>
             </dl>
             
        </div>
            <div class="nowR2">
            <div class="nowRC2">
             <a href="/skill.php?subNav=3" class="mainTit tit4">摄影技巧</a>
             <a href="/skill.php?subNav=3" class="moreA">更多</a>
             <div class="nowRMain2" id="nowRMain2">
                 <ul>
                 <?php foreach($skill as $k=>$v): ?>
                     <li>
                         <dl>
                             <dt>
                                 <a target="_blank" href="skill_page-<?= $v->id ?>.html">
                                    <img src="<?= $v->pic ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>" />
                                 </a>
                             </dt>
                             <dd><br /><a class="olive" href="skill_page-<?= $v->id ?>.html"><?= Html::truncate_utf8_string($v->title,8,false)?></a></dd>
                         </dl>
                     </li>
                 <?php endforeach; ?>
                 <!-- 
                                         <li>
                         <dl>
                           <dt>
                       <a target="_blank" href="skill_page-203.html">
                <img src="http://img.sxunt.com/uploadimg/1419344650.jpg" alt="摄影技巧:七种偷拍技巧" title="摄影技巧:七种偷拍技巧" />
                      </a>
                      </dt>
                           <dd><br /><a class="olive" href="skill_page-203.html">七种偷拍技巧</a></dd>
                         </dl>
                     </li>
                                         <li>
                         <dl>
                           <dt>
                       <a target="_blank" href="skill_page-193.html">
                <img src="http://img.sxunt.com/uploadimg/1419344563.jpg" alt="摄影技巧:在家玩商业摄影" title="摄影技巧:在家玩商业摄影" />
                      </a>
                      </dt>
                           <dd><br /><a class="olive" href="skill_page-193.html">在家玩商业摄影</a></dd>
                         </dl>
                     </li>
                                         <li>
                         <dl>
                           <dt>
                       <a target="_blank" href="skill_page-192.html">
                <img src="http://img.sxunt.com/uploadimg/1419344488.jpg" alt="摄影技巧:商业拍摄实录" title="摄影技巧:商业拍摄实录" />
                      </a>
                      </dt>
                           <dd><br /><a class="olive" href="skill_page-192.html">商业拍摄实录</a></dd>
                         </dl>
                     </li>
                                         <li>
                         <dl>
                           <dt>
                       <a target="_blank" href="skill_page-178.html">
                <img src="http://img.sxunt.com/uploadimg/1419344306.jpg" alt="摄影技巧:霓虹灯拍摄" title="摄影技巧:霓虹灯拍摄" />
                      </a>
                      </dt>
                           <dd><br /><a class="olive" href="skill_page-178.html">霓虹灯拍摄</a></dd>
                         </dl>
                     </li>
                                         <li>
                         <dl>
                           <dt>
                       <a target="_blank" href="skill_page-169.html">
                <img src="http://img.sxunt.com/uploadimg/1419344212.jpg" alt="摄影技巧:微距摄影入门指南" title="摄影技巧:微距摄影入门指南" />
                      </a>
                      </dt>
                           <dd><br /><a class="olive" href="skill_page-169.html">微距摄影入门指南</a></dd>
                         </dl>
                     </li>
                                         <li>
                         <dl>
                           <dt>
                       <a target="_blank" href="skill_page-166.html">
                <img src="http://img.sxunt.com/uploadimg/1419344071.jpg" alt="摄影技巧:高手谈微距摄影" title="摄影技巧:高手谈微距摄影" />
                      </a>
                      </dt>
                           <dd><br /><a class="olive" href="skill_page-166.html">高手谈微距摄影</a></dd>
                         </dl>
                     </li>
                                         <li>
                         <dl>
                           <dt>
                       <a target="_blank" href="skill_page-162.html">
                <img src="http://img.sxunt.com/uploadimg/1419343930.jpg" alt="摄影技巧:如何拍雨景" title="摄影技巧:如何拍雨景" />
                      </a>
                      </dt>
                           <dd><br /><a class="olive" href="skill_page-162.html">如何拍雨景</a></dd>
                         </dl>
                     </li>
                                         <li>
                         <dl>
                           <dt>
                       <a target="_blank" href="skill_page-159.html">
                <img src="http://img.sxunt.com/uploadimg/1419343843.jpg" alt="摄影技巧:城市风光摄影" title="摄影技巧:城市风光摄影" />
                      </a>
                      </dt>
                           <dd><br /><a class="olive" href="skill_page-159.html">城市风光摄影</a></dd>
                         </dl>
                     </li>
                                         <li>
                         <dl>
                           <dt>
                       <a target="_blank" href="skill_page-158.html">
                <img src="http://img.sxunt.com/uploadimg/1419343750.jpg" alt="摄影技巧:田园风光摄影" title="摄影技巧:田园风光摄影" />
                      </a>
                      </dt>
                           <dd><br /><a class="olive" href="skill_page-158.html">田园风光摄影</a></dd>
                         </dl>
                     </li>
                                         <li>
                         <dl>
                           <dt>
                       <a target="_blank" href="skill_page-146.html">
                <img src="http://img.sxunt.com/uploadimg/1419343566.jpg" alt="摄影技巧:侧逆光的运用" title="摄影技巧:侧逆光的运用" />
                      </a>
                      </dt>
                           <dd><br /><a class="olive" href="skill_page-146.html">侧逆光的运用</a></dd>
                         </dl>
                     </li>
                                         <li>
                         <dl>
                           <dt>
                       <a target="_blank" href="skill_page-139.html">
                <img src="http://img.sxunt.com/uploadimg/1419337723.jpg" alt="摄影技巧:美女香车摄影" title="摄影技巧:美女香车摄影" />
                      </a>
                      </dt>
                           <dd><br /><a class="olive" href="skill_page-139.html">美女香车摄影</a></dd>
                         </dl>
                     </li>
                                         <li>
                         <dl>
                           <dt>
                       <a target="_blank" href="skill_page-122.html">
                <img src="http://img.sxunt.com/uploadimg/1419343383.jpg" alt="摄影技巧:人像摄影构图" title="摄影技巧:人像摄影构图" />
                      </a>
                      </dt>
                           <dd><br /><a class="olive" href="skill_page-122.html">人像摄影构图</a></dd>
                         </dl>
                     </li>
                      -->
                 </ul>
             </div>
            </div>
            <div class="nextPrevBtn">
                 <a href="javascript:void(0);" class="nextNow" id="nextNow2"></a>
                 <a href="javascript:void(0);" class="prevNow" id="prevNow2"></a>
            </div>
            </div>
    </div>
   <!--摄影教程、摄影技巧_End-->
   <!--后期处理_Action-->
    <div class="equipment">
      <a href="/skill.php?subNav=4" class="mainTit tit5">后期处理</a>
        <a href="/skill.php?subNav=4" class="moreA">更多</a>
      <a href="javascript:void(0);" class="equipmentPrev" id="equipmentPrev2"></a>
      <a href="javascript:void(0);" class="equipmentNext" id="equipmentNext2"></a>
    <div class="equipmentC" id="equipmentC2">
          <ul>
          <?php foreach($houqi as $k=>$v): ?>
              <li>
                  <h3>
                      <a target="_blank" href="skill_page-<?= $v->id ?>.html">
                      <img src="<?= $v->pic ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="skill_page-<?= $v->id ?>.html"><?= $v->title ?></a></p>
              </li>
          <?php endforeach; ?>
               <!--             
               <li>
                  <h3>
                      <a target="_blank" href="skill_page-276.html">
                      <img src="http://img.sxunt.com/uploadimg/1419345190.jpg" alt="后期处理:半透明细线边框" title="后期处理:半透明细线边框" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="skill_page-276.html">半透明细线边框</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="skill_page-273.html">
                      <img src="http://img.sxunt.com/uploadimg/1419345114.jpg" alt="后期处理:修复破损照片" title="后期处理:修复破损照片" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="skill_page-273.html">修复破损照片</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="skill_page-245.html">
                      <img src="http://img.sxunt.com/uploadimg/1419339184.jpg" alt="后期处理:荷花水墨画" title="后期处理:荷花水墨画" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="skill_page-245.html">荷花水墨画</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="skill_page-230.html">
                      <img src="http://img.sxunt.com/uploadimg/1419339103.jpg" alt="后期处理:白昼变黑夜" title="后期处理:白昼变黑夜" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="skill_page-230.html">白昼变黑夜</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="skill_page-228.html">
                      <img src="http://img.sxunt.com/uploadimg/1419338990.jpg" alt="后期处理:春景变秋景" title="后期处理:春景变秋景" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="skill_page-228.html">春景变秋景</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="skill_page-222.html">
                      <img src="http://img.sxunt.com/uploadimg/1419339660.jpg" alt="后期处理:反转片效果" title="后期处理:反转片效果" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="skill_page-222.html">反转片效果</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="skill_page-220.html">
                      <img src="http://img.sxunt.com/uploadimg/1419339424.jpg" alt="后期处理:艺术化处理" title="后期处理:艺术化处理" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="skill_page-220.html">艺术化处理</a></p>
              </li>
                           <li>
                  <h3>
                      <a target="_blank" href="skill_page-213.html">
                      <img src="http://img.sxunt.com/uploadimg/1419338035.jpg" alt="后期处理:唯美婚纱效果" title="后期处理:唯美婚纱效果" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="skill_page-213.html">唯美婚纱效果</a></p>
              </li>
            -->  
          </ul>
        </div>
    </div>
   <!--后期处理_End-->
   <!--灵感渲染_Action-->
   <div class="apply">
       <a href="/edify/" class="mainTit tit6">灵感渲染</a>
       <a href="/edify/" class="moreA">更多</a>
       <ul>
       
            <li class='marginLeft'>
                <h2><a href="/edify/?source=1" class="xr1">人物系</a></h2>
                <p><span>[美女]</span><span>[帅哥]</span><span>[儿童]</span><span>[民族]</span><br /><span>[婚庆]</span><span>[文艺]</span></p>
            </li>
            <?php foreach($edify[1] as $k=>$v): ?>
              <li <?php echo $k==4?"class='marginLeft'":'';?>>
               <img src="<?= $v->picurl ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>"/>
               <a class="xrBg xrBg2" href="/edify/edifyPage-40-<?= $v->id ?>.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-<?= $v->id ?>.html" target="_blank"><?= $v->title ?></a>
              </li>
            <?php endforeach; ?>
          <!-- 
                        <li >
               <img src="http://img.sxunt.com/uploads/image/20150102/1420176126.jpg" alt="金色奇缘" title="金色奇缘"/>
               <a class="xrBg xrBg2" href="/edify/edifyPage-40-35.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-35.html" target="_blank">金色奇缘</a>
            </li>
                         <li >
               <img src="http://img.sxunt.com/uploads/image/20150102/1420177100.jpg" alt="等待着你" title="等待着你"/>
               <a class="xrBg xrBg2" href="/edify/edifyPage-40-34.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-34.html" target="_blank">等待着你</a>
            </li>
                         <li >
               <img src="http://img.sxunt.com/uploads/image/20141230/1419910744.jpg" alt="追风的瑞恩" title="追风的瑞恩"/>
               <a class="xrBg xrBg2" href="/edify/edifyPage-40-22.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-22.html" target="_blank">追风的瑞恩</a>
            </li>
                         <li >
               <img src="http://img.sxunt.com/uploads/image/20141203/1417613342.jpg" alt="唯美写真小清新" title="唯美写真小清新"/>
               <a class="xrBg xrBg2" href="/edify/edifyPage-40-16.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-16.html" target="_blank">唯美写真小清新</a>
            </li>
                         <li class='marginLeft'>
               <img src="http://img.sxunt.com/uploads/image/20141230/1419909120.jpg" alt="少女心病" title="少女心病"/>
               <a class="xrBg xrBg2" href="/edify/edifyPage-40-12.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-12.html" target="_blank">少女心病</a>
            </li>
             -->
                         
            <li >
               <h2><a href="/edify/?source=2" class="xr2">风光生态</a></h2>
               <p><span>[夜景]</span><span>[山水]</span><span>[夕阳]</span><span>[日落]</span><br /><span>[花鸟鱼虫]</span><span>[动物]</span><span>[天气]</span><span>[植物]</span></p>
            </li>
            <?php foreach($edify[2] as $k=>$v): ?>
              <li <?php echo $k==3?"class='marginLeft'":'';?>>
               <img src="<?= $v->picurl ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>"/>
               <a class="xrBg xrBg1" href="/edify/edifyPage-40-<?= $v->id ?>.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-<?= $v->id ?>.html" target="_blank"><?= $v->title ?></a>
              </li>
            <?php endforeach; ?>
            <!-- 
                        <li >
               <img src="http://img.sxunt.com/uploads/image/20141230/1419908008.jpg" alt="三股泉村" title="三股泉村"/>
               <a class="xrBg xrBg1" href="/edify/edifyPage-40-26.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-26.html" target="_blank">三股泉村</a>
            </li>
                        <li >
               <img src="http://img.sxunt.com/uploads/image/20141230/1419910672.jpg" alt="行摄洱海" title="行摄洱海"/>
               <a class="xrBg xrBg1" href="/edify/edifyPage-40-25.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-25.html" target="_blank">行摄洱海</a>
            </li>
                        <li >
               <img src="http://img.sxunt.com/uploads/image/20141204/1417705005.jpg" alt="晚秋小品" title="晚秋小品"/>
               <a class="xrBg xrBg1" href="/edify/edifyPage-40-24.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-24.html" target="_blank">晚秋小品</a>
            </li>
                        <li class='marginLeft'>
               <img src="http://img.sxunt.com/uploads/image/20141230/1419911579.jpg" alt="红蘑菇" title="红蘑菇"/>
               <a class="xrBg xrBg1" href="/edify/edifyPage-40-20.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-20.html" target="_blank">红蘑菇</a>
            </li>
                        <li >
               <img src="http://img.sxunt.com/uploads/image/20141230/1419913261.jpg" alt="醉美在伊犁" title="醉美在伊犁"/>
               <a class="xrBg xrBg1" href="/edify/edifyPage-40-17.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-17.html" target="_blank">醉美在伊犁</a>
            </li>
             -->
                        
            <li >
              <h2><a href="/edify/?source=3" class="xr3">纪实抓拍</a></h2>
              <p><span>[人文]</span><span>[街头]</span><span>[展会]</span><span>[文艺]</span><br /><span>[社会]</span><span>[艺术]</span><span>[广告]</span></p>
            </li>
            <?php foreach($edify[3] as $k=>$v): ?>
              <li <?php echo $k==2?"class='marginLeft'":'';?>>
               <img src="<?= $v->picurl ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>"/>
               <a class="xrBg xrBg3" href="/edify/edifyPage-40-<?= $v->id ?>.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-<?= $v->id ?>.html" target="_blank"><?= $v->title ?></a>
              </li>
            <?php endforeach; ?>
            <!-- 
                        <li >
               <img src="http://img.sxunt.com/uploads/image/20150103/1420294944.jpg" alt="泰北玫瑰" title="泰北玫瑰"/>
               <a class="xrBg xrBg3" href="/edify/edifyPage-40-36.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-36.html" target="_blank">泰北玫瑰</a>
            </li>
                        <li >
               <img src="http://img.sxunt.com/uploads/image/20141229/1419859090.jpg" alt="大凉山" title="大凉山"/>
               <a class="xrBg xrBg3" href="/edify/edifyPage-40-27.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-27.html" target="_blank">大凉山</a>
            </li>
                        <li class='marginLeft'>
               <img src="http://img.sxunt.com/uploads/image/20141204/1417702171.jpg" alt="老街" title="老街"/>
               <a class="xrBg xrBg3" href="/edify/edifyPage-40-19.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-19.html" target="_blank">老街</a>
            </li>
             -->
                        
            <li >
               <h2><a href="/edify/?source=5" class="xr4">生活记录</a></h2>
               <p><span>[时尚]</span><span>[美食]</span><span>[收藏]</span><span>[城市]</span><br /><span>[电影]</span><span>[运动]</span><span>[交通]</span><span>[家居]</span></p>
            </li>
            <?php foreach($edify[4] as $k=>$v): ?>
              <li>
               <img src="<?= $v->picurl ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>"/>
               <a class="xrBg xrBg4" href="/edify/edifyPage-40-<?= $v->id ?>.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-<?= $v->id ?>.html" target="_blank"><?= $v->title ?></a>
              </li>
            <?php endforeach; ?>
            <!-- 
                        <li>
               <img src="http://img.sxunt.com/uploads/image/20141229/1419866832.jpg" alt=" A7是个好相机 " title=" A7是个好相机 "/>
               <a class="xrBg xrBg4" href="/edify/edifyPage-40-29.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-29.html" target="_blank"> A7是个好相机 </a>
            </li>
                        <li>
               <img src="http://img.sxunt.com/uploads/image/20141229/1419865165.jpg" alt="感受秋天的味道，武康路扫街" title="感受秋天的味道，武康路扫街"/>
               <a class="xrBg xrBg4" href="/edify/edifyPage-40-28.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-28.html" target="_blank">感受秋天的味道，武康路扫街</a>
            </li>
                        <li>
               <img src="http://img.sxunt.com/uploads/image/20141230/1419907756.jpg" alt="大岗老屋" title="大岗老屋"/>
               <a class="xrBg xrBg4" href="/edify/edifyPage-40-21.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-21.html" target="_blank">大岗老屋</a>
            </li>
             -->
                        
            <li class='marginLeft'>
              <h2><a href="/?source=7" class="xr5">其它</a></h2>
              <p><span>[商业]</span><span>[科技]</span><span>[旅游]</span><br /><span>...</span></p>
            </li>
            <?php foreach($edify[5] as $k=>$v): ?>
              <li>
               <img src="<?= $v->picurl ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>"/>
               <a class="xrBg xrBg2" href="/edify/edifyPage-40-<?= $v->id ?>.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-<?= $v->id ?>.html" target="_blank"><?= $v->title ?></a>
              </li>
            <?php endforeach; ?>
            <!-- 
                        <li>
               <img src="http://img.sxunt.com/uploads/image/20141229/1419864037.jpg" alt="一组浙江湖州南浔的记忆" title="一组浙江湖州南浔的记忆"/>
               <a class="xrBg xrBg1" href="/edify/edifyPage-40-32.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-32.html" target="_blank">一组浙江湖州南浔的记忆</a>
            </li>
                        <li>
               <img src="http://img.sxunt.com/uploads/image/20141229/1419868482.jpg" alt="别问我是谁" title="别问我是谁"/>
               <a class="xrBg xrBg2" href="/edify/edifyPage-40-31.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-31.html" target="_blank">别问我是谁</a>
            </li>
                        <li>
               <img src="http://img.sxunt.com/uploads/image/20141229/1419860261.jpg" alt="《成都车展2014》－－－－－－" title="《成都车展2014》－－－－－－"/>
               <a class="xrBg xrBg3" href="/edify/edifyPage-40-30.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-30.html" target="_blank">《成都车展2014》－－－－－－</a>
            </li>
                        <li>
               <img src="http://img.sxunt.com/uploads/image/20141230/1419908045.jpg" alt="唯美婚纱公主妖颜媚色写真" title="唯美婚纱公主妖颜媚色写真"/>
               <a class="xrBg xrBg4" href="/edify/edifyPage-40-23.html" target="_blank"></a>
               <a class="xrText"  href="/edify/edifyPage-40-23.html" target="_blank">唯美婚纱公主妖颜媚色写真</a>
            </li>
            -->           
       </ul>
   </div>
   <!--灵感渲染_End-->
<script type="text/javascript" src="/new_static/js/yahoo.js"></script>