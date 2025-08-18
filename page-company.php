<!doctype html>
<html lang="">

<head>

	<?php require('header.php'); ?>
	<title>会社概要</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lower_common.css?=<?php echo date('YmdHi'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/company.css?=<?php echo date('YmdHi'); ?>">

</head>

<body id="top">

	<?php require('inc/page_header.php'); ?>

	<main>

		<section id="mv">
		<h2 class="title">会社概要</h2>
		<span>COMPANY</span>
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
							<li class="item"><a href="<?php echo home_url(""); ?>">ホーム</a></li>
							<li class="item">会社概要</li>
						</ul>
					</div>
					<!--/パンくず-->

					<!--タブ-->
					<div class="tab_wrap">
						<ul class="tab_list item3">
							<li class="tab active"><a href="#tab1">会社概要</a></li>
							<li class="tab"><a href="#tab2">プライバシーポリシー</a></li>
							<li class="tab"><a href="#tab3">ご利用規約</a></li>
						</ul>
					</div>
					<!--/タブ-->

					<!--会社概要-->
					<div class="tab_cont active" id="company">
						<h3 class="sec_title"><span>会社概要</span></h3>
						<div class="company_table">
							<table>
								<tr>
									<th class="title">会社名</th>
									<td class="text">株式会社スプートニク</td>
								</tr>
								<tr>
									<th class="title">代表</th>
									<td class="text">久保智照</td>
								</tr>
								<tr>
									<th class="title">会社設立</th>
									<td class="text">2011年9月</td>
								</tr>
								<tr>
									<th class="title">資本金</th>
									<td class="text">300万円</td>
								</tr>
								<tr>
									<th class="title">主な取引銀行</th>
									<td class="text">千葉銀行</td>
								</tr>
								<tr>
									<th class="title">業務内容</th>
									<td class="text">ブランド品・貴金属・コイン・サプリメント・化粧品・酒等の買取インターネットでの販売</td>
								</tr>
								<tr>
									<th class="title">本社</th>
									<td class="text">千葉県千葉市花見川区幕張本郷1-25-1-203</td>
								</tr>
								<tr>
									<th class="title">古物商許可番号</th>
									<td class="text">千葉県公安委員会　第441040002057号</td>
								</tr>
								<tr>
									<th class="title">電話番号</th>
									<td class="text">043-273-6022</td>
								</tr>
								<tr>
									<th class="title">FAX番号</th>
									<td class="text">043-273-5661</td>
								</tr>
								<tr>
									<th class="title">メールアドレス</th>
									<td class="text">reuse@sputnik-re.com</td>
								</tr>
							</table>
						</div>
						<div class="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.209774279052!2d140.03716319999998!3d35.6718364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602281c704bd5d43%3A0xd85c5efdb5ed09ab!2z44CSMjYyLTAwMzMg5Y2D6JGJ55yM5Y2D6JGJ5biC6Iqx6KaL5bed5Yy65bmV5by15pys6YO377yR5LiB55uu77yS77yV4oiS77yR!5e0!3m2!1sja!2sjp!4v1664381046629!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
					<!--/会社概要-->

					<!--プライバシーポリシー-->
					<div class="tab_cont" id="privacy">
						<h3 class="sec_title"><span>プライバシーポリシー</span></h3>
						<p class="lead">株式会社スプートニク(以下「当社」といいます)は、個人情報取扱い事業者として個人情報保護に関する法令を遵守し、お客様からご提供いただく個人情報(以下「個人情報」といいます)を、細心の注意を払って取扱います。</p>
						<div class="policy_box">
							<h4 class="title">1. 個人情報に対する当社の基本姿勢</h4>
							<p class="text">当社は個人情報の重要性を認識し、個人情報の保護に関する法令および社内規定等を、全ての役員・従業者が遵守することにより個人情報の適当な取扱いと安全かつ確実な管理・運営に万全を尽くしております。 また、継続的に見直しを実施して個人情報保護の一層の改善・向上に努めてまいります。</p>
						</div>
						<div class="policy_box">
							<h4 class="title">2. 個人情報の利用、収集、提供</h4>
							<p class="text">当社は、個人情報の利用目的を明確に定め、その目的達成のために必要な範囲で、公正かつ適正な手段により個人情報の収集、利用および提供をおこないます。</p>
						</div>
						<div class="policy_box">
							<h4 class="title">3. 個人情報の第三者への提供</h4>
							<p class="text">以下のいずれかに該当する場合を除き、お客様の個人情報を第三者に開示・提供することはありません。</p>
							<ul class="list">
								<li class="text">お客様から同意をいただいた場合</li>
								<li class="text">法令または警察・裁判所その他の政府機関より適法に開示を要求された場合</li>
								<li class="text">人の生命・財産などの重大な利益を保護するために必要な場合</li>
								<li class="text">公衆衛生の向上又は児童の健全な育成の推進のために特に必要な場合</li>
							</ul>
						</div>
						<div class="policy_box">
							<h4 class="title">4. 個人情報の保護対策</h4>
							<ul class="list">
								<li class="text">当社の従業員に対して個人情報保護のための教育を行い、お客様の個人情報を厳重に管理致します。</li>
								<li class="text">当社が保有するデータベースシステムについては、必要なセキュリティ対策を講じます。</li>
							</ul>
						</div>
						<div class="policy_box">
							<h4 class="title">5. 個人情報処理の外部委託</h4>
							<p class="text">当社が保有する個人情報の処理について外部委託するときは、必要な契約を締結し、適切な管理・監督を行います。</p>
						</div>
						<div class="policy_box">
							<h4 class="title">6. お客様からの開示請求、苦情、訂正、利用停止等の申し立て</h4>
							<p class="text">当社への個人情報の利用目的の通知、開示、内容の訂正、追加または削除、利用の停止、消去及び第三者への提供の停止、個人情報の取り扱いに関する苦情は、以下の連絡先までご連絡ください。</p>
						</div>
						<div class="policy_box">
							<h4 class="title">7. 個人情報の削除・消去</h4>
							<p class="text">お客様との取引終了後規定の保存期間（5年間）が経過した場合、またはご成約に至らなかった場合は入手後、お客様の事前・事後の承認を得ることなく、お客様の個人情報を安全かつ完全に削除・消去いたします。</p>
						</div>
						<div class="policy_box">
							<h4 class="title">8.個人情報に関するお問い合わせ先</h4>
							<p class="text">株式会社スプートニク　相談窓口責任者:久保 Tel：043-273-6022</p>
						</div>
					</div>
					<!--/プライバシーポリシー-->

					<!--ご利用規約ー-->
					<div class="tab_cont" id="terms">
						<h3 class="sec_title"><span>ご利用規約</span></h3>
						<div class="policy_box">
							<h4 class="title">各種付帯費用</h4>
							<p class="text">査定依頼時の送料・査定手数料・買取手数料・キャンセル料なし<br>（査定価格有効期間内にご連絡をいただけなかった場合のキャンセル、または当社取扱アイテム以外の場合は、お客様負担で着払いで返送いたします。）</p>
						</div>
						<div class="policy_box">
							<h4 class="title">査定結果のお知らせ</h4>
							<p class="text">店頭にお持込いただいた場合は、基本的にすぐ査定し結果を提示いたします。<br>宅配買取の場合は、お荷物到着後3営業日以内に査定価格を提示いたします。</p>
						</div>
						<div class="policy_box">
							<h4 class="title">査定価格の有効期間</h4>
							<p class="text">メール・電話などで査定価格提示後、7日以内が有効期間となります。<br>7日以内にお返事いただけない場合は、品物をお客様に返送いたします。<br>（その際は、お客様負担で着払いにて返送いたします。）</p>
						</div>
						<div class="policy_box">
							<h4 class="title">査定金額のお支払方法</h4>
							<p class="text">現金、または口座振込</p>
						</div>
						<div class="policy_box">
							<h4 class="title">査定金額のお支払期間</h4>
							<p class="text">お客様から買取ご承認をいただいた後、即日お振り込みいたします。<br>（15時を過ぎた場合は翌営業日の着金となります）</p>
							<h5 class="sub_title">買取のキャンセルについて</h5>
							<p class="text">査定価格の有効期間内に買取ご承認いただけなかった場合の品物返送料は当社負担です。<br>ただし、当社取扱アイテム以外の品物の場合、お客様負担で着払いにて返送する場合があります。</p>
							<h5 class="sub_title">買取について</h5>
							<p class="text">古物営業法第15条によりお客様の身元を確認させていただきます。<br>買取承諾書には、お客様の住所・氏名・電話番号を自筆で記入していただくとともに、ご本人様確認書類（運転免許証・健康保険証・パスポート・住民基本台帳）のコピーをさせていただきます。<br>個人情報の取扱についてはこちらをご覧ください。<br>ご本人様確認書類の提示は買取金額に関係なく、買取成立の場合は毎回提示をしていただきます。<br>18歳未満の方の買取には、保護者の同意書が必要となります。買取申し込み書の同意欄に保護者の方の連絡先の記入と、サインをお願いいたします。</p>
						</div>
						<div class="policy_box">
							<h4 class="title">買取成立後の商品の返品について</h4>
							<p class="text">一旦買取が成立したものについては商品の所有権は当社に移転し、お客様のいかなる都合による場合でも商品の返品をすることはできません。</p>
						</div>
					</div>
					<!--/ご利用規約-->
					
		<?php require('inc/module_standard.php'); ?>
		<?php require('footer.php'); ?>

</body>
</html>