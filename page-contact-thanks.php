<!doctype html>
<html lang="">

<head>

	<?php require('header.php'); ?>
	<title>お問い合わせ</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date('YmdHi'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/form.css?=<?php echo date('YmdHi'); ?>">


</head>

<body id="top">

	<?php require('inc/page_header.php'); ?>

	<main>

		<section id="mv" class="contact">
		<h2 class="title">お問い合わせ</h2>
		<span>CONTACT</span>
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
							<li class="item">お問い合わせ</li>
						</ul>
					</div>
					<!--/パンくず-->

					<!--お電話での買取・相談-->
					<!-- <div id="contact_tel">
						<div class="tel_img"><img src="<?php echo get_template_directory_uri(); ?>/img/contact/tel_text.svg" alt="お電話での買取・相談"></div>
					</div> -->
					<!--/お電話での買取・相談-->

					<!--フォーム-->
					<div class="contact_form">
							<?php echo do_shortcode('[mwform_formkey key="127"]'); ?>
						<div class="completion_lead">
						<h2 class="sec_title"><span>この度はお問い合わせいただきありがとうございます。</span></h2>
					</div>

					<div class="completion_box">
						<p class="form_end">ご入力いただいたメールアドレス宛に受付確認メールをお送りしましたのでご確認ください。<br>
							確認メールが届いていない場合には、メールアドレスが誤っているか、確認メールが迷惑メールフォルダ等に<br>
							振り分けられている可能性がありますので、再度ご確認をお願いいたします。</p>
						<p class="form_end">万一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、<br>
							もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。</p>

						<div class="btn_common">
							<a href="<?php echo home_url(""); ?>" class="inter">トップへ戻る</a>
						</div>

					</div>
					</div>
					<!--/フォーム-->

		<?php require('inc/module_standard.php'); ?>
		<?php require('footer.php'); ?>

</body>
</html>



