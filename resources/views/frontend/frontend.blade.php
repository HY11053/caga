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
            <input type="text" name="secrch" placeholder="请输入您感兴趣的项目名称" class="shuru">
            <input type="button" value="搜索"  class="sousuo">
        </form>
        <ul class="top-right">
            <li style="margin-left: 0px;"><img src="/frontend/images/top01.png" /><a href="/paihangbang/">排行榜</a></li>
            <li> <img src="/frontend/images/top02.png" /><a href="/sprodlist/all/">项目搜索</a></li>
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
            <li><a href="/jmal/">加盟案例</a></li>
            <li><a href="/gxdzx/">干洗店装修</a></li>
        </ul>
    </div>
</div>
@yield('main_content')
<footer class="footer">
    <div class="container">
        <div class="footer-top clearfix">
            <div class="about" style="">
                <h4>关于我们</h4>
                <ul class="list-unstyled">
                    <li><a onclick="zhugeTrack('主页-关于我们',{'子类名称':'联系我们'});" href="/cms?id=13">联系我们</a></li>
                    <li><a onclick="zhugeTrack('主页-关于我们',{'子类名称':'用户协议'});" href="/cms?id=14">用户协议</a></li>
                    <li><a onclick="zhugeTrack('主页-关于我们',{'子类名称':'用户隐私权'});" href="/cms?id=15">用户隐私权</a></li>
                    <li><a onclick="zhugeTrack('主页-关于我们',{'子类名称':'友情链接'});" href="/cms?id=16">友情链接</a></li>
                    <li><a onclick="zhugeTrack('主页-关于我们',{'子类名称':'关于我们'});" href="/cms?id=892">关于我们</a></li>
                    <li><a onclick="zhugeTrack('主页-关于我们',{'子类名称':'用户帮助'});" href="/cms?id=14578">用户帮助</a></li>
                    <li><a onclick="zhugeTrack('主页-关于我们',{'子类名称':'名词百科'});" href="/cms?id=146498">名词百科</a></li>
                    <li><a onclick="zhugeTrack('主页-关于我们',{'子类名称':'产品标签'});" href="/cms?id=146499">产品标签</a></li>
                    <li><a onclick="zhugeTrack('主页-关于我们',{'子类名称':'更新记录'});" href="/cms?id=146500">更新记录</a></li>
                </ul>
            </div>
            <div class="contact">
                <h4>联系方式</h4>
                <ul class="list-unstyled">
                    <li>干洗店官方电话：400-928-2212</li>
                    <li>官方客服QQ：<a target="_blank" href="#">410547658</a></li>
                    <li>客服邮箱：<a href="mailto:kf@#.com">kf@hacha.com</a></li>
                    <li>微信客服：qccgf1234</li>
                    <li>微信公众号：qcc365</li>
                    <li>地址：江苏省苏州市工业园区东长路88号2.5产业园C1幢5楼</li>
                </ul>
            </div>
            <div class="service" style="">
                <h4>查查服务</h4>
                <ul class="list-unstyled">
                    <li> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'500强企业'});" href="https://www.#.com/cms_top500" target="_blank">500强企业</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'权查查'});" href="http://www.qccip.com/" target="_blank">权查查</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'客找找'});" href="http://www.kezhaozhao.com/" target="_blank">客找找</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'疫苗查查'});" href="http://ai.#.com/" target="_blank">疫苗查查</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'融资查询'});" href="https://www.#.com/elib_financing" target="_blank">融资查询</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'企风控'});" href="http://qifengkong.com/" target="_blank">企风控</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'企业库'});" href="http://www.#.com/elib" target="_blank">企业库</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'裁判文书查询'});" href="http://www.#.com/more_wenshus" target="_blank">裁判文书查询</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'新三板企业查询'});" href="http://sanban.#.com" target="_blank">新三板企业查询</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'上市企业查询'});" href="http://ipo.#.com/" target="_blank">上市企业查询</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'干洗店企业查询'});" href="https://www.#.com/gongsi" target="_blank">干洗店企业查询</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'干洗店移动版'});" href="https://m.#.com" target="_blank">干洗店移动版</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'干洗店社区'});" href="https://www.#.com/dianping" target="_blank">干洗店社区</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'企业风险搜索'});" href="https://www.#.com/more_shixins" target="_blank">企业风险搜索</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'商标专利搜索'});" href="https://www.#.com/more_brands" target="_blank">商标专利搜索</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'企业网址导航'});" href="https://www.#.com/daohang" target="_blank">企业网址导航</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'企业高管查询'});" href="https://www.#.com/boss" target="_blank">企业高管查询</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'企业税号查询'});" href="https://www.#.com/tax" target="_blank">企业税号查询</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'企业新闻头条'});" href="https://www.#.com/news" target="_blank">企业新闻头条</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'企业大数据导航'});" href="https://hao.#.com" target="_blank">企业大数据导航</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'干洗店下载'});" href="https://www.#.com/weixin" target="_blank">干洗店下载</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'企业失信查询'});" href="https://www.#.com/more_shixins" target="_blank">企业失信查询</a> <a onclick="zhugeTrack('主页-查查服务',{'子类名称':'干洗店接口平台'});" href="http://www.yjapi.com/?from=#" target="_blank" rel="nofollow">干洗店接口平台</a> <a href="/yellowpage">公司黄页</a> <a href="/cms_dirhot">人员名录</a> <a href="http://open.#.com" target="_blank"> 开放平台</a> </li>
                </ul>
            </div>
            <div class="qrcode">
                <div class="qrcode-item">
                    <img src="/frontend/images/v3/code_xcx.png?t=3" alt="APP下载">
                    <span class="ma_xcx">小程序</span>
                </div>
                <div class="qrcode-item">
                    <img src="/frontend/images/v3/code_app.png?t=3" alt="APP下载">
                    <span class="ma_app">扫码下载APP</span>
                </div>
                <div class="qrcode-item">
                    <img src="/frontend/images/v3/code_wx.png?t=3" alt="干洗店微信公众号">
                    <span class="ma_wx">微信公众号</span>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="footer-link">
            <div class="footer-row clearfix">
                <div class="footer-row-head">
                    数据来源：
                </div>
                <div class="footer-row-content">
                    <span class="item">全国企业信用信息公示系统</span>
                    <span class="item">中国裁判文书网</span>
                    <span class="item">中国执行信息公开网</span>
                    <span class="item">国家知识产权局</span>
                    <span class="item">商标局</span>
                    <span class="item">版权局</span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy-bg">
        <div class="container">
            <div class="footer-copy clearfix">
                <div class="pull-left">
                    <div class="m-t-xs">
                        <a href="javascript:void(0)" title="干洗店">©2014-2018</a>
                        <a href="http://www.miibeian.gov.cn/" target="_blank"> 苏ICP备15042526号-4</a> 版权所有&nbsp;苏州朗动网络科技有限公司 &nbsp;增值电信业务经营许可证：
                        <a href="http://jscainfo.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow" target="_blank">苏ICP证B2-20180251</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@yield('footerlibs')
</body>
</html>
