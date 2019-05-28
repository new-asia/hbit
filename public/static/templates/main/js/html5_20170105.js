$(document).ready(function(){$(".kb_list1 li").mouseover(function(){$(".kb_wrap").find("div").removeClass('active');$(this).addClass('hover bg').siblings('li').removeClass('hover bg');var i=$(this).index();var str='.chengshi'+i;$(".kb_wrap").find(str).addClass('active')});});(function($,window,document){var $jxjScroll,$jxjScrollUl,$jxjScrollLi,iH,timer,moveTime,delayTime;$jxjScroll=$(".scrollWrap");$jxjScrollUl=$jxjScroll.find("table");$jxjScrollLi=$jxjScroll.find("tbody tr");iH=$jxjScrollLi.first().outerHeight(true);moveTime=600;delayTime=3000;scrollTop();function scrollTop(){$jxjScroll.timer=setInterval(function(){$jxjScrollUl.find("tbody tr").first().animate({"opacity":0},moveTime);$jxjScrollUl.stop().animate({"top":-iH},moveTime,function(){$jxjScrollUl.find("tbody tr").first().appendTo($jxjScrollUl).css("opacity",1);$jxjScrollUl.css("top",0);});},delayTime);}})(jQuery,window,document);$(document).ready(function(){$("table").each(function(){if($("tr:nth-child(1) td",this).length==8){$("tr td:nth-child(5)",this).each(function(){if($(this).html().length>=6){$(this).html($(this).html().substr(0,2)+"**"+$(this).html().substr(-3,3))}})
    $("tr td:nth-child(1)",this).each(function(){if($(this).html().length==2){$(this).html($(this).html().substr(0,1)+"*")}
        if($(this).html().length>2){$(this).html($(this).html().substr(0,1)+"*"+$(this).html().substr(-1,1))}})}})});$(document).ready(function(){$(".kc_list1 li").each(function(index){$(this).mouseover(function(){$(this).addClass('hover').siblings('li').removeClass('hover');$(".kc_wrap .kc_jieduan").eq(index).show().siblings('.kc_jieduan').hide();})})})
$(document).ready(function(){var i=0;$(".nextbtn").on("click",function(){clearInterval(timer);i++;if(i>=$(".hj_list li").length){i=0;}
    move();})
    $(".prevbtn").on("click",function(){clearInterval(timer);--i;if(i<0){i=$(".hj_list li").length-1;}
        move();})
    function move(){$(".hj_list").animate({left:-i*842+'px'},500)}
    var timer=setInterval(move1,2000)
    function move1(){i++;if(i>=$(".hj_list li").length){i=0;}
        $(".hj_list").animate({left:-i*842+'px'},500)}});$(function(){$("#submit").click(function(){var regName=/[\u4E00-\u9FA5]{2,5}(?:·[\u4E00-\u9FA5]{2,5})*/;var name=$("#usename").val();var regQQ=/^[1-9]\d{4,13}$/;var regTel=/^(((1[0-9][0-9]{1}))+\d{8})$/;var qq=$("#QQ").val();var tel=$("#mobile").val();if(!regTel.test(tel)){alert('请输入正确的电话号码')
    return}
    if(!regQQ.test(qq)){alert('请输入正确的QQ号码')
        return}
    if(!regName.test(name)){alert('请输入正确的姓名')
        return}
    sourcepage=window.parent.document.referrer;Accesspage=window.parent.location.href;$.ajax({type:'get',url:'http://zs.1000phone.net/public/ajaxSourceInfo',data:{name:name,qq:qq,phone:tel,Accesspage:Accesspage,sourcepage:sourcepage},dataType:'jsonp',jsonp:"jsoncallback",success:function(data){alert(data.msg);},error:function(){alert('fail');}});})})