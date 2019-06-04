<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" name="viewport" id="viewport">
	<title>JAVA大数据培训班 - 鸿博IT教育-匠心打造,品质铸就</title>
	<meta name="keywords" content="JAVA,JAVA培训,JAVA培训班,JAVA+大数据">
	<meta name="description" content="JAVA是一门永不会过时的编程语言，因其简单行，安全，可靠，高性能，可移植等优点，得到广泛应用。选择一门编程语言，选择专业的培训机构，可根据自身情况选择学习JAVA培训，JAVA+大数据。">
	<link rel="stylesheet" href="./templates/mobile/css/base.css">
	<link rel="stylesheet" href="./templates/mobile/css/javastyle.css">
	<link rel="stylesheet" href="./templates/mobile/css/animate.min.css">
	<link rel="stylesheet" href="./templates/mobile/css/font_689149_dby6e0fcds.css">
	<link rel="stylesheet" href="./templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="./templates/mobile/plugin/swiper/swiper-4.3.3.min.css">
	<script src="https://hm.baidu.com/hm.js?19b972123a261b3be88cf2d47bd66ccb"></script>
	<script src="./templates/mobile/js/jquery.min.js"></script>
	<link rel="stylesheet" href="./templates/mobile/css/style1.css">
</head>

<body style="font-size: 16px;">


