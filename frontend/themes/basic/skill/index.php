<?php
/* @var $this yii\web\View */
$this->title="摄影技巧";
?>
<link href="/new_static/css/css.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" language="javascript">
    function g(o){return document.getElementById(o);}
    function HoverLi(n){
    //如果有N个标签,就将i<=N;
    for(var i=1;i<=4;i++){g('tb_'+i).className='normaltab';g('tbc_0'+i).className='undis';}g('tbc_0'+n).className='dis';g('tb_'+n).className='hovertab';
    }
</script>  
<div class="diaBox">
<div class="diapage">
    <div class="diapageT">  
            <div class="diapageTC">  
               <p><a href="./">首页</a> >>摄影技巧</p>
               <div class="fx">
                    <!-- JiaThis Button BEGIN -->
                    <div id="ckepop">
                    <span class="jiathis_txt">分享到：</span>
                    <a class="jiathis_button_weixin">微信</a>
                    <a class="jiathis_button_qzone">QQ空间</a>
                    <a class="jiathis_button_tsina">新浪微博</a>
                    <a class="jiathis_button_renren">人人网</a> 
                    <a href="http://www.jiathis.com/share"  class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
                    <a class="jiathis_counter_style"></a> </div> 
                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
                    </div>
                    <!-- JiaThis Button END -->
               </div>
           </div>
     <div class="diapageB">
         <div class="diapageBC1">  
            <div class="skillT">
                <div class="skillT2">
                    <a href="javascript:void(0);" id="tb_1" <?php if($subNav==1) echo "class='hovertab'";?> onclick="x:HoverLi(1);">名词解释</a>
                    <a href="javascript:void(0);" id="tb_2" <?php if($subNav==2) echo "class='hovertab'";?>  onclick="i:HoverLi(2);">器材基础</a>
                    <a href="javascript:void(0);" id="tb_3" <?php if($subNav==3) echo "class='hovertab'";?>  onclick="a:HoverLi(3);">拍摄技巧</a>
                    <a href="javascript:void(0);" id="tb_4" <?php if($subNav==4) echo "class='hovertab'";?>  onclick="o:HoverLi(4);">后期处理</a>
                </div>
            </div>
           <!--名词解释_Action-->
             <div <?php echo  $subNav==1 ? "class='dis'" : "class='undis'";?> id="tbc_01">
                 <div class="skillListL">
                    <div class="skillListBox">
                        <h3>数码相机分类</h3>
                        <a target="_blank" href="/skill/view?id=1">单反相机</a><span>|</span><a target="_blank" href="/skill/view?id=2">卡片相机</a><span>|</span><a target="_blank" href="/skill/view?id=3">长焦相机</a><span>|</span><a target="_blank" href="/skill/view?id=4">家用相机</a><br />
                        <h3>数码相机硬件</h3>
                        <strong>感光器件</strong><br />
                        <a target="_blank" href="/skill/view?id=5">CCD</a><span>|</span><a target="_blank" href="/skill/view?id=6">CMOS</a><span>|</span><a target="_blank" href="/skill/view?id=7">CCD尺寸</a><span>|</span><a target="_blank" href="/skill/view?id=8">CCD和CMOS的差异</a><br />
                        <strong>镜头</strong><br />
                        <a target="_blank" href="/skill/view?id=9">镜头类型</a><span>|</span><a target="_blank" href="/skill/view?id=10">镜头性能</a><span>|</span><a target="_blank" href="/skill/view?id=11">镜头结构</a><span>|</span><a target="_blank" href="/skill/view?id=12">镜头标识</a><br />
                        <a target="_blank" href="/skill/view?id=13">标准镜头</a><span>|</span><a target="_blank" href="/skill/view?id=14">长焦镜头</a><span>|</span><a target="_blank" href="/skill/view?id=15">广角镜头</a><span>|</span><a target="_blank" href="/skill/view?id=16">鱼眼镜头</a><br />
                        <a target="_blank" href="/skill/view?id=17">微距镜头</a><span>|</span><a target="_blank" href="/skill/view?id=18">增距镜头</a><span>|</span><a target="_blank" href="/skill/view?id=19">变焦镜头</a><span>|</span><a target="_blank" href="/skill/view?id=20">定焦镜头</a><br />
                        <a target="_blank" href="/skill/view?id=21">柔焦镜头</a><span>|</span><a target="_blank" href="/skill/view?id=22">防抖镜头</a><span>|</span><a target="_blank" href="/skill/view?id=23">折返镜头</a><span>|</span><a target="_blank" href="/skill/view?id=24">移轴镜头</a><br />
                        <a target="_blank" href="/skill/view?id=25">UV镜头</a><span>|</span><a target="_blank" href="/skill/view?id=26">偏振镜头</a><span>|</span><a target="_blank" href="/skill/view?id=27">滤色镜头</a><br />
                        <strong><a target="_blank" href="/skill/view?id=28">显示屏</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=29">取景器</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=30">快门键</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=31">闪光灯</a></strong> 
                    </div>
                 </div>
                 <div class="skillListC">
                   <div class="skillListBox">
                            <strong>电池</strong><br />
                            <a target="_blank" href="/skill/view?id=32">电池类型</a><span>|</span><a target="_blank" href="/skill/view?id=33">电池使用时间</a><br />
                    <strong>存储卡</strong><br />
                            <a target="_blank" href="/skill/view?id=34">存储卡类型</a><span>|</span><a target="_blank" href="/skill/view?id=35">SD卡</a><span>|</span><a target="_blank" href="/skill/view?id=36">CF卡</a><span>|</span><a target="_blank" href="/skill/view?id=37">xD卡</a><span>|</span><a target="_blank" href="/skill/view?id=38">SDHC卡</a><span>|</span><a target="_blank" href="/skill/view?id=39">MMC卡</a><span>|</span><a target="_blank" href="/skill/view?id=40">记忆棒</a><br />
                            <strong><a target="_blank" href="/skill/view?id=41">数据接口</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=42">附带软件</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=43">随机附件</a></strong><br />
                            <h3>数码相机性能</h3>
                            <a target="_blank" href="/skill/view?id=44">像素</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=45">分辨率</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=46">图像格式</a><br/><strong>变焦</strong><br />
                            <a target="_blank" href="/skill/view?id=47">光学变焦</a><span>|</span><a target="_blank" href="/skill/view?id=48">数字变焦</a><br />
                          <strong><a target="_blank" href="/skill/view?id=49">光圈</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=50">快门速度</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=51">光圈和快门的组合</a>&nbsp;<br />
                     <a target="_blank" href="/skill/view?id=52">感光度</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=53">白平衡</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=54">焦距</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=55">景深</a></strong>
                   </div>
                 </div>
                 <div class="skillListR">
                   <div class="skillListBox">
                        <strong>曝光</strong><br />
                        <a target="_blank" href="/skill/view?id=56">曝光模式</a><span>|</span><a target="_blank" href="/skill/view?id=57">曝光补偿</a><span>|</span><a target="_blank" href="/skill/view?id=58">包围曝光</a><br />
                        <a target="_blank" href="/skill/view?id=59">测光</a><span>|</span><a target="_blank" href="/skill/view?id=60">闪光模式</a><br />
                        <strong>对焦</strong><br />
                        <a target="_blank" href="/skill/view?id=61">对焦方式</a><span>|</span><a target="_blank" href="/skill/view?id=62">如何正确对焦</a><span>|</span><a target="_blank" href="/skill/view?id=63">脸部识别技术</a><br />
                        <strong><a target="_blank" href="/skill/view?id=64">防抖性能</a></strong><br />
                        <a target="_blank" href="/skill/view?id=65">光学防抖</a><span>|</span><a target="_blank" href="/skill/view?id=66">电子防抖</a><span>|</span><a target="_blank" href="/skill/view?id=67">数码防抖</a><span>|</span><a target="_blank" href="/skill/view?id=68">自然防抖</a><br />
                        <a target="_blank" href="/skill/view?id=69">双重防抖</a><br />
                    <strong><a target="_blank" href="/skill/view?id=70">色差与紫边</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=71">噪点</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=72">Auto/A/S/P/M档</a><br />  
                        <a target="_blank" href="/skill/view?id=73">场景模式</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=74">连拍</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=75">自拍</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=76">短片拍摄</a>&nbsp;<br />
            <a target="_blank" href="/skill/view?id=77">遥控功能</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="/skill/view?id=78">视频输出</a></strong>
                    </div>
                 </div>
             </div>
           <!--名词解释_End-->
           <!--器材基础_Action-->
             <div <?php echo  $subNav==2 ? "class='dis'" : "class='undis'";?> id="tbc_02">
                 <div class="skillListL">
                    <div class="skillListBox">
                        <strong>器材使用技巧</strong><br />
                        <a target="_blank" href="/skill/view?id=79">稳住相机</a><span>|</span><a target="_blank" href="/skill/view?id=80">选择测光模式</a><span>|</span><a target="_blank" href="/skill/view?id=81">设置感光度</a><br />
                        <strong>控制快门</strong><br />
                        <a target="_blank" href="/skill/view?id=82">如何控制快门</a><span>|</span><a target="_blank" href="/skill/view?id=83">如何提高快门速度</a><span>|</span><a target="_blank" href="/skill/view?id=84">巧用快门拍动体</a><br />
                        <strong>控制景深</strong><br />
                        <a target="_blank" href="/skill/view?id=85">景深入门</a><span>|</span><a target="_blank" href="/skill/view?id=86">虚实玩景深</a><br />
                        <strong>正确曝光</strong><br />
                        <a target="_blank" href="/skill/view?id=87">如何正确曝光</a><span>|</span><a target="_blank" href="/skill/view?id=88">曝光补偿的运用</a><br />
                        <a target="_blank" href="/skill/view?id=89">调整白平衡</a><span>|</span><a target="_blank" href="/skill/view?id=90">精确对焦</a><span>|</span><a target="_blank" href="/skill/view?id=91">虚化背景</a>
                    </div>
                 </div>
                 <div class="skillListC">
                   <div class="skillListBox">
                            <h3>配件使用技巧</h3>
                            <strong>使用闪光灯</strong><br />
                            <a target="_blank" href="/skill/view?id=92">闪光灯基础知识</a><span>|</span><a target="_blank" href="/skill/view?id=93">闪光灯距离</a><span>|</span><a target="_blank" href="/skill/view?id=94">外置闪光灯</a><br />
                            <a target="_blank" href="/skill/view?id=95">内置闪光灯</a><span>|</span><a target="_blank" href="/skill/view?id=96">闪光与自然光混合</a><span>|</span><a target="_blank" href="/skill/view?id=97">闪光灯消除投影</a><span>|</span><a target="_blank" href="/skill/view?id=98">闪光灯拍微距</a><br />
                            <h3><a target="_blank" href="/skill/view?id=99" class="gr">使用反光板</a></h3>
                            <h3>用光构图技巧</h3>
                            <strong>用光技巧</strong><br />
                            <a target="_blank" href="/skill/view?id=100">光线的运用</a><span>|</span><a target="_blank" href="/skill/view?id=101">用好现场光</a><span>|</span><a target="_blank" href="/skill/view?id=102">灯光摆布</a><br />
                            <a target="_blank" href="/skill/view?id=103">逆光拍摄效果</a> 
                   </div>
                 </div>
                 <div class="skillListR">
                   <div class="skillListBox">
                        <strong>合理构图</strong><br />
                        <a target="_blank" href="/skill/view?id=104">摄影构图学</a><span>|</span><a target="_blank" href="/skill/view?id=105">写实摄影构图法</a><span>|</span><a target="_blank" href="/skill/view?id=106">黄金分割构图法</a><span>|</span><a target="_blank" href="/skill/view?id=107">构图示意图</a><span>|</span><a target="_blank" href="/skill/view?id=108">前后景改善构图</a><span>|</span><a target="_blank" href="/skill/view?id=109">大师对构图的建议</a><span>|</span><a target="_blank" href="/skill/view?id=110">突出主体</a><span>|</span><a target="_blank" href="/skill/view?id=111">构图的捷径</a><span>|</span><a target="_blank" href="/skill/view?id=112">构图十忌</a><br />
                        <strong>器材保养技巧</strong><br />
                        <a target="_blank" href="/skill/view?id=113">清洁镜头</a><span>|</span><a target="_blank" href="/skill/view?id=114">清洁机身</a><span>|</span><a target="_blank" href="/skill/view?id=115">保护液晶屏</a><span>|</span><a target="_blank" href="/skill/view?id=116">保养电池</a><span>|</span><a target="_blank" href="/skill/view?id=117">防水防潮</a><span>|</span><a target="_blank" href="/skill/view?id=118">保养存储卡</a><span>|</span><a target="_blank" href="/skill/view?id=119">卸装镜头</a><span>|</span><a target="_blank" href="/skill/view?id=120">温度的影响</a> 
                    </div>
                 </div>
             </div>
           <!--器材基础_End-->
           <!--摄影技巧_Action-->
             <div <?php echo  $subNav==3 ? "class='dis'" : "class='undis'";?> id="tbc_03">
                 <div class="skillListL">
                    <div class="skillListBox">
                      <h3>人像摄影</h3>
                        <strong>基础知识：</strong>
                        <a target="_blank" href="/skill/view?id=121">人像摄影器材</a><span>|</span><a target="_blank" href="/skill/view?id=122">人像摄影构图</a><span>|</span><a target="_blank" href="/skill/view?id=123">人像摄影用光</a>
                        <span>|</span><a target="_blank" href="/skill/view?id=124">人像背景的选择</a><span>|</span><a target="_blank" href="/skill/view?id=125">人像摄影关键要素</a><br />
                      <strong>应用技巧：</strong><br />
                        <a target="_blank" href="/skill/view?id=126">人像摄影技巧</a><span>|</span><a target="_blank" href="/skill/view?id=127">小DC拍人像</a><span>|</span><a target="_blank" href="/skill/view?id=128">小DC拍虚化</a><span>|</span><a target="_blank" href="/skill/view?id=129">室外拍人像</a><span>|</span><a target="_blank" href="/skill/view?id=130">室内拍人像</a><span>|</span><a target="_blank" href="/skill/view?id=131">海边拍泳装美女</a><span>|</span><a target="_blank" href="/skill/view?id=132">室内拍泳装美女</a><span>|</span><a target="_blank" href="/skill/view?id=133">对角线拍人像</a><span>|</span><a target="_blank" href="/skill/view?id=134">微距拍人像</a><span>|</span><a target="_blank" href="/skill/view?id=135">逆光拍人像</a><span>|</span><a target="_blank" href="/skill/view?id=136">恶劣光线下拍人像</a><span>|</span><a target="_blank" href="/skill/view?id=137">夜景中拍人像</a><span>|</span><a target="_blank" href="/skill/view?id=138">儿童拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=139">美女香车拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=140">自拍技巧</a><span>|</span><a target="_blank" href="/skill/view?id=141">美眉摆姿势大全</a><br />
                    <h3>人体摄影</h3>
                        <strong>基础知识：<br />
                        </strong>
                        <a target="_blank" href="/skill/view?id=142">大师谈人体摄影</a><span>|</span><a target="_blank" href="/skill/view?id=143">人体摄影的内涵<br />
                        </a>
                        <strong>应用技巧：<br />
                        </strong>
                        <a target="_blank" href="/skill/view?id=144">冷暖光源的运用</a><span>|</span><a target="_blank" href="/skill/view?id=145">巧用自然光</a><span>|</span><a target="_blank" href="/skill/view?id=146">侧逆光的运用</a><span>|</span><a target="_blank" href="/skill/view?id=147">单灯技法</a><span>|</span><a target="_blank" href="/skill/view?id=148">道具的运用1</a><span>|</span><a target="_blank" href="/skill/view?id=149">道具的运用2</a><span>|</span><a target="_blank" href="/skill/view?id=150">饰物的运用</a><span>|</span><a target="_blank" href="/skill/view?id=151">环境的选择</a>
                    <h3>风光摄影</h3>
                        <strong>基础知识：<br />
                        </strong>
                        <a target="_blank" href="/skill/view?id=152">风光摄影构图</a><span>|</span><a target="_blank" href="/skill/view?id=153">风光摄影器材</a><span>|</span><a target="_blank" href="/skill/view?id=154">风光摄影手法</a><span>|</span><a target="_blank" href="/skill/view?id=155">风光摄影用光</a><span>|</span><a target="_blank" href="/skill/view?id=156">建筑摄影构图</a><span>|</span><a target="_blank" href="/skill/view?id=157">建筑摄影用光</a>
                    </div>
                 </div>
                 <div class="skillListC">
                   <div class="skillListBox">
                            <strong>应用技巧：</strong><br />
                            <a target="_blank" href="/skill/view?id=158">田园风光摄影</a><span>|</span><a target="_blank" href="/skill/view?id=159">城市风光摄影</a><span>|</span><a target="_blank" href="/skill/view?id=160">建筑拍摄</a><br />
                            <a target="_blank" href="/skill/view?id=161">流水拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=162">雨景拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=163">雪景拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=164">日出日落拍摄</a><br />
                            <h3>微距摄影</h3>
                            <strong>基础知识：</strong><br />
                            <a target="_blank" href="/skill/view?id=165">微距摄影器材</a><span>|</span><a target="_blank" href="/skill/view?id=166">高手谈微距</a><br />
                            <a target="_blank" href="/skill/view?id=167">微距注意事项</a><span>|</span><a target="_blank" href="/skill/view?id=168">微距如何拍</a><br />
                            <strong>应用技巧：</strong><br />
                            <a target="_blank" href="/skill/view?id=169">微距摄影入门指南</a><span>|</span><a target="_blank" href="/skill/view?id=170">微距摄影3招技法</a><br />
                            <a target="_blank" href="/skill/view?id=171">室内静物拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=172">花卉拍摄</a><br />
                            <a target="_blank" href="/skill/view?id=173">昆虫拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=174">水珠拍摄</a><br />
                            <h3>夜景摄影</h3>
                            <strong>基础知识：</strong><br />
                            <a target="_blank" href="/skill/view?id=175">夜景摄影器材</a><span>|</span><a target="_blank" href="/skill/view?id=176">夜景摄影注意事项</a><span>|</span><a target="_blank" href="/skill/view?id=177">夜景摄影特点</a><br />
                            <strong>应用技巧：</strong><br />
                            <a target="_blank" href="/skill/view?id=178">霓虹灯拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=179">烟花拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=180">新年夜景拍摄</a><br />
                            <a target="_blank" href="/skill/view?id=181">月亮拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=182">闪电拍摄</a><br />
                            <h3>运动摄影</h3>
                            <strong>基础知识：</strong><br />
                            <a target="_blank" href="/skill/view?id=183">运动摄影注意事项</a>  
                   </div>
                 </div>
                 <div class="skillListR">
                   <div class="skillListBox">
                        <strong>应用技巧：</strong><br />
                        <a target="_blank" href="/skill/view?id=184">体育摄影技巧</a><span>|</span><a target="_blank" href="/skill/view?id=185">快速对焦技巧</a><span>|</span><a target="_blank" href="/skill/view?id=186">运动项目拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=187">水上运动拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=188">舞台拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=189">演唱会拍摄</a><br />
                        <h3>商业广告摄影</h3>
                        <strong>基础知识：</strong><br />
                        <a target="_blank" href="/skill/view?id=190">拍车展器材攻略</a><span>|</span><a target="_blank" href="/skill/view?id=191">影楼广告伎俩</a><span>|</span><a target="_blank" href="/skill/view?id=192">商业拍摄实录</a><br />
                        <strong>应用技巧：</strong><br />
                        <a target="_blank" href="/skill/view?id=193">在家玩商业摄影</a><span>|</span><a target="_blank" href="/skill/view?id=194">商务广告摄影入门</a><br />
                        <a target="_blank" href="/skill/view?id=195">运动汽车商业摄影</a><span>|</span><a target="_blank" href="/skill/view?id=196">汽车展会拍摄</a><br />
                        <h3>纪实人文</h3>
                        <strong>基础知识：</strong><br />
                        <a target="_blank" href="/skill/view?id=197">新闻摄影探讨</a><span>|</span><a target="_blank" href="/skill/view?id=198">新闻摄影的意境</a><br />
                        <a target="_blank" href="/skill/view?id=199">视觉冲击力放在首位</a><span>|</span><a target="_blank" href="/skill/view?id=200">纪实抓拍的要求</a><br />
                        <strong>应用技巧：</strong><br />
                        <a target="_blank" href="/skill/view?id=201">新闻抓拍</a><span>|</span><a target="_blank" href="/skill/view?id=202">纪实抓拍</a><span>|</span><a target="_blank" href="/skill/view?id=203">七种偷拍</a><span>|</span><a target="_blank" href="/skill/view?id=204">街头抓拍</a><br />
                        <a target="_blank" href="/skill/view?id=205">抓拍飞鸟</a><span>|</span><a target="_blank" href="/skill/view?id=206">抓拍和摆拍</a><br />
                        <h3>纪念摄影</h3>
                        <a target="_blank" href="/skill/view?id=207">旅游人像拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=208">旅游团体照拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=209">五一出游拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=210">集体合影拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=211">家庭肖像拍摄</a><span>|</span><a target="_blank" href="/skill/view?id=212">毕业照拍摄</a>
                    </div>
                 </div>
             </div>
           <!--摄影技巧_End-->
           <!--后期处理_Action-->
             <div <?php echo  $subNav==4 ? "class='dis'" : "class='undis'";?> id="tbc_04">
                 <div class="skillListL">
                    <div class="skillListBox">
                        <h3>效果优化</h3>
                        <strong>调色：</strong><br />
                        <a target="_blank" href="/skill/view?id=213">唯美婚纱效果</a><span>|</span><a target="_blank" href="/skill/view?id=214">为婚纱照调色</a><span>|</span><a target="_blank" href="/skill/view?id=215">低调华丽美女</a><span>|</span><a target="_blank" href="/skill/view?id=216">时尚灰色美女</a><span>|</span><a target="_blank" href="/skill/view?id=217">人像过曝特效</a><span>|</span><a target="_blank" href="/skill/view?id=218">室内光特效</a><span>|</span><a target="_blank" href="/skill/view?id=219">后期色彩设计</a><span>|</span><a target="_blank" href="/skill/view?id=220">艺术化处理</a><span>|</span><a target="_blank" href="/skill/view?id=221">冷色调美女</a><span>|</span><a target="_blank" href="/skill/view?id=222">反转片效果</a><span>|</span><a target="_blank" href="/skill/view?id=223">国画美女</a><span>|</span><a target="_blank" href="/skill/view?id=224">怀旧色调</a><span>|</span><a target="_blank" href="/skill/view?id=225">油画效果</a><span>|</span><a target="_blank" href="/skill/view?id=226">通道调缤纷色彩</a><span>|</span><a target="_blank" href="/skill/view?id=227">简单后期润饰</a><br />
                        <strong>色彩交换：</strong><br />
                        <a target="_blank" href="/skill/view?id=228">春景变秋景</a><span>|</span><a target="_blank" href="/skill/view?id=229">日景变昏黄</a><span>|</span><a target="_blank" href="/skill/view?id=230">白昼变黑夜</a><br />
                        <a target="_blank" href="/skill/view?id=231">黑白变彩色</a><span>|</span><a target="_blank" href="/skill/view?id=232">彩色变黑白</a><br />
                        <strong>艺术处理：</strong><br />
                        <a target="_blank" href="/skill/view?id=233">虚化背景</a><span>|</span><a target="_blank" href="/skill/view?id=234">让照片更清晰</a><span>|</span><a target="_blank" href="/skill/view?id=235">人像柔焦效果</a><br />
                        <a target="_blank" href="/skill/view?id=236">风景柔焦效果</a><span>|</span><a target="_blank" href="/skill/view?id=237">让脸变通透</a><span>|</span><a target="_blank" href="/skill/view?id=238">朦胧美女照</a><br />
                        <a target="_blank" href="/skill/view?id=239">添加蓝天白云</a><br />
                        <strong>照片魔术</strong><br />
                        <a target="_blank" href="/skill/view?id=240">风景照变明信片</a><span>|</span><a target="_blank" href="/skill/view?id=241">肖像照变封面</a><br />
                        <a target="_blank" href="/skill/view?id=242">照片变卡通漫画</a><span>|</span><a target="_blank" href="/skill/view?id=243">给美女换衣服</a> 
                    </div>
                 </div>
                 <div class="skillListC">
                   <div class="skillListBox">
                            <a target="_blank" href="/skill/view?id=244">逼真素描画</a><span>|</span><a target="_blank" href="/skill/view?id=245">荷花水墨画</a><span>|</span><a target="_blank" href="/skill/view?id=246">让相片变水彩画</a><br />
                            <h3>创意处理</h3>
                            <strong>移花接木：</strong><br />
                            <a target="_blank" href="/skill/view?id=247">换头术</a><span>|</span><a target="_blank" href="/skill/view?id=248">成为名画主角</a><span>|</span><a target="_blank" href="/skill/view?id=249">抠出飘发mm</a><br />
                            <strong>合成照片</strong><br />
                            <a target="_blank" href="/skill/view?id=250">合成结婚照</a><span>|</span><a target="_blank" href="/skill/view?id=251">婚礼照后期处理</a><br />
                            <a target="_blank" href="/skill/view?id=252">天使翅膀制作</a><!--<span>|</span><a target="_blank" href="#.html') ?>">骑虎背的少年</a>--><br />
                            <h3>照片美容</h3>
                            <strong>面部美容</strong><br />
                            <a target="_blank" href="/skill/view?id=253">自然磨皮法</a><span>|</span><a target="_blank" href="/skill/view?id=254">保留细节磨皮法</a><span>|</span><a target="_blank" href="/skill/view?id=255">另一招磨皮法</a><span>|</span><a target="_blank" href="/skill/view?id=256">修饰皮肤</a><span>|</span><a target="_blank" href="/skill/view?id=257">祛斑</a><span>|</span><a target="_blank" href="/skill/view?id=258">面部美容</a><br />
                            <strong>迷人眼睛</strong><br />
                            <a target="_blank" href="/skill/view?id=259">处理眼睛大小</a><span>|</span><a target="_blank" href="/skill/view?id=260">消除眼袋</a><span>|</span><a target="_blank" href="/skill/view?id=261">修眉毛和睫毛</a><br />
                            <a target="_blank" href="/skill/view?id=262">闪亮唇彩</a><span>|</span><a target="_blank" href="/skill/view?id=263">美白牙齿</a><span>|</span><a target="_blank" href="/skill/view?id=264">直发变卷发</a>  
                   </div>
                 </div>
                 <div class="skillListR">
                   <div class="skillListBox">
                        <h3>问题修正</h3>
                        <a target="_blank" href="/skill/view?id=265">校正曝光不足</a><span>|</span><a target="_blank" href="/skill/view?id=266">校正偏色</a><span>|</span><a target="_blank" href="/skill/view?id=267">校正倾斜照片</a><span>|</span><a target="_blank" href="/skill/view?id=268">优化逆光</a><span>|</span><a target="_blank" href="/skill/view?id=269">消除紫边</a><span>|</span><a target="_blank" href="/skill/view?id=270">去除阴影</a><span>|</span><a target="_blank" href="/skill/view?id=271">调整人物照片细节</a><span>|</span><a target="_blank" href="/skill/view?id=272">模糊照片变清晰</a><span>|</span><a target="_blank" href="/skill/view?id=273">修复破损照片</a><br />
                        <h3>相片边框</h3>
                        <a target="_blank" href="/skill/view?id=274">十余种漂亮相框</a><span>|</span><a target="_blank" href="/skill/view?id=275">探出头式相框</a><span>|</span><a target="_blank" href="/skill/view?id=276">半透明细线边框</a><span>|</span><a target="_blank" href="/skill/view?id=277">立体相框</a><span>|</span><a target="_blank" href="/skill/view?id=278">斑驳边缘相框</a><span>|</span><a target="_blank" href="/skill/view?id=279">蕾丝花边相框</a><span>|</span><a target="_blank" href="/skill/view?id=280">巧制胶卷相框</a><br />
                        <h3>光影魔术手简易后期</h3>
                        <a target="_blank" href="http://pcedu.pconline.com.cn/videoedu/ztsp/0805/1301462">光影魔术手在线免费视频教程</a><br />
                        <a target="_blank" href="http://dl.pconline.com.cn/html_2/1/111/id=10832&pn=0">光影魔术手简体中文版下载</a><br />
                        <a target="_blank" href="http://pcedu.pconline.com.cn/specialtopic/070908d/index">变身魔术师!数码照处理视频教程</a>
                    </div>
                 </div>
             </div>
           <!--后期处理_End-->
         </div>
            </div>  
        <div class="diapageBB"><div class="diapageTC"></div></div>
    </div> 
    </div>
 