{{--头部-css--}}
@include('home.layouts.header')
<link rel="stylesheet" href="static/templates/main/css/base_bottom.css" />
<link rel="stylesheet" href="static/templates/main/css/qf-bj-php.css">
<link rel="stylesheet" type="text/css" href="static/templates/main/css/other.css" />
<link rel="stylesheet" type="text/css" href="static/templates/main/css/html5_20170105.css">
<link rel="stylesheet" href="static/templates/main/css1/index.css">
<style>
    .shadow {
        box-shadow: 0 15px 30px rgba(0, 0, 0, .1);
        transform: translate3d(0, -2px, 0);
    }

    .shadow_a {
        box-shadow: 0 15px 30px rgba(0, 0, 0, .1);
    }

    .bg_position {
        transition: all .3s linear;
    }

    .xdlkc_1 {
        display: none;
    }
    .module_left .title p {
        color: #fff;
    }
    .js_list a:link{
        color: #fff;
    }
</style>
{{--轮播图--}}
{{--@include('home.layouts.banner')--}}
<div class="banner">
</div>
<div class="wrapper">
<div class="content_nav">
<div class="container" style="line-height: 60px;">
<span>当前位置：</span>
<a href="/index.html">首页</a> &gt;
<a href="/html5.html">html5培训</a>
</div>
</div>
</div>
<div class="qianjing section">
<div class="base">
<h2 class="biaoti">看数据——HTML5的市场前景到底如何</h2>
<div class="qj_main">
<div class="fl">
<img src="static/templates/main/images/qj_img1.png">
<a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank" class="btn">了解市场走向</a>
</div>
<div class="fr">
<img src="static/templates/main/images/qj_img2.jpg">
<a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank" class="btn">获取更多数据</a>
</div>
</div>
</div>
</div>

<div class="jiangshi section">
<div class="base">
<h2 class="biaoti">专业教学团队 打造实战型精英</h2>
<img src="static/templates/main/images/js_img1.png">
<ul class="js_list" >
    {{-- 师资力量 --}}
    @include('home.layouts.faculty')
</ul>
</div>
</div>

<div class="kecheng section c6" id="hash-dagang" title="HTML5培训|H5培训|前端培训|鸿博HTML5学院">
<div class="base warp">
<h2 class="biaoti" title="鸿博全栈HTML5+课程大纲立体升级企业导向 项目实战 前沿">鸿博全栈HTML5+课程大纲立体升级<span>企业导向 项目实战 前沿科技</span></h2>
<div class="j-c6-cont">

<h3>鸿博HTML5“就业班”课程体系V10.0</h3>
<div class="active">
<table>
<tr>
<td>阶段名称</td>
<td>项目名称</td>
<td colspan="2">具体课程</td>
</tr>


<tr>
<td rowspan="3"><h4>第一阶段：<br>前端页面重构</h4></td>
<td><h4>项目一、<br>PC端网站布局项目</h4></td>
<td colspan="2">
<p>- HTML基础，CSS基础，CSS核心属性</p><p>- CSS样式层叠，继承，盒模型</p><p>- 容器，溢出及元素类型</p><p>- 浏览器兼容与宽高自适应</p><p>- 定位，锚点与透明</p><p>- 图片整合</p><p>- 表格，CSS属性与滤镜</p>
<div class="pro-img"><img src="static/templates/main/images/pro-01.jpg" alt=""></div>
</td>
</tr>
<tr>
<td>
<h4>项目二、<br>HTML5+CSS3基础项目</h4>
</td>
<td colspan="2">
<p>- HTML5新增的元素与属性</p><p>- 表单域增强元素</p><p>- CSS3选择器</p><p>- 文字字体相关样式</p><p>- CSS3位移与变形处理</p><p>- CSS3 2D转换与过度动画</p><p>- CSS3 3D转换与关键帧动画</p><p>- 弹性盒模型</p><p>- 媒体查询</p><p>- 响应式设计</p>
<div class="pro-img"><img src="static/templates/main/images/pro-02.jpg" alt=""></div>
</td>
</tr>
<tr>
<td>
<h4>项目三、<br>WebApp页面布局项目</h4>
</td>
<td colspan="2">
<p>- 移动端页面设计规范</p><p>- 移动端切图</p><p>- 文字流式/控件弹性/图片等比例/特殊设计的100%布局</p><p>- 等比缩放布局</p><p>- viewport/meta</p><p>- rem/vw的使用</p><p>- flexbox详解</p><p>- 移动web特别样式处理（reset, 1px border, 高清图片）</p>
 <div class="pro-img"><img src="static/templates/main/images/pro-03.jpg" alt=""></div>
