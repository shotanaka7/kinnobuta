<!doctype html>
<html lang="">

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
			<div class="brand_list_wrap">
				<!-- ア行 -->
				<div class="list_box">
				<h2 class="title">ア行</h2>
				<div class="cont">
					<ul class="list">
					<?php
									$paged     = (int) get_query_var( 'paged' );
									$args      = array(
										'post_type'      => 'product',
										'taxonomy'       => 'brand',
										'field'          => 'slug',
										'term'           => 'a_gyou',
										'posts_per_page' => 100,
										'orderby'        => 'menu_order',
										'order'          => 'ASC',
										'post_status'    => 'publish',
									);
									$the_query = new WP_Query( $args );
									if ( $the_query->have_posts() ) :
										while ( $the_query->have_posts() ) :
											$the_query->the_post();
											?>

					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_arsoa.png" alt="ARSOA"></div>
						<div class="name">ARSOA</div>

						</a>
					</li>
											<?php
					endwhile;
										endif;
										wp_reset_postdata();
									?>

					</ul>
				</div>
				</div>
				<!-- カ行 -->
				<div class="list_box">
				<h2 class="title">カ行</h2>
				<div class="cont">
					<ul class="list">
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_arsoa.png" alt="ARSOA"></div>
						<div class="name">ARSOA</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_amway.png" alt="Amway"></div>
						<div class="name">Amway</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_asahi.png" alt="アサヒ"></div>
						<div class="name">アサヒ</div>

						</a>
					</li>

					</li>
					</ul>
				</div>
				</div>
				<!-- サ行 -->
				<div class="list_box">
				<h2 class="title">サ行</h2>
				<div class="cont">
					<ul class="list">
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_arsoa.png" alt="ARSOA"></div>
						<div class="name">ARSOA</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_amway.png" alt="Amway"></div>
						<div class="name">Amway</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_asahi.png" alt="アサヒ"></div>
						<div class="name">アサヒ</div>

						</a>
					</li>

					</li>
					</ul>
				</div>
				</div>
				<!-- タ行 -->
				<div class="list_box">
				<h2 class="title">タ行</h2>
				<div class="cont">
					<ul class="list">
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_arsoa.png" alt="ARSOA"></div>
						<div class="name">ARSOA</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_amway.png" alt="Amway"></div>
						<div class="name">Amway</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_asahi.png" alt="アサヒ"></div>
						<div class="name">アサヒ</div>

						</a>
					</li>

					</li>
					</ul>
				</div>
				</div>
				<!-- ナ行 -->
				<div class="list_box">
				<h2 class="title">ナ行</h2>
				<div class="cont">
					<ul class="list">
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_arsoa.png" alt="ARSOA"></div>
						<div class="name">ARSOA</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_amway.png" alt="Amway"></div>
						<div class="name">Amway</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_asahi.png" alt="アサヒ"></div>
						<div class="name">アサヒ</div>

						</a>
					</li>

					</li>
					</ul>
				</div>
				</div>
				<!-- ハ行 -->
				<div class="list_box">
				<h2 class="title">ハ行</h2>
				<div class="cont">
					<ul class="list">
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_arsoa.png" alt="ARSOA"></div>
						<div class="name">ARSOA</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_amway.png" alt="Amway"></div>
						<div class="name">Amway</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_asahi.png" alt="アサヒ"></div>
						<div class="name">アサヒ</div>

						</a>
					</li>

					</li>
					</ul>
				</div>
				</div>
				<!-- マ行 -->
				<div class="list_box">
				<h2 class="title">マ行</h2>
				<div class="cont">
					<ul class="list">
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_arsoa.png" alt="ARSOA"></div>
						<div class="name">ARSOA</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_amway.png" alt="Amway"></div>
						<div class="name">Amway</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_asahi.png" alt="アサヒ"></div>
						<div class="name">アサヒ</div>

						</a>
					</li>

					</li>
					</ul>
				</div>
				</div>
				<!-- ヤ行 -->
				<div class="list_box">
				<h2 class="title">ヤ行</h2>
				<div class="cont">
					<ul class="list">
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_arsoa.png" alt="ARSOA"></div>
						<div class="name">ARSOA</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_amway.png" alt="Amway"></div>
						<div class="name">Amway</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_asahi.png" alt="アサヒ"></div>
						<div class="name">アサヒ</div>

						</a>
					</li>

					</li>
					</ul>
				</div>
				</div>
				<!-- ラ行 -->
				<div class="list_box">
				<h2 class="title">ラ行</h2>
				<div class="cont">
					<ul class="list">
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_arsoa.png" alt="ARSOA"></div>
						<div class="name">ARSOA</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_amway.png" alt="Amway"></div>
						<div class="name">Amway</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_asahi.png" alt="アサヒ"></div>
						<div class="name">アサヒ</div>

						</a>
					</li>

					</li>
					</ul>
				</div>
				</div>
				<!-- ワ行 -->
				<div class="list_box">
				<h2 class="title">ワ行</h2>
				<div class="cont">
					<ul class="list">
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_arsoa.png" alt="ARSOA"></div>
						<div class="name">ARSOA</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_amway.png" alt="Amway"></div>
						<div class="name">Amway</div>

						</a>
					</li>
					<li class="item">
						<a href="">
						<div class="ph_wrap"><img src="/img/brand/brand_logo_asahi.png" alt="アサヒ"></div>
						<div class="name">アサヒ</div>

						</a>
					</li>

					</li>
					</ul>
				</div>
				</div>

			</div>
			</section>

			<?php require 'inc/module_standard.php'; ?>
			<?php require 'footer.php'; ?>

</body>

</html>
