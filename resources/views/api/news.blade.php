<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>IT资讯 - 鸿博IT教育-匠心打造,品质铸就</title>
    <meta name="keywords" content="Java培训班,PHP培训班,Html5培训班,移动开发培训,大数据培训,IT培训">
    <meta name="description" content="鸿博IT教育，坐落于首都北京市海淀区，毗邻北京科技大学，具有良好的学术学习氛围，最具前沿的互联网高新技术。 专注互联网领域技术10余年，全国知名十佳教育培训机构，IT职业教育领军品牌。">
    <link rel="stylesheet" type="text/css" href="./templates/mobile/css/idangerous.swiper.css">
    <link rel="stylesheet" type="text/css" href="./templates/mobile/css/style.css">
    <link rel="stylesheet" type="text/css" href="./templates/mobile/css/newsstyle.css">
    <script type="text/javascript" charset="utf-8" src="./templates/mobile/js/zepto.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="./templates/mobile/js/weui.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="./templates/mobile/js/common.js"></script>
    <script type="text/javascript" charset="utf-8" src="./templates/mobile/js/idangerous.swiper-2.1.min.js"></script>
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_689149_dby6e0fcds.css">
    <link rel="stylesheet" href="./templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="./templates/mobile/plugin/swiper/swiper-4.3.3.min.css">
    <script src="./templates/mobile/js/jquery.min.js"></script>
    <link rel="stylesheet" href="./templates/mobile/css/style1.css">
    <script type="text/javascript">
        $(document).ready(function() {
            var mySwiper = new Swiper('.swiper-container', {
                calculateHeight: true,
                resizeReInit: true,
                pagination: ".pagination",
                autoplay: 5000,
                paginationClickable: true
            });
        });
    </script>
</head>

<body id="news" ontouchstart="">
    <div class="page">


    {{--nav--}}
@include('api.layouts.nav')

        <div class="page__bd">

            <div id="slider" class="swiper-container swiper-container-horizontal swiper-container-ios">
                <div class="swiper-wrapper">
                </div>
                <div class="pagination"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>


            <div class="weui-panel weui-panel_access" style="margin-top:0;">
                <div class="weui-panel__hd">最新资讯</div>
                <div class="weui-panel__bd">
                    <div class="txt-list">
                        <ul>
                            <li>
                                <a href="/show-{{$Newest[0]->article_id}}.html">
                                    <img data-cfsrc="{{$Newest[0]->img}}" src="{{$Newest[0]->img}}">
                                    <h2>{{$Newest[0]->title}}</h2>
                                    <p class="intro">{{ strip_tags(mb_substr($Newest[0]->content,0,50,'UTF-8')) }}</p>
                                </a>
                            </li>
                            @foreach($Newest as $v)
                            <li>
                                <a href="/show-{{$v->article_id}}.html">
                                    <i class="date">{{$v->add_time}}</i>
                                    <span class="text">{{$v->title}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @foreach($list as $v)
            <div class="weui-panel weui-panel_access">
                <div class="weui-panel__hd" style="width: 50%;float: left;">{{$v[0]->c_name}}</div>
                <div class="weui-panel__hd" style="text-align: right;"><a href="/cat/show-{{$v[0]->cid}}.html">更多</a></div>
                <div class="weui-panel__bd">
                    <div class="txt-list">
                        <ul>
                            @foreach($v as $kk=>$vv)
                            @if($kk != 0)
                            <li>
                                <a href="/show-{{$vv->article_id}}.html}">
                                    <img data-cfsrc="{{$vv->img}}" src="{{$vv->img}}">
                                    <h2>{{$vv->title}}</h2>
                                    <div class="note">
                                        <p>{{ strip_tags(mb_substr($vv->content,0,50,'UTF-8')) }}......</p>
                                        <p>
                                            <i class="hot">{{$vv->reading_num}}人</i>
                                            <i class="date">时间：{{$vv->add_time}}</i>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


        <div class="weui-panel weui-panel_access">
            <div class="weui-panel__hd">人气排行</div>
            <div class="weui-panel__bd">
                <div class="txt-list">
                    <ul>

                        @foreach($recommend as $k=>$v)
                            <li>
                                <a href="/show-{{$v->article_id}}.html">
                                    <i class="date">{{$v->reading_num}}次</i>
                                    <i class="number">{{$k+1}}</i>
                                    <span class="text">{{$v->title}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>




        {{--tabBar--}}
@include('api.layouts.tabBar')


    <script type="text/javascript" src="./templates/mobile/plugin/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./templates/mobile/plugin/bootstrap-3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript" src="./templates/mobile/plugin/swiper/swiper-4.3.3.min.js"></script>
    <script type="text/javascript" src="./templates/mobile/js/main.js"></script>


</body>

</html>