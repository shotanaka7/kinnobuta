<!doctype html>
<html lang="ja">

<head>

	<?php require 'header.php'; ?>
	<title>取り扱いブランド一覧</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/brand.css?=<?php echo date( 'YmdHi' ); ?>">

	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />

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
				<li class="item">取り扱いブランド一覧</li>
			</ul>
			</div>
			<!--/パンくず-->

			<section id="brand_list">
			<h1 class="sec_title"><span>買取ブランド一覧</span></h1>
			<p class="lead">高額買取ならお任せください！</p>
			<?php echo get_template_part( 'inc/brandlist-all' ); ?>
			</section>

			<?php require 'inc/module_standard.php'; ?>
			<?php require 'footer.php'; ?>

</body>

</html>
