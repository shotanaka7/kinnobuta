<!doctype html>
<html lang="ja">

<head>

	<?php require 'header.php'; ?>
	<title>買取実績</title>
	<link rel="stylesheet" type="text/css" href="/css/lower_common.css?=<?php echo date( 'YmdHi' ); ?>">
	<link rel="stylesheet" type="text/css" href="/css/achievement.css?=<?php echo date( 'YmdHi' ); ?>">


</head>

<body id="achievement">

	<?php require 'inc/page_header.php'; ?>

	<main>

	<section id="mv">
		<h1 class="title">買取実績</h1>
		<span>PURCHASE RECORD</span>
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
				<li class="item"><a href="/">買取実績</a></li>
				<li class="item">商品名</li>
			</ul>
			</div>

			<!-- 記事詳細 -->
			<section id="detail">
			<div class="title_wrap">
				<!-- 日付 -->
				<div class="category">サプリ買取</div>
				<!-- タイトル -->
				<h3 class="title">商品名が入ります。</h3>
			</div>
			<div class="cont_wrap">
				<img src="img/news/sample.jpg" alt=""><br><br>
				<p><strong>お買取致しました　サプリメント商品のご紹介です。<br>＜高知県　　Y様＞</strong></p>
				<p>定期購入で余ってしまったとのことでお買取させていただきました。<br>
				この度は誠にありがとうございました。<br>
				またの御用の際は是非当社をご利用くださいませ！<br>
				当社が業界最高価格にてお買取いたします。</p>

			</div>

			<!-- ページャー -->
			<div class="news_page_navi_wrap">
				<ul class="list">
				<li class="link prev"><a href="" rel="prev">前の記事</a></li>
				<li class="link home"><a href="">一覧に戻る</a></li>
				<li class="link next"><a href="" rel="next">次の記事</a></li>
				</ul>
			</div>


			</section>
			<!-- 記事詳細 -->

			<!-- 他店比較 -->
			<section id="tatenhikaku">
			<div class="lead_box">
				<h3 class="title">万が一、買取金額が他店より安い場合はご相談下さい。<br>お見積もりの見直しをさせていただきます！！</h3>
				<small>※また、他店で取扱いがない製品につきましても当店ではお買取可能の場合がございます。<br>あきらめずにご相談くださいませ。</small>
				<div class="ph_wrap">
				<img src="img/achievement/tatenhikaku_img.png" alt="カートイメージ">
				</div>
			</div>
			<div class="bottom_text">
				<p class="text">只今、期限半年未満、賞味期限切れ、消費期限切れ商品についてもお買い取りさせていただいております。<br>不明な点等ございましたら、電話もしくは<a href="">問い合わせフォーム</a>よりお問い合わせ下さい。</p>
				<ul class="list">
				<li class="item">※サプリメント・化粧品（コスメ）は製造2年以内、使用期限6カ月以上のものに限りお買取させて頂きます。</li>
				<li class="item">※海外、免税店で購入されました商品は買取りできかねます。</li>
				<li class="item">※第一種医薬品・第二種医薬品・第三種医薬品と記入されている製品はお買取対象外です。</li>
				</ul>
			</div>
			</section>
			<!-- /他店比較 -->


			<?php require 'inc/module_standard.php'; ?>



			<?php require 'footer.php'; ?>

</body>

</html>
