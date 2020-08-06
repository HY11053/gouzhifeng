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

        <div class="p_pro_box">
            <div class="p_pro_m">
                <div class="p_pro_list">
                    <ul>
                        @foreach($productionlists as $productionlist)
                            <li>
                                <a data-type="mip" data-title="{{$productionlist->title}}"title="{{$productionlist->title}}"  href="/article/{{$productionlist->id}}.shtml">
                                    <div class="p_pro_img"><mip-img layout="responsive" width="160" height="160" src="{{$productionlist->litpic}}" alt="{{$productionlist->title}}" class="mip-element mip-layout-responsive mip-layout-size-defined mip-img-loaded" mip-firstscreen-element=""><mip-i-space style="display: block; padding-top: 80%;">space</mip-i-space><img class="mip-fill-content mip-replaced-content" src="{{$productionlist->litpic}}" alt="{{$productionlist->title}}"></mip-img></div>
                                    <div class="p_pro_text">{{str_limit($productionlist->title,20,'')}}</div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="cle"></div>
        <div class="list">
            {{$productionlists->links()}}
        </div>
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

