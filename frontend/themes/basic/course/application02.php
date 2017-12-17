<?php
/* @var $this yii\web\View */
$this->title="电脑运用篇_ 使用附带软件编辑照片";
?>
<?php echo $this->render('_page_js_css'); ?>
<div class="container">
        <?php echo $this->render('_course_top'); ?>
        <div class="contents">
        	<!-- Main title -->
            <div class="main_title pb20">
            	<div class="title_box colorB1">
                	<h2>
                    <b>电脑运用篇</b>
                    <strong class="size24">Lesson</strong>
                    <strong class="size60">55</strong>
                    </h2>
                </div>
                <div class="title_explanation colorG5">
                	<h3>使用附带软件编辑照片</h3>
                    <p class="pb10">利用Digital Photo Professional 除了可以显示所拍照片以外，还能进行色调调整、倾斜校正或裁剪等图像处理。在此以JPEG 图像的调节为例，解说这一系列的操作步骤。</p>
                    <div class="crumbs"><a href="/course/">首页</a><em>&gt;</em><a href="application.html">电脑运用篇</a><em>&gt;</em>使用附带软件编辑照片</div>
                </div>
            </div><!-- Main title end -->

            <div class="main_con clearC">
            	<div class="title_t pb20">
                    <span class="colorB1"></span><h4>Digital Photo Professional 的功能</h4>
                </div>
                <h5 class="pb10">可进行一系列照片相关调整</h5>
                <p class="pb20">Digital Photo Professional（以下简称DPP）是能够对照片进行浏览、甄选、编辑和加工的软件。这里以JPEG图像为例解说操作步骤，如果拍摄的是RAW图像，就像<a href="application04.html" class="uline">Lesson57</a>介
绍的那样，也能在拍摄后变更白平衡和照片风格。此外，通过DPP调整后的效果，并不是直接修改原照片。可通过DPP查看调整亮度、倾斜或裁剪等后的效果边
进行编辑，调整后利用"转换并保存"功能另存为新图像。调整后的信息可通过保存附带在原图像数据中，方便随时再次调整。希望大家能将喜爱的照片加工得更有
魅力。</p>
                <!-- col3 -->
                <div class="col3">
                	<div class="col3_l">
                        <div class="col3_box">
                        	<h5 class="pb10">变更色调和亮度</h5>
                            <img src="/new_static/course/images/application02_01.jpg" class="pb10">
                            <p class="size13 pb20">（上图）想要表现蓝色与红色的对比，但照片效果暗淡。（下图）通过调整对比度和色彩饱和度，使照片效果变鲜艳。</p>
                        </div>
                        <div class="col3_box end">
                        	<h5 class="pb10">校正倾斜</h5>
                            <img src="/new_static/course/images/application02_02.jpg" class="pb10">
                            <p class="size13 pb20">（上图）决定好构图后拍摄的，但还是有点倾斜。（下图）校正为水平，获得具有稳定感的照片。</p>
                        </div>
                    </div>
                	<div class="col3_box end">
                        	<h5 class="pb10">裁剪所需范围</h5>
                            <img src="/new_static/course/images/application02_03.jpg" class="pb10">
                            <p class="size13 pb20">（上图）横拍的照片。但拍后只想保留灯塔。（下图）裁剪为只剩灯塔，变成了竖构图的照片。</p>
                    </div>
                </div>
                <!-- col3 end-->
                <div class="mb20"></div>
                <!-- slider0 -->
            	<div class="title_t pb20">
                    <span class="colorB1 size18">1</span><h4>调整亮度和饱和度</h4>
                </div>
                <p>利用"工具调色板"中"RGB"选项卡显示的"色调曲线"可以调整照片的亮度和对比度。点住色调曲线向上拉会使照
