{{-- 包含页头 --css--}}
{{--头部-css--}}
@include('home.layouts.header')
<link rel="stylesheet" href="/static/templates/main/css1/index_zdrj.css">
<link rel="stylesheet" type="text/css" href="/static/templates/main/css1/index1.css" />
<link rel="stylesheet" href="/static/templates/main/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/static/templates/main/css/banner.css" />
<link rel="stylesheet" href="/static/templates/main/css1/index.css">
<style type="text/css">
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
    #ie7-warning{background:rgb(255,255,225); position:absolute; top:0; left:0; font-size:12px; color:#333; width:100%; padding:5px 0; text-align:center; z-index:99999; }
</style>
<div class="wrapper">

    <div class="bancon" style="width:100%;">
        <div class="ban_up">
            <div class="ban" style="width:100%;">


                <div id="slideBox" class="slideBox">
                    <div class="bd" id="bd">
                        <ul>
                            @foreach($rotation_chart as $item)
                                @if($item->picture_place == 0)
                                    <li><a href="{{$item->picture_url}}"><img src="{{$item->picture_src}}" style="background: url(/upload/201812/07/201812071113217173.jpg) center 0px no-repeat;width: 100%;height: 450px;" style="display: none;" /></a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <a class="prev" href="javascript:void(0)"><i class="iconfont bfont">&#xe60b;</i></a>
                    <a class="next" href="javascript:void(0)"><i class="iconfont bfont">&#xe614;</i></a>
                </div>

            </div>
        </div>
    </div>

    <div class="banner_up base">
        <div class="banner_tap_main">
            <ul class="ul1">
                <li class="banner_up_left">
                    <a class="left-ico-javaee" href="/java.html" title="Java大数据" target="_blank">
                        <span>Java大数据</span><i>></i>
                    </a>
                    <a class="left-ico-php" href="/php.html" title="PHP全栈" target="_blank">
                        <span>PHP全栈</span><i>></i>
                    </a>
                    <a class="left-ico-h5" href="/html5.html" title="HTML5全栈" target="_blank">
                        <span>HTML5全栈</span><i>></i>
                    </a>
                    <a class="left-ico-linux" href="tencent://message/?Menu=yes&amp;uin=932443281" title="云计算" target="_blank">
                        <span>云计算</span><i>></i>
                    </a>
                    <a class="left-ico-bigdata" href="tencent://message/?Menu=yes&amp;uin=932443281" title="人工智能" target="_blank">
                        <span>人工智能</span><i>></i>
                    </a>
                    <a class="left-ico-python" href="tencent://message/?Menu=yes&amp;uin=932443281" title="Python课程" target="_blank">
                        <span>Python课程</span><i>></i>
                    </a>
                    <a class="left-ico-ui" href="tencent://message/?Menu=yes&amp;uin=932443281" title="UI/UE设计" target="_blank">
                        <span>UI/UE设计</span><i>></i>
                    </a>
                </li>
            </ul>
            <div class="banner_up_ul2">
                <ul>
                    <li class="banner_up_right" title="">
                        <a href="/java.html" target="_blank" class="a1" title="">课程大纲</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a2" title="">点击报名</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a3" title="">就业薪资</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a4" title="">公开课</a>
                    </li>
                    <li class="banner_up_right" title="">
                        <a href="/php.html" target="_blank" class="a1" title="">课程大纲</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a2" title="">点击报名</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a3" title="">就业薪资</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a4" title="">公开课</a>
                    </li>
                    <li class="banner_up_right" title="">
                        <a href="/html5.html" target="_blank" class="a1" title="">课程大纲</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a2" title="">点击报名</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a3" title="">就业薪资</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a4" title="">公开课</a>
                    </li>
                    <li class="banner_up_right" title="">
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a1" title="">课程大纲</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a2" title="">点击报名</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a3" title="">就业薪资</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a4" title="">公开课</a>
                    </li>
                    <li class="banner_up_right" title="">
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a1" title="">课程大纲</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a2" title="">点击报名</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a3" title="">就业薪资</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a4" title="">公开课</a>
                    </li>
                    <li class="banner_up_right" title="">
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a1" title="">课程大纲</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a2" title="">点击报名</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a3" title="">就业薪资</a>
                        <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank" class="a4" title="">公开课</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bancon">
        <div class="ban_down">
            <div class="fast_path"> <s class="cc"></s> <s class="cc cc1"></s> <s class="cc cc2"></s> <s class="cc cc2 cc3"></s>
                <ul>
                    <li> <a href="/about/abouts.html" target="_blank"> <i class="iconfont" style="font-size:20px;">&#xe600;</i> <span>企业简介</span> </a> </li>
                    <li> <a href="/flow.html" target="_blank"> <i class="iconfont" style="font-size:20px;">&#xe61d;</i> <span>报名流程</span> </a> </li>
                    <li class="li_r"> <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank"> <i class="iconfont" style="font-size:20px;">&#xe622;</i> <span>来校路线</span> </a> </li>
                    <li class="li_b"> <a href="/StudentsStory.html" target="_blank"> <i class="iconfont">&#xe61c;</i> <span>学员故事</span> </a> </li>
                    <li class="li_b"> <a href="/Faculty.html" target="_blank"> <i class="iconfont">&#xe64f;</i> <span>豪华师资</span> </a> </li>
                    <li class="li_r li_b"> <a href="/ClassInformation.html" target="_blank"> <i class="iconfont">&#xe602;</i> <span>开班报道</span> </a> </li>
                </ul>
            </div>
            <div class="fast_r">

                <ul>
                    <li class="two_boxs"><a href="/studentemployment.html" target="_blank" rel="nofollow"><img src="/static/upload/img/20171114142802137.jpg" style="width: 232px; height: 130px" /></a></li>
                    <li class="three_boxs"><a href="/ClassInformation.html" target="_blank" rel="nofollow"><img src="/static/upload/img/20161014113453577.jpg" /></a></li>
                    <li class="four_boxs"><a href="/StudentsStory.html" target="_blank" rel="nofollow"><img src="/static/upload/img/20180103094134025.jpg" style="width: 232px; height: 130px;" /></a></li>
                    <li class="five_boxs"><a href="/flow.html" target="_blank" rel="nofollow"><img src="/static/upload/img/20161014113534360.jpg" /></a></li>
                </ul>

            </div>
        </div>
    </div>

    <section class="sec hm_plot" style="margin-top: 10px;">
        <div class="hd">
            <h2 class="hd_tt">就业信息</h2>
            <a href="/StudentsStory.html" class="a_default" style="line-height: 90px;">查看更多&gt;&gt;</a>
        </div>
        {{-- 就业信息 --}}
        @include('home.layouts.EmploymentInfo')
    </section>

    <div class="xdl_kczx" id="modain">
        <div class="container">
            <div class="module_title">
                <a title="查看更多&gt" alt="查看更多&gt" href="/Campusall.html"><h2 class="module_h2">课程中心</h2></a>
            </div>
            <div class="module_content">
                <div class="module_left module_left_6 fl_left">
                    <a href="/java.html"><img alt="JavaEE+大数据工程师" src="/static/upload/img/java.png" style="display: block;"></a>
                </div>
                <div class="module_right fl_right">
                    <div class="fl_left">
                        <div class="module_right_top">
                            <a href="/java.html" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_2 kc_2_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_course.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>课程大纲</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_1 kc_1_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_baoming.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>点击报名</span>
                                </div>
                            </a>
                        </div>
                        <div class="module_right_btn" style="margin-top:10px;">
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_5 kc_5_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_jiuye.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>就业薪资</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_7 kc_7_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_gongkaike.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>公开课</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <style>
                        .xkzx_back_java {
                            background:url('/static/upload/img/javasm.jpg') no-repeat;
                        }

                        .aaxxx {
                            background:url('/static/upload/img/wxcx.png') no-repeat;
                        }

                        .kc_5_6 div {
                            background-position: 0px;
                        }
                        .kc_7_6 div {
                            background-position: 0px;
                        }
                    </style>
                    <div class="module_right_r fl_left">
                        <a title="查看更多&gt" alt="查看更多&gt" href="/Campusjava.html"><h2 class="xkzx_back_java six_boxs"></h2></a>
                        <div class="kczx_xkzx">
                            <ul>
                                @foreach($art_java as $art_java)
                                <a href="/show-{{$art_java->article_id}}"><li>{{$art_java->title}}</li></a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="module_content">
                <div class="module_left fl_left">
                    <a href="/php.html"><img alt="PHP开发工程师" src="/static/upload/img/php.png" style="display: block;"></a>
                </div>
                <div class="module_right fl_right">
                    <div class="fl_left">
                        <div class="module_right_top">
                            <a href="/php.html" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_2 kc_2_1">
                                        <div class="bg_position"></div>
                                    </div>
                                    <span>课程大纲</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_1 kc_1_1">
                                        <div class="bg_position"></div>
                                    </div>
                                    <span>点击报名</span>
                                </div>
                            </a>
                        </div>
                        <div class="module_right_btn" style="margin-top:10px;">
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_5 kc_5_1">
                                        <div class="bg_position"></div>
                                    </div>
                                    <span>就业薪资</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_7 kc_7_1">
                                        <div class="bg_position"></div>
                                    </div>
                                    <span>公开课</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <style>
                        .xkzx_back_php {
                            background:url('/static/upload/img/PHPsm.jpg') no-repeat;
                        }
                    </style>
                    <div class="module_right_r fl_left">
                        <a title="查看更多&gt" alt="查看更多&gt" href="/Campusphp.html"><h2 class="xkzx_back_php seven_boxs"></h2></a>
                        <div class="kczx_xkzx">
                            <ul>
                                @foreach($art_php as $art_php)
                                    <a href="/show-{{$art_php->article_id}}"><li>{{$art_php->title}}</li></a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="module_content">
                <div class="module_left module_left_2 fl_left">
                    <a href="/html5.html"><img alt="H5全栈工程师" src="/static/upload/img/h5.jpg"></a>
                </div>
                <div class="module_right fl_right">
                    <div class="fl_left">
                        <div class="module_right_top">
                            <a href="/html5.html" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_2 kc_2_2">
                                        <div class="bg_position"></div>
                                    </div>
                                    <span>课程大纲</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_1 kc_1_2">
                                        <div class="bg_position"></div>
                                    </div>
                                    <span>点击报名</span>
                                </div>
                            </a>
                        </div>
                        <div class="module_right_btn" style="margin-top:10px;">
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_5 kc_5_2">
                                        <div class="bg_position"></div>
                                    </div>
                                    <span>就业薪资</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_7 kc_7_2">
                                        <div class="bg_position"></div>
                                    </div>
                                    <span>公开课</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <style>
                        .xkzx_back_h5 {
                            background:url('/static/upload/img/HTML5sm.jpg') no-repeat;
                        }
                    </style>
                    <div class="module_right_r fl_left">
                        <a title="查看更多&gt" alt="查看更多&gt" href="/Campush5.html"><h2 class="xkzx_back_h5 eight_boxs"></h2></a>
                        <div class="kczx_xkzx">
                            <ul>
                                @foreach($art_html as $art_html)
                                    <a href="/show-{{$art_html->article_id}}"><li>{{$art_html->title}}</li></a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="module_content">
                <div class="module_left module_left_6 fl_left">
                    <a href="tencent://message/?Menu=yes&amp;uin=932443281"><img alt="云计算" src="/static/upload/img/yun.jpg" style="display: block;"></a>
                </div>
                <div class="module_right fl_right">
                    <div class="fl_left">
                        <div class="module_right_top">
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_2 kc_2_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_course.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>课程大纲</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_1 kc_1_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_baoming.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>点击报名</span>
                                </div>
                            </a>
                        </div>
                        <div class="module_right_btn" style="margin-top:10px;">
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_5 kc_5_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_jiuye.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>就业薪资</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_7 kc_7_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_gongkaike.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>公开课</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <style>
                        .xkzx_back_yun {
                            background:url('/static/upload/img/yunsm.jpg') no-repeat;
                        }

                        .aaxxx {
                            background:url('/static/upload/img/wxcx.png') no-repeat;
                        }

                        .kc_5_6 div {
                            background-position: 0px;
                        }
                        .kc_7_6 div {
                            background-position: 0px;
                        }
                    </style>
                    <div class="module_right_r fl_left">
                        <a title="查看更多&gt" alt="查看更多&gt" href="/Campusyun.html"><h2 class="xkzx_back_yun six_boxs"></h2></a>
                        <div class="kczx_xkzx">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="module_content">
                <div class="module_left module_left_6 fl_left">
                    <a href="tencent://message/?Menu=yes&amp;uin=932443281"><img alt="人工智能" src="/static/upload/img/intelligent.jpg" style="display: block;"></a>
                </div>
                <div class="module_right fl_right">
                    <div class="fl_left">
                        <div class="module_right_top">
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_2 kc_2_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_course.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>课程大纲</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_1 kc_1_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_baoming.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>点击报名</span>
                                </div>
                            </a>
                        </div>
                        <div class="module_right_btn" style="margin-top:10px;">
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_5 kc_5_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_jiuye.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>就业薪资</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_7 kc_7_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_gongkaike.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>公开课</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <style>
                        .xkzx_back_intelligent {
                            background:url('/static/upload/img/intelligentsm.jpg') no-repeat;
                        }

                        .aaxxx {
                            background:url('/static/upload/img/wxcx.png') no-repeat;
                        }

                        .kc_5_6 div {
                            background-position: 0px;
                        }
                        .kc_7_6 div {
                            background-position: 0px;
                        }
                    </style>
                    <div class="module_right_r fl_left">
                        <a title="查看更多&gt" alt="查看更多&gt" href="/Campusintelligent.html"><h2 class="xkzx_back_intelligent six_boxs"></h2></a>
                        <div class="kczx_xkzx">
                            <ul>
                                <a href="/Campusintelligent/show-6396.html"><li>用Python语言巧妙的实现进度条</li></a>
                                <a href="/Campusintelligent/show-6370.html"><li>Python多线程定义及用法详细解析</li></a>
                                <a href="/Campusintelligent/show-5393.html"><li>Python入门应该怎么学才能学好？</li></a>
                                <a href="/Campusintelligent/show-5392.html"><li>Python开发函数定义及使用方法详解</li></a>
                                <a href="/Campusintelligent/show-5385.html"><li>Python开发笔记第一天</li></a>
                                <a href="/Campusintelligent/show-5382.html"><li>利用Python来实现网站目录扫描器</li></a>

                                <a href="/Campusintelligent/show-5373.html"><li>python开发中装饰器-迭代器-生成器定义及用法详细解析</li></a>
                                <a href="/Campusintelligent/show-5353.html"><li>Python爬虫巧妙实现对微医挂号网医生的数据抓取</li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="module_content">
                <div class="module_left module_left_6 fl_left">
                    <a href="tencent://message/?Menu=yes&amp;uin=932443281"><img alt="Python课程" src="/static/upload/img/python.jpg" style="display: block;"></a>
                </div>
                <div class="module_right fl_right">
                    <div class="fl_left">
                        <div class="module_right_top">
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_2 kc_2_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_course.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>课程大纲</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_1 kc_1_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_baoming.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>点击报名</span>
                                </div>
                            </a>
                        </div>
                        <div class="module_right_btn" style="margin-top:10px;">
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_5 kc_5_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_jiuye.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>就业薪资</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_7 kc_7_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_gongkaike.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>公开课</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <style>
                        .xkzx_back_python {
                            background:url('/static/upload/img/pythonsm.jpg') no-repeat;
                        }

                        .aaxxx {
                            background:url('/static/upload/img/wxcx.png') no-repeat;
                        }

                        .kc_5_6 div {
                            background-position: 0px;
                        }
                        .kc_7_6 div {
                            background-position: 0px;
                        }
                    </style>
                    <div class="module_right_r fl_left">
                        <a title="查看更多&gt" alt="查看更多&gt" href="/Campuspython.html"><h2 class="xkzx_back_python six_boxs"></h2></a>
                        <div class="kczx_xkzx">
                            <ul>
                                @foreach($art_Python as $art_Python)
                                    <a href="/show-{{$art_Python->article_id}}"><li>{{$art_Python->title}}</li></a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="module_content">
                <div class="module_left module_left_6 fl_left">
                    <a href="tencent://message/?Menu=yes&amp;uin=932443281"><img alt="UI/UE设计" src="/static/upload/img/ui.jpg" style="display: block;"></a>
                </div>
                <div class="module_right fl_right">
                    <div class="fl_left">
                        <div class="module_right_top">
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_2 kc_2_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_course.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>课程大纲</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_1 kc_1_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_baoming.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>点击报名</span>
                                </div>
                            </a>
                        </div>
                        <div class="module_right_btn" style="margin-top:10px;">
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left">
                                    <div class="bg_eee bg_eee_5 kc_5_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_jiuye.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>就业薪资</span>
                                </div>
                            </a>
                            <a href="tencent://message/?Menu=yes&amp;uin=932443281" target="_blank">
                                <div class="kczx_item fl_left mr0">
                                    <div class="bg_eee bg_eee_7 kc_7_6">
                                        <div class="bg_position" style="background-image: url(/static/upload/img/java_gongkaike.png);background-repeat:repeat;"></div>
                                    </div>
                                    <span>公开课</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <style>
                        .xkzx_back_ui {
                            background:url('/static/upload/img/uism.jpg') no-repeat;
                        }

                        .aaxxx {
                            background:url('/static/upload/img/wxcx.png') no-repeat;
                        }

                        .kc_5_6 div {
                            background-position: 0px;
                        }
                        .kc_7_6 div {
                            background-position: 0px;
                        }
                    </style>
                    <div class="module_right_r fl_left">
                        <a title="查看更多&gt" alt="查看更多&gt" href="/Campusui.html"><h2 class="xkzx_back_ui six_boxs"></h2></a>
                        <div class="kczx_xkzx">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container1" style="width: 1200px;margin: 0 auto;">
        <div class="itit" style="margin-bottom: 15px;">
            <div class="itit-im"></div>
            <p class="tit-font">
                <span>开课时间表</span>
                <span class="text-warning">
