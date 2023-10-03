</main>

<footer class="footer" id="footer">
  <div class="wrapper">
    <div class="footer_contents">
      <div class="footer_menu">
      <?php
            wp_nav_menu(
              array(
                'depth' => 1,
                'theme_location' => 'drawer',
                'container' => '',
                'menu_class' => 'layout_flex sb',
              )
            )
          ?>
        <!-- <ul class="layout_flex sb">
          <li>
            <a href="https://maruzi-kawara.com/" class="text_link">HOME</a>
          </li>
          <li>
            <a href="https://maruzi-kawara.com/#service" class="text_link">屋根工事</a>
          </li>
          <li>
            <a href="https://maruzi-kawara.com//works" class="text_link">施工実績</a>
          </li>
          <li>
            <a href="https://maruzi-kawara.com//news" class="text_link">お知らせ</a>
          </li>
          <li>
            <a href="https://maruzi-kawara.com/#company" class="text_link">会社案内</a>
          </li>
          <li>
            <a href="https://maruzi-kawara.com/#question" class="text_link">よくあるご質問</a>
          </li>
          <li>
            <a href="https://maruzi-kawara.com/#contact" class="text_link">お問い合わせ</a>
          </li>
        </ul> -->
      </div>
      <div class="footer_info layout_flex">
        <div><a href="https://maruzi-kawara.com/" class="logo">池田瓦店</a></div>
        <div class="address">
          <p>〒679-0322兵庫県西脇市黒田庄町石原285-2<br />TEL:0795-28-4380<br />電話受付9:00〜17:00(日祝定休)</p>
        </div>
        <a href="https://www.instagram.com/maruzi.kawara/" target="_blank" rel="noopener noreferrer" class="insta_link"></a>
      </div>
      <div class="textCenter">
        <small>Copyright© <a href="https://maruzi-kawara.com/" class="text_link">池田川店</a> All rights reserved.</small>
      </div>
    </div>

    <!-- sp -->
    <div class="bottom_menu for-pc">
      <a class="bottom_btn01" href="tel:0474758525" target="_blank" rel="noopener noreferrer"><span>お電話</span></a>
      <a class="bottom_btn02" href="https://maruzi-kawara.com/#contact"><span>お問い合わせ</span></a>
    </div>
  </div>
</footer>

<!-- <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> -->
<?php wp_footer(); ?>
</body>
</html>
