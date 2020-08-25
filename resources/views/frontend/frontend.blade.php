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
    <link rel="stylesheet" href="/frontend/css/css.css">
    <script type="text/javascript" src="/frontend/js/jquery.js"></script>
    @yield('headlibs')
</head>
<body>
<div class="i_header_box">
    <div class="i_top_box">
        <div class="i_top_m">
            <div class="top_text">您好，欢迎访问南京同仁堂授权-国潮茶饮满气茶奶茶加盟官网！</div>
            <div class="top_tel">400-110-7300</div>
        </div>
    </div>
    <div class="i_logo_box">
        <div class="i_logo_m">
            <div class="logo"><a title="国潮茶饮满气茶奶茶加盟官网" href="/"><img src="/frontend/images/20181017103546111543.png" alt="国潮茶饮满气茶奶茶加盟官网"><span class="imgmid"></span></a></div>
            <div class="nav">
                <ul>
                    <li><a class="active" href="/">首页</a></li>
                    <li><a href="/about">关于品牌</a></li>
                    <li><a href="/productions">奶茶产品</a></li>
                    <li><a href="/dianmian">店面形象</a></li>
                    <li><a href="/news">新闻中心</a>
                        <ul>
                            @foreach(\App\AdminModel\Arctype::where('reid',6)->get(['typename','real_path']) as $type)
                            <li><a href="/{{$type->real_path}}">{{$type->typename}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="#">申请加盟</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@yield('main')
<div class="i_footer_box">
    <div class="i_f_m">
        <div class="i_f_c">
            <div class="i_f_nav">
                <ul>
                    <li><a href="/">官网首页</a></li>
                    <li><a href="/about">关于品牌</a></li>
                    <li><a href="/productions">奶茶产品</a></li>
                    <li><a href="/dianmian">店面形象</a></li>
                    <li><a href="/news/">新闻中心</a></li>
                    <li><a href="#" rel="nofollow">联系我们</a></li>
                </ul>
            </div>
            <div class="i_f_ewm"><img src="/frontend/images/20181017114041633315.jpg"></div>
            <div class="i_f_share" wdd="center">
                <div class="f_share_title">满气茶奶茶店加盟，有你加入更精彩！<br>如果想要了解更多奶茶加盟详情，请直接在线咨询！</div>
                <div class="f_share_list">
                </div>
            </div>
            <div class="i_f_con">
                <div class="f_con_tel">
                    <span>全国24小时免费加盟热线</span>
                    <h6>400-110-7300</h6>
                </div>
                <div class="f_con_list">
                    <p><i><img src="/frontend/images/f_ico.png"></i>上海市松江区延展路455号汉桥文化科技园A幢4楼</p>
                </div>
            </div>
        </div>
    </div>
    <div class="i_f_copy">
        <div class="f_copy">
            <div class="copy_text">
                地址：上海市松江区延展路455号汉桥文化科技园A幢4楼 备案号：
                <a href="http://www.beian.miit.gov.cn" target="_blank" style="color:#FFF">苏ICP备18025685号</a>
                <br>国潮茶饮-满气茶奶茶加盟官网 版权所有 © All rights reserved
                <a title="网站地图" href="/storage/sitemap.xml" target="_blank">网站地图</a>
            </div>
            <div class="scroll_top"><img src="/frontend/images/scroll_top.png"></div>
        </div>
    </div>
    <script type="text/javascript" language="javascript" src="/frontend/js/jquery.easing.min.js"></script>
    <script type="text/javascript" language="javascript" src="/frontend/js/skitter.js"></script>
    <script type="text/javascript" language="javascript" src="/frontend/js/pack.js"></script>
    @yield('flink')
</div>
</body>
</html>
