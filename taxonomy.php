<!doctype html>
<html lang="ja">

<head>

	<?php require 'header.php'; ?>
	<title>取り扱いブランド一覧</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/brand.css?=<?php echo date( 'YmdHi' ); ?>">

</head>

<body id="top">

	<?php require 'inc/page_header.php'; ?>

	<main id="brand">

	<section id="mv">
		<h1 class="title">取り扱いブランド一覧</h1>
		<span>FOR FIRSTTIME USERS</span>
	</section>

	<div class="in">
		<section id="all_cont_wrapper">

		<!-- サイドバー -->
		<section id="sidebar">
			<?php require 'inc/sidebar.php'; ?>
		</section>
		<!-- サイドバー -->

		<!-- メインコンテンツ -->
		<section id="main_cont">

			<!--パンくず-->
			<div class="pankuz">
			<ul class="list">
				<li class="item"><a href="/">ホーム</a></li>
				<li class="item"><a href="<?php echo home_url( 'brandlist' ); ?>">取り扱いブランド一覧</a></li>
				<li class="item"><?php single_term_title(); ?></li>
			</ul>
			</div>
			<!--/パンくず-->

			<section id="brand_detail">
			<h2 class="sec_title"><span><?php single_term_title(); ?></span></h2>
			<p class="lead">高額買取ならお任せください！</p>
			<div class="brand_detail_wrap">
				<?php
							get_header();

							$page_object  = get_queried_object();
							$args         = array(
								'post_type'      => 'product',
								'taxonomy'       => $page_object->taxonomy,
								'term'           => $page_object->slug,
								'posts_per_page' => -1,
							);
							$custom_query = new WP_Query( $args );
							?>
				<?php if ( $custom_query->have_posts() ) : ?>
					<?php
					while ( $custom_query->have_posts() ) :
						$custom_query->the_post();
						?>
				<div class="brand_detail_box">
				<div class="ph_wrap">
					<img src="<?php the_field( 'product_photo' ); ?>" alt="">
				</div>
				<div class="text_wrap">
					<h3 class="item_name"><?php the_title(); ?></h3>
					<div class="price_title">買取価格</div>
					<div class="price"><span>〜<?php the_field( 'product_listprice' ); ?></span>円</div>
					<div class="btn_mini_common">
					<a href="<?php the_permalink(); ?>"><span>詳しく見る</span></a>
					</div>
				</div>
				</div>
				<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>


			</div>
			<div class="btn_common">
				<a href="<?php echo home_url( 'brandlist' ); ?>"><span>ブランド一覧へ戻る</span></a>
			</div>
			</section>

			<?php require 'inc/module_standard.php'; ?>
			<?php require 'footer.php'; ?>

</body>

</html>
