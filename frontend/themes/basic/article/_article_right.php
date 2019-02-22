<?php
use common\helpers\Html;
?>
<!--热门资讯_Action-->
  <div class="hotNews">
     <a href="/article/" class="mainTit tit7">热门资讯</a>
     <a href="/article/" class="moreA">更多</a>
     <ul>
        
        <?php foreach ($rightnews['hot_news'] as $kk=>$vv):?>
            <li <?php if($kk==0){echo "class='firstLi'";}?>>
                <p><a target="_blank" href="/article/view?id=<?= $vv->id;?>"><?php echo Html::truncate_utf8_string($vv->title,13,false);?></a><span>点击：<?php echo $vv->trueView;//view?></span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="/article/view?id=<?= $vv->id;?>">
                    <img src="<?= $vv->cover;?>" alt="<?= $vv->title;?>" title="<?= $vv->title;?>" />
                    </a>
                    </dt>
                    <dd><a href="/article/?cate=<?= $vv->category_id;?>" class="olive">[<?= $vv->category;?>]</a><a target="_blank" href="/article/view?id=<?= $vv->id;?>"><?php echo Html::truncate_utf8_string($vv->title,20,false);?></a><br/><span>点击：<?php echo $vv->trueView;//view?></span></dd>
                </dl>
            </li>
        <?php endforeach;?>           
     </ul>
  </div>
 <!--热门资讯_End-->
 
 <!--热门标签_Action-->
  <div class="tag_hot">
     <a href="javascript:void(0);" class="mainTit tit10">热门标签</a>
     <!-- <a href="/article/" class="moreA">更多</a> -->
     <ul class="tag-list list-inline">
        <?php foreach($rightnews['hotTags'] as $tag): ?>
            <li><a href="/article/tag?name=<?= $tag->name;?>"><?= $tag->name ?></a></li>
        <?php endforeach; ?>
    </ul>
  </div>
 <!--热门标签_End-->
 
 <!--推荐资讯_Action-->
  <div class="hotNews">
     <a href="/article/" class="mainTit tit8">推荐资讯</a>
     <a href="/article/" class="moreA">更多</a>
     <ul>
     
        <?php foreach ($rightnews['top_news'] as $kk=>$vv):?>
            <li <?php if($kk==0){echo "class='firstLi'";}?>>
                <p><a target="_blank" href="/article/view?id=<?= $vv->id;?>"><?php echo Html::truncate_utf8_string($vv->title,13,false);?></a><span>点击：<?php echo $vv->trueView;//view?></span></p>
                <dl>
                    <dt>
                    <a target="_blank" href="/article/view?id=<?= $vv->id;?>">
                    <img src="<?= $vv->cover;?>" alt="<?= $vv->title;?>" title="<?= $vv->title;?>" />
                    </a>
                    </dt>
                    <dd><a href="/article/?cate=<?= $vv->category_id;?>" class="olive">[<?= $vv->category;?>]</a><a target="_blank" href="/article/view?id=<?= $vv->id;?>"><?php echo Html::truncate_utf8_string($vv->title,20,false);?></a><br/><span>点击：<?php echo $vv->trueView;//view?></span></dd>
                </dl>
            </li>
        <?php endforeach;?>
                   
     </ul>
  </div>
 <!--推荐资讯_End-->
 <!--灵感渲染_Action-->
  <div class="hotNews">
     <a href="/edify/" class="mainTit tit9">灵感渲染</a>
     <a href="/edify/" class="moreA">更多</a>
     <ul>

     <?php
     $sourceArr=['1'=>'人物写真','2'=>'风光拍摄','3'=>'纪实抓拍','4'=>'生态微距','5'=>'生活记录','6'=>'商业摄影','7'=>'其它拍摄'];
     foreach ($rightnews['top_edify'] as $kk=>$vv):?>
        <li <?php if($kk==0){echo "class='firstLi'";}?>>
            <p><a target="_blank" href="/edify/view?id=<?= $vv->id;?>"><?php echo Html::truncate_utf8_string($vv->title,13,false);?></a><span>点击：<?php echo $vv->trueHits;//hits?></span></p>
            <dl>
                <dt>
                <a target="_blank" href="/edify/view?id=<?= $vv->id;?>">
                <img src="<?= $vv->picurl;?>" alt="<?= $vv->title;?>" title="<?= $vv->title;?>" />
                </a>
                </dt>
                <dd><a href="/edify/?source=<?= $vv->source;?>" class="olive">[<?php echo $sourceArr[$vv->source];?>]</a><a target="_blank" href="/edify/view?id=<?= $vv->id;?>"><?php echo Html::truncate_utf8_string($vv->title,20,false);?></a><br/><span>点击：133</span></dd>
            </dl>
        </li>
        <?php endforeach;?>
                   
     </ul>
  </div>
 <!--灵感渲染_End-->
 
<script type="text/javascript">
    $(document).ready(function() {	
    	/*news列表页右测*/
    	$(".hotNews ul li").mouseover(function(){
    		$(this).siblings().removeClass("firstLi");
    		$(this).addClass("firstLi");
    	})
    	
    })
</script>