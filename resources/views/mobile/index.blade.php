@extends('mobile.mobile')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('main')
    <header>
        <div id="container">
            <div class="sections">
                <div class="section" id="section0"><img src="/mobile/images/20181017114433335249.jpg"></div>
                <div class="section" id="section2"><img src="/mobile/images/20181017114447291076.jpg"></div>
                <div class="section" id="section1"><img src="/mobile/images/20181017114447291076.jpg" ></div>
                <div class="section" id="section3"><img src="/mobile/images/20200601172444.jpg"></div>
            </div>
        </div>
        <div class="i_abo_box">
            <div class="i_abo_title"><h1>关于国潮茶饮-满气茶奶茶</h1></div>
            <div class="i_abo_m">   国潮新中式茶饮—满气茶奶茶，隶属于南京九州盛世餐饮管理有限公司，致力于结合中国深厚的文化底蕴，创造茶饮行业新价值，不盲从，敢不同。随处可见的京剧、中国红、中式装修风格、开发的中式周边产品都有浓厚的中国文化特色，并且满气茶相信……<a href="/xinwen/2019121912.html">更多</a></div>
        </div>
    </header>

    <div class="i_pro_box">
        <div class="i_pro_m">
            <div class="i_title">
                <h6>奶茶产品</h6>
                <span>满气茶奶茶热门奶茶产品，希望能帮助您快速的了解满气茶奶茶的产品颜值和架构！</span>
            </div>
            <div class="i_pro_list">
                <ul>
                    @foreach($productions as $production)
                    <li>
                        <a data-type="mip"  title="{{$production->title}}" href="/article/{{$production->id}}.shtml">
                            <div class="i_pro_img"><mip-img layout="responsive" width="160" height="160" src="{{$production->litpic}}" alt="{{$production->title}}" class="mip-element mip-layout-responsive mip-layout-size-defined mip-img-loaded"><mip-i-space style="display: block; padding-top: 80%;">space</mip-i-space><img class="mip-fill-content mip-replaced-content" src="{{$production->litpic}}" alt="{{$production->title}}"></mip-img></div>
                            <div class="i_pro_text">{{str_limit($production->title,30,'')}}</div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="i_main_more"><a data-type="mip" data-title="奶茶产品" href="/productions">点击查看更多满气茶奶茶店加盟奶茶产品 >></a></div>
    </div>
    <div class="i_pro_box">
        <div class="i_pro_m">
            <div class="i_title">
                <h6>店面形象</h6>
                <span>满气茶奶茶中国风店面形象，希望能帮助您快速的了解满气茶奶茶的店铺风格！</span>
            </div>
            <div class="i_pro_list">
                <ul>
                    @foreach($dianmians as $dianmian)
                    <li>
                        <a data-type="mip" data-title="{{$dianmian->title}}" title="{{$dianmian->title}}" href="/article/{{$dianmian->id}}.shtml">
                            <div class="i_pro_img"><mip-img layout="responsive" width="160" height="160" src="{{$dianmian->litpic}}" alt="{{$dianmian->title}}" class="mip-element mip-layout-responsive mip-layout-size-defined mip-img-loaded"><mip-i-space style="display: block; padding-top: 80%;">space</mip-i-space><img class="mip-fill-content mip-replaced-content" src="{{$dianmian->litpic}}" alt="{{$dianmian->title}}"></mip-img></div>
                            <div class="i_pro_text">{{str_limit($dianmian->title,30,'')}}</div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="i_main_more"><a data-type="mip" data-title="店面形象" href="/dianmian/">点击查看更多满气茶奶茶店加盟店面形象 >></a></div>
    </div>
    <div class="i_new_box">
        <div class="i_new_m">
            <div class="i_title">
                <h6>新闻中心</h6>
                <span>感谢您关注满气茶奶茶店加盟的最新新闻动态，满气茶奶茶将在这里发布最新的企业动态和产品信息！</span>
            </div>
            <div class="i_new_list">
                <ul>
                    @foreach($newslists as $newslist)
                    <li><a data-type="mip" data-title="{{$newslist->title}}" href="/article/{{$newslist->id}}.shtml">{{$newslist->title}}</a><span>发布时间：{{date('Y-m-d',strtotime($newslist->created_at))}}  浏览次数：{{$newslist->click}}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="i_main_more"><a data-type="mip" data-title="新闻中心" href="/news/">点击查看更多满气茶奶茶店加盟新闻动态 >></a></div>
    </div>
    <script src="/mobile/js/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="/mobile/js/pageSwitch.min.js"></script>
    <script>
        $("#container").PageSwitch({
            direction:'horizontal',
            easing:'ease-in',
            duration:1000,
            autoPlay:true,
            loop:'false'
        });
    </script>
@stop