<span>
<a href="/ClassInformation.html" class="tit-more">更多<span class="right-aquo">&gt;&gt;</span></a>
</span></span></p>
        </div>
        <div class="city_class city_subject">
            <table class="table table-hover table-bordered">
                <tbody>
                <tr>
                    <th>培训形式</th>
                    <th>技术科目</th>
                    <th>开班期数</th>
                    <th>开班时间</th>
                    <th>课程大纲</th>
                    <th>火热抢座中</th>
                </tr>
                @foreach($course as $item)
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-blackboard marker1"></span>
                            <span>
                                <b>{{$item->course_form == 1?'线下授课':'线上授课'}}</b>
                            </span>
                        </td>
                        <td class="myitem">
                            <span>
                                <b>{{$item->course_name}}</b>
                            </span>
                        </td>
                        <td>
                            <span>
                                <b>第{{$item->course_num}}期</b>
                            </span>
                        </td>
                        <td class="bg-warning">
                            <span>
                                <b>{{date("Y-m-d",$item->course_time)}} </b>
                            </span>
                        </td>
                        <td>
                            <a href="{{$item->outline_link}}" class="btn" target="_blank">
                                <b>课程大纲</b>
                            </a>
                        </td>
                        <td>
                            <span class="glyphicon glyphicon-fire"></span>
                            <a href="{{$item->enroll_link}}" class="btn btn-danger" target="_blank">
                                <b>火热抢座中</b>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="part new">
        <div class="title2">
            <a href="/Campus.html" target="_blank">
                <h2>在鸿博 ，他们有话说！ <img src="/templates/main/img/title-jt.png"></h2>
            </a>
        </div>
        <div class="main">
            <div class="container">
                <div class="newDiv clearfix">
                    <div class="box">
                        <a href="/Campus/show-1063.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201807051107536358.jpg">
                            </div>
                            <div class="info">
                                <h3>你想成为“扶摇式女主”吗？</h3>
                                <p>最近的热播剧《扶摇》不知各位是不是也像小编一样每天晚上踩点儿追剧呢？《扶摇》这部剧以女主的名字命名，由杨幂饰演的扶摇在剧中人如其名，从一名平凡的甚至是生活在底层的少女，一步步扶摇直上，穷取九霄，大览世间万千。剧中的扶摇性格刚正不阿，重情谊，更是喜欢打抱…</p>
                                <span class="times">2018-07-05</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1062.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201807051057055548.jpg">
                            </div>
                            <div class="info">
                                <h3>谢谢这些校长的毕业致辞把我从毕业季的伤感中拉了出来！</h3>
                                <p>又到了每年的毕业季，作为一名刚毕业不久的学生，每每到了这样毕业的一个时期，看到从大学校门提着行李，和相处四年的室友相拥告别的场景时，都不禁会黯然伤感起来，就在小编沉浸在告别校园生活的悲痛中时，看到了各路网友吐槽的校长毕业致辞，破涕为笑。电影“串烧”版毕…</p>
                                <span class="times">2018-07-05</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1061.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201807031612306876.jpg">
                            </div>
                            <div class="info">
                                <h3>鸿博教育给您讲解谷歌涂鸦的由来</h3>
                                <p>这一天的“谷歌涂鸦”你看懂了吗？ 熟悉谷歌搜索的同学们都知道，谷歌在每个特殊的历史日子都会推出特定的“谷歌涂鸦”，这些涂鸦会在谷歌搜索引擎的首页出现，并只持续出现在这一天，谷歌是在2011年3月23日获得了谷歌涂鸦(Google Doodles)功能的，几年间的时间里，…</p>
                                <span class="times">2018-07-03</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1060.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806281412153312.jpg">
                            </div>
                            <div class="info">
                                <h3>“冲天一博气如虹,踏浪凌波入海中”鸿博教育祝高考学子金榜题名</h3>
                                <p>古时有寒窗学子十年苦读，为的就是那金榜题名一飞冲天,但是殷殷学子又有多少能够金榜题名的呢？这些学子们需要先考府试，考取童生。然后童生参加院试，考取生员和秀才，此时第一名称为案首。然后参加乡试（也就是常说的秋闱）考取举人，第一名称为解元。之后就是会试，考…</p>
                                <span class="times">2018-06-28</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1059.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806271351096056.jpg">
                            </div>
                            <div class="info">
                                <h3>感谢鸿博教育给予我浴火重生的机会</h3>
                                <p>高考落榜对于每一位学子们的打击都是无与伦比的沉重，尤其是对那些已经复读几年的学子们打击更甚！每个学子都会沉沦，都会消沉。高考落榜后学子们不论是从心里还是从日常都会承受巨大的压力，这些学子正如龙游浅滩被虾戏，虎落平阳被犬欺。只需要一个机遇就会一飞冲天。 …</p>
                                <span class="times">2018-06-27</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1058.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806270728058429.jpg">
                            </div>
                            <div class="info">
                                <h3>大鹏一日同风起,扶摇直上九万里</h3>
                                <p>回想起高考落榜的那段日子，还真是让人难忘啊，记得当时我整个人都是昏昏沉沉，自己的人生迷失在了茫茫的汪洋中，自己辜负了老师、家人对我的期望，当我听到邻居间讲自己的孩子高考考了多少分，被哪所大学录取，自己恨不得找个地缝钻进去，因为我自己的原因让我的家人蒙羞…</p>
                                <span class="times">2018-06-27</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1057.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806260741150997.jpg">
                            </div>
                            <div class="info">
                                <h3>金麟岂是池中物，一遇风云便化龙</h3>
                                <p>说实话落榜的那段时间自己感觉整个世界都是灰色的，感觉自己辜负了家人和老师对我的期望，毕竟是我已经复读了3年了，虽然是林志炫的单身情歌的歌词是爱要越挫越勇，可是连续把我挫败了3次，也真是够了，那段时间我整个人都是浑浑噩噩的，彷佛自己成了行尸走肉。 偶…</p>
                                <span class="times">2018-06-26</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1056.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806220951455675.jpg">
                            </div>
                            <div class="info">
                                <h3>感谢鸿博教育给我再次开启鱼跃龙门之路</h3>
                                <p>回想那段时间真是感觉自己的人生充满的黑暗，这个的高考落榜给我的打击太大了，三年的苦读付之一炬啊，自己很不甘心，毕竟已经复读了2年了，当我看到同学们都兴高采烈的拿到了重点大学的录取通知书的时候，我感觉自己已经被俗世隔离，自己的心沉沦在黑暗的深渊。 一…</p>
                                <span class="times">2018-06-22</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1055.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806210816071359.jpg">
                            </div>
                            <div class="info">
                                <h3>鸿博教育招生简章</h3>
                                <p>一、鸿博教育简介 鸿博教育成立于2007年，专注于IT技术培训，拥有最具前沿的互联网高新技术，现已开设JavaEE+大数据、PHP、全栈工程师、HTML5混合开发等多学科，累计培训逾两万名学员，每年有大量学员收益于鸿博IT教育的职业培训。 鸿博教育用10年沉…</p>
                                <span class="times">2018-06-21</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1053.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806131402540519.png">
                            </div>
                            <div class="info">
                                <h3>Java程序员面试最常见的10道XML试题</h3>
                                <p>本文将看到10道常见的XML面试问答题。这些问题大部分在Java面试中会问到，同时在C，C++，Scala或其他语言的编程面试中同样很有用处。XML并不依赖于其他编程语言，同SQL一样是编程人员所需要的技能之一，因此在任何技术工作面试之前准备一些XML问题是很有意义的。XML面试问…</p>
                                <span class="times">2018-06-13</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1052.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806120840162355.gif">
                            </div>
                            <div class="info">
                                <h3>鸿博教育给您讲解JAVA7的7个新特性</h3>
                                <p>Java 7 的7个新特性每篇一囧：最可怕的事，是比我聪明的人还比我努力！1.对集合类的语言支持；2.自动资源管理；3.改进的通用实例创建类型推断；4.数字字面量下划线支持；5.switch中使用string；6.二进制字面量；7.简化可变参数方法调用。 ====================== 华丽丽…</p>
                                <span class="times">2018-06-12</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1051.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806120825226105.jpg">
                            </div>
                            <div class="info">
                                <h3>鸿博教育办学优势</h3>
                                <p>鸿博教育办学优势一、硬件优势设施完善，舒适学习二、管理优势准军事化管理，培养规律的学习生活方式三、教学优势徐彩辉——鸿博创始人12年从军经历,教育行业从业12年,对教育的本质有着深刻的理解。创办鸿博以来,坚持“认真严谨、用心负责”的核心理念,本着“科学发…</p>
                                <span class="times">2018-06-12</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1050.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806110932338693.jpg">
                            </div>
                            <div class="info">
                                <h3>JAVA学习中最容易忽略的一些小细节</h3>
                                <p>java学习　　关于java传值的一点小细节：java语言中对象传递地址，而不是引用。　　例如：假设对象Test有name的属性。123456789101112131415161718192021　public void call(Test){ 　　Test t2 = new Test(); 　　t2.setName(&quot;cba&quot;); 　　t.setName(&quot;abc…</p>
                                <span class="times">2018-06-11</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1049.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806081911253136.jpg">
                            </div>
                            <div class="info">
                                <h3>JAVA程序员基础的面试题都有哪些？</h3>
                                <p>一般面试官都会让面试者回答哪些Java基础面试题啊?难不难啊? 针对这一系列的疑问，小编在此收集了部分Java基础面试题与大家分享，希望对各位有一定的帮助! 一、Java基础知识 1.Java有那些基本数据类型，String是不是基本数据类型，他们有何区别。 …</p>
                                <span class="times">2018-06-08</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1048.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806071001358712.jpg">
                            </div>
                            <div class="info">
                                <h3>Java 环境 JDK 最完整配置方法</h3>
                                <p>jdk环境变量配置 进行java开发，首先要安装jdk，安装了jdk后还要进行环境变量配置： 1、下载jdk（http://www.oracle.com/technetwork/java/javase/downloads/index.html），我下载的版本是：jdk-7u13-windows-i586.exe 2、安装jdk-7u13-windows-i586.exe 3、配置环境…</p>
                                <span class="times">2018-06-07</span>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="/Campus/show-1047.html" target="_blank">
                            <div class="img">
                                <img src="/static/upload/img/201806061113036798.jpg">
                            </div>
                            <div class="info">
                                <h3>java软件编程开发中类与对象的知识解析</h3>
                                <p>类与包包是Java的类库管理机制，它借助文件系统的目录来管理类库，一个包就是一个目录，属于一个包的类必须放在一个目录下，包名就是目录。eg:import com.company.Class这里的的Class为类名，则这个类的class文件位于工程目录下的com\company目录下。类中的成员的访问权限…</p>
                                <span class="times">2018-06-06</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mores" style="display: none;"><a href="/Campus.html">查看更多</a></div>
            <a class="jt" style="background-image:url(/img/jt.png);"></a>
        </div>
    </div>
    <div class="xdl_kczx1" id="modain">
        <p class="clear_s"></p>

        <section class="sec hm_plot">
            <div class="hd">
                <h2 class="hd_tt">豪华师资</h2>
                <a href="/faculty" class="a_default">查看更多&gt;&gt;</a>
            </div>

            {{-- 就业信息 --}}
            @include('home.layouts.faculty')
        </section>

        <div class="xdl_hd">
            <div class="container hdjhd">
                <div class="module_title">
                    <h2 class="module_h2">学校环境</h2>
                </div>
                <div class="gs_item fl_left" style="color: rgb(0, 0, 0);margin-left: 0px;">
                    <img src="/static/upload/img/201901041528116538.jpg" style="display: block;">
                    <div class="gs_btn">
                        <span style="color: rgb(0, 0, 0);">学校环境</span>
                    </div>
                </div>
                <div class="gs_item fl_left" style="color: rgb(0, 0, 0);">
                    <img src="/static/upload/img/201809110955202566.jpg" style="display: block;">
                    <div class="gs_btn">
                        <span style="color: rgb(0, 0, 0);">学员风貌</span>
                    </div>
                </div>
                <div class="gs_item fl_left" style="color: rgb(0, 0, 0);">
                    <img src="/static/upload/img/201809110956586228.jpg" style="display: block;">
                    <div class="gs_btn">
                        <span style="color: rgb(0, 0, 0);">宿舍环境</span>
                    </div>
                </div>
                <div class="gs_item fl_left" style="color: rgb(0, 0, 0);">
                    <img src="/static/upload/img/201802051948025886.jpg" style="display: block;">
                    <div class="gs_btn">
                        <span style="color: rgb(0, 0, 0);">教学环境</span>
                    </div>
                </div>
                <div class="gs_item fl_left" style="color: rgb(0, 0, 0);margin-left: 0px;">
                    <img src="/static/upload/img/201809110958477868.jpg" style="display: block;">
                    <div class="gs_btn">
                        <span style="color: rgb(0, 0, 0);">学员军训</span>
                    </div>
                </div>
                <div class="gs_item fl_left" style="color: rgb(0, 0, 0);">
                    <img src="/static/upload/img/201802051948179733.jpg" style="display: block;">
                    <div class="gs_btn">
                        <span style="color: rgb(0, 0, 0);">教学环境</span>
                    </div>
                </div>
                <div class="gs_item fl_left" style="color: rgb(0, 0, 0);">
                    <img src="/static/upload/img/201802051949080388.jpg" style="display: block;">
                    <div class="gs_btn">
                        <span style="color: rgb(0, 0, 0);">学校食堂</span>
                    </div>
                </div>
                <div class="gs_item fl_left" style="color: rgb(0, 0, 0);">
                    <img src="/static/upload/img/201809111000519216.jpg" style="display: block;">
                    <div class="gs_btn">
                        <span style="color: rgb(0, 0, 0);">校园环境</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="xdl_hd1">
            <div class="container hdjhd">
                <div class="module_title">
                    <h2 class="module_h2">名企合作</h2>
                </div>
                <div style="width:1158px; height:180px; border:1px solid #F3F3F3; padding:10px 20px 10px 20px; margin-bottom:20px;">
                    <div style="float:left; width:200px;">
                        <img src="/static/upload/img/201802052256457214.jpg" width="130" height="180" />
                    </div>
                    <div style="float:left; width:950px;">
                        <div style="font-size:24px; font-weight:bold; height:40px; line-height:40px;margin-bottom: 10px; margin-top:5px;">
                            王明亮
                        </div>
                        <div style="font-size:16px;height:30px; line-height:30px;margin-bottom: 15px;">
                            新娱兄弟CTO
                        </div>
                        <div style="font-size:14px;height:80px; line-height:25px;">
                            鸿博培训出来的学员无论是从技术开发还是从职场素质都非常的优秀，来到企业能够快速的融入企业氛围。做项目也非常的用心，很刻苦。感谢鸿博老师培训出来的好学生！在未来一段时间里我们也将会与鸿博继续合作，也希望鸿博教育在许老师的带领下越来越好，为中国的I…
                        </div>
                    </div>
                </div>
                <div style="width:1158px; height:180px; border:1px solid #F3F3F3; padding:10px 20px 10px 20px; margin-bottom:20px;">
                    <div style="float:left; width:200px;">
                        <img src="/static/upload/img/201802091000523513.jpg" width="130" height="180" />
                    </div>
                    <div style="float:left; width:950px;">
                        <div style="font-size:24px; font-weight:bold; height:40px; line-height:40px;margin-bottom: 10px; margin-top:5px;">
                            闫鹏
                        </div>
                        <div style="font-size:16px;height:30px; line-height:30px;margin-bottom: 15px;">
                            校满满公司创始人
                        </div>
                        <div style="font-size:14px;height:80px; line-height:25px;">
                            鸿博培训出来的学员在企业的抗压能力还是很强，学员的学习能力也比较强，能够迅速融入团队，总体来说质量非常不错。
                        </div>
                    </div>
                </div>
                <div style="width:1158px; height:180px; border:1px solid #F3F3F3; padding:10px 20px 10px 20px; margin-bottom:20px;">
                    <div style="float:left; width:200px;">
                        <img src="/static/upload/img/201802091002548083.jpg" width="130" height="180" />
                    </div>
                    <div style="float:left; width:950px;">
                        <div style="font-size:24px; font-weight:bold; height:40px; line-height:40px;margin-bottom: 10px; margin-top:5px;">
                            王明
                        </div>
                        <div style="font-size:16px;height:30px; line-height:30px;margin-bottom: 15px;">
                            东软技术经理
                        </div>
                        <div style="font-size:14px;height:80px; line-height:25px;">
                            鸿博培训出来的学员自我学习能力比较强，遇到开发项目问题能够迅速解决，交代项目任务也能够如期完成，我是非常期待下一期的优质学员来我们企业就业，帮助学员们实现他们的人生抱负！
                        </div>
                    </div>
                </div>
                {{-- 合作企业 --}}
                @include('home.layouts.CooperativeEnterprise')

            </div>
        </div>

    </div>

    {{--底部--}}
    @include('home.layouts.footer')

</div>
{{--公共js--}}
@include('home.layouts.script')
<script src="/static/templates/main/js/jquery-1.7.2.min.js"></script>
<script>
    //拉幕特效
    setTimeout("lm()",2000);
    function lm(){
        $(".lm").slideDown(1000);
    }
    $(".close").click(function(){
        $(".lm").slideUp();
    })
</script>
<script src="/static/templates/main/js/jquery.min.js"></script>
<script src="/static/templates/main/js/index1.js"></script>
<script type="text/javascript" src="/static/templates/main/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/static/templates/main/js/special_java.js"></script>
<script>
    $('.kczx_item fl_left').on({
        mouseover: function() {
            $(this).addClass('shadow');
        },
        mouseout: function() {
            $(this).removeClass('shadow');
        }
    });
</script>
<script src="/static/templates/main/js/index.js"></script>
<script src="/static/templates/main/js/all.js"></script>
<script src="/static/templates/main/js/ajax.js"></script>
<script src="/static/templates/main/js/wow.min.js"></script>
<script src="/static/templates/main/js/jquery.SuperSlide.2.1.2.js"></script>
<script src="/static/templates/main/js/jquery.flipster.js"></script>
<script src="/static/templates/main/js/header.js"></script>
<script src="/static/templates/main/js/index.js"></script>

<script src="/static/templates/main/js/jquery.js"></script>
<script src="/static/templates/main/js/sidenav.min.js"></script>
<script>$('[data-sidenav]').sidenav();</script>

<script src="/static/templates/main/js/idangerous.swiper.js"></script>
<script src="/static/templates/main/js/idangerous.swiper.scrollbar-2.4.1.min.js"></script>

<script src="/static/templates/main/js/main.js"></script>
<script src="/static/templates/main/js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
<script>
    $('.two_boxs,.three_boxs,.four_boxs,.five_boxs,.six_boxs,.seven_boxs,.eight_boxs,.nine_boxs,.kczx_item,.module_left').on({
        mouseover: function() {
            $(this).addClass('shadow');
        },
        mouseout: function() {
            $(this).removeClass('shadow');
        }
    })



</script>


