<?php
/* @var $this yii\web\View */
$this->title="电脑运用篇_ 用电脑处理RAW图像";
?>
<?php echo $this->render('_page_js_css'); ?>
<div class="container">
        <?php echo $this->render('_course_top'); ?>
        <div class="contents">
        	<!-- Main title -->
            <div class="main_title pb20">
            	<div style="height: 112px;" class="title_box colorB1">
                	<h2 style="margin-top: -6px;">
                    <b>电脑运用篇</b>
                    <strong class="size24">Lesson</strong>
                    <strong class="size60">56</strong>
                    </h2>
                </div>
                <div class="title_explanation colorG5">
                	<h3>用电脑处理RAW图像</h3>
                    <p class="pb10">RAW 图像可在导入电脑后变更拍摄时相机上的项目，是方便的图像格式。推荐大家利用DigitalPhoto Professional 进行RAW 图像的编辑。</p>
                    <div class="crumbs"><a href="/course/">首页</a><em>&gt;</em><a href="application.html">电脑运用篇</a><em>&gt;</em>用电脑处理RAW图像</div>
                </div>
            </div><!-- Main title end -->

            <div class="main_con clearC">
            	<div class="title_t pb20">
                    <span class="colorB1"></span><h4>重要场景下推荐拍摄RAW图像</h4>
                </div>
                <!-- col3 -->
                <div class="col3">
                	<div class="col3_l">
                        <div class="col3_box">
                            <p>RAW正如其在英语中的意思——"生的（未加工的）"，是将通过镜头在图像感应器上成像
的图像，不经过相机内加工而保存下来的数据。使用JPEG拍摄时按下快门按钮就能得到漂亮的照片效果。而用RAW拍摄的图像可以在电脑上进行多种调整，以
获得更符合意图的照片。此外，JPEG的图像如果后期调节画质会变差，但RAW图像怎么调画质都几乎不会受影响。拍摄结婚典礼等不容失败的重要场景时，推
荐使用RAW来进行拍摄。</p>
                        </div>
                        <div class="col3_box end">
                            <img src="/new_static/course/images/application03_01.jpg" class="pb10">
                        </div>
                    </div>
                	<div class="col3_box end">
                            <p class="size13 pb10">从图像画质中选择"RAW+L"或"RAW"可保存RAW图像。一般选择同时保存JPEG图像的"RAW+L"即可。</p>
                    </div>
                </div>
                <!-- col3 end-->
                <div class="mb20"></div>
            	<div class="title_t pb20">
                    <span class="colorB1"></span><h4>RAW能够处理与不能处理的地方</h4>
                </div>
                <p class="pb10">拍成RAW的图像还能改变多种设置。但是，也有些设置必须在拍摄时设置好，因此需要熟
