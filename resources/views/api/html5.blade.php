<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" name="viewport" id="viewport">
	<title>HTML5培训 - 鸿博教育IT教育-匠心打造,品质铸就</title>
	<meta name="keywords" content="HTML5,HTML5培训,Html5培训班,">
	<meta name="description" content="0基础，不用愁，形象生动的授课老师，通俗易懂的语言，可以秒懂的案例，将你带入到这个高端，大气，上档次的互联网圈子中，选择鸿博教育H5培训，时间短，保就业，拿高薪。">
	<link rel="stylesheet" href="./templates/mobile/css/base.css">
	<link rel="stylesheet" href="./templates/mobile/css/h5style.css">
	<link rel="stylesheet" href="./templates/mobile/css/animate.min.css">
	<link rel="stylesheet" href="./templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="./templates/mobile/plugin/swiper/swiper-4.3.3.min.css">
	<script src="./templates/mobile/js/jquery.min.js"></script>
	<link rel="stylesheet" href="./templates/mobile/css/style1.css">
</head>

<body>

	 
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
	<div class="ban box">
		<img class="img1 wow slideInLeft animated" data-cfsrc="./templates/mobile/images/ban-img1.jpg" src="./templates/mobile/images/ban-img1.jpg" style="visibility: visible; animation-name: slideInLeft;">
		<img class="wow zoomIn animated" data-cfsrc="./templates/mobile/images/ban-img2.jpg" src="./templates/mobile/images/ban-img2.jpg" style="visibility: visible; animation-name: zoomIn;">
		<div class="main">
			<div class="ban_main wow slideInRight animated" style="visibility: visible; animation-name: slideInRight;">
				<div class="flexslider flextea">

					<div class="flex-viewport" style="overflow: hidden; position: relative;">
						<ul class="slides" style="width: 1400%; margin-left: -336.839px;">
							<li class="slide clone" style="width: 320px; float: left; display: block;">
								<img data-cfsrc="./templates/mobile/images/ban-shanghai.jpg" src="./templates/mobile/images/ban-shanghai.jpg">
							</li>
							<li class="slide" style="width: 320px; float: left; display: block;">
								<img data-cfsrc="./templates/mobile/images/ban-beijing.jpg" src="./templates/mobile/images/ban-beijing.jpg">
							</li>
							<li class="slide flex-active-slide" style="width: 320px; float: left; display: block;">
								<img data-cfsrc="./templates/mobile/images/ban-guangzhou.jpg" src="./templates/mobile/images/ban-guangzhou.jpg">
							</li>
							<li class="slide" style="width: 320px; float: left; display: block;">
								<img data-cfsrc="./templates/mobile/images/ban-hangzhou.jpg" src="./templates/mobile/images/ban-hangzhou.jpg">
							</li>
							<li class="slide" style="width: 320px; float: left; display: block;">
								<img data-cfsrc="./templates/mobile/images/ban-shenzhen.jpg" src="./templates/mobile/images/ban-shenzhen.jpg">
							</li>
							<li class="slide" style="width: 320px; float: left; display: block;">
								<img data-cfsrc="./templates/mobile/images/ban-shanghai.jpg" src="./templates/mobile/images/ban-shanghai.jpg">
							</li>
							<li class="slide clone" style="width: 320px; float: left; display: block;">
								<img data-cfsrc="./templates/mobile/images/ban-beijing.jpg" src="./templates/mobile/images/ban-beijing.jpg">
							</li>
						</ul>
					</div>
					<ol class="flex-control-nav flex-control-paging">
						<li><a class="">1</a></li>
						<li><a class="flex-active">2</a></li>
						<li><a>3</a></li>
						<li><a>4</a></li>
						<li><a>5</a></li>
					</ol>
				</div>
			</div>
		</div>
		<p class="p1 wow slideInRight animated" style="visibility: visible; animation-name: slideInRight;">*数据来源于职友集</p>
	</div>

	<div class="title_hd wow fadeInLeft box animated" style="visibility: visible; animation-name: fadeInLeft;">
		<p>对于是否要学习全栈工程师<br>你可能有以下<span>六大疑惑</span></p>
		<img data-cfsrc="./templates/mobile/images/box1-img1.jpg" src="./templates/mobile/images/box1-img1.jpg">
	</div>

	<div class="box box1">
		<div class="box_In">
			<div class="box_hd wow slideInRight animated" style="visibility: visible; animation-name: slideInRight;">
				<div class="top ">
					<div class="left">1问</div>
					<div class="right">什么是全栈工程师？</div>
				</div>
				<div class="btm">
					<div class="left">答</div>
					<div class="right">掌握多种技术的编程人才</div>
				</div>
			</div>
			<div class="main">
				<div class="left">
					<img class="wow slideInUp" data-cfsrc="./templates/mobile/images/box1-img2.jpg" src="./templates/mobile/images/box1-img2.jpg" style="visibility: hidden; animation-name: none;">
				</div>
				<div class="right wow slideInRight" style="visibility: hidden; animation-name: none;">
					<p>又名全端工程师，是指同时具备前端与后台能力的开发人员，随着时代的进步，互联网企业要求全栈工程师同时要掌握移动端开发的能力，所以这套H5+全栈工程师课程应运而生。</p>
					<ul>
						<li class="left">
							<a href="#" id="">H5和HTML5<br>是一回事吗？</a>
						</li>
						<li class="right">
							<a href="#" id="">技术小白<br>可以学吗？</a>
						</li>
						<li class="left">
							<a href="#" id="">全栈工程师<br>主要做什么？</a>
						</li>
						<li class="right">
							<a href="#" id="">企业需求<br>多吗？</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="box box2">
		<div class="box_In">
			<div class="box_hd wow slideInLeft" style="visibility: hidden; animation-name: none;">
				<div class="top">
					<div class="left">2问</div>
					<div class="right">为什么全栈工程师会如此热门？</div>
				</div>
				<div class="btm">
					<div class="left">答</div>
					<div class="right">未来属于全能型人才</div>
				</div>
			</div>
			<div class="main">
				<div class="top">
					<img class="wow zoomIn" data-cfsrc="./templates/mobile/images/box2-img1.jpg" src="./templates/mobile/images/box2-img1.jpg" style="visibility: hidden; animation-name: none;">
					<p class="p1 wow fadeInDown" style="visibility: hidden; animation-name: none;">全栈工程师</p>
					<p class="p2 wow fadeInRight" style="visibility: hidden; animation-name: none;">前端开发工程师</p>
					<p class="p3 wow fadeInLeft" style="visibility: hidden; animation-name: none;">后端开发工程师</p>
				</div>
				<div class="center ">
					<p class="wow swing" style="visibility: hidden; animation-name: none;">全栈工程师不仅可以从事全栈开发工作，还可以胜任前端开发和后端开发的相关工作。如此一岗多能的员工，各大公司均对其抛出橄榄枝。</p>
				</div>
				<div class="btm">
					<h2>全栈工程师首期班薪资一览</h2>
					<div class="wow slideInUp" style="visibility: hidden; animation-name: none;">
						<ul>
							<li class="li1">姓名</li>
							<li class="li1">学历</li>
							<li class="li2">就职公司</li>
							<li class="li1">薪资</li>
						</ul>
						<div id="scrollDiv" class="scrollDiv">
							<div class="bd">
								<div class="tempWrap" style="overflow:hidden; position:relative; height:486px">
									<ol style="height: 1944px; position: relative; padding: 0px; margin: 0px; top: -119px;">
										<li class="clone" style="height: 54px;">
											<p class="li1">乔**</p>
											<p class="li1">信息工程</p>
											<p class="li2">亚信</p>
											<p class="li1">17000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">魏**</p>
											<p class="li1">信息工程</p>
											<p class="li2">新浪</p>
											<p class="li1">25000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">石**</p>
											<p class="li1">护理专业</p>
											<p class="li2">白果实业</p>
											<p class="li1">15000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">王**月</p>
											<p class="li1">土木工程</p>
											<p class="li2">金证科技</p>
											<p class="li1">20000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">秦**</p>
											<p class="li1">建筑专业</p>
											<p class="li2">联信天下</p>
											<p class="li1">18000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">苏**</p>
											<p class="li1">秘书专业</p>
											<p class="li2">爱卡汽车</p>
											<p class="li1">16000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">李**</p>
											<p class="li1">信息科学</p>
											<p class="li2">中奥通宇</p>
											<p class="li1">15000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">张**</p>
											<p class="li1">信息工程</p>
											<p class="li2">爱卡汽车</p>
											<p class="li1">26000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">马**</p>
											<p class="li1">大数据分析师</p>
											<p class="li2">远航付网络</p>
											<p class="li1">17000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">钱**</p>
											<p class="li1">计算机科学</p>
											<p class="li2">卓望</p>
											<p class="li1">17000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">徐**</p>
											<p class="li1">信息工程</p>
											<p class="li2">康邦科技</p>
											<p class="li1">18000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">代**</p>
											<p class="li1">土木工程</p>
											<p class="li2">万达</p>
											<p class="li1">18800</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">付**</p>
											<p class="li1">信息工程</p>
											<p class="li2">卓望</p>
											<p class="li1">23000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">宋**</p>
											<p class="li1">信息工程</p>
											<p class="li2">金证科技</p>
											<p class="li1">15000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">张**</p>
											<p class="li1">医学</p>
											<p class="li2">睿民互联</p>
											<p class="li1">19000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">李**</p>
											<p class="li1">土木建筑</p>
											<p class="li2">东方国信</p>
											<p class="li1">17000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">代**</p>
											<p class="li1">信息科学</p>
											<p class="li2">普元信息</p>
											<p class="li1">18800</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">陈**</p>
											<p class="li1">信息工程</p>
											<p class="li2">零度智慧</p>
											<p class="li1">18000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">宋**</p>
											<p class="li1">信息工程</p>
											<p class="li2">柯莱特</p>
											<p class="li1">15000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">张**</p>
											<p class="li1">土木工程</p>
											<p class="li2">金证科技</p>
											<p class="li1">19000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">李**</p>
											<p class="li1">信息工程</p>
											<p class="li2">卓越</p>
											<p class="li1">17000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">李**</p>
											<p class="li1">生物</p>
											<p class="li2">万达</p>
											<p class="li1">15000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">王**</p>
											<p class="li1">信息工程</p>
											<p class="li2">途牛网</p>
											<p class="li1">15000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">朱**</p>
											<p class="li1">土木建筑</p>
											<p class="li2">中奥通宇</p>
											<p class="li1">16000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">赵**</p>
											<p class="li1">生物</p>
											<p class="li2">搜房网</p>
											<p class="li1">17000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">董**</p>
											<p class="li1">信息工程</p>
											<p class="li2">睿民互联</p>
											<p class="li1">15000</p>
										</li>
										<li style="height: 54px;">
											<p class="li1">乔**</p>
											<p class="li1">信息工程</p>
											<p class="li2">亚信</p>
											<p class="li1">17000</p>
										</li>
										<li class="clone" style="height: 54px;">
											<p class="li1">魏**</p>
											<p class="li1">信息工程</p>
											<p class="li2">新浪</p>
											<p class="li1">25000</p>
										</li>
										<li class="clone" style="height: 54px;">
											<p class="li1">石**</p>
											<p class="li1">护理专业</p>
											<p class="li2">白果实业</p>
											<p class="li1">15000</p>
										</li>
										<li class="clone" style="height: 54px;">
											<p class="li1">王**月</p>
											<p class="li1">土木工程</p>
											<p class="li2">金证科技</p>
											<p class="li1">20000</p>
										</li>
										<li class="clone" style="height: 54px;">
											<p class="li1">秦**</p>
											<p class="li1">建筑专业</p>
											<p class="li2">联信天下</p>
											<p class="li1">18000</p>
										</li>
										<li class="clone" style="height: 54px;">
											<p class="li1">苏**</p>
											<p class="li1">秘书专业</p>
											<p class="li2">爱卡汽车</p>
											<p class="li1">16000</p>
										</li>
										<li class="clone" style="height: 54px;">
											<p class="li1">李**</p>
											<p class="li1">信息科学</p>
											<p class="li2">中奥通宇</p>
											<p class="li1">15000</p>
										</li>
										<li class="clone" style="height: 54px;">
											<p class="li1">张**</p>
											<p class="li1">信息工程</p>
											<p class="li2">爱卡汽车</p>
											<p class="li1">26000</p>
										</li>
										<li class="clone" style="height: 54px;">
											<p class="li1">马**</p>
											<p class="li1">大数据分析师</p>
											<p class="li2">远航付网络</p>
											<p class="li1">17000</p>
										</li>
										<li class="clone" style="height: 54px;">
											<p class="li1">钱**</p>
											<p class="li1">计算机科学</p>
											<p class="li2">卓望</p>
											<p class="li1">17000</p>
										</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a href="https://tb.53kf.com/code/client/10169396/1" class="a_btn wow slideInUp" id="" style="visibility: hidden; animation-name: none;">点击咨询</a>
		</div>
	</div>

	<div class="box box3">
		<div class="box_In">
			<div class="box_hd  wow slideInLeft" style="visibility: hidden; animation-name: none;">
				<div class="top ">
					<div class="left">3问</div>
					<div class="right">他们为什么会获得这样的薪酬？</div>
				</div>
				<div class="btm">
					<div class="left">答</div>
					<div class="right">十大实战项目把控<br>匹配市场开发需求</div>
				</div>
			</div>
			<div class="main">
				<div class="box3_main wow fadeInRight" style="visibility: hidden; animation-name: none;">
					<div class="flexslider flextea">

						<div class="flex-viewport" style="overflow: hidden; position: relative;">
							<ul class="slides" style="width: 1400%; margin-left: -473.147px;">
								<li class="slide clone" style="width: 241px; float: left; display: block;">
									<div class="top">
										<img data-cfsrc="./templates/mobile/images/box3_img13.jpg" src="./templates/mobile/images/box3_img13.jpg">
									</div>
									<div class="btm">
										<div class="left">
											<img data-cfsrc="./templates/mobile/images/box3_img14.jpg" src="./templates/mobile/images/box3_img14.jpg">
										</div>
										<div class="right">
											<img data-cfsrc="./templates/mobile/images/box3_img15.jpg" src="./templates/mobile/images/box3_img15.jpg">
										</div>
									</div>
								</li>
								<li class="slide" style="width: 241px; float: left; display: block;">
									<div class="top">
										<img data-cfsrc="./templates/mobile/images/box3_img1.jpg" src="./templates/mobile/images/box3_img1.jpg">
									</div>
									<div class="btm">
										<div class="left">
											<img data-cfsrc="./templates/mobile/images/box3_img2.jpg" src="./templates/mobile/images/box3_img2.jpg">
										</div>
										<div class="right">
											<img data-cfsrc="./templates/mobile/images/box3_img3.jpg" src="./templates/mobile/images/box3_img3.jpg">
										</div>
									</div>
								</li>
								<li class="slide flex-active-slide" style="width: 241px; float: left; display: block;">
									<div class="top">
										<img data-cfsrc="./templates/mobile/images/box3_img4.jpg" src="./templates/mobile/images/box3_img4.jpg">
									</div>
									<div class="btm">
										<div class="left">
											<img data-cfsrc="./templates/mobile/images/box3_img5.jpg" src="./templates/mobile/images/box3_img5.jpg">
										</div>
										<div class="right">
											<img data-cfsrc="./templates/mobile/images/box3_img6.jpg" src="./templates/mobile/images/box3_img6.jpg">
										</div>
									</div>
								</li>
								<li class="slide" style="width: 241px; float: left; display: block;">
									<div class="top">
										<img data-cfsrc="./templates/mobile/images/box3_img7.jpg" src="./templates/mobile/images/box3_img7.jpg">
									</div>
									<div class="btm">
										<div class="left">
											<img data-cfsrc="./templates/mobile/images/box3_img8.jpg" src="./templates/mobile/images/box3_img8.jpg">
										</div>
										<div class="right">
											<img data-cfsrc="./templates/mobile/images/box3_img9.jpg" src="./templates/mobile/images/box3_img9.jpg">
										</div>
									</div>
								</li>
								<li class="slide" style="width: 241px; float: left; display: block;">
									<div class="top">
										<img data-cfsrc="./templates/mobile/images/box3_img10.jpg" src="./templates/mobile/images/box3_img10.jpg">
									</div>
									<div class="btm">
										<div class="left">
											<img data-cfsrc="./templates/mobile/images/box3_img11.jpg" src="./templates/mobile/images/box3_img11.jpg">
										</div>
										<div class="right">
											<img data-cfsrc="./templates/mobile/images/box3_img12.jpg" src="./templates/mobile/images/box3_img12.jpg">
										</div>
									</div>
								</li>
								<li class="slide" style="width: 241px; float: left; display: block;">
									<div class="top">
										<img data-cfsrc="./templates/mobile/images/box3_img13.jpg" src="./templates/mobile/images/box3_img13.jpg">
									</div>
									<div class="btm">
										<div class="left">
											<img data-cfsrc="./templates/mobile/images/box3_img14.jpg" src="./templates/mobile/images/box3_img14.jpg">
										</div>
										<div class="right">
											<img data-cfsrc="./templates/mobile/images/box3_img15.jpg" src="./templates/mobile/images/box3_img15.jpg">
										</div>
									</div>
								</li>
								<li class="slide clone" style="width: 241px; float: left; display: block;">
									<div class="top">
										<img data-cfsrc="./templates/mobile/images/box3_img1.jpg" src="./templates/mobile/images/box3_img1.jpg">
									</div>
									<div class="btm">
										<div class="left">
											<img data-cfsrc="./templates/mobile/images/box3_img2.jpg" src="./templates/mobile/images/box3_img2.jpg">
										</div>
										<div class="right">
											<img data-cfsrc="./templates/mobile/images/box3_img3.jpg" src="./templates/mobile/images/box3_img3.jpg">
										</div>
									</div>
								</li>
							</ul>
						</div>
						<ol class="flex-control-nav flex-control-paging">
							<li><a class="">1</a></li>
							<li><a class="flex-active">2</a></li>
							<li><a>3</a></li>
							<li><a>4</a></li>
							<li><a>5</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="box box4">
		<div class="box_In">
			<div class="box_hd wow zoomIn" style="visibility: hidden; animation-name: none;">
				<div class="top">
					<div class="left">4问</div>
					<div class="right">这套全栈工程师课程讲了些什么?</div>
				</div>
				<div class="btm">
					<div class="left">答</div>
					<div class="right">根据市场需求<br>打造科学化课程体系</div>
				</div>
			</div>
			<div class="main">
				<div class="left ">
					<div class="left1 wow slideInLeft" style="visibility: hidden; animation-name: none;">
						<h3>全栈基本功</h3>
						<p>HTML入门<br>CSS高级程序设计<br>京东商城项目实战</p>
					</div>
					<div class="left1 wow slideInLeft" style="visibility: hidden; animation-name: none;">
						<h3 class="h3_1">前端高级程序设计</h3>
						<p>JavaScript基础<br>Web API<br>JavaScript高级<br>jQuery与插件开发实战<br>精通Ajax<br>VueJS移动端项目开发</p>
					</div>
					<div class="left1 wow slideInLeft" style="visibility: hidden; animation-name: none;">
						<h3 class="h3_2">大型项目架构</h3>
						<p>SVN/Git版本控制<br>Linux操作系统<br>Nginx服务器集群<br>Memcache缓存设计<br>Redis<br>MongoDB<br>MySQL高级优化<br>Sphinx、Xunsearch<br>网站优化之主从复制、读写分离
							页面静态化<br>Laravel框架<br>基于Laravel+VueJS在线<br>视频直播平台</p>
					</div>
					<div class="left1 wow slideInLeft" style="visibility: hidden; animation-name: none;">
						<a href="#" id="" style="color: #000;">
							<h3 class="h3_3">获取全套课程大纲</h3>
						</a>
					</div>
				</div>
				<div class="right ">
					<div class="left1 wow slideInRight" style="visibility: hidden; animation-name: none;">
						<h3 class="h3_2 ">后端核心编程</h3>
						<p>WAMP搭建配置<br>PHP基础<br>MySQL数据库实战<br>核心编程（表单传值）<br>核心编程（MySQLi扩展）<br>核心编程（Http协议）<br>核心编程（文件编程）<br>核心编程（会话技术）<br>核心编程（GD图像处理）<br>核心编程（面向对象）<br>核心编程（PDO扩展）<br>Smarty模板引擎<br>
							MVC设计模式<br>博客系统开发</p>
					</div>
					<div class="left1 wow slideInRight" style="visibility: hidden; animation-name: none;">
						<h3 class="h3_1">移动端项目开发</h3>
						<p>HTML5+CSS3<br>Canvas绘图<br>移动Web开发<br>移动端商城系统实战</p>
					</div>
					<div class="left1 wow slideInRight" style="visibility: hidden; animation-name: none;">
						<h3>NodeJS全栈开发</h3>
						<p>前端模块化<br>NodeJS详解<br>Express框架<br>AngularJS实战开发<br>
							ReactJS实战开发</p>
					</div>
				</div>
			</div>
			<a href="https://tb.53kf.com/code/client/10169396/1" class="a_btn wow slideInUp" id="" style="visibility: hidden; animation-name: none;">了解课程详情</a>
		</div>
	</div>

	<div class="box box5">
		<div class="box_In">
			<div class="box_hd wow slideInLeft" style="visibility: hidden; animation-name: none;">
				<div class="top">
					<div class="left">5问</div>
					<div class="right">是什么样的讲师带我们披荆斩棘？</div>
				</div>
				<div class="btm">
					<div class="left">答</div>
					<div class="right">数位业内大牛讲师<br>多年项目经验亲身传授
					</div>
				</div>
			</div>
			<div class="main">
				<div class="box5_main wow fadeInRight" style="visibility: hidden; animation-name: none;">
					<div class="flexslider flextea">

						<div class="flex-viewport" style="overflow: hidden; position: relative;">
							<ul class="slides" style="width: 1200%; margin-left: -555.239px;">
								{{--<li class="slide clone" style="width: 283px; float: left; display: block;">
									<div class="left">
										<img data-cfsrc="./upload/img/201901021704136880.jpg" src="./upload/img/201901021704136880.jpg">
									</div>
									<div class="right">
										<p class="p1">袁伟</p>
										<p class="p3">讲师详情：十年行业经验，多年开发，参与多个大型金融和数据服务系统和产品开发。3年教学经验 ，深入理解JavaSE到JAVAEE主流框架、springboot、Linux、Nosql、Hadoop、RabbitMQ消息中间件等技术，对知识讲解耐心细致，让学员能够轻松、快乐的掌握和应用。人生格言：觉得自…</p>
									</div>
								</li>
								<li class="slide" style="width: 283px; float: left; display: block;">
									<div class="left">
										<img data-cfsrc="./upload/img/201802052008356999.jpg" src="./upload/img/201802052008356999.jpg">
									</div>
									<div class="right">
										<p class="p1">许彩辉</p>
										<p class="p3">十二年从军经历，教育行业从业12年，对教育的本质有着深刻的理解。创办鸿博教育以来，坚持“认真严谨、用心负责”的核心理念，本着“科学发展，教育为本”的态度，不断前行。</p>
									</div>
								</li>
								<li class="slide flex-active-slide" style="width: 283px; float: left; display: block;">
									<div class="left">
										<img data-cfsrc="./upload/img/201802052011102175.jpg" src="./upload/img/201802052011102175.jpg">
									</div>
									<div class="right">
										<p class="p1">白世鑫</p>
										<p class="p3">十年IT路，人称永远18岁的“小白哥”。曾主持参与北京等地的大型Java+大数据项目，五年教学经验，先后历任兄弟连名师、磨砺营实训总监，授课思路由浅入深，授课风格诙谐幽默。</p>
									</div>
								</li>
								<li class="slide" style="width: 283px; float: left; display: block;">
									<div class="left">
										<img data-cfsrc="./upload/img/201903251512579671.jpg" src="./upload/img/201903251512579671.jpg">
									</div>
									<div class="right">
										<p class="p1">白涛</p>
										<p class="p3">教师详情十五年的企业级应用开发及IT培训授课经验。参与过多个大型项目的分析、设计等工作。授课方面幽默风趣，对教学内容能做到深入浅出，条理分明，通俗易懂，注重对学员学习的方式与方法。</p>
									</div>
								</li>
								<li class="slide" style="width: 283px; float: left; display: block;">
									<div class="left">
										<img data-cfsrc="./upload/img/201901021704136880.jpg" src="./upload/img/201901021704136880.jpg">
									</div>
									<div class="right">
										<p class="p1">袁伟</p>
										<p class="p3">讲师详情：十年行业经验，多年开发，参与多个大型金融和数据服务系统和产品开发。3年教学经验 ，深入理解JavaSE到JAVAEE主流框架、springboot、Linux、Nosql、Hadoop、RabbitMQ消息中间件等技术，对知识讲解耐心细致，让学员能够轻松、快乐的掌握和应用。人生格言：觉得自…</p>
									</div>
								</li>
								<li class="slide clone" style="width: 283px; float: left; display: block;">
									<div class="left">
										<img data-cfsrc="./upload/img/201802052008356999.jpg" src="./upload/img/201802052008356999.jpg">
									</div>
									<div class="right">
										<p class="p1">许彩辉</p>
										<p class="p3">十二年从军经历，教育行业从业12年，对教育的本质有着深刻的理解。创办鸿博教育以来，坚持“认真严谨、用心负责”的核心理念，本着“科学发展，教育为本”的态度，不断前行。</p>
									</div>
								</li>--}}
								@foreach($tea_list as $item)
								<li class="slide clone" style="width: 283px; float: left; display: block;">
									<div class="left">
										<img data-cfsrc="{{$item->teacher_portrait_src}}" src="{{$item->teacher_portrait_src}}">
									</div>
									<div class="right">
										<p class="p1">{{$item->name}}</p>
										<p class="p3">{{mb_substr($item->details,0,180)}}</p>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						<ol class="flex-control-nav flex-control-paging">
							<li><a class="">1</a></li>
							<li><a class="flex-active">2</a></li>
							<li><a>3</a></li>
							<li><a>4</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box box6">
		<div class="box_In">
			<div class="box_hd wow zoomIn" style="visibility: hidden; animation-name: none;">
				<div class="top">
					<div class="left">6问</div>
					<div class="right">什么样的人适合学习全栈工程师？</div>
				</div>
				<div class="btm">
					<div class="left">答</div>
					<div class="right">渴望改变生活现状的人</div>
				</div>
			</div>
			<ul>
				<li class="wow slideInLeft" style="visibility: hidden; animation-name: none;">
					<div class="left">
						<img data-cfsrc="./templates/mobile/images/box6-img1.jpg" src="./templates/mobile/images/box6-img1.jpg">
					</div>
					<div class="right">
						<img data-cfsrc="./templates/mobile/images/box6-img2.jpg" src="./templates/mobile/images/box6-img2.jpg">
						<p>有一定的计算机基础，且高中以上学历。</p>
					</div>
				</li>
				<li class="li2 wow slideInRight" style="visibility: hidden; animation-name: none;">
					<div class="left">
						<img data-cfsrc="./templates/mobile/images/box6-img4.jpg" src="./templates/mobile/images/box6-img4.jpg">
						<p>已在职的后端开发工程师／前端开发工程师，想提升自己的前端开发能力／后端开发能力。</p>
					</div>
					<div class="right">
						<img data-cfsrc="./templates/mobile/images/box6-img3.jpg" src="./templates/mobile/images/box6-img3.jpg">
					</div>
				</li>
				<li class="li3 wow slideInLeft" style="visibility: hidden; animation-name: none;">
					<div class="left">
						<img data-cfsrc="./templates/mobile/images/box6-img5.jpg" src="./templates/mobile/images/box6-img5.jpg">
					</div>
					<div class="right">
						<img data-cfsrc="./templates/mobile/images/box6-img6.jpg" src="./templates/mobile/images/box6-img6.jpg">
						<p>对于二三线城市的公司来讲，工作岗位不像一线城市一样细分明确，所以想在家乡谋职，全栈开发将是一个好的选择。</p>
					</div>
				</li>
			</ul>
			<a href="https://tb.53kf.com/code/client/10169396/1" class="a_btn wow slideInUp" id="" style="visibility: hidden; animation-name: none;">我适合吗？</a>
		</div>
	</div>

	{{--tabBar--}}
