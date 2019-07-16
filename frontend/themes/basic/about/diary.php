<?php
/* @var $this yii\web\View */
use common\helpers\Html;
?>
<link href="/new_static/css/css.css" rel="stylesheet" type="text/css" />
<script src="/new_static/js/jquery-latest.min.js" type="text/javascript"></script>
<div class="diaBox">
<div class="diaBoxC">

<?php foreach($models as $k=>$item){
    $pic=strpos($item['pic'], 'http:') === false ? (\Yii::getAlias('@static') . '/' . $item['pic']) : $item['pic'];
    ?>
    <div class="diary">
        <div class="diaryT">
            <div class="time">
            <h3><?= $item['date_time']?></h3>
            <p><?php echo Html::getWeekName(strtotime($item['date_time']),'星期');?></p>
            </div>
        </div>
        <div class="diaryB">
               <div class="diaryL left">
                  <a href="/about/diary-page?id=<?= $item['id'];?>" target="_blank"><img src="<?= $pic;?>" width="310" height="210" /></a>
               </div>
            <div class="diaryR right">
               <div class="diaryRT">
                  <p>
                      <span><strong>天气 ：</strong><?= $item['weather']?></span>
                      <span><strong>人物 ：</strong><?= $item['people']?></span>
                      <span><strong>地点 ：</strong><?= $item['address']?></span>
                      </p>
               </div>
               <div class="diaryRB">
               <h2><a href="/about/diary-page?id=<?= $item['id'];?>" target="_blank"><?= $item['title']?></a></h2>
               <div class="diaText"><p><?= $item['description']?><a href="/about/diary-page?id=<?= $item['id'];?>" target="_blank">&lt;&lt; 更多详情</a></p></div>
               <span class="no5">No.5F<?= $item['id']?></span>
               </div>
            </div>
          </div>
    </div>
<?php }?>    
      
      </div>
      
      <div style="padding-bottom: 20px;padding-left:55px;">
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
      
    </div>
    
</div>
</div>