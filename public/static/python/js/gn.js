//console.log('效果切换js')

var bannerAutoTime;
var xunhuan = setInterval(nextAuto, 2000);

$('.gn_box').find('div:first').show().nextAll().hide();

$('.gn_ul li').on('mouseenter', function() {

	clearInterval(xunhuan);
	clearTimeout(bannerAutoTime);

	var index_n = $(this).index();
	for(var i = 0; i < 12; i++) {
		$('.gn_ul li').removeClass('select_' + i);
	}
	$(this).toggleClass('select_' + index_n);
	$('.gn_box div').eq(index_n).show().siblings().hide();

	if(index_n == 0){index_num = 0;};
	if(index_n == 1){index_num = 1;};
	if(index_n == 2){index_num = 2;};
	if(index_n == 3){index_num = 3;};
	if(index_n == 4){index_num = 11;};
	if(index_n == 5){index_num = 4;};
	if(index_n == 6){index_num = 10;};
	if(index_n == 7){index_num = 5;};
	if(index_n == 8){index_num = 9;};
	if(index_n == 9){index_num = 8;};
	if(index_n == 10){index_num = 7;};
	if(index_n == 11){index_num = 6;};
	
	bannerAutoTime = setTimeout(
		function() {
			xunhuan = setInterval(nextAuto, 2000);
		}, 300);

})

/*全局变量，监听当前模块的展示值*/
var index_num = 0;

/*自动播放*/
function nextAuto() {
	if(index_num < 12) {
		index_num++;
	} else {
		index_num = 0;
	}

	doing(index_num);
}

/*清楚样式*/
function clear_fn() {
	for(var i = 0; i < 12; i++) {
		$('.gn_ul li').removeClass('select_' + i);
	}
}
/*动画方法*/
function doing(i) {
	if(i == 0) {
		clear_fn();
		$('.gn_ul li').eq(0).toggleClass('select_0');
		$('.gn_box div').eq(0).show().siblings().hide();
	}
	if(i == 1) {
		clear_fn();
		$('.gn_ul li').eq(1).toggleClass('select_1');
		$('.gn_box div').eq(1).show().siblings().hide();
	}
	if(i == 2) {
		clear_fn();
		$('.gn_ul li').eq(2).toggleClass('select_2');
		$('.gn_box div').eq(2).show().siblings().hide();
	}
	if(i == 3) {
		clear_fn();
		$('.gn_ul li').eq(3).toggleClass('select_3');
		$('.gn_box div').eq(3).show().siblings().hide();
	}
	if(i == 4) {
		clear_fn();
		$('.gn_ul li').eq(5).toggleClass('select_5');
		$('.gn_box div').eq(5).show().siblings().hide();
	}
	if(i == 5) {
		clear_fn();
		$('.gn_ul li').eq(7).toggleClass('select_7');
		$('.gn_box div').eq(7).show().siblings().hide();
	}
	if(i == 6) {
		clear_fn();
		$('.gn_ul li').eq(11).toggleClass('select_11');
		$('.gn_box div').eq(11).show().siblings().hide();
	}
	if(i == 7) {
		clear_fn();
		$('.gn_ul li').eq(10).toggleClass('select_10');
		$('.gn_box div').eq(10).show().siblings().hide();
	}
	if(i == 8) {
		clear_fn();
		$('.gn_ul li').eq(9).toggleClass('select_9');
		$('.gn_box div').eq(9).show().siblings().hide();
	}
	if(i == 9) {
		clear_fn();
		$('.gn_ul li').eq(8).toggleClass('select_8');
		$('.gn_box div').eq(8).show().siblings().hide();
	}
	if(i == 10) {
		clear_fn();
		$('.gn_ul li').eq(6).toggleClass('select_6');
		$('.gn_box div').eq(6).show().siblings().hide();
	}
	if(i == 11) {
		clear_fn();
		$('.gn_ul li').eq(4).toggleClass('select_4');
		$('.gn_box div').eq(4).show().siblings().hide();
	}

}