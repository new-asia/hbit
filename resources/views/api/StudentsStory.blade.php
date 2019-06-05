<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>所有类别 - 鸿博IT教育-匠心打造,品质铸就</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_689149_dby6e0fcds.css">
    <link rel="stylesheet" href="./templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="./templates/mobile/plugin/swiper/swiper-4.3.3.min.css">
    <link rel="stylesheet" href="./templates/mobile/css/style1.css">
    <script src="https://hm.baidu.com/hm.js?19b972123a261b3be88cf2d47bd66ccb"></script>

    <!--[if lt IE 9]>
    <script src="./templates/mobile/plugin/bootstrap-3.3.7/js/html5shiv.js"></script>
    <script src="./templates/mobile/plugin/bootstrap-3.3.7/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>


{{--nav--}}
@include('api.layouts.nav')


    <div class="fast-enter" style="margin-top:50px;">
        <div class="swiper-slide" style="height:25%;">
            <img data-cfsrc="./upload/img/201808131712170056.jpg" alt="" class="img-responsive" src="./upload/img/201808131712170056.jpg">
        </div>
    </div>
    <div class="student-list">
        @foreach($student as $v)
        <div class="cell">
            <a href="/StudentsStory/show-4.html">
                <div class="img">
                    <img data-cfsrc="{{$v->img}}" class="img-responsive" src="./upload/img/201808301609094314.jpg">
                </div>
                <div class="info">
                    <p>
                        <strong class="title">{{$v->name}}</strong>
                        <span class="sub">班级：{{$v->class_name}}</span>
                        <span>月薪：{{$v->pay}}</span>
                    </p>
                    <p><span class="des">{!! $v->testimonials !!}</span></p>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    {{--tabBar--}}
@include('api.layouts.tabBar')

    <script type="text/javascript" src="./templates/mobile/plugin/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./templates/mobile/plugin/bootstrap-3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript" src="./templates/mobile/plugin/swiper/swiper-4.3.3.min.js"></script>
    <script type="text/javascript" src="./templates/mobile/js/main.js"></script>

</body>

</html>