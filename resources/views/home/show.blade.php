
{{--头部-css--}}
@include('home.layouts.header')

<div class="content_nav">
<div class="container">
<span>当前位置：</span>
<a href="/index.html">首页</a> &gt;
<a href="/Campusall.html">IT资讯</a>
&nbsp;&gt;&nbsp;<a href="/news/63-1.html">Java资讯</a> &gt;
2019年Java面试试题之跳表
</div>
</div>
<div class="content">
<div class="container">
<div class="left_container">
<div class="left_content">
<div class="title" style="padding: 0px 0 0px;">
<p style="font-size: 24px;">2019年Java面试试题之跳表</p>
<div class="scZxDetailTopInfo">
<span>阅读数：<script type="text/javascript" src="/tools/submit_ajax.ashx?action=view_article_click&channel_id=1&id=6455&click=1"></script></span>
<span>时间：2019-04-12 09:22:35</span>
<span>关键词：Java,Java程序员,程序员面试,跳表</span>
</div>
</div>
<div class="jianjie">
<p>跳表是一个随机化的数据结构，实质就是一种可以进行二分查找的有序链表，跳表在原有的有序链表上面增加了多级索引，通过索引来实现快速查找，跳表不仅能提高搜索性能，同时也可以提高插入和删除操作的性能.......</p>
</div>
<div class="menu">
<p style="text-align: center;"><img width="500" height="350" title="Java程序员" alt="Java程序员" src="/static/upload/201904/12/201904120912003743.jpg" /></p><p><span style="font-size: 20px;"><strong>何为跳表？</strong></span></p><p><br />　　跳表是一个随机化的数据结构，实质就是一种可以进行二分查找的有序链表，跳表在原有的有序链表上面增加了多级索引，通过索引来实现快速查找，跳表不仅能提高搜索性能，同时也可以提高插入和删除操作的性能。<br /><span style="font-size: 20px;"><strong><br /></strong></span></p><p><span style="font-size: 20px;"><strong>跳表详解</strong></span><br /><br /></p><p><strong>有序链表</strong></p><p></p><p style="text-align: center;"><strong><img width="700" height="103" title="有序链表" alt="有序链表" src="/static/upload/201904/12/201904120914072239.png" /></strong></p><p>　　考虑一个有序链表，我们要查找3、7、17这几个元素，我们只能从头开始遍历链表，直到查找到元素为止。<br />　　上述这个链表是有序的，但是不能使用二分查找，是不是很捉急？（P.S.数组可以实现二分查找）<br />　　那么，有没有什么方法可以实现有序链表的二分查找呢？<br />　　答案是肯定的，那就是我们将要介绍的这种数据结构——跳表。</p><p><br /><span style="font-size: 20px;"><strong>跳表的演进</strong></span></p><p><br />　　我们把一些节点从有序表中提取出来，缓存一级索引，就组成了下面这样的结构：</p><p><br /></p><p style="text-align: center;"><img width="700" height="158" title="跳表结构图" alt="跳表结构图" src="/static/upload/201904/12/201904120915378597.png" /></p><p><br /></p><p>　　现在，我们要查找17这个元素是不是要快很多呢？<br />　　我们只要从一级索引往后遍历即可，只需要经过1、6、15、17这几个元素就可以找到17了。<br />　　那么，我们要查找11这个元素呢？<br />　　我们从一级索引的1开始，向右到6，再向右发现是15，它比11大，此路不通，从6往下走，再从下面的6往右走，到7，再到11。<br />　　同样地，一级索引也可以往上再提取一层，组成二级索引，如下：</p><p><br /></p><p style="text-align: center;"><img width="700" height="266" title="跳表二级索引" alt="跳表二级索引" src="/static/upload/201904/12/201904120916389974.png" /></p><p>　　这时候我们再查找17这个元素呢？<br />　　只需要经过6、15、17这几个元素就可以找到17了。<br />　　这基本上就是跳表的核心思想了，其实这也是一个“空间换时间”的算法，通过向上提取索引增加了查找的效率。<br /><br /></p><p><span style="font-size: 20px;"><strong>跳表的插入</strong></span></p><p><br />　　上面讲的都是跳表的查询，那么，该如何向跳表中插入元素呢？<br />　　比如，我们要向上面这个跳表添加一个元素8。<br />　　首先，我们先根据投硬币的方式，决定8这个元素要占据的层数，没错就是扔硬币，是不是很好玩儿^^<br />　　比如，层数level=2。<br />　　然后，找到8这个元素在下面两层的前置节点。<br />　　接着，就是链表的插入元素操作了，比较简单。<br />　　最后，就像下面这样：</p><p><br /></p><p style="text-align: center;"><img width="700" height="239" title="跳表插入" alt="跳表插入" src="/static/upload/201904/12/201904120917553314.png" /></p><p><br /></p><p><span style="font-size: 20px;"><strong>跳表的删除</strong></span></p><p><br />　　查询、插入元素都讲了，下面我们就来说说怎么删除元素。<br />　　首先，找到各层中包含元素x的节点。<br />　　然后，使用标准的链表删除元素的方法删除即可。<br />　　比如，要删除17这个元素。</p><p><br /></p><p style="text-align: center;"><img width="700" height="241" title="跳表删除" alt="跳表删除" src="/static/upload/201904/12/201904120919041839.png" /></p><p><span style="font-size: 20px;"><strong>标准化的跳表</strong></span></p><p><br />　　上面举的例子是完全随机的跳表，那么，如果我们每两个元素提取一个元素作为上一级的索引会怎么样呢？</p><p><br /></p><p style="text-align: center;"><img width="700" height="275" title="标准化跳表" alt="标准化跳表" src="/static/upload/201904/12/201904120920076683.png" /></p><p>　　这是不是很像平衡二叉树，现在这颗树元素比较少，可能不太明显，我们来看个元素个数多的情况。</p><p><br /></p><p style="text-align: center;"><img width="700" height="374" title="平衡二叉树" alt="平衡二叉树" src="/static/upload/201904/12/201904120921006458.png" /></p><p><br /></p><p><br /></p><p>　　可以看到，上一级元素的个数是下一级的一半，这样每次减少一半，就很接近平衡二叉树了。</p><p><br /><span style="font-size: 20px;"><strong>时间复杂度</strong></span></p><p><br />　　我们知道单链表查询的时间复杂度为O(n)，而插入、删除操作需要先找到对应的位置，所以插入、删除的时间复杂度也是O(n)。<br />　　那么，跳表的时间复杂度是多少呢？<br />　　如果按照标准的跳表来看的话，每一级索引减少k/2个元素（k为其下面一级索引的个数），那么整个跳表的高度就是(log n)。<br />　　学习过平衡二叉树的同学都知道，它的时间复杂度与树的高度成正比，即O(log n)。<br />　　所以，这里跳表的时间复杂度也是O(log n)。（这里不一步步推倒了，只要记住，查询时每次减少一半的元素的时间复杂度都是O(log n)，比如二叉树的查找、二分法查找、归并排序、快速排序）<br /><br /></p><p><span style="font-size: 20px;"><strong>空间复杂度</strong></span></p><p><br />　　我们还是以标准的跳表来分析，每两个元素向上提取一个元素，那么，最后额外需要的空间就是：<br />　　n/2 + (n/2)^2 + (n/2)^3 + ... + 8 + 4 + 2 = n - 2<br />　　所以，跳表的空间复杂度是O(n)。<br /><br /></p><p><span style="font-size: 20px;"><strong>总结</strong></span></p><p><br />　　（1）跳表是可以实现二分查找的有序链表；<br />　　（2）每个元素插入时随机生成它的level；<br />　　（3）最低层包含所有的元素；<br />　　（4）如果一个元素出现在level(x)，那么它肯定出现在x以下的level中；<br />　　（5）每个索引节点包含两个指针，一个向下，一个向右；<br />　　（6）跳表查询、插入、删除的时间复杂度为O(log n)，与平衡二叉树接近；<br />　　彩蛋<br />　　为什么Redis选择使用跳表而不是红黑树来实现有序集合？<br />　　首先，我们来分析下Redis的有序集合支持的操作：<br />　　1）插入元素<br />　　2）删除元素<br />　　3）查找元素<br />　　4）有序输出所有元素<br />　　5）查找区间内所有元素<br />　　其中，前4项红黑树都可以完成，且时间复杂度与跳表一致。<br />　　但是，最后一项，红黑树的效率就没有跳表高了。<br />　　在跳表中，要查找区间的元素，我们只要定位到两个区间端点在最低层级的位置，然后按顺序遍历元素就可以了，非常高效。<br />　　而红黑树只能定位到端点后，再从首位置开始每次都要查找后继节点，相对来说是比较耗时的。<br />　　此外，跳表实现起来很容易且易读，红黑树实现起来相对困难，所以Redis选择使用跳表来实现有序集合。</p>
</div>
<div class="foo">
<div style="float: left;">
<strong>上一篇：</strong><a href="/Campusjava/show-6454.html">Java学习之构造方法汇总</a>
</div>
<div style="float: right;">
<strong>下一篇：</strong><a href="/Campusjava/show-6457.html">Java学习之final关键字详细解析</a>
</div>
</div>

