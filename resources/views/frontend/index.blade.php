@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <link rel="stylesheet" href="frontend/css/swiper.min.css" />
@stop
@section('main_content')
    <div class="main_content">
    <div class="con1 center box-shadow">
        <div class="con1-left">
            <div class="fenleitit">干洗品牌筛选</div>
            <select style="margin-top: 12px;">
                <option>干洗分类</option>
                <option>干洗分类</option>
                <option>干洗分类</option>
            </select>
            <select>
                <option>1~5万</option>
                <option>5~10万</option>
                <option>10~20万</option>
                <option>20万~50万</option>
                <option>20万~50万</option>
                <option>50~100万</option>
            </select>
            <select>
                <option>1~10平米</option>
                <option>10~30平米</option>
                <option>30~50平米</option>
                <option>50~80平米</option>
                <option>50~80平米</option>
                <option>100平米以上</option>
            </select>
            <input type="text" placeholder="请输入文本" class="input1">
            <button type="submit" class="input2">项目搜索</button>
            <ul class="jiner">
                <li><p>投资金额</p></li>
                <li><a href="" style="margin-top: 13px;">1-5万元</a></li>
                <li><a href="" style="margin-top: 13px;">5-10万元</a></li>
                <li><a href="">10-20万元</a></li>
                <li><a href="">20-50万元</a></li>
                <li><a href="">50-100万元</a></li>
                <li><a href="">100万以上</a></li>
            </ul>
            <ul class="mianji">
                <li><p>面积</p></li>
                <li><a href="" style="margin-top: 13px;">10平以下</a></li>
                <li><a href="" style="margin-top: 13px;">10-30平米</a></li>
                <li><a href="">30-50平米</a></li>
                <li><a href="">50-80平米</a></li>
                <li><a href="">100平以上</a></li>
            </ul>
        </div>
        <!--<div class="banner">
            <img src="/frontend/images/banner_18.png"/>
        </div>-->
        <div class="middle">
            <div class="carousel carousel-bar1">
                <div class="ovh swiper-container">
                    <ul class="ban-ul swiper-wrapper">
                        <a target="_blank" href="/brand/1396/" class="item img-block swiper-slide"><img src="/frontend/images/banner_18.png" alt="UCC国际洗衣"></a>
                        <a target="_blank" href="/brand/7/" class="item img-block swiper-slide"><img src="/frontend/images/banner04.png" alt="福奈特干洗店"></a>
                        <a target="_blank" href="/brand/1062/" class="item img-block swiper-slide"><img src="/frontend/images/banner02.png" alt="康洁干洗店"></a>
                        <a target="_blank" href="/brand/1062/" class="item img-block swiper-slide"><img src="/frontend/images/banner06.png" alt="皇家圣雪"></a>
                        <a target="_blank" href="/brand/1062/" class="item img-block swiper-slide"><img src="/frontend/images/banner07.png" alt="赛维干洗店"></a>
                    </ul>
                </div>
                <div class="dot">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="con1-bottom">
                <ul>
                    <li>
                        <img src="/frontend/images/con1-bottom_26.png" />
                        <p>找项目</p>
                    </li>
                    <li>
                        <img src="/frontend/images/con1-bottom_28.png" />
                        <p>留言咨询</p>
                    </li>
                    <li>
                        <img src="/frontend/images/con1-bottom_30.png" />
                        <p>等待回访</p>
                    </li>
                    <li style="border-right: none;">
                        <img src="/frontend/images/con1-bottom_33.png" />
                        <p>成功合作</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="fr xm-qingxian">
            <h2>项目抢先看</h2>
            <div class="carousel xm-carousel">
                <div class="ovh swiper-container">
                    <ul class="ban-ul swiper-wrapper">
                        @foreach($hotbrands as $hotbrand)
                        <li class="item swiper-slide">
                            <div style="padding:0 20px">
                                <img src="{{$hotbrand->indexpic}}" width="190" height="190">
                                <p class="f16"> {{$hotbrand->brandname}}</p>
                                <p class="f14">
                                    投资金额：<b class="s-oe">{{$hotbrand->brandpay}}</b>
                                </p>
                                <p class="h72">{{$hotbrand->brandpsp}}</p>
                                <div class="btn-bar">
                                    <a target="_blank" href="/{{$hotbrand->arctype->real_path}}/{{$hotbrand->id}}.shtml" class="btn btn-oe-line fl">详细考察</a><a href="javascript:void(0);" class="btn btn-oe fr btn-wyzx">我要咨询</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="con2 center box-shadow">
        <div class="con2-left">
            <h1 class="con2-left-top-1">干洗店连锁品牌推荐</h1>
            <a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/" class="con2-left-top-2">查看更多</a>
            <div class="con2-left-xian"></div>
            <div class="con2-left-left">
                @if(isset($brandnew))
                <img src="{{$brandnew->litpic}}" alt="{{$brandnew->title}}" /><p>{{str_limit($brandnew->description,160,'...')}}<a href="/{{$brandnew->arctype->real_path}}/{{$brandnew->id}}.shtml">了解详情</a></p>
                @endif
            </div>
            <div class="con2-left-right">
                @foreach($cbrands as $cbrand)
                    <dl>
                        <dt>
                            <a href="/{{$cbrand->arctype->real_path}}/{{$cbrand->id}}.shtml"><img src="{{$cbrand->indexpic}}" alt="{{$cbrand->brandname}}"></a>
                            <div class="brandinfo">
                                <strong>{{$cbrand->brandname}}</strong>
                                <p>{{str_limit($cbrand->brandpsp,22,'')}}</p>
                            </div>
                        </dt>
                        <dd>
                        <p>门店总数<span>{{$cbrand->brandnum}}家！</span>开店率<span>{{rand(90,99)}}%</span></p>
                        <h3>{{$cbrand->brandpay}}</h3>
                        <a href="/{{$cbrand->arctype->real_path}}/{{$cbrand->id}}.shtml">了解详情</a>
                        </dd>
                    </dl>
                @endforeach
            </div>

        </div>
        <div class="con2-right">
            <h1 class="con2-right-top-1" id="paihangbang">排行榜</h1>
            <img src="/frontend/images/con2-right_11.png"  class="con2-right-img"/>
            <ul class="con2-left-ul1">
                @foreach($paihangbangs as $index=>$paihangbang)
                    <li><img src="{{$paihangbang->litpic}}" /><a href="">NO{{$index+1}}.<span>{{$paihangbang->brandname}}</span></a> <span class="paiming">{{$paihangbang->brandnum}}</span></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="xiantiao1 center">
        <img src="/frontend/images/xitian-con1_18.png" />
    </div>
    <div class="con3 center box-shadow">
        <div class="con3-left">
            <h3 class="con2-left-top-1">新品推荐</h3>
            <a href="" class="con2-left-top-2">查看更多</a>
            <div class="con2-left-xian"></div>
            <div class="con2-left-left">
                @if(isset($cbrandnew))
                    <img src="{{$cbrandnew->litpic}}" alt="{{$cbrandnew->title}}" /><p>{{str_limit($cbrandnew->description,160,'...')}}<a href="/{{$cbrandnew->arctype->real_path}}/{{$cbrandnew->id}}.shtml">了解详情</a></p>
                @endif
            </div>
            <ul class="con2-left-right">
                @foreach($brands as $brand)
                    <dl>
                        <dt>
                            <a href="/{{$brand->arctype->real_path}}/{{$brand->id}}.shtml"><img src="{{$brand->indexpic}}" alt="{{$brand->brandname}}"></a>
                            <div class="brandinfo">
                                <strong>{{$brand->brandname}}</strong>
                                <p>{{str_limit($brand->brandpsp,22,'')}}</p>
                            </div>
                        </dt>
                        <dd>
                            <p>门店总数<span>{{$brand->brandnum}}家！</span>开店率<span>{{rand(90,99)}}%</span></p>
                            <h3>{{$brand->brandpay}}</h3>
                            <a href="/{{$brand->arctype->real_path}}/{{$brand->id}}.shtml">了解详情</a>
                        </dd>
                    </dl>
                @endforeach
            </ul>

        </div>
        <div class="con3-right">
            <h3 class="con4-left-top-1">品牌资讯</h3>
            <div></div>
            @foreach($brandnews as $index=>$brandnew)
                @if($index<1)
                    <img src="{{$brandnew->litpic}}" />
                @endif
            @endforeach
            <ul class="con3-ul1">
                @foreach($brandnews as $index=>$brandnew)
                <li class="newlist"><a href="/{{$brandnew->arctype->real_path}}/{{$brandnew->id}}.shtml" >{{$brandnew->title}}</a></li>
                @if($loop->first)
                    <li><p>{{str_limit($brandnew->description,132,'...')}}</p></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

    <div class="xiantiao2 center">
        <img src="/frontend/images/xitiao-con2_43.png" />
    </div>

    <div class="con4 center box-shadow">
        <div class="con4-left">
            <h3 class="con4-left-top-1">干洗店设备选购</h3>
            <a href="" class="con4-left-top-2">查看更多</a>
            <div class="con4-left-xian"></div>
            @if(isset($cshebei))
            <div class="con4-left-left">
                <img src="{{$cshebei->litpic}}" />
                <dl class="sb_title">
                    <dt>{{$cshebei->title}}</dt>
                    <dd>{{$cshebei->description}}<a href="/{{$cshebei->arctype->real_path}}/{{$cshebei->id}}.shtml">点击查看</a></dd>
                </dl>
            </div>
            @endif
            <ul class="con4-left-right">
                @foreach($ganxishebeis as $ganxishebei)
                <li>
                    <img src="{{$ganxishebei->litpic}}" />
                    <h1>{{$ganxishebei->title}}</h1>
                    <p>{{str_limit($ganxishebei->description,40,'')}}</p>
                    <a href="/{{$ganxishebei->arctype->real_path}}/{{$ganxishebei->id}}.shtml">点击查看</a>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="con4-right">
            <h3 class="con4-left-top-1">干洗设备资讯</h3>
            <div></div>
            <img src="/frontend/images/con4_48.png" />
            <ul>
                @foreach($shebeilists as $shebeilist)
                    <li><a href=""><span>{{date('Y-m-d',strtotime($shebeilist->created_at))}}</span>{{$shebeilist->title}}<span style="float: right;margin-right: 0px;font-size: 14px;">></span>  </a></li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="xiantiao3">
        <img src="/frontend/images/xitiao-con3_78.png" />
    </div>

    <div class="con5 center box-shadow">
        <div class="con5-left">
            <h3 class="con5-left-top-1">干洗店品牌门店</h3>
            <a href="" class="con5-left-top-2">查看更多</a>
            <div class="con5-left-xian"></div>

            <div class="con5-left-tu">
                <div class="con5-left-tu1">
                    <div>
                        <a href="">百福莱干洗店</a>
                    </div>
                </div>
                <div class="con5-left-tu2">
                    <div>
                        <a href="">赛维干洗店</a>
                    </div>
                </div>
                <div class="con5-left-tu3">
                    <div>
                        <a href="">澳洁干洗店</a>
                    </div>
                </div>
                <div class="con5-left-tu4">
                    <div>
                        <a href="">洁丰干洗店</a>
                    </div>
                </div>
                <div class="con5-left-tu5">
                    <div>
                        <a href="">洗多郎干洗店</a>
                    </div>
                </div>
            </div>
            <div class="con5-left-zi">

                <ul>
                    <li class="first_line"><a href="" style="font-size: 14px;">干洗店装修费用</a></li>
                    <li class="first_line"><a href="">干洗店如何正确把握装修格</a></li>
                    <li class="first_line"><a href="">洗衣店装修多少钱</a></li>
                    <li class="first_line"><a href="">开一家干洗店装修重要么</a></li>
                    <li><a href="">小型干洗店怎么装修</a></li>
                    <li style=""><a href="">40平干洗店装修效果图</a></li>
                    <li><a href="">80平干洗店装修效果图</a></li>
                    <li><a href="">开干洗店装修风格重要么</a></li>
                    <li><a href="">45平干洗店装修效果图</a></li>
                    <li style=""><a href="">干洗店如何装修能收到顾客的青睐</a></li>
                    <li><a href="">一般装修一个干洗店需要多久</a></li>
                    <li><a href="">干洗店应该如何装修好</a></li>
                    <li><a href="">80平干洗店装修效果图</a></li>
                    <li style=""><a href="">干洗店装修费用</a></li>
                    <li><a href="">干洗店装修图纸设计</a></li>
                    <li><a href="">薪金普丽店怎么装修好</a></li>
                    <li><a href="">薪金普丽店怎么装修好</a></li>
                    <li><a href="">薪金普丽店怎么装修好</a></li>
                    <li><a href="">薪金普丽店怎么装修好</a></li>
                    <li><a href="">薪金普丽店怎么装修好</a></li>
                </ul>

            </div>

        </div>
        <div class="con5-right">
            <h1>经营指南</h1>
            <div></div>
            <img src="/frontend/images/con5-tu_09.png" />

            <ul>
                @foreach($latestnews as $latestnew)
                <li><a href="/{{$latestnew->arctype->real_path}}/{{$latestnew->id}}.shtml"><span>{{$latestnew->title}}</span></a></li>
                @endforeach
            </ul>

        </div>
    </div>

    <div class="flink">
        <div class="center">
            <p> 友情链接  :</p>
            <ul>
                @foreach($flinks as $flink)
                <li><a href="{{$flink->weburl}}">{{$flink->webname}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@stop
@section('footerlibs')
    <script src="/frontend/js/jquery.min.js"></script>
    <script src="/frontend/js/swiper.min.js"></script>
    <script>
        var mySwiper = new Swiper ('.swiper-container', {
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 5000,
                stopOnLastSlide: false,
                disableOnInteraction: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
@stop