</td>
</tr>

<tr>
<td rowspan="3"><h4>第二阶段：<br>JavaScript高级程序设计</h4></td>
<td><h4>项目四、<br>原生JavaScript交互功能开发项目</h4></td>
<td colspan="2">
<p>- 基本语法</p><p>- 循环语句</p><p>- 函数与数组</p><p>- String与Date</p><p>- BOM与DOM</p><p>- 事件</p><p>- 拖拽效果</p><p>- cookie存储</p><p>- 正则表达式</p><p>- Ajax</p><p>- 面向对象基础</p><p>- 运动与游戏开发</p>
<div class="pro-img"><img src="static/templates/main/images/pro-04.jpg" alt=""></div>
</td>
</tr>
<tr>
<td>
<h4>项目五、<br>面向对象进阶与ES5/ES6应用项目</h4>
</td>
<td colspan="2">
<p>- Promise/A+</p><p>- 设计模式（观察者模式等）</p><p>- 原型链</p><p>- 构造函数</p><p>- 执行上下文栈与执行上下文</p><p>- 变量对象与活动对象</p><p>- 作用域链</p><p>- 闭包</p><p>- this</p><p>- ES5</p><p>- ES6</p>
</td>
</tr>
<tr>
<td>
<h4>项目六、<br>JavaScript工具库自主研发项目</h4>
</td>
<td colspan="2">
<p>- DOM库</p><p>- 事件库</p><p>- AJAX库</p><p>- 原型和继承库</p><p>- MVVM核心库</p><p>- 基于SPA的路由库</p>
<div class="pro-img"><img src="static/templates/main/images/pro-05.jpg" alt=""></div>
</td>
</tr>

<tr>
<td rowspan="4"><h4>第三阶段：<br>PC端全栈项目开发</h4></td>
<td><h4>项目七、<br>jQuery经典交互特效开发</h4></td>
<td colspan="2">
<p>- 时间轴特效</p><p>- tab页面切换效果</p><p>- 网页定位导航特效</p><p>- 滑动门特效</p><p>- 焦点图轮播特效</p><p>- 导航条菜单效果</p><p>- 瀑布流特效</p><p>- 弹出层效果</p><p>- 倒计时效果</p><p>- 抽奖效果</p>
<div class="pro-img"><img src="static/templates/main/images/pro-06.jpg" alt=""></div>
</td>
</tr>
<tr>
<td>
<h4>项目八、<br>PHP+MySQL后端基础项目</h4>
</td>
<td colspan="2">
<p>- PHP</p><p>- MySQL</p><p>- HTTP(s)协议详解</p><p>- Ajax进阶、跨域与Defered</p><p>- Apache与Nginx 环境搭建与配置</p><p>- 接口的定义</p><p>- Mock数据</p><p>- Restful</p><p>- 前后端联调</p><p>- 前端安全(XSS,CSRF,JSON注入)</p>
<div class="pro-img"><img src="static/templates/main/images/pro-07.jpg" alt=""></div>
</td>
</tr>
<tr>
<td>
<h4>项目九、<br>前端工程化与模块化应用项目</h4>
</td>
<td colspan="2">
<p>- Gulp</p><p>- Webpack</p><p>- NPM</p><p>- Git/SVN</p><p>- CommonJS</p><p>- AMD</p><p>- CMD</p><p>- ES6模块化</p>
<div class="pro-img"><img src="static/templates/main/images/pro-08.jpg" alt=""></div>
</td>
</tr>
<tr>
<td>
<h4>项目十、<br>PC端全栈开发项目</h4>
</td>
<td colspan="2">
<p>- 大首页、列表页与详情页</p><p>- 展示与交互特效</p><p>- 搜索</p><p>- 登录与注册</p><p>- 购物车</p><p>- jQueryUI 与 jQuery EasyUI</p><p>- Bootstrap(ACE)</p><p>- Highcharts/Echarts</p><p>- ArtTemplate</p><p>- velocity</p><p>- smarty</p><p>- 云平台系统前端</p>
<div class="pro-img"><img src="static/templates/main/images/pro-09.jpg" alt=""></div>
</td>
</tr>

