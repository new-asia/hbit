<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>计算机IT - 鸿博IT教育-匠心打造,品质铸就</title>
    <meta name="keywords" content="计算机IT,计算机IT培训,计算机I学习" />
    <meta name="description" content="近日，谷歌正式发布了最新的安卓操作系統，并将系统命名为Android Pie，虽然目前这个系统仅仅支持谷歌自家的Pixel手机，但是在系統的测试阶段时，谷歌已经对索尼、小米、OPPO和vivo等手机进行了开放测试，不久后将逐渐开始适配。在新的系統Android Pie中，谷歌加入了大量…" />
    <link rel="stylesheet" type="text/css" href="/css/pagination.css" />
    <link rel="stylesheet" type="text/css" href="/templates/mobile/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/templates/mobile/css/newsstyle.css" />
    <script type="text/javascript" charset="utf-8" src="/templates/mobile/js/zepto.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/templates/mobile/js/weui.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/templates/mobile/js/common.js"></script>
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_689149_dby6e0fcds.css">
    <link rel="stylesheet" href="/templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="/templates/mobile/plugin/swiper/swiper-4.3.3.min.css">
    <script src="/templates/mobile/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/templates/mobile/css/style1.css">
</head>

<body id="news" ontouchstart>
    <div class="page">


        
    {{--nav--}}
@include('api.layouts.nav')

        <div class="page__bd">

            <div class="weui-panel weui-panel_access" style="margin-top:10px;">
                <div class="weui-panel__hd">计算机IT</div>
                <div class="weui-panel__bd">
                    <div class="txt-list">
                        <ul>
                            @foreach($article as $v)
                            <li>
                                <a href="/show-{{$v->article_id}}.html">
                                    <img data-cfsrc="/upload/201811/07/201811071146444912.png" style="display:none;visibility:hidden;" /><noscript><img src="/upload/201811/07/201811071146444912.png" /></noscript>
                                    <h2>{{$v->title}}</h2>
                                    <div class="note">
                                        <p>{{$v->content}}</p>
                                        <p>
                                            <i class="hot">{{$v->reading_num}}次</i>
                                            <i class="date">时间：{{date("Y-m-d h:i:s",$v->add_time)}}</i>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                             
                        </ul>
                    </div>
                </div>
            </div>


            <div class="page-list">
                <span>共{{ $article->total() }}记录</span>
                <a href="{{$article->previousPageUrl()}}">«上一页</a>
                <span class="current">{{$article->currentPage()}}</span>
               <a href="{{$article->nextPageUrl()}}">下一页»</a>
            </div>




            <footer class="footer">
                <p>版权所有 2006 - 2018 北京博育华众教育咨询有限公司</p>
                <p>地址：北京市昌平区十三陵镇泰胡路24号</p>
            </footer>
             
        {{--tabBar--}}
@include('api.layouts.tabBar')
    </div>
    <script type="text/javascript" src="/templates/mobile/plugin/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/templates/mobile/plugin/bootstrap-3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript" src="/templates/mobile/plugin/swiper/swiper-4.3.3.min.js"></script>
    <script type="text/javascript" src="/templates/mobile/js/main.js"></script>
</body>

</html>