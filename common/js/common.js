$(function () {

	/*========================
	ページの先頭に戻る
	========================*/
	var pagetop = $('#page_top');
	pagetop.hide();
	var winH = $(window).height() * 0.2;

	$(window).scroll(function () {
		if ($(this).scrollTop() > winH) {
			pagetop.fadeIn();
		} else {
			pagetop.fadeOut();
		}
	});
	pagetop.click(function () {
		$('body, html').animate({
			scrollTop: 0
		}, 700, 'easeInOutQuint');
		return false;
	});


	/*===============================
	ビューポート設定
	===============================*/
	var ua = navigator.userAgent
	var sp = ua.indexOf('iPhone') > -1 ||
		(ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)
	var tab = !sp && (
		ua.indexOf('iPad') > -1 ||
		(ua.indexOf('Macintosh') > -1 && 'ontouchend' in document) ||
		ua.indexOf('Android') > -1
	)
	if (tab) {
		$('meta[name="viewport"]').attr('content', 'width=1080')
	}

	/*========================
	アンカーリンク
	========================*/
	$('a[href*="#"]').on('click', function () {
		var speed = 700;
		var href = $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - 150;
		$('.fade').removeClass('fade');
		$('body,html').animate({
			scrollTop: position
		}, speed, 'easeInOutQuint');
		return false;
	});


	/*===============================
	汎用タブ
	===============================*/
	$(".tab_wrap .tab").click(function () {
		var index = $('.tab_wrap .tab').index(this);
		$('.tab_wrap .tab').removeClass('active');
		$(this).addClass('active');
		$('.tab_cont').removeClass('active').eq(index).addClass('active');
	});

	/*===============================
	タブコンテンツを外部ページから開く
	===============================*/
	if("#tab2" == location.hash) {
		var index = $('.tab_wrap .tab').index(this);
		$('.tab_wrap .tab').removeClass('active').eq(1).addClass('active');
		$('.tab_cont').removeClass('active').eq(1).addClass('active');
	}
	if("#tab3" == location.hash) {
		var index = $('.tab_wrap .tab').index(this);
		$('.tab_wrap .tab').removeClass('active').eq(2).addClass('active');
		$('.tab_cont').removeClass('active').eq(2).addClass('active');
	}
	if("#tab4" == location.hash) {
		var index = $('.tab_wrap .tab').index(this);
		$('.tab_wrap .tab').removeClass('active').eq(3).addClass('active');
		$('.tab_cont').removeClass('active').eq(3).addClass('active');
	}

	/*===============================
	スマホヘッダーメニュー
	===============================*/
	/* メニューボタンクリックで表示 */
	$('#SPnaviBtn').click(function () {
		$(this).toggleClass('active');
		$('header nav').slideToggle();
		$('body').toggleClass('menu_active');
	});

	/* メニュー内リンクのクリックで非表示 */
	$('header nav a').click(function () {
		var winW = $(window).width();
		if (winW < 500) {
			$('header nav').slideUp();
			$('#SPnaviBtn').removeClass('active');
			$('body').removeClass('menu_active');
		}
	});


	/*===============================
	スクロール中は固定メニュー非表示
	===============================*/
	$(function () {
		var pos = 0;
		var header = $('header');
		var hideClass = 'hide';
		var hidePosition = 200;

		$(window).on('scroll', function () {
			if ($(this).scrollTop() < pos || $(this).scrollTop() < hidePosition) {
				header.removeClass(hideClass);
			} else {
				header.addClass(hideClass);
			}
			pos = $(this).scrollTop();
		});
	});

});

/*===============================
スクロール中は固定メニューにクラスを付与
===============================*/
$(function () {
	var hidePosition = 1;
	$(window).on('load scroll', function () {
		if ($(this).scrollTop() > hidePosition) {
			$('header').addClass('scr');
		} else {
			$('header').removeClass('scr');
		}
	});
});

/*===============================
スクロール追従エフェクト
===============================*/
$(window).on('load scroll', function () {
	$('.fade_in, .fade, .fade02, .fade03, .fade04, .fade05, .fade06, .fade_right, .fade_left').each(function () {
		var elemPos = $(this).offset().top,
			scroll = $(window).scrollTop(),
			windowHeight = $(window).height();
		if (scroll > elemPos - windowHeight) {
			$(this).addClass('scrollin');
		}
	});
});

/*===============================
サイドバーのアコーディオン
===============================*/
$(function () {
	// 初期設定（1つ目だけ表示しておく）
	$('#sidebar .brandlist_box:first .brandlist_title').addClass('open');
	$('#sidebar .brandlist_box:first .list').show();
	
	// クリックで開閉
	$('#sidebar .brandlist_title').on('click', function(){
		$(this).next('.list').slideToggle();
		$(this).toggleClass('open');
	});
});

/*===============================
QAのアコーディオン
===============================*/
$(function () {

	$('.qa_wrap .q_cont').on('click', function(){
		$(this).next('.a_cont').slideToggle();
		$(this).toggleClass('open');
	});
});

/*===============================
フッターのアコーディオン
===============================*/
$(function () {

	$('.footer_wrapper .navi_title').on('click', function(){
		$(this).next('.list').slideToggle();
		$(this).toggleClass('open');
	});
});

/*===============================
買取ブランドのアコーディオン
===============================*/
$(function () {

	$('#brand_list .title').on('click', function(){
		$(this).next('.cont').slideToggle();
		$(this).toggleClass('open');
	});
});

/*=================================
UAを判定してクラスを付与
=================================*/
function css_browser_selector(u){var ua=u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1},g='gecko',w='webkit',s='safari',o='opera',m='mobile',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')?g+' ff3':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);