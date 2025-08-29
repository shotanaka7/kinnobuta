<?php
/**
 * トップページのキービジュアル
 */
?>

<div class="top-kv-wrap">
  <div class="top-kv">
    <div class="top-kv-bg">
      <picture>
        <source media="(min-width: 600px)" srcset="<?php echo imgDir(); ?>/top/kv.jpg">
        <img src="<?php echo imgDir(); ?>/top/kv-sp.jpg" alt="">
      </picture>
    </div>
    <div class="top-kv-body">
      <div class="top-kv-in">
        <div class="top-kv-sub-wrap">
          <p class="top-kv-sub">専門店だからこその<span class="yellow">業界最高値級</span>の<span class="yellow">買取価格</span></p>
        </div>
        <h1 class="top-kv-main">
          <span class="top-kv-ttl">MLM/サプリ/健康食品を<br><span class="yellow">どこよりも高く売る</span>なら<br><span class="xl">”きんのぶた”</span></span>
        </h1>
        <ul class="top-kv-labels">
          <li class="top-kv-label">
            <span class="top-kv-label-top">最短で</span>
            <span class="top-kv-label-main md"><span class="pink"><span class="marker">即日</span></span><br><span class="marker">現金化<span></span>
          </li>
          <li class="top-kv-label">
            <span class="top-kv-label-top">おかげさまで</span>
            <span class="top-kv-label-main"><span class="vertical">創業</span><span class="marker small"><span class="lg"><span class="num"><?php echo get_established_year(); ?></span></span>年</span></span>
          </li>
          <li class="top-kv-label">
            <span class="top-kv-label-top">買取実績</span>
            <span class="top-kv-label-main"><span class="marker small"><span class="lg"><span class="num"><?php echo get_kaitori_jisseki(); ?></span></span>万点</span></span>
            <span class="top-kv-label-bottom">以上</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>