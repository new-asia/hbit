<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>Python基础学习之多任务-协程详细讲解 - Python课程 - 鸿博IT教育-匠心打造,品质铸就</title>
    <meta name="keywords" content="Python,Python基础,Python学习,Python协程,Python多任务" />
    <meta name="description" content="学习Python的小伙伴对于他的多任务一定不会陌生，那么多任务中的协程又有几个小伙伴们知道呢？在本文将重点剖析协程这个知识点......" />
    <link rel="stylesheet" type="text/css" href="/templates/mobile/css/newsstyle.css" />
    <link rel="stylesheet" type="text/css" href="/templates/mobile/css/style.css" />
    <script type="text/javascript" charset="utf-8" src="/templates/mobile/js/zepto.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/templates/mobile/js/weui.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/templates/mobile/js/common.js"></script>
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_689149_dby6e0fcds.css">
    <link rel="stylesheet" href="/templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="/templates/mobile/plugin/swiper/swiper-4.3.3.min.css">
    <script src="/templates/mobile/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/templates/mobile/css/style1.css">
    <link rel="stylesheet" href="{{URL::asset('layui-v2.4.5/layui/css/layui.css')}}">
</head>

<body ontouchstart>
<div class="page">


    {{--nav--}}
    @include('api.layouts.nav')

    <div class="page__bd">

        <div class="weui-panel weui-panel_access" style="margin-top:10px;">
            <div class="weui-panel__bd">
                <div class="meta">
                    <h1 class="meta-tit" align="center">{{$article->title}}</h1>
                    <p class="meta-info">
                        <span><i class="iconfont icon-date"></i>{{date("Y-m-d H:i:s",$article->add_time)}}</span>
                        <span><i class="iconfont icon-view"></i>
                                <script type="text/javascript" src="/tools/submit_ajax.ashx?action=view_article_click&channel_id=1&id=6453&click=1"></script>次浏览
                            </span>
                        <span>关键词：{{$article->keywords}}</span>
                    </p>
                </div>
                <div class="entry">
                    {!!$article->content!!}
                </div>
            </div>
        </div>
        <form style="border: 1px solid #333;border-radius: 10px;padding: 5px;" id="form" action="/infor-{{$article->article_id}}-{{@$cid?$cid:178}}.html" method="post">

            <div class="layui-upload-list" style="margin-top:1px;">
                <img style="float: left;width: 100px;height: 100px;" class="layui-circle layui-upload-img" id="demo" src="{{$referrer['headphoto']}}">
                <div style="line-height: 30px;float: left;margin-left: 20px;margin-top: 20px;">
                        <span>
                            <span style="padding-left: 6px;">&nbsp;&nbsp;推荐人：</span>
                        <input type="text" style="border: none;" class="hiddens" name="name" value="{{$referrer['name']}}">
                        </span>
                    {{ csrf_field() }}
                    <br />
                    <span>
                            <span style="">联系电话：</span>
                        <input type="text" style="border: none;" class="hiddens" name="tel" value="{{$referrer['tel']}}">
                        </span>
                    <input type="hidden"  name="cid" value="{{$article->article_id}}">
                </div>
                <div style="clear: both"></div>
            </div>
            <div class="dis" style="display: none;">
                <div class="layui-upload">
                    <button type="button" class="layui-btn" id="test1" style="">上传头像</button>
                    <div class="layui-upload-list">
                        <input type="hidden" name="w_picture" vaule="" id="file">
                        <img class="layui-upload-img" id="demo1" width="100">
                        <input type="hidden" name="headphoto" value="" id="headphoto">
                        <p id="demoText"></p>
                    </div>

                </div>
            </div>

            <div class="layui-upload-list">
                @foreach($photos as $k => $photo)
                    <img class="layui-upload-img" id="cendemo" width="100" src="{{$photos[$k]}}">
                @endforeach
            </div>
            <input type="hidden" name="is_" value="1" id="is_">
            <div class="dis" style="display: none;">
                <div class="layui-upload">
                    <button type="button" class="layui-btn" id="test2">点击图片上传</button>

                    {{--当前图片：--}}
                    <div class="layui-upload-list" id="demo2"></div>

                </div>
            </div>
            <div style="line-height: 30px">
                <input type="button"  	class="layui-btn layui-btn-normal" value="编辑" id="but">
                <input style="display: none;" class="layui-btn layui-btn-warm" type="submit" value="提交" id="sub">
                
                <button style="display: none;" class="layui-btn layui-btn-warm" id="submit_btn">全部替换</button>
            </div>
            <div id="image_preview"></div>
        </form>
        <div class="weui-panel weui-panel_access">
            <div class="weui-panel__hd">相关资讯</div>
            <div class="weui-panel__bd">
                <div class="txt-list">
                    <ul>
                        @foreach($article_list as $item)
                            <li>
                                <a href="/show-{{$item->article_id}}.html">
                                    <i class="date">{{date("m-d",$item->add_time)}}</i>
                                    <span class="text">{{$item->title}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>


        {{--tabBar--}}
        @include('api.layouts.tabBar')

    </div>

</div>


<script type="text/javascript" src="/templates/mobile/plugin/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/templates/mobile/plugin/bootstrap-3.3.7/js/bootstrap.js"></script>
<script type="text/javascript" src="/templates/mobile/plugin/swiper/swiper-4.3.3.min.js"></script>
<script type="text/javascript" src="/templates/mobile/js/main.js"></script>
</body>

</html>
<script src="{{URL::asset('layui-v2.4.5/layui/layui.js')}}"></script>
<script>
    $("#but").click(function(){
        //console.log();
        $(".hiddens").attr('style','border:1px solid #ccc;');
        $(".dis").show();
        $("#sub").show();
        $("#submit_btn").show();
        $("#but").attr('style','display: none');
    });
    $("#sub").click(function(){
        $(".hiddens").attr('style','border: none;');
        $(".dis").attr('style','display: none;');
        $("#but").attr('style','');
    });
    submit_btn.onclick = function(e) {
        $("#is_").val("2");
        console.log('submit_btn')
    }
    layui.use('upload', function(){
        var $ = layui.jquery
            ,upload = layui.upload;

        //普通图片上传
        var uploadInst = upload.render({
            elem: '#test1'
            ,url: '{{url('/uploads')}}'
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $('#demo1').attr('src', result); //图片链接（base64）headphoto
                });
            }
            ,done: function(res){
                //如果上传失败
                if(res.code > 0){
                    //console.log(res.code);
                    return layer.msg('图片过大或格式不正确，上传失败');

                }else{
                    $("#file").val(res.url);
                }
                //console.log(res.url);
                $('#demo1').attr('src', res.url);
                $('#headphoto').val(res.url);
                //上传成功
            }
            ,error: function(){
                //演示失败状态，并实现重传
                var demoText = $('#demoText');
                demoText.html('<span style="color: #FF5722;">图片过大或格式不正确，上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function(){
                    uploadInst.upload();
                });
            }
        });
        upload.render({
            elem: '#test2'
            ,url: '/uploads'
            ,multiple: true
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    //$('#demo2').append('<img src="'+ result +'" alt="'+ file.name +'" class="layui-upload-img" width="100">')
                });
            }
            ,done: function(res){
                //上传完毕
                $('#demo2').append('<img src="'+res.url+'" class="layui-upload-img new-img-s"  width="100">')
                $('#demo2').append('<input type="hidden" name="photos[]" value="'+res.url+'">');
                $('.del').attr('name','pho');
            }
        });
    });
</script>
