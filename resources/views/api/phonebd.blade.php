<html xmlns:wb="http://open.weibo.com/wb">

<head lang="en">
	<meta charset="UTF-8">
	<title>鸿博IT教育-匠心打造,品质铸就</title>
	<meta name="keywords" content="Java培训班,PHP培训班,Html5培训班,移动开发培训,大数据培训,IT培训">
	<meta name="description" content="鸿博IT教育，坐落于首都北京市昌平区，毗邻北京科技大学，具有良好的学术学习氛围，最具前沿的互联网高新技术。 专注互联网领域技术10余年，全国知名十佳教育培训机构，IT职业教育领军品牌。">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<link rel="stylesheet" href="./templates/mobile/css/reset.css">
	<link rel="stylesheet" href="./templates/mobile/css/swiper-3.3.1.min.css">
	<link rel="stylesheet" href="./templates/mobile/css/style.css">
	<link rel="stylesheet" href="https://at.alicdn.com/t/font_689149_dby6e0fcds.css">
	<link rel="stylesheet" href="./templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="./templates/mobile/plugin/swiper/swiper-4.3.3.min.css">
	<script src="./templates/mobile/js/jquery.min.js"></script>
	<link rel="stylesheet" href="./templates/mobile/css/style1.css">
	<style>
		* {
			padding: 0;
			margin: 0;
			list-style: none;
			box-sizing: border-box;
		}

		.bm {
			width: 100%;
			font-family: Microsoft Yahei;
			padding-bottom: 30px;
		}

		.bm .bm_con {
			width: 100%;
			margin: 0 auto;
			overflow: hidden;
		}

		.bm .bm_con h2 {
			font-size: 1.2em;
			;
			padding: 15px 0;
			text-align: center;
			line-height: 1.5em;
			background: #4492DC;
			color: #fff;
			margin-bottom: 1em;
		}

		.bm .bm_con .left {
			width: 94%;
			padding: 20px;
			margin: 0 auto;
			background: #fff;
		}

		.bm .bm_con .left ul {
			margin: 0;
			padding: 0;
		}

		.bm .bm_con .left ul li {
			overflow: hidden;
			padding-top: 2px;
		}

		.bm .bm_con .left ul li .l_text {
			display: block;
			font-size: 1em;
			color: #666;
			line-height: 40px;
		}

		.bm .bm_con .left ul li input {
			width: 100%;
			display: block;
			font-size: 1em;
			border: 1px solid #c9c9c9;
			border-radius: 0.1em;
			text-indent: 1em;
			height: 2.4em;
			;
			line-height: 2.4em;
			;
		}

		.bm .bm_con .left ul li select {
			width: 100%;
			height: 30px;
			font-size: 0.8em;
		}

		.bm .bm_con .left ul li.right a {
			display: block;
			width: 100%;
			height: 2.3em;
			line-height: 2.3em;
			text-indent: 0;
			margin-top: 1em;
			color: #fff;
			font-size: 16px;
			background: #4492dc;
			border: none;
			outline: none;
			border-radius: 3px;
			font-family: Microsoft Yahei;
			text-align: center;
			text-decoration: none;
		}

		.bm .bm_con .left ul li.right a:hover {
			background: #5aa3e9;
		}

		.bm .bm_con .left ul li.right p {
			font-size: 12px;
			line-height: 20px;
			color: #666;
			margin-top: 5px;
		}
	</style>
	<script type="text/javascript" src="http://www.itcast.cn/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
		function check() {
			var realname = $("#txtUserName");
			var phone = $("#txtUserTel");

			var qq = $("#txtUserQQ");
			var address = $("#txtUserEmail");
			var cid = $("#cid");

			var realnamereg = /^[\u4E00-\u9FA5]+$/;
			var phonereg = /^[1][3-9][0-9]9$/;


			var shuoreg = /(http[s]?|ftp):\/\/[^\/\.]+?\..+\w$/i;
			var url = "";
			try {
				url = window.top.document.referrer;
			} catch (M) {
				if (window.parent) {
					try {
						url = window.parent.document.referrer;
					} catch (L) {
						url = "";
					}
				}
			}
			if (url === "") {
				url = document.referrer;
			}
			$("#u").val(url);
			if (!realnamereg.test(realname.val())) {
				realname.focus().val('');
				alert('请输入正确的中文名称！');
				return false;
			} else {
				$("#feedback_form").submit();

				alert('申请成功！\r\n咨询客服人员将会主动联系您，请耐心等待！');
				realname.val('');
				phone.val('');
				address.val('');
				cid.val('');

				qq.val('');
			}
		}
	</script>
