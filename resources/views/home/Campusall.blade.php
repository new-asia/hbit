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
				<li><a href="{{$advert[0]->picture_url}}"><img src="@if($advert[0]->picture_place == 1) {{$advert[0]->picture_src}} @endif" style="background: url(https://www.itjmd.com/upload/201803062351329727.jpg) center 0px no-repeat;width: 100%;height: 100%;" style="display: none;" /></a></li>
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
							<h3><a href="/news/62.html">{{$v[0]->c_name}}</a>
							</h3><a href="/news/62.html">更多</a>
						</div>
						<div class="scZxCcCon clearfix">
							<div class="scZxCcConTop clearfix">
								@if (isset($v[1]))
								<a href="/show-{{$v[1]->article_id}}">
									<img src="{{$v[1]->img}}">
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
										<a href="/show-{{$v[2]->article_id}}" title="{{$v[2]->title}}">{{$v[2]->title}}</a><span>{{$v[2]->add_time}}</span>
									</li>
								@endif
								@if (isset($v[3]))
									<li class="clearfix">
										<a href="/show-{{$v[3]->article_id}}" title="{{$v[3]->title}}">{{$v[3]->title}}</a><span>{{$v[3]->add_time}}</span>
									</li>
								@endif
								@if (isset($v[4]))
									<li class="clearfix">
										<a href="/show-{{$v[4]->article_id}}" title="{{$v[4]->title}}">{{$v[4]->title}}</a><span>{{$v[4]->add_time}}</span>
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
						<form class="rightform1" id="feedback_form" name="feedback_form" url="" action="{{url('apply')}}" method="post" novalidate>
							@csrf
							<input type="text" placeholder="请输入您的姓名" onblur="checkIshanzi()" name="name" id="txtUserName">
							<input type="text" placeholder="请输入您的电话" onblur="checkIsTel()"  name="tel" id="txtUserTel" size="5" maxlength="11">
							<input type="text" placeholder="请输入您的QQ号码" onblur="isQQ()" name="qq" id="txtUserQQ">
							<select name="campus_id" onchange="checkCampus()" id="txtUserCampus">
								<option value="0">请选择上课地址</option>
								@foreach($campus as $v)
									<option value="{{$v->id}}">{{$v->campus}}</option>
								@endforeach
							</select>
							<select name="course_id" onchange="checkCourse(this.value)" id="txtCourse">
								<option value="0">请选择报名学科</option>
								@foreach($courseall as $v)
									<option value="{{$v->course_id}}">{{$v->course_name}}</option>
								@endforeach
							</select>
							<input id="btnSubmit" onclick="check()" type="button" class="lfMflfBtn" value="提交申请" />
						</form>

						<div class="form-group" style="margin-left: 50px;">
							<div id="Tips" style="color:red;"></div>
							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<ul style="color:red;">
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
						</div>

					</div>
				</div>
				<div class="right_pi_wrap img_div">
					@foreach($advert as $item)
						@if($item->picture_place == 2)
							<a href="{{$item->picture_url}}" target="_blank"><img src="{{$item->picture_src}}" alt="广告3"></a>
							<!--<a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank"><img src="/static/upload//201901/04/201901041517363540.jpg" alt="广告2"></a>-->
						@endif
					@endforeach
				</div>
				<div class="right_item">
					<div class="right_item_title">
						<h2>开课信息</h2>
					</div>
					<div class="right_item_content">
						@foreach($course as $item)
							<ul style="float:left;width: 110px;margin-left: 3px;">
								<li>{{$item->course_name}}</li>
							</ul>
							<ul style="float:left;width: 50px;">
								<li>{{$item->course_num}}</li>
							</ul>
							<ul style="float:left;width: 80px;">
								<li>{{date("Y-m-d",$item->course_time)}}</li>
							</ul>
							<ul style="float:left;width: 100px;">
								<li><a href="{{$item->enroll_link}}" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
							</ul>
						@endforeach
					</div>
				</div>
				<div class="right_item right_item_3">
					<div class="right_item_title">
						<h2>推荐阅读</h2>
						<a href="/Campusall.html">更多>></a>
					</div>
					<div class="right_item_content">
						<ul>
							@foreach($recommend as $v)
								<li><a href="/show-{{$v->article_id}}">{{$v->title}}</a></li>
							@endforeach
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
<script>
    function checkIshanzi() {
        //var patrn = /^[\u2E80-\u9FFF]$/; //Unicode编码中的汉字范围  /[^\x00-\x80]/
        var s = $('#txtUserName').val();
        var patrn = /[^\x00-\x80]$/;
        if(s.length < 2 | s.length >10){
            $('#Tips').html('用户名长度为2-10！')
            return false
        }
        if (!patrn.exec(s)){
            $('#Tips').html('用户名需要汉字！')
            return false
        }
        $('#Tips').html('');
        return true
    }
    //校验手机号码
    function checkIsTel() {
        var s = $('#txtUserTel').val();
        var patrn = /^0?(13[0-9]|15[012356789]|18[0236789]|14[57])[0-9]{8}$/;
        if (patrn.exec(s)){
            $('#Tips').html('')
            return true;
        }
        $('#Tips').html('请输入正确的手机号码！')
        return false
    }

    //验证QQ号码5-11位
    function isQQ() {
        var qq = $('#txtUserQQ').val();
        var filter = /^\s*[.0-9]{5,11}\s*$/;
        if (!filter.test(qq)) {
            $('#Tips').html('请输入正确的QQ,QQ号码5-11位！')
            return false;
        } else {
            $('#Tips').html('')
            return true;
        }
    }

    function checkCampus() {
        var id = $('#txtUserCampus').val();
        if(parseInt(id) <= 0 ){
            $('#Tips').html('上课地址不能为空！')
            return false;
        }
        $('#Tips').html('')
        return true;
    }

    function checkCourse() {
        var id = $('#txtCourse').val();
        if(parseInt(id) <= 0 ){
            $('#Tips').html('学科不能为空！')
            return false;
        }
        $('#Tips').html('')
        return true;
    }

    function check() {
        var realname = $("#txtUserName");
        var phone = $("#txtUserTel");

        var qq = $("#txtUserQQ");
        var Campus = $("#txtUserCampus");
        var Course = $("#txtCourse");

        var realnamereg = /^[\u4E00-\u9FA5]+$/;
        // var phonereg = /^0?(13[0-9]|15[012356789]|18[0236789]|14[57])[0-9]{8}$/;
        var phonereg = /^[1][3-9][0-9]{9}$/;
        var filter = /^\s*[.0-9]{5,11}\s*$/;

        if (!realnamereg.test(realname.val())) {
            alert('请输入正确的姓名！');
            return false;
        }
        if (!phonereg.test(phone.val())) {
            alert('请输入正确的手机号！');
            return false;
        }
        if (!filter.test(qq.val())) {
            alert('请输入正确的qq号码！');
            return false;
        }
        if (parseInt(Campus.val()) <= 0) {
            alert('请选择上课地址');
            return false;
        }
        if (parseInt(Course.val()) <= 0) {
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