<div class="scZxDetailBt">
<div class="scZxDetailBtRight">
<div class="scZxshare">
<span>立即分享：</span>
<div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1526491950904"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
</div>
</div>
</div>

<div class="rel-box">
<h2 class="slide-tit">
<span>相关阅读</span>
</h2>
<ul class="rel-list">
<li>
<div class="img-box">
<a title="Java学习之final关键字详细解析" href="/Campusjava/show-6457.html">
<img src="/static/upload/201904/12/201904121348270277.jpg">
</a>
</div>
<div class="infos">
<h3><a title="Java学习之final关键字详细解析" href="/Campusjava/show-6457.html">Java学习之final关键字详细解析</a></h3>
<p>学习Java的小伙伴们对于final关键字一定不陌生，他在Java开发中用到的几率是相当的大，在本文将重点讲解这个知识点.......</p>
<span>2019/4/12 13:59:28</span>
</div>
</li>
<li>
<div class="img-box">
<a title="Java学习之构造方法汇总" href="/Campusjava/show-6454.html">
<img src="/static/upload/201904/12/201904120859213753.jpg">
</a>
</div>
<div class="infos">
 <h3><a title="Java学习之构造方法汇总" href="/Campusjava/show-6454.html">Java学习之构造方法汇总</a></h3>
