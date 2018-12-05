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
            <p style="float: left;margin-left: 15px;">您好！欢迎来到中国干洗加盟网！</p>
            <a href="" style="float:right;margin-right: 15px;">手机版  |  网站首页</a>
        </div>
    </div>
    <div class="center">
        <img src="/frontend/images/logo_03.png" class="logo" />

        <input type="text" placeholder="请输入您感兴趣的项目名称" class="shuru">
        <input type="button" value="搜索"  class="sousuo">

        <ul class="top-right">
            <li style="margin-left: 0px;">
                <img src="/frontend/images/top01.png" />
                <a href="">排行榜</a>
            </li>
            <li>
                <img src="/frontend/images/top02.png" />
                <a href="">项目搜索</a>
            </li>
            <li>
                <img src="/frontend/images/top03.png" />
                <a href="">品类大全</a>
            </li>
        </ul>

        <ul class="nav2">
            <li>
                <p style="margin-left: 0px;">热门企业：</p>
            </li>
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
            <li style="margin-left: 0px;"><a href="index.html" style="width: 93px;">网站首页</a></li>
            <li><a href="创业资讯.html" style="width: 93px;">创业资讯</a></li>
            <li><a href="">干洗店成本 </a></li>
            <li><a href="干洗店品牌.html">干洗店品牌</a></li>
            <li><a href="">干洗店利润 </a></li>
            <li><a href="">干洗店设备</a></li>
            <li><a href="">干洗店技术</a></li>
            <li><a href="" style="width: 93px;">加盟案例</a></li>
            <li><a href="">干洗店装修</a></li>
        </ul>
    </div>


</div>
@yield('main_content')
<div class="footer1">
    <div class="center">
        <p>干洗店加盟干洗加盟 加盟干洗店 干洗店加盟连锁 洗衣店加盟	干洗加盟店 南阳装修公司 干洗店加盟 窗帘 竹纤维加盟 电渗析设备 干洗店加盟 洗衣龙 英语培训<br />
            价格 小吃培训官网 家纺加盟 餐饮培训 化州在线 猎头公司 丁丁打折网 山东纯净水设备 西点蛋糕培训学校 数控木工车床 冻干机 干洗加盟 </p>
    </div>
</div>

<div class="footer2">
    <div class="center">
        <p>本站为您提供最干洗店加盟费用预算、干洗店加盟十大品牌排行、干洗店设备价格及干洗店成本与干洗店利润分析等相关信息。沪ICP备13036116号-7<br />

            本站所收录信息部分来源互联网，目的只是为了传递给想要了解干洗加盟品牌的浏览者<br />

            所有作品版权归原创作者所有，与本站立场无关，如不慎侵犯了你的权益，请联系我们告知，我们将做删除处理！
        </p>
    </div>
</div>

</body>
</html>
