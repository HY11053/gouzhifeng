@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}/" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}/" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}/" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}/" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}/"/>
@stop
@section('main')
    <div class="box_skitter box_skitter_large">
        <ul>
            <li><img src="/frontend/images/20181017114424158431.jpg"></li>
            <li><img src="/frontend/images/20200601104045.jpg"></li>
            <li><img src="/frontend/images/20181017114411762687.jpg" alt="奶茶产品-满气茶奶茶加盟官网"></li>
            <li><img src="/frontend/images/20200601105640.jpg" alt="国潮来袭不潮不玩-满气茶奶茶加盟"></li>
        </ul>
    </div>
    <div class="i_abo_box">
        <div class="i_title">
            <h6>关于国潮茶饮—满气茶奶茶</h6>
            <span>ABOUT US</span>
        </div>
        <div class="i_abo_m">
            <p>国潮新中式茶饮—满气茶奶茶，隶属于南京九州盛世餐饮管理有限公司，致力于结合中国深厚的文化底蕴，创造茶饮行业新价值，不盲从，敢不同。随处可见的京剧、中国红、中式装修风格、开发的中式周边产品都有浓厚的中国文化特色，并且满气茶相信……<a href="/xinwen/gongsi/2019113019.html">更多</a></p>
        </div>
        <div class="i_abo_list">
            <ul>
                <li>
                    <div class="i_abo_img"><img src="/frontend/images/abo_tab_1.png"><span class="imgmid"></span></div>
                    <div class="i_abo_title">满气茶简介</div>
                    <div class="i_abo_text">国潮满气茶奶茶以技术培训、开店扶持、营销策划、原料供应为核心。</div>
                </li>
                <li>
                    <div class="i_abo_img"><img src="/frontend/images/abo_tab_2.png"><span class="imgmid"></span></div>
                    <div class="i_abo_title">满气茶VI</div>
                    <div class="i_abo_text">国潮满气茶奶茶运用中国风的元素，国潮茶饮定位，充满古色古香风味。</div>
                </li>
                <li>
                    <div class="i_abo_img"><img src="/frontend/images/abo_tab_3.png"><span class="imgmid"></span></div>
                    <div class="i_abo_title">满气茶文化</div>
                    <div class="i_abo_text">国潮满气茶奶茶的品牌始终坚信，只有不凡的团队才能打造不凡的品牌。</div>
                </li>
                <li>
                    <div class="i_abo_img"><img src="/frontend/images/abo_tab_4.png"><span class="imgmid"></span></div>
                    <div class="i_abo_title">满气茶加盟</div>
                    <div class="i_abo_text">国潮满气茶奶茶致力于为中国创业者带来创新的茶饮加盟创业项目品牌。</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="i_pro_box">
        <div class="i_title">
            <h6>奶茶产品</h6>
            <span>PRODUCTS CENTER</span>
        </div>
        <div class="i_pro_tab">
            <ul>
                @foreach($prodcutiontypes as $prodcutiontype)
                    <li @if($loop->first) class="active" @endif >{{$prodcutiontype}}</li>
                @endforeach
            </ul>
        </div>
        <div class="i_pro_m">
            <div class="i_pro_c">
                <div class="i_pro_list">
                    <ul>
                        @foreach($production1s as $production1)
                            <li>
                                <a href="/article/{{$production1->id}}.shtml" title="{{$production1->title}}">
                                    <div class="i_pro_text" wdd="center">
                                        <div class="i_pro_title">{{$production1->title}}</div>
                                        <div class="i_pro_more"><img src="/frontend/images/ico_more.png"></div>
                                    </div>
                                    <div class="i_pro_mask"></div>
                                    <div class="i_pro_img"><img src="{{$production1->litpic}}" alt="{{$production1->title}}" title="{{$production1->title}}"><span class="imgmid"></span></div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="i_pro_ico"></div>
            </div>
            <div class="i_pro_c">
                <div class="i_pro_list">
                    <ul>
                        @foreach($production2s as $production2)
                            <li>
                                <a href="/article/{{$production2->id}}.shtml" title="{{$production2->title}}">
                                    <div class="i_pro_text" wdd="center">
                                        <div class="i_pro_title">{{$production2->title}}</div>
                                        <div class="i_pro_more"><img src="/frontend/images/ico_more.png"></div>
                                    </div>
                                    <div class="i_pro_mask"></div>
                                    <div class="i_pro_img"><img src="{{$production2->litpic}}" alt="{{$production2->title}}" title="{{$production2->title}}"><span class="imgmid"></span></div>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="i_pro_ico"></div>
            </div>
            <div class="i_pro_c">
                <div class="i_pro_list">
                    <ul>
                        @foreach($production3s as $production3)
                            <li>
                                <a href="/article/{{$production3->id}}.shtml" title="{{$production3->title}}">
                                    <div class="i_pro_text" wdd="center">
                                        <div class="i_pro_title">{{$production1->title}}</div>
                                        <div class="i_pro_more"><img src="/frontend/images/ico_more.png"></div>
                                    </div>
                                    <div class="i_pro_mask"></div>
                                    <div class="i_pro_img"><img src="{{$production3->litpic}}" alt="{{$production3->title}}" title="{{$production3->title}}"><span class="imgmid"></span></div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="i_pro_ico"></div>
            </div>
        </div>
    </div>
    <div class="i_store_box">
        <div class="i_title">
            <h6>店面形象</h6>
            <span>STORE DISPLAY</span>
        </div>
        <div class="i_store_m">
            <div class="i_store_btn">
                <div class="store_btn prev"></div>
                <div class="store_btn next"></div>
            </div>
            <div class="i_store_list">
                <ul>
                    @foreach($dianmians as $dianmian)
                    <li><a href="/article/{{$dianmian->id}}.shtml" title="{{$dianmian->title}}"><img src="{{$dianmian->litpic}}" alt="{{$dianmian->title}}" title="{{$dianmian->title}}"><span class="imgmid"></span></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="i_store_more"><a href="/dianmian">查看更多</a></div>
    </div>

    <div class="i_new_box">
        <div class="i_title">
            <h6>新闻中心</h6>
            <span>NEWS CENTER</span>
        </div>
        <div class="i_new_m">
            <div class="i_new_c">
                @if(isset($cgsnew->id))
                    <div class="i_new_img"><a href="/article/{{$cgsnew->id}}.shtml"><img src="{{$cgsnew->litpic}}"><span class="imgmid"></span></a></div>
                @endif
                    <div class="i_new_list">
                        <ul>
                            @foreach($gsnews as $gsnew)
                                <li><span>{{date(strtotime($gsnew->created_at))}} </span><a href="/article/{{$gsnew->id}}.shtml" title="{{$gsnew->title}}">{{$gsnew->title}}</a></li>
                            @endforeach
                       </ul>
                    </div>
            </div>
            <div class="i_new_list2">
                <ul>
                    @foreach($jmnews as $jmnew)
                        <li><span>{{date(strtotime($jmnew->created_at))}}</span><a href="/article/{{$jmnew->id}}.shtml" title="{{$gsnew->title}}">{{$gsnew->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="i_slogan_box">
        <div class="i_slogan_m">
            <div class="i_slogan_text">
                <div class="i_slogan_title">现代派，中国茶，打造国潮满气茶奶茶好品牌！</div>
                <div class="i_slogan_txt">MODERN, CHINESE TEA, CREATE CHA HAI TANG TEA GOOD BRAND!</div>
            </div>
            <div class="i_slogan_more"><a href="#">申请加盟</a></div>
        </div>
    </div>
@stop
@section('flink')
    <div class="i_f_m">
        <div class="i_f_link">
            <div class="f_link_title">友情链接</div>
            {{--<div class="f_link_list"><a href="http://www.maijicanyin.com" target="_blank" >麦吉餐饮</a>
                <a href="http://www.sxzxscy.com" target="_blank" >炒饭加盟</a>
                <a href="http://www.sljggd.com" target="_blank" >板栗加盟</a>
            </div>--}}
        </div>
    </div>
@stop