<tr>
<td rowspan="3"><h4>第四阶段：<br>移动端WebApp开发</h4></td>
<td><h4>项目十一、<br>应用Vue.js开发WebApp项目</h4></td>
<td colspan="2">
<p>- Vue.js基础</p><p>- 模块化</p><p>- 单文件组件</p><p>- 路由</p><p>- 与服务器通信</p><p>- 状态管理</p><p>- 单元测试与生产发布</p><p>- 服务端渲染SSR与Nuxt.js</p><p>- 基于Vue.js企业级项目开发(Mint UI, Element UI)</p>
<div class="pro-img"><img src="static/templates/main/images/pro-10.jpg" alt=""></div>
</td>
</tr>
<tr>
<td>
<h4>项目十二、<br>应用React.js开发WebApp项目</h4>
</td>
<td colspan="2">
<p>- ReactJS基础</p><p>- JSX语法</p><p>- 组件</p><p>- flux+Redux</p><p>- React<p>-Router路由</p><p>- 动画效果</p><p>- 基于React 企业级项目研发( Antd, Antd Mobile)</p>
<div class="pro-img"><img src="static/templates/main/images/pro-11.jpg" alt=""></div>
</td>
</tr>
<tr>
<td>
<h4>项目十三、<br>应用Angular开发WebApp项目</h4>
</td>
<td colspan="2">
<p>- TypeScript 基础与进阶</p><p>- 开发环境配置</p><p>- Hello World</p><p>- 架构、模块与组件</p><p>- 模板</p><p>- 元数据、数据绑定与数据显示</p><p>- 表单</p><p>- 服务与指令</p><p>- 依赖注入</p><p>- 路由</p><p>- Ionic 3 MUI框架</p><p>- 项目实战</p>
<div class="pro-img"><img src="static/templates/main/images/pro-12.jpg" alt=""></div>
</td>
</tr>

<tr>
<td rowspan="4"><h4>第五阶段：<br>混合(Hybrid,RN)开发</h4></td>
<td><h4>项目十四、<br>微信公众号开发</h4></td>
<td colspan="2">
<p>- 初识微信公众号</p><p>- 订阅号的基本功能</p><p>- 使用百度BAE实现代码的快速上线</p><p>- 使用Git完成线上代码部署</p><p>- 公众号开发权限及功能接入</p><p>- 微信JSSDK接口API</p><p>- 微信场景项目开发与接入</p>
<div class="pro-img"><img src="static/templates/main/images/pro-13.jpg" alt=""></div>
</td>
</tr>
<tr>
<td>
<h4>项目十五、<br>微信小程序开发</h4>
</td>
<td colspan="2">
<p>- 微信小程序初探</p><p>- 小程序入门必学</p><p>- 小程序组件体验</p><p>- 小程序大功能</p><p>- 项目实战带你征服小程序</p><br><br>
<div class="pro-img"><img src="static/templates/main/images/pro-14.jpg" alt=""></div>
</td>
</tr>
<tr>
<td>
<h4>项目十六、<br>React Native</h4>
</td>
<td colspan="2">
<p>- React Native初探</p><p>- React Native 项目导航</p><p>- React Native 项目文本框</p><p>- React Native 项目滚动分页</p><p>- React Native 项目第三方登录</p><p>- React Native 其他组件</p>
<div class="pro-img"><img src="static/templates/main/images/pro-15.jpg" alt=""></div>
</td>
</tr>
<tr>
<td>
<h4>项目十七、各类混合应用开发</h4>
</td>
<td colspan="2">
<p>- 自主原生Navtive Hybrid(iOS、Android)</p><p>- 第三方Hybrid框架Cordova/Phone gap</p><p>- 第三方Hybrid框架MUI + HTML5+</p><br><br>
<div class="pro-img"><img src="static/templates/main/images/pro-16.jpg" alt=""></div>
</td>
</tr>

