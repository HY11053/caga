@extends('frontend.frontend')
@section('title'){{$thistypeinfo->title}}-干洗店品牌网@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('headlibs')
    <meta name="Copyright" content="干洗店品牌网-{{env('APP_URL')}}"/>
    <meta name="author" content="干洗店品牌网" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
@stop
@section('main_content')
    <div class="main_content">
        <div class="mianbaoxie center">
            <p><a href="{{config('app.url')}}" style="margin-left: 0px;">首页</a> > <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a> </p>
        </div>

    <div class="conl1 center">

        @if(isset($hotnew))
        <img src="{{$hotnew->litpic}}" alt="{{$hotnew->title}}" />
        <h3><a href="/{{$hotnew->real_path}}/{{$hotnew->id}}.shtml">{{$hotnew->title}}</a></h3>
        <p>{{$hotnew->description}}</p>
        @endif
        <ul>
            @foreach($cnewtops as $cnewtop)
                <li><a href="/{{$cnewtop->arctype->real_path}}/{{$cnewtop->id}}.shtml">{{$cnewtop->title}}</a></li>
            @endforeach
        </ul>
    </div>

    <div class="conl2 center">
        <div class="conl2-left box-shadow">
            <ul>
                @foreach($pagelists as $pagelist)
                <li>
                    <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml"><img src="{{$pagelist->litpic}}" /></a>
                    <h3  class="conl2-left-a"><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml">{{$pagelist->title}}</a></h3>
                    <p>{{$pagelist->description}}</p>
                    <p class="info">{{$pagelist->created_at}}<span>{{config('app.indexname')}}</span></p>
                </li>
                @endforeach
             </ul>
            <div class=" page-bar tc mb20 ">
                {!! str_replace('page=','page/',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()))) !!}
            </div>
            <div class="clear"></div>
        </div>
        <div class="conl2-right box">
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
            <div class="conl2-right-2 box-shadow">
                <h3>品牌专栏<a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/">更多</a></h3>
                <ul>
                    @foreach($abrandlists as $abrandlist)
                    <li>
                        <a href="/{{$abrandlist->arctype->real_path}}/{{$abrandlist->id}}.shtml"><img src="{{$abrandlist->litpic}}" /></a>
                        <a href="" class="conl2-right-2-a">{{$abrandlist->brandname}}</a>
                    </li>
                   @endforeach
                    <div class="clear"></div>
                </ul>
            </div>

            <div class="conl2-right-3 box-shadow">
                <h3>最新入驻品牌<a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/">更多</a></h3>
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
    </div>
        <div class="clear"></div>
    </div>
@stop
