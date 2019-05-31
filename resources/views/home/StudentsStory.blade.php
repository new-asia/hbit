{{--头部-css--}}
{{--头部-css--}}
@include('home.layouts.header')
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/other.css" />

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?19b972123a261b3be88cf2d47bd66ccb";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script> (function(){ var bp = document.createElement('script'); var curProtocol = window.location.protocol.split(':')[0]; if (curProtocol === 'https') { bp.src = 'https://zz.bdstatic.com/linksubmit/push.js'; } else { bp.src = 'http://push.zhanzhang.baidu.com/push.js'; } var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(bp, s); })(); </script>

<section>
<div class="story_ban">
    <div class="a_banner_pic">
        <a href="{{$stu_story[0]->picture_url}}">
            <img src="@if($stu_story[0]->picture_place == 1) {{$stu_story[0]->picture_src}} @endif" style=" width: 100%; height: 260px;" />
        </a>
    </div>
</div>
</section>
<div class="wrapper">
<div class="content_nav">
 <div class="container">
<span>当前位置：</span>
<a href="/index.html">首页</a> &gt;
<a href="/StudentsStory.html">学员生活</a>
</div>
</div>
</div>
<section class="xystory">
<div class="inner">

<div class="bread_nav">
</div>

<div class="story_con">
<div class="story_l" id="listcontent">
<ul class="story_list">
@foreach($student as $v)
<li>
<a href="/StudentsStory/show-4.html" class="picbox"><img src="{{$v->img}}"></a>
<a href="/StudentsStory/show-4.html" class="txtbox">
<h3><span style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">姓名：{{$v->name}}</span><br><span style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">班级：java大数据 </span><br><span style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">月薪：{{$v->pay}}</span></h3>
<p>{{$v->testimonials}}</p>
</a>
</li>
@endforeach
</ul>
<div class="page-box">
<div class="digg">
    {{ $student->links() }}
</div>
</div>
<script src="/js/newspage.js"></script></ul></div>
</div>
</div>
</section>

{{--底部--}}
@include('home.layouts.footer')
{{--公共js--}}
@include('home.layouts.script')
<script src="/static/templates/main/js/global.js"></script>
<script src="/static/js/jquery-1.10.2.min.js"></script>
<script src="/static/js/jquery.SuperSlide.2.1.1.js"></script>


