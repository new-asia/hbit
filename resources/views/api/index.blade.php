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
  <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" style="width: 375px;height:40%">
    <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-375px, 0px, 0px);">
      <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2" style="width: 375px;">
        <img src="/upload/img/201807041449210059.png" alt="轮播" class="img-responsive">
      </div>
      <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 375px;">
        <img src="/upload/img/201810091621479219.jpg" alt="轮播" class="img-responsive">
      </div>
      <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 375px;">
        <img src="/upload/img/201812100834246382.jpg" alt="轮播" class="img-responsive">
      </div>
      <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 375px;">
        <img src="/upload/img/201807041449210059.png" alt="轮播" class="img-responsive">
      </div>
      <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 375px;">
        <img src="/upload/img/201810091621479219.jpg" alt="轮播" class="img-responsive">
      </div>
    </div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
  </div>

  <div class="type">
    <a href="/java.blade.php">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>Java大数据</p>
      </div>
    </a>
    <a href="/php.blade.php">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>PHP全栈</p>
      </div>
    </a>
    <a href="/html5.blade.php">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>html全栈</p>
      </div>
    </a>
    <a href="tencent://message/?Menu=yes&amp;uin=800856702">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>云计算</p>
      </div>
    </a>
    <a href="tencent://message/?Menu=yes&amp;uin=800856702">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>人工智能</p>
      </div>
    </a>
    <a href="tencent://message/?Menu=yes&amp;uin=800856702">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>Python课程</p>
      </div>
    </a>
    <a href="tencent://message/?Menu=yes&amp;uin=800856702">
      <div class="type-item">
        <img src="/templates/mobile/src/images/type.png" alt="">
        <p>UI/UE设计</p>
      </div>
    </a>
    <a href="tencent://message/?Menu=yes&amp;uin=800856702">
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
      <a href="/EmploymentInformation.blade.php">更多信息 &gt;&gt;</a>
    </div>
    <div class="content">
      <div class="swiper-container-list swiper-container-horizontal">
        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);height:60%">
          <div class="swiper-slide swiper-slide-active" style="width: 355px;">
            <div class="work-contenr">
              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：</span><em></em></p>
                  <p><span>月薪：</span> <strong>25000</strong></p>
                  <p><span>姓名：</span><em>王**</em></p>
                  <p><span>班级：</span><em>java大数据</em></p>
                </div>
              </a>
              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：</span><em></em></p>
                  <p><span>月薪：</span> <strong>15000</strong></p>
                  <p><span>姓名：</span><em>石**</em></p>
                  <p><span>班级：</span><em>PHP全栈</em></p>
                </div>
              </a>
              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：</span><em></em></p>
                  <p><span>月薪：</span> <strong>20000</strong></p>
                  <p><span>姓名：</span><em>王**月</em></p>
                  <p><span>班级：</span><em>java大数据</em></p>
                </div>
              </a>
              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：</span><em></em></p>
                  <p><span>月薪：</span> <strong>18000</strong></p>
                  <p><span>姓名：</span><em>秦**</em></p>
                  <p><span>班级：</span><em>java大数据</em></p>
                </div>
              </a>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-next" style="width: 355px;">
            <div class="work-contenr">
              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：</span><em></em></p>
                  <p><span>月薪：</span> <strong>16000</strong></p>
                  <p><span>姓名：</span><em>苏**</em></p>
                  <p><span>班级：</span><em>java大数据</em></p>
                </div>
              </a>
              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：</span><em></em></p>
                  <p><span>月薪：</span> <strong>15000</strong></p>
                  <p><span>姓名：</span><em>李**</em></p>
                  <p><span>班级：</span><em>java大数据</em></p>
                </div>
              </a>
              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：</span><em></em></p>
                  <p><span>月薪：</span> <strong>26000</strong></p>
                  <p><span>姓名：</span><em>张**</em></p>
                  <p><span>班级：</span><em>java大数据</em></p>
                </div>
              </a>
              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：</span><em></em></p>
                  <p><span>月薪：</span> <strong>17000</strong></p>
                  <p><span>姓名：</span><em>乔**</em></p>
                  <p><span>班级：</span><em>PHP全栈</em></p>
                </div>
              </a>
            </div>
          </div>
          <div class="swiper-slide" style="width: 355px;">
            <div class="work-contenr">
              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：</span><em></em></p>
                  <p><span>月薪：</span> <strong>15000</strong></p>
                  <p><span>姓名：</span><em>董**</em></p>
                  <p><span>班级：</span><em>java大数据</em></p>
                </div>
              </a>
              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：</span><em></em></p>
                  <p><span>月薪：</span> <strong>17000</strong></p>
                  <p><span>姓名：</span><em>赵**</em></p>
                  <p><span>班级：</span><em>java大数据</em></p>
                </div>
              </a>

              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：</span><em></em></p>
                  <p><span>月薪：</span> <strong>16000</strong></p>
                  <p><span>姓名：</span><em>朱**</em></p>
                  <p><span>班级：</span><em>java大数据</em></p>
                </div>
              </a>
              <a href="#">
                <div class="item">
                  <p style="color: black;"><span>入职企业：</span><em></em></p>
                  <p><span>月薪：</span> <strong>15000</strong></p>
                  <p><span>姓名：</span><em>王**</em></p>
                  <p><span>班级：</span><em>java大数据</em></p>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
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
          <div class="swiper-slide swiper-slide-active" style="width: 355px;">
            <div class="student-content">
              <a href="/StudentsStory/show-4.blade.php">
                <div class="item">
                  <img src="/upload/img/201808301609094314.jpg" alt="" style="width: auto;height:140px;max-width: 100%;max-height: 100%;" class="img-responsive">
                  <p>姓名：王**</p>
                  <p>班级：java大数据</p>
                  <p>月薪：25000</p>
                </div>
              </a>
              <a href="/StudentsStory/show-19.html">
                <div class="item">
                  <img src="/upload/img/201809171656317575.jpg" alt="" style="width: auto;height:140px;max-width: 100%;max-height: 100%;" class="img-responsive">
                  <p>姓名：石**</p>
                  <p>班级：PHP全栈</p>
                  <p>月薪：15000</p>
                </div>
              </a>
              <a href="/StudentsStory/show-18.html">
                <div class="item">
                  <img src="/upload/img/201809171658434753.jpg" alt="" style="width: auto;height:140px;max-width: 100%;max-height: 100%;" class="img-responsive">
                  <p>姓名：王**月</p>
                  <p>班级：java大数据</p>
                  <p>月薪：20000</p>
                </div>
              </a>
              <a href="/StudentsStory/show-16.html">
                <div class="item">
                  <img src="/upload/img/201805281545564876.jpg" alt="" style="width: auto;height:140px;max-width: 100%;max-height: 100%;" class="img-responsive">
                  <p>姓名：秦**</p>
                  <p>班级：java大数据</p>
                  <p>月薪：18000</p>
                </div>
              </a>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-next" style="width: 355px;">
            <div class="student-content">
              <a href="/StudentsStory/show-15.html">
                <div class="item">
                  <img src="/upload/img/201805281547452845.jpg" alt="" style="width: auto;height:140px;max-width: 100%;max-height: 100%;" class="img-responsive">
                  <p>姓名：苏**</p>
                  <p>班级：java大数据</p>
                  <p>月薪：16000</p>
                </div>
              </a>
              <a href="/StudentsStory/show-22.html">
                <div class="item">
                  <img src="/upload/img/201805281553397981.jpg" alt="" style="width: auto;height:140px;max-width: 100%;max-height: 100%;" class="img-responsive">
                  <p>姓名：李**</p>
                  <p>班级：java大数据</p>
                  <p>月薪：15000</p>
                </div>
              </a>
              <a href="/StudentsStory/show-14.html">
                <div class="item">
                  <img src="/upload/img/201809171657333191.jpg" alt="" style="width: auto;height:140px;max-width: 100%;max-height: 100%;" class="img-responsive">
                  <p>姓名：张**</p>
                  <p>班级：java大数据</p>
                  <p>月薪：26000</p>
                </div>
              </a>
              <a href="/StudentsStory/show-26.html">
                <div class="item">
                  <img src="/upload/img/201809171659460310.jpg" alt="" style="width: auto;height:140px;max-width: 100%;max-height: 100%;" class="img-responsive">
                  <p>姓名：乔**</p>
                  <p>班级：PHP全栈</p>
                  <p>月薪：17000</p>
                </div>
              </a>
            </div>
          </div>
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
        <span class="active nav-bar-item" href="JavaEE">Java大数据<em></em></span>
        <span class="nav-bar-item" href="php">PHP全栈<em></em></span>
        <span class="nav-bar-item" href="html">html全栈<em></em></span>
      </div>


      <div class="swiper-container-list-0 swiper-container-horizontal" id="JavaEE" style="display: block;">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);height:350px;">
          <div class="swiper-slide swiper-slide-active" style="width: 355px;">
            <div class="it-content">
              <a href="/news/show-6457.html">
                <div class="item">
                  <img src="/upload/img/201904121348270277.jpg" alt="" class="img-responsive">
                  <p>Java学习之final关键字详细解析</p>
                </div>
              </a>
              <a href="/news/show-6455.html">
                <div class="item">
                  <img src="/upload/img/201904120912003743.jpg" alt="" class="img-responsive">
                  <p>2019年Java面试试题之跳表</p>
                </div>
              </a>
              <a href="/news/show-6454.html">
                <div class="item">
                  <img src="/upload/img/201904120859213753.jpg" alt="" class="img-responsive">
                  <p>Java学习之构造方法汇总</p>
                </div>
              </a>
              <a href="/news/show-6451.html">
                <div class="item">
                  <img src="/upload/img/201904110855570364.jpg" alt="" class="img-responsive">
                  <p>Java学习小技巧之利用注解技术检查空指针</p>
                </div>
              </a>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-next" style="">
            <div class="it-content">
              <a href="/news/show-6447.html">
                <div class="item">
                  <img src="/upload/img/201904100840080648.png" alt="" class="img-responsive">
                  <p>2019年最新Java常用注释详解</p>
                </div>
              </a>
              <a href="/news/show-6445.html">
                <div class="item">
                  <img src="/upload/img/201904090950492298.jpg" alt="" class="img-responsive">
                  <p>一招巧妙解决Java虚拟机中OMM问题</p>
                </div>
              </a>
              <a href="/news/show-6444.html">
                <div class="item">
                  <img src="/upload/img/201904090917212044.jpg" alt="" class="img-responsive">
                  <p>Java8新特性引用详细解析</p>
                </div>
              </a>
              <a href="/news/show-6440.html">
                <div class="item">
                  <img src="/upload/img/201904080847573988.jpg" alt="" class="img-responsive">
                  <p>Java开发中Struts控制器详细解析</p>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-pagination-0 swiper-pagination-bullets">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
          <span class="swiper-pagination-bullet"></span>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>


      <div class="swiper-container-list-1 swiper-container-horizontal" id="php" style="display: none;">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);height:350px;">
          <div class="swiper-slide swiper-slide-active" style="width: 355px;">
            <div class="it-content">
              <a href="/news/show-6449.html">
                <div class="item">
                  <img src="/upload/img/201904100920455589.jpg" alt="" class="img-responsive">
                  <p>PHP面向对象详细解析</p>
                </div>
              </a>
              <a href="/news/show-6438.html">
                <div class="item">
                  <img src="/upload/img/201904041417221312.png" alt="" class="img-responsive">
                  <p>PHP通过Laravel巧妙实现超大文件上传</p>
                </div>
              </a>
              <a href="/news/show-6433.html">
                <div class="item">
                  <img src="/upload/img/201904020926518539.jpg" alt="" class="img-responsive">
                  <p>PHP开发之 strpos stripos strrpos strripos的区别</p>
                </div>
              </a>
              <a href="/news/show-6430.html">
                <div class="item">
                  <img src="/upload/img/201904011402340804.jpg" alt="" class="img-responsive">
                  <p>2019年最新PHP访问数据缓存处理详细解析</p>
                </div>
              </a>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-next" style="">
            <div class="it-content">
              <a href="/news/show-6403.html">
                <div class="item">
                  <img src="/upload/img/201903210832518881.jpg" alt="" class="img-responsive">
                  <p>2019年最新PHP工厂模式使用方法详解</p>
                </div>
              </a>
              <a href="/news/show-6400.html">
                <div class="item">
                  <img src="/upload/img/201903201001368431.jpg" alt="" class="img-responsive">
                  <p>PHP抽象类abstract详细解析</p>
                </div>
              </a>
              <a href="/news/show-6385.html">
                <div class="item">
                  <img src="/upload/img/201903130924453168.jpg" alt="" class="img-responsive">
                  <p>PHP环境部署伪静态教程</p>
                </div>
              </a>
              <a href="/news/show-6382.html">
                <div class="item">
                  <img src="/upload/img/201903121601038598.jpg" alt="" class="img-responsive">
                  <p>php中TS和NTS都有哪些区别？</p>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-pagination-1 swiper-pagination-bullets">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
          <span class="swiper-pagination-bullet"></span>
        </div>
        <div class="swiper-pagination-1 swiper-pagination-bullets">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
          <span class="swiper-pagination-bullet"></span>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>


      <div class="swiper-container-list-2 swiper-container-horizontal" id="html" style="display: none;">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); ">
          <div class="swiper-slide swiper-slide-active" style="width: 355px;">
            <div class="it-content">
              <a href="/news/show-4289.html">
                <div class="item">
                  <img src="/upload/img/201812120954471870.jpg" alt="" class="img-responsive">
                  <p>HTML5中巧妙的利用canvas将网页元素生成图片并成功的保存到本地</p>
                </div>
              </a>
              <a href="/news/show-4262.html">
                <div class="item">
                  <img src="/upload/img/201812030845230864.jpg" alt="" class="img-responsive">
                  <p>前端HTML框架(frameset)用法详细解析</p>
                </div>
              </a>
              <a href="/news/show-4251.html">
                <div class="item">
                  <img src="/upload/img/201811271537479233.jpg" alt="" class="img-responsive">
                  <p>for循环+setTimeout的延迟操作详解</p>
                </div>
              </a>
              <a href="/news/show-4248.html">
                <div class="item">
                  <img src="/upload/img/201811261023149702.jpg" alt="" class="img-responsive">
                  <p>HTML5 Web储存实例解析</p>
                </div>
              </a>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-next" style="">
            <div class="it-content">
              <a href="/news/show-4243.html">
                <div class="item">
                  <img src="/upload/img/201811211404557867.jpg" alt="" class="img-responsive">
                  <p>HTML5中webSocket方法详细解析</p>
                </div>
              </a>
              <a href="/news/show-4242.html">
                <div class="item">
                  <img src="/upload/img/201811211003327281.png" alt="" class="img-responsive">
                  <p>WebSocket API详细解析</p>
                </div>
              </a>
              <a href="/news/show-2218.html">
                <div class="item">
                  <img src="/upload/img/201810221121188300.jpg" alt="" class="img-responsive">
                  <p>Web使用技巧—html高亮显示源码示例</p>
                </div>
              </a>
              <a href="/news/show-67.html">
                <div class="item">
                  <img src="/upload/img/201805201107540060.jpg" alt="" class="img-responsive">
                  <p>最适合HTML5的四类人</p>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-pagination-2 swiper-pagination-bullets">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
          <span class="swiper-pagination-bullet"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
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