<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>鸿博教育-匠心打造,品质铸就</title>
	<meta name="keywords" content="Java培训班,PHP培训班,Html5培训班,移动开发培训,大数据培训,IT培训">
	<meta name="description"
		content="鸿博IT教育，坐落于首都北京市昌平区，毗邻北京科技大学，具有良好的学术学习氛围，最具前沿的互联网高新技术。 专注互联网领域技术10余年，全国知名十佳教育培训机构，IT职业教育领军品牌。">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<link rel="stylesheet" href="./templates/mobile/css/reset.css">
	<link rel="stylesheet" href="./templates/mobile/css/swiper-3.3.1.min.css">
	<link rel="stylesheet" href="./templates/mobile/css/style.css">
	<link rel="stylesheet" href="./templates/mobile/css/font_689149_dby6e0fcds.css">
	<link rel="stylesheet" href="./templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="./templates/mobile/plugin/swiper/swiper-4.3.3.min.css">
	<script src="./templates/mobile/js/jquery.min.js"></script>
	<link rel="stylesheet" href="./templates/mobile/css/style1.css">
	<script type="text/javascript">
		window.onload = function () {
			//alert(window.location.href);
			var pathname = window.location.pathname;

			var loc = pathname.substring(pathname.lastIndexOf('/') + 1, pathname.lastIndexOf('.'));

			if (loc == "abouts") {
				$("#abouts").addClass("gywmtabon");
			}
			if (loc == "idea") {
				$("#idea").addClass("gywmtabon");
			}
			if (loc == "history") {
				$("#history").addClass("gywmtabon");
			}
			if (loc == "school") {
				$("#school").addClass("gywmtabon");
			}
		}
	</script>
</head>

<body style="">
	<div class="main gd">
	{{--nav--}}
