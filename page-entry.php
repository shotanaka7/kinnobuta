<!doctype html>
<html lang="ja">

<head>

	<?php require 'header.php'; ?>
	<title>宅配買取お申込みフォーム</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/form.css?=<?php echo date( 'YmdHi' ); ?>">


</head>

<body id="top">

	<?php require 'inc/page_header.php'; ?>

	<main>

	<section id="mv" class="entry">
		<h1 class="title">宅配買取お申込みフォーム</h1>
		<span>PURCHASE FORM</span>
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
				<li class="item">宅配買取お申込みフォーム</li>
			</ul>
			</div>
			<!--/パンくず-->

			<!--フォーム-->
			<div class="contact_form">
			<p class="lead">当サイトでは、実在性の証明とプライバシー保護のため、SSL暗号化通信を実現しています。<br>個人情報の取り扱いについては<a href="<?php echo home_url( 'company#tab2' ); ?>" target="_blank">プライバシーポリシー</a>をご覧ください。</p>
			<div class="download_btn"><a href="<?php echo get_template_directory_uri(); ?>/pdf/delivery.pdf" target="_blank"><span>申込書をダウンロード</span></a></div>

			<div class="form_table">
				<?php the_content(); ?>
			</div>
			</div>
			<!--/フォーム-->

			<?php require 'inc/module_standard.php'; ?>
			<?php require 'footer.php'; ?>

</body>

</html>
