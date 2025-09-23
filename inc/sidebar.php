<!--バナーボタン-->
<div class="bnr_wrap">
	<ul class="list">
	<li class="bnr"><a href="<?php echo home_url( 'delivery' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/sidebar_bnr_delivery.svg" alt="宅配買取の方はこちら"></a></li>
	<li class="bnr"><a href="<?php echo home_url( 'store' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/sidebar_bnr_store.svg" alt="店頭買取の方はこちら"></a></li>
	</ul>
</div>
<!--/バナーボタン-->

<!--検索窓-->
<div class="search_wrap">
	<!-- <form> -->
	<div class="search_box">
	<!-- <input type="text" placeholder="商品を検索">
			<input type="submit" class="submit_btn"> -->
	<form role="search" method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		<input type="search" class="search-field" value="<?php echo get_search_query(); ?>" placeholder="買取商品検索 …" name="s" id="s" />
		<input type="hidden" value="<?php echo get_post_type(); ?>" name="post_type" id="post_type" />
		<input type="submit" class="search-submit" value="" />
	</form>
	</div>
	<!-- </form> -->
</div>
<!--/検索窓-->

<!--ブランドリスト-->
<div class="brandlist_wrap">
	<div class="title">ブランドリスト</div>

	<!--ア行-->
	<div class="brandlist_box">
	<div class="brandlist_title"><span class="circle">ア</span>行</div>
	<ul class="list">
		<?php uxc_render_term_children_list( 15, 'brand' ); ?>
	</ul>
	</div>
	<!--/ア行-->

	<!--カ行-->
	<div class="brandlist_box">
	<div class="brandlist_title"><span class="circle">カ</span>行</div>
	<ul class="list">
		<?php uxc_render_term_children_list( 16, 'brand' ); ?>
	</ul>
	</div>
	<!--/カ行-->

	<!--サ行-->
	<div class="brandlist_box">
	<div class="brandlist_title"><span class="circle">サ</span>行</div>
	<ul class="list">
		<?php uxc_render_term_children_list( 19, 'brand' ); ?>
	</ul>
	</div>
	<!--/サ行-->

	<!--タ行-->
	<div class="brandlist_box">
	<div class="brandlist_title"><span class="circle">タ</span>行</div>
	<ul class="list">
		<?php uxc_render_term_children_list( 20, 'brand' ); ?>
	</ul>
	</div>
	<!--/タ行-->

	<!--ナ行-->
	<div class="brandlist_box">
	<div class="brandlist_title"><span class="circle">ナ</span>行</div>
	<ul class="list">
		<?php uxc_render_term_children_list( 21, 'brand' ); ?>
	</ul>
	</div>
	<!--/ナ行-->

	<!--ハ行-->
	<div class="brandlist_box">
	<div class="brandlist_title"><span class="circle">ハ</span>行</div>
	<ul class="list">
		<?php uxc_render_term_children_list( 22, 'brand' ); ?>
	</ul>
	</div>
	<!--/ハ行-->

	<!--マ行-->
	<div class="brandlist_box">
	<div class="brandlist_title"><span class="circle">マ</span>行</div>
	<ul class="list">
		<?php uxc_render_term_children_list( 23, 'brand' ); ?>
	</ul>
	</div>
	<!--/マ行-->

	<!--ヤ行-->
	<div class="brandlist_box">
	<div class="brandlist_title"><span class="circle">ヤ</span>行</div>
	<ul class="list">
		<?php uxc_render_term_children_list( 24, 'brand' ); ?>
	</ul>
	</div>
	<!--/ヤ行-->

	<!--ラ行-->
	<div class="brandlist_box">
	<div class="brandlist_title"><span class="circle">ラ</span>行</div>
	<ul class="list">
		<?php uxc_render_term_children_list( 25, 'brand' ); ?>
	</ul>
	</div>
	<!--/ラ行-->

	<!--ワ行-->
	<div class="brandlist_box">
	<div class="brandlist_title"><span class="circle">ワ</span>行</div>
	<ul class="list">
		<?php uxc_render_term_children_list( 26, 'brand' ); ?>
	</ul>
	</div>
	<!--/ワ行-->

</div>
<!--/ブランドリスト-->

<!--バナーボタン-->
<div class="bnr_wrap">
	<ul class="list">
	<li class="bnr"><a href="<?php echo home_url( 'first' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/sidebar_bnr_guide.svg" alt="はじめての方はこちら"></a></li>
	<li class="bnr"><a href="<?php echo home_url( 'column' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/sidebar_bnr_column.svg" alt="お役立ちコラム"></a></li>
	<li class="bnr"><a href="<?php echo home_url( 'voice' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/sidebar_bnr_voice.svg" alt="お客様の声"></a></li>
	<!-- <li class="bnr"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/common/sidebar_bnr_purchase.svg" alt="買取実績"></a></li> -->
	<li class="bnr"><a href="<?php echo get_template_directory_uri(); ?>/pdf/delivery.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/common/sidebar_bnr_download.svg" alt="申込書のダウンロード"></a></li>
	</ul>
</div>
<!--/バナーボタン-->
