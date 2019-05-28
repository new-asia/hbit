{{--头部-css--}}
@include('home.layouts.header')
<link rel="stylesheet" type="text/css" href="static/templates/main/css/other.css" />
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

<div class="wrapper">

<div class="flow_banner1"></div>
<div class="content_nav">
<div class="container">
<span>当前位置：</span>
<a href="/index.html">首页</a> &gt;
<a href="/about/abouts.html">关于我们</a> &gt;
企业理念
</div>
</div>
<div class="graybg">

<div class="con_about">
<div class="about_nav">
<ul>
<li><a id="abouts" href="static/abouts.html">企业简介</a></li>
<li><a id="idea" href="static/idea.html">企业理念</a></li>
<li><a id="history" href="static/history.html">发展历史</a></li>
<li><a id="school" href="static/school.html">直营校区</a></li>
</ul>
</div>
<div class="about_con">
<div class="inner1">

<p>自强不息，厚德载物，让梦想成为现实。 &nbsp;&nbsp;</p><p>没有执行力，就没有竞争力 &nbsp;</p><p>百折不挠 自强不息 艰苦奋斗 共铸辉煌。 &nbsp;</p><p>锲而不舍、力求尽善尽美 &nbsp;&nbsp;</p><p>速度为先，领跑市场 &nbsp;</p><p>&quot;追求卓越、创造完美、服务社会&quot; &nbsp;</p><p>通过自我奋斗实现个人价值，通过团队协作实现公司与员工的共同发展，以共同的目标作为一切行为的出发点和落脚点，在岗位责任的基础上精诚团结；讲团结求合力，讲协作求效率；互相尊重，互相帮助，互相信任，互相爱护。 &nbsp;&nbsp;</p><p>天道酬勤，付出总有回报，造就完美员工。 &nbsp;&nbsp;</p><p>责权明确，目标清晰，协同有序，快速高效 &nbsp;</p><p>同心同德，团结拚搏，学习创新，激励自己，挑战显示，创一流企业。 &nbsp;&nbsp;</p><p>投入必然有回报，忠诚必然有信任，主动必然有创新，执著必然有成功。 &nbsp;&nbsp;</p><p>以人为本、协作、进取、创新、专业、诚信、 &nbsp;&nbsp;</p><p>以人才和技术为基础，创造最佳产品和服务，为人类社会作出贡献 &nbsp;&nbsp;</p><p>从正面看问题，不断学习，自我提高。 &nbsp;</p><p>&nbsp;认真只能把事情做对，用心才能把事情做好</p><p><br /></p>
<br />

</div>
</div>
</div>
<p class="clear"></p>

</div>

</div>
{{--底部--}}
@include('home.layouts.footer')
{{--公共js--}}
@include('home.layouts.script')
<script id="qd28521529033c5559ef89a81cb9a2cce5a2f8af319e" src="https://wp.qiye.qq.com/qidian/2852152903/3c5559ef89a81cb9a2cce5a2f8af319e" charset="utf-8" async defer></script>
<script src="static/templates/main/js/jquery-1.7.2.min.js"></script>