<p>学习Java的小伙伴们都知道构造方法在Java语言中的重要性，他可以说是贯穿了整个Java语言，在本文将重点讲解Java语言的构造方法，下面跟随小编一起来学习吧.......</p>
<span>2019/4/12 9:06:28</span>
</div>
</li>
<li>
<div class="img-box">
<a title="Java学习小技巧之利用注解技术检查空指针" href="/Campusjava/show-6451.html">
<img src="/static/upload/201904/11/201904110855570364.jpg">
</a>
</div>
<div class="infos">
<h3><a title="Java学习小技巧之利用注解技术检查空指针" href="/Campusjava/show-6451.html">Java学习小技巧之利用注解技术检查空指针</a></h3>
<p>注解属于比较高级的Java开发技术，前面介绍的内置注解专用于编译器检查代码，另外一些注解则由各大框架定义与调用，像Web开发常见的Spring框架、Mybatis框架，Android开发常见的ButterKnife框架等等，都使用了大量的注解.......</p>
<span>2019/4/11 9:08:04</span>
</div>
</li>
<li>
<div class="img-box">
<a title="2019年最新Java常用注释详解" href="/Campusjava/show-6447.html">
<img src="/static/upload/201904/10/201904100840080648.png">
</a>
</div>
<div class="infos">
<h3><a title="2019年最新Java常用注释详解" href="/Campusjava/show-6447.html">2019年最新Java常用注释详解</a></h3>
<p>学习Java的小伙伴们都知道当Java引入注释后，能够很大限度的提升编码效率，而且经典了代码，本文将就这个问题做一个详细的解析........</p>
<span>2019/4/10 8:48:25</span>
</div>
</li>
</ul>
</div>

