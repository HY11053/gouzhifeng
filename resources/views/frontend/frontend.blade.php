<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="applicable-device" content="pc" />
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link href="/public/css/daohang.css" rel="stylesheet" type="text/css"/>
    <link href="/public/css/css.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/index.js"></script>
    <!--[if lte IE 6]>
    <script type="text/javascript" src="/public/js/DD_belatedPNG_0.0.7a.js"></script>
    <script>
        DD_belatedPNG.fix('.png_bg,.png_bg a:hover,.all_sort_all ul li a span');
    </script>
    <![endif]-->
    @yield('headlibs')
</head>
<body>
<!--header 开始-->
<div class="header">
    <div class="top">
        <div class="inner">
            <div class="top_l"> 欢迎您来到3198创业致富网！
                <a href="/zhishi"><span>创业知识</span></a>
                <a href="/news"><span>商机资讯</span></a>
            </div>
            <div class="top_r">
                <div class="phone_app" id="js_phone_app">
                    <div class="t_mobile">手机APP<i class="ico_dropdown"></i></div>
                    <div class="app_drop_down"><i class="app_download"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_box_wrap">
        <div class="header_box">
            <div class="logo"><a href="/" target="_blank"><img src="/public/images/logo.jpg" alt="3198创业致富网"/></a></div>
            <!--搜索 开始-->
            <div class="search">
                <div class="search_box">
                    <form id="search_form" action="/search" target="_blank" method="get">
                        <input type="text"
                               onblur="if (this.value == '') {this.value = this.attributes['def'].value;this.className='search_input';}"
                               onfocus="if (this.value == this.attributes['def'].value) {this.value='';this.className='search_input1';}"
                               def="想找什么项目？" class="search_input" value="想找什么项目？" name="key">
                        <input type=hidden name="type" value="1"/>
                        <input type="submit" class="search_btn" value="搜索">
                    </form>
                </div>
                <div class="search_hot">热门搜索：
                    <a href="/search?key=黄焖鸡米饭&type=1" target="_blank">黄焖鸡米饭加盟</a>
                    <a class="red" href="/search?key=小吃&type=1" target="_blank">特色小吃加盟</a>
                    <a href="/search?key=冒菜&type=1" target="_blank">冒菜加盟</a>
                    <a href="/search?key=奶茶&type=1" target="_blank">奶茶加盟店</a>
                </div>
            </div>
            <!--搜索 结束-->

            <!--幻灯片 开始-->
            <div id="js_bn" class="bn">
                <div class="hd">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>
                <div class="bd">
                    <ul>
                        <li><a href="/myyp" target="_blank"><img src="/public/images/myjmd.jpg" width="220" height="64"
                                                                 alt=""/></a></li>
                        <li><a href="/myyp/223" target="_blank"><img src="/public/images/yyjm.jpg" width="220"
                                                                     height="64" alt=""/></a></li>
                        <li><a href="/cyms/2" target="_blank"><img src="/public/images/tsxc.jpg" width="220" height="64"
                                                                   alt=""/></a></li>
                    </ul>
                </div>
            </div>
            <!--幻灯片 结束-->
        </div>
    </div>
    <script type="text/javascript" src="/public/js/jquery.SuperSlide.2.1.1.js"></script>
    <!--导航 开始-->
    <div class="nav_bj">
        <div class="nav">
            <ul class="sy1_ul">
                <div class="sy2_inside">
                    <li class="home02"><a href="/">首页</a></li>
                    <li class="sy1_li navli1">
                        <a class="sy1_tit " href="/cyms"><span class="navspan"> 餐饮美食</span></a>
                        <ul class="sy2_ul">
                            <dl>
                                <dd>
                                    <a href="http://www.3198.com/cyms/2">加盟小吃连锁</a>
                                    <a href="http://www.3198.com/cyms/175">快餐加盟连锁</a>
                                    <a href="http://www.3198.com/cyms/199">火锅加盟店</a>
                                    <a href="http://www.3198.com/cyms/3">饮品加盟</a>
                                    <a href="http://www.3198.com/cyms/188">连锁甜品加盟</a>
                                    <a href="http://www.3198.com/cyms/198">面食店加盟</a>
                                    <a href="http://www.3198.com/cyms/201">卤菜熟食加盟</a>
                                    <a href="http://www.3198.com/cyms/203">休闲零食加盟</a>
                                    <a href="http://www.3198.com/xm/3701">南京大排档加盟</a>
                                    <a href="http://www.3198.com/cyms/210">西餐酒吧加盟</a>
                                </dd>
                            </dl>
                        </ul>
                    </li>
                    <li class="sy1_li navli2">
                        <a class="sy1_tit " href="/fzxb"><span class="navspan"> 服装鞋包</span></a>
                        <ul class="sy2_ul">
                            <dl>
                                <dd>
                                    <a href="http://www.3198.com/fzxb/241">家居用品店加盟</a>
                                    <a href="http://www.3198.com/fzxb/23">加盟时尚女装</a>
                                    <a href="http://www.3198.com/fzxb/24">童装品牌加盟</a>
                                    <a href="http://www.3198.com/fzxb/176">内衣品牌加盟</a>
                                    <a href="http://www.3198.com/fzxb/189">品牌男装加盟店</a>
                                    <a href="http://www.3198.com/fzxb/234">箱包加盟</a>
                                    <a href="http://www.3198.com/fzxb/235">运动品牌加盟</a>
                                    <a href="http://www.3198.com/fzxb/236">品牌鞋店加盟</a>
                                    <a href="http://www.3198.com/fzxb/238">品牌童鞋加盟</a>
                                    <a href="http://www.3198.com/fzxb/242">品牌服饰加盟</a>
                                </dd>
                            </dl>

                        </ul>
                    </li>
                    <li class="sy1_li navli3">
                        <a class="sy1_tit " href="/mrbj"><span class="navspan"> 美容保健</span></a>
                        <ul class="sy2_ul">
                            <dl>
                                <dd>
                                    <a href="http://www.3198.com/mrbj/177">代理加盟化妆品</a>
                                    <a href="http://www.3198.com/mrbj/252">产后恢复加盟店</a>
                                    <a href="http://www.3198.com/mrbj/178">汗蒸馆加盟</a>
                                    <a href="http://www.3198.com/mrbj/251">美甲加盟店</a>
                                    <a href="http://www.3198.com/mrbj/49">美容美发加盟</a>
                                    <a href="http://www.3198.com/mrbj/253">经络养生加盟</a>
                                    <a href="http://www.3198.com/mrbj/258">医疗器械加盟店</a>
                                    <a href="http://www.3198.com/mrbj/250">足浴加盟连锁</a>
                                    <a href="http://www.3198.com/mrbj/259">美容院加盟品牌</a>
                                    <a href="http://www.3198.com/mrbj/255">眼镜加盟</a>
                                </dd>
                            </dl>
                        </ul>
                    </li>
                    <li class="sy1_li navli4">
                        <a class="sy1_tit " href="/shfw"><span class="navspan"> 生活服务</span></a>
                        <ul class="sy2_ul">
                            <dl>
                                <dd>
                                    <a href="http://www.3198.com/shfw/70">超市连锁加盟</a>
                                    <a href="http://www.3198.com/shfw/306">宠物加盟店</a>
                                    <a href="http://www.3198.com/shfw/179">干洗连锁加盟</a>
                                    <a href="http://www.3198.com/shfw/304">花店加盟</a>
                                    <a href="http://www.3198.com/shfw/69">加盟婚庆</a>
                                    <a href="http://www.3198.com/shfw/279">精品酒店加盟</a>
                                    <a href="http://www.3198.com/shfw/192">加盟物流</a>
                                    <a href="http://www.3198.com/shfw/281">家政加盟</a>
                                    <a href="http://www.3198.com/shfw/287">安防加盟</a>
                                    <a href="http://www.3198.com/shfw/282">加盟零售</a>
                                </dd>
                            </dl>
                        </ul>
                    </li>
                    <li class="sy1_li navli5">
                        <a class="sy1_tit " href="/jjyp"><span class="navspan"> 家居用品</span></a>
                        <ul class="sy2_ul">
                            <dl>
                                <dd>
                                    <a href="http://www.3198.com/jjyp/82">橱柜加盟</a>
                                    <a href="http://www.3198.com/jjyp/190">灯饰灯具加盟</a>
                                    <a href="http://www.3198.com/jjyp/83">家纺加盟</a>
                                    <a href="http://www.3198.com/jjyp/293">家居用品店加盟</a>
                                    <a href="http://www.3198.com/jjyp/293">生活馆加盟</a>
                                    <a href="http://www.3198.com/jjyp/295">卫浴招商加盟</a>
                                    <a href="http://www.3198.com/jjyp/296">床上用品加盟</a>
                                    <a href="http://www.3198.com/jjyp/301">装饰公司加盟</a>
                                    <a href="http://www.3198.com/jjyp/297">日用品加盟</a>
                                    <a href="http://www.3198.com/jjyp/180">家具加盟</a>
                                </dd>
                            </dl>
                        </ul>
                    </li>
                    <li class="sy1_li navli6">
                        <a class="sy1_tit " href="/jczs"><span class="navspan"> 建材装饰</span></a>
                        <ul class="sy2_ul">
                            <dl>
                                <dd>
                                    <a href="http://www.3198.com/jczs/276">瓷砖加盟</a>
                                    <a href="http://www.3198.com/jczs/96">地板招商加盟</a>
                                    <a href="http://www.3198.com/jczs/274">门窗加盟</a>
                                    <a href="http://www.3198.com/jczs/181">装饰装修加盟</a>
                                    <a href="http://www.3198.com/jczs/99">油漆加盟</a>
                                    <a href="http://www.3198.com/jczs/289">五金连锁加盟</a>
                                    <a href="http://www.3198.com/jczs/275">吊顶加盟</a>
                                    <a href="http://www.3198.com/jczs/278">楼梯加盟</a>
                                    <a href="http://www.3198.com/jczs/277">品牌建材加盟</a>
                                    <a href="http://www.3198.com/jczs/291">建筑贴膜加盟</a>
                                </dd>
                            </dl>
                        </ul>
                    </li>
                    <li class="sy1_li navli7">
                        <a class="sy1_tit " href="/lpsp"><span class="navspan"> 礼品饰品</span></a>
                        <ul class="sy2_ul">
                            <dl>
                                <dd>
                                    <a href="http://www.3198.com/lpsp/305">动漫加盟 </a>
                                    <a href="http://www.3198.com/lpsp/114">创意礼品店加盟</a>
                                    <a href="http://www.3198.com/lpsp/208">珠宝首饰加盟 </a>
                                    <a href="http://www.3198.com/lpsp/112">个性饰品店加盟</a>
                                    <a href="http://www.3198.com/lpsp/202">小饰品店加盟</a>
                                    <a href="http://www.3198.com/lpsp/200">银饰加盟 </a>
                                    <a href="http://www.3198.com/lpsp/205">工艺品加工加盟</a>
                                    <a href="http://www.3198.com/lpsp/303">佛用品加盟</a>
                                    <a href="http://www.3198.com/lpsp/191">时尚钟表加盟</a>
                                    <a href="http://www.3198.com/lpsp/209">品牌饰品加盟</a>
                                </dd>
                            </dl>
                        </ul>
                    </li>
                    <li class="sy1_li navli8">
                        <a class="sy1_tit " href="/qcfw"><span class="navspan"> 汽车服务</span></a>
                        <ul class="sy2_ul">
                            <dl>
                                <dd>
                                    <a href="http://www.3198.com/qcfw/183">电动车招商加盟</a>
                                    <a href="http://www.3198.com/qcfw/122">汽车美容店加盟</a>
                                    <a href="http://www.3198.com/qcfw/196">加盟洗车店</a>
                                    <a href="http://www.3198.com/qcfw/124">汽车用品店加盟</a>
                                    <a href="http://www.3198.com/qcfw/226">汽车修理厂加盟</a>
                                    <a href="http://www.3198.com/qcfw/227">汽车装饰加盟</a>
                                    <a href="http://www.3198.com/qcfw/228">汽车导航加盟</a>
                                    <a href="http://www.3198.com/qcfw/229">加盟平衡车</a>
                                    <a href="http://www.3198.com/qcfw/211">汽车品牌加盟</a>
                                </dd>
                            </dl>
                        </ul>
                    </li>
                    <li class="sy1_li navli9">
                        <a class="sy1_tit " href="/jywl"><span class="navspan"> 教育网络</span></a>
                        <ul class="sy2_ul">
                            <dl>
                                <dd>
                                    <a href="http://www.3198.com/jywl/131">少儿教育加盟 </a>
                                    <a href="http://www.3198.com/jywl/132">教育辅导机构加盟</a>
                                    <a href="http://www.3198.com/jywl/184">学生用品加盟</a>
                                    <a href="http://www.3198.com/jywl/194">外语培训加盟</a>
                                    <a href="http://www.3198.com/jywl/230">育婴连锁加盟</a>
                                    <a href="http://www.3198.com/jywl/231">数码产品代理加盟</a>
                                    <a href="http://www.3198.com/jywl/232">远程教育加盟</a>
                                    <a href="http://www.3198.com/jywl/233">认证考试加盟</a>
                                    <a href="http://www.3198.com/jywl/243">网络创业加盟</a>
                                    <a href="http://www.3198.com/jywl/222">教育品牌加盟</a>
                                </dd>
                            </dl>
                        </ul>
                    </li>
                    <li class="sy1_li navli10">
                        <a class="sy1_tit " href="/myyp"><span class="navspan"> 母婴生活</span></a>
                        <ul class="sy2_ul">
                            <dl>
                                <dd>
                                    <a href="http://www.3198.com/myyp/142">婴幼儿用品加盟店</a>
                                    <a href="http://www.3198.com/myyp/197">加盟儿童乐园</a>
                                    <a href="http://www.3198.com/myyp/244">加盟婴儿游泳馆</a>
                                    <a href="http://www.3198.com/myyp/187">奶粉店加盟</a>
                                    <a href="http://www.3198.com/myyp/245">儿童玩具加盟店</a>
                                    <a href="http://www.3198.com/myyp/247">保健品代理加盟</a>
                                    <a href="http://www.3198.com/myyp/149">婴儿家具加盟</a>
                                    <a href="http://www.3198.com/myyp/248">婴儿护理店加盟</a>
                                    <a href="http://www.3198.com/myyp/223">母婴品牌加盟</a>
                                </dd>
                            </dl>

                        </ul>
                    </li>
                    <li class="sy1_li home03 navli11"><a class="ic1" href="/"></a>
                        <ul class="sy2_ul sy2_ul1">
                            <li><a href="/hbjx">环保机械</a></li>
                            <li><a href="/jsyl">酒水饮料</a></li>
                        </ul>
                    </li>
                    <div class="clearit"></div>
                </div>
            </ul>
        </div>
    </div>
    <script src="/public/js/main1.js"></script>
    <script src="/public/js/shouye_tab.js"></script>
    <script>
        $(document).ready(function () {
            $(".tc").find(".tz_box").hide(0);
            $(".tc").hover(
                function () {
                    $(this).css("z-index", "20").find(".tz_box").css("z-index", "50").stop(true, true).animate({opacity: "show"});
                },
                function () {
                    $(this).css("z-index", "1").find(".tz_box").css("z-index", "1").stop(true, true).animate({opacity: "hide"});
                }
            );
            $(".search_text").focus(function () {
                $(this).addClass("focus");
            }).blur(function () {
                $(this).removeClass("focus");
            });
        })
    </script>
    <!--导航 结束--></div>
