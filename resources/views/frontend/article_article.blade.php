@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{$indexname}}@stop
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
        <p><a href="{{config('app.url')}}" style="margin-left: 0px;">首页</a> > <a href="">{{$thisarticleinfos->arctype->typename}}</a> > <a href="{{$thisarticleinfos->arctype->reap_path}}">{{$thisarticleinfos->title}}</a></p>
    </div>

    <div class="ar_con1 center">
        <div class="ar_con1-left">
            <div class="ar_con1-left-top">
                <h1>{{$thisarticleinfos->title}}</h1>
                <p>{{$thisarticleinfos->created_at}}来源：{{config('app.indexname')}}<font>{{$thisarticleinfos->arctype->typename}}</font></p>
            </div>

            <div class="ar_con1-left-con1">
                <img src="/frontend/images/putongwendang-tu1_03.png" />
                <ul class="ar_con1-ul1">
                    <li><p style="margin-top: 0px;">加盟人气：</p></li>
                    <li><p>加盟费用：</p></li>
                    <li><p>投资金额：</p></li>
                    <li><p>成立时间：</p></li>
                    <li><p>区域特许：</p></li>
                    <li><p>总部地址：</p></li>
                    <li><p>品牌详情：</p></li>
                    <li><p>项目咨询：</p></li>
                </ul>
                <ul class="ar_con1-ul2">
                    <li><p style="margin-top: 0px;">480</p></li>
                    <li><p>面议</p></li>
                    <li><p>10-15万</p></li>
                    <li><p>1994年</p></li>
                    <li><p>全国</p></li>
                    <li><p>威特斯国际干洗</p></li>
                    <li><a href="" style="margin-top: 14px;">快速查看</a></li>
                    <li><a href="">快速咨询</a></li>
                </ul>
            </div>

            <div class="content col-{{rand(1,150000)}}{{rand(1,10000)}}">
                {!! $thisarticleinfos->body !!}
            </div>

            <div class="biaoqian">
                <p>标签:</p>
                <a href="">上一篇：弥茶加盟怎么样? 总部扶持 创业好选择</a>
                <a href="" style="margin-top: 16px;">下一篇：百比佳加盟优势有哪些？投资优势多 门槛低</a>
            </div>

            <div class="ar_con1-left-con5">
                <div class="ar_con1-left-con5-top">
                    <h1>给<font>赛维</font>留言，立即获得最新加盟资料</h1>
                    <p>（<font>*</font>为必填选项）</p>
                </div>

                <ul class="ar_con5-ul1">
                    <li style="margin-top: 0px;">
                        <p><font>*</font>姓名</p>
                        <input type="text" placeholder="您的真实姓名"/>
                    </li>
                    <li>
                        <p><font>*</font>手机</p>
                        <input type="text" placeholder="电话是与您联系的重要方式"/>
                    </li>
                    <li>
                        <p><font>*</font>地址</p>
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
                    <h1><font>*</font>留言</h1>
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
                <h1>赛维加盟咨询</h1>
                <div></div>
                <ul>
                    <li><a href="" style="margin-top: 0px;">公主驾到休闲食品加盟赚钱吗？</a></li>
                    <li><a href="">万元起步 盈利更轻松公主驾到加盟条件有哪些？</a></li>
                    <li><a href="">加盟门槛低 品牌知名度高公主驾到加盟利润怎么样？</a></li>
                    <li><a href="">小投资大回报公主驾到零食加盟费是多少?</a></li>
                    <li><a href="">投入低 致富快加盟公主驾到零食店如何让生意更好？</a></li>
                </ul>
                <ul>
                    <li><a href="" style="margin-top: 0px;">经营技巧要掌握公主驾到休闲零食加盟的做法有哪些？</a></li>
                    <li><a href="">首先需要咨询公主驾到零食加盟店怎么做好经营管理？</a></li>
                    <li><a href="">合理装修很重要开公主驾到加盟店赚钱的概率大吗？</a></li>
                    <li><a href="">轻松赚钱公主驾到零食店加盟，买车买房轻轻松松！</a></li>
                    <li><a href="">公主驾到零食店加盟，加盟一年轻松拿下女神！</a></li>
                </ul>
            </div>

        </div>
        <div class="ar_con1-right">

            <div class="ar_con1-right-1">
                <h1>品牌排行榜<a href="">关注量</a></h1>
                <div class="ar_con1-right-1-xian"></div>
                <ul>
                    <li style="margin-top: 0px;">
                        <a href=""><img src="/frontend/images/con3-right-1_06.png" /></a>
                        <a href="" class="a2"><font>NO1</font><font style="color:#494949;">.威特斯国际干洗</font><br />
                            一家国际知名干洗店，权<br />
                            威认证 </a>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-right-1_06.png" /></a>
                        <a href="" class="a2"><font>NO2</font><font style="color:#494949;">.威特斯国际干洗</font><br />
                            一家国际知名干洗店，权<br />
                            威认证 </a>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-right-1_06.png" /></a>
                        <a href="" class="a2"><font>NO3</font><font style="color:#494949;">.威特斯国际干洗</font><br />
                            一家国际知名干洗店，权<br />
                            威认证 </a>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-right-1_06.png" /></a>
                        <a href="" class="a2"><font>NO4</font><font style="color:#494949;">.威特斯国际干洗</font><br />
                            一家国际知名干洗店，权<br />
                            威认证 </a>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-right-1_06.png" /></a>
                        <a href="" class="a2"><font>NO5</font><font style="color: #494949;">.威特斯国际干洗</font><br />
                            一家国际知名干洗店，权<br />
                            威认证 </a>
                    </li>
                </ul>

            </div>

            <div class="ar_con1-right-2">


                <h1>最新入驻品牌<a href="">更多</a></h1>
                <div class="ar_con1-right-2-xian"></div>

                <ul>
                    <li style="margin-top: 0px;">
                        <a href=""><img src="/frontend/images/con3-rught-2-tu_10.png" /></a>
                        <a href="" class="a3">赛维干洗店</a>
                        <p>
                            投资金额 ： <font>5万以下</font><br />
                            加盟门店数 ： <font>3456</font>
                        </p>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-rught-2-tu_10.png" /></a>
                        <a href=""  class="a3">赛维干洗店</a>
                        <p>
                            投资金额 ： <font>5万以下</font><br />
                            加盟门店数 ： <font>3456</font>
                        </p>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-rught-2-tu_10.png" /></a>
                        <a href=""  class="a3">赛维干洗店</a>
                        <p>
                            投资金额 ： <font>5万以下</font><br />
                            加盟门店数 ： <font>3456</font>
                        </p>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-rught-2-tu_10.png" /></a>
                        <a href="" class="a3">赛维干洗店</a>
                        <p>
                            投资金额 ： <font>5万以下</font><br />
                            加盟门店数 ： <font>3456</font>
                        </p>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-rught-2-tu_10.png" /></a>
                        <a href="" class="a3">赛维干洗店</a>
                        <p>
                            投资金额 ： <font>5万以下</font><br />
                            加盟门店数 ： <font>3456</font>
                        </p>
                    </li>




                </ul>



            </div>

            <div class="ar_con1-right-3">
                <h1>最新加盟资讯<a href="">更多</a></h1>
                <div class="ar_con1-right-3-xian"></div>

                <ul>
                    <li style="margin-top: 0px;">
                        <a href=""><img src="/frontend/images/con2-right-4_13.png" /></a>
                        <a href="" class="a4">1988豆花加盟条件是什么？</a>
                        <p>2018-10-12<font>11:51:57</font></p>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con2-right-4_13.png" /></a>
                        <a href="" class="a4">1988豆花加盟条件是什么？</a>
                        <p>2018-10-12<font>11:51:57</font></p>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con2-right-4_13.png" /></a>
                        <a href="" class="a4">1988豆花加盟条件是什么？</a>
                        <p>2018-10-12<font>11:51:57</font></p>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con2-right-4_13.png" /></a>
                        <a href="" class="a4">1988豆花加盟条件是什么？</a>
                        <p>2018-10-12<font>11:51:57</font></p>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con2-right-4_13.png" /></a>
                        <a href="" class="a4">1988豆花加盟条件是什么？</a>
                        <p>2018-10-12<font>11:51:57</font></p>
                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con2-right-4_13.png" /></a>
                        <a href="" class="a4">1988豆花加盟条件是什么？</a>
                        <p>2018-10-12<font>11:51:57</font></p>
                    </li>
                </ul>
            </div>

        </div>
        <div class="clear"></div>
    </div>

</div>
@stop