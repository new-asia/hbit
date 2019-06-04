<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>Python基础学习之多任务-协程详细讲解 - Python课程 - 金铭鼎IT教育-匠心打造,品质铸就</title>
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
</head>

<body ontouchstart>
    <div class="page">


    {{--nav--}}
@include('api.layouts.nav')

        <div class="page__bd">

            <div class="weui-panel weui-panel_access" style="margin-top:10px;">
                <div class="weui-panel__bd">
                    <div class="meta">
                        <h1 class="meta-tit">Python基础学习之多任务-协程详细讲解</h1>
                        <p class="meta-info">
                            <span><i class="iconfont icon-date"></i>2019/4/11 13:52:31</span>
                            <span><i class="iconfont icon-view"></i>
                                <script type="text/javascript" src="/tools/submit_ajax.ashx?action=view_article_click&channel_id=1&id=6453&click=1"></script>次浏览
                            </span>
                            <span>关键词：Python,Python基础,Python学习,Python协程,Python多任务</span>
                        </p>
                    </div>
                    <div class="entry">
                        <p style="text-align: center;"><img width="500" height="350" title="Python学习" alt="Python学习" data-cfsrc="/upload/201904/11/201904111337328187.jpg" style="display:none;visibility:hidden;" /><noscript><img width="500" height="350" title="Python学习" alt="Python学习" src="/upload/201904/11/201904111337328187.jpg" /></noscript></p>
                        <p><span style="font-size: 20px;"><strong>前言</strong></span></p>
                        <p><span style="font-size: 20px;"></span></p>
                        <hr />
                        <p><span style="font-size: 20px;"></span><br /></p>
                        <p><br />　　学习Python的小伙伴对于他的多任务一定不会陌生，那么多任务中的协程又有几个小伙伴们知道呢？在本文将重点剖析协程这个知识点。<br /><br /></p>
                        <p><strong><span style="font-size: 20px;">正文</span></strong></p>
                        <p><strong><span style="font-size: 20px;"></span></strong></p>
                        <hr />
                        <p><span style="font-size: 16px;"><strong><br /></strong></span></p>
                        <p><span style="font-size: 16px;"><strong>一、协程简介</strong></span></p>
                        <p><br /><strong>　　协程</strong><br />　　协程，又称微线程，纤程。英文名Coroutine。<br />　　协程是python个中另外一种实现多任务的方式，只不过比线程更小占用更小执行单元（理解为需要的资源）。 为啥说它是一个执行单元，因为它自带CPU上下文。这样只要在合适的时机， 我们可以把一个协程 切换到另一个协程。 只要这个过程中保存或恢复 CPU上下文那么程序还是可以运行的。<br />　　通俗的理解：在一个线程中的某个函数，可以在任何地方保存当前函数的一些临时变量等信息，然后切换到另外一个函数中执行，注意不是通过调用函数的方式做到的，并且切换的次数以及什么时候再切换到原来的函数都由开发者自己确定<br />　　协程和线程差异<br />　　在实现多任务时, 线程切换从系统层面远不止保存和恢复 CPU上下文这么简单。 操作系统为了程序运行的高效性每个线程都有自己缓存Cache等等数据，操作系统还会帮你做这些数据的恢复操作。 所以线程的切换非常耗性能。但是协程的切换只是单纯的操作CPU的上下文，所以一秒钟切换个上百万次系统都抗的住。<br />　　# 进程 启动多个进程 进程之间是由操作系统负责调用<br />　　# 线程 启动多个线程 真正被CPU执行的最小单位实际是线程<br />　　# 协程<br />　　# 本质上是一个线程<br />　　# 能够在多个任务之间切换来节省一些IO时间<br />　　# 协程中任务之间的切换也消耗时间,但是开销要远远小于进程线程之间的切换<br /><strong>　　简单实现协程</strong></p>
                        <p><strong><span style="font-size: 20px;"></span></strong>import time<br />&nbsp;<br />&nbsp;<br />&nbsp;def work1():<br />&nbsp;&nbsp;&nbsp;&nbsp; while True:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print(&quot;work1&quot;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yield<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; time.sleep(0.5)<br />&nbsp;<br />&nbsp;<br />&nbsp;def work2():<br />&nbsp;&nbsp;&nbsp;&nbsp; while True:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print(&quot;work2&quot;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yield<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; time.sleep(0.5)<br />&nbsp;<br />&nbsp;<br />&nbsp;if __name__ == &quot;__main__&quot;:<br />&nbsp;&nbsp;&nbsp;&nbsp; w1 = work1()<br />&nbsp;&nbsp;&nbsp;&nbsp; w2 = work2()<br />&nbsp;&nbsp;&nbsp;&nbsp; while True:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; next(w1)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; next(w2)</p>
                        <p><br /></p>
                        <p><span style="font-size: 16px;"><strong>二、greenlet</strong></span></p>
                        <p><br />　　为了更好使用协程来完成多任务，python中的greenlet模块对其封装，从而使得切换任务变的更加简单。</p>
                        <p><br /></p>
                        <p>from greenlet import greenlet<br />&nbsp;import time<br />&nbsp;<br />&nbsp;<br />&nbsp;def test1():<br />&nbsp;&nbsp;&nbsp;&nbsp; while True:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print(&quot;test1&quot;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; # 切换gt2运行<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gt2.switch()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; time.sleep(1)<br />&nbsp;<br />&nbsp;def test2():<br />&nbsp;&nbsp;&nbsp;&nbsp; while True:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print(&quot;test2&quot;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; # 切换gt1运行<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gt1.switch()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; time.sleep(1)<br />&nbsp;<br />&nbsp;gt1 = greenlet(test1)<br />&nbsp;gt2 = greenlet(test2)<br />&nbsp;# 切换gt1运行<br />&nbsp;gt1.switch()</p>
                        <p><br /></p>
                        <p><span style="font-size: 16px;"><strong>三、gevent</strong></span></p>
                        <p><br />　　greenlet已经实现了协程，但是这个还得人工切换，是不是觉得太麻烦了，不要捉急，python还有一个比greenlet更强大的并且能够自动切换任务的模块gevent<br />　　其原理是当一个greenlet遇到IO(指的是input output 输入输出，比如网络、文件操作等)操作时，比如访问网络，就自动切换到其他的greenlet，等到IO操作完成，再在适当的时候切换回来继续执行。<br />　　由于IO操作非常耗时，经常使程序处于等待状态，有了gevent为我们自动切换协程，就保证总有greenlet在运行，而不是等待IO。</p>
                        <p><br />　　1、gevent的使用</p>
                        <p><br /></p>
                        <p><br /></p>
                        <div>import gevent<br />&nbsp;<br />&nbsp;<br />&nbsp;def test(n):<br />&nbsp;&nbsp;&nbsp;&nbsp; for i in range(n):<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print(gevent.getcurrent(), i)<br />&nbsp;<br />&nbsp;<br />&nbsp;g1 = gevent.spawn(test, 5)<br />&nbsp;g2 = gevent.spawn(test, 5)<br />&nbsp;g3 = gevent.spawn(test, 5)<br />&nbsp;<br />&nbsp;g1.join()<br />&nbsp;g2.join()<br />&nbsp;g3.join()</div>
                        <div># 执行结果：<br />&lt;Greenlet at 0x7f688ad95748: test(5)&gt; 0<br />&lt;Greenlet at 0x7f688ad95748: test(5)&gt; 1<br />&lt;Greenlet at 0x7f688ad95748: test(5)&gt; 2<br />&lt;Greenlet at 0x7f688ad95748: test(5)&gt; 3<br />&lt;Greenlet at 0x7f688ad95748: test(5)&gt; 4<br />&lt;Greenlet at 0x7f688ad95948: test(5)&gt; 0<br />&lt;Greenlet at 0x7f688ad95948: test(5)&gt; 1<br />&lt;Greenlet at 0x7f688ad95948: test(5)&gt; 2<br />&lt;Greenlet at 0x7f688ad95948: test(5)&gt; 3<br />&lt;Greenlet at 0x7f688ad95948: test(5)&gt; 4<br />&lt;Greenlet at 0x7f688ad95a48: test(5)&gt; 0<br />&lt;Greenlet at 0x7f688ad95a48: test(5)&gt; 1<br />&lt;Greenlet at 0x7f688ad95a48: test(5)&gt; 2<br />&lt;Greenlet at 0x7f688ad95a48: test(5)&gt; 3<br />&lt;Greenlet at 0x7f688ad95a48: test(5)&gt; 4<br />可以看到，3个greenlet是依次运行而不是交替运行</div>
                        <p><strong><br /></strong><strong>　　2. gevent切换执行</strong></p>
                        <p><strong><br /></strong></p>
                        <div>import gevent<br />&nbsp;<br />&nbsp;<br />&nbsp;def test(n):<br />&nbsp;&nbsp;&nbsp;&nbsp; for i in range(n):<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print(gevent.getcurrent(), i)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gevent.sleep(1)&nbsp; # 用来模拟一个耗时操作，注意不是time模块中的sleep<br />&nbsp;<br />&nbsp;<br />&nbsp;g1 = gevent.spawn(test, 5)<br />&nbsp;g2 = gevent.spawn(test, 5)<br />&nbsp;g3 = gevent.spawn(test, 5)<br />&nbsp;<br />&nbsp;g1.join()<br />&nbsp;g2.join()<br />&nbsp;g3.join()</div>
                        <div><br /># 执行结果：<br />&lt;Greenlet at 0x7fe357a77748: test(5)&gt; 0<br />&lt;Greenlet at 0x7fe357a77948: test(5)&gt; 0<br />&lt;Greenlet at 0x7fe357a77a48: test(5)&gt; 0<br />&lt;Greenlet at 0x7fe357a77748: test(5)&gt; 1<br />&lt;Greenlet at 0x7fe357a77948: test(5)&gt; 1<br />&lt;Greenlet at 0x7fe357a77a48: test(5)&gt; 1<br />&lt;Greenlet at 0x7fe357a77748: test(5)&gt; 2<br />&lt;Greenlet at 0x7fe357a77948: test(5)&gt; 2<br />&lt;Greenlet at 0x7fe357a77a48: test(5)&gt; 2<br />&lt;Greenlet at 0x7fe357a77748: test(5)&gt; 3<br />&lt;Greenlet at 0x7fe357a77948: test(5)&gt; 3<br />&lt;Greenlet at 0x7fe357a77a48: test(5)&gt; 3<br />&lt;Greenlet at 0x7fe357a77748: test(5)&gt; 4<br />&lt;Greenlet at 0x7fe357a77948: test(5)&gt; 4<br />&lt;Greenlet at 0x7fe357a77a48: test(5)&gt; 4</div>
                        <p><br /></p>
                        <p><strong><span style="display: inline !important; float: none; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; word-spacing: 0px;">　　</span>3. 给程序打补丁</strong></p>
                        <p><br /></p>
                        <div>import gevent<br />&nbsp;from gevent import monkey<br />&nbsp;import random<br />&nbsp;import time<br />&nbsp;<br />&nbsp;# 有耗时操作时需要<br />&nbsp;monkey.patch_all()&nbsp; # 将程序中用到的耗时操作的代码，换为gevent中自己实现的模块<br />&nbsp;<br />&nbsp;def test(name):<br />&nbsp;&nbsp;&nbsp;&nbsp; for i in range(10):<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print(name, i)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; time.sleep(random.random())<br />&nbsp;<br />&nbsp;<br />&nbsp;gevent.joinall([<br />&nbsp;&nbsp;&nbsp;&nbsp; gevent.spawn(test, &quot;test1&quot;),<br />&nbsp;&nbsp;&nbsp;&nbsp; gevent.spawn(test, &quot;test2&quot;)<br />&nbsp;&nbsp;&nbsp;&nbsp; ])</div>
                        <div># 执行结果：<br />test1 0<br />test2 0<br />test2 1<br />test1 1<br />test1 2<br />test1 3<br />test2 2<br />test1 4<br />test1 5<br />test2 3<br />test1 6<br />test1 7<br />test2 4<br />test2 5<br />test1 8<br />test2 6<br />test2 7<br />test1 9<br />test2 8<br />test2 9</div>
                        <p><br /></p>
                        <p><span style="font-size: 16px;"><strong>四、进程、线程、协程对比</strong></span></p>
                        <p><br />　　<strong>通俗描述</strong><br />　　有一个老板想要开个工厂进行生产某件商品（例如剪子）<br />　　他需要花一些财力物力制作一条生产线，这个生产线上有很多的器件以及材料这些所有的 为了能够生产剪子而准备的资源称之为：进程<br />　　只有生产线是不能够进行生产的，所以老板的找个工人来进行生产，这个工人能够利用这些材料最终一步步的将剪子做出来，这个来做事情的工人称之为：线程<br />　　这个老板为了提高生产率，想到3种办法：<br />　　在这条生产线上多招些工人，一起来做剪子，这样效率是成倍増长，即单进程 多线程方式<br />　　老板发现这条生产线上的工人不是越多越好，因为一条生产线的资源以及材料毕竟有限，所以老板又花了些财力物力购置了另外一条生产线，然后再招些工人这样效率又再一步提高了，即多进程 多线程方式<br />　　老板发现，现在已经有了很多条生产线，并且每条生产线上已经有很多工人了（即程序是多进程的，每个进程中又有多个线程），为了再次提高效率，老板想了个损招，规定：如果某个员工在上班时临时没事或者再等待某些条件（比如等待另一个工人生产完谋道工序 之后他才能再次工作） ，那么这个员工就利用这个时间去做其它的事情，那么也就是说：如果一个线程等待某些条件，可以充分利用这个时间去做其它事情，其实这就是：协程方式<br /><strong>　　简单总结</strong><br />　　进程是资源分配的单位<br />　　线程是操作系统调度的单位<br />　　进程切换需要的资源很最大，效率很低<br />　　线程切换需要的资源一般，效率一般（当然了在不考虑GIL的情况下）<br />　　协程切换任务资源很小，效率高<br />　　多进程、多线程根据cpu核数不一样可能是并行的，但是协程是在一个线程中 所以是并发<br /><br /></p>
                        <p><strong><span style="font-size: 16px;">五、图片下载器</span></strong></p>
                        <p><strong><span style="font-size: 16px;"><br /></span></strong></p>
                        <p><span style="font-size: 14px;">from gevent import monkey<br />&nbsp;import gevent<br />&nbsp;import urllib.request<br />&nbsp;<br />&nbsp;<br />&nbsp;monkey.patch_all()<br />&nbsp;<br />&nbsp;def down_img(img_name, img_url):<br />&nbsp;&nbsp;&nbsp;&nbsp; req = urllib.request.urlopen(img_url)<br />&nbsp;&nbsp;&nbsp;&nbsp; content = req.read()<br />&nbsp;&nbsp;&nbsp;&nbsp; with open(img_name, &#39;wb&#39;) as f:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; f.write(content)<br />&nbsp;<br />&nbsp;<br />&nbsp;if __name__ == &quot;__main__&quot;:<br />&nbsp;&nbsp;&nbsp;&nbsp; gevent.joinall([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gevent.spawn(down_img, &quot;1.jpg&quot;, &quot;网址&quot;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gevent.spawn(down_img, &quot;2.jpg&quot;, &quot;网址&quot;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ])</span></p>
                        <p><span style="font-size: 14px;"><br /></span></p>
                        <p><span style="font-size: 20px;"><strong>结论</strong></span></p>
                        <p><span style="font-size: 20px;"></span></p>
                        <hr />
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                        <p>　　通过本文的的代码实例讲解各位小伙伴们对于Python开发多任务中的协程是不是有了一个初步的了解？那么接下来就靠小伙伴们自己的多多努力了。</p>
                    </div>
                </div>
            </div>


            <div class="weui-panel weui-panel_access">
                <div class="weui-panel__hd">相关资讯</div>
                <div class="weui-panel__bd">
                    <div class="txt-list">
                        <ul>
                            <li>
                                <a href="/news/show-6456.html">
                                    <i class="date">04-12</i>
                                    <span class="text">Python常用高阶函数汇总大解析</span>
                                </a>
                            </li>
                            <li>
                                <a href="/news/show-6452.html">
                                    <i class="date">04-11</i>
                                    <span class="text">Python开发之控制流代码详细解析</span>
                                </a>
                            </li>
                            <li>
                                <a href="/news/show-6446.html">
                                    <i class="date">04-09</i>
                                    <span class="text">Python基础学习之多任务线程详细解析</span>
                                </a>
                            </li>
                            <li>
                                <a href="/news/show-6443.html">
                                    <i class="date">04-09</i>
                                    <span class="text">Python开发之迭代器与装饰器详细解析</span>
                                </a>
                            </li>
                            <li>
                                <a href="/news/show-6442.html">
                                    <i class="date">04-08</i>
                                    <span class="text">Python日常学习之基础语法汇总解析</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>






            <footer class="footer">
                <p>版权所有 2006 - 2018 北京博育华众教育咨询有限公司</p>
                <p>地址：北京市昌平区十三陵镇泰胡路24号</p>
            </footer>
            <div class="tabBar" style="font-size: 14px;">
                <a href="/">
                    <div class="item">
                        <p><img data-cfsrc="/templates/mobile/src/icons/tab_home.png" class="img-responsive" style="display:none;visibility:hidden;"><noscript><img src="/templates/mobile/src/icons/tab_home.png" class="img-responsive"></noscript></p>
                        <p>首页</p>
                    </div>
                </a>
                <a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true">
                    <div class="item">
                        <p><img data-cfsrc="/templates/mobile/src/icons/tab_zixun.png" class="img-responsive" style="display:none;visibility:hidden;"><noscript><img src="/templates/mobile/src/icons/tab_zixun.png" class="img-responsive"></noscript></p>
                        <p>在线咨询</p>
                    </div>
                </a>
                <a href="/phonebd.html">
                    <div class="item">
                        <p><img data-cfsrc="/templates/mobile/src/icons/tab_baoming.png" class="img-responsive" style="display:none;visibility:hidden;"><noscript><img src="/templates/mobile/src/icons/tab_baoming.png" class="img-responsive"></noscript></p>
                        <p>我要报名</p>
                    </div>
                </a>
            </div>

        </div>

    </div>
    <script type="text/javascript" src="/templates/mobile/plugin/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/templates/mobile/plugin/bootstrap-3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript" src="/templates/mobile/plugin/swiper/swiper-4.3.3.min.js"></script>
    <script type="text/javascript" src="/templates/mobile/js/main.js"></script>
</body>

</html>