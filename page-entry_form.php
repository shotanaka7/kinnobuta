<!doctype html>
<html lang="ja">

<head>

	<?php require 'header.php'; ?>
	<title>宅配買取お申込みフォーム</title>
	<link rel="stylesheet" type="text/css" href="/css/lower_common.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="/css/form.css?=<?php echo date( 'YmdHi' ); ?>">

	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />

</head>

<body id="top">

	<?php require 'inc/page_header.php'; ?>

	<main>

	<section id="mv" class="contact">
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
			<p class="lead">当サイトでは、実在性の証明とプライバシー保護のため、SSL暗号化通信を実現しています。<br>個人情報の取り扱いについては<a href="page-company.php#tab2" target="_blank">プライバシーポリシー</a>をご覧ください。</p>
			<div class="download_btn"><a href="#"><span>申込書をダウンロード</span></a></div>

			<div class="form_table">
				<table>
				<tr>
					<th class="title required">サイズ</th>
					<td class="text">
					<ul class="radio_list">
						<li class="radio"><label><input type="radio" name="name"><span>箱無し</span></label></li>
						<li class="radio"><label><input type="radio" name="name"><span>クッション封筒（B5）</span></label></li>
						<li class="radio"><label><input type="radio" name="name"><span>小（55cm）</span></label></li>
						<li class="radio"><label><input type="radio" name="name"><span>中（80cm）</span></label></li>
						<li class="radio"><label><input type="radio" name="name"><span>大（100cm）</span></label></li>
					</ul>
					</td>
				</tr>
				<tr>
					<th class="title required">お名前</th>
					<td class="text"><input type="text" class="w100" placeholder="お名前をご記入ください"></td>
				</tr>
				<tr>
					<th class="title required">ふりがな</th>
					<td class="text"><input type="text" class="w100" placeholder="ふりがなをご記入ください"></td>
				</tr>
				<tr>
					<th class="title required">郵便番号</th>
					<td class="text"><input type="text" class="w40" placeholder="例）100-0011"></td>
				</tr>
				<tr>
					<th class="title required">都道府県</th>
					<td class="text">
					<select>
						<option selected>選択してください</option>
						<option>都道府県名</option>
						<option>都道府県名</option>
						<option>都道府県名</option>
						<option>都道府県名</option>
						<option>都道府県名</option>
						<option>都道府県名</option>
						<option>都道府県名</option>
						<option>都道府県名</option>
					</select>
					</td>
				</tr>
				<tr>
					<th class="title required">市区町村・番地</th>
					<td class="text"><input type="text" class="w100" placeholder="住所をご記入ください"></td>
				</tr>
				<tr>
					<th class="title">ビル名・マンション名</th>
					<td class="text"><input type="text" class="w100" placeholder="建物名をご記入ください"></td>
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
					<th class="title required">査定金額のご連絡方法</th>
					<td class="text">
					<select>
						<option selected>選択してください</option>
						<option>電話</option>
						<option>連絡方法</option>
						<option>連絡方法</option>
					</select>
					</td>
				</tr>
				<tr>
					<th class="title required">査定希望のメーカ名・<br>品名・個数など</th>
					<td class="text"><textarea placeholder="お問い合わせ内容をご記入ください"></textarea></td>
				</tr>
				<tr>
					<th class="title">当店を何で<br>お知りになりましたか？</th>
					<td class="text">
					<ul class="radio_list">
						<li class="radio"><label><input type="radio" name="name"><span>インターネット</span></label></li>
						<li class="radio"><label><input type="radio" name="name"><span>チラシ</span></label></li>
						<li class="radio"><label><input type="radio" name="name"><span>ご紹介</span></label></li>
						<li class="radio"><label><input type="radio" name="name"><span>新聞広告</span></label></li>
						<li class="radio"><label><input type="radio" name="name"><span>雑誌広告</span></label></li>
						<li class="radio"><label><input type="radio" name="name"><span>リピーター</span></label></li>
						<li class="radio"><label><input type="radio" name="name"><span>その他</span></label></li>
					</ul>
					<input type="text" class="w100" placeholder="その他の場合ご記入ください">
					</td>
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
				</div>
			</div>
			</div>
			<!--/フォーム-->

			<?php require 'inc/module_standard.php'; ?>
			<?php require 'footer.php'; ?>

</body>

</html>