</div>
</div>
<style>
					.right_item_last a:hover{
						color:#fff;
					}
				</style>
<div class="right_container">
<script type="text/javascript">
	$(function(){
		//初始化发表评论表单
		AjaxInitForm('#feedback_form', '#btnSubmit', 1);
	});
</script>
<div class="right_item right_item_4">
<div class="lfMflf">
<div class="lfMflfTit">提交报名</div>
<form class="rightform1" id="feedback_form" name="feedback_form" url="/plugins/feedback/ajax.ashx?action=add&site=1" action="/plugins/feedback/ajax.ashx?action=add&site=1" method="post" novalidate>
<input type="hidden" name="type" value="15">
<input type="hidden" name="source" value="8">
<input type="text" placeholder="请输入您的姓名" name="txtUserName" id="txtUserName">
<input type="text" placeholder="请输入您的电话" name="txtUserTel" id="txtUserTel" size="5" maxlength="11">
<input type="text" placeholder="请输入您的QQ号码" name="txtUserQQ" id="txtUserQQ">
<select name="txtUserEmail" id="txtUserEmail">
<option value="0">请选择上课地址</option>
<option value="北京校区">北京校区</option>
</select>
<select name="txtContent" id="txtContent">
<option value="0">请选择报名学科</option>
<option value="php">php</option>
<option value="Java">Java</option>
<option value="H5+全栈工程师">H5+全栈工程师</option>
</select>
<input type="hidden" name="source" value="8">
<input id="btnSubmit" name="btnSubmit" type="submit" class="lfMflfBtn" value="提交申请" />
</form>
</div>
</div>
<div class="right_pi_wrap img_div">
<a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank"><img src="/static/upload/201812/07/201812071114316567.jpg" alt="广告3"></a>
<a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank"><img src="/static/upload/201901/04/201901041517363540.jpg" alt="广告2"></a>
</div>
<div class="right_item">
<div class="right_item_title">
<h2>开课信息</h2>

</div>
<div class="right_item_content">
<span class="circular"></span>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>6</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-02-26</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<span class="circular"></span>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>7</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-03-06</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<span class="circular"></span>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>8</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-03-20</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<span class="circular"></span>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>9</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-04-10</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<span class="circular"></span>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>10</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-04-22</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<span class="circular"></span>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>11</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-05-08</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<span class="circular"></span>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>12</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-06-12</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<span class="circular"></span>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>13</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-07-03</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
<span class="circular"></span>
<ul style="float:left;width: 110px;margin-left: 3px;">
<li>大数据工程师</li>
</ul>
<ul style="float:left;width: 50px;">
<li>14</li>
</ul>
<ul style="float:left;width: 80px;">
<li>2019-07-25</li>
</ul>
<ul style="float:left;width: 100px;">
<li><a href="tencent://message/?Menu=yes&amp;uin=800856702" class="sign_up f3 c4" target="_blank"><b style="color: white;">立即报名</b></a></li>
</ul>
</div>
</div>
<div class="right_item right_item_3">
<div class="right_item_title">
<h2>推荐阅读</h2>
<a href="/news.html">更多>></a>
</div>
<div class="right_item_content">
<ul>
<li><a href="/news/show-6457.html">Java学习之final关键字详细解析</a></li>
<li><a href="/news/show-6454.html">Java学习之构造方法汇总</a></li>
<li><a href="/news/show-6451.html">Java学习小技巧之利用注解技术检查空指针</a></li>
<li><a href="/news/show-6447.html">2019年最新Java常用注释详解</a></li>
<li><a href="/news/show-6445.html">一招巧妙解决Java虚拟机中OMM问题</a></li>
<li><a href="/news/show-6444.html">Java8新特性引用详细解析</a></li>
<li><a href="/news/show-6440.html">Java开发中Struts控制器详细解析</a></li>
<li><a href="/news/show-6436.html">Java开发之SpringMVC同步、异步与定时使用详细解析</a></li>
<li><a href="/news/show-6435.html">Java基础学习之static变量详细解析</a></li>
<li><a href="/news/show-6434.html">2019年最新Java静态成员与实际成员详细解析</a></li>
</ul>
 </div>
