<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header inner">
      <h1 class="">
        <a href="/" class="header__title">
          <img src="/wp-content/uploads/2023/images/logo.png" alt="" />
        </a>
      </h1>
      <!-- ハンバーガーメニュー -->
      <div class="drawer-icon">
        <a class="drawer-icon-bars menuButton gNavBtn" id="menuButton">
          <div></div>
          <div></div>
          <div></div>
        </a>
      </div>
      <nav class="gNav" id="gNav">
        <div class="gNav_container vertical gNav-inner hover_opacity">
          <?php
            wp_nav_menu(
              array(
                'depth' => 1,
                'theme_location' => 'drawer',
                'container' => '',
                'menu_class' => 'gNav_primary font_kosakigake',
              )
            )
          ?>
          <!-- <ul class="gNav_primary font_kosakigake">
            <li class="">
              <a href="/build/">十木舎の家づくり<span>Our house building</span></a>
            </li>
            <li class="">
              <a href="/works/">実例紹介<span>Works</span></a>
            </li>
            <li class="">
              <a href="/flow/">費用と流れ<span>Cost and Flow</span></a>
            </li>
            <li class="">
              <a href="/about/">十木舎について<span>About us</span></a>
            </li>
            <li class="">
              <a href="/blog/">ブログ<span>Blog</span></a>
            </li>
            <li class="">
              <a href="/recruit/">採用情報<span>Recruit</span></a>
            </li>
            <li class="">
              <a href="/faq/">よくあるご質問<span>FAQ</span></a>
            </li>
            <li class="">
              <a href="/contact/">お問い合わせ<span>Contact</span></a>
            </li>
          </ul> -->
          <div class="gNav_secondary">
            <div class="gNav_sns">
              <a href="https://www.instagram.com/juhmokusha/" target="_blank" rel="noopener"><img src="/assets/image/common/icon_instagram.svg" alt="" /></a>
              <a href="https://www.facebook.com/juhmokusha/" target="_blank" rel="noopener"><img src="/assets/image/common/icon_facebook.svg" alt="" /></a>
            </div>
            <div>
              <small class="gNav_copyright"><span>©</span> 2021 Juhmokusha</small>
              <a class="gNav_privacy" href="/privacy/">Privacy Policy</a>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <div id="pageTop">
      <a href="#"><img src="" alt="ロゴ" /></a>
    </div>

    <main class="main">
