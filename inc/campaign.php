<?php
/**
 * お得なキャンペーン情報を表示するセクション
 */
?>

<section id="campaign">
	<h2 class="sec_title"><span>お得なキャンペーン開催中！</span></h2>
	<p class="lead">キャンペーン詳細ページよりご確認ください。</p>

	<div class="campaign_slider_wrap">
	<ul class="slider">
		<?php
		$category  = get_the_category();
		$cat_slug  = $category[0]->category_nicename;
		$paged     = (int) get_query_var( 'paged' );
		$args      = array(
			'posts_per_page' => 5,
			'paged'          => $paged,
			'orderby'        => 'post_date',
			'order'          => 'DESC',
			'post_type'      => 'post',
			'category_name'  => 'pickup',
			'post_status'    => 'publish',
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				?>
		<li class="slide">
		<a href="<?php the_permalink(); ?>">
			<div class="img_wrap"><?php the_post_thumbnail(); ?></div>
		</a>
		</li>
				<?php
		endwhile;
		endif;
		wp_reset_postdata();
		?>
	</ul>
	<!-- /キャンペーン -->
	</div>
</section>
