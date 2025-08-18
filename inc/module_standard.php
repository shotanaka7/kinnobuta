<!-- 簡単なお取引方法はコチラ！ -->
<section id="hajimete_bnr">
	<div class="pc_only">
		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/common/img/hajimete_bnr_text.svg" alt="簡単なお取引方法はコチラ！"></a>
	</div>
	<div class="sp_only">
		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/common/img/hajimete_bnr_text_sp.png" alt="簡単なお取引方法はコチラ！"></a>
	</div>
</section>
<!-- /簡単なお取引方法はコチラ！ -->

<!-- 買取実績 -->
<section id="pickup_jisseki">

	<h2 class="sec_title"><span>買取実例</span></h2>
	<p class="lead">きんのぶたではサプリメント、MLM製品、<br class="sp_only">コスメまで、様々な商品の高価買取を実施しております。<br>きんのぶたの査定金額が他店より低い場合は是非ご連絡ください。</p>

	<div class="pickup_jisseki_slider_wrap">
		<ul class="pickup_jisseki_slider">
			<?php
			$paged = (int)get_query_var('paged');
			$args = array(
				'posts_per_page' => 10,
				'paged' => $paged,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'post_type' => 'top_kaitori'
			);
			$the_query = new WP_Query($args);
			if ($the_query->have_posts()) :
				while ($the_query->have_posts()) : $the_query->the_post();
			?>
					<li class="slide">
						<div class="img_wrap"><img src="<?php the_field('kaitori_img'); ?>" alt=""></div>
						<h3 class="slide_title"><?php the_title(); ?></h3>
						<div class="maker"><?php the_field('name'); ?></div>
						<div class="price">〜<?php the_field('kaitori_kakaku'); ?><span>円</span></div>
						<div class="hikaku">
							<ul class="list">
								<li class="item">A社 <?php the_field('kaitori_tasha_a'); ?></li>
								<li class="item">B社 <?php the_field('kaitori_tasha_b'); ?></li>
							</ul>
						</div>
					</li>
			<?php endwhile;
			endif;
			wp_reset_postdata();
			?>
		</ul>
	</div>
</section>
<!-- /買取実績 -->

<!-- インスタ -->
<section id="insta">
	<div class="insta_bnr">
		<a class="pc_only" href="https://www.instagram.com/kinnobuta_supplement/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/common/insta_bnr_text.svg" alt="Instagram公式アカウント"></a>
		<a class="sp_only" href="https://www.instagram.com/kinnobuta_supplement/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/common/insta_bnr_text_sp.svg" alt="Instagram公式アカウント"></a>
	</div>
	<div class="insta_slider_wrap">
		<ul class="insta_slider">
			<li class="slide">
				<div class="img_wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/common/insta_img_01.jpg" alt=""></div>
			</li>
			<li class="slide">
				<div class="img_wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/common/insta_img_02.jpg" alt=""></div>
			</li>
			<li class="slide">
				<div class="img_wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/common/insta_img_03.jpg" alt=""></div>
			</li>
			<li class="slide">
				<div class="img_wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/common/insta_img_01.jpg" alt=""></div>
			</li>

		</ul>
	</div>
</section>
<!-- /インスタ -->