{{--nav--}}
@include('api.layouts.nav')
	<script>
		$("#caidan").live("click", function() {
			var ariaexpanded = $(this).attr("aria-expanded");

			if (ariaexpanded == 'false') {
				//navbar-collapse collapse
				//navbar-collapse collapsing
				$("#example-navbar-collapse").removeClass('collapse')
				$("#example-navbar-collapse").removeClass('collapsing')
				$("#example-navbar-collapse").addClass('collapse in')
				$("#example-navbar-collapse").attr('aria-expanded', true)

				$(this).attr('aria-expanded', true)
				$(this).removeClass('collapsed')
			} else {
				//navbar-collapse collapse in
				//navbar-collapse collapse in
				$("#example-navbar-collapse").addClass('collapsing')
				$("#example-navbar-collapse").addClass('collapse')
				$("#example-navbar-collapse").removeClass('collapse in')
				$("#example-navbar-collapse").attr('aria-expanded', false)

				$(this).addClass('collapsed')
				$(this).attr('aria-expanded', false)
			}
		});
	</script>
	<div class="ban">
		<div id="slideBox" class="slideBox">

			<div class="bd">
				<div class="tempWrap" style="overflow:hidden; position:relative; width:100%">
					<ul style=" width: 100%; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -100%;">
						<li class="clone" style="float: left; width: 100%;">
							<img data-cfsrc="./templates/mobile/images/ban1_img1.jpg" style="width: 100%;" src="./templates/mobile/images/ban1_img1.jpg">
							<div class="btm">
								<img class="wow slideInRight animated" data-cfsrc="./templates/mobile/images/ban1_img2.png" src="./templates/mobile/images/ban1_img2.png" style="visibility: visible; animation-name: slideInRight;">
								<img data-cfsrc="./templates/mobile/images/ban1_img3.png" src="./templates/mobile/images/ban1_img3.png">
								<a href="https://tb.53kf.com/code/client/10169396/1" class="btn wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">点击咨询</a>
							</div>
						</li>
						<li class="li2" style="float: left; width: 100%;">
							<img data-cfsrc="./templates/mobile/images/li2_img1.jpg" style="width: 100%;" src="./templates/mobile/images/li2_img1.jpg">
							<div class="btm">
								<img class="wow slideInRight animated" data-cfsrc="./templates/mobile/images/li2_img2.png" src="./templates/mobile/images/li2_img2.png" style="visibility: visible; animation-name: slideInRight;">
								<img class="img3" data-cfsrc="./templates/mobile/images/li2_img3.png" src="./templates/mobile/images/li2_img3.png">
								<div class="con wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
									<img data-cfsrc="./templates/mobile/images/li2_img4.png" src="./templates/mobile/images/li2_img4.png">
									<a href="#" id=""></a>
								</div>
							</div>
						</li>
						<li style="float: left; width: 100%;">
							<img data-cfsrc="./templates/mobile/images/ban1_img1.jpg" style="width: 100%;" src="./templates/mobile/images/ban1_img1.jpg">
							<div class="btm">
								<img class="wow slideInRight animated" data-cfsrc="./templates/mobile/images/ban1_img2.png" src="./templates/mobile/images/ban1_img2.png" style="visibility: visible; animation-name: slideInRight;">
								<img data-cfsrc="./templates/mobile/images/ban1_img3.png" src="./templates/mobile/images/ban1_img3.png">
								<a href="https://tb.53kf.com/code/client/10169396/1" class="btn wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">点击咨询</a>
							</div>
						</li>
						<li class="li2 clone" style="float: left; width: 100%;">
							<img data-cfsrc="./templates/mobile/images/li2_img1.jpg" style="width: 100%;" src="./templates/mobile/images/li2_img1.jpg">
							<div class="btm">
								<img class="wow slideInRight animated" data-cfsrc="./templates/mobile/images/li2_img2.png" src="./templates/mobile/images/li2_img2.png" style="visibility: visible; animation-name: slideInRight;">
								<img class="img3" data-cfsrc="./templates/mobile/images/li2_img3.png" src="./templates/mobile/images/li2_img3.png">
								<div class="con wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
									<img data-cfsrc="./templates/mobile/images/li2_img4.png" src="./templates/mobile/images/li2_img4.png">
									<a href="#" id=""></a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="box1">
		<div class="box_hd ">
			<div class="left wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
				<span class="span1"></span>
				<span class="span2"></span>
			</div>
			<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<p>你所知的应用90%的服务器端都在用Java</p>
			</div>
		</div>
		<div class="main">
			<img class="img1" data-cfsrc="./templates/mobile/images/box1_img1.jpg" src="./templates/mobile/images/box1_img1.jpg">
			<img data-cfsrc="./templates/mobile/images/box1_img2.jpg" src="./templates/mobile/images/box1_img2.jpg">
			<img data-cfsrc="./templates/mobile/images/box1_img3.jpg" src="./templates/mobile/images/box1_img3.jpg">
		</div>
		<a href="https://tb.53kf.com/code/client/10169396/1" class="btn wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">咨询了解更多</a>
	</div>

	<div class="box2">
		<div class="box_hd ">
			<div class="left wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
				<span class="span1"></span>
				<span class="span2"></span>
			</div>
			<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<p>凭什么说Java是世界第一语言</p>
			</div>
		</div>
		<ul class="main">
			<li>
				<div class="fl">1996<span>年</span></div>
				<div class="fr">成为一种独立的开发工具</div>
			</li>
			<li class="odd">
				<div class="fl">荣获历届TIOBE排行榜第一</div>
				<div class="fr">83<span>次</span></div>
			</li>
			<li>
				<div class="fl">90%<span>以上</span></div>
				<div class="fr">服务器端编程语言占比</div>
			</li>
			<li class="odd li4">
				<div class="fl">2014年IDC统计<br>全球Java开发者高达</div>
				<div class="fr">3,358,860<span>人</span></div>
			</li>
			<li class="odd li5">
				<div class="fl">全球Java<br>每日运行量高达</div>
				<div class="fr">2,500,000,000<span>个</span></div>
			</li>
		</ul>
		<a href="https://tb.53kf.com/code/client/10169396/1" class="btn wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">咨询了解更多</a>
	</div>

	<div class="box3">
		<div class="box_hd ">
			<div class="left wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
				<span class="span1"></span>
				<span class="span2"></span>
			</div>
			<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<p>你为什么会选择Java</p>
			</div>
		</div>
		<div class="main">
			<div class="btm">
				<h3><span></span><b>近期薪资统计表</b></h3>
				<div class="box3_top">
					<ul>
						<li class="scr4">姓名</li>
						<li class="scr7">职位</li>
						<li class="scr7">学历</li>
						<li class="scr6">
							<p class="p4">就业单位</p>
						</li>
						<li class="scr5 xinzi">薪资</li>
					</ul>
					<div id="scrollDiv" class="scrollDiv">
						<div class="bd">
							<div class="tempWrap" style="overflow:hidden; position:relative; height:192px">
								<ol style="height: 1056px; position: relative; padding: 0px; margin: 0px; top: -763px;">
									<li class="clone" style="height: 32px;">
										<p class="scr4">乔**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">亚信</p>
										<p class="scr5 xinzibg">17000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">魏**</p>
										<p class="scr7">大数据工程师</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">新浪</p>
										<p class="scr5 xinzibg">25000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">石**</p>
										<p class="scr7">全栈工程师</p>
										<p class="scr7">护理专业</p>
										<p class="scr6">白果实业</p>
										<p class="scr5 xinzibg">15000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">王**月</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">土木工程</p>
										<p class="scr6">金证科技</p>
										<p class="scr5 xinzibg">20000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">秦**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">建筑专业</p>
										<p class="scr6">联信天下</p>
										<p class="scr5 xinzibg">18000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">苏**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">秘书专业</p>
										<p class="scr6">爱卡汽车</p>
										<p class="scr5 xinzibg">16000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">李**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">信息科学</p>
										<p class="scr6">中奥通宇</p>
										<p class="scr5 xinzibg">15000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">张**</p>
										<p class="scr7">大数据开发工程师</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">爱卡汽车</p>
										<p class="scr5 xinzibg">26000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">马**</p>
										<p class="scr7">信息工程</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr6">远航付网络</p>
										<p class="scr5 xinzibg">17000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">钱**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">计算机科学</p>
										<p class="scr6">卓望</p>
										<p class="scr5 xinzibg">17000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">徐**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">康邦科技</p>
										<p class="scr5 xinzibg">18000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">代**</p>
										<p class="scr7">大数据工程师</p>
										<p class="scr7">土木工程</p>
										<p class="scr6">万达</p>
										<p class="scr5 xinzibg">18800</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">付**</p>
										<p class="scr7">大数据分析</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">卓望</p>
										<p class="scr5 xinzibg">23000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">宋**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">金证科技</p>
										<p class="scr5 xinzibg">15000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">张**</p>
										<p class="scr7">大数据开发</p>
										<p class="scr7">医学</p>
										<p class="scr6">睿民互联</p>
										<p class="scr5 xinzibg">19000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">李**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">土木建筑</p>
										<p class="scr6">东方国信</p>
										<p class="scr5 xinzibg">17000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">代**</p>
										<p class="scr7">大数据开发专员</p>
										<p class="scr7">信息科学</p>
										<p class="scr6">普元信息</p>
										<p class="scr5 xinzibg">18800</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">陈**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">零度智慧</p>
										<p class="scr5 xinzibg">18000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">宋**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">柯莱特</p>
										<p class="scr5 xinzibg">15000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">张**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">土木工程</p>
										<p class="scr6">金证科技</p>
										<p class="scr5 xinzibg">19000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">李**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">卓越</p>
										<p class="scr5 xinzibg">17000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">李**</p>
										<p class="scr7">PHP全栈工程师</p>
										<p class="scr7">生物</p>
										<p class="scr6">万达</p>
										<p class="scr5 xinzibg">15000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">王**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">途牛网</p>
										<p class="scr5 xinzibg">15000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">朱**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">土木建筑</p>
										<p class="scr6">中奥通宇</p>
										<p class="scr5 xinzibg">16000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">赵**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">生物</p>
										<p class="scr6">搜房网</p>
										<p class="scr5 xinzibg">17000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">董**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">睿民互联</p>
										<p class="scr5 xinzibg">15000</p>
									</li>
									<li style="height: 32px;">
										<p class="scr4">乔**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">亚信</p>
										<p class="scr5 xinzibg">17000</p>
									</li>
									<li class="clone" style="height: 32px;">
										<p class="scr4">魏**</p>
										<p class="scr7">大数据工程师</p>
										<p class="scr7">信息工程</p>
										<p class="scr6">新浪</p>
										<p class="scr5 xinzibg">25000</p>
									</li>
									<li class="clone" style="height: 32px;">
										<p class="scr4">石**</p>
										<p class="scr7">全栈工程师</p>
										<p class="scr7">护理专业</p>
										<p class="scr6">白果实业</p>
										<p class="scr5 xinzibg">15000</p>
									</li>
									<li class="clone" style="height: 32px;">
										<p class="scr4">王**月</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">土木工程</p>
										<p class="scr6">金证科技</p>
										<p class="scr5 xinzibg">20000</p>
									</li>
									<li class="clone" style="height: 32px;">
										<p class="scr4">秦**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">建筑专业</p>
										<p class="scr6">联信天下</p>
										<p class="scr5 xinzibg">18000</p>
									</li>
									<li class="clone" style="height: 32px;">
										<p class="scr4">苏**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">秘书专业</p>
										<p class="scr6">爱卡汽车</p>
										<p class="scr5 xinzibg">16000</p>
									</li>
									<li class="clone" style="height: 32px;">
										<p class="scr4">李**</p>
										<p class="scr7">大数据分析师</p>
										<p class="scr7">信息科学</p>
										<p class="scr6">中奥通宇</p>
										<p class="scr5 xinzibg">15000</p>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<p style="color: #fff;font-size: .8em;text-align: center;padding: 0 5% 5%;">*为保障学员隐私，部分信息隐藏，相关数据来源于公司内部统计</p>
			<a href="https://tb.53kf.com/code/client/10169396/1" class="btn xz_btn wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">查看全部就业薪资</a>
			<h2>Java工程师岗位薪酬发展图</h2>
			<img data-cfsrc="./templates/mobile/images/box3_img2.jpg" src="./templates/mobile/images/box3_img2.jpg">
			<a href="https://tb.53kf.com/code/client/10169396/1" class="btn btn2 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">工作方面困惑咨询</a>
			<h2>可以触摸到未来的编程选择</h2>
			<img data-cfsrc="./templates/mobile/images/box3_img3.jpg" src="./templates/mobile/images/box3_img3.jpg">
			<a href="https://tb.53kf.com/code/client/10169396/1" class="btn wl_btn wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">咨询了解更多详情</a>
		</div>
	</div>

	<div class="box4">
		<div class="box_hd ">
			<div class="left wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
				<span class="span1"></span>
				<span class="span2"></span>
			</div>
			<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<p>适合你的Java免费学习福利</p>
			</div>
		</div>
		<div class="main">

			<div class="btm">
				<h2>免费基础视频&nbsp;&nbsp;&nbsp;超多人的选择</h2>
				<ul>
					<li>
						<span class="span1">01</span>
						<span class="span2">适合初学者的Java基础视频</span>
						<span class="span3">已有72174人下载</span>
					</li>
					<li>
						<span class="span1">02</span>
						<span class="span2">JavaWeb初学者入门教程</span>
						<span class="span3">已有34683人下载</span>
					</li>
					<li>
						<span class="span1">03</span>
						<span class="span2">27天Java入门教程</span>
						<span class="span3">已有35861人下载</span>
					</li>
					<li>
						<span class="span1">04</span>
						<span class="span2">JavaWeb基础简易版教程</span>
						<span class="span3">已有21060人下载</span>
					</li>
					<li>
						<span class="span1">05</span>
						<span class="span2">Spring从入门到精通基础教程</span>
						<span class="span3">已有28795人下载</span>
					</li>
				</ul>
				<a href="https://tb.53kf.com/code/client/10169396/1" target="_blank" class="btn wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">免费索取资源</a>
			</div>
		</div>
	</div>

	<div class="box5">
		<div class="box_hd ">
			<div class="left wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
				<span class="span1"></span>
				<span class="span2"></span>
			</div>
			<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<p>创建解决方案式教学</p>
			</div>
		</div>
		<div class="top">
			<h3>什么是解决方案式教学</h3>
			<ul>
				<li>
					<img data-cfsrc="./templates/mobile/images/box5-img1.jpg" alt="" src="./templates/mobile/images/box5-img1.jpg">
					<p>假设你是一个装修新手，领导安排你一个装修任务，你是否无从下手？但如果这时有人给你提供完整装修方案：例如欧式、简约、地中海风格装修方案。那相信你会高效快速的完成任务。</p>
				</li>
				<li class="li2">
					<img data-cfsrc="./templates/mobile/images/box5-img2.jpg" alt="" src="./templates/mobile/images/box5-img2.jpg">
					<p>与提供装修方案类似，我们的讲师将多年解决企业问题的经验，输出为行业解决方案，学员可学习到解决真实业务场景对应的<span>整套技术方案</span>，工作后可以应用这些方案解决企业问题，<span>比较有利于融入团队</span>。</p>
				</li>
			</ul>
		</div>
		<div class="btm">
			<h3>2018课程解决方案再升级</h3>
			<div class="con">
				<div class="fl">
					<img data-cfsrc="./templates/mobile/images/box7_icon1.jpg" src="./templates/mobile/images/box7_icon1.jpg">
				</div>
				<div class="fr">
					<p>权限解决方案（Shiro 、SpringSecurity）<br>报表解决方案<br>GIS解决方案（百度地图）<br>分布式开发解决方案（Dubbox）<br>分布式文件存储解决方案（FastDFS）<br>缓存解决方案（Redis）<br>搜索解决方案（Solr）<br>网页静态化解决方案（freemarker）<br>消息中间件解决方案（activeMQ）<br>短信解决方案（阿里大于）<br>单点登录解决方案（CAS）<br>购物车解决方案<br>跨域解决方案（CORS）<br>分布式ID生成解决方案（推特的snowflake）<br>秒杀解决方案<br>开发与生成环境切换解决方案（Maven Profile）<br>集群部署解决方案<br><span class="span2">(Zookeeper SolrCloud Redis集群 )</span>负载均衡解决方案（Nginx）<br>海量数据存储解决方案（MyCat分片）<br>容器化部署解决方案（Docker）</p>
				</div>
			</div>
			<div class="con con2">
				<div class="fl">
					<img data-cfsrc="./templates/mobile/images/box7_icon2.jpg" src="./templates/mobile/images/box7_icon2.jpg">
				</div>
				<div class="fr">
					<p>SPA工程构建解决方案<br><span class="span2">（Vue.js +ElementUI + Node.js +Npm+ </span><span class="span2">webpack）</span> 服务端渲染(SSR)解决方案（NUXT）<br>前后端分离API模拟解决方案（Mock.js）<br>微服务持续集成解决方案（Jenkins）<br>容器化部署管理解决方案（Rancher）<br>分布式日志解决方案（ELK）<br>微服务实时监控解决方案（Grafana）<br>Spring全家桶解决方案 （SpringBoot+SpringCloud+ <br><span class="span2">Spring+SpringMVC+Spring Data）</span>微服务认证解决方案（JWT）<br>微服务网关解决方案（Zuul）<br>微服务负载均衡解决方案（Ribbon）<br>微服务熔断解决方案（Hystrix）<br>微服务集中配置解决方案（SpringCloudConfig）<br>分布式搜索服务解决方案（Elasticsearch）<br>大数据存储解决方案（mongoDB）<br>消息中间件解决方案（RabbitMQ）<br>第三方登陆解决方案（腾讯第三方登陆）<br>云存储解决方案（OSS）<br>爬虫解决方案（webmagic）<br>人工智能解决方案（spark mllib als 、DL4J）
					</p>
				</div>
			</div>
			<a href="#" class="btn wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">查看全部课程大纲</a>
		</div>
	</div>

	<div class="box6">
		<div class="box_hd ">
			<div class="left wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
				<span class="span1"></span>
				<span class="span2"></span>
			</div>
			<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<p>带你做时下热门的项目实训</p>
			</div>
		</div>
		<div class="box6-main">
			<div class="flexslider flextea">

				<div class="flex-viewport" style="overflow: hidden; position: relative;">
					<ul class="slides" style="width: 1600%; margin-left: -1280px;">
						<li class="li6 clone" style="width: 320px; float: left; display: block;">
							<div class="slide">
								<img class="img1" data-cfsrc="./templates/mobile/images/box7-jinrong.jpg" alt="" src="./templates/mobile/images/box7-jinrong.jpg">
								<div class="btm">
									<img data-cfsrc="./templates/mobile/images/box7-img6.jpg" src="./templates/mobile/images/box7-img6.jpg">
									<div class="word">
										<p class="p1">易起贷</p>
										<p class="p2">国内p2p金融服务网站</p>
										<p class="p2">Struts2+Spring+SpringData+JPA+ Hibernate开源架构，Maven分模块构建</p>
										<p class="p2">资产管理、消息处理、交易、投资管理、产品管理、会员中心分布式系统架构</p>
										<p class="p2">AngularJS界面开发，Restful WebService服务调用，Nginx+Tomcat集群部署、三方短信平台、邮件发送、Redis数据缓存、ActiveMQ异步通信</p>
									</div>
								</div>
							</div>
						</li>
						<li class="" style="width: 320px; float: left; display: block;">
							<div class="slide">
								<img class="img1" data-cfsrc="./templates/mobile/images/box7-dianshang.jpg" alt="" src="./templates/mobile/images/box7-dianshang.jpg">
								<div class="btm">
									<img data-cfsrc="./templates/mobile/images/box7-img1.jpg" src="./templates/mobile/images/box7-img1.jpg">
									<div class="word">
										<p class="p1">品优购</p>
										<p class="p2">大型B2B2C电子商务综合平台</p>
										<p class="p2">SpringMVC+Spring+MyBatis+ Dubbox主流分布式互联网架构</p>
										<p class="p2">商家平台、用户中心、购物车、订单、支付、评论、搜索、秒杀多系统架构</p>
										<p class="p2">MyCat中间件、Redis集群缓存、ActiveMQ异步通信、SolrCloud 分布式搜索集群、Freemarker页面静态化、Nginx+Keepivd+Tomcat 、高可用、高可靠主备集群方案</p>
									</div>
								</div>
							</div>
						</li>
						<li class="" style="width: 320px; float: left; display: block;">
							<div class="slide">
								<img class="img1" data-cfsrc="./templates/mobile/images/box7-wuliu.jpg" alt="" src="./templates/mobile/images/box7-wuliu.jpg">
								<div class="btm">
									<img data-cfsrc="./templates/mobile/images/box7-img2.jpg" src="./templates/mobile/images/box7-img2.jpg">
									<div class="word">
										<p class="p1">速运快递</p>
										<p class="p2">国内大型物流公司综合业务系统</p>
										<p class="p2">Struts2+Spring+SpringData+JPA架构，全程Maven构建</p>
										<p class="p2">速运后台、速运前台、CRM客户管理、短信平台、邮件平台等多系统架构</p>
										<p class="p2">JAX-RS方式的WebService通信、界面采用AngularJS、Shiro权限控制、Elasticsearch分布式全文检索、JasperReport报表生成，百度地图实时监控</p>
									</div>
								</div>
							</div>
						</li>
						<li class="" style="width: 320px; float: left; display: block;">
							<div class="slide">
								<img class="img1" data-cfsrc="./templates/mobile/images/box7-lvyou.jpg" alt="" src="./templates/mobile/images/box7-lvyou.jpg">
								<div class="btm">
									<img data-cfsrc="./templates/mobile/images/box7-img3.jpg" src="./templates/mobile/images/box7-img3.jpg">
									<div class="word">
										<p class="p1">闲云旅游</p>
										<p class="p2">大型旅游行程智能定制平台</p>
										<p class="p2">SpringMVC+SpringBoot+Spring+ SpringDataJPA系统架构，Git版本控制</p>
										<p class="p2">用户系统、商品系统、订单系统、支付系统、推荐系统、报表系统等多系统架构</p>
										<p class="p2">阿里云通信短信平台、百度地图、SpringSecurity Oauth2权限管理，微信、QQ三方登陆、Echarts报表、二维码支付、推荐系统、Docker容器化部署、SpringBatch数据处理</p>
									</div>
								</div>
							</div>
						</li>
						<li class="flex-active-slide" style="width: 320px; float: left; display: block;">
							<div class="slide">
								<img class="img1" data-cfsrc="./templates/mobile/images/box7-shejiao.jpg" alt="" src="./templates/mobile/images/box7-shejiao.jpg">
								<div class="btm">
									<img data-cfsrc="./templates/mobile/images/box7-img4.jpg" src="./templates/mobile/images/box7-img4.jpg">
									<div class="word">
										<p class="p1">十次方</p>
										<p class="p2">大型综合性社交平台</p>
										<p class="p2">SpringMVC+SpringBoot+Spring+ Mybatis系统架构，Maven多模块架构</p>
										<p class="p2">头条、问答、招聘、活动、交友、吐槽、用户中心多系统架构</p>
										<p class="p2">VUE界面开发，SpringCloud微服务架构，Quartz任务调度、ActiveMQ异步通信、SpringSecurity权限控制、CAS单点登录、自定义爬虫数据抓取、百度地图交友互动</p>
									</div>
								</div>
							</div>
						</li>
						<li style="width: 320px; float: left; display: block;">
							<div class="slide">
								<img class="img1" data-cfsrc="./templates/mobile/images/box7-jiaoyu.jpg" alt="" src="./templates/mobile/images/box7-jiaoyu.jpg">
								<div class="btm">
									<img data-cfsrc="./templates/mobile/images/box7-img5.jpg" src="./templates/mobile/images/box7-img5.jpg">
									<div class="word">
										<p class="p1">学成在线</p>
										<p class="p2">垂直的互联网IT技能学习平台</p>
										<p class="p2">SpringMVC+SpringBoot+Spring+ SpringData微服务系统架构</p>
										<p class="p2">流媒体系统、在线编程、问答、考试、云笔记、会员、订单多系统架构</p>
										<p class="p2">VUE界面开发、Docker容器化系统部署、系统通信采用Restful接口调用、百度Echarts报表展示、SpringSecurity权限控制、ElasticJob分布式任务调度</p>
									</div>
								</div>
							</div>
						</li>
						<li class="li6" style="width: 320px; float: left; display: block;">
							<div class="slide">
								<img class="img1" data-cfsrc="./templates/mobile/images/box7-jinrong.jpg" alt="" src="./templates/mobile/images/box7-jinrong.jpg">
								<div class="btm">
									<img data-cfsrc="./templates/mobile/images/box7-img6.jpg" src="./templates/mobile/images/box7-img6.jpg">
									<div class="word">
										<p class="p1">易起贷</p>
										<p class="p2">国内p2p金融服务网站</p>
										<p class="p2">Struts2+Spring+SpringData+JPA+ Hibernate开源架构，Maven分模块构建</p>
										<p class="p2">资产管理、消息处理、交易、投资管理、产品管理、会员中心分布式系统架构</p>
										<p class="p2">AngularJS界面开发，Restful WebService服务调用，Nginx+Tomcat集群部署、三方短信平台、邮件发送、Redis数据缓存、ActiveMQ异步通信</p>
									</div>
								</div>
							</div>
						</li>
						<li class="clone" style="width: 320px; float: left; display: block;">
							<div class="slide">
								<img class="img1" data-cfsrc="./templates/mobile/images/box7-dianshang.jpg" alt="" src="./templates/mobile/images/box7-dianshang.jpg">
								<div class="btm">
									<img data-cfsrc="./templates/mobile/images/box7-img1.jpg" src="./templates/mobile/images/box7-img1.jpg">
									<div class="word">
										<p class="p1">品优购</p>
										<p class="p2">大型B2B2C电子商务综合平台</p>
										<p class="p2">SpringMVC+Spring+MyBatis+ Dubbox主流分布式互联网架构</p>
										<p class="p2">商家平台、用户中心、购物车、订单、支付、评论、搜索、秒杀多系统架构</p>
										<p class="p2">MyCat中间件、Redis集群缓存、ActiveMQ异步通信、SolrCloud 分布式搜索集群、Freemarker页面静态化、Nginx+Keepivd+Tomcat 、高可用、高可靠主备集群方案</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<ol class="flex-control-nav flex-control-paging">
					<li><a class="">电商</a></li>
					<li><a class="">物流</a></li>
					<li><a class="">旅游</a></li>
					<li><a class="flex-active">社交</a></li>
					<li><a>教育</a></li>
					<li><a>金融</a></li>
				</ol>
				<ul class="flex-direction-nav">
					<li><a class="flex-prev" href="#">Previous</a></li>
					<li><a class="flex-next" href="#">Next</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="box8">
		<div class="box_hd ">
			<div class="left wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
				<span class="span1"></span>
				<span class="span2"></span>
			</div>
			<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<p>给你不断加入的新/热技术点</p>
			</div>
		</div>
		<img data-cfsrc="./templates/mobile/images/box8_img1.jpg" src="./templates/mobile/images/box8_img1.jpg">
		<img data-cfsrc="./templates/mobile/images/box8_img2.jpg" src="./templates/mobile/images/box8_img2.jpg">
		<img data-cfsrc="./templates/mobile/images/box8_img3.jpg" src="./templates/mobile/images/box8_img3.jpg">
		<img data-cfsrc="./templates/mobile/images/box8_img4.jpg" src="./templates/mobile/images/box8_img4.jpg">
		<a href="#" class="btn wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">查看全部课程大纲</a>
	</div>

	<div class="box9">
		<div class="box_hd ">
			<div class="left wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
				<span class="span1"></span>
				<span class="span2"></span>
			</div>
			<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<p>为你设计软硬双辅助教学体系</p>
			</div>
		</div>
		<img data-cfsrc="./templates/mobile/images/box9_img1.jpg" src="./templates/mobile/images/box9_img1.jpg">
		<a href="https://tb.53kf.com/code/client/10169396/1" class="btn wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"> 咨询了解更多</a>
	</div>

	<div class="box10">
		<div class="box_hd ">
			<div class="left wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
				<span class="span1"></span>
				<span class="span2"></span>
			</div>
			<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<p>你听说的那些技术大牛讲师</p>
			</div>
		</div>
		<div class="box10-main">
			<div class="flexslider flextea">
				<div class="flex-viewport" style="overflow: hidden; position: relative;">
					<ul class="slides" style="width: 800%; margin-left: -320px;">
						@foreach($tea_list as $tea)
						<li class="slide clone" style="width: 100%; float: left; display: block;">
							<ol>
								@foreach($tea as $item)
									<li>
										<div class="bg">
											<div class="border"></div>
											<img data-cfsrc="{{$item->teacher_portrait_src}}" alt="刘新" data-cfstyle="height: 8em;width: 60%;" style="height: 8em;width: 60%;" src="{{$item->teacher_portrait_src}}">
										</div>
										<p>{{$item->name}}</p>
									</li>
								@endforeach
							</ol>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		<a href="https://tb.53kf.com/code/client/10169396/1" class="btn wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">查看更多师资力量</a>
	</div>

	{{--tabBar--}}
