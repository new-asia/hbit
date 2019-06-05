<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>Python基础学习之多任务-协程详细讲解 - Python课程 - 金铭鼎IT教育-匠心打造,品质铸就</title>
    <meta name="keywords" content="Python,Python基础,Python学习,Python协程,Python多任务" />
    <meta name="description" content="学习Python的小伙伴对于他的多任务一定不会陌生，那么多任务中的协程又有几个小伙伴们知道呢？在本文将重点剖析协程这个知识点......" />
    <link rel="stylesheet" type="text/css" href="/templates/mobile/css/newsstyle.css" />
    <link rel="stylesheet" type="text/css" href="/templates/mobile/css/style.css" />
    <script type="text/javascript" charset="utf-8" src="/templates/mobile/js/zepto.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/templates/mobile/js/weui.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/templates/mobile/js/common.js"></script>
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_689149_dby6e0fcds.css">
    <link rel="stylesheet" href="/templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="/templates/mobile/plugin/swiper/swiper-4.3.3.min.css">
    <script src="/templates/mobile/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/templates/mobile/css/style1.css">
</head>

<body ontouchstart>
    <div class="page">


    {{--nav--}}
@include('api.layouts.nav')

        <div class="page__bd">

            <div class="weui-panel weui-panel_access" style="margin-top:10px;">
                <div class="weui-panel__bd">
                    <div class="meta">
                        <h1 class="meta-tit" align="center">{{$article->title}}</h1>
                        <p class="meta-info">
                            <span><i class="iconfont icon-date"></i>{{date("Y-m-d H:i:s",$article->add_time)}}</span>
                            <span><i class="iconfont icon-view"></i>
                                <script type="text/javascript" src="/tools/submit_ajax.ashx?action=view_article_click&channel_id=1&id=6453&click=1"></script>次浏览
                            </span>
                            <span>关键词：{{$article->keywords}}</span>
                        </p>
                    </div>
                    <div class="entry">
                    {!!$article->content!!}
                    </div>
                </div>
            </div>


            <div class="weui-panel weui-panel_access">
                <div class="weui-panel__hd">相关资讯</div>
                <div class="weui-panel__bd">
                    <div class="txt-list">
                        <ul>
                            @foreach($article_list as $item)
                            <li>
                                <a href="/show-{{$item->article_id}}.html">
                                    <i class="date">{{date("m-d",$item->add_time)}}</i>
                                    <span class="text">{{$item->title}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>






            <footer class="footer">
                <p>版权所有 2006 - 2018 北京博育华众教育咨询有限公司</p>
                <p>地址：北京市昌平区十三陵镇泰胡路24号</p>
            </footer>
            {{--tabBar--}}
@include('api.layouts.tabBar')

        </div>

    </div>

   
    <script type="text/javascript" src="/templates/mobile/plugin/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/templates/mobile/plugin/bootstrap-3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript" src="/templates/mobile/plugin/swiper/swiper-4.3.3.min.js"></script>
    <script type="text/javascript" src="/templates/mobile/js/main.js"></script>
</body>

</html>