<tr>
<td rowspan="8">
<h4>第六阶段：<br>NodeJS全栈开发</h4>
</td>
<td rowspan="7">
<h4>项目十八、<br>Node.js基础项目</h4>
</td>
<td>
<h4>一、NodeJS基础</h4>
</td>
<td>
<div class="cont-dib">
<p>- NodeJS介绍</p><p>- 开发环境搭建</p><p>- 模块与包管理工具</p><p>- CommonJS模块</p><p>- URL网址解析</p><p>- QueryString参数处理</p><p>- HTTP模块</p><p>- HTTP小爬虫</p><p>- request方法</p><p>- 事件 events模块</p><p>- 文件 fs模块</p><p>- Stream 流模块</p><p>- 原生路由与参数接收</p><p>- 读取图片文件</p><p>- npm scripts</p><p>- Yarn 与 PM2</p>
</div>
</td>
</tr>
<tr>
<td>
<h4>二、MongoDB</h4>
</td>
<td>
<div class="cont-dib">
<p>-MongoDB介绍与环境搭建</p><p>-数据库常用命令</p><p>-Collection聚集集合</p><p>-document文档操作</p><p>-聚集集合查询</p><p>-NodeJS连接MongoDB</p>
</div>
</td>
</tr>
<tr>
<td>
<h4>三、GraphGL</h4>
</td>
<td>
<div class="cont-dib">
<p>- GraphQL初探:从REST到GraphQL</p><p>- GraphGL安装</p><p>- 准备数据源</p><p>- 搭建GraphQL服务器</p><p>- 数据查询</p>
</div>
</td>
</tr>
<tr>
<td>
<h4>四、Express</h4>
</td>
<td>
<div class="cont-dib">
<p>- express 介绍</p><p>- 安装和创建基于Express的项目</p><p>- Express 4.1x 初始化项目详解</p><p>- 路由简介</p><p>- 模板引擎EJS</p><p>- 模板引擎Pug（Jade）</p>
</div>
</td>
</tr>
<tr>
<td>
<h4>五、Koa</h4>
</td>
<td>
<div class="cont-dib">
<p>- Koa入门</p><p>- Koa应用</p><p>- 中间件</p><p>- Context</p><p>- async await</p><p>- 请求与响应</p>
</div>
</td>
</tr>
<tr>
<td>
<h4>六、测试框架mocha</h4>
</td>
<td>
<div class="cont-dib">
<p>- 搭建框架</p><p>- 断言assert</p><p>- 项目测试</p><p>- 运行多个测试</p>
</div>
</td>
</tr>
<tr>
<td>
<h4>七、socket 即时通信项目</h4>
</td>
<td>
<div class="cont-dib">
<p>- Socket简介和通讯流程</p><p>- 基于net模块实现socket</p><p>- WebSocket</p><p>- Socket.io</p>
<div class="pro-img" style="position: inherit; height: 135px;">
<img src="static/templates/main/images/pro-17.jpg" alt="">
</div>
</div>
</td>
</tr>
<tr>
<td>
<h4>项目十九、<br>Node.js高级全栈项目</h4>
</td>
<td colspan="2">
<p>- 基于Vue+Node+MongoDB+微信的高级全栈项目开发</p><br><br><br><br><br><br>
<div class="pro-img">
<img src="static/templates/main/images/pro-18.jpg" alt="">
</div>
</td>
</tr>
<tr>
<td rowspan="5">
<h4>第七阶段：<br>大数据可视化</h4>
</td>
<td rowspan="5">
<h4>项目二十、<br>大数据可视化化基础与实战</h4>
</td>
<td>
<h4>一、数据可视化入门</h4>
</td>
<td>
<div class="cont-dib">
<p>- 数据可视化基础</p><p>- 零编程工具使用：ChartBlocks、Infogram、plotly、Raw、Tableau</p>
</div>
</td>
</tr>
<tr>
<td>
<h4>二、D3.js详解</h4>
</td>
<td>
<div class="cont-dib">
<p>- D3.js 入门</p><p>- D3.js 进阶</p><p>- D3.js 选择集与数据</p><p>- D3.js 高级应用</p><p>- D3.js 应用工具：NVD3、n3<p>-charts</p>
</div>
</td>
</tr>
<tr>
<td>
<h4>三、其他JS库</h4>
</td>
<td>
<div class="cont-dib">
<p>- Highcharts</p><p>- FusionCharts</p><p>- Polymaps</p>
</div>
</td>
</tr>
<tr>
<td colspan="2">
<h4>四、项目实战</h4><br><br><br>
<div class="pro-img">
<img src="static/templates/main/images/pro-19.jpg" alt="">
</div>
</td>
</tr>
</table>
</div>
</div>
<a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank" class="btn" rel="nofollow">点击获取完整课程大纲体系</a>
<a href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank" class="btn" rel="nofollow">免费学习视频任你听</a>
</div>
</div>

