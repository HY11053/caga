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
        <p><a href="index.html" style="margin-left: 0px;">首页</a> > <a href="">创业资讯</a> > <a href="">北京蓝箭空间科技有限公司</a></p>
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
                    <h1>【赛维干洗】</h1>
                    <ul>
                        <li style="margin-top: 0px;"><p>投资金额：<font style="font-size: 16px;color: #df0000;">10-20万元以上</font></p></li>
                        <li><p>所属行业：<font>零食s</font></p></li>
                    </ul>

                </div>

                <div class="b_con1-right-con">
                    <ul>
                        <li><p style="margin-top: 0px;">成立时间：<font>2012</font></p></li>
                        <li><p>加盟区域：<font>北京，上海，安徽等全国</font></p></li>
                        <li><p>经营范围：<font>炒货，坚果，夏威夷果等</font></p></li>
                        <li><p>店铺面积：<font>>20平米</font></p></li>
                        <li><p>店铺面积：<font>>20平米</font></p></li>
                    </ul>

                    <ul>
                        <li><p style="margin-top: 0px;">门店总数：<font>300</font></p></li>
                        <li><p>适合人群：<font>大学生，80后，白领等</font></p></li>
                        <li><p>店铺面积：<font>>20平米</font></p></li>
                        <li><p>店铺面积：<font>>20平米</font></p></li>
                        <li><p>店铺面积：<font>>20平米</font></p></li>
                    </ul>
                </div>

                <div class="b_con1-right-bottom">
                    <ul style="margin-left: 0px;">
                        <li><p>意向加盟</p></li>
                        <li><h1>5964</h1></li>
                        <li><font>|</font></li>
                    </ul>
                    <ul>
                        <li><p>申请加盟</p></li>
                        <li><h1>5274</h1></li>
                        <li><font>|</font></li>
                    </ul>
                    <ul>
                        <li><p>品牌好评率</p></li>
                        <li><h1>97%</h1></li>
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
            <h1>安徽三只松鼠电子商务有限公司</h1>
            <ul>
                <li><p style="margin-top: 0px;">所在地：<font>安徽省芜湖市弋江区高新开发区南</font></p></li>
                <li><p>注册资金：<font>150万</font></p></li>
                <li><p>公司类型：<font>个体经营</font></p></li>
            </ul>
            <input type="button" value="在线加盟" style="margin-left: 30px;"/>
            <input type="button" value="我要咨询"/>
        </div>

        <div class="b_con1-bottom">
            <p>浏览：34561</p>
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
                <div></div>
                <h1>威特斯特许公示信息</h1>

                <table class="ntable">

                    <tr>
                        <td width="20%" class="tb">品牌名称：</td>
                        <td width="30%" class=""> 三只松鼠 </td>
                        <td width="20%" class="tb">特许备案号：</td>
                        <td width="30%" class=""> 0111500111800050 </td>
                    </tr>
                    <tr>
                        <td class="tb">特许品牌：</td>
                        <td class=""> 三只松鼠 </td>
                        <td class="tb" width="18%">备案公告时间	：</td>
                        <td class=""> 2018-09-20 </td>
                    </tr>
                    <tr>
                        <td class="tb">统一社会信用代码：</td>
                        <td class=""> 91110108344314759F </td>
                        <td class="tb">纳税人识别号：</td>
                        <td class=""> 91110108344314759F </td>
                    </tr>
                    <tr>
                        <td class="tb">注册号：</td>
                        <td class=""> 110108019216937 </td>
                        <td class="tb" width="15%">组织机构代码：</td>
                        <td class=""> 34431475-9 </td>
                    </tr>
                    <tr>
                        <td class="tb">公司类型：</td>
                        <td class=""> 有限责任公司(自然人投资或控股) </td>
                        <td class="tb">所属行业：</td>
                        <td class=""> 科学研究和技术服务业 </td>
                    </tr>
                    <tr>
                        <td class="tb">投资金额：</td>
                        <td class="" style="max-width:301px;"> ￥3万以下 </td>
                        <td class="tb">门店数：</td>
                        <td class=""> 3316 </td>
                    </tr>
                    <tr>
                        <td class="tb">店铺所需面积：</td>
                        <td class="" style="max-width:301px;"> 10-30平米</td>
                        <td class="tb">品牌发源地：</td>
                        <td class=""> 芜湖 </td>
                    </tr>
                    <tr>
                        <td class="tb"> 申请加盟 </td>
                        <td class=""> 669人</td>
                        <td class="tb"> 意向加盟 </td>
                        <td class=""> 1505 </td>
                    </tr>
                    <tr>
                        <td class="tb"> 公司名称 </td>
                        <td class=""> 三只松鼠有限公司 </td>
                        <td class="tb"> 注册资金 </td>
                        <td class=""> 5000万</td>

                    </tr>
                    <tr>
                        <td class="tb"> 加盟人群 </td>
                        <td class=""> 工薪阶层、80后、白领、自由职业者、 </td>
                        <td class="tb"> 加盟区域 </td>
                        <td class=""> 威海、安阳、潮州、宜昌、绥化、 等全国地区</td>

                    </tr>
                    <tr>
                        <td class="tb">企业地址：</td>
                        <td class="" > 安徽省芜湖市弋江区高新开发区南区龙华厂房</td>
                        <td class="tb">经营范围：</td>
                        <td class=""> 中式餐饮，西式餐饮，凉菜制作，烧烤熟肉</td>
                    </tr>

                </table>


            </div>

            <div class="b_con3-2">
                <div class="xiaokuai2"></div>
                <h1>威特斯品牌介绍</h1>
                <div class="b_con3-2-xian"></div>

                <p class="b_con3-2-p1">
                    三只松鼠是安徽三只松鼠电子商务有限公司旗下品牌，于2012年创业，为广大消费者提供各种坚果、干果、茶<br />
                    叶等等，产品美味、健康、营养、时尚，深得广大消费者的喜爱和信赖，目前，产品已经销往全国各个地区和城<br />
                    市，建立了比较完善的销售网络。

                </p>

                <ul class="b_con3-2-tu">
                    <li style="width: 384px;height: 264px;margin-left: 0px;margin-top: 0px;"><img src="/frontend/images/con1-tu_03.png" /> </li>
                    <li style="margin-top: 0px;"><img src="/frontend/images/con1-tu_03.png" /> </li>
                    <li style="margin-top: 0px;"><img src="/frontend/images/con1-tu_03.png" /></li>
                    <li><img src="/frontend/images/con1-tu_03.png" /></li>
                    <li><img src="/frontend/images/con1-tu_03.png" /></li>
                </ul>
                <ul class="b_con3-2-p2">
                    <li style="margin-top: 0px;"><p>三只松鼠，经历了有无到有，有小到大的历程，目前，已经全面覆盖天猫、淘宝、京东、1号店、QQ网购、美<br />
                            团、唯品会、聚美优品等各类渠道，并已建成全国华南、华北、华东、西南四大物流中心，可实现日处理订单<br />
                            量10万单，并实现全国60%区域的消费者次日达极速物流服务。</p></li>
                    <li><p>三只松鼠，2012年4月获得美国IDG资本150万美元的天使投资，2012年4月获得美国IDG资本150万美元的天使<br />
                            投资， 2014年3月IDG资本、今日资本追加1亿元人民币C轮投资，2015年9月三只松鼠获峰瑞资本3亿人民币D<br />
                            轮投资，资金实力比较雄厚，发展速度也比较快速，公司市值超过40亿人民币。</p></li>
                    <li><p>三只松鼠加盟项目为广大投资创业者带来了一个比较平坦的投资创业平台，项目实力雄厚，优势也比较多，选择<br />
                            投资加盟该项目，创业者可以轻松获得成功，赚取到大量的金钱！</p></li>
                </ul>
            </div>

            <div class="b_con3-3">
                <div class="xiaokuai3"></div>
                <h1>威特斯公司介绍</h1>
                <div class="b_con3-3-xian"></div>

                <ul class="b_con3-3-ul1">
                    <li style="margin-top: 0px;"><p>安徽三只松鼠电子商务有限公司，于2012年2月在安徽芜湖国家高新区注册成立，是中国家定位于纯互联网食品<br />
                            品牌的企业，也是当前中国销售规模大的食品电商企业，初是由5名创始团队组建，到目前公司全国雇员超过17<br />
                            00余人，其中来自全国的电商运营团队500余人，平均年龄24岁，是全国年轻的电商团队。<br />
                        </p></li>
                    <li><p>公司创始人兼CEO章燎原先生，10年草根创业，10年传统行业营销、管理从业经历，4年互联网品牌营销、管理<br />
                            经验，在电商界人称“松鼠老爹_章三疯”，属于实战派、革命派的草根战略营销者，擅长细分品牌定位、蓝海<br />
                            市场开拓、互联网品牌打造。目前，已经将旗下品牌——三只松鼠的销售网络覆盖天猫、淘宝、京东、1号店、<br />
                            QQ网购、美团、唯品会、聚美优品等各类渠道，并已建成全国华南、华北、华东、西南四大物流中心，可实现<br />
                            日处理订单量10万单，并实现全国60%区域的消费者次日达极速物流服务。</p></li>
                </ul>
                <h2>公司发展历程：</h2>
                <ul class="b_con3-3-ul2">
                    <li style="margin-top: 0px;"><p>2012年（创业年）：2012年2月，由五名创业初始团队在安徽芜湖都宝小区创立三只松鼠品牌——2012年2月<br />
                            由五名创业初始团队在安徽芜湖都宝小区创立三只松鼠品牌。</p></li>
                    <li><p>2013年（发展年）：2013年1月，月销售额突破2200万，位列全网食品销售——2013年12，全网年销售突破<br />
                            3.26亿元。</p></li>
                    <li><p>2014年（地基年）：2014年1月，月度销售额突破1.6亿元，松鼠再次发生第二次危机，做出向主人的赔付政策<br />
                            累计赔付81万元，全员参与危机战斗，再次演绎了松鼠价值观的强大—— 2014年12月12日，全网年销售额
                            突破10亿元。</p></li>
                    <li><p>2015年（变革年）：2015年2月，三只松鼠年货销售额达7.35亿元 ——2015年9月，三只松鼠获峰瑞资本3亿人<br />
                            民币D轮投资，松鼠公司市值超过40亿人民币。</p></li>
                </ul>
            </div>

            <div class="b_con3-4">
                <div class="xiaokuai4"></div>
                <h1>威特斯加盟流程</h1>
                <div class="b_con3-4-xian"></div>

                <ul>
                    <li style="margin-top: 0px;"><p>1、投资咨询：投资者以电话、传真、网上留言等方式向三只松鼠总部专业的投资顾问咨询相关合作事项，索取<br />
                            有关资料</p></li>
                    <li><p>2、实地考察：投资者到三只松鼠总部所在地进行项目考察，并与三只松鼠总部工作人员进行业务交流。</p></li>
                    <li><p>3、资格审核：三只松鼠总部对投资者进行审核，确认投资者的合作资格。</p></li>
                    <li><p>4、签订合同：双方确认考察结果无争议，正式签订合同。</p></li>
                    <li><p>5、缴纳费用：投资者按所选择的投资类型向三只松鼠总部交纳相关的费用。</p></li>
                    <li><p>6、三只松鼠总部培训：三只松鼠总部安排投资者进行技术培训，培训合格后颁发授权铜牌。</p></li>
                    <li><p>7、店面装修：三只松鼠总部为加盟者提供装修指导，与设计指导。</p></li>
                    <li><p>8、开业：三只松鼠总部持续关注加盟者的经营情况，并给予经营指导与帮助。</p></li>
                </ul>
            </div>

            <div class="b_con3-5">
                <div class="xiaokuai5"></div>
                <h1>威特斯市场分析</h1>
                <div class="b_con3-5-xian"></div>

                <ul>
                    <li style="margin-top: 0px;"><p>三只松鼠，产品种类丰富，质量高，价格实惠，深受广大消费者的喜爱，在市场上有着良好的口碑，目前，在市
                            场上也已经形成了比较完善的销售网络，被全国各个地区的消费者所接受，在市场上也形成了比较可观的需求量
                            ，给选择加盟该项目的创业者带去了巨额财富。</p></li>
                    <li><p>投资三只松鼠加盟项目，总部会为创业者提供直接的供货方式，减少商品配送过程中的中间环节，降低了商品成
                            本，让加盟店内的产品售价更低，给广大消费者带来更加物美价廉的产品，赢得了广大消费者的认可，选择前来
                            光临的消费者的数量十分的庞大。</p></li>
                    <li><p>三只松鼠加盟，投资小、利润高、风险低，创业者挑选创业项目时的理想选择。想投资创业的朋友，选择了加盟
                            该项目，那么，他们的财富梦想都将会得到实现。</p></li>
                    <li style="margin-top: 51px;"><p>数据来源：国家企业信用信息公示系统。</p></li>
                </ul>
            </div>

            <div class="b_con3-6">
                <div class="xiaokuai6"></div>
                <h1>赛维<font>运营综合分析</font></h1>
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