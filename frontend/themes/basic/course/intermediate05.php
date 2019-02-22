<?php
/* @var $this yii\web\View */
$this->title="中级篇_ 理解ISO感光度";
?>
<?php echo $this->render('_page_js_css'); ?>
<div class="container">
        <?php echo $this->render('_course_top'); ?>
        <div class="contents">
        	<!-- Main title -->
            <div class="main_title pb20">
            	<div style="height: 112px;" class="title_box colorB">
                	<h2 style="margin-top: -6px;"><b>中级篇</b>
                    <strong class="size24">Lesson</strong>
                    <strong class="size60">25</strong>
                    </h2>
                </div>
                <div class="title_explanation colorG5">
                	<h3>理解ISO感光度</h3>
                    <p class="pb10">ISO 感光度是表示对亮度敏感程度的数值。数值越大表示在昏暗环境下成像可以更明亮。不过，ISO 感光度的使用方法可不仅仅只有这一种。</p>
                    <div class="crumbs"><a href="/course/">首页</a><em>&gt;</em><a href="intermediate.html">中级篇</a><em>&gt;</em>理解ISO感光度</div>
                </div>
            </div><!-- Main title end -->

            <div class="main_con clearC">
                <div class="title_t pb20">
                    <span class="colorB"></span><h4>ISO 感光度的作用和效果</h4>
                </div>
                <div class="mb0"></div>
                <!-- col2-->
                <div class="col2 pb10">
                    <div class="col2_box">
                        <h5 class="pb10">高ISO感光度拓展拍摄场景</h5>
                        <p class="pb20">ISO感光度作为相机术语，得到了广泛使用。ISO是
InternationalOrganization for 
Standardization的缩写，是国际标准化组织的英文简称。以前胶片的感光度被称为ISO感光度，有ISO 100、ISO 
400等种类。现在数码相机的ISO感光度也是一个意思，是CMOS图像感应器对光线的敏感度，也由ISO的数值表示。ISO的数值变大，相机对光线的敏
感度就会提高。例如，在一般需要用到闪光灯的暗光场景下，通过提高ISO感光度可以不使用闪光灯保留环境氛围。前面的章节已经讲了通过控制光圈调节景深
（虚化量），控制快门速度调节被摄体效果（定格、流动），光圈与快门速度组合得到的曝光（光量）再与ISO感光度相结合能够实现更加丰富的表现。</p>
                    </div>
                    <div class="col2_box end">
                        <h5 class="pb10">ISO感光度与曝光量的关系</h5>
                        <!-- table -->
                        <div class="table-container pb20">
                        <table id="table" class="sp_table" cellspacing="0">
                            <tbody><tr>
                            <td class="noborder"><b class="fontB">低</b></td><td class="noborder">←</td><td class="noborder">ISO感光度</td><td class="noborder">→</td><td class="noborder"><b class="fontB">高</b></td>
                            </tr>
                            <tr>
                                <td>ISO 100</td><td>&nbsp;</td><td>ISO 800</td><td>&nbsp;</td><td>ISO 3200</td>
                            </tr>
                            <tr>
                                <td><b class="fontB">多</b></td><td>←</td><td>曝光量</td><td>→</td><td><b class="fontB">少</b></td>
                            </tr>
                            <tr>
                                <td>F2 , 1/30 秒</td><td>&nbsp;</td><td>F4 , 1/60 秒</td><td>&nbsp;</td><td>F5.6 , 1/250 秒</td>
                            </tr>
                        </tbody></table>
                        </div><!-- table end -->
                        <p class="size13 pb10">上图表示ISO感光度与曝光的关系。曝光量由光圈与快门速度的组合决定。使用高ISO感光度时曝光量减少，低ISO感光度时曝光量增加。</p>
                    </div>
                </div><!-- col2 end -->
                <div class="mb20"></div>
                <!-- col2-->
                <div class="col2 pb10">
                    <div class="col2_box">
                        <img class="pb10" src="/new_static/course/images/intermediate05_01.jpg">
                        <h5 class="pb10">高ISO 感光度拍摄的示例</h5>
                        <p class="pb10">以高速快门定格演奏者的示例。为了不破坏气氛没有使用闪光灯，这是高ISO感光度才能拍下的暗光场景效果。</p>
                        <p class="size13 pb20">手动曝光（F4，1/800秒）／ISO 6400</p>
                    </div>
                    <div class="col2_box end">
                        <img class="pb10" src="/new_static/course/images/intermediate05_02.jpg">
                        <h5 class="pb10">低ISO 感光度拍摄的示例</h5>
                        <p class="pb10">将ISO感光度设低，收缩光圈以低速快门拍摄的示例。汽车头灯和尾灯发出的光形成具有流动感的线状。</p>
                        <p class="size13 pb20">光圈优先自动曝光（F25，1/25秒）／ ISO 100</p>
                    </div>
                </div><!-- col2 end -->
                <div class="mb0"></div>
                <div class="title_t pb20">
                    <span class="colorB"></span><h4>提高ISO 感光度可提高快门速度</h4>
                </div>
                <div class="mb0"></div>
                <!-- col3-->
                <div class="col3 pb10">
                    <div class="col3_l">
                        <div class="col3_box">
                            <img class="pb10" src="/new_static/course/images/intermediate05_03.jpg">
                            <h5 class="pb20">ISO 200，快门速度1/50秒拍摄示例</h5>
                        </div>
                        <div class="col3_box end">
                            <img class="pb10" src="/new_static/course/images/intermediate05_04.jpg">
                            <h5 class="pb20">ISO 800，快门速度1/200秒拍摄示例</h5>
                        </div>
                    </div>
                    <div class="col3_r">
                        <div class="col3_box end">
                        <p class="pb40">采用高ISO感光度可在昏暗场景下更好地拍摄，不过如果将高ISO感
