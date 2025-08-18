
/*===============================
プレゼントスライド （SP時のみ）
===============================*/
$(function () {
	var init = {
		autoplay: true,
		infinite: true,
		cssEase: "linear",
		slidesToShow: 1,
		slidesToScroll: 1,
//		centerMode: true,
//		centerPadding: '8%',
		dots:true,
		dotsClass: 'slide-dots',
		prevArrow: '<div class="slide-arrow prev-arrow"><img src="img/slider_icon_pre.png"></div>',
		nextArrow: '<div class="slide-arrow next-arrow"><img src="img/slider_icon_next.png"></div>'
	};


	$(function () {
		var win = $(window);
		var slider = $(".concept_01_bottom_list");

		win.on("load resize", function () {
			if (win.width() < 576) {
				slider.not(".slick-initialized").slick(init);
			} else if (slider.hasClass("slick-initialized")) {
				slider.slick("unslick");
			}
		});
	});

});
