@extends('mobile.mobile')
@section('title'){{$thisTypeinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisTypeinfos->keywords}}@stop
@section('description'){{$thisTypeinfos->description}}@stop
@section('main')
    <div class="p_main_box">
        <div class="p_banner">
            <mip-img layout="responsive" width="460" height="200" src="/mobile/images/3.jpg" class="mip-element mip-layout-responsive mip-layout-size-defined mip-img-loaded" mip-firstscreen-element=""><mip-i-space style="display: block; padding-top: 43.4783%;">space</mip-i-space><img class="mip-fill-content mip-replaced-content" src="/mobile/images/3.jpg"></mip-img>
        </div>
        <div class="i_mbx_m">
            <div class="i_mbx_title">
                <span><a href="/">首页</a><i> > </i><a href="/{{$thisTypeinfos->real_path}}">{{$thisTypeinfos->typename}}</a></span>
                <h6>{{$thisTypeinfos->typename}}</h6>
            </div>
        </div>

        <div class="p_new_box">
            <div class="p_new_m">
                <div class="p_new_list">
                    <ul>
                        @foreach($newslists as $newslist)
                        <li><a data-type="mip" data-title="{{$newslist->title}}" href="/article/{{$newslist->id}}.shtml">{{$newslist->title}}</a><span>发布时间：{{date('Y-m-d',strtotime($newslist->created_at))}}  浏览次数：{{$newslist->click}}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="cle"></div>
        <div class="list">
            {{$newslists->links()}}
        </div>
    </div>

@stop

