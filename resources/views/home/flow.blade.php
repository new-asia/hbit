{{--头部-css--}}
@include('home.layouts.header')
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/other.css" />

<style>
* {
	padding: 0;
	margin: 0;
}

.bm {
	width: 100%;
	background: #FFF;
	font-family: Microsoft Yahei;
	padding: 50px 0 10px;
}

.bm h2 {
	height: 70px;
	background: url(http://www.itcast.cn/images/h_bg.png) no-repeat center top;
	text-indent: -9999px;
}

.bm .bm_con {
	width: 938px;
	margin: 0 auto;
	overflow: hidden;
}

.bm .bm_con .left {
	width: 720px;
	float: left;
}

.bm .bm_con .right {
	width: 218px;
	float: left;
}

.bm .bm_con .left ul {
	overflow: hidden;
}
ol, ul, li {
	list-style: none;
}

.bm .bm_con .left ul li {
	float: left;
	width: 338px;
	margin-bottom: 10px;
	overflow: hidden;
	height: 44px;
}

.bm .bm_con .left ul li .l_text {
	float: left;
	font-size: 18px;
	color: #666;
	padding-right: 10px;
	line-height: 40px;
}

.bm .bm_con .left ul li input {
	float: left;
	width: 211px;
	padding: 10px 0;
	border: 1px solid #c9c9c9;
	border-radius: 3px;
	padding-left: 10px;
	box-shadow: inset 1px 2px 3px #f1f1f1;
	margin-top: 2px;
}

.bm .bm_con .right input {
	display: block;
	width: 216px;
	height: 36px;
	color: #fff;
	font-size: 16px;
	background: #4492dc;
	border: none;
	outline: none;
	border-radius: 3px;
	font-family: Microsoft Yahei;
}

.bm .bm_con .right p {
	font-size: 12px;
	color: #666;
	margin-top: 25px;
}
</style>

<div class="wrapper">

<div class="flow_banner"></div>
<div class="content_nav">
<div class="container">
<span>当前位置：</span>
<a href="/index.html">首页</a> &gt;
<a href="/flow.html">报名流程</a>
</div>
</div>
<div class="graybg flow_main">
<div class="flow_con">
<div class="inner">
<div class="box_flow">
<h2 class="flow_tt"><img src="/static/templates/main/images/flow1.jpg" /></h2>
<p>您如果想报名参加培训，需要在下方填写个人预报名信息，提交信息后，我们的咨询老师会主动联系您！</p>
<div id="bm">
<div class="bm">
<h2>每期开班座位有限,预报名可优先享有占座特权哦！</h2>
<div class="bm_con">
<form id="feedback_form" name="feedback_form" url="/plugins/feedback/ajax.ashx?action=add&site=1">
<input type="hidden" value="11" name="cid">
<div class="left form-box">
<ul>
<li>
<span class="l_text"><s style="color:#e00000; font-size:15px; text-decoration:none; line-height:40px; padding-right:5px;">*</s>真实姓名</span>
<input id="txtUserName" name="txtUserName" class="weui-input" type="text" placeholder="我们期待更了解您" data-validate="s" />
</li>
<li>
<span class="l_text"><s style="color:#e00000; font-size:15px; text-decoration:none; padding-right:5px;">*</s>上课地址</span>
<select name="txtUserEmail" id="txtUserEmail" style="width:212px; height:36px; display:block;" onchange="change(this)">
<option value="北京校区">北京校区</option>
</select>
</li>
<li>
<span class="l_text"><s style="color:#e00000; font-size:15px; text-decoration:none; line-height:40px; padding-right:5px;">*</s>联系手机</span>
<input id="txtUserTel" name="txtUserTel" class="weui-input" type="tel" placeholder="我们和您一样讨厌骚扰电话" />
</li>
<li>
<span class="l_text"><s style="color:#e00000; font-size:15px; text-decoration:none; padding-right:5px;">*</s>报名学科</span>
<select name="txtContent" id="txtContent" style="width:212px; height:36px; display:block;">
<option value="php">php</option>
<option value="Java">Java</option>
<option value="H5+全栈工程师">H5+全栈工程师</option>
</select>
</li>
<li>
<span class="l_text"><s style="color:#e00000; font-size:15px; text-decoration:none; line-height:40px; padding-right:11px;">*</s>QQ号码</span>
<input id="txtUserQQ" name="txtUserQQ" class="weui-input" type="text" placeholder="我们将尽快与您联系" />
</li>
<input type="hidden" name="come" value="官网报名">
<input type="hidden" name="url" value="" id="u">
</ul>
<br>
</div>
<div class="right form-group">
<input id="btnSubmit" name="btnSubmit" type="submit" class="weui-btn weui-btn_primary" value="现在预报名" />
<p>温馨提示：请保持手机畅通，咨询老师将为您提供专属的一对一报名服务。</p>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="box_flow">
<h2 class="flow_tt"><img src="/static/templates/main/images/flow2.jpg" /></h2>
<p>和咨询老师确认预报名信息后，请按照以下汇款渠道，基础班一次缴清学费598元；就业班缴纳报名费500元，作为座位预订金，该座位预订金将从您的总学费中扣除。</p>
<p class="p_s"><span>*</span> &nbsp;特别提示：如果您在缴纳报名费用后不打算参加学习了，请在开课日的前<span> 7 </span>天通知我们，我们将全额退还您的报名费，如果您在外地，汇款的费用将从您的报名费中扣除。</p>
<p class="p_s">距离开课<span> 7 </span>天内（包括<span> 7 </span>天），您不打算参加学习，我们将不予退还您的报名费用。</p>
<div class="cityad">
<div class="top">
<select name="" id="" class="city">
<option value="">北京</option>
</select>
<p class="p_s"><span>* 请先选择校区，查看该校区对应汇款账户</span></p>
</div>
<div class="bank">
<div class="bank_list bank_list_cur">
<h3>鸿博</h3>
<p><span>民生银行：</span> 154 042 329 户名：北京鸿博互联软件有限公司</p>
<p>开户行：民生银行北京中关村软件园支行</p>
</div>
</div>
</div>
</div>
<div class="box_flow">
<h2 class="flow_tt"><img src="/static/templates/main/images/flow3.jpg" /></h2>
<p>请将您的汇款情况告知咨询老师（主要包括汇款人姓名、所报班级、汇款金额、汇出银行、汇入银行、汇款时间等），咨询老师</p>
<p>在确认收到汇款后会及时跟您确认座位预订成功。</p>
</div>
<div class="box_flow">
<h2 class="flow_tt"><img src="/static/templates/main/images/flow4.jpg" /></h2>
<p>所有学员须在开课前1天之前来公司报到，报到时须携带身份证原件，填写学籍卡，签订学员守则。要安排住宿的外地学员请在</p>
<p>开课三天之前到京（注：节假日除外）并在买好车票告知咨询老师，以便我们提前安排工作人员为您安排住宿。</p>
<p><a href="tencent://message/?Menu=yes&amp;uin=104044302" target="_blank" style="color:#f00; text-decoration:underline;">查看各校区详细地址</a></p>
</div>
<div class="box_flow">
<h2 class="flow_tt"><img src="/static/templates/main/images/flow5.jpg" /></h2>
<p>为了不影响您的正常上课，所有学员须在开课前一周，从以下两种缴费方式中任选一种，补齐所有学费。</p>
<p>1、现金缴纳：您可以到我们的培训中心所在地亲自缴纳。</p>
<p>2、银行汇款：您可以通过银行汇款或者网银转账的方式补齐学费（参见第二步中的汇款帐号）。</p>
<p class="p_c">以上为报名流程，如有疑问，欢迎咨询</p>
<a href="tencent://message/?Menu=yes&amp;uin=104044302" target="_blank" class="a_gd bm_btn">点击咨询</a>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="/static/templates/main/js/html5_20170105.js"></script>
<script src="/static/templates/main/js/php_new.js"></script>
{{--底部--}}
@include('home.layouts.footer')
<script id="qd28521529033c5559ef89a81cb9a2cce5a2f8af319e" src="https://wp.qiye.qq.com/qidian/2852152903/3c5559ef89a81cb9a2cce5a2f8af319e" charset="utf-8" async defer></script>


<div class="nav_left">
<ul>
<li class="cur"><span></span>填写预报名</li>
<li><span></span>缴纳订金</li>
<li><span></span>确认汇款</li>
<li><span></span>来校报道</li>
<li><span></span>补齐学费</li>
</ul>
</div>
</div>
{{--公共js--}}
@include('home.layouts.script')
<style type="text/css">
#ie7-warning{background:rgb(255,255,225); position:absolute; top:0; left:0; font-size:12px; color:#333; width:100%; padding:5px 0; text-align:center; z-index:99999; }
</style>
<script src="/static/templates/main/js/zx.js"></script>
<script src="/static/templates/main/js/other.js"></script>
<script type="text/javascript">
	$(function(){
		$(".nav_left ul li").click(function(){
			$(this).addClass("cur").siblings().removeClass("cur");		
			$("html,body").animate(
				{
					"scrollTop":$(".box_flow").eq($(this).index()).offset().top - 50
				},500);
		});
		$(window).scroll(function(){
			var B=$(window).scrollTop();	
			if(B<=300){
				$(".nav_left").fadeOut();
			}else{
				$(".nav_left").fadeIn();						
				}	
		});
		$(".cityad .city").change(function(){
			var optIndex = $(".cityad .city option:selected").index();                
			$(".bank .bank_list:eq("+optIndex+")").eq($(this).index()).slideDown().siblings().slideUp();					
		})
	})
</script>
<script type="text/javascript">
    $(function(){
        //初始化发表评论表单
        AjaxInitForm('#feedback_form', '#btnSubmit', 1);
    });
</script>