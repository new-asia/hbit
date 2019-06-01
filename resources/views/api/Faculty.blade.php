<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>所有类别 - 鸿博IT教育-匠心打造,品质铸就</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/templates/mobile/css/font_689149_dby6e0fcds.css">
    <link rel="stylesheet" href="/templates/mobile/plugin/bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="/templates/mobile/css/style1.css">
    <script type="text/javascript" src="/templates/mobile/js/newjquery.js"></script>

   
</head>

<body>
{{--nav--}}
@include('api.layouts.nav')


  <!-- 头部  -->

    <div class="fast-enter">
        <div class="swiper-slide">
            <img data-cfsrc="./upload/img/201808131712170056.jpg" alt="" class="img-responsive" src="./upload/img/201808131712170056.jpg">
        </div>
    </div>

    <div class="faculty-list">
    @foreach($teacher as $item)
          
    
        <div class="cell">
            <div class="img" style="height: 200px;overflow: hidden;">
                <a href="/Faculty/show-3.html"><img data-cfsrc="{{$item->teacher_portrait_src}}" class="img-responsive" src="{{$item->teacher_portrait_src}}"></a>
            </div>
            <div class="info">
                <a href="/Faculty/show-3.html">
                    <p><strong class="title">{{$item->name}}</strong></p>
                    <p><span class="sub">{{$item->position_name}}</span></p>
                    <p><span class="des" style="font-size: 12px;">擅长领域：{{$item->field}}</span></p>
                    <p><span class="des" style="font-size: 12px;">工作年限：{{$item->obtain_employment_time}}年</span></p>
                </a>
                <p><span class="des" style="font-size: 12px;">授课风格：{{$item->teacher_style}}</span></p>
            </div>
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