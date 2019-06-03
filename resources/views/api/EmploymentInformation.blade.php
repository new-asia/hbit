<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>最新学员就业信息 - 鸿博IT教育-匠心打造,品质铸就</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="./templates/mobile/css/font_689149_dby6e0fcds.css">
    <link rel="stylesheet" href="./templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="./templates/mobile/plugin/swiper/swiper-4.3.3.min.css">
    <link rel="stylesheet" href="./templates/mobile/css/style1.css">
    <!--[if lt IE 9]>
    <script src="./templates/mobile/plugin/bootstrap-3.3.7/js/html5shiv.js"></script>
    <script src="./templates/mobile/plugin/bootstrap-3.3.7/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>


{{--nav--}}
@include('api.layouts.nav')
    <div class="content-module">
        <div class="content">
            <div class="work-contenr">
                @foreach($employment as $item)
                    <a href="javascript:void(0)">
                        <div class="item">
                            <input type="hidden" value="{{$item->student_id}}">
                            <p style="color: black;overflow: hidden;height: 30px;"><span>入职企业：</span><em>{{$item->company}}</em></p>
                            <p><span>月薪:</span> <strong>{{$item->pay}}</strong></p>
                            <p><span>姓名：</span><em>{{$item->name}}</em></p>
                            <p><span>班级：</span><em>{{$item->class_name}}</em></p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{--tabBar--}}
@include('api.layouts.tabBar')

    <script type="text/javascript" src="./templates/mobile/plugin/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./templates/mobile/plugin/bootstrap-3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript" src="./templates/mobile/plugin/swiper/swiper-4.3.3.min.js"></script>
    <script type="text/javascript" src="./templates/mobile/js/main.js"></script>

</body>

</html>