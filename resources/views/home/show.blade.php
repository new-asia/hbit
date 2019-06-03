{{--头部-css--}}
@include('home.layouts.header')

<div class="content_nav">
    <div class="container">
        <span>当前位置：</span>
        <a href="/index.html">首页</a> &gt;
        <a href="/Campusall.html">IT资讯</a>
        &nbsp;&gt;&nbsp;<a href="/news/63-1.html">Java资讯</a> &gt;
        {{$article->title}}
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="left_container">
            <div class="left_content">
                <div class="title" style="padding: 0px 0 0px;">
                    <p style="font-size: 24px;">{{$article->title}}</p>
                    <div class="scZxDetailTopInfo">
                        <span>阅读数：{{$article->reading_num}}
                            <script type="text/javascript" src="/tools/submit_ajax.ashx?action=view_article_click&channel_id=1&id=6455&click=1"></script>
                        </span>
                        <span>时间：{{$article->add_time}}</span>
                        <span>关键词：{{$article->keywords}}</span>
                    </div>
                </div>

                <div class="menu">
                    {!! $article->content !!}
                </div>
                <div class="foo">
                    <div style="float: left;">
                        <strong>上一篇：</strong><a href="javascript:show({{$prev['article_id']}})">{{$prev['title']}}</a>
                    </div>

                    <div style="float: right;">
                        <strong>下一篇：</strong><a href="javascript:show({{$next['article_id']}})">{{$next['title']}}</a>
                    </div>
                </div>

                <div class="scZxDetailBt">
                    <div class="scZxDetailBtRight">
                        <div class="scZxshare">
                            <span>立即分享：</span>
                            <div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1526491950904"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
                            <script>
                                window._bd_share_config = {
                                    "common": {
                                        "bdSnsKey": {},
                                        "bdText": "",
                                        "bdMini": "2",
                                        "bdPic": "",
                                        "bdStyle": "0",
                                        "bdSize": "16"
                                    },
                                    "share": {}
                                };
                                with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
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
                        @endif
                    </ul>
                </div>

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
</div>

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