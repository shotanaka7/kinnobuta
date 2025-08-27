<?php
/**
 * トップページのキービジュアル
 */
?>

<div class="top-kv">
	<div class="top-kv-bg">
	<img src="<?php echo imgDir(); ?>/top/kv.jpg" alt="">
	</div>
	<div class="top-kv-body">
	<div class="top-kv-in">
		<p class="top-kv-sub">専門店だからこその<span class="yellow"><br class="sp">業界最高級</span>の<span class="yellow">買取価格</span></p>
		<h1 class="top-kv-main">
		<span class="screen-reader-text">きんのぶた - </span>
		<span class="top-kv-ttl">MLM/サプリ/<br>健康食品の<br>買取に強い<span class="yellow">専門店</span></span>
		</h1>
		<ul class="top-kv-labels">
		<li class="top-kv-label">
			<span class="top-kv-label-top">最短で</span>
			<span class="top-kv-label-main md"><span class="pink">即日</span><br>現金化</span>
		</li>
		<li class="top-kv-label">
			<span class="top-kv-label-top">おかげさまで</span>
			<span class="top-kv-label-main"><span class="vertical">創業</span><span class="lg"><span class="num"><?php echo get_established_year(); ?></span></span>年</span>
		</li>
		<li class="top-kv-label">
			<span class="top-kv-label-top">買取実績</span>
			<span class="top-kv-label-main"><span class="lg"><span class="num"><?php echo get_kaitori_jisseki(); ?></span></span>万点</span>
			<span class="top-kv-label-bottom">以上</span>
		</li>
		</ul>
	</div>

	</div>
</div>
