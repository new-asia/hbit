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

</head>

<body style="">
	<div class="main gd">


	{{--nav--}}
@include('api.layouts.nav')



		<div class="con">
			<div class="bm" style="max-width:750px; margin:0 auto;">
				<div class="bm_con">
					<h2>每期开班座位有限<br>预报名可优先享有占座特权哦！</h2>
					<iframe style="display:none" id="ajaxframe"  name="ajaxframe"></iframe>
					<form id="feedback_form" url=""  action="{{url('apply')}}" method="post" target="ajaxframe">
						@csrf
						<div class="left">
							<ul>
								<li>
									<span class="l_text"><s style="color:#e00000; font-size:0.8em; text-decoration:none; line-height:0.9em; padding-right:5px;">*</s>真实姓名</span>
									<input type="text" placeholder="我们期待更了解您" onblur="checkIshanzi()" name="name" id="txtUserName">
									<span style="color: red;" id="name"></span>
								</li>
								<li>
									<span class="l_text"><s style="color:#e00000; font-size:0.8em; text-decoration:none; line-height:0.9em; padding-right:5px;">*</s>联系手机</span>
									<input type="text" placeholder="我们和您一样讨厌骚扰电话" onblur="checkIsTel()" name="tel" id="txtUserTel">
									<span style="color: red;" id="tel"></span>
								</li>
								<li>
									<span class="l_text"><s style="color:#e00000; font-size:0.8em; text-decoration:none; line-height:0.9em; padding-right:11px;">*</s>QQ号码</span>
									<input type="text" placeholder="我们将尽快与您联系" onblur="isQQ()" name="qq" id="txtUserQQ">
									<span style="color: red;" id="qq"></span>
								</li>
								<li>
									<span class="l_text"><s style="color:#e00000; font-size:15px; text-decoration:none; padding-right:5px;">*</s>上课地址</span>
									<select name="campus_id" onchange="checkCampus()" id="txtUserCampus">
										<option value="0">选择校区</option>
										@foreach($campus as $v)
											<option value="{{$v->id}}">{{$v->campus}}</option>
										@endforeach
									</select>
									<span style="color: red;" id="campus"></span>
								</li>
								<li>
									<span class="l_text"><s style="color:#e00000; font-size:0.8em; text-decoration:none; padding-right:5px;">*</s>抢报学科</span>
									<select name="course_id" onchange="checkCourse()" id="txtCourse">
										<option value="0">请选择报名学科</option>
										@foreach($courses as $v)
											<option value="{{$v->course_id}}">{{$v->course_name}}</option>
										@endforeach
									</select>
									<span style="color: red;" id="course"></span>
								</li>
								{{--<input type="hidden" name="come" value="鸿博移动端">
								<input type="hidden" name="url" value="" id="u">--}}
								<li class="right">
									<a href="javascript:;" onclick="check()">现在预报名</a>
									<p id="Tips" style="color: red;"></p>
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
	<script>
		var mySwiper = new Swiper('.swiper-container', {
			slidesPerView: "7",
			spaceBetween: 0 //控制两个块之间的宽度
		})
	</script>
	<script>
        function checkIshanzi() {
            //var patrn = /^[\u2E80-\u9FFF]$/; //Unicode编码中的汉字范围  /[^\x00-\x80]/
            var s = $('#txtUserName').val();
            var patrn = /[^\x00-\x80]$/;
            if(s.length < 2 | s.length >10){
                $('#name').html('请输入正确姓名！')
                return false
            }
            if (!patrn.exec(s)){
                $('#name').html('用户名需要汉字！')
                return false
            }
            $('#name').html('');
            return true
        }
        //校验手机号码
        function checkIsTel() {
            var s = $('#txtUserTel').val();
            var patrn = /^0?(13[0-9]|15[012356789]|18[0236789]|14[57])[0-9]{8}$/;
            if (patrn.exec(s)){
                $('#tel').html('')
                return true;
            }
            $('#tel').html('请输入正确的手机号码！')
            return false
        }

        //验证QQ号码5-11位
        function isQQ() {
            var qq = $('#txtUserQQ').val();
            var filter = /^\s*[.0-9]{5,11}\s*$/;
            if (!filter.test(qq)) {
                $('#qq').html('请输入正确的QQ,QQ号码5-11位！')
                return false;
            } else {
                $('#qq').html('')
                return true;
            }
        }

        function checkCampus() {
            var id = $('#txtUserCampus').val();
            if(parseInt(id) <= 0 ){
                $('#campus').html('上课地址不能为空！')
                return false;
            }
            $('#campus').html('')
            return true;
        }

        function checkCourse() {
            var id = $('#txtCourse').val();
            if(parseInt(id) <= 0 ){
                $('#course').html('学科不能为空！')
                return false;
            }
            $('#course').html('')
            return true;
        }

        function check() {
            var realname = $("#txtUserName");
            var phone = $("#txtUserTel");

            var qq = $("#txtUserQQ");
            var Campus = $("#txtUserCampus");
            var Course = $("#txtCourse");

            var realnamereg = /^[\u4E00-\u9FA5]+$/;
            var phonereg = /^0?(13[0-9]|15[012356789]|18[0236789]|14[57])[0-9]{8}$/;
           // var phonereg = /^[1][3-9][0-9]9$/;
            var filter = /^\s*[.0-9]{5,11}\s*$/;

            if (!realnamereg.test(realname.val())) {
                realname.focus().val('');
                alert('请输入正确的姓名！');
                return false;
            }
            if (!phonereg.test(phone.val())) {
                realname.focus().val('');
                alert('请输入正确的手机号！');
                return false;
            }
            if (!filter.test(qq.val())) {
                realname.focus().val('');
                alert('请输入正确的qq号码！');
                return false;
            }
            if (parseInt(Campus.val()) <= 0) {
                realname.focus().val('');
                alert('请选择上课地址');
                return false;
            }
            if (parseInt(Course.val()) <= 0) {
                realname.focus().val('');
                alert('请选择学科!');
                return false;
            }
            else {
                $("#feedback_form").submit();
                alert('申请成功！\r\n咨询客服人员将会主动联系您，请耐心等待！');
                realname.val('');
                phone.val('');
                qq.val('');
                Course.val('0');
                Campus.val('0');
            }
        }
	</script>
</body>

</html>