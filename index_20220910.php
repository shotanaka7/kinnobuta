<!doctype html>
<html lang="">

<head>

	<?php require('header.php'); ?>
	<title>ページタイトル</title>
	<link rel="stylesheet" type="text/css" href="/css/top.css?=<?php echo date('YmdHi'); ?>">

	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />

</head>

<body id="top">

	<?php require('inc/page_header.php'); ?>

	<main>

		<section id="mv">
			<h2 class="lead"><img src="img/top/top_mv_lead.svg" alt="買取査定額最大20%UP"></h2>
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

					<!-- キャンペーン -->
					<section id="campaign">
						<h2 class="sec_title"><span>お得なキャンペーン開催中！</span></h2>
						<p class="lead">キャンペーン詳細ページよりご確認ください。</p>

						<div class="campaign_slider_wrap">
							<ul class="slider">
								<li class="slide">
									<div class="img_wrap"><img src="/img/top/campaign_bnr_01.jpg" alt=""></div>
								</li>
								<li class="slide">
									<div class="img_wrap"><img src="/img/top/campaign_bnr_02.jpg" alt=""></div>

								</li>
								<li class="slide">
									<div class="img_wrap"><img src="/img/top/campaign_bnr_03.jpg" alt=""></div>

								</li>
							</ul>
						</div>
					</section>
					<!-- /キャンペーン -->

					<!-- きんのぶたが選ばれる理由 -->
					<section id="riyu">
						<div class="title_warap">
							<div class="ph_wrap">
								<img src="/img/top/riyu_logo.svg" alt="KinnoButa">
							</div>
							<h2 class="sec_title"><span>きんのぶたが選ばれる理由</span></h2>
						</div>
						<p class="lead">創業11年の実績による業界知識と繋がりからサプリメント・MLM・コスメ化粧品の買取において業界最大手の買取業者です。</p>

						<ul class="list">
							<li class="item"><span>SPEED</span>
								<h3>買取から現金化までを最速対応</h3>
							</li>
							<li class="item"><span>PRICE</span>
								<h3>老舗だからできる高額買取</h3>
							</li>
							<li class="item"><span>EASY</span>
								<h3>1点からでも買取対応</h3>
							</li>
							<li class="item"><span>SAFETY</span>
								<h3>秘密厳守徹底で開業11年トラブルゼロ</h3>
							</li>
						</ul>
					</section>
					<!-- /きんのぶたが選ばれる理由 -->

					<!-- 買取ブランドリスト -->
					<section id="brand">
						<h2 class="sec_title"><span>買取ブランドリスト</span></h2>
						<p class="lead">サイトに掲載のない製品・メーカーもお気軽にお問い合わせください！</p>

						<ul class="list">
							<li class="item">
								<div class="ph_wrap"><img src="/img/brand/brand_logo_arsoa.png" alt="ARSOA"></div>
								<div class="name">ARSOA</div>
							</li>
							<li class="item">
								<div class="ph_wrap"><img src="/img/brand/brand_logo_amway.png" alt="Amway"></div>
								<div class="name">Amway</div>
							</li>
							<li class="item">
								<div class="ph_wrap"><img src="/img/brand/brand_logo_asahi.png" alt="アサヒ"></div>
								<div class="name">アサヒ</div>
							</li>
							<li class="item">
								<div class="ph_wrap"><img src="/img/brand/brand_logo_kanebo.png" alt="カネボウ"></div>
								<div class="name">カネボウ</div>
							</li>
							<li class="item">
								<div class="ph_wrap"><img src="/img/brand/brand_logo_suntry.png" alt="サントリー"></div>
								<div class="name">サントリー</div>
							</li>
							<li class="item">
								<div class="ph_wrap"><img src="/img/brand/brand_logo_napla.png" alt="ナプラ"></div>
								<div class="name">ナプラ</div>
							</li>
							<li class="item">
								<div class="ph_wrap"><img src="/img/brand/brand_logo_noevir.png" alt="ノエビア"></div>
								<div class="name">ノエビア</div>
							</li>
							<li class="item">
								<div class="ph_wrap"><img src="/img/brand/brand_logo_manavis.png" alt="マナビス"></div>
								<div class="name">マナビス</div>
							</li>
							<li class="item">
								<div class="ph_wrap"><img src="/img/brand/brand_logo_pola.png" alt="ポーラ"></div>
								<div class="name">ポーラ</div>
							</li>
							<li class="item">
								<div class="ph_wrap"><img src="/img/brand/brand_logo_drsilabo.png" alt="ドクターシーラボ"></div>
								<div class="name">ドクターシーラボ</div>
							</li>
							<li class="item">
								<div class="ph_wrap"><img src="/img/brand/brand_logo_milbon.png" alt="ミルボン"></div>
								<div class="name">ミルボン</div>
							</li>
							<li class="item">
								<div class="ph_wrap"><img src="/img/brand/brand_logo_yakult.png" alt="ヤクルト"></div>
								<div class="name">ヤクルト</div>
							</li>
						</ul>

						<div class="btn_common">
							<a href=""><span>もっと見る</span></a>
						</div>

					</section>
					<!-- /買取ブランドリスト -->

					<!-- 買取の流れ -->
					<section id="flow">
						<div class="flow_wraper">
							<!-- 宅配 -->
							<div class="flow_box delivery">
								<h2 class="title"><span><img src="/img/top/flow_title_icon_delivery.svg" alt=""></span>宅配買取の流れ</h2>
								<table>
									<tr class="h190">
										<th><img src="/img/delivery/delivery_flow_icon_01.svg" alt="お申し込み"></th>
										<td>
											<div class="table_title">
												<span class="circle">1</span>
												<h3>お申し込み</h3>
											</div>
											<p class="text">電話またはフォームからお申し込み。<br>ご自宅に宅配キットが届きます。</p>
											<div class="btn_mini_common">
												<a href=""><span>宅配キットを申し込む</span></a>
											</div>

										</td>
									</tr>
									<tr class="h135">
										<th><img src="/img/delivery/delivery_flow_icon_02.svg" alt="商品を発送"></th>
										<td>
											<div class="table_title">
												<span class="circle">2</span>
												<h3>商品を発送</h3>
											</div>
											<p class="text">発送用のダンボールに商品を梱包し、自宅から送料無料で商品を発送。</p>
										</td>
									</tr>
									<tr class="h135">
										<th><img src="/img/delivery/delivery_flow_icon_03.svg" alt="無料査定"></th>
										<td>
											<div class="table_title">
												<span class="circle">3</span>
												<h3>無料査定</h3>
											</div>
											<p class="text">当社に到着した商品を査定。<br>
												査定金額はメールでお伝えします。</p>
										</td>
									</tr>
									<tr class="h165">
										<th><img src="/img/delivery/delivery_flow_icon_04.svg" alt="ご入金"></th>
										<td>
											<div class="table_title">
												<span class="circle">4</span>
												<h3>ご入金</h3>
											</div>
											<p class="text">査定金額にご満足いただければ翌営業日までにお振込みします。</p>
										</td>
									</tr>
								</table>
								<div class="btn_wrapper">
									<div class="btn_common">
										<a href=""><span>宅配キット申し込みフォーム</span></a>
									</div>
									<div class="btn_common">
										<a href=""><span>買取に関するよくある質問</span></a>
									</div>

								</div>
							</div>

							<!-- 店頭 -->
							<div class="flow_box store">
								<h2 class="title"><span><img src="/img/top/flow_title_icon_store.svg" alt=""></span>店頭買取の流れ</h2>
								<table>
									<tr class="h190">
										<th><img src="/img/store/store_flow_icon_01.svg" alt="ご来店"></th>
										<td>
											<div class="table_title">
												<span class="circle">1</span>
												<h3>ご来店</h3>
											</div>
											<p class="text">当社事務所までお越しください。ご来店前にお電話いただけるとスムーズです。</p>
											<div class="btn_mini_common pink">
												<a href="tel:0120036022"><span>今すぐ電話する</span></a>
											</div>

										</td>
									</tr>
									<tr class="h135">
										<th><img src="/img/store/store_flow_icon_02.svg" alt="無料査定"></th>
										<td>
											<div class="table_title">
												<span class="circle">2</span>
												<h3>無料査定</h3>
											</div>
											<p class="text">窓口にて商品を受け取り、<br>
												専門の鑑定士が査定いたします。</p>
										</td>
									</tr>
									<tr class="h135">
										<th><img src="/img/store/store_flow_icon_03.svg" alt="結果のご案内"></th>
										<td>
											<div class="table_title">
												<span class="circle">3</span>
												<h3>結果のご案内</h3>
											</div>
											<p class="text">審査が完了しましたら、その場で査定結果をご案内いたします。</p>
										</td>
									</tr>
									<tr class="h165">
										<th><img src="/img/store/store_flow_icon_04.svg" alt="お支払い"></th>
										<td>
											<div class="table_title">
												<span class="circle">4</span>
												<h3>お支払い</h3>
											</div>
											<p class="text">査定結果に了承いただけましたら、その場で現金にてお支払いします。<small>※キャンセル料/査定料はかかりません。</small></p>
										</td>
									</tr>
								</table>
								<div class="btn_wrapper">
									<div class="btn_common pink">
										<a href="tel:0120036022"><span><img src="/img/store/store_flow_tel.svg" alt="0120-03-6022"></span></a>
									</div>
									<div class="btn_common pink">
										<a href=""><span>買取に関するよくある質問</span></a>
									</div>

								</div>
							</div>
						</div>
					</section>
					<!-- /買取の流れ -->
					
	<?php require('inc/module_standard.php'); ?>

					<!-- 最新情報 -->
					<section id="headline">
						<h2 class="sec_title"><span>最新情報</span></h2>
						<ul class="list">
							<li class="item">
								<div class="date">2020.12.23</div>
								<div class="text">年末年始の営業のご案内　2020-2021</div>
							</li>
							<li class="item">
								<div class="date">2019.12.17</div>
								<div class="text">年末年始の営業のご案内　2019-2020</div>
							</li>
							<li class="item">
								<div class="date">2019.04.16</div>
								<div class="text">2019年ゴールデンウィーク営業のご案内</div>
							</li>
						</ul>
					</section>
					<!-- /最新情報 -->

	<?php require('footer.php'); ?>

</body>
</html>