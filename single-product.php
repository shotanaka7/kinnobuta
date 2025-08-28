<!doctype html>
<html lang="ja">

<head>

	<?php require 'header.php'; ?>
	<title>商品詳細</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/product.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/product-custom.css?=<?php echo date( 'YmdHi' ); ?>">
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
		<section id="main_cont" class="info-main">
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
			<?php
			$message = '現在高価買取中です！お問い合わせください';
			?>
			<section id="info" class="info">
			<div class="info-product">
				<p class="info-message sp"><?php echo $message; ?></p>

				<div class="info-thumb">
				<img src="<?php the_field( 'product_photo' ); ?>" alt="">
				</div>
				<div class="info-details">
				<p class="info-message pc"><?php echo $message; ?></p>
				<h1 class="info-ttl">
					<span class="info-brand">【<?php the_field( 'product_brand' ); ?>】</span>
					<span class="info-product"><?php the_title(); ?></span>
				</h1>
				<div class="info-date">
					<dl class="info-date-first">
					<dt>投稿日：</dt>
					<dd><time datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date( 'Y.n.j' ); ?></time></dd>
					</dl>
					<?php
					// 更新日が投稿日と異なる場合のみ表示。更新日がない場合は投稿日と同じになるため、表示されない。
					if ( get_the_date() !== get_the_modified_date() ) :
						?>
					<dl class="info-date-update">
					<dt>最終更新日：</dt>
					<dd><time datetime="<?php echo get_the_modified_date( 'c' ); ?>"><?php echo get_the_modified_date( 'Y.n.j' ); ?></time></dd>
					</dl>
						<?php
					endif;
					?>
				</div>

				<?php
				if ( get_field( 'product_status' ) || get_field( 'product_method' ) ) :
					?>
				<div class="info-meta">
					<?php if ( get_field( 'product_status' ) ) : ?>
					<dl>
					<dt class="info-status">状態：</dt>
					<dd><?php the_field( 'product_status' ); ?></dd>
					</dl>
					<?php endif; ?>

					<?php if ( get_field( 'product_method' ) ) : ?>
					<dl>
					<dt class="info-method">買取方法：</dt>
					<dd><?php the_field( 'product_method' ); ?></dd>
					</dl>
					<?php endif; ?>
				</div>
				<?php endif; ?>
				<!-- 価格はh2で指定 -->
				<div class="info-price">
					<h2 class="info-price-ttl">買取価格</h2>

					<?php
					$rows = array();

					for ( $i = 1; $i <= 3; $i++ ) {
						$num   = get_field( "product_kaitori{$i}_num" );
						$price = get_field( "product_kaitori{$i}_price" );

						if ( ! $num || ! $price ) {
							continue;
						}

						// 価格は数値なら整形、文字列ならそのまま
						if ( is_numeric( $price ) ) {
							$price_display = '〜' . '¥' . number_format_i18n( (float) $price );
						} else {
							$price_display = $price; // 例：「要問い合わせ」など
						}

						$rows[] = array(
							'num'   => $num,
							'price' => $price_display,
						);
					}

					if ( ! empty( $rows ) ) :
						?>
					<table class="info-price-table" aria-labelledby="price-heading">
					<thead>
						<tr>
						<th scope="col">数量</th>
						<th scope="col">価格<span class="tax">（税込）</span></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ( $rows as $r ) : ?>
						<tr>
						<td><?php echo esc_html( $r['num'] ); ?></td>
						<td><?php echo esc_html( $r['price'] ); ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
					</table>
					<?php endif; ?>
				</div>
				<div class="info-price-note">
					<h3 class="info-price-note-ttl">注意事項</h3>
					<ul class="info-price-note-list">
					<li>※表記価格は新品未開封の状態を想定しております。</li>
					<li>※買取価格は目安となります。<br>商品によっては価格が変動している商品もございますので、詳しい価格をお調べしたい場合はお問い合わせください。</li>
					</ul>
				</div>

				<?php
				if ( get_field( 'product_textarea' ) ) :
					?>
				<div class="info-desc">
					<h2 class="info-desc-ttl">商品情報</h2>
					<div class="info-desc-txt"><?php the_field( 'product_textarea' ); ?></div>
				</div>
					<?php
				endif;
				?>
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

			<!-- qa -->
			<section id="qa">
			<div class="qa_wrap">
				<h2 class="title">買取について</h2>

				<?php get_template_part( 'inc/qa-common' ); ?>
			</div>
			</section>
			<!-- /qa -->

			<?php
			require 'inc/module_standard.php';
			require 'footer.php';
			?>

</body>

</html>
