<!doctype html>
<html lang="">

<head>

	<?php require('header.php'); ?>
	<title>宅配買取について</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date('YmdHi'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/delivery.css?=<?php echo date('YmdHi'); ?>">

</head>

<body id="top">

	<?php require('inc/page_header.php'); ?>

	<main>

		<section id="mv">
		<h2 class="title">宅配買取について</h2>
		<span>HOME DELIVERY BUYING</span>
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
							<li class="item">宅配買取について</li>
						</ul>
					</div>
					<!--/パンくず-->

					<!--イントロ-->
					<div id="introduction">
						<h3 class="sec_title"><span>自宅で誰でも簡単に。無料キットを送ります！</span></h3>
						
						<div class="intro_upperbox">
							<div class="ph_wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/delivery/intro_ph.jpg" alt=""></div>
							<div class="textbox">
								<h4 class="title">当店では宅配での買取を行なっております。</h4>
								<p class="text">お手元のサプリメント、MLM製品、コスメの処分にお困りのお客様は是非ご利用下さい。<br>宅配買取の際の送料は当店負担・もちろん振込手数料も当店負担でお客様の負担は”0”です。<br>「サプリメント、MLM製品、コスメを大量に持っているけど、持ち込むには多すぎて大変」というお客様は宅配買取を是非ご利用下さい。<br>即現金化したいお客様は店頭買取も行っておりますので、お気軽にご相談ください。</p>
								<div class="btn"><a href="<?php echo home_url("store"); ?>"><span>店舗買取について</span></a></div>
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
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/delivery/delivery_flow_icon_01.svg" alt=""></div>
									<div class="textbox">
										<h4 class="title"><span>1</span>ご来店</h4>
										<p class="text">0120-30-6022へお電話、もしくは宅配買取キットお申し込みフォームより宅配買取キットをご依頼ください。配送用のダンボール・着払い伝票・宅配買取申込みなどをお送りいたします。</p>
										<p class="small_text">※業者様及び大口見積もり希望のお客様の場合はクロネコヤマトのヤマト便を使い、ダンボールのご用意と集荷手配を致します。<br>詳細はお電話でのご案内となりますのでお問い合わせください。</p>
										<div class="btn"><a href="tel:0120036022"><span>今すぐ電話する</span></a></div>
									</div>
								</li>								
								<li class="detail">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/delivery/delivery_flow_icon_02.svg" alt=""></div>
									<div class="textbox">
										<h4 class="title"><span>2</span>無料査定</h4>
										<p class="text">下記の物を段ボールに梱包していただきます。<br>＜お品物・宅配買取申込み用紙・本人確認書類のコピー＞</p>
										<div class="btn"><a href="#"><span>本人確認書類について</span></a></div>
									</div>
								</li>								
								<li class="detail">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/delivery/delivery_flow_icon_03.svg" alt=""></div>
									<div class="textbox">
										<h4 class="title"><span>3</span>結果のご案内</h4>
										<p class="text">宅配買取キット同梱の着払い伝票を貼っていただきましたら宅配業者に集荷のご連絡をお願いいたします。お近くのコンビニエンスストアや取扱店にお持ち込みいただいても結構です。<br>商品が到着後、1〜3営業日以内に査定し、メール・FAX・お電話にてご連絡いたします。<br>査定結果にご了承いただき、買取成立しましたら、ご指定の銀行口座に即日お振込みいたします。</p>
									</div>
								</li>
								<li class="detail">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/delivery/delivery_flow_icon_04.svg" alt=""></div>
									<div class="textbox">
										<h4 class="title"><span>4</span>お支払い</h4>
										<p class="text">査定結果に了承いただけましたら、その場で現金にて買取金額をお渡しします。（高額の場合、銀行振込にて対応させていただく場合がございます。）<br>キャンセル料・査定料は一切かかりませんので、もし査定額にご納得いただけない場合はお申し付けください！</p>
									</div>
								</li>
							</ul>
							<div class="btn_wrap">
								<ul class="btn_list">
									<li class="btn link"><a href="<?php echo home_url("entry"); ?>"><span>宅配キット申し込みフォーム</span></a></li>
									<li class="btn link"><a href="<?php echo home_url("first"); ?>"><span>買取に関するよくある質問</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!--/流れ-->

		<?php require('inc/module_standard.php'); ?>
		<?php require('footer.php'); ?>

</body>
</html>