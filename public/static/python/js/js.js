/**
 * Created by Administrator on 2017/7/10.
 */
/*banner轮播*/
var mySwiper = new Swiper('.banner_swiper', {
    pagination: '.pagination',
    loop: true,
    grabCursor: true,
    autoplay: 5000,
    autoplayDisableOnInteraction: false,
    paginationClickable: true
})

var bannerH =function(){
    //var banner_h = $('.swiper-slide > img').height();
    $('.banner_swiper .swiper-wrapper, .banner_swiper .swiper-wrap .swiper-slide').height(540+'px');
}
bannerH();
/*$(window).resize(function () {
    bannerH();
});*/


/*功能，调查*/
/*$('.gn_box').find('div:first').show().nextAll().hide();

$('.gn_ul li').on('mouseenter',function () {
     var index_n = $(this).index();
     for (var i=0; i<12;i++){
         $('.gn_ul li').removeClass('select_'+i);
     }
    $(this).toggleClass('select_'+index_n);

    $('.gn_box div').eq(index_n).show().siblings().hide();


})*/

/*案例*/
$('.al_ul li').mouseenter(function () {
    $(this).siblings().removeClass('selected').end().addClass('selected');
});
$('.al_ul li').mouseleave(function () {
    $(this).removeClass('selected');
});
/*特点：简单、高效*/
var mySwiper = new Swiper('.td_swiper', {
    autoplay: 4000,//可选选项，自动滑动
    loop:true,
    pagination : '.swiper-pagination',
    autoplayDisableOnInteraction: false,
    paginationClickable: true
})

/*优势*/
var seeing_fn = function (ele) {
    ele.find('div:first').show().nextAll().hide();
}
seeing_fn($('.ys_content'));

$('.ys_lu li').on('mouseenter',function () {
    var this_index = $(this).index();
    $('.ys_content > div').eq(this_index+1).show().siblings().hide();
});
$('.ys_lu li').on('mouseleave',function () {
    //var this_index = $(this).index();
    $('.ys_content > div').eq(0).show().siblings().hide();
});

/*实践*/
var mySwiper = new Swiper('.sj_swiper_1', {
    autoplay: 3000,
    loop:true,
    pagination : '.sj_pagination_1',
    autoplayDisableOnInteraction: false,
    paginationClickable: true
});
 var mySwiper2 = new Swiper('.sj_swiper_2', {
    autoplay: 3000,//可选选项，自动滑动
    loop:true,
    pagination : '.sj_pagination_2',
    initialSlide :0,
    autoplayDisableOnInteraction: false,
    paginationClickable: true
}); 
 var mySwiper3 = new Swiper('.sj_swiper_3', {
    autoplay: 3000,//可选选项，自动滑动
    loop:true,
    pagination : '.sj_pagination_3',
    autoplayDisableOnInteraction: false,
    paginationClickable: true
}); 

$('ul.sj_content li').not(':first').hide();
$('ul.sj_ul li').on('mouseenter',function(){
	var index_n = $(this).index();
	$(this).addClass('sj_selected').siblings().removeClass('sj_selected');
	$('.sj_content li').eq(index_n).css('display','block').addClass('sj_cont_li').siblings().css('display','none');
	 
	 /*当鼠标滑过切换按钮的时候，重构swiper */
	if($('.sj_content li').eq(1).css("display")=="block" ){
		mySwiper2.reInit();
	}
	if($('.sj_content li').eq(2).css("display")=="block" ){
		mySwiper3.reInit();
	}
	
});






/*名师高徒*/
$('.ms_ul li').mouseenter(function () {
    $(this).siblings().removeClass('ms_selected').end().addClass('ms_selected');
});

$('.ms_ul li').mouseleave(function () {
    $(this).removeClass('ms_selected');
});

var swiper = new Swiper('.ms_swiper', {
    slidesPerView: 4,
    spaceBetween: 30,
    initialSlide:0,
    loop:true
});


$('.arrow-left').on('click', function(e) {
	e.preventDefault();
	swiper.swipePrev();
})
$('.arrow-right').on('click', function(e) {
	e.preventDefault();
	swiper.swipeNext();
})


$('.ms_swiper_wrap .swiper-slide').on('mouseenter',function () {
    $(this).siblings().removeClass('ms_selected').end().addClass('ms_selected');
});
$('.ms_swiper_wrap .swiper-slide').on('mouseleave',function () {
   $(this).removeClass('ms_selected');
});

/*高薪*/

seeing_fn($('.gx_content'));
$('.gx_xuesheng_ul li').on('mouseenter',function () {
    var index_n = $(this).index();
    $(this).addClass('gx_selected').siblings().removeClass('gx_selected');
    $('.gx_content > div').eq(index_n).show().siblings().hide();
});