<div class="liangxin section">
<div class="base">
<h2 class="biaoti">良心做教育 真心育人才 鸿博用心呵护你一切</h2>
<a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank" class="btn">点击咨询详情</a>
<ul>
<li><a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank">
<p><span></span><span></span></p>
<p>0学费入学</p>
<p>与百度达成合作，<br />鸿博学员可享受0学费入学专属优惠</p>
</a></li>
<li><a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank">
<p><span></span><span></span></p>
<p>1周免费试听</p>
<p>推出“两周免费试听，不满意不缴费”<br />政策，让学员了解更真实的鸿博</p>
</a></li>
<li><a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank">
<p><span></span><span></span></p>
<p>协议保障</p>
<p>签订《就业培训协议》，在<br />协议里写出明确薪水</p>
</a></li>
<li><a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank">
<p><span></span><span></span></p>
<p>高成本项目实战</p>
<p>紧跟企业需求，投入高教学成本，让<br />每一名学员都拿得出成熟作品</p>
</a></li>
<li><a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank">
<p><span></span><span></span></p>
<p>就业保障</p>
<p>每年至少12场名企双选会<br />10000余家合作企业为学员提供满意岗位</p>
</a></li>
<li><a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank">
<p><span></span><span></span></p>
<p>就业服务</p>
<p>就业指导课，1对1就业服务<br />1年就业跟踪，随时提供就业服务</p>
</a></li>
<li><a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank">
<p><span></span><span></span></p>
<p>创业平台</p>
<p>毕业学员创业平台资源，人脉就是财<br />富，在鸿博很容易找到合伙人，随时接<br />项目，随时可创业</p>
</a></li>
<li><a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank">
<p><span></span><span></span></p>
<p>360度全方位服务</p>
<p>校友联盟会、大型单身party、技术讲<br />座、人生职业规划，拓宽视野、解决<br />单身</p>
</a></li>
</ul>
</div>
</div>
<div class="c7">
<div class="warp">
<h2 style="font-size: 46px;">
10000余家合作企业 雇主上门，<span>就业不愁</span>
</h2>
</div>
<div id="auto-width">
<div class="warp">
<table>
<tr>
<td><img src="static/upload/img/201802072327292790.jpg" alt=""></td>
<td><img src="static/upload/img/201802072327149724.jpg" alt=""></td>
<td><img src="static/upload/img/201802072326505017.jpg" alt=""></td>
<td><img src="static/upload/img/201802070913136628.jpg" alt=""></td>
<td><img src="static/upload/img/201802070913055378.jpg" alt=""></td>
</tr>
<tr>
<td><img src="static/upload/img/201802070912514929.jpg" alt=""></td>
<td><img src="static/upload/img/201802070912436199.jpg" alt=""></td>
<td><img src="static/upload/img/201802070912341403.jpg" alt=""></td>
<td><img src="static/upload/img/201802070912257761.jpg" alt=""></td>
<td><img src="static/upload/img/201802070912131648.jpg" alt=""></td>
</tr>
<tr>
</tr>
</table>
<a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank">看看还有哪些企业选择鸿博学员？</a>
</div>
</div>
</div>
<div class="xdl_kczx1" id="modain">

