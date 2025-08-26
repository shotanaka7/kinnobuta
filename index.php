<!doctype html>
<html lang="">

<head>

	<?php require 'header.php'; ?>
	<title>KinnoButa-きんのぶた- - サプリメント・コスメの宅配買取ならきんのぶたへ！店頭でも買取OK！</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/top.css?=<?php echo date( 'YmdHi' ); ?>">


</head>


<body id="top">

	<?php require 'inc/page_header.php'; ?>

	<main>

	<section id="mv">
		<h1 class="lead"><img src="<?php echo get_template_directory_uri(); ?>/img/top/top_mv_lead.svg" alt="創業11年/買取実績16万点以上！買取査定額最大20%UP！サプリメント・MLM・コスメ化粧品の最高値買取"></h1>
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
				<?php
							$category  = get_the_category();
							$cat_slug  = $category[0]->category_nicename;
							$paged     = (int) get_query_var( 'paged' );
							$args      = array(
								'posts_per_page' => 5,
								'paged'          => $paged,
								'orderby'        => 'post_date',
								'order'          => 'DESC',
								'post_type'      => 'post',
								'category_name'  => 'topic',
								'post_status'    => 'publish',
							);
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) :
								while ( $the_query->have_posts() ) :
									$the_query->the_post();
									?>
				<li class="item">
				<a href="<?php the_permalink(); ?>">
					<div class="date"><?php the_time( 'Y.m.d' ); ?></div>
					<div class="text"><?php the_title(); ?></div>
				</a>
				</li>

									<?php
				endwhile;
							endif;
							wp_reset_postdata();
							?>
			</ul>
			</section>
			<!-- /最新情報 -->

			<?php require 'footer.php'; ?>

</body>

</html>
