<?php
/* @var $this yii\web\View */
$this->title="中级篇_  理解光圈";
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
                    <strong class="size60">23</strong>
                    </h2>
                </div>
                <div class="title_explanation colorG5">
                	<h3>理解光圈</h3>
                    <p class="pb10">光圈是位于镜头内部的小叶片互相重叠构成的光孔。虽然体积非常小，但在决定照片的最终效果方面却起着不可或缺的重要作用。</p>
                    <div class="crumbs"><a href="/course/">首页</a><em>&gt;</em><a href="intermediate.html">中级篇</a><em>&gt;</em>理解光圈</div>
                </div>
            </div><!-- Main title end -->

            <div class="main_con clearC">
                <div class="title_t pb20">
                    <span class="colorB"></span><h4>光圈的作用和效果</h4>
                </div>
                <div class="mb0"></div>
                <h5 class="pb10">在调整光量的同时对背景虚化进行控制</h5>
                <p class="pb10">镜头内置的光圈可根据其开闭程度调整图像感应器的受光量，是非常重要的部件。如光圈打
开，则使大量光线通过；如光圈缩小，则可限制通光量。其打开比例被称为光圈值，该数值与光圈的开合关系如下图所示。光圈不仅起到调节光量的作用，而且还具
有调整合焦范围的功能。受光圈和镜头结构的影响，当光圈开得较大时仅合焦于主被摄体，当光圈开得较小时可对更广范围合焦。这个合焦范围被称为"景深"。在
拍摄照片时，不管我们是否意识到，光圈总是以一定的形式影响照片的效果。相机内置的多种场景模式就利用了光圈的该特性，人像模式下自动采用大光圈以使背景
虚化，而风光模式则缩小光圈以对画面整体合焦。如果掌握了光圈的使用方法，照片的质量会得到飞跃性的提高。这充分证明了光圈所具备功能的重要性。</p>
                <div class="mb20"></div>
                <!-- col2-->
                <div class="col2 pb10">
                    <div class="col2_box">
                        <h5 class="pb10">光圈全开的示例</h5>
                        <img class="pb10" src="/new_static/course/images/intermediate03_01.jpg">
                        <p class="pb10">全开光圈拍摄时，合焦范围缩小，其结果是使背景有效虚化。</p>
                        <p class="size13 pb20">光圈优先自动曝光（F1.8，1/1000秒）</p>
                    </div>
                    <div class="col2_box end">
                        <h5 class="pb10">光圈叶片状态</h5>
                        <!-- table -->
                        <div class="table-container pb20">
                        <table id="table" cellspacing="0">
                            <tbody><tr>
                            <td class="noborder"><b class="fontB">打开</b></td><td class="noborder">←</td><td class="noborder">光圈叶片</td><td class="noborder">→</td><td class="noborder"><b class="fontB">缩小</b></td>
                            </tr>
                            <tr>
                                <td><img class="pb10 imgW" src="/new_static/course/images/intermediate03_14.jpg">F2.8</td><td>&nbsp;</td><td><img class="pb10 imgW" src="/new_static/course/images/intermediate03_15.jpg">F5.6</td><td>&nbsp;</td><td><img class="pb10 imgW" src="/new_static/course/images/intermediate03_16.jpg">F22</td>
                            </tr>
                            <tr>
                                <td><b class="fontB">小</b></td><td>←</td><td>光圈值</td><td>→</td><td><b class="fontB">大</b></td>
                            </tr>

                        </tbody></table>
                        </div>
                        <p class="pb20">光圈值是表示光圈叶片关闭程度大小的单位。因此，随着光圈缩小，光圈值逐渐增大。此外，在表述光圈打开状态的时候，根据光圈孔径的不同，称之为打开光圈或缩小光圈。</p>
                        <h5 class="pb10">缩小光圈的示例</h5>
                        <img class="pb10" src="/new_static/course/images/intermediate03_02.jpg">
                        <p class="pb10">缩小光圈拍摄时，对由近及远的大范围合焦。如果配合使用广角镜头，效果会更好。</p>
                        <p class="size13 pb20">光圈优先自动曝光（F11，1/320秒）</p>
                    </div>
                </div><!-- col2 end -->
                <div class="mb0"></div>
                <div class="title_t pb20">
                    <span class="colorB"></span><h4>注意避免光圈过小</h4>
                </div>
                <div class="mb0"></div>
                <p class="pb20">根据光圈设置的不同，可能会导致画质降低。光圈过小时会出现衍射现象，这是由于光线在光圈叶片的周围出现了漫反射，即因光圈过小使光线通道出口狭小而产生的现象。通常当拍摄风景等希望对大范围进行合焦并清晰成像时，一般用F8-11的光圈就比较合适。</p>
                <div class="mb0"></div>
                <!-- col3-->
                <div class="col3 pb10">
                    <div class="col3_l">
                        <div class="col3_box">
                            <img class="pb10" src="/new_static/course/images/intermediate03_04.jpg">
                            <h5 class="pb20">F8时</h5>
                        </div>
                        <div class="col3_box end">
                            <img class="pb10" src="/new_static/course/images/intermediate03_05.jpg">
                            <h5 class="pb20">F22时</h5>
                        </div>
                    </div>
                    <div class="col3_box end">
                            <img class="pb10" src="/new_static/course/images/intermediate03_03.jpg">
                            <p class="size13 pb20">将相机固定，改变光圈从同一位置拍摄，并对图像中红框部分进行放大显示。在本示例中，F8比F22拍摄得更锐利。</p>
                    </div>
                </div><!-- col3 end-->
                <div class="mb0"></div>
                <div class="title_t pb20">
                    <span class="colorB"></span><h4>何谓镜头的最大光圈？</h4>
                </div>
                <div class="mb0"></div>
                <!-- col3-->
                <div class="col3 pb10">
                    <div class="col3_l">
                        <div class="col3_box">
                            <p class="pb10">镜头的最大光圈是由镜头有效口径及镜头焦距所决定的。但通常用于表示光圈全开时亮度的最大光圈，其数值越小则越有利于在昏暗场所的拍摄。另外，大多数变焦镜头的最大光圈随焦距的变化而变。</p>
                        </div>
                        <div class="col3_box end">
                            <img class="pb10" src="/new_static/course/images/intermediate03_06.jpg">
                        </div>
                    </div>
                    <div class="col3_r">
                        <div class="col3_box end">
                            <p class="size13 pb20">当光圈为F3.5时，镜头上表示为"1:3.5"。如变焦镜头上表示为"1:3.5-5.6"的话，则意味着其广角端的最大光圈为F3.5，而远摄端的最大光圈为F5.6。</p>
                        </div>
                    </div>
                </div><!-- col3 end-->
                <div class="mb0"></div>
                <!--gray_col-->
                <div class="gray_col colorG5 mb20">
                    <div class="title_t pb20">
                        <div class="prompt size18 colorB3">小提示</div>
                    </div>
                    <div class="gray_col3">
                        <div class="col3_l">
                            <div class="gray_c3_box">
                              <div id="select1" class="col3_T select_img">
                                <img class="pb10 img_sel" src="/new_static/course/images/intermediate03_07.jpg">
                                <select>
                                    <option selected="selected" value="/new_static/course/images/intermediate03_07.jpg">F2.8</option>
                                    <option value="/new_static/course/images/intermediate03_08.jpg">F4</option>
                                    <option value="/new_static/course/images/intermediate03_09.jpg">F5.6</option>
                                    <option value="/new_static/course/images/intermediate03_10.jpg">F8</option>
                                    <option value="/new_static/course/images/intermediate03_11.jpg">F11</option>
                                    <option value="/new_static/course/images/intermediate03_12.jpg">F16</option>
                                    <option value="/new_static/course/images/intermediate03_13.jpg">F22</option>
                                </select>
                                </div>
                                <script>
                                    select_box('#select1',0)
                                </script>
                            </div>
                            <div class="gray_c3_box end">
                                <div id="select2" class="col3_T select_img">
                                <img class="pb10 img_sel" src="/new_static/course/images/intermediate03_13.jpg">
                                <select>
                                    <option value="/new_static/course/images/intermediate03_07.jpg">F2.8</option>
                                    <option value="/new_static/course/images/intermediate03_08.jpg">F4</option>
                                    <option value="/new_static/course/images/intermediate03_09.jpg">F5.6</option>
                                    <option value="/new_static/course/images/intermediate03_10.jpg">F8</option>
                                    <option value="/new_static/course/images/intermediate03_11.jpg">F11</option>
                                    <option value="/new_static/course/images/intermediate03_12.jpg">F16</option>
                                    <option selected="selected" value="/new_static/course/images/intermediate03_13.jpg">F22</option>
                                </select>
                                </div>
                                <script>
                                    select_box('#select2',6)
                                </script>
                            </div>
                        </div>
                        <div class="col3_r">
                            <div class="gray_c3_box end">
                                <h5 class="pb10">合焦范围随光圈变化</h5>
                                <p class="pb20">示例是对最前方的啤酒瓶标签对焦，并采用不同光圈拍摄得到的照片。可以看出，随着光圈变小，合焦范围不断扩大，这就是景深的变化。通常用景深大、小来表示合焦范围的大小。</p>
                            </div>
                        </div>
                    </div>
                </div><!--gray_col end-->
                <div class="mb0"></div>

                <div class="page">
                	<div class="page_prev"><a href="/course/intermediate02"><img src="/new_static/course/images/page_prev.jpg">上一页</a></div><div class="page_next"><a href="/course/intermediate04">下一页<img src="/new_static/course/images/page_next.jpg"></a></div>
                </div>
            </div>
                <div style="clear:both"></div>
        </div>
</div>