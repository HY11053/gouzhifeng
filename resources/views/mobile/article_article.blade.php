@extends('mobile.mobile')
@section('title'){{$thisArticleInfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisArticleInfos->keywords}}@stop
@section('description'){{$thisArticleInfos->description}}@stop
@section('main')
    <div class="p_main_box">
        <div class="p_banner">
            <mip-img layout="responsive" width="460" height="200" src="/mobile/images/3.jpg" class="mip-element mip-layout-responsive mip-layout-size-defined mip-img-loaded" mip-firstscreen-element=""><mip-i-space style="display: block; padding-top: 43.4783%;">space</mip-i-space><img class="mip-fill-content mip-replaced-content" src="/mobile/images/3.jpg"></mip-img>
        </div>
        <div class="i_mbx_m">
            <div class="i_mbx_title">
                <span><a href="/">首页</a><i> > </i><a href="/{{$thisArticleInfos->arctype->real_path}}/">{{$thisArticleInfos->arctype->typename}}</a></span>
                <h6>{{$thisArticleInfos->arctype->typename}}</h6>
            </div>
        </div>

        <div class="p_r_box">
            <div class="p_r_title">
            </div>
            <div class="p_new_box">
                <div class="p_new_details">
                    <div class="new_d_title">
                        <h1>{{$thisArticleInfos->title}}</h1>
                        <span>发布时间：{{$thisArticleInfos->created_at}}　　浏览次数：{{$thisArticleInfos->click}} </span>
                    </div>
                    <div class="new_d_c">
                        {!! $thisArticleInfos->body !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="cle"></div>
    </div>

    <div class="i_new_box">
        <div class="i_new_m">
            <div class="i_title">
                <h6>热门动态</h6>
            </div>
            <div class="i_new_list">
                <ul>
                    @foreach($latestnews as $latestnew)
                        <li><a data-type="mip" data-title="{{$latestnew->title}}" href="/article/{{$latestnew->id}}.shtml">{{$latestnew->title}}</a><span>发布时间：{{date('Y-m-d',strtotime($latestnew->created_at))}}  浏览次数：{{$latestnew->click}}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@stop