</head>

<body style="">
	<div class="main gd">


		<link rel="stylesheet" href="./templates/mobile/css/common.css">
		<script type="text/javascript" src="./templates/mobile/js/newjquery.js"></script>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="font-size: 14px;">
			<div class="navbar-header">
				<div class="mNav">
					<div class="mNav-close">
						<script type="text/javascript">
							//<![CDATA[
							window.__mirage2 = {
								petok: "525bd96eaf0ad26f134206264ea69fbed47f1e09-1557555919-1800"
							};
							//]]>
						</script>
						<script type="text/javascript" src="https://edge.yunjiasu.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
						<img data-cfsrc="./templates/mobile/images/mNav_10.png" width="19" height="19" src="https://m.itjmd.com./templates/mobile/images/mNav_10.png">
					</div>
					<ul style="margin-bottom: 00px;">
						<li><a href="./Faculty.html"><img data-cfsrc="./templates/mobile/images/shizi.png" src="./templates/mobile/images/shizi.png"><span>师资</span></a></li>
						<li><a href="./EmploymentInformation.html"><img data-cfsrc="./templates/mobile/images/jiuye.png" src="./templates/mobile/images/jiuye.png"><span>就业</span></a></li>
						<li><a href="./phonebd.html"><img data-cfsrc="./templates/mobile/images/baoming.png" src="./templates/mobile/images/baoming.png"><span>报名</span></a></li>
						<li><a href="./news.html"><img data-cfsrc="./templates/mobile/images/ITzixun.png" src="./templates/mobile/images/ITzixun.png"><span>IT资讯</span></a></li>
						<li><a href="./StudentsStory.html"><img data-cfsrc="./templates/mobile/images/gushi.png" src="./templates/mobile/images/gushi.png"><span>故事</span></a></li>
						<li><a href="./about/abouts.html"><img data-cfsrc="./templates/mobile/images/guanyu.png" src="./templates/mobile/images/guanyu.png"><span>关于</span></a></li>
						<div class="clear"></div>
					</ul>
				</div>
				<button type="button" class="navbar-toggle mNav-icon" data-toggle="collapse" data-target="#example-navbar-collapse">
					<span class="sr-only">切换导航</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-x-1 icon-x"></span>
					<span class="icon-x-2 icon-x"></span>
				</button>
				<img data-cfsrc="./upload/img/201806290946405929.png" alt="logo" class="nav-logo navbar-brand" src="./upload/img/201806290946405929.png">
				<a>
					<img data-cfsrc="./templates/mobile/src/icons/call.png" alt="电话" class="nav-call" href="010-57032333" src="./templates/mobile/src/icons/call.png">
				</a>
			</div>
		</nav>
		<script type="text/javascript">
			$(window).load(function() {
				$('.mNav-icon').click(function() {
					$('.mNav').removeClass('mNav-ani-outScale').addClass('mNav-ani-fromScale');

				});
				$('.mNav-close').click(function() {
					$('.mNav').removeClass('mNav-ani-fromScale').addClass('mNav-ani-outScale');

				})
			})
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
		<script type="application/ld+json">
			{
				"@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
				"@id": "https://www.itjmd.com/",
				"appid": "1600403569933280",
				"title": "鸿博IT教育-匠心打造,品质铸就",
				"images": [
					"./upload/201807/04/201807041026260216.jpg",
					"./upload/201806/24/201806241911120948.png",
					"./upload/201806/24/201806241911323214.png"
				], //请在此处添加希望在搜索结果中展示图片的url，可以添加0个、1个或3个url
				"pubDate": "2018-07-30T09:40:01" // 需按照yyyy-mm-ddThh:mm:ss格式编写时间，字母T不能省去
			}
		</script>


		<div class="con">
			<div class="bm" style="max-width:750px; margin:0 auto;">
				<div class="bm_con">
					<h2>每期开班座位有限<br>预报名可优先享有占座特权哦！</h2>
					<iframe style="display:none" id="ajaxframe" name="ajaxframe"></iframe>
					<form id="feedback_form" url="" action="" method="post" target="ajaxframe">
						<div class="left">
							<ul>
								<li>
									<span class="l_text"><s style="color:#e00000; font-size:0.8em; text-decoration:none; line-height:0.9em; padding-right:5px;">*</s>真实姓名</span>
									<input type="text" placeholder="我们期待更了解您" name="txtUserName" id="txtUserName">
								</li>
								<li>
									<span class="l_text"><s style="color:#e00000; font-size:0.8em; text-decoration:none; line-height:0.9em; padding-right:5px;">*</s>联系手机</span>
									<input type="text" placeholder="我们和您一样讨厌骚扰电话" name="txtUserTel" id="txtUserTel">
								</li>
								<li>
									<span class="l_text"><s style="color:#e00000; font-size:0.8em; text-decoration:none; line-height:0.9em; padding-right:11px;">*</s>QQ号码</span>
									<input type="text" placeholder="我们将尽快与您联系" name="txtUserQQ" id="txtUserQQ">
								</li>
								<li>
									<span class="l_text"><s style="color:#e00000; font-size:15px; text-decoration:none; padding-right:5px;">*</s>上课地址</span>
									<select name="txtUserEmail" id="txtUserEmail">
										<option value="">选择校区</option>
										<option value="北京校区">北京校区</option>
									</select>
								</li>
								<li>
									<span class="l_text"><s style="color:#e00000; font-size:0.8em; text-decoration:none; padding-right:5px;">*</s>抢报学科</span>
									<select name="txtContent" id="txtContent">
										<option value="0">请选择报名学科</option>
										<option value="php">php</option>
										<option value="Java">Java</option>
										<option value="H5+全栈工程师">H5+全栈工程师</option>
									</select>
								</li>
								<input type="hidden" name="come" value="鸿博移动端">
								<input type="hidden" name="url" value="" id="u">
								<li class="right">
									<a href="javascript:;" onclick="check()">现在预报名</a>
									<p>温馨提示：请保持手机畅通，咨询老师将为您提供专属的一对一报名服务。</p>
								</li>
							</ul>
						</div>
					</form>
				</div>
			</div>
		</div>

		<footer class="footer">
			<p>版权所有 2006 - 2018 北京鸿博互联软件有限公司</p>
			<p>地址：北京市海淀区苏家坨54号</p>
		</footer>
		<div class="tabBar" style="font-size: 14px;">
			<a href="/">
				<div class="item">
					<p><img data-cfsrc="./templates/mobile/src/icons/tab_home.png" class="img-responsive" src="https://m.itjmd.com./templates/mobile/src/icons/tab_home.png"></p>
					<p>首页</p>
				</div>
			</a>
			<a href="http://q.url.cn/ABULOl?_type=wpa&amp;qidian=true">
				<div class="item">
					<p><img data-cfsrc="./templates/mobile/src/icons/tab_zixun.png" class="img-responsive" src="https://m.itjmd.com./templates/mobile/src/icons/tab_zixun.png"></p>
					<p>在线咨询</p>
				</div>
			</a>
			<a href="/phonebd.html">
				<div class="item">
					<p><img data-cfsrc="./templates/mobile/src/icons/tab_baoming.png" class="img-responsive" src="https://m.itjmd.com./templates/mobile/src/icons/tab_baoming.png"></p>
					<p>我要报名</p>
				</div>
			</a>
		</div>

	</div>
	<script src="./templates/mobile/js/jquery-1.10.2.min.js"></script>
	<script src="./templates/mobile/js/jquery.SuperSlide.2.1.2.js"></script>
	<script src="./templates/mobile/js/swiper-3.3.1.min.js"></script>
	<script type="text/javascript" src="./templates/mobile/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="./templates/mobile/js/all.js"></script>
	<script type="text/javascript" src="./templates/mobile/js/two.js"></script>
	<script type="text/javascript" src="./templates/mobile/plugin/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="./templates/mobile/plugin/bootstrap-3.3.7/js/bootstrap.js"></script>
	<script type="text/javascript" src="./templates/mobile/plugin/swiper/swiper-4.3.3.min.js"></script>
	<script type="text/javascript" src="./templates/mobile/js/main.js"></script>
	<script>
		var mySwiper = new Swiper('.swiper-container', {
			slidesPerView: "7",
			spaceBetween: 0 //控制两个块之间的宽度
		})
	</script>

</body>

</html>