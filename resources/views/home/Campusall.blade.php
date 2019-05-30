{{--头部-css--}}
@include('home.layouts.header')
<style>
	.left_content ul li p {
		float: left;
		height: auto;
		overflow: hidden;
		font-size: 14px;
		color: #595757;
	}

	.left_container {
		width: 820px;
		height: 1158px;
		border: 1px solid #F3F3F3;
		float: left;
	}

	.left_content {
		width: 750px;
		height: 760px;
	}

	.left_content ul {
		height: auto;
		margin-bottom: 35px;
	}

	.left_content ul:last-child {
		margin-bottom: 0px;
	}

	.left_content ul li {
		line-height: 24px;
		width: 551px;
		height: 24px;
	}

	.left_content ul li p {
		float: left;
		height: auto;
		overflow: hidden;
		font-size: 14px;
		color: #595757;
	}

	.left_content ul li p:hover {
		color: #0083df;
	}

	.left_content ul li span {
		float: left;
		line-height: 22px;
		font-size: 25px;
		margin-left: -12px;
		color: #595757;
	}

	.left_content ul li .left_title {
		min-width: 400px;
	}

	.left_content ul li .left_time {
		min-width: 135px;
	}

	.left_fenye {
		margin-left: 252px;
	}

	.left_fenye span {
		display: block;
		width: 50px;
		height: 19px;
		border: 1px solid #ccc;
		text-align: center;
		color: #fff;
		background: #5A85B3;

	}

	.left_fenye a {
		display: block;
		border: 1px solid #c9c9c9;
		color: #727171;
		font-size: 12px;
		float: left;
		margin: 0 5px 0;
		width: 50px;
		text-align: center;
		line-height: 19px;
		height: 19px;
	}

	.left_fenye span {
		float: left;
		color: #fff;
		line-height: 19px;
	}

	.left_fenye a.fenye_fl {
		width: 63px;
		height: 19px;
	}

	.right_container {
		width: 364px;
		height: 1158px;
		float: left;
		margin-left: 13px;
	}


	.left_content ul li:nth-of-type(5n) {
		margin-bottom: 20px;
	}

	.php_mianbaoxie {
		height: 30px;
		line-height: 16px;
		margin-top: 5px;
	}
</style>

<div class="wrapper">

	<div class="a_banner">
		<div class="a_banner_pic">
			<ul>
				<li>
				<li><a href="#"><img src="/static/upload/201803062351329727.jpg" style="background: url(https://www.itjmd.com/upload/201803062351329727.jpg) center 0px no-repeat;width: 100%;height: 100%;" style="display: none;" /></a></li>
				</li>
			</ul>
		</div>
	</div>
	<div id="container" onclick="window.open('http://q.url.cn/ABULOl?_type=wpa&qidian=true','_blank')" style="cursor:pointer;"></div>
	<div class="content_nav">
		<div class="container">
			<p class="list_url">
				<span>当前位置：</span>
				<a href="/index.html">首页</a> &gt;
				<a href="/Campusall.html">IT资讯</a>
			</p>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="scZxListLeft clearfix">
				<!-- 循环开始  -->
				@foreach($list as $v)
    
				<div class="scZxCcSf scZxCcSff">
					<div class="scZxCcSfM scZCcSfMM clearfix">
						<div class="scZxCcTit clearfix">
							<h3><a href="/news/62.html">{{$v[0]->c_name}}</a></h3><a href="/news/62.html">更多</a>
						</div>
						<div class="scZxCcCon clearfix">
							<div class="scZxCcConTop clearfix">
								@if (isset($v[1]))
								<a href="/news/show-6449.html">
									<img src="/static/upload//201904/10/201904100920455589.jpg">
									<div class="scZxCcConTopInfo">
										<strong style="display: block;overflow:hidden;width: 200px;">{{$v[1]->title}}</strong>
										<p style="height: 80px;overflow: hidden;">{{$v[1]->content}}</p>
									</div>
								</a>
								@endif
							</div>
							<div class="scZxCcConLi">
								<ul class="clearfix scZxCcConLi-ul">
								@if (isset($v[2]))
									<li class="clearfix">
										<a href="/news/show-6438.html" title="{{$v[2]->title}}">{{$v[2]->title}}</a><span>{{$v[2]->add_time}}</span>
									</li>
								@endif
								@if (isset($v[3]))
									<li class="clearfix">
										<a href="/news/show-6438.html" title="{{$v[3]->title}}">{{$v[3]->title}}</a><span>{{$v[3]->add_time}}</span>
									</li>
								@endif
								@if (isset($v[4]))
									<li class="clearfix">
										<a href="/news/show-6438.html" title="{{$v[4]->title}}">{{$v[4]->title}}</a><span>{{$v[4]->add_time}}</span>
									</li>
								@endif
								</ul>
							</div>
							<div class="scZxCcConFl">
							</div>
						</div>
					</div>
				</div>
				@endforeach

			 	<!-- 循环结束  -->
				 
				 
				 
				 
				 
			</div>
			<style>
				.right_item_last a:hover {
					color: #fff;
				}
			</style>
			<div class="right_container">
				<script type="text/javascript">
					$(function() {
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
					<a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank"><img src="/static/upload//201812/07/201812071114316567.jpg" alt="广告3"></a>
					<a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank"><img src="/static/upload//201901/04/201901041517363540.jpg" alt="广告2"></a>
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
							<li><a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
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
							<li><a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
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
							<li><a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
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
							<li><a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
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
							<li><a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
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
							<li><a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
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
							<li><a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
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
							<li><a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
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
							<li><a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
						</ul>
					</div>
				</div>
				<div class="right_item right_item_3">
					<div class="right_item_title">
						<h2>推荐阅读</h2>
						<a href="/Campusall.html">更多>></a>
					</div>
					<div class="right_item_content">
						<ul>
							<li><a href="/news/show-6457.html">Java学习之final关键字详细解析</a></li>
							<li><a href="/news/show-6456.html">Python常用高阶函数汇总大解析</a></li>
							<li><a href="/news/show-6455.html">2019年Java面试试题之跳表</a></li>
							<li><a href="/news/show-6454.html">Java学习之构造方法汇总</a></li>
							<li><a href="/news/show-6453.html">Python基础学习之多任务-协程详细讲解</a></li>
							<li><a href="/news/show-6452.html">Python开发之控制流代码详细解析</a></li>
							<li><a href="/news/show-6451.html">Java学习小技巧之利用注解技术检查空指针</a></li>
							<li><a href="/news/show-6450.html">大数据HIVE之DDL操作详细解析</a></li>
							<li><a href="/news/show-6449.html">PHP面向对象详细解析</a></li>
							<li><a href="/news/show-6448.html">2019年最新大数据HIVE定义及数据类型详解</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
{{--底部--}}
@include('home.layouts.footer')
{{--公共js--}}
@include('home.layouts.script')
<script id="qd28521529033c5559ef89a81cb9a2cce5a2f8af319e" src="https://wp.qiye.qq.com/qidian/2852152903/3c5559ef89a81cb9a2cce5a2f8af319e" charset="utf-8" async defer></script>
<script>
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?19b972123a261b3be88cf2d47bd66ccb";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();
</script>
<script>
	(function() {
		var bp = document.createElement('script');
		var curProtocol = window.location.protocol.split(':')[0];
		if (curProtocol === 'https') {
			bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
		} else {
			bp.src = 'http://push.zhanzhang.baidu.com/push.js';
		}
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(bp, s);
	})();
</script>