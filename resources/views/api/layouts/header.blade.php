<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>鸿博IT教育-匠心打造,品质铸就</title>
    <meta name="keywords" content="Java培训班,PHP培训班,Html5培训班,移动开发培训,大数据培训,IT培训" />
    <meta name="description" content="鸿博IT教育，坐落于首都北京市昌平区，毗邻北京科技大学，具有良好的学术学习氛围，最具前沿的互联网高新技术。 专注互联网领域技术10余年，全国知名十佳教育培训机构，IT职业教育领军品牌。" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <link rel="stylesheet" href="/templates/mobile/css/reset.css" />
    <link rel="stylesheet" href="/templates/mobile/css/swiper-3.3.1.min.css">
    <link rel="stylesheet" href="/templates/mobile/css/style.css" />
    <link rel="stylesheet" href="/templates/mobile/css/font_689149_dby6e0fcds.css">
    <link rel="stylesheet" href="/templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="/templates/mobile/plugin/swiper/swiper-4.3.3.min.css">
    <script src="/templates/mobile/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/templates/mobile/css/style1.css">
    <script type="text/javascript">
        window.onload=function (){
            //alert(window.location.href);
            var pathname=window.location.pathname;

            var loc = pathname.substring(pathname.lastIndexOf('/')+1,pathname.lastIndexOf('.'));

            if(loc=="abouts")
            {
                $("#abouts").addClass("gywmtabon");
            }
            if(loc=="idea")
            {
                $("#idea").addClass("gywmtabon");
            }
            if(loc=="history")
            {
                $("#history").addClass("gywmtabon");
            }
            if(loc=="school")
            {
                $("#school").addClass("gywmtabon");
            }
        }
    </script>
</head>
<body>
<div class="main gd">
{{--nav--}}
@include('api.layouts.nav')

    <div class="con" style="margin-top:50px;">
        <section class="ban">
            <img data-cfsrc="./upload/img/201807062343351837.jpg" data-cfstyle="width: auto;height: auto;max-width: 100%;max-height: 100%;	" style="width: auto;height: auto;max-width: 100%;max-height: 100%;	" src="./upload/img/201807062343351837.jpg">
        </section>

        <section class="gywmlist">
            <div class="gywmtab">
                <ul>
                        <li id="abouts"><a href="/abouts.html">企业简介</a></li>
						<li id="idea"><a href="/idea.html">企业理念</a></li>
						<li id="history"><a href="/history.html">发展历史</a></li>
						<li id="school"><a href="/school.html">直营校区</a></li>
                </ul>
            </div>