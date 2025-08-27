<!doctype html>
<html lang="ja">

<head>

	<?php require 'header.php'; ?>
	<title>はじめてご利用の方へ</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/first.css?=<?php echo date( 'YmdHi' ); ?>">

</head>

<body id="top">

	<?php require 'inc/page_header.php'; ?>

	<main>

	<section id="mv">
		<h1 class="title">はじめてご利用の方へ</h1>
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
				<li class="item"><a href="/<?php echo home_url( '' ); ?>">ホーム</a></li>
				<li class="item">はじめてご利用の方へ</li>
			</ul>
			</div>
			<!--/パンくず-->

			<!--タブ-->
			<div class="tab_wrap">
			<ul class="tab_list item4">
				<li class="tab active"><a href="#tab1">1.買取について</a></li>
				<li class="tab"><a href="#tab2">2.宅配買取について</a></li>
				<li class="tab"><a href="#tab3">3.窓口買取について</a></li>
				<!-- <li class="tab"><a href="#tab4">4.コスメ買取について</a></li> -->
			</ul>
			</div>
			<!--/タブ-->

			<!--Q&A-->
			<div id="qa">

			<!--1.買取について-->
			<div class="tab_cont active">
				<div class="qa_wrap">
				<h2 class="title">1.買取について（窓口・宅配共通）</h2>

				<?php get_template_part( 'inc/qa-common' ); ?>
				</div>
			</div>
			<!--/1.買取について-->

			<!--2.宅配買取について-->
			<div class="tab_cont">
				<div class="qa_wrap">
				<h2 class="title">2.宅配買取について</h2>

				<?php get_template_part( 'inc/qa-delivery' ); ?>
				</div>
			</div>
			<!--/2.宅配買取について-->

			<!--3.窓口買取について-->
			<div class="tab_cont">
				<div class="qa_wrap">
				<h2 class="title">3.窓口買取について</h2>

				<?php get_template_part( 'inc/qa-store' ); ?>
				</div>
			</div>
			<!--/3.窓口買取について-->

			<!--4.コスメ買取について-->
			<!-- <div class="tab_cont">
				<div class="qa_wrap">
				<h2 class="title">4.コスメ買取について</h2>

				<?php // get_template_part( 'inc/qa-cosmetics' ); ?>
				</div>
			</div> -->
			<!--/4.コスメ買取について-->

			</div>
			<!--/Q&A-->

			<?php require 'inc/module_standard.php'; ?>
			<?php require 'footer.php'; ?>

</body>

</html>
