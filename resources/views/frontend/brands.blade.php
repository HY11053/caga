@extends('frontend.frontend')
@section('title'){{$thistypeinfo->title}}-中国教育招商网@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('headlibs')
    <meta name="Copyright" content="中国教育招商网-{{env('APP_URL')}}"/>
    <meta name="author" content="中国教育招商网" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
@stop
@section('main_content')
    <div class="main_content">
    <div class="bl_con1 center">
        <ul class="bl_con1-ul1">
            <li><h1>投资金额  ：</h1></li>
            <li><p>不限</p></li>
            <li><a href="" style="margin-left: 20px;">3万以下</a></li>
            <li><a href="">3万~5万</a></li>
            <li><a href="">5万~8万</a></li>
            <li><a href="">8万~12万</a></li>
            <li><a href="">12万~15万</a></li>
            <li><a href="">15万以上</a></li>
        </ul>

        <ul class="bl_con1-ul2">
            <li><h1>所需面积  ：</h1></li>
            <li><p>不限</p></li>
            <li><a href="" style="margin-left: 20px;">10平米以下</a></li>
            <li><a href="">10-30平米</a></li>
            <li><a href="">30-50平米</a></li>
            <li><a href="">50-80平米</a></li>
            <li><a href="">100平米以上</a></li>
        </ul>

        <ul class="bl_con1-ul3">
            <li><h1>所在地区  ：</h1></li>
            <li><p>不限</p></li>
            <li><a href="" style="margin-left: 20px;">北京</a></li>
            <li><a href="">安徽</a></li>
            <li><a href="">福建</a></li>
            <li><a href="">甘肃</a></li>
            <li><a href="">广东</a></li>
            <li><a href="">广西</a></li>
            <li><a href="">贵州</a></li>
            <li><a href="">海南</a></li>
            <li><a href="">河北</a></li>
            <li><a href="">河南</a></li>
            <li><a href="">黑龙江</a></li>
            <li><a href="">湖北</a></li>
            <li><a href="">湖南</a></li>
            <li><a href="">吉林</a></li>
            <li><a href="">江苏</a></li>
            <li><a href="">江西</a></li>
            <li><a href="">辽宁</a></li>
            <li><a href="">内蒙</a></li>
        </ul>


    </div>

    <div class="bl_con2 center box-shadow">
        <h1>品牌招商项目列表</h1>
        <ul>
            <li><a href="" style="margin-left: 0px;">默认排序</a></li>
            <li><p>|</p></li>
            <li><a href="">投资金额</a></li>
            <li><p>|</p></li>
            <li><a href="">门店数</a></li>
        </ul>
    </div>

    <div class="bl_con3 center">
        <div class="w870 fl">
            <ul class="xm-list-H224 clearfix" style="width: 840px; float:left; cursor: pointer">
                <li class="">
                    <div class="btn-duibi btn-addbyb" data-id="2171">
                        <i class="iconfont icon-Contrast"></i>对比
                    </div>
                    <a target="_blank" href="/brand/2171/" class="img-block magnify"><img src="/frontend/images/con2-left-tu_03.png" alt="美石记韩式拌饭"></a>
                    <div class="f20">
                        <a target="_blank" href="/brand/2171/">美石记韩式拌饭</a>
                    </div>
                    <div class="info">
                        <span title="12万以上">投资金额：<b class="s-oe">12万以上</b></span><span title="30-50平米㎡">所需面积：<b class="s-oe">30-50平米㎡</b></span>
                    </div>
                    <p> 门店数量：<span class="s-c26">68</span></p>
                    <p>加盟区域：<span class="s-c26">安徽</span></p>
                    <p>主要产品：<span class="s-c26">石锅拌饭系列、年糕火锅、小食、趣味美食等</span></p>
                    <p style="height:48px">项目描述：<span>美石记韩式拌饭采用韩国传统工艺，美石记秘制，经十几个小时的精心熬煮而成，品质正宗，口味独特。美石记韩式石锅拌饭引进正宗的韩式辣白菜制作工艺。精选菜叶细嫩多汁的黄芯白菜，经过多种复杂</span></p>
                </li>
                <li class="">
                    <div class="btn-duibi btn-addbyb" data-id="2170">
                        <i class="iconfont icon-Contrast"></i>对比
                    </div>
                    <a target="_blank" href="/brand/2170/" class="img-block magnify"><img src="/storage/uploads/2018/12/06/deb9778b38ca9585568fbb55e3a46c1b.png" alt="爱的披萨"></a>
                    <div class="f20">
                        <a target="_blank" href="/brand/2170/">爱的披萨</a>
                    </div>
                    <div class="info">
                        <span title="9万~23万">投资金额：<b class="s-oe">9万~23万</b></span><span title="10-30平米㎡">所需面积：<b class="s-oe">10-30平米㎡</b></span>
                    </div>
                    <p> 门店数量：<span class="s-c26">301</span></p>
                    <p>加盟区域：<span class="s-c26">黑龙江、湖南、重庆</span></p>
                    <p>主要产品：<span class="s-c26">甜品、简餐、披萨</span></p>
                    <p style="height:48px">项目描述：<span>爱的披萨创建于黑龙江哈尔滨市，该店环境优雅休闲，各种美味小品、饮品，是一个适合约会、聚会、休息的优佳场所。公司有着优异的技术和雄厚的生产实力，产品以富有创意深受经销商和消费者的爱好</span></p>
                </li>
                <li class="">
                    <div class="btn-duibi btn-addbyb" data-id="2169">
                        <i class="iconfont icon-Contrast"></i>对比
                    </div>
                    <a target="_blank" href="/brand/2169/" class="img-block magnify"><img src="/storage/uploads/2018/12/06/d65e6124eb2ff98342e2725b295e909c.jpg" alt="艾奇轻食"></a>
                    <div class="f20">
                        <a target="_blank" href="/brand/2169/">艾奇轻食</a>
                    </div>
                    <div class="info">
                        <span title="12万以上">投资金额：<b class="s-oe">12万以上</b></span><span title="30-50平米㎡">所需面积：<b class="s-oe">30-50平米㎡</b></span>
                    </div>
                    <p> 门店数量：<span class="s-c26">34</span></p>
                    <p>加盟区域：<span class="s-c26">浙江</span></p>
                    <p>主要产品：<span class="s-c26">沙拉、轻食、健身餐</span></p>
                    <p style="height:48px">项目描述：<span>艾奇轻食创新性复合餐饮休闲理念所构筑的竞争门槛=动漫文化+定制餐饮多元化的盈利模式，非单一传统同类动漫或餐饮项目所能及。艾奇轻食是以经营动漫特色轻食主义为理念的西餐厅，同时为顾客提供</span></p>
                </li>
                <li class="">
                    <div class="btn-duibi btn-addbyb" data-id="2168">
                        <i class="iconfont icon-Contrast"></i>对比
                    </div>
                    <a target="_blank" href="/brand/2168/" class="img-block magnify"><img src="/storage/uploads/2018/12/06/50e0b7c29c30574353fb9674e7dcc4a3.png" alt="阿贝兹手工薄饼披萨"></a>
                    <div class="f20">
                        <a target="_blank" href="/brand/2168/">阿贝兹手工薄饼披萨</a>
                    </div>
                    <div class="info">
                        <span title="6万~14万">投资金额：<b class="s-oe">6万~14万</b></span><span title="10-30平米㎡">所需面积：<b class="s-oe">10-30平米㎡</b></span>
                    </div>
                    <p> 门店数量：<span class="s-c26">342</span></p>
                    <p>加盟区域：<span class="s-c26">吉林、甘肃、福建</span></p>
                    <p>主要产品：<span class="s-c26">披萨、牛排、面包</span></p>
                    <p style="height:48px">项目描述：<span>阿贝兹手工薄饼披萨专注于手工披萨现烤现做为连锁发展的品牌，是披萨品牌行业中比较知名的一个。阿贝兹手工薄饼披萨专卖连锁企业最初1967年创办于意大利那不勒斯地区，后主要发展于欧美等国家，</span></p>
                </li>
                <li class="">
                    <div class="btn-duibi btn-addbyb" data-id="2167">
                        <i class="iconfont icon-Contrast"></i>对比
                    </div>
                    <a target="_blank" href="/brand/2167/" class="img-block magnify"><img src="/storage/uploads/2018/12/06/c73c7ea4ab09504ecd987ab858cb388b.jpg" alt="禾约创意轻食"></a>
                    <div class="f20">
                        <a target="_blank" href="/brand/2167/">禾约创意轻食</a>
                    </div>
                    <div class="info">
                        <span title="11万以上">投资金额：<b class="s-oe">11万以上</b></span><span title="30-50平米㎡">所需面积：<b class="s-oe">30-50平米㎡</b></span>
                    </div>
                    <p> 门店数量：<span class="s-c26">124</span></p>
                    <p>加盟区域：<span class="s-c26">北京</span></p>
                    <p>主要产品：<span class="s-c26">沙拉、轻食、健身餐</span></p>
                    <p style="height:48px">项目描述：<span>禾约创意轻食店主要经营这几类菜品：牛人凯撒沙拉、多芒鲜虾沙拉、焙煎鸡胸肉会鲍菇沙拉、日式主题荞麦面、尼斯金枪鱼沙拉、金枪鱼搭温烤南瓜等，蔬菜：综合蔬菜、红酒牛肉、鸡胸肉、面包丁、鸡</span></p>
                </li>
                <li class="">
                    <div class="btn-duibi btn-addbyb" data-id="2166">
                        <i class="iconfont icon-Contrast"></i>对比
                    </div>
                    <a target="_blank" href="/brand/2166/" class="img-block magnify"><img src="/storage/uploads/2018/12/06/71cc3f68381222c404ba71a18eace1df.jpg" alt="小时代简餐"></a>
                    <div class="f20">
                        <a target="_blank" href="/brand/2166/">小时代简餐</a>
                    </div>
                    <div class="info">
                        <span title="9万~26万">投资金额：<b class="s-oe">9万~26万</b></span><span title="30-50平米㎡">所需面积：<b class="s-oe">30-50平米㎡</b></span>
                    </div>
                    <p> 门店数量：<span class="s-c26">128</span></p>
                    <p>加盟区域：<span class="s-c26">河北</span></p>
                    <p>主要产品：<span class="s-c26">沙拉、轻食、健身餐</span></p>
                    <p style="height:48px">项目描述：<span>在饮食上，大家是很注重的，特色的养生产品，精心制作，养生减肥的好选择。“轻食主义”是指“少油、少盐、少糖、高纤维及高钙，满足身体营养所需，同时不给身体造成负担的科学饮食”的代名词。小时</span></p>
                </li>
                <li class="">
                    <div class="btn-duibi btn-addbyb" data-id="2165">
                        <i class="iconfont icon-Contrast"></i>对比
                    </div>
                    <a target="_blank" href="/brand/2165/" class="img-block magnify"><img src="/storage/uploads/2018/12/06/cf5f4f13dace006c09b59f96f54d401e.png" alt="爱八寸披萨"></a>
                    <div class="f20">
                        <a target="_blank" href="/brand/2165/">爱八寸披萨</a>
                    </div>
                    <div class="info">
                        <span title="8万~23万">投资金额：<b class="s-oe">8万~23万</b></span><span title="10-30平米㎡">所需面积：<b class="s-oe">10-30平米㎡</b></span>
                    </div>
                    <p> 门店数量：<span class="s-c26">355</span></p>
                    <p>加盟区域：<span class="s-c26">上海、浙江、重庆</span></p>
                    <p>主要产品：<span class="s-c26">披萨、牛排、面包</span></p>
                    <p style="height:48px">项目描述：<span>爱八寸披萨有着芳香扑鼻的味道，激爽的外形，动感的味道，一同构成忘情的尖叫，美妙的回忆。爱八寸披萨以香脆酥软的风味饼，裹着幼滑酥爽的比萨馅，加上少许的芝士，咬上去，拉出长长的丝，饱满</span></p>
                </li>
                <li class="">
                    <div class="btn-duibi btn-addbyb" data-id="2164">
                        <i class="iconfont icon-Contrast"></i>对比
                    </div>
                    <a target="_blank" href="/brand/2164/" class="img-block magnify"><img src="/storage/uploads/2018/12/06/4cca15bf81d8ea03fb53ae15d9a3adc4.jpg" alt="预见时尚简餐"></a>
                    <div class="f20">
                        <a target="_blank" href="/brand/2164/">预见时尚简餐</a>
                    </div>
                    <div class="info">
                        <span title="7万~26">投资金额：<b class="s-oe">7万~26</b></span><span title="30-50平米㎡">所需面积：<b class="s-oe">30-50平米㎡</b></span>
                    </div>
                    <p> 门店数量：<span class="s-c26">251</span></p>
                    <p>加盟区域：<span class="s-c26">河北</span></p>
                    <p>主要产品：<span class="s-c26">沙拉、轻食、健身餐</span></p>
                    <p style="height:48px">项目描述：<span>预见时尚简餐目前餐饮市场如火如荼，想在这个火爆市场上占有一定地位，就要独树一帜的特色，就是一家有特色的快餐，并且与O2O完美结合。专家及营养师指导搭配餐饮，美味、健康，营养，快捷。深</span></p>
                </li>
                <li class="">
                    <div class="btn-duibi btn-addbyb" data-id="2163">
                        <i class="iconfont icon-Contrast"></i>对比
                    </div>
                    <a target="_blank" href="/brand/2163/" class="img-block magnify"><img src="/storage/uploads/2018/12/06/1975a6764e5e70c07acaf7aeca62c043.png" alt="897披萨"></a>
                    <div class="f20">
                        <a target="_blank" href="/brand/2163/">897披萨</a>
                    </div>
                    <div class="info">
                        <span title="9万~22万">投资金额：<b class="s-oe">9万~22万</b></span><span title="30-50平米㎡">所需面积：<b class="s-oe">30-50平米㎡</b></span>
                    </div>
                    <p> 门店数量：<span class="s-c26">514</span></p>
                    <p>加盟区域：<span class="s-c26">江苏、重庆、福建</span></p>
                    <p>主要产品：<span class="s-c26">披萨、牛排、面包</span></p>
                    <p style="height:48px">项目描述：<span>897披萨是经营意大利式外卖披萨的连锁企业，897披萨属于江苏省北塘区西岸边披萨屋，在市场上有着较高的品牌知名度及成熟的品牌推广传播体系。897披萨公司拥有自己的披萨研发部门，并重金从意大</span></p>
                </li>
                <li class="">
                    <div class="btn-duibi btn-addbyb" data-id="2162">
                        <i class="iconfont icon-Contrast"></i>对比
                    </div>
                    <a target="_blank" href="/brand/2162/" class="img-block magnify"><img src="/storage/uploads/2018/12/06/178ab59e1de1ea58ad3f81868c6bb9ad.jpg" alt="苗员外简餐"></a>
                    <div class="f20">
                        <a target="_blank" href="/brand/2162/">苗员外简餐</a>
                    </div>
                    <div class="info">
                        <span title="6万~22万">投资金额：<b class="s-oe">6万~22万</b></span><span title="10-30平米㎡">所需面积：<b class="s-oe">10-30平米㎡</b></span>
                    </div>
                    <p> 门店数量：<span class="s-c26">147</span></p>
                    <p>加盟区域：<span class="s-c26">上海</span></p>
                    <p>主要产品：<span class="s-c26">沙拉、轻食、健身餐</span></p>
                    <p style="height:48px">项目描述：<span>不知不觉快节奏的生活悄然而至，人们的生活越来越没有规律，再加上饮食不够科学等问题，
