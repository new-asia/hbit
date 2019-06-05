{{--头部-css--}}
@include('home.layouts.header')
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/other.css" />
<div class="wrapper">

        <div class="flow_banner1"></div>
        <div class="content_nav">
            <div class="container">
                <span>当前位置：</span>
                <a href="/">首页</a> &gt;
                <a href="/abouts.html">关于我们</a> &gt; 直营校区
            </div>
        </div>
        <div class="graybg">

            <div class="con_about">
                <div class="about_nav">
                    <ul>
                        <li><a id="abouts" href="/abouts.html">企业简介</a></li>
                        <li><a id="idea" href="/idea.html">企业理念</a></li>
                        <li><a id="history" href="/history.html">发展历史</a></li>
                        <li><a id="school" href="/school.html">直营校区</a></li>
                    </ul>
                </div>
                <div class="about_con">
                    <div class="inner1">

                        <h2 style="margin: 0px 0px 25px; padding: 0px; color: rgb(176, 176, 176); font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; font-size: 32px; font-weight: normal; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(12, 12, 12); font-size: 24px;"><strong>直营校区</strong></span></h2>
                        <p><br /></p>
                        <p style="padding: 0px; color: rgb(117, 117, 117); line-height: 24px; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">北京校区</p>
                        <p><span style="background-color: rgb(255, 255, 255); color: rgb(117, 117, 117); font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti;"><br /></span></p>
                        <p style="text-align: left;"><span style="background-color: rgb(255, 255, 255); color: rgb(117, 117, 117); font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti;">地址：<span style="color:#007000;font-family:arial,微软雅黑,&quot;Microsoft Yahei&quot;,&quot;Hiragino Sans GB&quot;,宋体,宋体,Tahoma,Arial,Helvetica,STHeiti">北京市海淀区苏家坨汇喜乐教育园区</span></span><br
                            /></p>
                        <p style="padding: 0px; color: rgb(117, 117, 117); line-height: 24px; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">电话：<strong>135-2226-8168</strong></p>
                        <p style="padding: 0px; color: rgb(117, 117, 117); line-height: 24px; font-family: arial, 微软雅黑, &quot;Microsoft Yahei&quot;, &quot;Hiragino Sans GB&quot;, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">　　</p>
                        <p style="padding: 0px; color: rgb(117, 117, 117); line-height: 24px; font-family: arial,微软雅黑,&quot;Microsoft Yahei&quot;,&quot;Hiragino Sans GB&quot;,宋体,宋体,Tahoma,Arial,Helvetica,STHeiti; margin-top: 0px; margin-bottom: 0px; white-space: normal; background-color: rgb(255, 255, 255);">　　<br /></p>
                        <br />

                    </div>
                </div>
            </div>
            <p class="clear"></p>

        </div>

    @include('home.layouts.footer')

</div>
{{--公共js--}}
@include('home.layouts.script')