<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>{{$student->name}} - 学员故事 - 鸿博IT教育-匠心打造,品质铸就</title>
    <meta name="keywords" content="鸿博,鸿博教育,学习" />
    <meta name="description" content="初来鸿博时，印象最深刻的就是标识牌上的那句“自己要学会独立”的标语。要为自己的未来拼搏，为自己未来的美好生说努力。" />
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
                    <h1 class="meta-tit">{{$student->name}}</h1>
                    <p class="meta-info">
                        <span><i class="iconfont icon-date"></i>{{$student->graduate_time}}</span>
                        <span>薪资：{{$student->pay}}</span>
                        <span>入职企业：{{$student->company}}</span>
                    </p>
                </div>
                <div class="entry">
                    <p>{!! $student->testimonials !!}<p style="text-align: left; text-indent: 2em;"><br /></p>
                </div>
            </div>
        </div>




        <footer class="footer">
            <p>版权所有 2006 - 2018 北京博育华众教育咨询有限公司</p>
            <p>地址：北京市昌平区十三陵镇泰胡路24号</p>
        </footer>
        <div class="tabBar" style="font-size: 14px;">
            <a href="/">
                <div class="item">
                    <p><img src="/templates/mobile/src/icons/tab_home.png" class="img-responsive"></p>
                    <p>首页</p>
                </div>
            </a>
            <a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true">
                <div class="item">
                    <p><img src="/templates/mobile/src/icons/tab_zixun.png" class="img-responsive"></p>
                    <p>在线咨询</p>
                </div>
            </a>
            <a href="/phonebd.html">
                <div class="item">
                    <p><img src="/templates/mobile/src/icons/tab_baoming.png" class="img-responsive"></p>
                    <p>我要报名</p>
                </div>
            </a>
        </div>

    </div>

</div>
<script type="text/javascript" src="/templates/mobile/plugin/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/templates/mobile/plugin/bootstrap-3.3.7/js/bootstrap.js"></script>
<script type="text/javascript" src="/templates/mobile/plugin/swiper/swiper-4.3.3.min.js"></script>
<script type="text/javascript" src="/templates/mobile/js/main.js"></script>
</body>
</html>
