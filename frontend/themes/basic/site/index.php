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
            <li <?php echo $k==0?'class="firstLi"':'';?>><a target="_blank" href="/article/view?id=<?= $v->id ?>"><?= $v->title ?></a></li>
            <?php endforeach; ?>
           </ul>   
           </div>
           <h4 class="yx">影讯</h4>
               <dl>
                 <dt>
                    <a target="_blank" href="/article/view?id=<?= $consult_news[0]->id ?>"><img src="<?= $consult_news[0]->cover ?>" alt="<?= $consult_news[0]->title ?>" title="<?= $consult_news[0]->title ?>" /></a>
                </dt>
                <dd>
                <ul>
                <?php foreach($consult_news as $k=>$v): ?>
                <li><a target="_blank" href="/article/view?id=<?= $v->id ?>"><?= $v->title ?></a></li>
                <?php endforeach; ?>
                </ul>
                 </dd>
               </dl>
           <h4 class="qc">器材</h4>
              <dl class="floatR">
                 <dt>
                 <a target="_blank" href="/article/view?id=<?= $equlpment_news[0]->id ?>"><img src="<?= $equlpment_news[0]->cover ?>" alt="<?= $equlpment_news[0]->title ?>" title="<?= $equlpment_news[0]->title ?>" /></a>
                  </dt>
                 <dd>
                    <ul>
		            <?php foreach($equlpment_news as $k=>$v): ?>
                    <li><a target="_blank" href="/article/view?id=<?= $v->id ?>"><?= $v->title ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                 </dd>
               </dl>
       <h4 class="qt">其它</h4>
           <dl>
             <dt>
             <a target="_blank" href="/article/view?id=<?= $other_news[0]->id ?>"><img src="<?= $other_news[0]->cover ?>" alt="<?= $other_news[0]->title ?>" title="<?= $other_news[0]->title ?>" /></a>
             </dt>
           <dd>
            <ul>
                <?php foreach($other_news as $k=>$v): ?>
                    <li><a target="_blank" href="/article/view?id=<?= $v->id ?>"><?= $v->title ?></a></li>
                <?php endforeach; ?>
             </ul>
           </dd>
         </dl>
     </div>
     <div class="nowR">
       <div class="nowRC">
         <a href="/article/" class="mainTit tit1">最新资讯</a>
         <a href="/article/" class="moreA">更多</a>
         <div class="nowRMain" id="nowRMain">
             <ul>
             <?php foreach($now_news as $k=>$v): ?>
              <li>
                 <dl>
                   <dt>
                   <a target="_blank" href="/article/view?id=<?= $v->id ?>">
                   <img src="<?= $v->cover ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>" />
                   </a>
                   </dt>
                   <dd><a href="/article/?cate=<?= $v->category_id ?>" class="olive">[<?= $v->category ?>]</a><span><a target="_blank" href="/article/view?id=<?= $v->id ?>"><?= Html::truncate_utf8_string($v->title,8,false)?></a></span><br /><?= Html::truncate_utf8_string($v->desc,22)?></dd>
                 </dl>
             </li>
             <?php endforeach; ?>
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
        <a href="/article/?cate=2" class="mainTit tit2">器材推荐</a>
        <a href="/article/?cate=2" class="moreA">更多</a>
        <a href="javascript:void(0);" class="equipmentPrev" id="equipmentPrev"></a>
        <a href="javascript:void(0);" class="equipmentNext" id="equipmentNext"></a>
        <div class="equipmentC" id="equipmentC">
          <ul>
          <?php foreach($tj_equlpment_news as $k=>$v): ?>
            <li>
                  <h3>
                      <a target="_blank" href="/article/view?id=<?= $v->id ?>">
                      <img src="<?= $v->qcPic ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="/article/view?id=<?= $v->id ?>"><?= $v->title ?></a></p>
              </li>
          <?php endforeach; ?>
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
                 <li><a target="_blank" href="/course/approach01">数码单反相机的魅力</a></li>
                 <li><a target="_blank" href="/course/approach02">了解相机各部分</a></li>
                 <li><a target="_blank" href="/course/approach03">拍摄之前的准备工作</a></li>
                 <li><a target="_blank" href="/course/approach04">首先来尝试进行拍摄</a></li>
                 <li><a target="_blank" href="/course/approach05">拍摄图像的回放和删除</a></li>
                 <li><a target="_blank" href="/course/approach06">相机的持机方法</a></li>
             </ul>
             <ul class="No2Ul">
                 <li><a target="_blank" href="/course/beginner05">拍好人物照</a></li>
                 <li><a target="_blank" href="/course/beginner06">使风景显得更加鲜明</a></li>
                 <li><a target="_blank" href="/course/beginner07">放大拍摄微小物体</a></li>
                 <li><a target="_blank" href="/course/beginner08">拍摄高速运动物体</a></li>
                 <li><a target="_blank" href="/course/beginner09">不使用闪光灯进行拍摄</a></li>
                 <li><a target="_blank" href="/course/beginner10">不用三脚架也能拍出美丽夜景</a></li>
             </ul>
             <ul class="No3Ul">
                 <li><a target="_blank" href="/course/intermediate06">取景器拍摄</a></li>
                 <li><a target="_blank" href="/course/intermediate07">实时显示拍摄</a></li>
                 <li><a target="_blank" href="/course/intermediate08">了解白平衡</a></li>
                 <li><a target="_blank" href="/course/intermediate09">灵活运用曝光补偿</a></li>
                 <li><a target="_blank" href="/course/intermediate10">使用闪光灯进行拍摄</a></li>
                 <li><a target="_blank" href="/course/intermediate11">照片风格</a></li>
             </ul>
            <ul class="No4Ul">
                 <li><a target="_blank" href="/course/lens05">标准变焦镜头的特征</a></li>
                 <li><a target="_blank" href="/course/lens06">远摄变焦镜头的特征</a></li>
                 <li><a target="_blank" href="/course/lens07">定焦镜头的特征</a></li>
                 <li><a target="_blank" href="/course/lens08">微距镜头的特征</a></li>
                 <li><a target="_blank" href="/course/lens09">佳能镜头技术</a></li>
                 <li><a target="_blank" href="/skill/view?id=113">清洁镜头</a></li>
             </ul>
             <ul class="No5Ul">
                 <li><a target="_blank" href="/course/tips06">理解并控制抖动</a></li>
                 <li><a target="_blank" href="/skill/view?id=126">人像摄影技巧</a></li>
                 <li><a target="_blank" href="/skill/view?id=144">冷暖光源的运用</a></li>
                 <li><a target="_blank" href="/skill/view?id=169">微距摄影入门指南</a></li>
                 <li><a target="_blank" href="/skill/view?id=185">快速对焦技巧</a></li>
                 <li><a target="_blank" href="/skill/view?id=203">七种偷拍技巧</a></li>
             </ul>
             <dl class="dl_X No2Dl">
           <dd><a href="/course/beginner01" target="_blank"><img src="/new_static/images/jc1.png" width="130" height="60" /></a><span></span><p><a href="/course/beginner01" target="_blank">单反相机的结构原理</a></p></dd>
           <dd><a href="/course/beginner02" target="_blank"><img src="/new_static/images/jc2.png" width="130" height="60" /></a><span></span><p><a href="/course/beginner02" target="_blank">镜头的结构原理</a></p></dd>
           <dd><a href="/course/beginner03" target="_blank"><img src="/new_static/images/jc3.jpg" width="130" height="60" /></a><span></span><p><a href="/course/beginner03" target="_blank">了解构图的基本知识</a></p></dd>
           <dd><a href="/course/beginner04" target="_blank"><img src="/new_static/images/jc4.jpg" width="130" height="60" /></a><span></span><p><a href="/course/beginner05" target="_blank">根据拍摄场景自动设置</a></p></dd>
             </dl>
             <dl class="dl_Y No3Dl">
           <dd class="firstDD"><a href="/course/intermediate01"><img src="/new_static/images/zj1.jpg" width="130" height="60" /></a><span></span><p><a href="/course/intermediate01" target="_blank">曝光的原理</a></p></dd>
           <dd><a href="/course/intermediate02"><img src="/new_static/images/zj2.jpg" width="130" height="60" /></a><span></span><p><a href="/course/intermediate02" target="_blank">自动曝光模式</a></p></dd>
           <dd><a href="/course/intermediate03"><img src="/new_static/images/zj3.jpg" width="130" height="60" /></a><span></span><p><a href="/course/intermediate03" target="_blank">理解光圈</a></p></dd>
           <dd><a href="/course/intermediate04"><img src="/new_static/images/zj4.jpg" width="130" height="60" /></a><span></span><p><a href="/course/intermediate04" target="_blank">掌握快门速度</a></p></dd>
           <dd><a href="/course/intermediate05"><img src="/new_static/images/zj5.jpg" width="130" height="60" /></a><span></span><p><a href="/course/intermediate05" target="_blank">理解ISO感光度</a></p></dd>
             </dl>
             <dl class="dl_X No4Dl">
           <dd><a target="_blank" href="/course/lens01"><img src="/new_static/images/jt1.jpg" width="130" height="60" /></a><span></span><p><a href="/course/lens01" target="_blank">焦距与视角和纵深</a></p></dd>
           <dd><a target="_blank" href="/course/lens02"><img src="/new_static/images/jt2.jpg" width="130" height="60" /></a><span></span><p><a href="/course/lens02" target="_blank">焦距带来的图像变形</a></p></dd>
           <dd><a target="_blank" href="/course/lens03"><img src="/new_static/images/jt3.jpg" width="130" height="60" /></a><span></span><p><a href="/course/lens03" target="_blank">镜头名解读</a></p></dd>
           <dd><a target="_blank" href="/course/lens04"><img src="/new_static/images/jt4.jpg" width="130" height="60" /></a><span></span><p><a href="/course/lens04" target="_blank">广角变焦镜头的特征</a></p></dd>
             </dl>
             <dl class="dl_Y No5Dl">
           <dd class="firstDD"><a target="_blank" href="/course/tips01"><img src="/new_static/images/ps1.jpg" width="130" height="60" /></a><span></span><p><a href="/course/tips01" target="_blank">风光拍摄技巧</a></p></dd>
           <dd><a target="_blank" href="/course/tips02"><img src="/new_static/images/ps2.jpg" width="130" height="60" /></a><span></span><p><a href="/course/tips02" target="_blank">动物拍摄技巧</a></p></dd>
           <dd><a target="_blank" href="/course/tips03"><img src="/new_static/images/ps3.jpg" width="130" height="60" /></a><span></span><p><a href="/course/tips03" target="_blank">街头抓拍技巧</a></p></dd>
           <dd><a target="_blank" href="/course/tips04"><img src="/new_static/images/ps4.jpg" width="130" height="60" /></a><span></span><p><a href="/course/tips04" target="_blank">花卉微距拍摄技巧</a></p></dd>
           <dd><a target="_blank" href="/course/tips05"><img src="/new_static/images/ps5.jpg" width="130" height="60" /></a><span></span><p><a href="/course/tips05" target="_blank">夜景拍摄技巧</a></p></dd>
             </dl>
             
        </div>
            <div class="nowR2">
            <div class="nowRC2">
             <a href="/skill/?subNav=3" class="mainTit tit4">摄影技巧</a>
             <a href="/skill/?subNav=3" class="moreA">更多</a>
             <div class="nowRMain2" id="nowRMain2">
                 <ul>
                 <?php foreach($skill as $k=>$v): ?>
                     <li>
                         <dl>
                             <dt>
                                 <a target="_blank" href="/skill/view?id=<?= $v->id ?>">
                                    <img src="<?= $v->pic ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>" />
                                 </a>
                             </dt>
                             <dd><br /><a class="olive" href="/skill/view?id=<?= $v->id ?>"><?= Html::truncate_utf8_string($v->title,8,false)?></a></dd>
                         </dl>
                     </li>
                 <?php endforeach; ?>
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
      <a href="/skill/?subNav=4" class="mainTit tit5">后期处理</a>
        <a href="/skill/?subNav=4" class="moreA">更多</a>
      <a href="javascript:void(0);" class="equipmentPrev" id="equipmentPrev2"></a>
      <a href="javascript:void(0);" class="equipmentNext" id="equipmentNext2"></a>
    <div class="equipmentC" id="equipmentC2">
          <ul>
          <?php foreach($houqi as $k=>$v): ?>
              <li>
                  <h3>
                      <a target="_blank" href="/skill/view?id=<?= $v->id ?>">
                      <img src="<?= $v->pic ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>" />
                      </a>
                  </h3>
                  <p><a target="_blank" href="/skill/view?id=<?= $v->id ?>"><?= $v->title ?></a></p>
              </li>
          <?php endforeach; ?>
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
               <a class="xrBg xrBg2" href="/edify/view?id=<?= $v->id ?>" target="_blank"></a>
               <a class="xrText"  href="/edify/view?id=<?= $v->id ?>" target="_blank"><?= $v->title ?></a>
              </li>
            <?php endforeach; ?>
                         
            <li >
               <h2><a href="/edify/?source=2" class="xr2">风光生态</a></h2>
               <p><span>[夜景]</span><span>[山水]</span><span>[夕阳]</span><span>[日落]</span><br /><span>[花鸟鱼虫]</span><span>[动物]</span><span>[天气]</span><span>[植物]</span></p>
            </li>
            <?php foreach($edify[2] as $k=>$v): ?>
              <li <?php echo $k==3?"class='marginLeft'":'';?>>
               <img src="<?= $v->picurl ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>"/>
               <a class="xrBg xrBg1" href="/edify/view?id=<?= $v->id ?>" target="_blank"></a>
               <a class="xrText"  href="/edify/view?id=<?= $v->id ?>" target="_blank"><?= $v->title ?></a>
              </li>
            <?php endforeach; ?>
                        
            <li >
              <h2><a href="/edify/?source=3" class="xr3">纪实抓拍</a></h2>
              <p><span>[人文]</span><span>[街头]</span><span>[展会]</span><span>[文艺]</span><br /><span>[社会]</span><span>[艺术]</span><span>[广告]</span></p>
            </li>
            <?php foreach($edify[3] as $k=>$v): ?>
              <li <?php echo $k==2?"class='marginLeft'":'';?>>
               <img src="<?= $v->picurl ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>"/>
               <a class="xrBg xrBg3" href="/edify/view?id=<?= $v->id ?>" target="_blank"></a>
               <a class="xrText"  href="/edify/view?id=<?= $v->id ?>" target="_blank"><?= $v->title ?></a>
              </li>
            <?php endforeach; ?>
      
            <li >
               <h2><a href="/edify/?source=5" class="xr4">生活记录</a></h2>
               <p><span>[时尚]</span><span>[美食]</span><span>[收藏]</span><span>[城市]</span><br /><span>[电影]</span><span>[运动]</span><span>[交通]</span><span>[家居]</span></p>
            </li>
            <?php foreach($edify[4] as $k=>$v): ?>
              <li>
               <img src="<?= $v->picurl ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>"/>
               <a class="xrBg xrBg4" href="/edify/view?id=<?= $v->id ?>" target="_blank"></a>
               <a class="xrText"  href="/edify/view?id=<?= $v->id ?>" target="_blank"><?= $v->title ?></a>
              </li>
            <?php endforeach; ?>
             
            <li class='marginLeft'>
              <h2><a href="/?source=7" class="xr5">其它</a></h2>
              <p><span>[商业]</span><span>[科技]</span><span>[旅游]</span><br /><span>...</span></p>
            </li>
            <?php foreach($edify[5] as $k=>$v): ?>
              <li>
               <img src="<?= $v->picurl ?>" alt="<?= $v->title ?>" title="<?= $v->title ?>"/>
               <a class="xrBg xrBg2" href="/edify/view?id=<?= $v->id ?>" target="_blank"></a>
               <a class="xrText"  href="/edify/view?id=<?= $v->id ?>" target="_blank"><?= $v->title ?></a>
              </li>
            <?php endforeach; ?>
                  
       </ul>
   </div>
   <!--灵感渲染_End-->
<script type="text/javascript" src="/new_static/js/yahoo.js"></script>