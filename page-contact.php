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
					<div id="contact_tel">
						<div class="tel_img"><img src="<?php echo get_template_directory_uri(); ?>/img/contact/tel_text.svg" alt="お電話での買取・相談"></div>
					</div>
					<!--/お電話での買取・相談-->

					<!--フォーム-->
					<div class="contact_form">
						<h2 class="sec_title"><span>お問い合わせ</span></h2>
						<p class="lead">当サイトでは、実在性の証明とプライバシー保護のため、SSL暗号化通信を実現しています。<br>個人情報の取り扱いについては<a href="page-company.php#tab2" target="_blank">プライバシーポリシー</a>をご覧ください。</p>

						<div class="form_table">
						<?php echo do_shortcode('[mwform_formkey key="127"]'); ?>
							<!-- <table>
								<tr>
									<th class="title required">お名前</th>
									<td class="text"><input type="text" class="w100" placeholder="お名前をご記入ください"></td>
								</tr>
								<tr>
									<th class="title required">ふりがな</th>
									<td class="text"><input type="text" class="w100" placeholder="ふりがなをご記入ください"></td>
								</tr>
								<tr>
									<th class="title required">電話番号</th>
									<td class="text"><input type="text" class="w100" placeholder="例：012-33-4445"></td>
								</tr>
								<tr>
									<th class="title required">メールアドレス<span class="note">※1</span></th>
									<td class="text"><input type="text" class="w100" placeholder="example@example.jp"></td>
								</tr>
								<tr>
									<th class="title required">お問い合わせ内容</th>
									<td class="text"><textarea placeholder="お問い合わせ内容をご記入ください"></textarea></td>
								</tr>
							</table>
							<div class="small_caption">
								<ul class="list">
									<li class="text">※ 個人情報の取扱いについては<a href="page-company.php#tab2" target="_blank">こちら</a>をご覧ください。</li>
									<li class="text">※1 携帯メールアドレスをご登録いただいた場合、お持ちの携帯電話の設定で受信拒否をされている場合があります。<br>受信拒否設定を解除していただくか、もしくは『sputnik-re.com』というドメインを「受信許可」設定にしてください。</li>
								</ul>
							</div>
							<div class="submit_btn_wrap">
								<ul class="btn_list">
									<li class="btn back"><input type="button" value="戻るボタン用（通常は非表示）"></li>
									<li class="btn submit"><input type="submit" value="送信内容を確認する"></li>
								</ul>
							</div> -->
						</div>
					</div>
					<!--/フォーム-->

		<?php require('inc/module_standard.php'); ?>
		<?php require('footer.php'); ?>

</body>
</html>



