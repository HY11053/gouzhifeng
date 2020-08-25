<!DOCTYPE html>
<html mip="" class="mip-i-android-scroll trigger-layout">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="applicable-device" content="mobile">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="pragma" content="no-cache">
    <link rel="stylesheet" type="text/css" href="/mobile/css/mip.css">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}" />
    <link rel="stylesheet" href="/mobile/css/pageSwitch.min.css">
    <style>
        #head__3vc99r518zl{display: block;width: 100%;clear: both;height:40px;}
        *{
            padding: 0;
            margin: 0;
        }
        html,body{
            height: 100%;
        }
        #container {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }
        .sections,.section {
            height:100%;
        }
        #container,.sections {
            position: relative;
        }
        .section {
            background-color: #000;
            background-size: cover;
            background-position: 50% 50%;
            text-align: center;
            color: white;
        }
        #section0 {
            background-image: url('/frontend/images/20181017114433335249.jpg');
        }
        #section1 {
            background-image: url('/frontend/images/20181017114447291076.jpg');
        }
    </style>

</head>
<body class="mip-i-android-scroll trigger-layout" style="padding-bottom: 0px !important; margin-bottom: 0px !important;">
<div class="main_box">
    <div class="i_logo_box">
        <div class="i_logo_m">
            <div class="logo"><a title="国潮茶饮满气茶奶茶加盟官网" href="/"><img src="/mobile/images/logo.png" align="center" alt="国潮茶饮满气茶奶茶加盟官网" /><span class="imgmid"></span></a></div>
            <div class="top_tel"><br></div>
        </div>
    </div>
    <nav>
        <ul>
            <li class="active">
                <div class="nav_img"><a href="/" class="btn_1"></a></div>
                <div class="nav_txt">首页</div>
            </li>
            <li>
                <div class="nav_img"><a href="/about" class="btn_2"></a></div>
                <div class="nav_txt">品牌</div>
            </li>
            <li>
                <div class="nav_img"><a href="/productions" class="btn_3"></a></div>
                <div class="nav_txt">产品</div>
            </li>
            <li>
                <div class="nav_img"><a href="/dianmian" class="btn_4"></a></div>
                <div class="nav_txt">店面</div>
            </li>
            <li>
                <div class="nav_img"><a href="/news" class="btn_6"></a></div>
                <div class="nav_txt">动态</div>
            </li>
            <li>
                <div class="nav_img"><a href="/news/jmnews" class="btn_5"></a></div>
                <div class="nav_txt">新闻</div>
            </li>
            <li>
                <div class="nav_img"><a href="#" target="_blank" class="btn_7"></a></div>
                <div class="nav_txt">加盟</div>
            </li>
            <li>
                <div class="nav_img"><a href="#" target="_blank" class="btn_8"></a></div>
                <div class="nav_txt">咨询</div>
            </li>
        </ul>
    </nav>
   @yield('main')
    <footer>
        <div class="i_f_con">
            <div class="f_con_tel"><a href="tel:400-110-7300">400-110-7300</a></div>
            <div class="f_con_add"><span>上海市松江区延展路455号汉桥文化科技园A幢4楼</span></div>
        </div>
        <div class="i_copy">© 2020 满气茶奶茶店加盟官网 版权所有</div>

    </footer>
</div>
<mip-shell class="mip-element mip-layout-container"></mip-shell>
</body>
</html>
