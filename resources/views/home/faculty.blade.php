{{--头部 css--}}
@include('home.layouts.header')
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/other.css" />
<link href="/static/templates/main/css/global.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/sjs_tc.css">
<link rel="stylesheet" media="screen" href="/static/templates/main/css/jquery-ui.min.css">

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
<a href="/faculty">豪华师资</a>
</div>
</div>

<div class="layout container-minheight clearfix">
    <div class="inside-contanier-l-wrap inside2">
    <div class="des-tab-box demo-TabWrap">
    <div class="des-tab-clum demo-TabBody" style="display:block;">
    @foreach($teacher as $v)
       <div class="disList">
       <div class="dLleft f_l"><a target="_blank" href="/Faculty/show-{{$v->teacher_id}}.html"><img src="{{$v->teacher_portrait_src}}" width="180" alt="{{$v->name}}" /></a></div>
       <div class="dLright f_l">
       <a target="_blank" href="/Faculty/show-{{$v->teacher_id}}.html"><p><strong>{{$v->name}}</strong></p></a>
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
                <form class="rightform1" id="feedback_form" name="feedback_form" url="" action="{{url('apply/faculty.html')}}" method="post" novalidate>
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
                        @foreach($courses as $v)
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
    <h2>推荐讲师</h2>
    <a href="/Faculty">更多>></a>
    </div>
    <div class="right_item_content">
        <ul>
       @foreach($teacher as $v)
          <li><a href="/Faculty/show-{{$v->teacher_id}}.html">{{$v->name}}</a></li>
       @endforeach


    </ul>
    </div>
    </div>
    <div class="sidebar-box right_item">
    <h4>热门标签</h4>
    <div class="tags-box clearfix">
    @foreach($tags as $v)
       <a href="/tags/show-{{$v['id']}}.html">{{$v['name']}}<i>({{$v['count']}})</i></a>
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