片变得明亮，向下拉会使照片变暗。分别向上下拉色调曲线的两处，把色调曲线调整成S形时，明亮部分会更亮，昏暗部分会更暗，明暗差变得强烈，对比度提高。
想要降低对比度时，需要将其调成反向S形。此外，在想要将照片颜色调得鲜艳或朴素时，可调整"饱和度"。向右移动滑块颜色变鲜艳，向左移动滑块则颜色变
灰。将数值调节为最左侧的0 时变为单色照片。</p>
                <div class="pb20"></div>
    			<div id="slider0" class="pb20">
                    <div class="slider_thumbnails">
                        <a id="prev" onclick="prevClick('#slider0',0)"><img src="/new_static/course/images/prev.png"></a>
                        <div class="slider_list">
                            <style>
                                .slider_list ul li.active i{border:4px solid #1DB3B8;}
                            </style>
                            <ul>
                                <li class="active"><i data_gpsx="82%" data_gpsy="11%" data_src="/new_static/course/images/application02_05_b.jpg" data_src1="/new_static/course/images/noimg.png" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;色调曲线辅助&lt;/strong&gt;&lt;p class='pb10 circleNumApp'&gt;通过"色调曲线辅助"也能自动调整饱和度。色调曲线辅助有将照片调整为标准的"标准"和调整强度大的"高"两个选项。这里单击"高"，强调水果的鲜艳。&lt;br /&gt;&lt;span&gt;①&lt;/span&gt;标准&lt;br /&gt;&lt;span&gt;②&lt;/span&gt;高&lt;/p&gt;"></i><img src="/new_static/course/images/application02_05_s.jpg"></li>
                                <li><i data_gpsx="82%" data_gpsy="34%" data_src="/new_static/course/images/application02_09.jpg" data_src1="/new_static/course/images/noimg.png" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;&lt;/strong&gt;&lt;p class='pb10 circleNumApp'&gt;点击并拖拽"色调曲线"可以调整图像的亮度和对比度。注意过度调节图像可能会变得不自然。要取消调整内容时，可以点击"色调曲线"左上的箭头按钮。&lt;br /&gt;&lt;span&gt;①&lt;/span&gt;使用"色调曲线辅助"调整的色调曲线&lt;br /&gt;&lt;span&gt;②&lt;/span&gt;色调曲线&nbsp;&nbsp;&lt;span&gt;③&lt;/span&gt;变亮&nbsp;&nbsp;&lt;span&gt;④&lt;/span&gt;变暗&nbsp;&nbsp;&lt;/p&gt;"></i><img src="/new_static/course/images/application02_06_s.jpg"></li>
                                <li><i data_gpsx="82%" data_gpsy="51%" data_src="/new_static/course/images/application02_10.jpg" data_src1="/new_static/course/images/noimg.png" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;调整饱和度&lt;/strong&gt;&lt;p class='pb10'&gt;这里要提高饱和度，因此调整为120 。另外，通过"色调曲线辅助"调整时"饱和度"也被自动调整。想要微调饱和度时推荐移动"饱和度"滑块进行调整。&lt;/p&gt;"></i><img src="/new_static/course/images/application02_07_s.jpg"></li>
                            </ul>
                        </div>
                        <a id="next" onclick="nextClick('#slider0',0)"><img src="/new_static/course/images/next.png"></a>
                    </div>
                    <div class="pb20"></div>
                    <div style="clear:both"></div>
                	<div class="slider_camera mb20">
                    	<div class="mask colorB1"></div>
                        <div class="camera_img"><img src="/new_static/course/images/application02_04.jpg"></div>
                    </div>
                    <div class="slider_caption">
                    	<div class="caption_txt">
                    		<strong class="size16 blackcolor pb10">色调曲线辅助</strong>
                        	<p class="pb10 circleNumApp">通过"色调曲线辅助"也能自动调整饱和度。色调曲线辅助有将照片调整为标准的"标准"和调整强度大的"高"两个选项。这里单击"高"，强调水果的鲜艳。<br><span>①</span>标准<br><span>②</span>高</p>
                        </div>
                        <div class="caption_img">
                        	<div class="caption_img_l">
                            	<img src="">
                            </div>
                            <div class="caption_img_r">
                            	<img src="">
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="mb0"></div>
                </div>
                <!-- slider0 end -->
                <div class="mb20"></div>
                <!--gray_col-->
                <div class="gray_col1 colorG5 mb20">
                    <div class="title_t pb20">
                        <div class="prompt size18 colorB3">小提示</div>
                    </div>
                    <div class="col3_l end">
                        <div class="gray_c3_box">
                            <h5 class="pb10">未显示工具调色板时</h5>
                            <p>启动DPP，从"文件夹"一栏中选择包含想编辑照片的文件夹。在主窗口中单击想要调整的照片选中后，单击"编辑图像窗口"按钮后切换到编辑图像的窗口。单击"工具调色板"按钮显示工具调色板。</p>
                        </div>
                        <div class="gray_c3_box end">
                            <img src="/new_static/course/images/application02_11.jpg" class="pb10">
                        </div>
                    </div>
                </div>
                <!-- gray_col end-->
                <div class="mb20"></div>
            	<div class="title_t pb20">
                    <span class="colorB1 size18">2</span><h4>校正倾斜</h4>
                </div>
                <!-- col3 121 -->
                <div class="col3_121 pb10">
                	<div class="col3_121_1">
                        <p class="pb10 end w100">使用"裁剪角度"工具将倾斜的照片调整为水平。单击编辑图像窗口下的"裁剪角度"按钮后显示"裁剪角度"窗口。勾选"显示网格"后移动滑块调整网格间距，使照片中的地平线附近有网格线，然后利用"角度"工具调整照片角度。</p>
                    </div>
                    <div class="col3_121_2">
                    	<img class="pb10" src="/new_static/course/images/application02_12.jpg">
                    </div>
                    <div class="col3_121_1 end">
                    	<img class="pb10" src="/new_static/course/images/application02_13.jpg">
                        <p class="pb10">"角度"工具除了能移动滑块进行调整外，也可以直接输入数值。</p>
                    </div>
                </div>
                <!-- col3 121 mode end-->
                <div class="mb20"></div>
            	<div class="title_t pb20">
                    <span class="colorB1 size18">3</span><h4>裁切所需范围</h4>
                </div>
                <!-- col3 121 -->
                <div class="col3_121 pb10">
                	<div class="col3_121_1">
                        <p class="pb10 end w100">首先选择"宽高比"决定裁切的长宽比。如果不想改
变原始照片的长宽比，选择相同比例即可。"宽高比"是"横:竖"的形式。相机的标准设置是3:2。可斜向拖拽照片上方决定裁切范围。要变更裁切位置时用鼠
标拖动，变更范围的大小时用鼠标拉动裁切范围的四角。点击"确定"按钮关闭裁剪角度窗口，显示编辑图像窗口画面。</p>
                    </div>
                    <div class="col3_121_2">
                    	<img class="pb10" src="/new_static/course/images/application02_14.jpg">
                    </div>
                    <div class="col3_121_1 end">
                    	<img class="pb10" src="/new_static/course/images/application02_15.jpg">
                        <p class="pb10">以" 横:竖"的形式设置。</p>
                    	<img class="pb10" src="/new_static/course/images/application02_16.jpg">
                        <p class="pb10">勾选"显示边框"，向右移动"暗度"滑块，裁切范围变得更明确。</p>
                    </div>
                </div>
                <!-- col3 121 mode end-->
                <div class="mb20"></div>
            	<div class="title_t pb20">
                    <span class="colorB1 size18">4</span><h4>保存照片</h4>
                </div>
                <!-- col3 121 -->
                <div class="col3_121 pb10">
                	<div class="col3_121_1">
                        <p class="pb10 end w100">选择"文件夹"→"保存"或"另存为"，保存前面
的调整操作。到此为止的调整结果并非直接修改原始照片，而是保存调整的操作，可随时再次调整，这也是DPP 
的特征。保存调整操作后，可以创建反映调整结果的新文件。单击"文件夹"→"转换并保存"将显示"转换并保存"的对话框，在此指定图像的保存位置和文件
名。推荐像"IMG_XXXX-1.JPG"这样，在原文件名之后添加详细编号。需要注意的是，创建JPEG图像时所设的文件名如果与原始文件名相同的
话，会覆盖原文件。</p>
                    </div>
                    <div class="col3_121_2">
                    	<img class="pb10" src="/new_static/course/images/application02_17.jpg">
                    </div>
                    <div class="col3_121_1 end">
                    	<img class="pb10" src="/new_static/course/images/application02_18.jpg">
                        <p class="pb10">创建反映之前调整结果的新照片。</p>
                    </div>
                </div>
                <!-- col3 121 mode end-->
                <div class="mb20"></div>
                <!-- gray_col col2_4-->
                <div class="gray_col colorG5 mb20">
                    <div class="title_t pb20">
                        <div class="prompt size18 colorB3">小提示</div>
                    </div>
                	<div class="gray_col2">
                        <div class="gray_col2_4">
                            <h5 class="pb10">整合处理多张照片</h5>
                            <div class="gray_c2_2_box">
                                <p>从主窗口画面选择多张照片后点击"编辑图像窗口"按钮，编辑图像窗口画面中会显示所选的多张照片。选择步骤4中的"批量处理"，可以一并调整多张照片的画质和尺寸，或变更文件名等。</p>
                            </div>
                            <div class="gray_c2_2_box end">
                                <img src="/new_static/course/images/application02_19.jpg" class="pb10">
                            </div>
                        </div>
                        <div class="gray_col2_4 end">
                            <h5 class="pb10">从编辑图像窗口画面返回时点击"主窗口"按钮</h5>
                            <div class="gray_c2_2_box">
                                <p>主窗口画面和编辑图像画面是同一窗口切换显示的，如果点击窗口右上的"关闭"按钮，则会退出DPP。从编辑图像画面切换到主窗口画面时需要点击"主窗口"按钮。</p>
                            </div>
                            <div class="gray_c2_2_box end">
                                <img src="/new_static/course/images/application02_11.jpg" class="pb10">
                            </div>
                        </div>
                    </div>
                </div><!-- gray_col col2_4 end-->
                <div class="mb20"></div>

                <div class="page">
                	<div class="page_prev"><a href="/course/application01"><img src="/new_static/course/images/page_prev.jpg">上一页</a></div><div class="page_next"><a href="/course/application03">下一页<img src="/new_static/course/images/page_next.jpg"></a></div>
                </div>
            </div></div>
</div>