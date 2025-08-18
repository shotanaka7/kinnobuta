<!doctype html>
<html lang="">

<head>

	<?php require('header.php'); ?>
	<title>お知らせ</title>
	<link rel="stylesheet" type="text/css" href="/css/lower_common.css?=<?php echo date('YmdHi'); ?>">
	<link rel="stylesheet" type="text/css" href="/css/news.css?=<?php echo date('YmdHi'); ?>">

	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />

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
							<li class="item">年末年始の営業のご案内　2020-2021</li>
						</ul>
					</div>

					<!-- 記事詳細 -->
					<section id="detail">
						<div class="title_wrap">
							<!-- 日付 -->
							<div class="date">2020.12.23</div>
							<!-- タイトル -->
							<h3 class="title">年末年始の営業のご案内　2020-2021</h3>
						</div>
						<div class="cont_wrap">
							<img src="img/news/sample.jpg" alt=""><br><br>
							<h1>h1タグです。h1タグです。</h1>
							<p>ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</p><br><br>
							<h2>h2タグです。h2タグです。</h2>
							<p>ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</p><br><br>
							<h3>h3タグです。h3タグです。</h3>
							<p>ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</p><br><br>
							<h4>h4タグです。h4タグです。</h4>
							<p>ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</p><br><br>
							<h5>h5タグです。h5タグです。</h5>
							<p>ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</p><br><br>

						</div>
						<div class="btn_common">
							<a href="/"><span>トップへ戻る</span></a>
						</div>
					</section>
					<!-- 記事詳細 -->


					<?php require('inc/module_standard.php'); ?>



					<?php require('footer.php'); ?>

</body>

</html>