@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{$thisarticleinfos->description}}@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.name')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.name')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="{{$thisarticleinfos->created_at}}+08:00" />
    <meta property="og:image" content="{{config('app.url')}}{{str_replace(config('app.url'),'',$thisarticleinfos->litpic)}}"/>
@stop
@section('main_content')
<div class="main_content">
    <div class="mianbaoxie center">
        <p><a href="{{config('app.url')}}" style="margin-left: 0px;">首页</a> > <a href="/{{$thisarticleinfos->arctype->real_path}}/">{{$thisarticleinfos->arctype->typename}}</a> > <a href="{{$thisarticleinfos->arctype->reap_path}}">{{$thisarticleinfos->title}}</a></p>
    </div>
    <div class="ar_con1 center">
        <div class="ar_con1-left">
            <div class="ar_con1-left-top">
                <h1>{{$thisarticleinfos->title}}</h1>
                <p>{{$thisarticleinfos->created_at}}来源：{{config('app.indexname')}}<span>{{$thisarticleinfos->arctype->typename}}</span></p>
            </div>
            @if(isset($thisBrandArticle->id))
            <div class="ar_con1-left-con1">
                <div class="top-box">
                    <div class="left"><img src="{{$thisBrandArticle->litpic}}" width="120" height="120" alt=""></div>
                    <div class="mid">
                        <h3 class="nowrap">{{$thisBrandArticle->brandname}}</h3>
                        <span class="nowrap">{{$thisBrandArticle->brandgroup}}</span>
                        <a href="/{{$thisBrandArticle->arctype->real_path}}/{{$thisBrandArticle->id}}.shtml" target="">索要资料</a>
                        <p>
                            <em>{{$thisBrandArticle->brandpay}}</em>
                            <i class="nowrap">适宜人群：{{$thisBrandArticle->brandperson}}</i>
                            <i class="nowrap">加盟区域：{{$thisBrandArticle->brandarea}}</i>
                        </p>
                    </div>
                    <div class="right"><a href="/{{$thisBrandArticle->arctype->real_path}}/{{$thisBrandArticle->id}}.shtml" target="">{{$thisBrandArticle->brandname}}加盟</a></div>
                </div>
            </div>
            @endif
            <div class="content col-{{rand(1,150000)}}{{rand(1,10000)}}">
                {!! $thisarticleinfos->body !!}
            </div>

            <div class="biaoqian">
                <p>@if(isset($prev_article)) <span>上一篇：<a href="{{config('app.url')}}/{{$prev_article->arctype->real_path}}/{{$prev_article->id}}.shtml" title="{{$prev_article->title}}">{{str_limit($prev_article->title,40,'')}}</a></span> @else 没有了 @endif </p>
                <p>@if(isset($next_article))  <span class="right">下一篇：<a href="{{config('app.url')}}/{{$prev_article->arctype->real_path}}/{{$next_article->id}}.shtml" title="{{$next_article->title}}">{{str_limit($next_article->title,40,'')}}</a></span> @else 没有了 @endif  </p>
            </div>

            <div class="ar_con1-left-con5">
                <div class="ar_con1-left-con5-top">
                    <div class="bf_tit">@if(isset($thisBrandArticle->id))给<span>{{$thisBrandArticle->brandname}}</span>留言，@endif立即获得最新加盟资料</div>
                    <p>（<span>*</span>为必填选项）</p>
                </div>

                <ul class="ar_con5-ul1">
                    <li style="margin-top: 0px;">
                        <p><span>*</span>姓名</p>
                        <input type="text" placeholder="您的真实姓名"/>
                    </li>
                    <li>
                        <p><span>*</span>手机</p>
                        <input type="text" placeholder="电话是与您联系的重要方式"/>
                    </li>
                    <li>
                        <p><span>*</span>地址</p>
                        <input type="text" placeholder="与您联系的重要方式"/>
                    </li>
                </ul>

                <ul class="ar_con5-ul2">
                    <li>
                        <input type="radio" name="sex" id="" value="男" />
                        <p>先生</p>
                    </li>
                    <li>
                        <input type="radio" name="sex" id="" value="女" />
                        <p>女士</p>
                    </li>
                </ul>

                <div class="ar_con1-left-con5-bottom">
                    <h1><span>*</span>留言</h1>
                    <textarea id="note" name="content" class="textarea_bk" placeholder="请输入您的留言内容或选择快捷留言"></textarea>

                    <ul>
                        <li><p>请填写留言或根据意向选择下列快捷留言</p></li>
                        <li><a href="">我加盟后，您们还会提供哪些服务？</a></li>
                        <li><a href="">有兴趣开一个店，请寄资料或给我打电话。</a></li>
                        <li><a href="">请问我这个地方有加盟商了吗？</a></li>
                        <li><a href="">请将详细投资方案和资料寄给本人。</a></li>
                        <li><a href="">初步打算加盟贵公司，请寄资料。</a></li>
                    </ul>

                    <input type="button" value="提交留言"/>

                </div>

            </div>

            <div class="ar_con1-left-con6">
                <div class="bf_tit">@if(isset($thisBrandArticle->id)){{str_replace('加盟','',$thisBrandArticle->brandname)}}加盟@endif资讯</div>
                <ul>
                    @foreach($xg_search as $search)
                    <li><a href="/{{$search->arctype->real_path}}/{{$search->id}}.shtml" >{{$search->title}}</a></li>
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="ar_con1-right">

            <div class="bl_con3-right-1 box-shadow">
                <h3>干洗品牌排行榜</h3>
                <div class="bl_con3-right-1-xian"></div>
                <ul>
                    @foreach($topbrands as $index=>$topbrand)
                        <li>
                            <a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml"><img src="{{$topbrand->litpic}}" /></a>
                            <dl class="paihangbf">
                                <dt class="a2"><span>NO{{$index+1}}.</span><a class="b_tit" href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml">{{$topbrand->brandname}}</a></dt>
                                <dd>
                                    项目特色:{{str_limit($topbrand->brandpsp,40,'')}}
                                </dd>
                            </dl>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="conl2-right-3 box-shadow">


                <h3>最新入驻品牌<a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/">更多</a></h3>
                <div class="conl2-right-3-xian"></div>

                <ul>
                    @foreach($latestbrands as $latestbrand)
                        <li @if($loop->first) class="mt0" @endif>
                            <a href="/{{$latestbrand->arctype->real_path}}/{{$latestbrand->id}}.shtml"><img src="{{$latestbrand->litpic}}" /></a>
                            <a href="" class="a3">{{$latestbrand->brandname}}</a>
                            <p>
                                投资金额 ： <span>{{$latestbrand->brandpay}}</span><br />
                                加盟门店数 ： <span>{{$latestbrand->brandnum}}</span>
                            </p>
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="conl2-right-4 box-shadow">
                <h3>最新加盟资讯<a href="">更多</a></h3>
                <div class="conl2-right-4-xian"></div>

                <ul>
                    @foreach($latesenews as $latesenew)
                        <li @if($loop->first) class="mt0" @endif>
                            <a href="/{{$latesenew->arctype->real_path}}/{{$latesenew->id}}.shtml"><img src="{{$latesenew->litpic}}" /></a>
                            <a href="" class="a4">{{$latesenew->title}}</a>
                            <p>{{$latesenew->created_at}}</p>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="clear"></div>
    </div>

</div>
@stop