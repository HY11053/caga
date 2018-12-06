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
        <form action="" method="post">
            {{csrf_field()}}
            <input type="text" name="secrch" placeholder="请输入您感兴趣的项目名称" class="shuru">
            <input type="button" value="搜索"  class="sousuo">
        </form>
        <ul class="top-right">
            <li style="margin-left: 0px;"><img src="/frontend/images/top01.png" /><a href="/paihangbang/">排行榜</a></li>
            <li> <img src="/frontend/images/top02.png" /><a href="/search/">项目搜索</a></li>
            <li><img src="/frontend/images/top03.png" /><a href="pinpai">品类大全</a></li>
        </ul>
        <ul class="nav2">
            <li><p style="margin-left: 0px;">热门干洗品牌：</p></li>
            <li><a href="">赛维干洗</a></li>
            <li><p>|</p></li>
            <li><a href="">洁丰干洗</a></li>
            <li><p>|</p></li>
            <li><a href="">欧瑞斯干洗</a></li>
            <li><p>|</p></li>
            <li><a href="">福奈特干洗</a></li>
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
            <li><a href="/jmal/">加盟案例</a></li>
            <li><a href="/gxdzx/">干洗店装修</a></li>
        </ul>
    </div>
</div>
@yield('main_content')
<div class="footer2">
    <div class="center">
        <p>本站为您提供最干洗店加盟费用预算、干洗店加盟十大品牌排行、干洗店设备价格及干洗店成本与干洗店利润分析等相关信息。沪ICP备13036116号-7<br />

            本站所收录信息部分来源互联网，目的只是为了传递给想要了解干洗加盟品牌的浏览者<br />

            所有作品版权归原创作者所有，与本站立场无关，如不慎侵犯了你的权益，请联系我们告知，我们将做删除处理！
        </p>
    </div>
</div>
@yield('footerlibs')
</body>
</html>