人们对于健康的饮食习惯越来越重视，无论在大城小县都有需求，且在各年龄段的分布也较为均匀。那么在快</span></p>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="bl_con3-right">

            <div class="bl_con3-right-1">
                <h1>品牌排行榜<a href="">关注量</a></h1>
                <div class="bl_con3-right-1-xian"></div>
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

            <div class="bl_con3-right-2">
                <h1>品牌招商热门加盟项目<a href="">更多</a></font></h1>
                <div class="bl_con3-right-2-xian"></div>

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
                        <a href="" class="a3">赛维干洗店</a>
                        <p>
                            投资金额 ： <font>5万以下</font><br />
                            加盟门店数 ： <font>3456</font>
                        </p>
                    </li>
                </ul>

            </div>

            <div class="bl_con3-right-3">
                <h1>加盟咨询<a href="">更多</a></font></h1>
                <div class="bl_con3-right-3-xian"></div>

                <ul>
                    <li style="margin-top: 0px;">
                        <a href=""><img src="/frontend/images/con3-right-3-tu_13.png" /></a>
                        <a href="" class="a4">赛维干洗店加盟啦</a>
                        <p>抓紧加入赛维实现你的创业<br />
                            梦想</p>

                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-right-3-tu_13.png" /></a>
                        <a href="" class="a4">赛维干洗店加盟啦</a>
                        <p>抓紧加入赛维实现你的创业<br />
                            梦想</p>

                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-right-3-tu_13.png" /></a>
                        <a href="" class="a4">赛维干洗店加盟啦</a>
                        <p>抓紧加入赛维实现你的创业<br />
                            梦想</p>

                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-right-3-tu_13.png" /></a>
                        <a href="" class="a4">赛维干洗店加盟啦</a>
                        <p>抓紧加入赛维实现你的创业<br />
                            梦想</p>

                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-right-3-tu_13.png" /></a>
                        <a href="" class="a4">赛维干洗店加盟啦</a>
                        <p>抓紧加入赛维实现你的创业<br />
                            梦想</p>

                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-right-3-tu_13.png" /></a>
                        <a href="" class="a4">赛维干洗店加盟啦</a>
                        <p>抓紧加入赛维实现你的创业<br />
                            梦想</p>

                    </li>

                    <li>
                        <a href=""><img src="/frontend/images/con3-right-3-tu_13.png" /></a>
                        <a href="" class="a4">赛维干洗店加盟啦</a>
                        <p>抓紧加入赛维实现你的创业<br />
                            梦想</p>

                    </li>


                </ul>

            </div>

        </div>
        <div class="clear"></div>
        <div class="pageinfo">
            <div class="fenye">
                <a href="" class="shangyiye">上一页</a>
                <ul>
                    <li><a href="" style="margin-left:0px ;">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li><a href="">6</a></li>
                    <li><a href="">7</a></li>
                    <li><a href="">8</a></li>
                </ul>
                <a href="" class="xiayiye">下一页</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    </div>
@stop
