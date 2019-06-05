<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <title>鸿博IT教育-匠心打造,品质铸就</title>
  <meta name="keywords" content="Java培训班,PHP培训班,Html5培训班,移动开发培训,大数据培训,IT培训">
  <meta name="description" content="鸿博IT教育，具有良好的学术学习氛围，最具前沿的互联网高新技术。 专注互联网领域技术10余年，全国知名十佳教育培训机构，IT职业教育领军品牌。">
  <link rel="stylesheet" href="https://at.alicdn.com/t/font_689149_dby6e0fcds.css">
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
  <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" style="width: 100%;height:40%">
    <div id="bd" class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
      @foreach($rotation_chart as $items)
        <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2" style="width: 100%;">
          <img src="{{$items->picture_src}}" alt="轮播" class="img-responsive">
        </div>
      @endforeach
    </div>
    <script>
        window.onload = function() {
            /*轮播图*/
            //隐藏第一张以外的图片
            $('#bd>div:gt(0)').hide();
            var n = 0;
            var len = $('#bd div').length; //获取的是li的长度 数量
            var t;
            function play() {
                $('#bd div').eq(n).show().siblings().hide();
            }
            function autoPlay() {
                //自动播放
                t = setInterval(function() {
                    //alert(1)
                    n++;
                    if (n >= len) {
                        n = 0;
                    }
                    play();
                }, 2000)
            }
            //alert(len)
            autoPlay(); //调用自动播放函数
        }
    </script>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
  </div>

  <div class="type">
    <a href="/java.html">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>Java大数据</p>
      </div>
    </a>
    <a href="/php.html">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>PHP全栈</p>
      </div>
    </a>
    <a href="/html5.html">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>html全栈</p>
      </div>
    </a>
    <a href="tencent://message/?Menu=yes&amp;uin=104044302">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>云计算</p>
      </div>
    </a>
    <a href="tencent://message/?Menu=yes&amp;uin=104044302">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>人工智能</p>
      </div>
    </a>
    <a href="/python.html">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>Python课程</p>
      </div>
    </a>
    <a href="tencent://message/?Menu=yes&amp;uin=104044302">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>UI/UE设计</p>
      </div>
    </a>
    <a href="tencent://message/?Menu=yes&amp;uin=104044302">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>更多资源</p>
      </div>
    </a>
  </div>

  <div class="fast-enter">
    <a href="http://q.url.cn/ABULOl?_type=wpa&amp;qidian=true"><img src="/upload/img/201807041037584805.png" alt="广告1" class="img-responsive"></a>
  </div>

  <div class="content-module">
    <div class="header">
      <img src="/templates/mobile/src/icons/header_icon.png" class="header-icon">
      <strong>就业信息</strong>
      <a href="/EmploymentInformation">更多信息 &gt;&gt;</a>
    </div>
    <div class="content">
      <div class="swiper-container-list swiper-container-horizontal">
        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);height:60%">
        <!--循环开始-->
        @foreach ($student_list as $student)
        <div class="swiper-slide swiper-slide-next" style="width: 355px;">
            <div class="work-contenr">
            @foreach ($student as $item)
              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：{{$item->company}}</span><em></em></p>
                  <p><span>月薪：</span> <strong>{{$item->pay}}</strong></p>
                  <p><span>姓名：</span><em>{{$item->name}}</em></p>
                  <p><span>班级：</span><em>{{$item->class_name}}</em></p>
                </div>
              </a>
            @endforeach  
            </div>
          </div>
        @endforeach
          
          
        </div>
        <div class="swiper-pagination swiper-pagination-bullets">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
          <span class="swiper-pagination-bullet"></span>
          <span class="swiper-pagination-bullet"></span>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
    </div>
  </div>

  <div class="content-module">
    <div class="header">
      <img src="/templates/mobile/src/icons/header_icon.png" class="header-icon">
      <strong>学员生活</strong>
      <a href="/StudentsStory.blade.php">更多信息 &gt;&gt;</a>
    </div>
    <div class="content">
      <div class="swiper-container-list swiper-container-horizontal">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;height:80%">
        <!--循环开始-->
        @foreach ($student_list as $student)
            <div class="swiper-slide swiper-slide-active" style="width: 355px;">
            <div class="student-content">

            @foreach ($student as $item)
              <a href="/StudentsStory/show-4.blade.php">
                <div class="item">
                  <img src="{{$item->img}}" alt="" style="width: auto;height:140px;max-width: 100%;max-height: 100%;" class="img-responsive">
                  <p>姓名：{{$item->name}}</p>
                  <p>班级：{{$item->class_name}}</p>
                  <p>月薪：{{$item->pay}}</p>
                </div>
              </a>
              @endforeach
              
            </div>
          </div>
        @endforeach
          
          <!--循环结束-->
        </div>
        <div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
    </div>
  </div>

  <div class="fast-enter">
    <a href="http://q.url.cn/ABULOl?_type=wpa&amp;qidian=true"><img src="/upload/img/201808131712170056.jpg" alt="广告1" class="img-responsive"></a>
  </div>

  <div class="content-module">
    <div class="header">
      <img src="/templates/mobile/src/icons/header_icon.png" class="header-icon">
      <strong>IT 资讯</strong>
      <a href="/news.html">更多信息 &gt;&gt;</a>
    </div>
    <div class="content">
      <div class="nav-bar">
      @foreach ($article_list as $k=>$item)
        @if ($k == 0)
            <span class="active nav-bar-item" href="{{$item->c_name}}">{{$item->c_name}}<em></em></span>
        @else
            <span class="nav-bar-item" href="{{$item->c_name}}">{{$item->c_name}}<em></em></span>
        @endif            
            
      @endforeach
      </div>

      @foreach ($article_list as $k=>$item)
      
      <div class="swiper-container-list-0 swiper-container-horizontal" id="{{$item->c_name}}" style="display: {{$item->display}};">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);height:350px;">

        @foreach ($item->list as $v)
          <div class="swiper-slide swiper-slide-active" style="width: 355px;">
            <div class="it-content">
            @foreach ($v as $val)
              <a href="/show-{{$val->article_id}}.html">
                <div class="item">
                  <img src="{{$val->img}}" alt="" class="img-responsive">
                  <p>{{$val->title}}</p>
                </div>
              </a>
              @endforeach  
            </div>
          </div>
        @endforeach
        </div>
        <div class="swiper-pagination-0 swiper-pagination-bullets">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
          <span class="swiper-pagination-bullet"></span>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
      @endforeach

     
    </div>
  </div>

  <div class="content-module">
    <div class="header">
      <img src="/templates/mobile/src/icons/header_icon.png" class="header-icon">
      <strong>校园环境</strong>

    </div>
    <div class="content">
      <div class="swiper-container-list swiper-container-horizontal">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);height:350px;">
          <div class="swiper-slide swiper-slide-active" style="width: 355px;">
            <div>
              <a href="#">
                <img src="/upload/img/201901041528116538.jpg" alt="" class="img-responsive">
              </a>
              <div class="school-content">
                <a href="#">
                  <img src="/upload/img/201809110955202566.jpg" alt="" class="img-responsive">
                </a>
                <a href="#">
                  <img src="/upload/img/201809110956586228.jpg" alt="" class="img-responsive">
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-next" style="width: 355px;">
            <div>
              <a href="">
                <img src="/upload/img/201802051948025886.jpg" alt="" class="img-responsive">
              </a>
              <div class="school-content">
                <a href="#">
                  <img src="/upload/img/201809110958477868.jpg" alt="" class="img-responsive">
                </a>
                <a href="#">
                  <img src="/upload/img/201802051948179733.jpg" alt="" class="img-responsive">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
    </div>
  </div>

  <div class="content-module">
    <div class="header" style="position: relative;height: 40px;line-height: 40px;">
      <strong style="float: left;">在鸿博，他们有话说</strong>
      <strong class="header-icon" style="position: absolute;background-color: red;height: 5px;border-radius: 5px;width: 80px;bottom: 0;left: 0;"></strong>
      <a href="/Campus.blade.php" style="float: right;">更多信息 &gt;&gt;</a>
    </div>
    <div class="content">
      <div class="knowledge-content">
        <a href="/Campus/show-1063.html">
          <div class="item">
            <span>你想成为“扶摇式女主”吗？</span>
            <img src="/upload/img/201807051107536358.jpg" alt="" class="img-responsive">
          </div>
        </a>
        <a href="/Campus/show-1062.html">
          <div class="item">
            <span>谢谢这些校长的毕业致辞把我从毕业季的伤感中拉了出来！</span>
            <img src="/upload/img/201807051057055548.jpg" alt="" class="img-responsive">
          </div>
        </a>
        <a href="/Campus/show-1061.html">
          <div class="item">
            <span>鸿博教育给您讲解谷歌涂鸦的由来</span>
            <img src="/upload/img/201807031612306876.jpg" alt="" class="img-responsive">
          </div>
        </a>
        <a href="/Campus/show-1060.html">
          <div class="item">
            <span>“冲天一博气如虹,踏浪凌波入海中”鸿博教育祝高考学子金榜题名</span>
            <img src="/upload/img/201806281412153312.jpg" alt="" class="img-responsive">
          </div>
        </a>
      </div>
    </div>
  </div>


  <div class="page-footer">
    <img src="/templates/mobile/src/images/qrcode.jpg" alt="" class="img-responsive">
    <p style="margin-top: 5px;font-weight: bold;">关注鸿博教育</p>
    <p>版权所有 2006 - 2018 北京鸿博互联软件有限公司</p>
    <p>地址：北京市海淀区苏家坨54号</p>
  </div>


  {{--tabBar--}}
  @include('api.layouts.tabBar')


  <script type="text/javascript" src="/templates/mobile/plugin/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="/templates/mobile/plugin/bootstrap-3.3.7/js/bootstrap.js"></script>
  <script type="text/javascript" src="/templates/mobile/plugin/swiper/swiper-4.3.3.min.js"></script>
  <script type="text/javascript" src="/templates/mobile/js/main.js"></script>


</body>

</html>