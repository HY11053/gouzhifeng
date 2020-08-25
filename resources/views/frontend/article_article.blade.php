@extends('frontend.frontend')
@section('title'){{$thisArticleInfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisArticleInfos->keywords}}@stop
@section('description'){{$thisArticleInfos->description}}@stop
@section('headlibs')
<meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{!! Request::getrequesturi() !!}" />
<meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{!! Request::getrequesturi() !!}" />
<meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{!! Request::getrequesturi() !!}" />
<link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{!! Request::getrequesturi() !!}" >
@stop
@section('main')
    <div class="p_banner"><img src="/templates/images/6.jpg" alt="满气茶奶茶加盟官网"></div>
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
        </div>	<div class="p_r_box">
            <div class="p_r_title">
                <span><a href="/">首页</a><i> &gt; </i><a href="/xinwen/hangye/">加盟动态</a></span>
                <h6>加盟动态</h6>
            </div>
            <div class="p_new_box">
                <div class="p_new_details">
                    <div class="new_d_title">
                        <h1>{{$thisArticleInfos->title}}</h1>
                        <span>发布时间：{{$thisArticleInfos->created_at}}　来源:满气茶奶茶　浏览次数{{$thisArticleInfos->click}} </span>
                    </div>
                    <div class="new_d_c">
                        {!! $thisArticleInfos->body !!}
                    </div>
                </div>
                <div class="cle"></div>
              {{--  <div class="list">
                    <li>上一篇：<a href="#">@</a>   下一篇：没有了 </li>
                </div>--}}
            </div>
        </div>
    </div>
@stop
