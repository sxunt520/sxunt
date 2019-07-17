<?php
/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
?>
<link href="/new_static/css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="/new_static/js/message.js"></script>
<div class="message">
<div class="messageC">
    <div class="messageT">
        <p>亲爱的各位，只要你爱好摄影，与我有共同兴趣爱好，给我留言哦！大家相互学习，拍出我们的艺术作品。还在等什么，给我留言吧！</p>
    </div> 
    <div class="messageB">
       <div class="messageL">
        <?php $form = ActiveForm::begin(); ?>
       <table width="401"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="34"><h3>留言表单：</h3></td>
                          </tr>
                          <tr>
                            <td height="28">
                            <strong>姓名：</strong>
                            </td>
                          </tr>
                          <tr>
                            <td height="36">
                            <input name="name" type="text" class="name"/>
                            </td>
                          </tr>
                          <tr>
                            <td height="28">
                            <strong>E-mail：</strong>
                            </td>
                          </tr>
                          <tr>
                            <td height="36">
                            <input name="email" type="text" class="email"/>
                            </td>
                          </tr>
                          <tr>
                            <td height="28">
                            <strong>电话：</strong>
                            </td>
                          </tr>
                          <tr>
                            <td height="36">
                            <input name="tel" type="text" class="tel"/>
                            </td>
                          </tr>
                          <tr>
                            <td height="28">
                            <strong>备注：</strong>
                            </td>
                          </tr>
                          <tr>
                            <td height="162">
                            <textarea name="content" cols="" rows="" class="content"></textarea>
                            </td>
                          </tr>
                          <tr>
                              <td height="32">
                                  <input name="submit" class="submit" type="submit" value="提交" />
                              </td>
                          </tr>
                    </table>
  <?php ActiveForm::end(); ?>

       </div>
       <div class="messageR">
          <div class="messageCC">
          
          
                       <?php
                            foreach($Message_rows as $k=>$item){
                                ?>
                                   <div class="mes">
                                             <div class="mesT">
                                                 <span class="mes1"><strong>NAME:</strong><?= $item->name;?></span>
                                                 <span class="mes2"><strong>ID:</strong>KB0<?= $item->id;?></span>
                                                 <span class="mes3"><?= $item->lastdate;?></span>
                                             </div>
                                         <div class="mesB"><p><?= $item->content;?></p></div>
                                     </div>
                       <?php }?> 
                     
                                  
             
              
          </div>
       </div>
    </div>
</div>
</div>