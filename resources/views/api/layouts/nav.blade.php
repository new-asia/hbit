<link rel="stylesheet" href="./templates/mobile/css/common.css">
<script type="text/javascript" src="./templates/mobile/js/newjquery.js"></script>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="font-size: 14px;">
    <div class="navbar-header">
      <div class="mNav">
        <div class="mNav-close"><img src="/templates/mobile/images/mNav_10.png" width="19" height="19"></div>
        <ul style="margin-bottom: 00px;">
          <li><a href="/faculty"><img src="/templates/mobile/images/shizi.png"><span>师资</span></a></li>
          <li><a href="/EmploymentInformation"><img src="/templates/mobile/images/jiuye.png"><span>就业</span></a></li>
          <li><a href="/phonebd"><img src="/templates/mobile/images/baoming.png"><span>报名</span></a></li>
          <li><a href="/Campusall"><img src="/templates/mobile/images/ITzixun.png"><span>IT资讯</span></a></li>
          <li><a href="/StudentsStory"><img src="/templates/mobile/images/gushi.png"><span>故事</span></a></li>
          <li><a href="/abouts"><img src="/templates/mobile/images/guanyu.png"><span>关于</span></a></li>
          <div class="clear"></div>
        </ul>
      </div>
      <button type="button" class="navbar-toggle mNav-icon" data-toggle="collapse" data-target="#example-navbar-collapse">
        <span class="sr-only">切换导航</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-x-1 icon-x"></span>
        <span class="icon-x-2 icon-x"></span>
      </button>
      <img src="/upload/img/201806290946405929.png" alt="logo" class="nav-logo navbar-brand">
      <a>
        <img src="/templates/mobile/src/icons/call.png" alt="电话" class="nav-call" href="010-57032333">
      </a>
    </div>
  </nav>
  <script type="text/javascript">
    $(window).load(function() {
      $('.mNav-icon').click(function() {
        $('.mNav').removeClass('mNav-ani-outScale').addClass('mNav-ani-fromScale');

      });
      $('.mNav-close').click(function() {
        $('.mNav').removeClass('mNav-ani-fromScale').addClass('mNav-ani-outScale');

      })
    })
  </script>
  <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?19b972123a261b3be88cf2d47bd66ccb";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
      "@id": "https://www.itjmd.com/",
      "appid": "1600403569933280",
      "title": "鸿博IT教育-匠心打造,品质铸就",
      "images": [
        "https://www.itjmd.com/upload/201807/04/201807041026260216.jpg",
        "https://www.itjmd.com/upload/201806/24/201806241911120948.png",
        "https://www.itjmd.com/upload/201806/24/201806241911323214.png"
      ], //请在此处添加希望在搜索结果中展示图片的url，可以添加0个、1个或3个url
      "pubDate": "2018-07-30T09:40:01" // 需按照yyyy-mm-ddThh:mm:ss格式编写时间，字母T不能省去
    }
  </script>