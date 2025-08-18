<!doctype html>
<html lang="">

<head>

	<?php require('header.php'); ?>
	<title>お知らせ</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date('YmdHi'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/news.css?=<?php echo date('YmdHi'); ?>">

</head>

<body id="news">

	<?php require('inc/page_header.php'); ?>

	<main>

		<section id="mv">
			<h2 class="title">お知らせ</h2>
			<span>NEWS</span>
		</section>

		<div class="in">
			<section id="all_cont_wrapper">

				<!-- サイドバー -->
				<section id="sidebar">
					<?php require('inc/sidebar.php'); ?>
				</section>
				<!-- サイドバー -->

				<!-- メインコンテンツ -->
				<section id="main_cont">
					<div class="pankuz">
						<ul class="list">
							<li class="item"><a href="/">ホーム</a></li>
							<li class="item"><?php the_title(); ?></li>
						</ul>
					</div>

					<!-- 記事詳細 -->
					<section id="detail">
						<?php
						if (have_posts()) :
							while (have_posts()) : the_post();
						?>
								<div class="title_wrap">
									<!-- 日付 -->
									<div class="date"><?php the_time('Y.m.d'); ?></div>
									<!-- タイトル -->
									<h3 class="title"><?php the_title(); ?></h3>
								</div>
								<div class="cont_wrap">
									<?php the_content(); ?>
								</div>
								<div class="btn_common">
									<!-- ピックアップバナーの場合 -->
									<?php if (in_category(28)) : ?>
										<a href="<?php echo home_url('contact'); ?>"><span>お問い合わせ</span></a>
									<?php else: ?>
										<a href="<?php echo home_url(); ?>"><span>トップへ戻る</span></a>
									<?php endif; ?>
								</div>
						<?php endwhile;
						endif;
						wp_reset_postdata();
						?>

					</section>
					<!-- 記事詳細 -->


					<?php require('inc/module_standard.php'); ?>



					<?php require('footer.php'); ?>

</body>

</html>