光度用于明亮的场景，由于图像感应器在短时间内读入了更多的光信号，所以可以获得比低ISO感光度更高的快门速度。ISO感光度的默认设置为自动，相机会
根据拍摄场景自动选择ISO感光度。想要根据意图控制快门速度时，即使在白天，也可经常使用ISO 400。比如要用高速快门定格动态被摄体的情况下。</p>
                        <p class="size13 pb20">由于可以使用更高的快门速度，示例得以将模特跳跃的瞬间定格于画面中。ISO感光度的1级相当于快门速度的1级。</p>
                        </div>
                    </div>
                </div><!-- col3 end-->
                <div class="mb0"></div>
                <div class="title_t pb20">
                    <span class="colorB"></span><h4>高ISO 感光度下抑制噪点的多张拍摄降噪</h4>
                </div>
                <div class="mb0"></div>
                <!-- col2-->
                <div class="col2 pb10">
                    <div class="col2_box">
                        <h5 class="pb10">使用多张拍摄降噪功能拍摄的示例</h5>
                        <img class="pb10" src="/new_static/course/images/intermediate05_05.jpg">
                        <p class="size13 pb20">以ISO 12800拍摄也感觉不到明显的噪点，但利用多张拍摄降噪功能可以进一步减少噪点。</p>
                    </div>
                    <div class="col2_box end">
                        <h5 class="pb10">多张拍摄降噪功能有助于手持拍摄</h5>
                        <p class="pb20">噪点的本质是图像感应器将接收到的光信号转换为电子信号以及将信号进
