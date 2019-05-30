{{--头部 css--}}
{{--头部-css--}}
@include('home.layouts.header')
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/other.css" />
<link href="/static/templates/main/css/global.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/sjs_tc.css">
<link rel="stylesheet" media="screen" href="/static/templates/main/css/jquery-ui.min.css">


{{--banner--}}
{{--@include('home.layouts.banner')--}}
<div class="banner" style="height: 525px;">
   <div class="a_banner">
      <div class="a_banner_pic">
         <ul>
            <li>
               <a href=""><img style="background: url(@if($advert[0]->picture_place == 1) {{$advert[0]->picture_src}} @endif) center 0px no-repeat; width:100%; height:520px;" /></a>
            </li>
         </ul>
      </div>
   </div>
</div>
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
   <a target="_blank" href="/show-3.html"><p><strong>{{$v->name}}</strong></p></a>
   <p><span>{{$v->position_name}}</span></p>
   <p><b>工作年限：</b><span>{{$v->obtain_employment_time}}</span></p>
   <p><b>擅长领域：</b>{{$v->field}}</p>
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
   @foreach($advert as $item)
      @if($item->picture_place == 2)
         <a href="{{$item->picture_url}}" target="_blank"><img src="{{$item->picture_src}}"></a>
      @endif
   @endforeach
      <!--<a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank"><img src="/static/upload/img/201901041517363540.jpg" alt="广告2"></a>-->
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
            <li>{{$item->list_order}}</li>
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
@foreach($tags as $v)
   <a href="{{$v['id']}}">{{$v['name']}}<i>({{$v['count']}})</i></a>
@endforeach 


 
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
