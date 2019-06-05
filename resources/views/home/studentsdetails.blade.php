{{--头部-css--}}
@include('home.layouts.header')
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/static/templates/main/css2/style.css" />
<link rel="stylesheet" href="/static/templates/main/css/qf-bj-php.css">
<link rel="stylesheet" type="text/css" href="/static/templates/main/css1/index1.css" />
<link rel="stylesheet" href="/static/templates/main/css1/index.css">
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/other.css" />

 <div class="content_nav">
<div class="container">
<span>当前位置：</span>
<a href="/">首页</a> &gt;
<a href="/StudentsStory">学员生活</a> &gt;
        {{$studentfind[0]->name}}
</div>
</div>
<div class="content">
<div class="container">
<div class="left_container">
<div class="left_content">
<div class="title">
<p style="font-size: 24px;">{{$studentfind[0]->name}}</p>
<p class='autor'>2018/3/7 11:15:41</p>
</div>
<div class="jianjie">
<p>鸿博学员：Java课程安排合理 助力学员发展 {{$studentfind[0]->testimonials}}</p>
</div>
<div class="menu">
<p style="text-indent:28px;background:white">
        <span style="font-size:14px;font-family:&#39;微软雅黑&#39;,sans-serif;color:#333333;background:white">鸿博学员：Java课程安排合理 助力学员发展</span>
</p>
<p>
        {{$studentfind[0]->testimonials}}
</p>
<p style="text-indent:28px;background:white">
        <span style="font-size:14px;font-family:&#39;微软雅黑&#39;,sans-serif;color:#333333;background:white">姓名：{{$studentfind[0]->name}}</span>
</p>
<p style="text-indent:28px;background:white">
        <span style="font-size:14px;font-family:&#39;微软雅黑&#39;,sans-serif;color:#333333;background:white">性别：{{$studentfind[0]->sex == 0? '女': '男'}}</span>
</p>
<p style="text-indent:28px;background:white">
        <span style="font-size:14px;font-family:&#39;微软雅黑&#39;,sans-serif;color:#333333;background:white">毕业班级：{{$studentfind[0]->class_name}}</span>
</p>
<p style="text-indent:28px;background:white">
        <span style="font-size:14px;font-family:&#39;微软雅黑&#39;,sans-serif;color:#333333;background:white">学 历：本科</span>
</p>
<p style="text-indent:28px;background:white">
        <span style="font-size:14px;font-family:&#39;微软雅黑&#39;,sans-serif;color:#333333;background:white">入职企业：{{$studentfind[0]->company}}</span>
</p>
<p style="background: white none repeat scroll 0% 0%; text-indent: 28px;">
        <span style="font-size:14px;font-family:&#39;微软雅黑&#39;,sans-serif;color:#333333;background:white">入职薪资：{{$studentfind[0]->pay}}元/月</span>
</p>
</div>
<div class="foo">
<div style="float: left;">
<strong>上一篇：</strong><a href="/Studentsdetails.html?id={{$prev['student_id']}}">{{$prev['name']}}</a>
</div>
<div style="float: right;">
<strong>下一篇：</strong><a href="/Studentsdetails.html?id={{$next['student_id']}}">{{$next['name']}}</a>
</div>
</div>

<div class="scZxDetailBt">
<div class="scZxDetailBtRight">
<div class="scZxshare">
<span>立即分享：</span>
<div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1526491950904"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
</div>
</div>
</div>

<div class="rel-box">
<h2 class="slide-tit">
<span>相关阅读</span>
</h2>
<ul class="rel-list">
    @if(!empty($relevant))
        @foreach($relevant as $v)
            <li>
                <div class="img-box">
                    <a title="{{$v->title}}" href="/show-{{$v->article_id}}">
                        <img src="{{$v->img}}">
                    </a>
                </div>
                <div class="infos">
                    <h3><a title="{{$v->title}}" href="/show-{{$v->article_id}}">{{$v->title}}</a></h3>
                    <p>{{$v->content}}</p>
                    <span>{{$v->add_time}}</span>
                </div>
            </li>
        @endforeach
    @else
        <div class="nodata">暂无相关的数据...</div>
    @endif
</ul>
</div>

</div>
</div>
<style>
    .right_item_last a:hover{
        color:#fff;
    }
</style>
<div class="right_container">
<script type="text/javascript">
	$(function(){
		//初始化发表评论表单
		AjaxInitForm('#feedback_form', '#btnSubmit', 1);
	});
</script>
        <div class="right_item right_item_4">
                <div class="lfMflf">
                        <div class="lfMflfTit">提交报名</div>
                        <form class="rightform1" id="feedback_form" name="feedback_form" url="" action="{{url('apply/StudentsStory.html')}}" method="post" novalidate>
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
                                <input id="btnSubmit" type="button" onclick="check()" class="lfMflfBtn" value="提交申请" />
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
        @endif
    @endforeach
            <!--<a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank"><img src="/upload/201901/04/201901041517363540.jpg" alt="广告2"></a>-->

</div>
<div class="right_item" style="height: 610px;">
<div class="right_item_title">
<h2>开课信息</h2>

</div>
<div class="right_item_content">
    @foreach($course as $item)
        <span class="circular"></span>
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
<div class="sidebar-box right_item" style="width: 343px;">
<h4>热门标签</h4>
<div class="tags-box clearfix">
    @foreach($Tags as $v)
        <a href="/tags/show-{{$v['id']}}.html">{{$v['name']}}<i>({{$v['count']}})</i></a>
    @endforeach
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="/templates/main/js/html5_20170105.js"></script>
<script src="/templates/main/js/php_new.js"></script>

{{--底部--}}
@include('home.layouts.footer')
{{--公共js--}}
@include('home.layouts.script')
<script>
    function checkIshanzi() {
        //var patrn = /^[\u2E80-\u9FFF]$/; //Unicode编码中的汉字范围  /[^\x00-\x80]/
        var s = $.trim($('#txtUserName').val());
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
        var s = $.trim($('#txtUserTel').val());
        var patrn = /^[1][3-9][0-9]{9}$/;
        if (patrn.exec(s)){
            $('#Tips').html('')
            return true;
        }
        $('#Tips').html('请输入正确的手机号码！')
        return false
    }

    //验证QQ号码5-11位
    function isQQ() {
        var qq = $.trim($('#txtUserQQ').val());
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
        if (!realnamereg.test($.trim(realname.val()))) {
            alert('请输入正确的姓名！');
            return false;
        }
        if (!phonereg.test($.trim(phone.val()))) {
            alert('请输入正确的手机号！');
            return false;
        }
        if (!filter.test($.trim(qq.val()))) {
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