{{--头部-css--}}
@include('home.layouts.header')
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/other.css" />

<div class="wrapper">

<div class="flow_banner1"></div>
<div class="content_nav">
<div class="container">
<span>当前位置：</span>
<a href="/index.html">首页</a> &gt;
<a href=".abouts.html">关于我们</a> &gt;
企业简介
</div>
</div>
<div class="graybg">

<div class="con_about">
<div class="about_nav">
<ul>
<li><a id="abouts" href="/static/abouts.html">企业简介</a></li>
<li><a id="idea" href="/static/idea.html">企业理念</a></li>
<li><a id="history" href="/static/history.html">发展历史</a></li>
<li><a id="school" href="/static/school.html">直营校区</a></li>
</ul>
</div>
<div class="about_con">
<div class="inner1">

<h2 style="margin: 0px 0px 25px; padding: 0px; color: rgb(176, 176, 176); font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; font-size: 32px; font-weight: normal; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(0, 0, 0); font-size: 24px;"><strong>企业简介</strong></span></h2><p style="padding: 0px; color: rgb(117, 117, 117); line-height: 24px; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">　　</p><p style="padding: 0px; color: rgb(117, 117, 117); line-height: 3em; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">　　鸿博教育，坐落于首都北京市昌平区十三陵镇，毗邻北京吉利大学（昌平校区），具有良好的学术学习氛围，最具前沿的互联网高新技术。 专注互联网领域技术10余年，全国知名十佳教育培训机构，IT职业教育领军品牌。多年来秉承“认真 &nbsp;严谨 &nbsp;用心 负责”的教学理念，累计培养逾万名IT精英人才，打造高薪就业第一品牌，做学员职业路上的第一领航人。</p><p style="padding: 0px; color: rgb(117, 117, 117); line-height: 3em; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 现开设课程有：Java+大数据 &nbsp;全栈工程师等最前沿最热门的优质课程体系，鸿博教育课程研发团队本着“科学研发、教育为本”的态度，以“培养互联网全能型IT精英人才”为己任，结合企业实操项目与时俱进，实时更新，做到了课程最前沿 最领先、最有价值，具有强大企业时代性。在学员就业方面采取“垂直化、定制化”的就业模式，同业内15000余家互联网软件开发企业签署人才培养协议，解除了学员的后顾之忧，在业内做到了首屈一指，全国数万名学员共同的选择，IT精英的摇篮，你成功路上的领航人。</p><p><br /></p>
<br />

</div>
</div>
</div>
<p class="clear"></p>

</div>

{{--底部--}}
@include('home.layouts.footer')

</div>
{{--公共js--}}
@include('home.layouts.script')
<script id="qd28521529033c5559ef89a81cb9a2cce5a2f8af319e" src="https://wp.qiye.qq.com/qidian/2852152903/3c5559ef89a81cb9a2cce5a2f8af319e" charset="utf-8" async defer></script>
<script src="/static/templates/main/js/jquery-1.7.2.min.js"></script>
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
<script type="text/javascript">
    window.onload=function (){
        //alert(window.location.href);
        var pathname=window.location.pathname;

        var loc = pathname.substring(pathname.lastIndexOf('/')+1,pathname.lastIndexOf('.'));

        if(loc=="abouts")
        {
            $("#abouts").addClass("cur");
        }
        if(loc=="idea")
        {
            $("#idea").addClass("cur");
        }
        if(loc=="history")
        {
            $("#history").addClass("cur");
        }
        if(loc=="school")
        {
            $("#school").addClass("cur");
        }
    }
</script>