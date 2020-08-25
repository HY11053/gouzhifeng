@extends('frontend.frontend')
@section('title'){{$thisTypeinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisTypeinfos->keywords}}@stop
@section('description'){{$thisTypeinfos->description}}@stop
@section('headlibs')
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{!! Request::getrequesturi() !!}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{!! Request::getrequesturi() !!}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{!! Request::getrequesturi() !!}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{!! Request::getrequesturi() !!}" >
    <link rel="canonical" href="{{config('app.url')}}/{{Request::path()}}"/>
@stop
@section('main')
    <div class="p_banner"><img src="/frontend/images/3.jpg" alt="店面形象-满气茶奶茶加盟官网" title="店面形象-满气茶奶茶加盟官网" /></div>
    <div class="p_main_box">
        <div class="p_sidebar">
            <div class="sidebar_nav_box">
                <div class="p_sidebar_title">产品分类</div>
                <div class="sidebar_nav_list">
                    <ul>
                        @foreach($productions as $production)
                            <li @if($loop->first) class="first-child" @elseif($loop->last) class="last-child" @endif><a title="{{$production->typename}}" href="/{{$production->real_path}}">{{$production->typename}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="sidebar_new_box">
                <div class="p_sidebar_title">最新动态</div>
                <div class="sidebar_new_list">
                    <ul>
                        @foreach($latestnews as $latesnew)
                            <li><a href="/article/{{$latesnew->id}}.shtml" title="{{$latesnew->title}}">{{$latesnew->title}}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="sidebar_con_box">
                <div class="p_sidebar_title">联系我们</div>
                <div class="sidebar_con_list">
                    <p><span style="background-color: initial;">电话：400-110-7300</span><br></p><p>地址：上海市松江区延展路455号汉桥文化科技园A幢4楼</p>	</div>
            </div>
        </div>
        <div class="p_r_box">
            <div class="p_r_title">
                <span><a href="/">首页</a><i> > </i><a href="/{{$thisTypeinfos->real_path}}">{{$thisTypeinfos->typename}}</a></span>
                <h6>{{$thisTypeinfos->typename}}</h6>
            </div>
            <div class="p_pro_box">
                <div class="p_pro_list">
                    <ul>
                        @foreach($dianmianlists as $dianmianlist)
                        <li>
                            <a href="/article/{{$dianmianlist->id}}.shtml">
                                <div class="p_pro_more"><img src="/frontend/images/ico_more.png"><span class="imgmid"></span></div>
                                <div class="p_pro_mask"></div>
                                <div class="p_pro_img"><img src="{{$dianmianlist->litpic}}" alt="{{$dianmianlist->title}}" title="{{$dianmianlist->title}}"><span class="imgmid"></span></div>
                                <div class="p_pro_text">{{$dianmianlist->title}}</div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="cle"></div>

            <div class="list">
                {{$dianmianlists->links()}}
            </div>

        </div>
    </div>
@stop
