{{--头部-css--}}
@include('home.layouts.header')
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/static/templates/main/css2/style.css" />
<link rel="stylesheet" href="/static/templates/main/css/qf-bj-php.css">
<link rel="stylesheet" type="text/css" href="/static/templates/main/css1/index1.css" />
<link rel="stylesheet" href="/static/templates/main/css1/index.css">
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/other.css" />
{{--<body id="special_">--}}

<div class="a_banner">
    <div class="a_banner_pic">
        <ul>
            <li>
                <li><a href="{{$advert[0]->picture_url}}"><img src="@if($advert[0]->picture_place == 1) {{$advert[0]->picture_src}} @endif" style="background: url(/static/upload/img/201803062351329727.jpg) center 0px no-repeat;width: 100%;height: 100%;" style="display: none;" /></a></li>
            </li>
        </ul>
    </div>
</div>
{{--banner--}}
{{--@include('home.layouts.banner')--}}
<div id="container" onclick="window.open('tencent://message/?Menu=yes&amp;uin=800856702','_blank')" style="cursor:pointer;"></div>
<div class="content_nav">
<div class="container">
<span>当前位置：</span>
<a href="/index.html">首页</a> &gt;
<a href="/studentemployment.html">就业喜报</a>
</div>
</div>
<div id="special_employ" class="employ p-50 c-bg-w">
<div class="container">
<div class="title f-30 txt-center">
<h2 class="h2-unit rel">鸿博学员就业信息</h2>
<p class="p-unit">懂原理、精实操，薪资才更高</p>
<p class="img-unit"><img src="/static/templates/main/images/h2_ico.png" /></p>
</div>
<div class="content">
<div class="thead txt-center c-w f-20 clearfix">
<div class="td name left">姓名</div>
<div class="td prof left">专业</div>
<div class="td cpy left">入职企业</div>
<div class="td job left">职位</div>
<div class="td month-pay left">月薪</div>
</div>
<div class="tlist rel" id="scollList_employ">
<div class="list-box w-100 f-18 abs">
<div class="list current txt-center clearfix">
<div class="td name left b">魏**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">新浪</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">25000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">石**</div>
<div class="td prof left b">PHP全栈开发</div>
<div class="td cpy left b">白果实业</div>
<div class="td job left b">PHP工程师</div>
<div class="td month-pay left b">15000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">王**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">联信天下</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">15000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">秦**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">中软国际</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">18000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">苏**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">康邦科技</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">16000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">李**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">爱卡汽车</div>
<div class="td job left b">Java开发工程师</div>
<div class="td month-pay left b">15000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">张*</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">爱卡汽车</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">20000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">马**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">北京远航付网络公司</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">17000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">钱**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">小奇鱼网络</div>
<div class="td job left b">Java开发工程师</div>
<div class="td month-pay left b">17000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">徐**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">金证科技</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">18000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">代**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">普元信息</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">18000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">付**</div>
 <div class="td prof left b">Java大数据</div>
<div class="td cpy left b">网易</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">23000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">宋**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">北京融入网络</div>
<div class="td job left b">软件工程师</div>
<div class="td month-pay left b">15000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">张**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">睿民互联</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">19000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">李**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">东方国信</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">17000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">田**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">普元信息</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">18800</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">陈**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">零度智慧</div>
<div class="td job left b">开发工程师</div>
<div class="td month-pay left b">18000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">李**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">柯莱特</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">15000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">张**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">金证科技</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">19000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">李**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">卓望</div>
<div class="td job left b">开发工程师</div>
<div class="td month-pay left b">17000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">李**</div>
<div class="td prof left b">PHP全栈</div>
<div class="td cpy left b">万达</div>
<div class="td job left b">开发工程师</div>
<div class="td month-pay left b">15000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">朱**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">中奥通宇</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">16000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">赵**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">搜房网</div>
<div class="td job left b">开发工程师</div>
<div class="td month-pay left b">17000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">董**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">睿民互联</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">15000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">董**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">睿民互联</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">15000</div>
</div>
<div class="list current txt-center clearfix">
<div class="td name left b">乔**</div>
<div class="td prof left b">Java大数据</div>
<div class="td cpy left b">亚信</div>
<div class="td job left b">大数据分析师</div>
<div class="td month-pay left b">17000</div>
</div>
</div>
</div>
</div>
<div class="btn-group txt-center w-100">
<div class="btn-bt rel f-20 bolder butn"><a href="tencent://message/?Menu=yes&amp;uin=800856702" target="_black">查看往期就业薪资</a></div>
</div>
</div>
</div>
<div class="xdl_kczx" id="modain">

