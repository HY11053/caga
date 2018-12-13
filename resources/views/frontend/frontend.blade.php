<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="stylesheet" href="/frontend/css/index.css" />
    <link rel="stylesheet" type="text/javascript" href="/frontend/css/font-awesome.css" />
    <link rel="stylesheet" href="/frontend/css/style.css" />
    @yield('headlibs')
</head>
<body>
<div class="top">
    <div class="top-top">
        <div class="center">
            <p style="float: left;margin-left: 15px;">您好！欢迎来到干洗店品牌网！</p>
            <a  style="float:right;margin-right: 15px;" href="/"> 网站首页</a>
            <a href="{{str_replace('www.','m.',config('app.url'))}}" style="float:right;margin-right: 15px;">手机版</a>
        </div>
    </div>
    <div class="center">
        <img src="/frontend/images/logo_03.png" class="logo" />
        <form action="/sprodlist/all/" method="post">
            {{csrf_field()}}
            <input type="text" name="keywords" placeholder="请输入您感兴趣的项目名称" class="shuru">
            <input type="button" value="搜索"  class="sousuo">
        </form>
        <ul class="top-right">
            <li style="margin-left: 0px;"><img src="/frontend/images/top01.png" /><a href="/paihangbang/">排行榜</a></li>
            <li> <img src="/frontend/images/top02.png" /><a href="/sprodlist/all/" rel="nofollow">项目搜索</a></li>
            <li><img src="/frontend/images/top03.png" /><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/">品牌大全</a></li>
        </ul>
        <ul class="nav2">
            <p id="hotsearch">热门干洗品牌：<a href="">UCC国际洗衣</a>|<a href="">福奈特干洗店</a>|<a href="">赛维干洗店</a></p>
        </ul>
    </div>
    <div class="xian1"></div>
    <div class="center">
        <ul class="nav">
            <li><a href="/" >网站首页</a></li>
            <li><a href="/gxdpp/">干洗店品牌</a></li>
            <li><a href="/cyzx/" >创业资讯</a></li>
            <li><a href="/gxdcb/">干洗店成本 </a></li>
            <li><a href="/gxdlr/">干洗店利润 </a></li>
            <li><a href="/gxdsb/">干洗店设备</a></li>
            <li><a href="/gxdjs/">干洗店技术</a></li>
            <li><a href="/gxdzx/">干洗店装修</a></li>
            <li><a href="/paihangbang/">品牌排行榜</a></li>
        </ul>
    </div>
</div>
@yield('main_content')
<footer class="footer">
    <div class="container">
        <div class="footer-top clearfix">
            <div class="about" style="">
                <h4>快速导航</h4>
                <ul class="list-unstyled">
                    <li><a href="#">干洗店品牌</a></li>
                    <li><a href="#">干洗店成本</a></li>
                    <li><a  href="#">干洗店利润</a></li>
                    <li><a  href="#">干洗店设备</a></li>
                    <li><a  href="#">干洗店装修</a></li>
                    <li><a  href="#">干洗店投资</a></li>
                    <li><a  href="#">干洗技术培训</a></li>
                    <li><a  href="#">干洗品牌新闻</a></li>
                    <li><a  href="#">干洗品牌排行榜</a></li>
                </ul>
            </div>
            <div class="contact">
                <h4>联系方式</h4>
                <ul class="list-unstyled">
                    <li>干洗品牌网官方电话：400-8856-638</li>
                    <li>官方客服QQ：410547658</li>
                    <li>电话：021-56020808</li>
                    <li>传真：021-56021323</li>
                    <li>邮政编码:201906</li>
                    <li>地址:中国上海市沪太路4361号8号楼(呼叫中心产业基地)</li>
                </ul>
            </div>
            <div class="service" style="">
                <h4>查查服务</h4>
                <ul class="list-unstyled">
                    <li>
                        中国干洗网打造专业干洗投资在线信息平台，快速解答干洗店利润怎么样、开一家干洗店的成本、干洗店加盟哪个好、干洗店设备价格以及干洗店加盟费用多少等投资难题，让您开店无忧。整合市场信息，及时更新干洗店加盟连锁排名、中国干洗店十大排名，新鲜干洗资讯一手掌握，干洗店加盟品牌随时了解。
                    </li>
                </ul>
            </div>
            <div class="qrcode">
                <div class="qrcode-item">
                    <img src="/frontend/images/wchat.png" alt="微信公众平台">
                    <span class="ma_xcx">小程序</span>
                </div>
                <div class="qrcode-item">
                    <img src="/frontend/images/v3/wap.png" alt="APP下载">
                    <span class="ma_app">扫码下载APP</span>
                </div>
                <div class="qrcode-item">
                    <img src="/frontend/images/xiongzhang.png" alt="干洗店熊掌号">
                    <span class="ma_wx">微信公众号</span>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="footer-copy-bg">
        <div class="container">
            <div class="footer-copy clearfix">
                <div class="pull-left">
                    <div class="m-t-xs">
                        <a href="javascript:void(0)" title="干洗店品牌网" rel="nofollow">©2014-2018</a>
                        <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow"> 粤ICP备07055879号-1	</a> 版权所有&nbsp;上海莫卡网络科技有限公司
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="/frontend/js/jquery.min.js"></script>
<script src="/frontend/js/frontend.js"></script>
@yield('footerlibs')
</body>
</html>
