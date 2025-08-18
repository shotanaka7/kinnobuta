<!doctype html>
<html lang="">

<head>

	<?php require('header.php'); ?>
	<title>取り扱いブランド一覧</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date('YmdHi'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/brand.css?=<?php echo date('YmdHi'); ?>">

</head>

<body id="top">

	<?php require('inc/page_header.php'); ?>

	<main id="brand">

		<section id="mv">
			<h2 class="title">取り扱いブランド一覧</h2>
			<span>FOR FIRSTTIME USERS</span>
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

					<!--パンくず-->
					<div class="pankuz">
						<ul class="list">
							<li class="item"><a href="/">ホーム</a></li>
							<li class="item">取り扱いブランド一覧</li>
						</ul>
					</div>
					<!--/パンくず-->

					<section id="brand_list">
						<h2 class="sec_title"><span>買取ブランド一覧</span></h2>
						<p class="lead">高額買取ならお任せください！</p>
						<div class="brand_list_wrap">
							<!-- ア行 -->
							<div class="list_box">
								<h3 class="title">ア行</h3>
								<div class="cont">
									<ul class="list">
										<?php
										$taxonomy_name = 'brand';
										$term_id = 15;
										$termchildren = get_term_children($term_id, $taxonomy_name);
										foreach ($termchildren as $child) : ?>
											<?php 
											$term = get_term_by('id', $child, $taxonomy_name); 
											?>
												<li class="item">
													<a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
														<div class="ph_wrap">
														<img src="<?php the_field('brand_img', $term); ?>" alt="">
														</div>
														<div class="name"><?php echo $term->name;?></div>

													</a>
												</li>
										<?php endforeach; ?>

									</ul>
								</div>
							</div>
							<!-- カ行 -->
							<div class="list_box">
								<h3 class="title">カ行</h3>
								<div class="cont">
									<ul class="list">
										<?php
										$taxonomy_name = 'brand';
										$term_id = 16;
										$termchildren = get_term_children($term_id, $taxonomy_name);
										foreach ($termchildren as $child) : ?>
											<?php 
											$term = get_term_by('id', $child, $taxonomy_name); 
											?>
												<li class="item">
													<a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
														<div class="ph_wrap">
														<img src="<?php the_field('brand_img', $term); ?>" alt="">
														</div>
														<div class="name"><?php echo $term->name;?></div>

													</a>
												</li>
										<?php endforeach; ?>

									</ul>
								</div>
							</div>
							<!-- サ行 -->
							<div class="list_box">
								<h3 class="title">サ行</h3>
								<div class="cont">
									<ul class="list">
										<?php
										$taxonomy_name = 'brand';
										$term_id = 19;
										$termchildren = get_term_children($term_id, $taxonomy_name);
										foreach ($termchildren as $child) : ?>
											<?php 
											$term = get_term_by('id', $child, $taxonomy_name); 
											?>
												<li class="item">
													<a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
														<div class="ph_wrap">
														<img src="<?php the_field('brand_img', $term); ?>" alt="">
														</div>
														<div class="name"><?php echo $term->name;?></div>

													</a>
												</li>
										<?php endforeach; ?>

									</ul>
								</div>
							</div>
							<!-- タ行 -->
							<div class="list_box">
								<h3 class="title">タ行</h3>
								<div class="cont">
									<ul class="list">
										<?php
										$taxonomy_name = 'brand';
										$term_id = 20;
										$termchildren = get_term_children($term_id, $taxonomy_name);
										foreach ($termchildren as $child) : ?>
											<?php 
											$term = get_term_by('id', $child, $taxonomy_name); 
											?>
												<li class="item">
													<a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
														<div class="ph_wrap">
														<img src="<?php the_field('brand_img', $term); ?>" alt="">
														</div>
														<div class="name"><?php echo $term->name;?></div>

													</a>
												</li>
										<?php endforeach; ?>

									</ul>
								</div>
							</div>
							<!-- ナ行 -->
							<div class="list_box">
								<h3 class="title">ナ行</h3>
								<div class="cont">
									<ul class="list">
										<?php
										$taxonomy_name = 'brand';
										$term_id = 21;
										$termchildren = get_term_children($term_id, $taxonomy_name);
										foreach ($termchildren as $child) : ?>
											<?php 
											$term = get_term_by('id', $child, $taxonomy_name); 
											?>
												<li class="item">
													<a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
														<div class="ph_wrap">
														<img src="<?php the_field('brand_img', $term); ?>" alt="">
														</div>
														<div class="name"><?php echo $term->name;?></div>

													</a>
												</li>
										<?php endforeach; ?>

									</ul>
								</div>
							</div>
							<!-- ハ行 -->
							<div class="list_box">
								<h3 class="title">ハ行</h3>
								<div class="cont">
									<ul class="list">
										<?php
										$taxonomy_name = 'brand';
										$term_id = 22;
										$termchildren = get_term_children($term_id, $taxonomy_name);
										foreach ($termchildren as $child) : ?>
											<?php 
											$term = get_term_by('id', $child, $taxonomy_name); 
											?>
												<li class="item">
													<a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
														<div class="ph_wrap">
														<img src="<?php the_field('brand_img', $term); ?>" alt="">
														</div>
														<div class="name"><?php echo $term->name;?></div>

													</a>
												</li>
										<?php endforeach; ?>

									</ul>
								</div>
							</div>
							<!-- マ行 -->
							<div class="list_box">
								<h3 class="title">マ行</h3>
								<div class="cont">
									<ul class="list">
										<?php
										$taxonomy_name = 'brand';
										$term_id = 23;
										$termchildren = get_term_children($term_id, $taxonomy_name);
										foreach ($termchildren as $child) : ?>
											<?php 
											$term = get_term_by('id', $child, $taxonomy_name); 
											?>
												<li class="item">
													<a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
														<div class="ph_wrap">
														<img src="<?php the_field('brand_img', $term); ?>" alt="">
														</div>
														<div class="name"><?php echo $term->name;?></div>

													</a>
												</li>
										<?php endforeach; ?>

									</ul>
								</div>
							</div>
							<!-- ヤ行 -->
							<div class="list_box">
								<h3 class="title">ヤ行</h3>
								<div class="cont">
									<ul class="list">
										<?php
										$taxonomy_name = 'brand';
										$term_id = 24;
										$termchildren = get_term_children($term_id, $taxonomy_name);
										foreach ($termchildren as $child) : ?>
											<?php 
											$term = get_term_by('id', $child, $taxonomy_name); 
											?>
												<li class="item">
													<a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
														<div class="ph_wrap">
														<img src="<?php the_field('brand_img', $term); ?>" alt="">
														</div>
														<div class="name"><?php echo $term->name;?></div>

													</a>
												</li>
										<?php endforeach; ?>

									</ul>
								</div>
							</div>
							<!-- ラ行 -->
							<div class="list_box">
								<h3 class="title">ラ行</h3>
								<div class="cont">
									<ul class="list">
										<?php
										$taxonomy_name = 'brand';
										$term_id = 25;
										$termchildren = get_term_children($term_id, $taxonomy_name);
										foreach ($termchildren as $child) : ?>
											<?php 
											$term = get_term_by('id', $child, $taxonomy_name); 
											?>
												<li class="item">
													<a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
														<div class="ph_wrap">
														<img src="<?php the_field('brand_img', $term); ?>" alt="">
														</div>
														<div class="name"><?php echo $term->name;?></div>

													</a>
												</li>
										<?php endforeach; ?>

									</ul>
								</div>
							</div>
							<!-- ワ行 -->
							<div class="list_box">
								<h3 class="title">ワ行</h3>
								<div class="cont">
									<ul class="list">
										<?php
										$taxonomy_name = 'brand';
										$term_id = 26;
										$termchildren = get_term_children($term_id, $taxonomy_name);
										foreach ($termchildren as $child) : ?>
											<?php 
											$term = get_term_by('id', $child, $taxonomy_name); 
											?>
												<li class="item">
													<a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
														<div class="ph_wrap">
														<img src="<?php the_field('brand_img', $term); ?>" alt="">
														</div>
														<div class="name"><?php echo $term->name;?></div>

													</a>
												</li>
										<?php endforeach; ?>

									</ul>
								</div>
							</div>

						</div>
					</section>

					<?php require('inc/module_standard.php'); ?>
					<?php require('footer.php'); ?>

</body>

</html>