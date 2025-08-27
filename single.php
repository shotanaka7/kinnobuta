<?php
// カテゴリーによって表示を変える
$page_title    = 'お知らせ';
$page_title_en = 'NEWS';
$title_tag     = get_the_title();

$categories = get_the_category();
if ( ! empty( $categories ) ) {
	$cat_slug = $categories[0]->slug;
}

// お役立ちコラム
if ( $cat_slug === 'column' ) {
	$page_title    = 'お役立ちコラム';
	$page_title_en = 'COLUMN';
}


?>

<!doctype html>
<html lang="ja">

<head>

	<?php require 'header.php'; ?>
	<title><?php echo $title_tag; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/news.css?=<?php echo date( 'YmdHi' ); ?>">

</head>

<body id="news">

	<?php require 'inc/page_header.php'; ?>

	<main>

	<section id="mv">
		<p class="title"><?php echo $page_title; ?></p>
		<span><?php echo $page_title_en; ?></span>
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
				<?php
				if ( $cat_slug === 'column' ) {
					echo '<li class="item"><a href="' . home_url( 'column' ) . '">お役立ちコラム</a></li>';
				}
				?>
				<li class="item"><?php the_title(); ?></li>
			</ul>
			</div>

			<!-- 記事詳細 -->
			<section id="detail">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
			<div class="title_wrap">
				<!-- 日付 -->
				<div class="date"><?php the_time( 'Y.m.d' ); ?></div>
				<!-- タイトル -->
				<h1 class="title"><?php the_title(); ?></h1>
			</div>
			<div class="cont_wrap">
					<?php the_content(); ?>
			</div>
			<div class="btn_common">
				<!-- ピックアップバナーの場合 -->
					<?php if ( in_category( 28 ) ) : ?>
				<a href="<?php echo home_url( 'contact' ); ?>"><span>お問い合わせ</span></a>
				<?php else : ?>
				<a href="<?php echo home_url(); ?>"><span>トップへ戻る</span></a>
				<?php endif; ?>
			</div>
					<?php
			endwhile;
						endif;
						wp_reset_postdata();
			?>

			</section>
			<!-- 記事詳細 -->


			<?php require 'inc/module_standard.php'; ?>



			<?php require 'footer.php'; ?>

</body>

</html>
