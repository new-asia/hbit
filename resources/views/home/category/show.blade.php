{{--头部-css--}}
@include('home.layouts.header')
        <div class="content_nav">
            <div class="container">
                <span>当前位置：</span>
                <a href="/">首页</a> &gt;
                <a>分类</a> &gt;
                {{$Category->c_name}}
            </div>
        </div>
        <div class="content">
            <div class="container">
            <div class="scZxListLeft clearfix">
                    <div class="scZxListCon">
                        <ul>
                            <div class="search-tit">
                                <h3>搜索结果</h3>
                                <span>查询分类：<strong>{{$Category->c_name}}</strong>，共有<strong>{{ $article->total() }} </strong>条记录</span>
                            </div>

                            @foreach($article as $k => $v)
                            <li class="clearfix">
                                <a target="_blank" href="/show-{{$v->article_id}}.html">
                                    <img src="{{$v->img}}" alt="{{$v->title}}">
                                </a>
                                <div class="scZxListConR">
                                    <div class="scZxListConRTop">
                                        <a target="_blank" href="/show-{{$v->article_id}}.html">
                                            <h2>
                                            @if(!empty($v->title))
                                                {{$v->title}}
                                            @endif</h2>
                                            <p> 
                                            @if(!empty($v->content))
                                                {{$v->content}}
                                            @endif
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>

                        

                    </div><div class="page-box">
                            <div class="digg">{{$article->links()}}</div>
                        </div>
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
								<input type="text" placeholder="请输入您的电话" onblur="checkIsTel()" name="tel" id="txtUserTel" size="5" maxlength="11">
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
								<input id="btnSubmit" type="button" class="lfMflfBtn" value="提交申请" onclick="check()"  />
							</form>
                        </div>
					</div>
					



					<div class="right_pi_wrap img_div">
						@foreach($advert as $item)
							@if($item->picture_place == 2)
							<a href="{{$item->picture_url}}" target="_blank"><img src="{{$item->picture_src}}" alt="广告3"></a>
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
								<li>{{$item->list_order}}</li>
							</ul>
							<ul style="float:left;width: 80px;">
								<li>{{date("Y-m-d",$item->course_time)}}</li>
							</ul>
							<ul style="float:left;width: 100px;">
								<li><a href="http://wpa.qq.com/msgrd?v=3&uin=104044302&site=qq&menu=yes" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
							</ul>
							@endforeach
                        </div>
                    </div>
                     
                    
                </div>
            </div>
        </div>

        <script type="text/javascript" src="/static/templates/main/js/html5_20170105.js"></script>
        <script src="/static/templates/main/js/php_new.js"></script>
{{--底部--}}
@include('home.layouts.footer')

{{--公共js--}}
@include('home.layouts.script')


<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?19b972123a261b3be88cf2d47bd66ccb";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();

    function show($ids) {
        if ($ids > 0) {
            window.location = "/show-" + $ids;
        }
    }
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
        if (s.length < 2 | s.length > 10) {
            $('#Tips').html('用户名长度为2-10！')
            return false
        }
        if (!patrn.exec(s)) {
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
        if (patrn.exec(s)) {
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
        if (parseInt(id) <= 0) {
            $('#Tips').html('上课地址不能为空！')
            return false;
        }
        $('#Tips').html('')
        return true;
    }

    function checkCourse() {
        var id = $('#txtCourse').val();
        if (parseInt(id) <= 0) {
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