</div>
<div class="sidebar-box right_item">
<h4>热门标签</h4>
<div class="tags-box clearfix">
<a href="/search.html?tags=%e9%87%91%e9%93%ad%e9%bc%8e">鸿博教育<i>(76)</i></a>
<a href="/search.html?tags=HTML5">HTML5<i>(19)</i></a>
<a href="/search.html?tags=%e7%a8%8b%e5%ba%8f%e7%8c%bf">程序猿<i>(7)</i></a>
<a href="/search.html?tags=HTML5%e5%ad%a6%e4%b9%a0">HTML5学习<i>(4)</i></a>
<a href="/search.html?tags=html">html<i>(4)</i></a>
<a href="/search.html?tags=php%e5%9f%b9%e8%ae%ad">php培训<i>(4)</i></a>
<a href="/search.html?tags=%e5%b7%a5%e4%bd%9c%e6%95%88%e7%8e%87">工作效率<i>(2)</i></a>
<a href="/search.html?tags=%e7%97%9b%e8%8b%a6%e9%a2%86%e6%82%9f">痛苦领悟<i>(1)</i></a>
<a href="/search.html?tags=%e6%92%a9%e6%b1%89">撩汉<i>(1)</i></a>
<a href="/search.html?tags=Html%e6%a0%87%e7%ad%be">Html标签<i>(1)</i></a>
<a href="/search.html?tags=%e5%81%9a%e9%a1%b9%e7%9b%ae">做项目<i>(1)</i></a>
<a href="/search.html?tags=%e5%ad%a6%e7%bc%96%e7%a8%8b">学编程<i>(1)</i></a>
<a href="/search.html?tags=PHP%e9%a1%b9%e7%9b%ae">PHP项目<i>(1)</i></a>
<a href="/search.html?tags=%e7%b9%81%e5%8d%8e%e9%83%bd%e5%b8%82">繁华都市<i>(1)</i></a>
<a href="/search.html?tags=%e9%83%bd%e6%98%af%e7%94%9f%e6%b4%bb">都是生活<i>(1)</i></a>
<a href="/search.html?tags=IT%e5%9f%b9%e8%ae%ad">IT培训<i>(1)</i></a>
<a href="/search.html?tags=%e9%87%91%e9%93%ad%e9%bc%8e%e5%9f%b9%e8%ae%ad">鸿博教育培训<i>(1)</i></a>
<a href="/search.html?tags=%e6%b2%a1%e6%9c%89%e5%9f%ba%e7%a1%80">没有基础<i>(1)</i></a>
<a href="/search.html?tags=%e5%9f%ba%e7%a1%80%e5%85%a5%e9%97%a8">基础入门<i>(1)</i></a>
<a href="/search.html?tags=%e6%92%a9%e6%b1%89%e4%bc%98%e9%80%89%e2%80%9c%e7%a8%8b%e5%ba%8f%e7%8c%bf%e2%80%9d">撩汉优选“程序猿”<i>(0)</i></a>
</div>
</div>
</div>
</div>
</div>

{{--底部--}}
@include('home.layouts.footer')

{{--公共js--}}
@include('home.layouts.script')
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
