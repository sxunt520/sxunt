<?php
/* @var $this yii\web\View */
?>
<link rel="stylesheet" href="/new_static/css/css.css" type="text/css" />
<link rel="stylesheet" href="/new_static/css/jquery.ennui.contentslider.css" type="text/css" />
<script type=text/javascript src="/new_static/js/zzsc.js"></script>
<div id="templatemo_slider_wrapper">
	<div id="templatemo_slider">
    
        <div id="one" class="contentslider">
        <div class="cs_wrapper">
            <div class="cs_slider">
                           <div class="cs_article">
                	
                    <div class="article">
                
                        <div class="left">
                            <h2>Original Render - SXUNT</h2>
                            <p>　　最初渲染(Original Render) | 始渲(SXUNT)，用我们的右眼去发现世界的美，视察周围发生的一切。最初也许我们并没发觉，能做的只是按下快门。<br />　　我们并不知道会发生什么，意味着一切都从未知开始，从未知的世界去发现它，渲染、熏陶它...</p>
                            <div class="button"><a target="_blank" href="/about/message/">More</a></div>
                        </div>
                        
                        <div class="right">
                            <a target="_blank" href="/about/message/" target="_parent">
                                <img src="http://img.sxunt.com/uploadimg/1398257548.jpg" alt="template 1" />
                            </a>
                        </div>
                        
                    </div>
                    
                </div>
                                <div class="cs_article">
                	
                    <div class="article">
                
                        <div class="left">
                            <h2> | 始渲画廊(SXUNT GALLERY)</h2>
                            <p><br/>——因为有你们，始渲才会更精彩！</p>
                            <div class="button"><a target="_blank" href="/about/gallery/">More</a></div>
                        </div>
                        
                        <div class="right">
                            <a target="_blank" href="/about/gallery/" target="_parent">
                                <img src="http://img.sxunt.com/uploadimg/1417437272.png" alt="template 2" />
                            </a>
                        </div>
                        
                    </div>
                    
                </div>
                                <div class="cs_article">
                	
                    <div class="article">
                
                        <div class="left">
                            <h2> | 始渲日记(SXUNT DIARY)</h2>
                            <p><br/>记录生活的点点滴滴，记录发生身边的每一件事!</p>
                            <div class="button"><a target="_blank" href="/about/diary/">More</a></div>
                        </div>
                        
                        <div class="right">
                            <a target="_blank" href="/about/diary/" target="_parent">
                                <img src="http://img.sxunt.com/uploadimg/1417438071.jpg" alt="template 3" />
                            </a>
                        </div>
                        
                    </div>
                    
                </div>
                              
        </div><!-- End cs_slider -->
        </div><!-- End cs_wrapper -->
        </div><!-- End contentslider -->
        
        <!-- Site JavaScript -->
       <!-- <script type="text/javascript" src="/new_static/js/jquery-1.3.1.min.js"></script>-->
        <script type="text/javascript" src="/new_static/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="/new_static/js/jquery.ennui.contentslider.js"></script>
        <script type="text/javascript">
        $(function() {
        $('#one').ContentSlider({
        width : '910px',
        height : '210px',
        speed : 500,
        easing : 'easeOutQuart'
        });
        });
        </script>
	
    </div>
</div>
<!--templatemo_action-->
<div id="templatemo">
	<div id="templatemo_row">
    
    	<div class="top_row_box">
        	<h5>始渲坚信理念</h5>
          <p>一切源于发现最初的，从未知的世界去发现它，渲染、熏陶它...</p>
            <div class="button"><a target="_blank" href="/about/message/">More</a></div>
         </div>
        
        <div class="top_row_box">
        	<h5>始渲追求目标</h5>
          <p>为众多摄友提供高质量学习摄影教程、摄影技巧、熏陶寻找摄影灵感的平台!</p>
            <div class="button"><a target="_blank" href="/about/message/">More</a></div>
        </div>
        
        <div class="top_row_box last">
        	<h5>始渲坚持信念</h5>
           <p>我们总是认为世界是美好的! 也许，但对于我们来说，如果能把它留下来,当然是把它记录下来!</p>
            <div class="button"><a target="_blank" href="/about/message/">More</a></div>
        </div>
    
    	<div class="cleaner"></div>
    </div>
</div> 
<!--templatemo_End-->
<div class="wonder"><div class="wonderC"></div></div>
<!--wonderPic_Action-->
<div class="wonderPic">
<div id="content">
	<div id="waterfall" class="waterfall">
    
		<div class="dym-dl">
    		<?php foreach($wonderwall_row1 as $k=>$v){
    		    $pic=strpos($v->picsrc, 'http:') === false ? (\Yii::getAlias('@static') . '/' . $v->picsrc) : $v->picsrc;
    		    ?>
    			<div class="dym" onMouseOver="show(this)" onMouseOut="hide(this)">
                <img src="<?= $pic ?>" alt="<?= $v->describe ?>" title="<?= $v->describe ?>"/>
                      <div  class="undis">
                          <div class="fontsBg"></div>
                          <div class="fonts2"><a href="<?= $v->piclink ?>" target="_blank"><?= $v->describe ?></a></div>
                      </div>
                </div>
    		<?php } ?>				
		</div>
        
		<div class="dym-dl">
			<?php foreach($wonderwall_row2 as $k=>$v){
    		    $pic=strpos($v->picsrc, 'http:') === false ? (\Yii::getAlias('@static') . '/' . $v->picsrc) : $v->picsrc;
    		    ?>
    			<div class="dym" onMouseOver="show(this)" onMouseOut="hide(this)">
                <img src="<?= $pic ?>" alt="<?= $v->describe ?>" title="<?= $v->describe ?>"/>
                      <div  class="undis">
                          <div class="fontsBg"></div>
                          <div class="fonts2"><a href="<?= $v->piclink ?>" target="_blank"><?= $v->describe ?></a></div>
                      </div>
                </div>
    		<?php } ?>			
		</div>
		
        <div class="dym-dl">
				<?php foreach($wonderwall_row3 as $k=>$v){
    		    $pic=strpos($v->picsrc, 'http:') === false ? (\Yii::getAlias('@static') . '/' . $v->picsrc) : $v->picsrc;
    		    ?>
    			<div class="dym" onMouseOver="show(this)" onMouseOut="hide(this)">
                <img src="<?= $pic ?>" alt="<?= $v->describe ?>" title="<?= $v->describe ?>"/>
                      <div  class="undis">
                          <div class="fontsBg"></div>
                          <div class="fonts2"><a href="<?= $v->piclink ?>" target="_blank"><?= $v->describe ?></a></div>
                      </div>
                </div>
    		<?php } ?>			
		</div>
        
	</div>
</div>
</div>
<!--wonderPic_End-->
<script type="text/javascript">
 function show(o){
 	o.getElementsByTagName("div")[0].className="dis";
 }
  function hide(o){
 	o.getElementsByTagName("div")[0].className="undis";
 }
</script> 