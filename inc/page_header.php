<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8KWL8B"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
	<p class="logo"><a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/header_logo.svg" alt="きんのぶた"></a></p>
	<nav class="glo_navi">
	<ul class="list">
		<!-- <li class="link"><a href="<?php echo home_url( 'first' ); ?>"><span>はじめてご利用の方</span></a></li> -->
		<li class="link"><a href="<?php echo home_url( 'delivery' ); ?>"><span>宅配買取</span></a></li>
		<li class="link"><a href="<?php echo home_url( 'store' ); ?>"><span>店頭買取</span></a></li>
		<li class="link"><a href="<?php echo home_url( 'brandlist' ); ?>"><span>取扱ブランド</span></a></li>
		<li class="link"><a href="<?php echo home_url( 'first' ); ?>"><span>よくあるご質問</span></a></li>
		<li class="link"><a href="<?php echo home_url( 'contact' ); ?>"><span>お問い合わせ</span></a></li>
	</ul>
	<div class="contact_btn">
		<p class="text">ご相談・受付10:00〜18:00（日祝定休日）</p>
		<div class="tel_num"><span>0120-03-6022</span></div>
	</div>
	</nav>
	<div id="SPnaviBtn" class="menu-trigger sp_only">
	<div id="SPmenuBars"><span></span><span></span><span></span></div>
	</div>
</header>

<script>
$(function() {
	$('.slider').slick({
	arrows: true,
	autoplay: true,
	adaptiveHeight: true,
	centerMode: true,
	variableWidth: true,
	dots: true,
	});
});

$(function() {
	$('.pickup_jisseki_slider').slick({
	arrows: true,
	autoplay: true,
	adaptiveHeight: true,
	centerMode: true,
	variableWidth: true,
	dots: true,
	});
});

$(function() {
	$('.insta_slider').slick({
	arrows: true,
	autoplay: true,
	adaptiveHeight: true,
	centerMode: true,
	variableWidth: true,
	dots: true,
	});
});
</script>
<!--フローティングボタン-->
<div class="floating_btn_wrap">
	<ul class="list">
	<li class="btn"><a href="https://line.me/R/ti/p/%40emj1070l" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/common/float_btn01.svg" alt="LINEでかんたん審査"></a></li>
	<li class="btn"><a href="<?php echo home_url( 'entry' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/float_btn02.svg" alt="宅配買取キット申し込み"></a></li>
	<li class="btn"><a href="tel:0120036022"><img src="<?php echo get_template_directory_uri(); ?>/img/common/float_btn03.svg" alt="電話でお問い合わせ"></a></li>
	<li class="btn"><a href="<?php echo home_url( 'contact' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/float_btn04.svg" alt="お問い合わせ"></a></li>
	</ul>
</div>
<!--/フローティングボタン-->
