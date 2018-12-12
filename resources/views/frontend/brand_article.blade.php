@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{$indexname}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{trim($thisarticleinfos->description)}}@stop
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
    <meta property="article:author" content="{{config('app.name')}}" />
    <meta property="article:published_first" content="{{config('app.name')}}, {{config('app.url')}}{{Request::getrequesturi()}}" />
    <link rel="stylesheet" href="/frontend/css/index.css" />
    <link rel="stylesheet" href="/frontend/css/article.css" />
    <link rel="stylesheet" href="/frontend/css/brand_article.css" />
@stop
@section('main_content')
<div class="main_content">
    <div class="mianbaoxie center">
        <p><a href="{{config('app.url')}}" style="margin-left: 0px;">首页</a> > <a href="/{{$thisarticleinfos->arctype->real_path}}/">{{$thisarticleinfos->arctype->typename}}</a> > <a href="">{{str_replace('加盟','',$thisarticleinfos->brandname)}}加盟</a></p>
    </div>
    <div class="b_con1 center box-shadow">
        <div class="b_con1-left">
            <div class="b_con1-left-tu">
                <img src="/frontend/images/pinpaixinagqingye-con1_03.png"  class="datu"/>
                <ul>
                    <li style="margin-left: 0px;"><img src="/frontend/images/pinpaixinagqingye-con1_03.png" /></li>
                    <li><img src="/frontend/images/pinpaixinagqingye-con1_03.png" /></li>
                    <li><img src="/frontend/images/pinpaixinagqingye-con1_03.png" /></li>
                    <li><img src="/frontend/images/pinpaixinagqingye-con1_03.png" /></li>
                    <li><img src="/frontend/images/pinpaixinagqingye-con1_03.png" /></li>
                </ul>
            </div>


            <div class="b_con1-right">
                <div class="b_con1-right-top">
                    <h1>【{{$thisarticleinfos->brandname}}】</h1>
                    <ul>
                        <li style="margin-top: 0px;"><p>投资金额：<font style="font-size: 16px;color: #df0000;">{{$thisarticleinfos->brandpay}}</font></p></li>
                        <li><p>所属行业：<font>干洗</font></p></li>
                    </ul>

                </div>

                <div class="b_con1-right-con">
                    <ul>
                        <li><p style="margin-top: 0px;">成立时间：<font>{{$thisarticleinfos->brandtime}}</font></p></li>
                        <li><p>品牌发源地：<font>{{$thisarticleinfos->brandorigin}}</font></p></li>
                        <li><p>加盟区域：<font>{{$thisarticleinfos->brandarea}}等全国地区</font></p></li>
                        <li><p>经营范围：<font>{{$thisarticleinfos->brandmap}}</font></p></li>
                        <li><p>所需面积：<font>{{$thisarticleinfos->acreage}}</font></p></li>
                    </ul>

                    <ul>
                        <li><p style="margin-top: 0px;">门店总数：<font>{{$thisarticleinfos->brandnum}}</font></p></li>
                        <li><p>适合人群：<font>{{$thisarticleinfos->brandperson}}</font></p></li>
                        <li><p>项目咨询人数：<font>{{$thisarticleinfos->brandchat}}</font></p></li>
                        <li><p>公司名称：<font>{{$thisarticleinfos->brandgroup}}</font></p></li>
                        <li><p>公司地址：<font>{{$thisarticleinfos->brandaddr}}</font></p></li>
                    </ul>
                </div>

                <div class="b_con1-right-bottom">
                    <ul style="margin-left: 0px;">
                        <li><p>意向加盟</p></li>
                        <li><h1>{{$thisarticleinfos->brandattch}}</h1></li>
                        <li><font>|</font></li>
                    </ul>
                    <ul>
                        <li><p>申请加盟</p></li>
                        <li><h1>{{$thisarticleinfos->brandapply}}</h1></li>
                        <li><font>|</font></li>
                    </ul>
                    <ul>
                        <li><p>品牌好评率</p></li>
                        <li><h1>{{rand(95,99)}}%</h1></li>
                        <!--<li><font>|</font></li>-->
                    </ul>
                </div>
                <div class="b_con1-right-button">
                    <ul>
                        <li>
                            <input type="button" value="申请加盟"/>
                        </li>
                        <li>
                            <input type="button" value="2629" style="width: 97px;background: none;border: 1px solid #efefef;color: #322931;margin-left: 10px;"/>
                        </li>
                        <li>
                            <input type="button" value="成本计算" style="width: 97px;background: none;border: 1px solid #efefef;color: #322931;margin-left: 10px;"/>
                        </li>
                    </ul>
                </div>


            </div>

        </div>

        <div class="b_con-right">
            <img src="/frontend/images/pinpaixinagqingye-con1_03.png" />
            <h1>{{$thisarticleinfos->brandgroup}}</h1>
            <ul>
                <li><p style="margin-top: 0px;">所在地：<font>{{$thisarticleinfos->brandaddr}}</font></p></li>
                <li><p>注册资金：<font>{{$thisarticleinfos->registeredcapital}}</font></p></li>
                <li><p>公司类型：<font>{{$thisarticleinfos->genre}}</font></p></li>
            </ul>
            <input type="button" value="在线加盟" style="margin-left: 30px;"/>
            <input type="button" value="我要咨询"/>
        </div>

        <div class="b_con1-bottom">
            <p>浏览：{{$thisarticleinfos->click}} 更新时间：{{$thisarticleinfos->created_at}}</p>
        </div>
    </div>

    <div class="b_con2 center">
        <div class="tu1">
            <img src="/frontend/images/risk_title@2x.png" />
        </div>
        <div class="zi1">
            <ul>
                <li><a href="" style="margin-left: 21px;">自身风险<font>20</font></a></li>
                <li><a href="">关联风险<font>15</font></a></li>
                <li><a href="">提示信息<font>1</font></a></li>
            </ul>
        </div>
        <div class="tu2">
            <img src="/frontend/images/qingbao_title@2x.png" />
        </div>
        <div class="zi2">
            <a href="">一扫光加盟怎么样？只要10.28万即可开店做老板</a>
        </div>
    </div>


    <div class="b_con3 center">
        <div class="b_con3-left box-shadow">
            <ul class="b_con3-left-top">
                <li style="width: 172px;font-weight: 500;"><a href="">特许经营信息</a></li>
                <li><a href="">品牌介绍</a></li>
                <li><a href="">品牌展示</a></li>
                <li><a href="">投资分析</a></li>
                <li><a href="">品牌资讯</a></li>
                <li><a href="">品牌门店</a></li>
                <li style="border: none;"><a href="">项目咨询</a></li>
            </ul>

            <div class="b_con3-1">
                <h2>{{$thisarticleinfos->brandname}}加盟公示信息</h2>
                <table class="ntable">
                    <tr>
                        <td width="20%" class="tb">品牌名称：</td>
                        <td width="30%" class=""> {{$thisarticleinfos->brandname}}</td>
                        <td width="20%" class="tb">特许备案号：</td>
                        <td width="30%" class=""> 0111500111800050 </td>
                    </tr>
                    <tr>
                        <td class="tb">特许品牌：</td>
                        <td class=""> {{$thisarticleinfos->brandname}} </td>
                        <td class="tb" width="18%">备案公告时间	：</td>
                        <td class=""> 2018-09-20 </td>
                    </tr>
                    <tr>
                        <td class="tb">公司类型：</td>
                        <td class=""> {{$thisarticleinfos->genre}} </td>
                        <td class="tb">所属行业：</td>
                        <td class=""> 干洗店连锁加盟 </td>
                    </tr>
                    <tr>
                        <td class="tb">投资金额：</td>
                        <td class="" style="max-width:301px;"> {{$thisarticleinfos->brandpay}} </td>
                        <td class="tb">门店数：</td>
                        <td class=""> {{$thisarticleinfos->brandnum}} </td>
                    </tr>
                    <tr>
                        <td class="tb">店铺所需面积：</td>
                        <td class="" style="max-width:301px;"> {{$thisarticleinfos->acreage}}</td>
                        <td class="tb">品牌发源地：</td>
                        <td class=""> {{$thisarticleinfos->brandorigin}} </td>
                    </tr>
                    <tr>
                        <td class="tb"> 申请加盟 </td>
                        <td class=""> {{$thisarticleinfos->brandapply}}</td>
                        <td class="tb"> 意向加盟 </td>
                        <td class=""> {{$thisarticleinfos->brandattch}} </td>
                    </tr>
                    <tr>
                        <td class="tb"> 公司名称 </td>
                        <td class=""> {{$thisarticleinfos->brandgroup}} </td>
                        <td class="tb"> 注册资金 </td>
                        <td class=""> {{$thisarticleinfos->registeredcapital}}</td>

                    </tr>
                    <tr>
                        <td class="tb"> 加盟人群 </td>
                        <td class=""> {{$thisarticleinfos->brandperson}} </td>
                        <td class="tb"> 加盟区域 </td>
                        <td class=""> {{$thisarticleinfos->brandarea}} 等全国地区</td>
                    </tr>
                    <tr>
                        <td class="tb">企业地址：</td>
                        <td class="" > {{$thisarticleinfos->brandaddr}}</td>
                        <td class="tb">经营范围：</td>
                        <td class=""> {{$thisarticleinfos->brandmap}}</td>
                    </tr>
                </table>
            </div>

            <div class="b_con3-2">
                <div class="xiaokuai2"></div>
                <h2>{{$thisarticleinfos->brandname}}品牌介绍</h2>
                {!! $thisarticleinfos->body !!}
            </div>
            <div class="b_con3-6">
                <div class="xiaokuai6"></div>
                <h1>{{$thisarticleinfos->brandname}}<font>运营综合分析</font></h1>
                <div class="b_con3-6-xian"></div>

                <table>
                    <tbody>
                    <tr>
                        <td class="td_color">品牌名称</td>
                        <td class="td_style">公主驾到</td>
                        <td class="td_color">装修费用</td>
                        <td class="td_style">49929</td>
                    </tr>
                    <tr>
                        <td class="td_color">前两季度房租</td>
                        <td class="td_style">2216</td>
                        <td class="td_color">货铺/设备费用</td>
                        <td class="td_style">13417</td>
                    </tr>
                    <tr>
                        <td class="td_color">流动资金</td>
                        <td class="td_style">20000</td>
                        <td class="td_color">人工开支</td>
                        <td class="td_style">2378</td>
                    </tr>
                    <tr>
                        <td class="td_color">工商税务杂项</td>
                        <td class="td_style">2605</td>
                        <td class="td_color">水电煤(元/月)</td>
                        <td class="td_style">448</td>

                    </tr>
                    <tr>
                        <td class="td_color">日成交量</td>
                        <td class="td_style">87</td>
                        <td class="td_color">平均单价</td>
                        <td class="td_style">84</td>
                    </tr>
                    <tr>
                        <td class="td_color">日均成本</td>
                        <td class="td_style">215</td>
                        <td class="td_color">日均收入</td>
                        <td class="td_style">7355</td>
                    </tr>
                    <tr>
                        <td class="td_color">月收入</td>
                        <td class="td_style">22.065万</td>
                        <td class="td_color">年收入</td>
                        <td class="td_style">268.4575万</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="b_con3-7">
                <div class="b_con3-7-xiaokuai"></div>
                <div class="b_con3-7-top">
                    <h1>给<font>赛维</font>留言，立即获得最新加盟资料</h1>
                    <p>（<font>*</font>为必填选项）</p>
                </div>

                <ul class="b_con3-7-ul1">
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

                <ul class="b_con3-7-ul2">
                    <li>
                        <input type="radio" name="sex" id="" value="男" />
                        <p>先生</p>
                    </li>
                    <li>
                        <input type="radio" name="sex" id="" value="女" />
                        <p>女士</p>
                    </li>
                </ul>

                <div class="b_con3-7-bottom">
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

            <div class="b_con3-8">
                <div class="b_con3-8-xiaokuai"></div>
                <h1>赛维加盟咨询</h1>
                <div class="b_con3-8-xian"></div>
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
        <div class="b_con3-right">

            <div class="b_con3-right-1 box-shadow">
                <h1>品牌排行榜<a href="">关注量</a></h1>
                <div class="b_con3-right-1-xian"></div>
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

            <div class="b_con3-right-2 box-shadow">


                <h1>最新入驻品牌<a href="">更多</a></h1>
                <div class="b_con3-right-2-xian"></div>

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
                        <a href=""  class="a3">赛维干洗店</a>
                        <p>
                            投资金额 ： <font>5万以下</font><br />
                            加盟门店数 ： <font>3456</font>
                        </p>
                    </li>




                </ul>



            </div>

            <div class="b_con3-right-3 box-shadow">
                <ul>
                    <li style="height: 59px;"><h1>干洗品牌加盟资讯</h1></li>
                    <li><a href="">罗山县男孩女孩童装柜组</a></li>
                    <li><a href="">京江南数娱(北京)科技有限公司</a></li>
                    <li><a href="">上海童涵春堂晨春大药房</a></li>
                    <li><a href="">日喀则市秋林硼业有限公司</a></li>
                    <li style="border: none;"><a href="">中旗科创(北京)投资基金有限公司</a></li>
                    <li style="border: none;"><a href="">中旗科创(北京)投资基金有限公司</a></li>
                    <li style="border: none;"><a href="">中旗科创(北京)投资基金有限公司</a></li>
                    <li style="border: none;"><a href="">中旗科创(北京)投资基金有限公司</a></li>
                    <li style="border: none;"><a href="">中旗科创(北京)投资基金有限公司</a></li>
                </ul>
            </div>

            <div class="b_con3-right-4 box-shadow">
                <h1>全站最新品牌资讯</h1>
                <ul>
                    <li>
                        <a href="">王前进调研“朱雀一号”运载火箭出厂前<br />
                            准备工作

                        </a>
                        <p>2018-10-09<font>西安区县新闻网</font></p>
                    </li>

                    <li>
                        <a href="">综述：细数国际宇航大会上的中国航天新<br />
                            品|不来梅|中国航天|宇航_新浪新闻
                        </a>
                        <p>2018-10-04<font>新浪新闻</font></p>
                    </li>

                    <li>
                        <a href="">综述：细数国际宇航大会上的中国航天新<br />
                            品-新华网
                        </a>
                        <p>2018-10-04<font>新华网</font></p>
                    </li>

                    <li style="height: 169px;">
                        <a href="">航天民企崛起这三年：官方支持超预期，<br />
                            人才流动趋向正常化-谢涛,航天,航天科技,<br />
                            张琦,中国,张小平,发射场,舒畅,民企,北京,-<br />
                            中国新闻-东方网
                        </a>
                        <p>2018-10-04<font>东方网</font></p>
                    </li>

                    <li style="height: 156px;">
                        <a href="">张小平事件后航天民企引关注：人才流动<br />
                            趋向正常化-摩拜 航天发射 正常化 航天动<br />
                            力 航天公司-中国新闻-东方网
                        </a>
                        <p>2018-10-04<font>东方网</font></p>
                    </li>
                </ul>
            </div>

        </div>
        <div class="clear"></div>
    </div>
</div>
@stop