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
@stop
@section('main_content')
    <div class="con1 center">
        <div class="con1-left">
            <h1>项目查找</h1>
            <select style="margin-top: 12px;">
                <option>干洗分类</option>
                <option>干洗分类</option>
                <option>干洗分类</option>
            </select>
            <select>
                <option>投资金额</option>
                <option>投资金额</option>
                <option>投资金额</option>
                <option>投资金额</option>
            </select>
            <select>
                <option>店铺面积</option>
                <option>店铺面积</option>
                <option>店铺面积</option>
                <option>店铺面积</option>
            </select>

            <input type="text" placeholder="请输入文本" class="input1">
            <input type="button" value="项目搜索" class="input2">
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
            <script src="/demos/googlegg.js"></script>

            <div id="wrapper">

                <div id="slider-wrap">
                    <ul id="slider">
                        <li style="background: url(/frontend/images/banner_18.png) no-repeat center;background-size:100% 100% ;">
                            <i class="fa fa-image"></i>
                        </li>

                        <li style="background: url(/frontend/images/banner04.png) no-repeat center;background-size:100% 100% ;">
                            <i class="fa fa-gears"></i>
                        </li>

                        <li style="background: url(/frontend/images/banner02.png) no-repeat center;background-size: 100% 100%;">
                            <i class="fa fa-sliders"></i>
                        </li>

                        <li style="background: url(/frontend/images/banner06.png) no-repeat center ;background-size: 100% 100%;">
                            <i class="fa fa-code"></i>
                        </li>
                        <li style="background: url(/frontend/images/banner07.png) no-repeat center;background-size: 100% 100%;">
                            <i class="fa fa-microphone-slash"></i>
                        </li>
                    </ul>
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
        <div class="con1-right">
            <h1>5000</h1>
            <ul class="xiangmu">
                <li><p style="margin-top: 0px;">【赛维干洗】干洗品牌不负期望。。。</p></li>
                <li><p>【赛维干洗】干洗品牌不负期望。。。</p></li>
                <li><p>【赛维干洗】干洗品牌不负期望。。。</p></li>
            </ul>
            <input type="button" value="马上找好项目"/>
            <div class="bibei">
                <p>创业必备工具</p>
            </div>
            <ul class="gongju">
                <li style="margin-left: 0px;margin-top: 0px;">
                    <img src="/frontend/images/con1-right_28.png" />
                    <a href="">成本计算</a>
                </li>
                <li style="margin-top: 0px;">
                    <img src="/frontend/images/con1-right_30.png" />
                    <a href="">贷款计算</a>
                </li>
                <li style="margin-top: 0px;">
                    <img src="/frontend/images/con1-right_33.png" style="margin-top: 12px;"/>
                    <a href="">投资预算</a>
                </li>
                <li style="margin-left: 0px;">
                    <img src="/frontend/images/con1-right_55.png" style="margin-top: 11px;" />
                    <a href="">创业红包</a>
                </li>
                <li>
                    <img src="/frontend/images/con1-right_52.png" style="margin-top: 10px;" />
                    <a href="">先行赔付</a>
                </li>
                <li>
                    <img src="/frontend/images/con1-right_39.png"  style="margin-top: 0px;"/>
                    <a href="">金融支持</a>
                </li>
            </ul>
        </div>

    </div>

    <div class="con2 center">
        <div class="con2-left">
            <h1 class="con2-left-top-1">品牌推荐</h1>
            <a href="" class="con2-left-top-2">查看更多</a>
            <div class="con2-left-xian"></div>

            <div class="con2-left-left">
                <img src="/frontend/images/con2-left01_03.png" />
                <p>干洗店加盟连锁品牌中名列前茅的干洗<br />
                    店，名字叫做UCC国际洗衣。那么相比<br />
                    其他干洗加盟连锁品牌，UCC国际洗衣<br />
                    有哪些独特的优势呢?</p>
                <a href="">了解详情</a>
            </div>

            <div class="con2-left-right">


                    <dl>
                        <dt>
                            <img src="/frontend/images/con2-left-right_07.png" alt="">
                            <div class="brandinfo">
                                <strong>德奈福干洗</strong>
                                <p>国际大品牌 轻松洗衣一站式</p>
                            </div>
                        </dt>
                        <dd>
                        <p>全球门店<font>5000</font>家！覆盖全球<font>70%</font></p>
                        <h3>5-10万</h3>
                        <a href="">了解详情</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <img src="/frontend/images/con2-left-right_07.png" alt="">
                            <div class="brandinfo">
                                <strong>德奈福干洗</strong>
                                <p>国际大品牌 轻松洗衣一站式</p>
                            </div>
                        </dt>
                        <dd>
                        <p>全球门店<font>5000</font>家！覆盖全球<font>70%</font></p>
                        <h3>5-10万</h3>
                        <a href="">了解详情</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <img src="/frontend/images/con2-left-right_07.png" alt="">
                            <div class="brandinfo">
                                <strong>德奈福干洗</strong>
                                <p>国际大品牌 轻松洗衣一站式</p>
                            </div>
                        </dt>
                        <dd>
                        <p>全球门店<font>5000</font>家！覆盖全球<font>70%</font></p>
                        <h3>5-10万</h3>
                        <a href="">了解详情</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <img src="/frontend/images/con2-left-right_07.png" alt="">
                            <div class="brandinfo">
                                <strong>德奈福干洗</strong>
                                <p>国际大品牌 轻松洗衣一站式</p>
                            </div>
                        </dt>
                        <dd>
                        <p>全球门店<font>5000</font>家！覆盖全球<font>70%</font></p>
                        <h3>5-10万</h3>
                        <a href="">了解详情</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <img src="/frontend/images/con2-left-right_07.png" alt="">
                            <div class="brandinfo">
                                <strong>德奈福干洗</strong>
                                <p>国际大品牌 轻松洗衣一站式</p>
                            </div>
                        </dt>
                        <dd>
                        <p>全球门店<font>5000</font>家！覆盖全球<font>70%</font></p>
                        <h3>5-10万</h3>
                        <a href="">了解详情</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <img src="/frontend/images/con2-left-right_07.png" alt="">
                            <div class="brandinfo">
                                <strong>德奈福干洗</strong>
                                <p>国际大品牌 轻松洗衣一站式</p>
                            </div>
                        </dt>
                        <dd>
                        <p>全球门店<font>5000</font>家！覆盖全球<font>70%</font></p>
                        <h3>5-10万</h3>
                        <a href="">了解详情</a>
                        </dd>
                    </dl>


            </div>

        </div>
        <div class="con2-right">
            <h1 class="con2-right-top-1">排行榜</h1>
            <div></div>
            <img src="/frontend/images/con2-right_11.png"  class="con2-right-img"/>
            <ul class="con2-left-ul1">
                <li style="margin-top: 0px;">
                    <img src="/frontend/images/con2-right_15.png" />
                    <a href="">NO1.    <font>威特斯国际干洗</font></a>
                </li>
                <li>
                    <img src="/frontend/images/con2-right_21.png" />
                    <a href="">NO2.    <font>UCC国际洗衣</font></a>
                </li>
                <li>
                    <img src="/frontend/images/con2-right_27.png" />
                    <a href="">NO3.    <font>德奈福国际干洗</font></a>
                </li>
                <li>
                    <img src="/frontend/images/con2-right_29.png" />
                    <a href="品牌详情页.html">NO4.    <font>赛维国际干洗</font></a>
                </li>
                <li>
                    <img src="/frontend/images/con2-right_34.png" />
                    <a href="">NO5.    <font>洁丰国际干洗</font></a>
                </li>
            </ul>

            <ul class="con2-left-ul2">
                <li style="margin-top: 0px;"><p>12345</p></li>
                <li><p>9235</p></li>
                <li><p>8336</p></li>
                <li><p>6412</p></li>
                <li><p>3558</p></li>
            </ul>

        </div>
    </div>

    <div class="xiantiao1 center">
        <img src="/frontend/images/xitian-con1_18.png" />
    </div>

    <div class="con3 center">
        <div class="con3-left">

            <h1 class="con2-left-top-1">新品推荐</h1>
            <a href="" class="con2-left-top-2">查看更多</a>
            <div class="con2-left-xian"></div>

            <div class="con2-left-left">
                <img src="/frontend/images/con3_22.png" />
                <p>赛维干洗店加盟在国内投资巨资设立干<br />
                    洗设备生产基地，全套引进生产工艺，<br />
                    每个细节全面实行电脑监控，确保干洗<br />
                    设备的高质量要求。</p>
                <a href="">了解详情</a>
            </div>

            <ul class="con2-left-right">

                <dl>
                    <dt>
                        <img src="/frontend/images/con2-left-right_07.png" alt="">
                        <div class="brandinfo">
                            <strong>德奈福干洗</strong>
                            <p>国际大品牌 轻松洗衣一站式</p>
                        </div>
                    </dt>
                    <dd>
                        <p>全球门店<font>5000</font>家！覆盖全球<font>70%</font></p>
                        <h3>5-10万</h3>
                        <a href="">了解详情</a>
                    </dd>
                </dl>

                <dl>
                    <dt>
                        <img src="/frontend/images/con2-left-right_07.png" alt="">
                        <div class="brandinfo">
                            <strong>德奈福干洗</strong>
                            <p>国际大品牌 轻松洗衣一站式</p>
                        </div>
                    </dt>
                    <dd>
                        <p>全球门店<font>5000</font>家！覆盖全球<font>70%</font></p>
                        <h3>5-10万</h3>
                        <a href="">了解详情</a>
                    </dd>
                </dl>

                <dl>
                    <dt>
                        <img src="/frontend/images/con2-left-right_07.png" alt="">
                        <div class="brandinfo">
                            <strong>德奈福干洗</strong>
                            <p>国际大品牌 轻松洗衣一站式</p>
                        </div>
                    </dt>
                    <dd>
                        <p>全球门店<font>5000</font>家！覆盖全球<font>70%</font></p>
                        <h3>5-10万</h3>
                        <a href="">了解详情</a>
                    </dd>
                </dl>

                <dl>
                    <dt>
                        <img src="/frontend/images/con2-left-right_07.png" alt="">
                        <div class="brandinfo">
                            <strong>德奈福干洗</strong>
                            <p>国际大品牌 轻松洗衣一站式</p>
                        </div>
                    </dt>
                    <dd>
                        <p>全球门店<font>5000</font>家！覆盖全球<font>70%</font></p>
                        <h3>5-10万</h3>
                        <a href="">了解详情</a>
                    </dd>
                </dl>

                <dl>
                    <dt>
                        <img src="/frontend/images/con2-left-right_07.png" alt="">
                        <div class="brandinfo">
                            <strong>德奈福干洗</strong>
                            <p>国际大品牌 轻松洗衣一站式</p>
                        </div>
                    </dt>
                    <dd>
                        <p>全球门店<font>5000</font>家！覆盖全球<font>70%</font></p>
                        <h3>5-10万</h3>
                        <a href="">了解详情</a>
                    </dd>
                </dl>

                <dl>
                    <dt>
                        <img src="/frontend/images/con2-left-right_07.png" alt="">
                        <div class="brandinfo">
                            <strong>德奈福干洗</strong>
                            <p>国际大品牌 轻松洗衣一站式</p>
                        </div>
                    </dt>
                    <dd>
                        <p>全球门店<font>5000</font>家！覆盖全球<font>70%</font></p>
                        <h3>5-10万</h3>
                        <a href="">了解详情</a>
                    </dd>
                </dl>

            </ul>

        </div>
        <div class="con3-right">
            <h1>品牌资讯</h1>
            <div></div>

            <img src="/frontend/images/con3_30.png" />

            <ul class="con3-ul1">
                <li><a href="" style="margin-top: 0px;font-size: 14px;color: #d40822;">如何降低干洗店投资成本?专家支</a></li>
                <li><p>从现在干洗店的市场行情来看，选择干洗开店的人是不<br />
                        少的。但...</p></li>
                <li><a href="" style="margin-top: 5px;">开一家干洗店需要多少钱?费用详</a></li>
                <li><a href="">开家洗衣店成本要多少?低成本居</a></li>
                <li><a href="">加盟一个洗衣店要多少钱?费用低</a></li>
            </ul>

            <ul class="con3-ul2">
                <li><a href="" style="margin-top: 0px;font-size: 14px;color: #d40822;">开一个干洗店大概需要投资多少钱</a></li>
                <li><a href="" style="margin-top: 12px;">开干洗加盟店预计需要多少钱</a></li>
                <li><a href="">开家干洗店加盟预计需要多少钱</a></li>
                <li><a href="">干洗加盟店利润如何能够稳定提高</a></li>
            </ul>
        </div>
    </div>

    <div class="xiantiao2 center">
        <img src="/frontend/images/xitiao-con2_43.png" />
    </div>

    <div class="con4 center">
        <div class="con4-left">
            <h1 class="con4-left-top-1">设备推荐</h1>
            <a href="" class="con4-left-top-2">查看更多</a>
            <div class="con4-left-xian"></div>

            <div class="con4-left-left">
                <img src="/frontend/images/con4_46.png" />
                <p>
                    <font style="margin-bottom: 5px;">
                        “UCC”系列F141B 溶剂干洗机<br />
                    </font>
                    是目前世界上技术性能领先的最新一代环保、高<br />
                    效、节能型干洗机，是世界洗衣科技的又一领先<br />
                    突破!根据多年的行业经验，、皮革、裘皮衣物、<br />
                    纺织品服装的干洗溶液——HCFC141B 溶剂(简<br />
                    称141B)，这是一种透明无味的、高纯度的、无<br />
                    毒、无腐蚀、不燃，稳定性高，ODP 值极低的<br />
                    环保清洗溶剂，具有良好的化学稳定性。
                </p>
                <a href="">点击查看</a>
            </div>

            <ul class="con4-left-right">
                <li style="margin-left: 0px;">
                    <img src="/frontend/images/con4_51.png" />
                    <h1>四氯乙烯干洗机</h1>
                    <p>全自动四氯乙烯干洗机<br />
                        用于服装厂、工矿企业<br />
                        以及个体洗染行业</p>
                    <a href="">点击查看</a>
                </li>
                <li>
                    <img src="/frontend/images/con4_53.png" />
                    <h1>多溶剂精洗机
                    </h1>
                    <p>独家专利，打破行规<br />
                        一机器多用，引领高端<br />
                        洗衣风尚</p>
                    <a href="">点击查看</a>
                </li>
                <li>
                    <img src="/frontend/images/con4_55.png" />
                    <h1>自动烘干机

                    </h1>
                    <p>采用耐热优良SUS3004<br />
                        不锈钢做内桶箱，可以<br />
                        保持烘干环境</p>
                    <a href="">点击查看</a>
                </li>
                <li>
                    <img src="/frontend/images/con4_57.png" />
                    <h1>自动干洗机

                    </h1>
                    <p>自动干洗机，内部结构<br />
                        与众不同，采用不一样<br />
                        的技术</p>
                    <a href="">点击查看</a>
                </li>
                <li style="margin-left: 0px;margin-top: 13px;">
                    <img src="/frontend/images/con4_66.png" />
                    <h1>干洗烘干一体机
                    </h1>
                    <p>该技术用国家正规高端<br />
                        技术，制造商保证绝对<br />
                        的方便</p>
                    <a href="">点击查看</a>
                </li>
                <li style="margin-top: 13px;">
                    <img src="/frontend/images/con4_68.png" />
                    <h1>全自动干洗机
                    </h1>
                    <p>该技术采用的是欧洲<br />
                        正规进口的技术，加上<br />
                        科技</p>
                    <a href="">点击查看</a>
                </li>
                <li style="margin-top: 13px;">
                    <img src="/frontend/images/con4_70.png" />
                    <h1>超级干洗机
                    </h1>
                    <p>该干洗机是一款以用在<br />
                        多出的干洗机，如医院<br />
                        工厂，学校等等</p>
                    <a href="">点击查看</a>
                </li>
                <li style="margin-top: 13px;">
                    <img src="/frontend/images/con4_72.png" />
                    <h1>烘干机
                    </h1>
                    <p>该烘干机是高能量的<br />
                        的。他可以容纳多件的<br />
                        衣物等</p>
                    <a href="">点击查看</a>
                </li>
            </ul>
        </div>

        <div class="con4-right">
            <h1>创业资讯</h1>
            <div></div>
            <img src="/frontend/images/con4_48.png" />
            <ul>
                <li style="margin-top: 0px;"><a href=""><font>11-12</font>现在开家干洗店成本要多少？ <font style="float: right;margin-right: 0px;font-size: 14px;">></font>  </a></li>
                <li><a href=""><font>11-01</font>开干洗店有哪些盈利技巧？               <font style="float: right;margin-right: 0px;font-size: 14px;">></font>       </a></li>
                <li><a href=""><font>10-25</font>品牌干洗店有哪些加盟优势？            <font style="float: right;margin-right: 0px;font-size: 14px;">></font>         </a></li>
                <li><a href=""><font>10-15</font>如何给你的干洗市场定位？                <font style="float: right;margin-right: 0px;font-size: 14px;">></font>        </a></li>
                <li><a href=""><font>10-07</font>干洗店的店面该如何装修更吸引顾       <font style="float: right;margin-right: 0px;font-size: 14px;">></font>        </a></li>
                <li><a href=""><font>09-30</font>如何选择干洗品牌开店？                    <font style="float: right;margin-right: 0px;font-size: 14px;">></font>         </a></li>
                <li><a href=""><font>09-25</font>成功开干洗店途径：选择好的品牌         <font style="float: right;margin-right: 0px;font-size: 14px;">></font>       </a></li>
                <li><a href=""><font>09-20</font>如何开一家高质量的品牌干洗店？          <font style="float: right;margin-right: 0px;font-size: 14px;">></font>     </a></li>
            </ul>
        </div>

    </div>
    <div class="xiantiao3">
        <img src="/frontend/images/xitiao-con3_78.png" />
    </div>

    <div class="con5 center">
        <div class="con5-left">
            <h1 class="con5-left-top-1">样板店</h1>
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
                    <li><a href="" style="font-size: 14px;color: #d40822;">干洗店装修费用</a></li>
                    <li style="margin-top: 18px;"><a href="">干洗店如何正确把握装修格</a></li>
                    <li><a href="">洗衣店装修多少钱</a></li>
                    <li><a href="">开一家干洗店装修重要么</a></li>
                </ul>

                <ul>
                    <li><a href="" style="font-size: 14px;color: #d40822;">45平干洗店装修效果图</a></li>
                    <li style="margin-top: 18px;"><a href="">干洗店如何装修能收到顾客的青睐</a></li>
                    <li><a href="">一般装修一个干洗店需要多久</a></li>
                    <li><a href="">干洗店应该如何装修好</a></li>
                </ul>

                <ul style="width: 189px;margin-left: 15px;">
                    <li><a href="" style="font-size: 14px;color: #d40822;">80平干洗店装修效果图</a></li>
                    <li style="margin-top: 18px;"><a href="">干洗店装修费用</a></li>
                    <li><a href="">干洗店装修图纸设计</a></li>
                    <li><a href="">薪金普丽店怎么装修好</a></li>
                </ul>

                <ul style="width: 189px;margin-left: 15px;">
                    <li><a href="" style="font-size: 14px;color: #d40822;">小型干洗店怎么装修</a></li>
                    <li style="margin-top: 18px;"><a href="">40平干洗店装修效果图</a></li>
                    <li><a href="">80平干洗店装修效果图</a></li>
                    <li><a href="">开干洗店装修风格重要么</a></li>
                </ul>

            </div>





        </div>
        <div class="con5-right">
            <h1>经营指南</h1>
            <div></div>

            <img src="/frontend/images/con5-tu_09.png" />

            <ul>
                <li style="margin-top: 0px;"><a href=""><font>10-28</font>选择哪个干洗店加盟品牌<font style="float: right;margin-right: 0px;font-size: 14px;">></font>  </a></li>
                <li><a href=""><font>10-28</font>加盟干洗店到底有什么好<font style="float: right;margin-right: 0px;font-size: 14px;">></font>       </a></li>
                <li><a href=""><font>10-28</font> 开什么样的干洗店好如何<font style="float: right;margin-right: 0px;font-size: 14px;">></font>         </a></li>
                <li><a href=""><font>10-28</font>干洗加盟商选择品牌如何 <font style="float: right;margin-right: 0px;font-size: 14px;">></font>        </a></li>
                <li><a href=""><font>10-28</font>干洗店加盟如何获得成功<font style="float: right;margin-right: 0px;font-size: 14px;">></font>        </a></li>
                <li><a href=""><font>10-28</font>国内有哪些比较好的干洗<font style="float: right;margin-right: 0px;font-size: 14px;">></font>         </a></li>
                <li><a href=""><font>10-28</font> 想开家干洗店不知哪个品<font style="float: right;margin-right: 0px;font-size: 14px;">></font>       </a></li>
            </ul>

        </div>
    </div>

    <div class="foot">
        <div class="center">
            <p>
                <img src="/frontend/images/youqiglianjie_20.png" />友情链接  :
            </p>
            <ul>
                <li><a href="">干洗店加盟</a></li>
                <li><a href="">中国干洗网</a></li>
                <li><a href="">UCC干洗店加盟</a></li>
                <li><a href="">福奈特干洗店加盟</a></li>
                <li><a href="">干洗店品牌大全干</a></li>
                <li><a href="">洗店加盟排行榜</a></li>
                <li><a href="">赛维干洗店加盟</a></li>
                <li><a href="">象王干洗店加盟</a></li>
                <li><a href="">咖啡店加盟</a></li>
                <li><a href="" style="margin-top: 10px;">服装加盟</a></li>
                <li><a href="" style="margin-top: 10px;">美博会</a></li>
            </ul>
        </div>
    </div>
@stop
@section('footerlibs')
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/slide.js"></script>
@stop