<!--header 结束-->
<!--主体开始-->
@yield('main')
<!--主体结束-->
<div class="clearfix"></div>
<!--footer开始-->
<!--footer开始-->
<div class="footer">
    <div class="footer_nav">
        <a href="/about.html">关于我们</a>　|　<a href="/sitemap.html">网站地图</a>　|　<a href="/copyright.html">法律声明</a>　|　<a
            href="/contact.html">联系我们</a>
    </div>
    <div class="cert"><img src="/public/images/index07.jpg" alt="信用保障"/></div>
    <div class="copyright">
        <p>3198创业致富网友情提示：多打电话、多咨询、实地考察，可降低投资风险！</p>
        <p>Copyright © 2015 www.3198.com Corporation, All Rights Reserved 上海佐赛网络科技有限公司 版权所有</p>
        <p><a href="http://www.miitbeian.gov.cn" rel="nofollow" target="_blank">沪ICP备14037163号-32</a></p>
        <p><a href="/flgw.html" rel="nofollow">本站常年法律顾问：曹憬律师</a></p>
        <div style="width:300px;margin:0 auto; padding:20px 0;">
            <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011302003783"
               style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
                <img src="/public/images/ba.png" style="float:left;"/>
                <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">沪公网安备
                    31011302003783号</p></a>
        </div>
    </div>
</div>
<!--footer结束--><!--footer结束-->
@yield('footer_libs')
</body>
</html>