行增幅时产生的多余电流造成的。一般是高ISO感光度下容易产生噪点。EOS数码相机采用了可高效抑制噪点产生的CMOS图像感应器，而且高性能的
DIGIC数字影像处理器也能有效去除噪点。例如搭载了DIGIC 5数字影像处理器的机型以ISO 6400拍摄也几乎不会产生明显的噪点，以ISO 
25600拍摄也能应对5寸打印。另外，2012年以后发售的相机搭载了能够进一步抑制噪点的多张拍摄降噪功能。多张拍摄降噪是释放一次快门连拍4张照
片，自动进行合成处理以实现降噪的功能。使用此功能以相同的ISO感光度对比通常拍摄的照片，可以看出噪点总量得到了大幅抑制。</p>
                    </div>
                </div><!-- col2 end -->
                <div class="mb0"></div>
                <!--gray_col-->
                <div class="gray_col colorG5 mb20">
                    <div class="title_t pb20">
                        <div class="prompt size18 colorB3">小提示</div>
                    </div>
                    <div class="gray_col3">
                        <div class="col3_l">
                            <div class="gray_c3_box pb10">
                                <div id="select1" class="col3_T select_img">
                                <img class="pb10 img_sel" src="/new_static/course/images/intermediate05_06.jpg">
                                <select>
                                    <option selected="selected" value="/new_static/course/images/intermediate05_06.jpg">ISO 100</option>
                                    <option value="/new_static/course/images/intermediate05_07.jpg">ISO 200</option>
                                    <option value="/new_static/course/images/intermediate05_08.jpg">ISO 400</option>
                                    <option value="/new_static/course/images/intermediate05_09.jpg">ISO 800</option>
                                    <option value="/new_static/course/images/intermediate05_10.jpg">ISO 1600</option>
                                    <option value="/new_static/course/images/intermediate05_11.jpg">ISO 3200</option>
                                    <option value="/new_static/course/images/intermediate05_12.jpg">ISO 6400</option>
                                    <option value="/new_static/course/images/intermediate05_13.jpg">ISO 12800</option>
                                    <option value="/new_static/course/images/intermediate05_14.jpg">ISO 25600</option>
                                </select>
                                </div>
                                <script>
                                    select_box('#select1',0)
                                </script>
                            </div>
                            <div class="gray_c3_box pb10 end">
                               <div id="select2" class="col3_T select_img">
                                <img class="pb10 img_sel" src="/new_static/course/images/intermediate05_14.jpg">
                                <select>
                                    <option value="/new_static/course/images/intermediate05_06.jpg">ISO 100</option>
                                    <option value="/new_static/course/images/intermediate05_07.jpg">ISO 200</option>
                                    <option value="/new_static/course/images/intermediate05_08.jpg">ISO 400</option>
                                    <option value="/new_static/course/images/intermediate05_09.jpg">ISO 800</option>
                                    <option value="/new_static/course/images/intermediate05_10.jpg">ISO 1600</option>
                                    <option value="/new_static/course/images/intermediate05_11.jpg">ISO 3200</option>
                                    <option value="/new_static/course/images/intermediate05_12.jpg">ISO 6400</option>
                                    <option value="/new_static/course/images/intermediate05_13.jpg">ISO 12800</option>
                                    <option selected="selected" value="/new_static/course/images/intermediate05_14.jpg">ISO 25600</option>
                                </select>
                                </div>
                                <script>
                                    select_box('#select2',8)
                                </script>
                            </div>
                        </div>
                        <div class="col3_r">
                            <div class="gray_c3_box end">
                                <h5 class="pb10">什么是噪点？</h5>
                                <p class="pb10">当采用高ISO感光度时，有时会发现图像上有实际没
有的斑点出现，这些斑点就是噪点。提高了ISO感光度，必须对信号进行电子放大增幅，在这个过程中所产生的杂质信号就是噪点。虽然无法完全消除噪点，但应
对5寸打印和智能手机浏览等日常使用没有问题。从同一位置拍摄，仅改变ISO感光度，对上面示例的红框部分进行放大显示，可以看出随着ISO感光度变化噪
点产生的具体情况。</p>
                            </div>
                        </div>
                    </div>
                </div><!--gray_col end-->

                <div class="page">
                	<div class="page_prev"><a href="/course/intermediate04"><img src="/new_static/course/images/page_prev.jpg">上一页</a></div><div class="page_next"><a href="/course/intermediate06">下一页<img src="/new_static/course/images/page_next.jpg"></a></div>
                </div>
            </div>
                <div style="clear:both"></div>
        </div>
</div>