练掌握后期什么可以处理什么不能处理。虽然过于依赖之后的调整是大忌，但拍摄的自由度确实大大提高了。另外，感觉没拍好的照片也有可能通过RAW显像挽
回，在电脑上尝试拍摄时未想到的设置，也许会有意想不到的新发现。掌握了RAW显像什么能调什么不能调，可以在拍摄后进一步体验编辑照片的乐趣。</p>
                <!-- col2 -->
                <div class="col2">
                    <div class="col2_box">
                        <h5 class="pb10">RAW图像可变更的设置</h5>
                        <!-- table -->
                        <div class="table-container pb10">
                            <table id="table" style="text-align:left;" cellspacing="0">
                                <tbody><tr>
                                    <td class="noborder">白平衡</td><td class="noborder">RAW显像时可完全改变拍摄时的白平衡设置。姑且先用自动白平衡拍摄，之后再寻找喜欢的色调也是个好办法。</td>
                                </tr>
                                <tr>
                                    <td>照片风格</td><td>所有选项都能在RAW显像时重新设置。JPEG拍摄的单色图像之后便无法恢复成彩色，但RAW则可以。</td>
                                </tr>
                                <tr>
                                    <td>锐度</td><td>可以进行细致的调整。拍摄时也可设置锐度，不过拍摄后仍可调节强弱。</td>
                                </tr>
                                <tr>
                                    <td>对比度</td><td>能使照片更加鲜明的对比度也可在RAW显像时设置。可根据打印或上传网络等不同目的，或所需文件大小来进行调节。</td>
                                </tr>
                                <tr>
                                    <td>饱和度</td><td>从浓郁的色彩，到接近单色的清淡色调，都可自由控制。相机内也有9级可调，不过建议通常设置为默认，在RAW显像时再更改。</td>
                                </tr>
                                <tr>
                                    <td>色调</td><td>和"饱和度"一样有9级可调节。从红到蓝均可控制。这点也可以在拍摄时设置为"默认"，RAW显像时再进行调节。</td>
                                </tr>
                                <tr>
                                    <td>色彩空间</td><td>sRGB和Adobe RGB可选。一般使用sRGB就可以了。Adobe RGB用于打印 ，是能还原较广色域（色彩范围）的色彩空间。</td>
                                </tr>
                                <tr>
                                    <td>曝光补偿</td><td>RAW显像时可在±2EV范围内进行补偿。但是，完全高光溢出或暗部缺失的部分则无法补偿，拍摄时要对曝光多加注意。</td>
                                </tr>
                            </tbody></table>
                        </div>
                        <!-- table end -->
                    </div>
                    <div class="col2_box end">
                        <h5 class="pb10">RAW图像不可变更的设置</h5>
                        <!-- table -->
                        <div class="table-container pb10">
                            <table id="table" style="text-align:left;" cellspacing="0">
                                <tbody><tr>
                                    <td class="noborder" width="30%">光圈</td><td class="noborder">开大光圈虚化背景，或缩小光圈整体合焦，均需在拍摄时考虑并设置好。</td>
                                </tr>
                                <tr>
                                    <td width="30%">快门速度</td><td>追随拍摄或用高速快门定格高速运动被摄体，也需要在拍摄时考虑好。</td>
                                </tr>
                                <tr>
                                    <td width="30%">ISO感光度</td><td>要根据曝光量和表现意图在拍摄时就决定好ISO感光度。</td>
                                </tr>
                                <tr>
                                    <td width="30%">对焦模糊、手抖动</td><td>调节锐度虽然多少可以改善，但没有根本的补救方法。因此要握稳相机，合好焦后再拍摄。</td>
                                </tr>
                            </tbody></table>
                        </div>
                        <!-- table end -->
                    </div>
                </div>
                <!-- col2 end -->
                <div class="mb20"></div>
                <!--gray_col-->
                <div class="gray_col colorG5 mb20">
                    <div class="title_t pb20">
                        <div class="prompt size18 colorB3">小提示</div>
                    </div>
                    <div class="gray_col3">
                    <div class="col3_r mr20">
                        <div class="gray_c3_box end">
                            <h5 class="pb10">从DPP的缩略图一览中找到RAW图像</h5>
                            <p class="pb10">记录画质选择"RAW+L"时会同时保存RAW和JPEG图像。DPP的缩略图一览中会并列显示文件名相同的2张图像。可以通过缩略图左下的图标确认哪张是RAW图像。标示"RAW"图标的图像为RAW。</p>
                        </div>
                    </div>
                    <div class="col3_l end">
                        <div class="gray_c3_box">
                            <img src="/new_static/course/images/application03_02.jpg" class="pb10">
                        </div>
                        <div class="gray_c3_box end">
                            <p class="size13">也可以根据文件名的扩展名来确认。RAW图像的扩展名为"CR2"，JPEG图像的扩展名为"JPG"。</p>
                        </div>
                    </div>
                    </div>
                </div><!--gray_col end-->
                <div class="mb20"></div>
            	<div class="title_t pb20">
                    <span class="colorB1"></span><h4>编辑RAW图像</h4>
                </div>
                <!-- col3 -->
                <div class="col3 pb10">
                    <div class="col3_r mr20">
                        <div class="col3_box end">
                            <p class="size13 pb20">编辑RAW图像时，需要在编辑图像窗口进行操
