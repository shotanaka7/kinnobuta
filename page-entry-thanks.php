<!doctype html>
<html lang="">

<head>

	<?php require('header.php'); ?>
	<title>宅配買取お申込みフォーム</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date('YmdHi'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/form.css?=<?php echo date('YmdHi'); ?>">


</head>

<body id="top">

	<?php require('inc/page_header.php'); ?>

	<main>

	<section id="mv" class="entry">
		<h2 class="title">宅配買取お申込みフォーム</h2>
		<span>PURCHASE FORM</span>
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
							<li class="item">宅配買取お申込みフォーム</li>
						</ul>
					</div>
					<!--/パンくず-->


					<!--フォーム-->
					<div class="contact_form">
							<?php echo do_shortcode('[mwform_formkey key="98"]'); ?>
						<div class="completion_lead">
						<h2 class="sec_title"><span>この度はお申し込みいただきありがとうございます。</span></h2>
					</div>

					<div class="completion_box">
						<p class="form_end">ご入力いただいたメールアドレス宛に受付確認メールをお送りしましたのでご確認ください。<br>
							確認メールが届いていない場合には、メールアドレスが誤っているか、確認メールが迷惑メールフォルダ等に<br>
							振り分けられている可能性がありますので、再度ご確認をお願いいたします。</p>
						<p class="form_end">万一、ご返信メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、<br>
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



