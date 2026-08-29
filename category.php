<!doctype html>
<html lang="ja">

<head>

	<?php require 'header.php'; ?>
	<title>お役立ちコラム</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/column.css?=<?php echo date( 'YmdHi' ); ?>">

</head>

<body id="column">

	<?php require 'inc/page_header.php'; ?>

	<main>

	<section id="mv">
		<h1 class="title">お役立ちコラム</h1>
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
				<li class="item">お役立ちコラム</li>
			</ul>
			</div>

			<!-- コラム一覧 -->
			<section id="cont">
				<div class="cont_wrap">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							?>
					<div class="cont_box">
						<div class="ph_wrap">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'medium' ); ?>
							<?php else : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/blog_normal_yoko.jpg" alt="デフォルト画像" />
							<?php endif; ?>
						</div>
						<div class="text_wrap">
							<h2 class="title"><?php the_title(); ?></h2>
							<p class="text"><?php echo get_the_excerpt(); ?></p>
							<div class="btn_mini_common">
								<a href="<?php the_permalink(); ?>"><span>詳しく見る</span></a>
							</div>
						</div>
					</div>
							<?php
						endwhile;
					endif;
					?>
				</div>

				<!-- ページャー -->
				<div class="list_navi_wrap">
					<?php
					if ( function_exists( 'wp_pagenavi' ) ) {
						// 表示文言はテーマ側で固定する（管理画面 設定→PageNavi の値に依存させない）。
						// pages_text を空にすると「1 / 2ページ」の表示自体が出力されない。
						// first_text / last_text はページ数が num_pages(既定5) を超えたときだけ出る。
						wp_pagenavi(
							array(
								'options' => array(
									'pages_text' => '',
									'prev_text'  => 'Prev',
									'next_text'  => 'Next',
									'first_text' => '1',
									'last_text'  => '%TOTAL_PAGES%',
								),
							)
						);
					}
					?>
				</div>
				<!-- /ページャー -->
			</section>
			<!-- コラム一覧 -->


			<?php require 'inc/module_standard.php'; ?>



			<?php require 'footer.php'; ?>

</body>

</html>
