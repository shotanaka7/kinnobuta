<!doctype html>
<html lang="">

<head>

	<?php require 'header.php'; ?>
	<title>ページタイトル</title>
	<link rel="stylesheet" type="text/css" href="/css/top.css?=<?php echo date( 'YmdHi' ); ?>">

	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />

</head>

<body id="top">

	<?php require 'inc/page_header.php'; ?>

	<main>

	<section id="mv">
		<h1 class="lead"><img src="img/top/top_mv_lead.svg" alt="買取査定額最大20%UP"></h1>
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

			<!-- キャンペーン -->
			<?php get_template_part( 'inc/campaign' ); ?>
			<!-- /キャンペーン -->

			<!-- きんのぶたが選ばれる理由 -->
			<?php get_template_part( 'inc/reasons' ); ?>
			<!-- /きんのぶたが選ばれる理由 -->

			<!-- 買取ブランドリスト -->
			<?php get_template_part( 'inc/brandlist' ); ?>
			<!-- /買取ブランドリスト -->

			<!-- 買取の流れ -->
			<?php get_template_part( 'inc/flow' ); ?>
			<!-- /買取の流れ -->

			<?php require 'inc/module_standard.php'; ?>

			<!-- 最新情報 -->
			<section id="headline">
			<h2 class="sec_title"><span>最新情報</span></h2>
			<ul class="list">
				<li class="item">
				<div class="date">2020.12.23</div>
				<div class="text">年末年始の営業のご案内　2020-2021</div>
				</li>
				<li class="item">
				<div class="date">2019.12.17</div>
				<div class="text">年末年始の営業のご案内　2019-2020</div>
				</li>
				<li class="item">
				<div class="date">2019.04.16</div>
				<div class="text">2019年ゴールデンウィーク営業のご案内</div>
				</li>
			</ul>
			</section>
			<!-- /最新情報 -->

			<?php require 'footer.php'; ?>

</body>

</html>
