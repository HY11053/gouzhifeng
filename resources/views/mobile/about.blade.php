@extends('mobile.mobile')
@section('title'){{$thisTypeinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisTypeinfos->keywords}}@stop
@section('description'){{$thisTypeinfos->description}}@stop
@section('main')
    <div class="p_new_box">
        <div class="p_new_details">
            <div class="new_d_c">
                <div class="new_d_c">
                    <div class="new_d_title">
                        <h1>{{$thisTypeinfos->typename}}</h1>
                    </div>
                    {!! $thisTypeinfos->contents !!}
                </div>
            </div>
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

