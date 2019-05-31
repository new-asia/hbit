(function () {
	// 拨打电话
	$('.nav-call').click(function () {
		var result = confirm('确定拨打电话' + $(this).attr('href') + '吗？');
		if (result) {
			window.location = 'tel:' + $(this).attr('href');
		}
	});
	new Swiper ('.swiper-container', {
		direction: 'horizontal',
		loop: true
	});
	new Swiper ('.swiper-container-list', {
		direction: 'horizontal',
		loop: false,
		pagination: {
			el: '.swiper-pagination',
		},
	});
	$('.nav-bar-item').each(function (value) {
		new Swiper ('.swiper-container-list-' + value, {
			direction: 'horizontal',
			loop: false,
			pagination: {
				el: '.swiper-pagination-' + value,
			},
		});
		$('#' + $(this).attr('href')).hide();
	})
	// IT 资讯选项卡
	$('.nav-bar-item').click(function () {
		$('#' + $('.nav-bar .active').attr('href')).hide();
		$('.nav-bar .active').removeClass('active');
		$(this).addClass('active');
		$('#' + $('.nav-bar .active').attr('href')).css('display', 'block');
	});
	// 显示默认IT 资讯模块
	$('#' + $('.nav-bar .active').attr('href')).css('display', 'block');
})();