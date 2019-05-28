{{--头部 css--}}
@include('home.layouts.header')
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/other.css" />
<link href="/static/templates/main/css/global.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/sjs_tc.css">
<link rel="stylesheet" media="screen" href="/static/templates/main/css/jquery-ui.min.css">


{{--banner--}}
@include('home.layouts.banner')
<div class="content_nav">
<div class="container" style="text-align: left;">
<span>当前位置：</span>
<a href="/index.html">首页</a> &gt;
<a href="/Faculty.html">豪华师资</a>
</div>
</div>

<div class="layout container-minheight clearfix">
<div class="inside-contanier-l-wrap inside2">
<div class="des-tab-box demo-TabWrap">
<div class="des-tab-clum demo-TabBody" style="display:block;">
 @foreach($teacher as $v)
   <div class="disList">
   <div class="dLleft f_l"><a target="_blank" href="/Faculty/show-3.html"><img src="{{$v->teacher_portrait_src}}" width="180" alt="{{$v->name}}" /></a></div>
   <div class="dLright f_l">
   <a target="_blank" href="/Faculty/show-3.html"><p><strong>{{$v->name}}</strong></p></a>
   <p><span>{{$v->teacher_position}}</span></p>
   <p><b>工作年限：</b><span>{{$v->obtain_employment_time}}</span></p>
   <p><b>擅长领域：</b>职业规划,心理咨询</p>
   <p><b>授课风格：</b>{{$v->teacher_style}}</p>
   </div>
   <div class="clear" style="height:0px;"></div>
   </div>
 @endforeach

<p class="nex-page">
</p>

</div>
</div>
</div>


<div class="dLrightDiv" style="margin-top: 20px;">
<script type="text/javascript">
	$(function(){
		//初始化发表评论表单
		AjaxInitForm('#feedback_form', '#btnSubmit', 1);
	});
</script>
<div class="right_item right_item_4">
<div class="lfMflf">
<div class="lfMflfTit">提交报名</div>
<form class="rightform1" id="feedback_form" name="feedback_form" url="/plugins/feedback/ajax.ashx?action=add&site=1" action="/plugins/feedback/ajax.ashx?action=add&site=1" method="post" novalidate>
<input type="hidden" name="type" value="15">
<input type="hidden" name="source" value="8">
<input type="text" placeholder="请输入您的姓名" name="txtUserName" id="txtUserName">
<input type="text" placeholder="请输入您的电话" name="txtUserTel" id="txtUserTel" size="5" maxlength="11">
<input type="text" placeholder="请输入您的QQ号码" name="txtUserQQ" id="txtUserQQ">
<select name="txtUserEmail" id="txtUserEmail">
<option value="0">请选择上课地址</option>
<option value="北京校区">北京校区</option>
</select>
<select name="txtContent" id="txtContent">
<option value="0">请选择报名学科</option>
<option value="php">php</option>
<option value="Java">Java</option>
<option value="H5+全栈工程师">H5+全栈工程师</option>
</select>
<input type="hidden" name="source" value="8">
<input id="btnSubmit" name="btnSubmit" type="submit" class="lfMflfBtn" value="提交申请" />
</form>
</div>
</div>
<div class="right_pi_wrap img_div">
<a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank"><img src="/static/upload/img/201812071114316567.jpg" alt="广告3"></a>
<a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank"><img src="/static/upload/img/201901041517363540.jpg" alt="广告2"></a>
</div>
<div class="right_item">
<div class="right_item_title">
<h2>开课信息</h2>

</div>
<div class="right_item_content">
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>6</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-02-26</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>7</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-03-06</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>8</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-03-20</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>9</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-04-10</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>10</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-04-22</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>11</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-05-08</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>12</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-06-12</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>13</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-07-03</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>14</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-07-25</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
</div>
</div>
<div class="right_item right_item_3">
<div class="right_item_title">
<h2>推荐讲师</h2>
<a href="/Faculty.html">更多>></a>
</div>
<div class="right_item_content">
<ul>
   @foreach($teacher as $v)
      <li><a href="/Faculty/show-2.html">{{$v->name}}</a></li>
   @endforeach


</ul>
</div>
</div>
<div class="sidebar-box right_item">
<h4>热门标签</h4>
<div class="tags-box clearfix">
<a href="/search.html?tags=%e9%87%91%e9%93%ad%e9%bc%8e">鸿博<i>(76)</i></a>
<a href="/search.html?tags=HTML5">HTML5<i>(19)</i></a>
<a href="/search.html?tags=%e7%a8%8b%e5%ba%8f%e7%8c%bf">程序猿<i>(7)</i></a>
<a href="/search.html?tags=HTML5%e5%ad%a6%e4%b9%a0">HTML5学习<i>(4)</i></a>
<a href="/search.html?tags=html">html<i>(4)</i></a>
<a href="/search.html?tags=php%e5%9f%b9%e8%ae%ad">php培训<i>(4)</i></a>
<a href="/search.html?tags=%e5%b7%a5%e4%bd%9c%e6%95%88%e7%8e%87">工作效率<i>(2)</i></a>
<a href="/search.html?tags=%e7%97%9b%e8%8b%a6%e9%a2%86%e6%82%9f">痛苦领悟<i>(1)</i></a>
<a href="/search.html?tags=%e6%92%a9%e6%b1%89">撩汉<i>(1)</i></a>
<a href="/search.html?tags=Html%e6%a0%87%e7%ad%be">Html标签<i>(1)</i></a>
<a href="/search.html?tags=%e5%81%9a%e9%a1%b9%e7%9b%ae">做项目<i>(1)</i></a>
<a href="/search.html?tags=%e5%ad%a6%e7%bc%96%e7%a8%8b">学编程<i>(1)</i></a>
<a href="/search.html?tags=PHP%e9%a1%b9%e7%9b%ae">PHP项目<i>(1)</i></a>
<a href="/search.html?tags=%e7%b9%81%e5%8d%8e%e9%83%bd%e5%b8%82">繁华都市<i>(1)</i></a>
<a href="/search.html?tags=%e9%83%bd%e6%98%af%e7%94%9f%e6%b4%bb">都是生活<i>(1)</i></a>
<a href="/search.html?tags=IT%e5%9f%b9%e8%ae%ad">IT培训<i>(1)</i></a>
<a href="/search.html?tags=%e9%87%91%e9%93%ad%e9%bc%8e%e5%9f%b9%e8%ae%ad">鸿博培训<i>(1)</i></a>
<a href="/search.html?tags=%e6%b2%a1%e6%9c%89%e5%9f%ba%e7%a1%80">没有基础<i>(1)</i></a>
<a href="/search.html?tags=%e5%9f%ba%e7%a1%80%e5%85%a5%e9%97%a8">基础入门<i>(1)</i></a>
<a href="/search.html?tags=%e6%92%a9%e6%b1%89%e4%bc%98%e9%80%89%e2%80%9c%e7%a8%8b%e5%ba%8f%e7%8c%bf%e2%80%9d">撩汉优选“程序猿”<i>(0)</i></a>
</div>
</div>
</div>
</div>
{{--底部--}}
@include('home.layouts.footer')

{{--公共js--}}
@include('home.layouts.script')
<script src="/static/templates/main/js/jquery.validate.js" type="text/javascript"></script>
<script src="/static/templates/main/js/jquery-ui.min.js"></script>