作。只需从DPP的缩略图一览画面中选择所需图像文件的缩略图后，点击"编辑图像窗口"，即可切换到"编辑图像窗口"。所选的RAW图像便成为可编辑状
态。在此可以确认编辑RAW图像要用的工具调色板的名称。未显示工具调色板的情况下，可以在"编辑图像窗口"中点击"工具调色板"按钮。</p>
                        </div>
                    </div>
                    <div class="col3_l end">
                        <div class="col3_box">
                            <img src="/new_static/course/images/application03_03.jpg" class="pb10">
                            <p class="size13 pb20">选择目标RAW图像，点击主窗口画面左上的"编辑图像窗口"按钮。</p>
                        </div>
                        <div class="col3_box end">
                        <img src="/new_static/course/images/application03_04.jpg" class="pb10">
                        <p class="size13 pb20">切换到编辑图像窗口画面。未显示工具调色板时，请点击"工具调色板"按钮。</p>
                        </div>
                    </div>
                </div><!-- col3 end -->
                <div class="mb0"></div>
                <!-- slider0 -->
            	<div class="title_t pb20">
                    <span class="colorB1"></span><h4>工具调色板各部分的名称与功能</h4>
                </div>
                <div class="pb10"></div>
    			<div id="slider0" class="pb20">
                    <div class="slider_thumbnails">
                        <a id="prev" onclick="prevClick('#slider0',0)"><img src="/new_static/course/images/prev.png"></a>
                        <div class="slider_list">
                            <style>
                                .slider_list ul li.active i{border:4px solid #1DB3B8;}
                            </style>
                            <ul style="width: 840px;">
                                <li class="active"><i data_gpsx="30%" data_gpsy="0%" data_src="/new_static/course/images/application03_06_b.jpg" data_src1="/new_static/course/images/noimg.png" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;亮度调节&lt;/strong&gt;&lt;p class='pb10'&gt;可进行±2级的亮度调节。曝光太亮或太暗时可拖动滑块进行调整。调节到噪点不会太显眼的程度即可。为此拍摄时也要注意曝光不要失败。&lt;/p&gt;"></i><img src="/new_static/course/images/application03_06_s.jpg"></li>
                                <li><i data_gpsx="30%" data_gpsy="27%" data_src="/new_static/course/images/application03_08_b.jpg" data_src1="/new_static/course/images/application03_13.jpg" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;图片样式（照片风格）&lt;/strong&gt;&lt;p class='pb10'&gt;像享受胶卷个性的乐趣般，可以根据被摄体选择适当的模式。一开始显示为相机中设置的照片风格。&lt;/p&gt;"></i><img src="/new_static/course/images/application03_08_s.jpg"></li>
                                <li><i data_gpsx="43%" data_gpsy="43%" data_src="/new_static/course/images/application03_09_b.jpg" data_src1="/new_static/course/images/noimg.png" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;动态范围调节&lt;/strong&gt;&lt;p class='pb10'&gt;一张照片中过亮的部分会产生高光溢出，过暗的部分会出现暗部缺失。简单来说动态范围调节就是将图像调节为介于高光溢出与暗部缺失之间的亮度。利用"动态范围调节"工具上下拖拽横轴或左右拖拽纵轴可调节图像的动态范围。&lt;/p&gt;"></i><img src="/new_static/course/images/application03_09_s.jpg"></li>
                                <li><i data_gpsx="33%" data_gpsy="62%" data_src="/new_static/course/images/application03_10_b.jpg" data_src1="/new_static/course/images/noimg.png" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;对比度、高光、阴影&lt;/strong&gt;&lt;p class='pb10'&gt;"对比度"可同时调节图像明暗部的亮度。"高光"只调节亮部的亮度。"阴影"只调节暗部的亮度。&lt;/p&gt;"></i><img src="/new_static/course/images/application03_10_s.jpg"></li>
                                <li><i data_gpsx="33%" data_gpsy="81%" data_src="/new_static/course/images/application03_12_b.jpg" data_src1="/new_static/course/images/noimg.png" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;非锐化滤镜（强度、精细度、临界值）&lt;/strong&gt;&lt;p class='pb10'&gt;"强度"是强调轮廓的功能。向右拖动滑块轮廓更清晰。"精细度"可调整轮廓线的粗细。"临界值"可用来设置轮廓线的对比度差。&lt;/p&gt;"></i><img src="/new_static/course/images/application03_12_s.jpg"></li>
                                <li><i data_gpsx="33%" data_gpsy="74%" data_src="/new_static/course/images/application03_11_b.jpg" data_src1="/new_static/course/images/noimg.png" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;色调、颜色饱和度&lt;/strong&gt;&lt;p class='pb10'&gt;"色调"可以调节肤色等的颜色。向右拖动滑块加强黄色，向左拖动加强红色。"颜色饱和度"是图像色彩调节饱和度的功能。向右拖动滑块颜色变得浓重，向左拖动颜色变浅。&lt;/p&gt;"></i><img src="/new_static/course/images/application03_11_s.jpg"></li>
                                <li><i data_gpsx="32%" data_gpsy="13%" data_src="/new_static/course/images/application03_07_b.jpg" data_src1="/new_static/course/images/application03_15.jpg" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;白平衡调节&lt;/strong&gt;&lt;p class='pb10'&gt;基本上拍摄时用自动就能得到漂亮的色彩，不过想得到更正确的色调或营造出夕阳、室内等氛围时，便可以再加以调节，从而寻找自己满意的色彩。&lt;/p&gt;"></i><img src="/new_static/course/images/application03_07_s.jpg"></li>
                                <li><i data_gpsx="55%" data_gpsy="17%" data_src="/new_static/course/images/application03_14.jpg" data_src1="/new_static/course/images/noimg.png" data_cap="&lt;strong class='size16 blackcolor pb10'&gt;白平衡调节（调谐）&lt;/strong&gt;&lt;p class='pb10'&gt;"调谐"可以对白平衡进行细微调整。可以调整色调和颜色饱和度。&lt;/p&gt;"></i><img src="/new_static/course/images/application03_07_s.jpg"></li>
                            </ul>
                        </div>
                        <a id="next" onclick="nextClick('#slider0',0)"><img src="/new_static/course/images/next.png"></a>
                    </div>
                    <div class="pb20"></div>
                    <div style="clear:both"></div>
                	<div class="slider_camera mb20">
                    	<div style="top: 0%; left: 30%;" class="mask colorB1"></div>
                        <div class="camera_img"><img src="/new_static/course/images/application03_05.jpg"></div>
                    </div>
                    <div class="slider_caption">
                    	<div class="caption_txt">
                    		<strong class="size16 blackcolor pb10">亮度调节</strong>
                        	<p class="pb10">可进行±2级的亮度调节。曝光太亮或太暗时可拖动滑块进行调整。调节到噪点不会太显眼的程度即可。为此拍摄时也要注意曝光不要失败。</p>
                        </div>
                        <div class="caption_img">
                        	<div class="caption_img_l">
                            	<img src="/new_static/course/images/application03_06_b.jpg">
                            </div>
                            <div class="caption_img_r">
                            	<img src="/new_static/course/images/noimg.png">
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="mb0"></div>
                </div>
                <!-- slider0 end -->
                <div class="mb20"></div>
                <!--gray_col-->
                <div class="gray_col colorG5 mb20">
                    <div class="title_t pb20">
                        <div class="prompt size18 colorB3">小提示</div>
                    </div>
                    <div class="gray_col3">
                    <div class="col3_r mr20">
                        <div class="gray_c3_box end">
                            <h5 class="pb10">调整照片的"NR/ALO"工具调色板</h5>
                            <p class="pb10">"NR/ALO"工具调色板中有减少噪点，以及调整照片层次等功能。只需拖动滑块操作即可。点击"NR/ALO"工具调色板中的"NR预览"按钮显示"NR预览"窗口，可以边查看放大的照片边调整。</p>
                        </div>
                    </div>
                    <div class="col3_l end">
                        <div class="gray_c3_box">
                            <img src="/new_static/course/images/application03_16.jpg" class="pb10">
                        </div>
                        <div class="gray_c3_box end">
                            <img src="/new_static/course/images/application03_17.jpg" class="pb10">
                            <p class="pb10">放大显示右侧照片中有鼠标光标的位置。</p>
                        </div>
                    </div>
                    </div>
                </div><!--gray_col end-->
                <div class="mb20"></div>

                <div class="page">
                	<div class="page_prev"><a href="/course/application02"><img src="/new_static/course/images/page_prev.jpg">上一页</a></div><div class="page_next"><a href="/course/application04">下一页<img src="/new_static/course/images/page_next.jpg"></a></div>
                </div>
            </div></div>
</div>