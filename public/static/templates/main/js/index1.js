var playImgObj = $('.play_img');
var playListObj = $('.play_list');
var num = 0;
var timer_play, tag_play;
tag_play = false;
for (var cl = 1; cl < playImgObj.length; cl++) {
    playListObj.parent().append(playListObj.eq(0).clone());
    var playListObj = $('.play_list');
    playListObj.removeClass('play_list_change');
    playListObj.eq(0).addClass('play_list_change');
}


// 图片超过五张时，重新定位按钮
playImgObj.length > 5 ? $('.play ul').css('left', '750px') : '';

function myPlay(x, classname, classna) {
    var playListObj = $('.play_list');
    if (!x && x != 0) {
        num++;
        if (num > playImgObj.length - 1) num = 0;
        for (var i = 0; i < playImgObj.length; i++) {
            if (i == num) {
                playImgObj.eq(num).fadeIn(500);
                playListObj[num].className = classname;
            } else {
                playImgObj.eq(i).fadeOut(100);
                playListObj[i].className = classna;
            }
        }
    } else if (/\d/.test(x)) {
        num = x;
        for (var i = 0; i < playImgObj.length; i++) {
            if (i == x) {
                playImgObj.eq(x).fadeIn(500);
                playListObj[x].className = classname;
            } else {
                playImgObj.eq(i).fadeOut(100);
                playListObj[i].className = classna;
            }
        }
    } else if (x) {
        num--;
        if (num == -1) num = playImgObj.length - 1;
        for (var i = 0; i < playImgObj.length; i++) {
            if (i == num) {
                playImgObj.eq(num).fadeIn(500);
                playListObj[num].className = classname;
            } else {
                playImgObj.eq(i).fadeOut(100);
                playListObj[i].className = classna;
            }
        }
    } else {
        num++;
        if (num > playImgObj.length - 1) num = 0;
        for (var i = 0; i < playImgObj.length; i++) {
            if (i == num) {
                playImgObj.eq(num).fadeIn(500);
                playListObj[num].className = classname;
            } else {
                playImgObj.eq(i).fadeOut(100);
                playListObj[i].className = classna;
            }
        }
    }
}
timer_play = setInterval(function() {
    myPlay('', 'play_list play_list_change', 'play_list');
    tag_play = true;
}, 4000);

$('.play').on({
        mouseover: function() {
            clearInterval(timer_play);
            tag_play = false;
        },
        mouseout: function() {
            if (!tag_play) {
                timer_play = setInterval(function() { myPlay('', 'play_list play_list_change', 'play_list'); }, 4000);
                tag_play = true;
            }
        }
    })
    // 开班信息更多按钮
$('#more').click(function() {
    $('.xdlkc_1').toggleClass('show');
    $(this).toggleClass('more-show');
});
var xxzy_more_index = 0;
$('#xxzy_more_next').on('click', function() {
    xxzy_more_index + 6 <= $('#xxzy_more li').length ? xxzy_more_index++ : '';
    $(this).css('transform', 'translateX(1px)');
    $('#xxzy_more').css('marginLeft', xxzy_more_index * -241);
    var _self = $(this);
    setTimeout(function() {
        _self.css('transform', 'translateX(0)');
    }, 330);

});
$('#xxzy_more_prev').on('click', function() {
    xxzy_more_index !== 0 ? xxzy_more_index-- : '';
    $(this).css('transform', 'translateX(-1px)');
    $('#xxzy_more').css('marginLeft', xxzy_more_index * -241);
    var _self = $(this);
    setTimeout(function() {
        _self.css('transform', 'translateX(0)');
    }, 330);
});
playListObj.on({
    mouseover: function() {
        clearInterval(timer_play);
        tag_play = false;
        $('[class="play_list play_list_change"]').className = 'play_list play_list_change';
        if ($('[class="play_list play_list_change"]').length > 1) {
            playListObj[$(this).index()].className = 'play_list';
        } else {
            playListObj[$(this).index()].className = 'play_list play_list_change';
        }
    },
    mouseout: function() {
        if ($('[class="play_list play_list_change"]').length > 1) {
            playListObj[$(this).index()].className = 'play_list';

        }
    },
    click: function() {
        myPlay($(this).index(), 'play_list play_list_change', 'play_list', 4);
    }
})


$('.play_left_arrow').on({
    click: function() {
        myPlay(true, 'play_list play_list_change', 'play_list', 4);
    }
})
$('.play_right_arrow').on({
    click: function() {
        myPlay(false, 'play_list play_list_change', 'play_list', 4);
    }
});
// banner阴影
$('.two_box,.three_box,.four_box,.five_box').on({
    mouseover: function() {
        $(this).addClass('shadow');
    },
    mouseout: function() {
        $(this).removeClass('shadow');
    }
})
$('.xdlkclb ul li').css('border-right', '1px dashed #7a7a7a');
$('.xdlkclb ul li:nth-child(3n)').css({
    borderRight: 0,
    marginRight: 0
});
// // 学习资源切换
// $('.xxzy_ul li').on({
//     mouseover: function() {
//         $('.xxzy_ul li>a').removeClass('now');
//         $(this).find('a').addClass('now');
//         $('.xxzy_1').css('display', 'none');
//         $('.xxzy_1').eq($(this).index()).css('display', 'block');
//     }
// });
// // 兄弟连故事切换
// $('.gs_ul li').on({
//     mouseover: function() {
//         $('.gs_ul li>a').removeClass('now');
//         $(this).find('a').addClass('now');
//         $('.gs_1').css('display', 'none');
//         $('.gs_1').eq($(this).index()).css('display', 'block');
//     }
// });
// 课程中心效果
$('.kczx_item').on({
    mouseover: function() {
        $(this).addClass('shadow');
        $(this).find('.bg_position').css({
            'backgroundPositionX': -($(this).find('.bg_position').width())
        })
    },
    mouseleave: function() {
        $(this).removeClass('shadow');
    }
})
$('.module_left,.two_box,.three_box,.four_box,.five_box,.xxzy_item,.gs_item,.xyfc_item').on({
    mouseover: function() {
        $(this).addClass('shadow');
    },
    mouseout: function() {
        $(this).removeClass('shadow');
    }
})
$('.xxzy_item,.gs_item,.xdl_link>ul>li>a').on({
    mouseover: function() {
        $(this).css({
            'color': '#C11920'
        });
    },
    mouseout: function() {
        $(this).css({
            'color': '#000'
        });
    }
})
$('.gs_item').on({
    mouseover: function() {
        $(this).find('.gs_btn').children('span').css({
            'color': '#C11920'
        });
    },
    mouseout: function() {
        $(this).find('.gs_btn').children('span').css({
            'color': '#000'
        });
    }
})



$(".banner_up .ul1>li a").mouseover(function () {
		var x = $(this).index();
		$(this).addClass("on1").siblings("a").removeClass("on1");
		$(this).parents(".banner_up").children("banner_up_ul2").children("li").hide();
		$(this).parents(".banner_up").children("banner_up_ul2").children("li").eq(x).show();
	});
		