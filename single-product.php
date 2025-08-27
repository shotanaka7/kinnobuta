<!doctype html>
<html lang="ja">

<head>

	<?php require 'header.php'; ?>
	<title>商品詳細</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/product.css?=<?php echo date( 'YmdHi' ); ?>">


</head>

<body id="product">

	<?php require 'inc/page_header.php'; ?>

	<main>

	<section id="mv">
		<p class="title">商品詳細</p>
		<span>PRODUCT</span>
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
				<li class="item"><a href="<?php echo home_url( 'brandlist' ); ?>">取り扱いブランド一覧</a></li>
				<li class="item">
				<?php
				if ( $terms = get_the_terms( $post->ID, 'brand' ) ) {
					foreach ( $terms as $term ) :
						if ( $term->parent ) {
							echo '<a href="' . get_term_link( $term ) . '">' . $term->name . '</a>';
						}
					endforeach;
				}
				?>
				</li>
				<li class="item"><?php the_title(); ?></li>
			</ul>
			</div>

			<!-- 商品情報 -->
			<section id="info">
			<h1 class="info_title"><span><?php the_field( 'product_brand' ); ?></span><?php the_title(); ?></h1>
			<div class="cont_wrap">
				<div class="ph_wrap">
				<img src="<?php the_field( 'product_photo' ); ?>" alt="">
				</div>
				<div class="text_wrap">
				<h2 class="kakaku_title">買取価格</h2>
				<table>
					<?php if ( get_field( 'product_kaitori1_num' ) ) : ?>
					<tr>
					<th><?php the_field( 'product_kaitori1_num' ); ?></th>
					<td>¥<?php the_field( 'product_kaitori1_price' ); ?></td>
					</tr>
					<?php endif; ?>
					<?php if ( get_field( 'product_kaitori2_num' ) ) : ?>
					<tr>
					<th><?php the_field( 'product_kaitori2_num' ); ?></th>
					<td>¥<?php the_field( 'product_kaitori2_price' ); ?></td>
					</tr>
					<?php endif; ?>
					<?php if ( get_field( 'product_kaitori3_num' ) ) : ?>
					<tr>
					<th><?php the_field( 'product_kaitori3_num' ); ?></th>
					<td>¥<?php the_field( 'product_kaitori3_price' ); ?></td>
					</tr>
					<?php endif; ?>

				</table>
				<div class="toriatukai">
					<?php if ( get_field( 'product_check' ) ) : ?>
					※現在取り扱っておりません。
					<?php endif; ?>
				</div>
				<p class="text"><?php echo get_field( 'product_textarea', $post->ID, false ); ?></p>

				</div>
			</div>
			</section>
			<!-- 商品情報 -->


			<!-- ポイント -->
			<section id="point">
			<div class="point_wrap">
				<div class="ph_wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/img/product/point_img_01.jpg" alt="ポイント">
				</div>
				<div class="text_wrap">
				<h2 class="title">買取のポイント</h2>
				<ul class="list">
					<li class="item">未開封・未使用のもの</li>
					<li class="item">消費期限半年以上<br>（消費期限表記のない商品は購入から１年以内）</li>
				</ul>
				<small>※掲載のないメーカー・コスメについては、お買取できる場合もございますので、お気軽にお問い合わせください。</small>
				</div>
			</div>
			</section>
			<!-- /ポイント -->

			<!-- ポイント -->
			<section id="qa">
			<div class="qa_wrap">
				<h2 class="title">買取について</h2>

				<?php get_template_part( 'inc/qa-common' ); ?>
			</div>
			</section>
			<!-- /ポイント -->


			<?php require 'inc/module_standard.php'; ?>



			<?php require 'footer.php'; ?>

</body>

</html>