@include('api.layouts.nav')

		<div class="con">
			<section class="ban">
				<img data-cfsrc="./upload/img/201807062343351837.jpg" data-cfstyle="width: auto;height: auto;max-width: 100%;max-height: 100%;	" style="width: auto;height: auto;max-width: 100%;max-height: 100%;	" src="./upload/img/201807062343351837.jpg">
			</section>

			<section class="gywmlist">
				<div class="gywmtab">
					<ul>
						<li id="abouts" class="gywmtabon"><a href="./abouts.html">企业简介</a></li>
						<li id="idea"><a href="./idea.html">企业理念</a></li>
						<li id="history"><a href="./history.html">发展历史</a></li>
						<li id="school"><a href="./school.html">直营校区</a></li>
					</ul>
				</div>
				<div class="gywmcon" style="margin-top: 50px;">
					<div class="gywmconlis gywmcons">
						<h2 style="margin: 0px 0px 25px; padding: 0px; color: rgb(176, 176, 176); font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; font-size: 32px; font-weight: normal; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(0, 0, 0); font-size: 24px;"><strong>企业简介</strong></span></h2>
						<p style="padding: 0px; color: rgb(117, 117, 117); line-height: 24px; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">　　</p>
						<p style="padding: 0px; color: rgb(117, 117, 117); line-height: 3em; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">　　鸿博教育，坐落于首都北京市昌平区十三陵镇，毗邻北京吉利大学（昌平校区），具有良好的学术学习氛围，最具前沿的互联网高新技术。 专注互联网领域技术10余年，全国知名十佳教育培训机构，IT职业教育领军品牌。多年来秉承“认真 &nbsp;严谨 &nbsp;用心 负责”的教学理念，累计培养逾万名IT精英人才，打造高薪就业第一品牌，做学员职业路上的第一领航人。</p>
						<p style="padding: 0px; color: rgb(117, 117, 117); line-height: 3em; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 现开设课程有：Java+大数据 &nbsp;全栈工程师等最前沿最热门的优质课程体系，鸿博教育课程研发团队本着“科学研发、教育为本”的态度，以“培养互联网全能型IT精英人才”为己任，结合企业实操项目与时俱进，实时更新，做到了课程最前沿 最领先、最有价值，具有强大企业时代性。在学员就业方面采取“垂直化、定制化”的就业模式，同业内15000余家互联网软件开发企业签署人才培养协议，解除了学员的后顾之忧，在业内做到了首屈一指，全国数万名学员共同的选择，IT精英的摇篮，你成功路上的领航人。</p>
						<p><br></p>
					</div>
					<br>
					<div class="gywmconlis">
						<h2 style="margin: 0px 0px 25px; padding: 0px; color: rgb(176, 176, 176); font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; font-size: 32px; font-weight: normal; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(0, 0, 0); font-size: 24px;"><strong>企业简介</strong></span></h2>
						<p style="padding: 0px; color: rgb(117, 117, 117); line-height: 24px; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">　　</p>
						<p style="padding: 0px; color: rgb(117, 117, 117); line-height: 3em; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">　　鸿博教育，坐落于首都北京市昌平区十三陵镇，毗邻北京吉利大学（昌平校区），具有良好的学术学习氛围，最具前沿的互联网高新技术。 专注互联网领域技术10余年，全国知名十佳教育培训机构，IT职业教育领军品牌。多年来秉承“认真 &nbsp;严谨 &nbsp;用心 负责”的教学理念，累计培养逾万名IT精英人才，打造高薪就业第一品牌，做学员职业路上的第一领航人。</p>
						<p style="padding: 0px; color: rgb(117, 117, 117); line-height: 3em; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 现开设课程有：Java+大数据 &nbsp;全栈工程师等最前沿最热门的优质课程体系，鸿博教育课程研发团队本着“科学研发、教育为本”的态度，以“培养互联网全能型IT精英人才”为己任，结合企业实操项目与时俱进，实时更新，做到了课程最前沿 最领先、最有价值，具有强大企业时代性。在学员就业方面采取“垂直化、定制化”的就业模式，同业内15000余家互联网软件开发企业签署人才培养协议，解除了学员的后顾之忧，在业内做到了首屈一指，全国数万名学员共同的选择，IT精英的摇篮，你成功路上的领航人。</p>
						<p><br></p>
					</div>
					<div class="gywmconlis">
						<h2 style="margin: 0px 0px 25px; padding: 0px; color: rgb(176, 176, 176); font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; font-size: 32px; font-weight: normal; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(0, 0, 0); font-size: 24px;"><strong>企业简介</strong></span></h2>
						<p style="padding: 0px; color: rgb(117, 117, 117); line-height: 24px; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">　　</p>
						<p style="padding: 0px; color: rgb(117, 117, 117); line-height: 3em; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">　　鸿博教育，坐落于首都北京市昌平区十三陵镇，毗邻北京吉利大学（昌平校区），具有良好的学术学习氛围，最具前沿的互联网高新技术。 专注互联网领域技术10余年，全国知名十佳教育培训机构，IT职业教育领军品牌。多年来秉承“认真 &nbsp;严谨 &nbsp;用心 负责”的教学理念，累计培养逾万名IT精英人才，打造高薪就业第一品牌，做学员职业路上的第一领航人。</p>
						<p style="padding: 0px; color: rgb(117, 117, 117); line-height: 3em; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 现开设课程有：Java+大数据 &nbsp;全栈工程师等最前沿最热门的优质课程体系，鸿博教育课程研发团队本着“科学研发、教育为本”的态度，以“培养互联网全能型IT精英人才”为己任，结合企业实操项目与时俱进，实时更新，做到了课程最前沿 最领先、最有价值，具有强大企业时代性。在学员就业方面采取“垂直化、定制化”的就业模式，同业内15000余家互联网软件开发企业签署人才培养协议，解除了学员的后顾之忧，在业内做到了首屈一指，全国数万名学员共同的选择，IT精英的摇篮，你成功路上的领航人。</p>
						<p><br></p>
					</div>
					<div class="gywmconlis">
						<h2 style="margin: 0px 0px 25px; padding: 0px; color: rgb(176, 176, 176); font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; font-size: 32px; font-weight: normal; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(0, 0, 0); font-size: 24px;"><strong>企业简介</strong></span></h2>
						<p style="padding: 0px; color: rgb(117, 117, 117); line-height: 24px; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">　　</p>
						<p style="padding: 0px; color: rgb(117, 117, 117); line-height: 3em; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">　　鸿博教育，坐落于首都北京市昌平区十三陵镇，毗邻北京吉利大学（昌平校区），具有良好的学术学习氛围，最具前沿的互联网高新技术。 专注互联网领域技术10余年，全国知名十佳教育培训机构，IT职业教育领军品牌。多年来秉承“认真 &nbsp;严谨 &nbsp;用心 负责”的教学理念，累计培养逾万名IT精英人才，打造高薪就业第一品牌，做学员职业路上的第一领航人。</p>
						<p style="padding: 0px; color: rgb(117, 117, 117); line-height: 3em; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 现开设课程有：Java+大数据 &nbsp;全栈工程师等最前沿最热门的优质课程体系，鸿博教育课程研发团队本着“科学研发、教育为本”的态度，以“培养互联网全能型IT精英人才”为己任，结合企业实操项目与时俱进，实时更新，做到了课程最前沿 最领先、最有价值，具有强大企业时代性。在学员就业方面采取“垂直化、定制化”的就业模式，同业内15000余家互联网软件开发企业签署人才培养协议，解除了学员的后顾之忧，在业内做到了首屈一指，全国数万名学员共同的选择，IT精英的摇篮，你成功路上的领航人。</p>
						<p><br></p>
					</div>
				</div>
			</section>
		</div>

		<footer class="footer">
			<p>版权所有 2006 - 2018 北京鸿博互联软件有限公司</p>
			<p>地址：北京市海淀区苏家坨54号</p>
		</footer>
		{{--tabBar--}}
		@include('api.layouts.tabBar')

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
	<script type="text/javascript">
		$(function() {

		})
	</script>

</body>

</html>