<?php
/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16/3/16
 * Time: 上午10:31
 */
use common\helpers\Html;
use yii\helpers\Markdown;

?>
<!--<link href="/css/site.css" rel="stylesheet">-->
<link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style>
*{box-sizing: inherit;}
.topC h1 { margin: 0;}
.part h3, .navi h3, .me h3{ margin:0;}
.me p{ margin:0;}
.hotNews ul li p{ margin-bottom:0;}
.tag_hot ul{ margin-bottom:0;}

.vote {float: right;}
.vote a {margin-left: 10px;text-decoration: none;outline:none;}
.vote a.up:hover *,.vote a.up.hover *{color:#569231;}
.vote a.down:hover *,.vote a.down.hover *{color:#D8582B;}
.media-list .media { border-bottom: #E9E7E2 solid 1px; padding-bottom: 15px; }
.media-list .media .media-object { width: 48px; height: 48px; padding: 1px; border: #ddd solid 1px; border-radius: 4px; }
.media-list .media .media-right a { border-radius: 4px; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.1); font-size: 12px; line-height: 22px; background: #ddd; width: 45px; display: block; height: 48px; text-align: center; color: #999; text-decoration: none;}
.media-list .media .media-right a em { font-size: 14px; font-weight: 500; background: #eee; display: block; line-height: 26px; font-style: normal; }
.media-list .media-body { word-break: break-all; }
.media-list .media-body .media-heading { font-size: 12px; color: #999; line-height: 1.5em; }
.media-list .media-body h2.media-heading { font-size: 14px; }
.media-list .media-body h2.media-heading small { margin-left: 10px; font-size: 12px; color: #999; }
.media-list .media-body h2.media-heading small a { color: #999; }
.media-list .media-body h2.media-heading small span { color: orange; }
.media-list .media-body h2.media-heading small em { font-style: normal; color: #D8582B; }
.media-list .media-body .hint { color: #999; font-size: 12px; }
.media-list .media-body .hint em { color: #D8582B; font-style: normal; }
.media-list .media-body .media { margin-bottom: 10px; }
.media-list .media-action { margin-top: 10px; font-size: 12px; color: #999; }
.media-list .media-action a { color: #666; }
.media-list .media-action .dot { margin: 0 10px; }
.media-heading a{color:#569231;}
</style>
<!--评论-->
<div id="comments">
    <h4>共 <span class="text-danger"><?=$model->comment?></span> 条评论</h4>
    <div class="col-4">
        <ul class="media-list">
            <?php foreach ($commentModels as $item):?>
                <li class="media" data-key="<?=$item->id?>">
                    <div class="media-left">
                        <a href="<?= \yii\helpers\Url::to(['/user', 'id' => $item->user_id])?>">
                            <img class="media-object" src="<?= $item->profile->avatarUrl?>" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="media-heading"><a href="<?= \yii\helpers\Url::to(['/user', 'id' => $item->user_id])?>"><?=$item->user->username?></a> 评论于 <?=date('Y-m-d H:i', $item->created_at)?></div>
                        <div class="media-content"><?= Markdown::process($item->content, 'gfm')?></div>
                        <?php foreach ($item->sons as $son):?>
                            <div class="media">
                                <div class="media-left">
                                    <a href="<?= \yii\helpers\Url::to(['/user', 'id' => $son->user_id])?>" rel="author" title=""><img class="media-object" src="<?= $son->profile->avatarUrl?>" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="<?= \yii\helpers\Url::to(['/user', 'id' => $son->user_id])?>" rel="author" data-original-title="<?=$son->user->username?>" title=""><?=$son->user->username?></a> 回复于 <?=date('Y-m-d H:i', $son->created_at)?>
                                        <span class="pull-right"><a class="reply-btn j_replayAt" href="javascript:;">回复</a></span>
                                    </div>
                                    <div class="media-content"><?= Markdown::process(\common\helpers\Comment::process($son->content))?></div>
                                </div>
                            </div>
                        <?php endforeach;?>
                        <div class="media-action">
                            <a class="reply-btn" href="#">回复</a><span class="vote"><a class="up" href="<?=\yii\helpers\Url::to(['/vote', 'id' => $item->id, 'type' => 'comment', 'action' => 'up'])?>" title="" data-toggle="tooltip" data-original-title="顶"><span class="fa fa-thumbs-o-up"></span> <em><?=$item->up?></em></a><a class="down" href="<?=\yii\helpers\Url::to(['/vote', 'id' => $item->id, 'type' => 'comment', 'action' => 'down'])?>" title="" data-toggle="tooltip" data-original-title="踩"><span class="fa fa-thumbs-o-down"></span> <em><?=$item->down?></em></a></span>
                        </div>
                    </div>
                </li>
            <?php endforeach;?>
        </ul>
        <?= \yii\widgets\LinkPager::widget([
            'pagination' => $commentDataProvider->getPagination()
        ]); ?>
    </div>
</div>
<h4>发表评论</h4>

    <?php $form = \yii\widgets\ActiveForm::begin(['action' => \yii\helpers\Url::toRoute('comment/create')]); ?>
    <?= $form->field($commentModel, 'content')->label(false)->widget('\yidashi\markdown\Markdown', ['options' => ['style' => 'height:200px;']]); ?>
    <?= Html::hiddenInput(Html::getInputName($commentModel, 'article_id'), $model->id) ?>
    <div class="form-group">
        <?php if (!Yii::$app->user->isGuest): ?>
        <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
        <?php else: ?>
            <?= Html::a('登录', ['/site/login'], ['class' => 'btn btn-primary'])?>
        <?php endif; ?>
    </div>
    <?php \yii\widgets\ActiveForm::end(); ?>
    <!--回复-->
    <?php $form = \yii\widgets\ActiveForm::begin(['action' => \yii\helpers\Url::toRoute('comment/create'), 'options' => ['class' => 'reply-form hidden']]); ?>
    <?= Html::hiddenInput(Html::getInputName($commentModel, 'article_id'), $model->id) ?>
    <?= Html::hiddenInput(Html::getInputName($commentModel, 'parent_id'), 0, ['class' => 'parent_id']) ?>
    <?=$form->field($commentModel, 'content')->label(false)->textarea()?>
    <div class="form-group">
        <?php if (!Yii::$app->user->isGuest): ?>
            <button type="submit" class="btn btn-sm btn-primary">回复</button>
        <?php else: ?>
            <?= Html::a('登录', ['/site/login'], ['class' => 'btn btn-primary'])?>
        <?php endif; ?>
    </div>
    <?php \yii\widgets\ActiveForm::end(); ?>
<!--<script src="/js/bootstrap.js"></script>    -->
<script type="text/javascript">
    $(document).ready(function() {	
    	
		//$("[data-toggle=tooltip]").tooltip({container: 'body'});
		
		//投票
		$('.vote a').on('click', function() {
			var a = $(this);
			var title = a.attr('data-original-title');
			$.ajax({
				url: a.attr('href'),
				dataType: 'json',
				success: function(data) {
					a.parent().find('.up i').attr('class', 'fa fa-thumbs-o-up');
					a.parent().find('.down i').attr('class', 'fa fa-thumbs-o-down');
					
					a.addClass("hover");
					
					//a.find('i').attr('class', a.find('i').attr('class').replace('o-', ''));
					a.parent().find('.up em').html(data.up);
					a.parent().find('.down em').html(data.down);
					a.attr('data-original-title');
					//a.attr('data-original-title', '您已' + title).tooltip('show').attr('data-original-title', title);
				},
				error: function (XMLHttpRequest, textStatus) {
					if(XMLHttpRequest.status == 302){
						$('#modal').modal({ remote: XMLHttpRequest.getResponseHeader('X-Redirect')});
					}
					this.abort();
	
				}
			});
			return false;
		});
		//详细页收藏
		$('.favourites a').on('click', function() {
			var a = $(this);
			var i = a.find('i');
			var em = a.find('em');
			var params = a.data('params');
			$.ajax({
				url: a.attr('href'),
				type:'post',
				data:params,
				dataType: 'json',
				success: function(data) {
					if(data.action == 'create') {
						i.attr('class', 'fa fa-star');
						//a.attr('data-original-title', '您已收藏').tooltip('show').attr('data-original-title', '取消收藏');
					} else {
						i.attr('class', 'fa fa-star-o');
						//a.attr('data-original-title', '您已取消收藏').tooltip('show').attr('data-original-title', '收藏');
					}
					em.html(data.count);
				},
				error: function (XMLHttpRequest, textStatus) {
					if(XMLHttpRequest.status == 302){
						$('#modal').modal({ remote: XMLHttpRequest.getResponseHeader('X-Redirect')});
					}
					this.abort();
				}
			});
			return false;
		});
		//回复
		$(".reply-btn").click(function(){
			$(".reply-form").removeClass("hidden");
			if($(this).parent().attr("class")=="media-action") {
				$(".reply-form").appendTo($(this).parent());
				$(".reply-form").find("textarea").val("");
			} else {
				$(".reply-form").appendTo($(this).parents("li").find(".media-action"));
				$(".reply-form").find("textarea").val("@"+$(this).parents(".media-heading").find("a").html()+" ");
			}
			$(".reply-form").find(".parent_id").val($(this).parents("li").attr("data-key"));
			return false;
		});
    	
    })
</script>