<section class="sec hm_plot">
<div class="hd">
 <h2 class="hd_tt">学员故事</h2>
<a href="/StudentsStory.html" class="a_default">查看更多&gt;&gt;</a>
</div>
<div class="plot_con" style="height: 510px;">

<div class="plot_l">
<a href="/StudentsStory/show-4.html" class="picbox"><img src="{{$student[2]->img}}" width="479" height="334" border="0" vspace="0" title="" alt="" style="width: 479px; height: 334px;">
<p class="p1">{{$student[0]->testimonials}}</p>
<p class="p2"><span>姓名：{{$student[0]->name}}</span> <span>班级：{{$student[0]->class_name}}</span><span>月薪：{{$student[0]->pay}}</span></p></a>
</div>
<div class="plot_r">
<ul>
    @foreach($student as $k=>$v)
        @if($k != 0)
            <li><a href="/StudentsStory/show-19.html" class="picbox"><img height="140" src="{{$v->img}}"><p>姓名：{{$v->name}}<br>班级：{{$v->class_name}}<br>月薪：{{$v->pay}}</p></a></li>
        @endif
    @endforeach
</ul>
</div>
</div>
</section>

</div>
<div class="c7">
<div class="warp">
<h2 style="font-size: 46px;">
合作企业
</h2>
</div>
<div id="auto-width">
<div class="warp">
<table>
<tr>
<td><img src="/static/upload/img/201802072327292790.jpg" alt=""></td>
<td><img src="/static/upload/img/201802072327149724.jpg" alt=""></td>
<td><img src="/static/upload/img/201802072326505017.jpg" alt=""></td>
<td><img src="/static/upload/img/201802070913136628.jpg" alt=""></td>
<td><img src="/static/upload/img/201802070913055378.jpg" alt=""></td>
</tr>
<tr>
<td><img src="/static/upload/img/201802070912514929.jpg" alt=""></td>
<td><img src="/static/upload/img/201802070912436199.jpg" alt=""></td>
<td><img src="/static/upload/img/201802070912341403.jpg" alt=""></td>
<td><img src="/static/upload/img/201802070912257761.jpg" alt=""></td>
<td><img src="/static/upload/img/201802070912131648.jpg" alt=""></td>
</tr>
<tr>
</tr>
</table>
<a rel="nofollow" href="tencent://message/?Menu=yes&amp;uin=800856702" target="_blank">看看还有哪些企业选择鸿博学员？</a>
</div>
</div>
</div>

{{--底部--}}
@include('home.layouts.footer')
{{--公共js--}}
@include('home.layouts.script')

<script type="text/javascript" src="/static/templates/main/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/static/templates/main/js/special_java.js"></script>
<script>
$('.kczx_item fl_left').on({
    mouseover: function() {
        $(this).addClass('shadow');
    },
    mouseout: function() {
        $(this).removeClass('shadow');
    }
});
</script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?19b972123a261b3be88cf2d47bd66ccb";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<script> (function(){ var bp = document.createElement('script'); var curProtocol = window.location.protocol.split(':')[0]; if (curProtocol === 'https') { bp.src = 'https://zz.bdstatic.com/linksubmit/push.js'; } else { bp.src = 'http://push.zhanzhang.baidu.com/push.js'; } var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(bp, s); })(); </script>