@include('api.layouts.tabBar')

	<script src="./templates/mobile/js/wow.min.js"></script>
	<script src="./templates/mobile/js/jquery.flexslider-min.js"></script>
	<script src="./templates/mobile/js/jquery.SuperSlide.2.1.1.js"></script>
	<script type="text/javascript" src="./templates/mobile/js/main.js"></script>
	<script>
		if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
			new WOW().init();
		};
		$('.ban .flexslider').flexslider({
			animation: 'slide',
			controlNav: true,
			directionNav: false,
			animationLoop: true,
			slideshow: true,
			useCSS: false,
			slideshowSpeed: 3500,
		})
		//	         薪资滚动
		jQuery(".box2 .scrollDiv").slide({
			mainCell: ".bd ol",
			autoPlay: true,
			effect: "topMarquee",
			vis: 9,
			interTime: 50,
			trigger: "click"
		});
		//	        轮播
		$('.box3 .flexslider').flexslider({
			animation: 'slide',
			controlNav: true,
			directionNav: false,
			animationLoop: true,
			slideshow: true,
			useCSS: false,
			slideshowSpeed: 3000,
		})
		$('.box5 .flexslider').flexslider({
			animation: 'slide',
			controlNav: true,
			directionNav: false,
			animationLoop: true,
			slideshow: true,
			useCSS: false,
			slideshowSpeed: 3000,
		})
	</script>


</body>

</html>