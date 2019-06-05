<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>许彩辉 - 金铭鼎IT教育-匠心打造,品质铸就</title>
    <meta name="keywords" content="" />
    <meta name="description" content="十二年从军经历，教育行业从业12年，对教育的本质有着深刻的理解。创办金铭鼎以来，坚持“认真严谨、用心负责”的核心理念，本着“科学发展，教育为本”的态度，不断前行。" />
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_689149_dby6e0fcds.css">
    <link rel="stylesheet" href="/templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="/templates/mobile/plugin/swiper/swiper-4.3.3.min.css">
    <link rel="stylesheet" href="/templates/mobile/css/style1.css">
    <!--[if lt IE 9]>
    <script src="/templates/mobile/plugin/bootstrap-3.3.7/js/html5shiv.js"></script>
    <script src="/templates/mobile/plugin/bootstrap-3.3.7/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/templates/mobile/css/csstyle.css" />
    <link rel="stylesheet" type="text/css" href="/templates/mobile/css/designer.css" />
    <script type="text/javascript" src="/templates/mobile/js/jquery.js"></script>
</head>

<body>

 
    {{--nav--}}
@include('api.layouts.nav')

    <div class="wapM">
        <div class="mContain dsContain">
            <div class="dMain">
                <div class="dTuijian">
                    <div class="dtPic fl" style="height: 150px;overflow: hidden;">
                        <img src ="{{$teacher->teacher_portrait_src}}">
                     </div>
                    <div class="dtDes">
                        <div class="dtDesTxt-2">
                            <div class="dt2Tit">
                                <p class="fl">{{$teacher->name}}</p>
                                <div class="clear"></div>
                            </div>
                            <p>{{$teacher->position_name}}</p>
                            <p>工作经验：<font>{{$teacher->obtain_employment_time}}</font>年</p>
                        </div>
                    </div>
                </div>
                <div class="dsDes">
                    <div class="dsDesLeft fl">擅长<br />领域</div>
                    <div class="dsDesRight fl">
                        <div class="dsrTxt">{{$teacher->field}}</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dsDes">
                    <div class="dsDesLeft fl">工作<br />经历</div>
                    <div class="dsDesRight fl">
                        <div class="dsrTxt">{{$teacher->experience}}</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dsDes">
                    <div class="dsDesLeft fl">授课<br />风格</div>
                    <div class="dsDesRight fl">
                        <div class="dsrTxt">{{$teacher->teacher_style}}</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dsZuoping">教师详情</div>
                <div class="dsZList">
                {{$teacher->details}}
                </div>
            </div>
        </div>
    </div>

    <div class="faculty-list">
    </div>

    {{--tabBar--}}
@include('api.layouts.tabBar')

    <script type="text/javascript" src="/templates/mobile/plugin/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/templates/mobile/plugin/bootstrap-3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript" src="/templates/mobile/plugin/swiper/swiper-4.3.3.min.js"></script>
    <script type="text/javascript" src="/templates/mobile/js/main.js"></script>
</body>

</html>