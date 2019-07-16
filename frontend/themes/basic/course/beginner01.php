<?php
/* @var $this yii\web\View */
$this->title="入门篇_数码单反相机的结构原理_摄影教程";
?>
<?php echo $this->render('_page_js_css'); ?>
<div class="container">
        <?php echo $this->render('_course_top'); ?>
        <div class="contents">
        	<!-- Main title -->
            <div class="main_title pb20">
            	<div style="height: 112px;" class="title_box colorP">
                	<h2 style="margin-top: -6px;"><b>初级篇</b>
                    <strong class="size24">Lesson</strong>
                    <strong class="size60">07</strong>
                    </h2>
                </div>
                <div class="title_explanation colorG5">
                	<h3>数码单反相机的结构原理</h3>
                    <p class="pb10">数码单反相机的构造是以胶片单反相机为基础，两者有很多共通之处。下面将根据这些特征对数码
单反相机的结构进行说明。</p>
                    <div class="crumbs"><a href="/course/">首页</a><em>&gt;</em><a href="beginner.html">初级篇</a><em>&gt;</em>数码单反相机的结构原理</div>
                </div>
            </div><!-- Main title end -->

            <div class="main_con clearC">
                <!-- slider0 -->
            	<div class="title_t pb20">
                    <span class="colorP"></span><h4>数码单反相机的构造</h4>
                </div>
                <p class="pb10">数码单反相机的构造源于胶片单反相机。通过镜头收集光线以进行成像，这一原理是相同的。但将接受到的光线进行成像的过程则是数码相机特有，可以说更近似于摄像机的特性。数码单反相机的内部由机械部分和电子部分共同构成，制作十分精密。</p>
                <div class="pb10"></div>
    			<div id="slider0" class="pb20">
                    <div class="slider_thumbnails">
                        <a id="prev" onclick="prevClick('#slider0',0)"><img src="/new_static/course/images/prev.png"></a>
                        <div class="slider_list">
                                <style>
                                    .slider_list ul li.active i{border:4px solid #FB7286;}
                                </style>
                                <ul style="width: 525px;">
                                <li class="active"><i data_gpsx="50%" data_gpsy="35%" data_src="/new_static/course/images/beginner01_02_b.jpg" data_src1="/new_static/course/images/beginner01_07.jpg" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;反光镜&lt;/strong&gt;&lt;p class='pb10'&gt;将通过镜头的光线进行反射，使之在取景器内进行成像。&lt;/p&gt;"></i><img src="/new_static/course/images/beginner01_02_s.jpg"></li>
                                <li><i data_gpsx="21%" data_gpsy="66%" data_src="/new_static/course/images/beginner01_03_b.jpg" data_src1="/new_static/course/images/noimg.png" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;镜头（可更换镜头）&lt;/strong&gt;&lt;p class='pb10'&gt;收集被摄体所反射的光线，被收集的光线在图像感应器平面上进行成像。&lt;/p&gt;"></i><img src="/new_static/course/images/beginner01_03_s.jpg"></li>
                                <li><i data_gpsx="59%" data_gpsy="29%" data_src="/new_static/course/images/beginner01_04_b.jpg" data_src1="/new_static/course/images/beginner01_08.jpg" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;图像感应器&lt;/strong&gt;&lt;p class='pb10'&gt;相当于胶片相机所使用的胶片。由半导体集成的电子元件构成。在此处收集到的光线在图像感应器内被转换为电子信号。&lt;/p&gt;"></i><img src="/new_static/course/images/beginner01_04_s.jpg"></li>
                                <li><i data_gpsx="72%" data_gpsy="45%" data_src="/new_static/course/images/beginner01_05_b.jpg" data_src1="/new_static/course/images/beginner01_09.jpg" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;数字影像处理器&lt;/strong&gt;&lt;p class='pb10'&gt;对图像感应器接收到的信号进行计算，并将其转换为人眼可见的图像数据，是进行图像处理的部分。功能相当于胶片相机进行冲印显影的过程。可根据相机的指令对图像进行多种加工处理。&lt;/p&gt;"></i><img src="/new_static/course/images/beginner01_05_s.jpg"></li>
                                <li><i data_gpsx="57%" data_gpsy="31%" data_src="/new_static/course/images/beginner01_06_b.jpg" data_src1="/new_static/course/images/beginner01_10.jpg" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;快门单元&lt;/strong&gt;&lt;p class='pb10'&gt;在图像感应器之前，拦截从镜头射入的光线，通过开关的时间长短调整图像感应器的受光量。位于反光镜的后方，在快门释放前反光镜将升起。&lt;/p&gt;"></i><img src="/new_static/course/images/beginner01_06_s.jpg"></li>
                            </ul>
                        </div>
                        <a id="next" onclick="nextClick('#slider0',0)"><img src="/new_static/course/images/next.png"></a>
                    </div>
                    <div class="pb20"></div>
                    <div style="clear:both"></div>
                	<div class="slider_camera mb20">
                    	<div style="top: 35%; left: 50%;" class="mask colorP"></div>
                        <div class="camera_img"><img src="/new_static/course/images/beginner01_01.jpg"></div>
                    </div>
                    <div class="slider_caption">
                    	<div class="caption_txt">
                    		<strong class="size16 blackcolor pb10">反光镜</strong>
                        	<p class="pb10">将通过镜头的光线进行反射，使之在取景器内进行成像。</p>
                        </div>
                        <div class="caption_img">
                        	<div class="caption_img_l">
                            	<img src="/new_static/course/images/beginner01_02_b.jpg">
                            </div>
                            <div class="caption_img_r">
                            	<img src="/new_static/course/images/beginner01_07.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="pb20" style="clear:both"></div>
                    <div class="mb0"></div>
                </div>
                <!-- slider0 end -->
                <div class="title_t pb20">
                    <span class="colorP"></span><h4>摄影的原理</h4>
                </div>
                <!-- col2 -->
                <div class="col2 circleNumCJ pb10">
                	<div class="col2_box">
                    	<h5 class="pb10">按下快门按钮前的状态</h5>
                    	<img src="/new_static/course/images/beginner01_11.jpg" class="pb10">
                        <p class="pb10"><span>①</span>五棱镜&nbsp;&nbsp;<span>②</span>取景器&nbsp;&nbsp;<span>③</span>反光镜</p>
                        <p class="pb20">在按下快门按钮之前，通过镜头的光线由反光镜反射至取景器内部。小型数码相机多采用电子手段实现对被摄体的观察，而数码单反相机由于采用这种光学的方式，因此不会产生多种时滞延迟。</p>
                    </div>
                    <div class="col2_box end">
                    	<h5 class="pb10">按下快门按钮后的状态</h5>
                    	<img src="/new_static/course/images/beginner01_12.jpg" class="pb10">
                        <p class="pb10"><span>①</span>快门单元&nbsp;&nbsp;<span>②</span>图像感应器</p>
                        <p class="pb20">在按下快门按钮的同时，反光镜弹起，镜头所收集的光线通过快门帘幕到达图像感应器。快门的功能不仅是可以调节光量，还可通过快门打开时间的长短来控制被摄体的动态表现。</p>
                    </div>
                </div><!-- col2 end-->
                <div class="mb0"></div>
                <!--col4-->
                <div class="title_t pb20">
                    <span class="colorP"></span><h4>数据记录原理</h4>
                </div>
                <div class="col4 pb10">
                	<div class="col4_l">
                        <div class="col4_box">
                            <p class="size13 pb20">数码单反相机记录数据的流程分为3个阶段。透过镜头的光线照射在图像感应器上，转换成电子信号。然后由数字影像处理器进行多种图像处理，完成信号的数据化并传输至存储卡保存。到数字影像处理器为止的阶段用于完成成像，存储卡仅起到储存数据的作用。</p>
                        </div>
                        <div class="col4_box end">
                            <h5 class="pb10">图像感应器</h5>
                            <img class="pb10" src="/new_static/course/images/beginner01_13.jpg">
                            <p class="size13 pb20">将光线转换为电子信号，生成图像数据所需的基础部分。但在这一阶段尚未完成成像。</p>
                        </div>
                    </div>
                    <div class="col4_r1">
                        <div class="col4_box">
                            <h5 class="pb10">数字影像处理器</h5>
                            <img class="pb10" src="/new_static/course/images/beginner01_14.jpg">
                            <p class="size13 pb20">根据图像感应器所传输来的数据，生成数字图像。在这一部分将进行多种图像处理。</p>
                        </div>
                        <div class="col4_box end">
                            <h5 class="pb10">存储卡</h5>
                            <img class="pb10" src="/new_static/course/images/beginner01_15.jpg">
                            <p class="size13 pb10">承担着保存数字影像处理器所生成数据的任务。在这一部分没有与成像相关操作。</p>
                        </div>
                    </div>
                </div><!--col4 end-->
                <div class="mb0"></div>
            	<div class="title_t pb20">
                    <span class="colorP"></span><h4>何谓记录画质？</h4>
                </div>
                <!-- table -->
                <p class="pb10">所谓的画质，是指数字影像处理器所生成图像数据的大小和质量。每张图像的数据大小不同，存储卡能够保存的张数也不同。数字影像处理器对图像感应器传送来的数据按照指定形式进行加工，使所保存图像获得符合使用需求的质量。</p>
                <div class="pb10"></div>
                <h5 class="pb10">约1800万有效像素的图像记录画质</h5>
                <div class="table-container pb20">
                <table id="table" cellpadding="0" cellspacing="0">
                        <thead>
                        <tr class="gray">
                            <th><span>图像画质</span></th>
                            <th><span>记录的像素</span></th>
                            <th><span>文件尺寸</span></th>
                            <th><span>可拍摄数量<sup>※</sup></span></th>
                            <th><span>用途</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>L（大）</td>
                            <td>约1800万像素</td>
                            <td>约10MB</td>
                            <td>约800张</td>
                            <td>A3尺寸</td>
                        </tr>
                        <tr>
                            <td>M（中）</td>
                            <td>约800万像素</td>
                            <td>约6MB</td>
                            <td>约1300张</td>
                            <td>A4尺寸</td>
                        </tr>
                        <tr>
                            <td>S1（小1）</td>
                            <td>约450万像素</td>
                            <td>约4MB</td>
                            <td>约2000张</td>
                            <td>A5尺寸</td>
                        </tr>
                        <tr>
                            <td>S2（小2）</td>
                            <td>约250万像素</td>
                            <td>约2MB</td>
                            <td>约4000张</td>
                            <td>A6尺寸</td>
                        </tr>
                        <tr>
                            <td>S3（小3）</td>
                            <td>约35万像素</td>
                            <td>约0.3MB</td>
                            <td>约26000张</td>
                            <td>名片尺寸</td>
                        </tr>
                        <tr>
                            <td>RAW</td>
                            <td>约1800万像素</td>
                            <td>约30MB</td>
                            <td>约200张</td>
                            <td>A3尺寸</td>
                        </tr>
                        </tbody>
                    </table>
                
                </div>
                <!-- table end -->
                <p>※ 以安装8GB存储卡为例。</p>
                <div class="mb20"></div>
                <!--gray_col-->
                <div class="gray_col colorG5 mb20">
                	<div class="title_t pb20">
                		<div class="prompt size18 colorB3">小提示</div>
                    </div>
                	<div class="gray_col3">
                        <h5 class="pb10">何谓RAW？</h5>
                        <p class="pb10">RAW是数码单反相机可记录的图像格式之一。而JPEG是应用性较高
的图像格式，特点是可以在电脑等多种设备上进行处理。EOS相机的标准设置是经过数字影像处理器处理后生成JPEG图像。生成JPEG图像前未处理的原始
图像数据就是RAW。RAW文件包含多种多样的信息，比如将RAW文件导入电脑后可改变其相机设置的项目等，也因此文件尺寸较大。</p>
                    </div>
                </div><!-- gray_col end-->
                <div class="page">
                	<div class="page_prev"><a href="/course/approach07"><img src="/new_static/course/images/page_prev.jpg">上一页</a></div><div class="page_next"><a href="/course/beginner02">下一页<img src="/new_static/course/images/page_next.jpg"></a></div>
                </div>
            </div>
                <div style="clear:both"></div>
        </div>
</div>