<div class="xdl_hd">
<div class="container hdjhd">
<div class="module_title">
<h2 class="module_h2">学校环境</h2>
</div>
<div class="gs_item fl_left" style="color: rgb(0, 0, 0);margin-left: 0px;">
<img src="static/upload/img/201901041528116538.jpg" style="display: block;">
<div class="gs_btn">
<span style="color: rgb(0, 0, 0);">学校环境</span>
</div>
</div>
<div class="gs_item fl_left" style="color: rgb(0, 0, 0);">
<img src="static/upload/img/201809110955202566.jpg" style="display: block;">
<div class="gs_btn">
<span style="color: rgb(0, 0, 0);">学员风貌</span>
</div>
</div>
<div class="gs_item fl_left" style="color: rgb(0, 0, 0);">
<img src="static/upload/img/201809110956586228.jpg" style="display: block;">
<div class="gs_btn">
<span style="color: rgb(0, 0, 0);">宿舍环境</span>
</div>
</div>
<div class="gs_item fl_left" style="color: rgb(0, 0, 0);">
<img src="static/upload/img/201802051948025886.jpg" style="display: block;">
<div class="gs_btn">
<span style="color: rgb(0, 0, 0);">教学环境</span>
</div>
</div>
<div class="gs_item fl_left" style="color: rgb(0, 0, 0);margin-left: 0px;">
<img src="static/upload/img/201809110958477868.jpg" style="display: block;">
<div class="gs_btn">
<span style="color: rgb(0, 0, 0);">学员军训</span>
</div>
</div>
<div class="gs_item fl_left" style="color: rgb(0, 0, 0);">
<img src="static/upload/img/201802051948179733.jpg" style="display: block;">
<div class="gs_btn">
<span style="color: rgb(0, 0, 0);">教学环境</span>
</div>
</div>
<div class="gs_item fl_left" style="color: rgb(0, 0, 0);">
<img src="static/upload/img/201802051949080388.jpg" style="display: block;">
<div class="gs_btn">
<span style="color: rgb(0, 0, 0);">学校食堂</span>
</div>
</div>
<div class="gs_item fl_left" style="color: rgb(0, 0, 0);">
<img src="static/upload/img/201809111000519216.jpg" style="display: block;">
<div class="gs_btn">
<span style="color: rgb(0, 0, 0);">校园环境</span>
</div>
</div>
</div>
</div>
</div>

<div class="zixun section">
<ul class="base zx_list">
<li><a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank">有疑问点击咨询</a></li>
<li><a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank">报名抢座开始学习</a></li>
<li><a rel="nofollow" href="http://q.url.cn/ABULOl?_type=wpa&qidian=true" target="_blank">查看免费教程视频</a></li>
</ul>
</div>

{{--底部--}}
@include('home.layouts.footer')
{{--公共js--}}
@include('home.layouts.script')
<script id="qd28521529033c5559ef89a81cb9a2cce5a2f8af319e" src="https://wp.qiye.qq.com/qidian/2852152903/3c5559ef89a81cb9a2cce5a2f8af319e" charset="utf-8" async defer></script>
<script src="static/templates/main/js/index.js"></script>
<script src="static/templates/main/js/all.js"></script>
<script src="static/templates/main/js/ajax.js"></script>
<script type="text/javascript" src="static/templates/main/js/jquery-1.11.3.min.js"></script>
<script> (function(){ var bp = document.createElement('script'); var curProtocol = window.location.protocol.split(':')[0]; if (curProtocol === 'https') { bp.src = 'https://zz.bdstatic.com/linksubmit/push.js'; } else { bp.src = 'http://push.zhanzhang.baidu.com/push.js'; } var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(bp, s); })(); </script>