@include('api.layouts.tabBar')


	<script src="./templates/mobile/js/jquery.min.js"></script>
	<script src="./templates/mobile/js/jquery.SuperSlide.2.1.1.js"></script>
	<script src="./templates/mobile/js/jquery.flexslider-min.js"></script>
	<script src="./templates/mobile/js/wow.min.js"></script>
	<script type="text/javascript" src="./templates/mobile/plugin/bootstrap-3.3.7/js/bootstrap.js"></script>
	<script type="text/javascript" src="./templates/mobile/plugin/swiper/swiper-4.3.3.min.js"></script>
	<script type="text/javascript" src="./templates/mobile/js/main.js"></script>
	<script>
		if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
			new WOW().init();
		};
		//	       ban轮播
		jQuery(".ban  .slideBox").slide({
			mainCell: ".bd ul",
			effect: "leftLoop",
			autoPlay: true,
			interTime: 4000,
			delayTime: 1000
		});
		//	         薪资滚动
		jQuery(".scrollDiv").slide({
			mainCell: ".bd ol",
			autoPlay: true,
			effect: "topMarquee",
			vis: 6,
			interTime: 50,
			trigger: "click"
		});
		$(function() {
			//6大项目
			$('.box6 .flexslider').flexslider({
				animation: 'slide',
				controlNav: true,
				directionNav: false,
				animationLoop: true,
				slideshow: true,
				useCSS: false,
				slideshowSpeed: 3000,
				directionNav: true,
			})
			//	          	追加ol里面的文字
			$(".box6 .flex-control-nav li:eq(0)").find("a").html("电商");
			$(".box6 .flex-control-nav li:eq(1)").find("a").html("物流");
			$(".box6 .flex-control-nav li:eq(2)").find("a").html("旅游");
			$(".box6 .flex-control-nav li:eq(3)").find("a").html("社交");
			$(".box6 .flex-control-nav li:eq(4)").find("a").html("教育");
			$(".box6 .flex-control-nav li:eq(5)").find("a").html("金融");
			//6大项目
			$('.box10 .flexslider').flexslider({
				animation: 'slide',
				controlNav: true,
				directionNav: false,
				animationLoop: true,
				slideshow: true,
				useCSS: false,
				slideshowSpeed: 3000,
			})
		})
	</script>

</body>

</html>