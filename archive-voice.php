<!doctype html>
<html lang="ja">

<head>

	<?php require 'header.php'; ?>
	<title>お客様の声</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/voice.css?=<?php echo date( 'YmdHi' ); ?>">

</head>

<body id="voice_list">

	<?php require 'inc/page_header.php'; ?>

	<main>

	<section id="mv">
		<h1 class="title">お客様の声</h1>
		<span>COLUMN</span>
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
				<li class="item">お客様の声</li>
			</ul>
			</div>

			<!-- 一覧 -->
			<section id="cont">
			<div class="cont_wrap">
				<?php
						$paged     = (int) get_query_var( 'paged' );
						$args      = array(
							'posts_per_page' => 10,
							'paged'          => $paged,
							'orderby'        => 'post_date',
							'order'          => 'DESC',
							'post_type'      => 'voice',
						);
						$the_query = new WP_Query( $args );
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) :
								$the_query->the_post();
								?>
				<!-- 男女条件分岐 -->
								<?php
								$status = get_field( 'seibetsu' );
								if ( $status == 'man' ) :
									?>
				<div class="cont_box man">
				<div class="ph_wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/img/voice/people_man_01.png" alt="">
				</div>
				<?php else : ?>
				<div class="cont_box man">
					<div class="ph_wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/img/voice/people_woman_01.png" alt="">
					</div>
					<?php endif; ?>
					<!-- /男女条件分岐 -->

					<div class="text_wrap">
					<!-- タイトル -->
					<h2 class="title"><?php the_title(); ?></h2>
					<!-- 名前 -->
					<div class="name"><?php the_field( 'name' ); ?></div>
					<div class="btn_mini_common">
						<a href="<?php the_permalink(); ?>"><span>続きを読む</span></a>
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
				<?php wp_pagenavi( array( 'query' => $the_query ) ); ?>
				</div>
				<!-- ページャー -->
			</section>
			<!-- 一覧 -->


			<?php require 'inc/module_standard.php'; ?>



			<?php require 'footer.php'; ?>

</body>

</html>
