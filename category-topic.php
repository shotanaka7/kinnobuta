<!doctype html>
<html lang="">

<head>

	<?php require 'header.php'; ?>
	<title>お役立ちコラム</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/column.css?=<?php echo date( 'YmdHi' ); ?>">


</head>

<body id="news">

	<?php require 'inc/page_header.php'; ?>

	<main>

	<section id="mv">
		<h1 class="title">お知らせ</h1>
		<span>NEWS</span>
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
			<div class="pankuz">
			<ul class="list">
				<li class="item"><a href="/">ホーム</a></li>
				<li class="item">お役立ちコラム</li>
			</ul>
			</div>

			<!-- コラム一覧 -->
			<section id="cont">
			<?php
						$category      = get_the_category();
						$cat_slug      = $category[0]->category_nicename;
							$paged     = (int) get_query_var( 'paged' );
							$args      = array(
								'posts_per_page' => 3,
								'paged'          => $paged,
								'orderby'        => 'post_date',
								'order'          => 'DESC',
								'post_type'      => 'post',
								'category_name'  => $cat_slug,
								'post_status'    => 'publish',
							);
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) :
								while ( $the_query->have_posts() ) :
									$the_query->the_post();
									?>
			<div class="cont_wrap">
				<div class="cont_box">
				<div class="ph_wrap">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'medium' ); ?>
					<?php else : ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/blog_normal_yoko.jpg" alt="デフォルト画像" />
					<?php endif; ?>
				</div>
				<div class="text_wrap">
					<h3 class="title"><?php the_title(); ?></h3>
					<p class="text"><?php echo get_the_excerpt(); ?></p>
					<div class="btn_mini_common">
					<a href="<?php the_permalink(); ?>"><span>詳しく見る</span></a>
					</div>
				</div>
				</div>
									<?php
				endwhile;
							endif;
							wp_reset_postdata();
							?>
			</div>

			<!-- ページャー -->
			<div class="list_navi_wrap">
				<!-- <div class="wp-pagenavi" role="navigation">
								<a class="previouspostslink" rel="prev" aria-label="前のページ" href="">Prev</a>
								<span aria-current="page" class="current">1</span>
								<a class="page larger" title="ページ 2" href="">2</a>
								<a class="page larger" title="ページ 3" href="">3</a>
								<a class="page larger" title="ページ 4" href="">4</a>
								<a class="page larger" title="ページ 5" href="https://miya-mari.net/event_list/page/5/">5</a>
								<a class="nextpostslink" rel="next" aria-label="次のページ" href="https://miya-mari.net/event_list/page/2/">Next</a>
							</div>
						</div> -->
				<!-- ページャー -->
			</section>
			<!-- コラム一覧 -->


			<?php require 'inc/module_standard.php'; ?>



			<?php require 'footer.php'; ?>

</body>

</html>
