<!doctype html>
<html lang="">

<head>

	<?php require('header.php'); ?>
	<title>お客様の声</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date('YmdHi'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/voice.css?=<?php echo date('YmdHi'); ?>">

</head>

<body id="voice">

	<?php require('inc/page_header.php'); ?>

	<main>

		<section id="mv">
			<h2 class="title">お客様の声</h2>
			<span>VOICE</span>
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
							<li class="item"><a href="<?php echo home_url("voice"); ?>">お客様の声</a></li>
							<li class="item"><?php the_title(); ?></li>
						</ul>
					</div>

					<!-- 記事詳細 -->
					<section id="detail">
						<div class="lead">
							<!-- 画像男女条件分岐 -->
							<?php
							$status = get_field('seibetsu'); 
							if( $status == 'man' ): 
							?>
								<div class="ph_wrap">
									<img src="<?php echo get_template_directory_uri(); ?>/img/voice/people_man_01.png" alt="">
								</div>
							<?php else: ?>
								<div class="ph_wrap">
									<img src="<?php echo get_template_directory_uri(); ?>/img/voice/people_woman_01.png" alt="">
								</div>
							<?php endif; ?>
							<!-- /画像男女条件分岐 -->
							<!-- タイトル -->
							<div class="text_wrap">
								<h3 class="title"><?php the_title(); ?></h3>
								<div class="name"><?php the_field('name'); ?></div>
							</div>
						</div>
						<div class="cont_wrap">
							<div class="qa_box">
								<h4 class="q_text">今回の売却に関しまして他社との比較はございましたでしょうか？</h4>
								<p class="a_text">
									<?php 
									$acf_field = get_field( 'q1', $post->ID, false );
									echo $acf_field;
									?>
								</p>
							</div>
							<div class="qa_box">
								<h4 class="q_text">買取金額にはご満足いただけましたでしょうか？</h4>
								<p class="a_text">
									<?php 
									$acf_field = get_field( 'q2', $post->ID, false );
									echo $acf_field;
									?>
								</p>
							</div>
							<div class="qa_box">
								<h4 class="q_text">当社の買取サービスの進行状況にはご満足いただけましたでしょうか？</h4>
								<p class="a_text">
									<?php 
									$acf_field = get_field( 'q3', $post->ID, false );
									echo $acf_field;
									?>
								</p>
							</div>
							<div class="qa_box">
								<h4 class="q_text">当社のサイト、サービスに於きまして改善したほうが良いと思われる点がございましたら、何なりとご指摘をお願いいたします。</h4>
								<p class="a_text">
									<?php 
									$acf_field = get_field( 'q4', $post->ID, false );
									echo $acf_field;
									?>
								</p>
							</div>
						</div>

						<div class="tencho">
							<div class="ph_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/voice/tencho.png" alt="店長">
							</div>
							<div class="text_warp">
								<h4>店長からのお礼コメント</h4>
								<?php the_field('tencho'); ?>
							</div>
						</div>
						<!-- ページャー -->
						<div class="news_page_navi_wrap">
							<?php
							$cat = get_the_category();
							$cat_slug = $cat[0]->slug;
							$link = get_category_link($cat_id);
							?>
							<ul class="list">
								<li class="link prev"><?php previous_post_link('%link', '前の記事', false, 'uservoice'); ?></li>
								<li class="link home"><a href="<?php echo home_url("voice"); ?>">一覧に戻る</a></li>
								<li class="link next"><?php next_post_link('%link', '次の記事', false, 'uservoice'); ?></li>

							</ul>
						</div>

					</section>
					<!-- 記事詳細 -->


					<?php require('inc/module_standard.php'); ?>



					<?php require('footer.php'); ?>

</body>

</html>