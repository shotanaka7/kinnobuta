<!doctype html>
<html lang="">

<head>

	<?php require('header.php'); ?>
	<title>店頭買取について</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date('YmdHi'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/store.css?=<?php echo date('YmdHi'); ?>">

</head>

<body id="top">

	<?php require('inc/page_header.php'); ?>

	<main>

		<section id="mv">
			<h2 class="title">店頭買取について</h2>
			<span>IN STORE BUYING</span>
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
							<li class="item">店頭買取について</li>
						</ul>
					</div>
					<!--/パンくず-->

					<!--イントロ-->
					<div id="introduction">
						<h3 class="sec_title"><span>その場で現金に！お急ぎの方はこちら</span></h3>

						<div class="intro_upperbox">
							<div class="ph_wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/store/intro_ph.jpg" alt=""></div>
							<div class="textbox">
								<h4 class="title">当店では店舗での買取を行っております。</h4>
								<p class="text">お手元のサプリメント、MLM製品、コスメを即現金化したいお客様は是非ご利用下さい。<br>事前見積もりなしでの店頭買取も行なっております。<br>遠方にお住まいで店頭までこれないお客様は宅配買取も行なっておりますので是非ご利用下さい。</p>
								<div class="btn"><a href="<?php echo home_url("delivery"); ?>"><span>宅配買取について</span></a></div>
							</div>
						</div>

						<div class="required_wrap">
							<h4 class="title"><span>買取に必要なもの</span></h4>
							<p class="text">ご本人確認書類としてご利用いただける身分証明書として、下記のいずれか一点をご用意の上ご持参下さい。<br>※古物営業法に定められた手順に基づき買取の際は必ず身分証明が必要になります。</p>
							<ul class="list">
								<li class="detail"><span>運転免許証</span></li>
								<li class="detail"><span>健康保険証</span></li>
								<li class="detail"><span>住民基本台帳カード</span></li>
								<li class="detail"><span>パスポート</span></li>
							</ul>
						</div>

					</div>
					<!--/イントロ-->

					<!--流れ-->
					<div id="flow">
						<h3 class="flow_title"><span>店頭買取の流れ</span></h3>
						<div class="flow_list_wrap">
							<ul class="flow_list">
								<li class="detail">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/store/store_flow_icon_04.svg" alt=""></div>
									<div class="textbox">
										<h4 class="title"><span>1</span>ご来店</h4>
										<p class="text">当社事務所までお越しください。<br>ご来店前にお電話でご連絡を頂けますとご案内がスムーズです。<br>お品物と本人確認書類（運転免許・保険証・パスポート等）をお持ちください。</p>
										<div class="btn"><a href="tel:0120036022"><span>今すぐ電話する</span></a></div>
									</div>
								</li>
								<li class="detail">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/store/store_flow_icon_01.svg" alt=""></div>
									<div class="textbox">
										<h4 class="title"><span>2</span>無料査定</h4>
										<p class="text">窓口にて、お持ちいただいたお品物の査定をお申込みください。<br>専門の鑑定士が査定いたします。</p>
									</div>
								</li>
								<li class="detail">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/store/store_flow_icon_02.svg" alt=""></div>
									<div class="textbox">
										<h4 class="title"><span>3</span>結果のご案内</h4>
										<p class="text">査定が完了しましたら、査定結果をご案内いたします。<br>ご質問などありましたらお尋ねください。</p>
									</div>
								</li>
								<li class="detail">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/store/store_flow_icon_03.svg" alt=""></div>
									<div class="textbox">
										<h4 class="title"><span>4</span>お支払い</h4>
										<p class="text">査定結果に了承いただけましたら、その場で現金にて買取金額をお渡しします。（高額の場合、銀行振込にて対応させていただく場合がございます。）<br>キャンセル料・査定料は一切かかりませんので、もし査定額にご納得いただけない場合はお申し付けください！</p>
									</div>
								</li>
							</ul>
							<div class="btn_wrap">
								<ul class="btn_list">
									<li class="btn tel"><a href="tel:0120036022"><span><img src="<?php echo get_template_directory_uri(); ?>/img/store/store_flow_tel.svg" alt="0120-03-6022"></span></a></li>
									<li class="btn link"><a href="#"><span>買取に関するよくある質問</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!--/流れ-->

					<?php require('inc/module_standard.php'); ?>
					<?php require('footer.php'); ?>

	</main>
</body>

</html>