<?php get_header(); ?>
<section class="homeMv lyMv lyMvWhite">
  <video class="homeMv_video" src="<?php echo get_template_directory_uri()?>/assets/video/main.mp4" playsinline="" loop="" autoplay="" muted="" style="width: 1481.2px; height: 102%"></video>
  <div id="typed-output"></div>
</section>
      <div class="container">
        <!-- news -->
        <section class="news bk_animation" id="news">
          <div class="wrapper">
            <div class="util-title">
              <p class="main-title">NEWS</p>
              <p class="sub-title">お知らせ</p>
            </div>
            <div class="newsArea">
              <ul class="news-items layout_flex slider">

              <?php if(have_posts()) :  ?>
                <?php while(have_posts()) : ?>
                  <?php the_post() ;?>
                  <li class="news-item itemColum slider-nav">
                  <a href="<?php the_permalink(); ?>">
                    <div class="pict">
                      <?php if(has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                      <?php else: ?>
                      <img src="https://placehold.jp/640x360.png" alt="ダミー" />
                      <?php endif; ?>
                    </div>
                    <?php
                      $category = get_the_category();
                      if($category[0]) :
                    ?>
                    <span class="tag"><?php echo $category[0]->cat_name; ?></span>
                    <?php endif; ?>
                    <span class="<?php the_time('c') ?> data"><?php the_time('Y.n.j') ?></span>
                    <h4><?php the_title(); ?></h4>
                  </a>
                </li>
                <?php endwhile; ?>
              <?php endif; ?>

              </ul>
            </div>
            <div class="about-message-contact">
              <div class="about-message-contact-text">
                <a href="/blog/"
                  ><img src="" alt="" />
                  <span>もっと見る</span>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- service -->

        <div class="homeBg one scrollFadeBottom02 on">
          <!-- <div class="utilBG-title">
              <p class="mainBG-title">flow</p>
              <p class="subBG-title">施工までの流れ</p>
          </div> -->
        </div>

        <section class="service bg-sankaku" id="service">
          <div class="inner">
            <div class="util-title">
              <p class="main-title">service</p>
              <p class="sub-title">サービス</p>
            </div>
            <div class="service-read read wrapper">
              <h2>
                私たちは<br class="for-sp">こんなことが出来ます！
              </h2>
              <p>
                屋根のひび割れや部分的な損傷、台風等の暴風対策に対応します。<br />
                気になる箇所のメンテナンスはもちろん、ドローン空撮での短時間チェックも実施。 <br />
                安全に調査し、お客様と一緒に確認。<br />
                不要な物置や蔵の解体も承ります。多様なスタッフがお悩み解決いたします。
              </p>
            </div>

            <!-- ​屋根修理 -->
            <div class="leakage_repair" id="leakage_repair">
              <div class="service-title">
                <div class="wrapper">
                  <div class="blue_box">
                    <img src="https://placehold.jp/64x52.png" alt="" />
                    <h3>
                      ​屋根修理
                      <span class="en">Leakage Repair</span>
                    </h3>
                  </div>
                </div>
                <div class="pict"></div>
              </div>
              <div class="service-info ">
                <p class="textCenter">
                  あなたの屋根のお悩みは？<br />
                  屋根・瓦のこんな状態には注意が必要です！<br />
                  <span class="caption">雨漏り・漆喰剥がれ・瓦のずれ等、屋根に悩みがある方は池田瓦店にご相談下さい！</span>
                </p>
                <ul class="service-items layout_flex">
                  <li class="service-item">
                    <figure>
                      <img  src="<?php echo get_template_directory_uri() ?>/images/repair_01.png" alt="" />
                    </figure>
                    <figcaption>棟の瓦がズレている / <br class="for-pc">喰が剥がれている</figcaption>
                    <p class="service-text">かなり痛んでいるのがよくわかります。棟がこのような状態になると、雨漏りや瓦が崩れてしまうなどの危険があります。屋根や家の構造材に影響を与えないように、早めに修理を行う必要があります。</p>
                    <div class="service-pricing">
                        <p>積み直し工事 : <span class="price">8500円/ｍ～</span></p>
                        <p>漆喰塗り替え工事 :  <span class="price">1500円/ｍ～</span></p>
                    </div>
                  </li>
                  <li class="service-item">
                      <figure class="slider_service">
                          <img src="<?php echo get_template_directory_uri() ?>/images/repair_02_1.webp" alt="" />
                          <img src="<?php echo get_template_directory_uri() ?>/images/repair_02_2.webp" alt="" />
                          <img src="<?php echo get_template_directory_uri() ?>/images/repair_02_3.webp" alt="" />
                          <img src="<?php echo get_template_directory_uri() ?>/images/repair_02_4.webp" alt="" />
                          <!-- さらに追加する場合はここに -->
                      </figure>
                      <figcaption>瓦が割れている / <br class="for-pc"> 瓦がズレている</figcaption>
                      <p class="service-text">
                        瓦にヒビや割れ、ずれが見られます。放置しておきますと、屋根の下地に雨水等が浸入し、家自体の傷みに繋がっていきます。そうなる前に瓦の取替え等の処理を行う必要があります。</p>
                      <div class="service-pricing">
                        <p>瓦差し替え工事 :  <span class="price">3000円～​</span></p>
                      </div>
                  </li>
                  <li class="service-item">
                    <figure>
                      <img src="<?php echo get_template_directory_uri() ?>/images/repair_03.webp" alt="" />
                    </figure>
                    <figcaption>谷板に穴があいている / <br class="for-pc">谷の下辺りが雨漏りする</figcaption>
                    <p class="service-text">谷板が銅板で施工されている場合、古くなると、雨だれが当たる場所に穴が開いてしまうことがあります。雨水が直接屋根の下地に浸入し、雨漏りに繋がるので、錆びに強いステンレス製の谷板に交換する必要があります。</p>
                    <div class="service-pricing">
                        <p>谷板交換工事 :  <span class="price">4500円/ｍ～</span></p>
                      （ステンレス谷板代金を含む）
                    </div>
                  </li>
                </ul>

                <!-- accordion -->
                <!-- <div class="hs-accordion-group">
                  <div class="hs-accordion" id="hs-basic-no-arrow-heading-one">
                    <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-gray-800 transition dark\:bg-blue-600 text-4xl justify-center" aria-controls="hs-basic-no-arrow-collapse-one">料金の目安</button>
                    <div id="hs-basic-no-arrow-collapse-one text-center " class="service-price hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" aria-labelledby="hs-basic-no-arrow-heading-one">
                      <div class="layout_flex">
                        <div class="left">
                          <dl>
                            <dt>漆喰補修工事</dt>
                            <dd>10,000～15,000円 / ヵ所</dd>
                          </dl>
                          <dl>
                            <dt>棟積み直し工事</dt>
                            <dd>15,000～20,000円 / ｍ</dd>
                          </dl>
                          <dl>
                            <dt>谷板金交換工事</dt>
                            <dd>15,000～ 20,000円 / m</dd>
                          </dl>
                        </div>
                        <div class="right">
                          <dl>
                            <dt>雨樋掃除</dt>
                            <dd>15,000円〜</dd>
                          </dl>
                          <dl>
                            <dt class="h_91">破損瓦差し替え</dt>
                            <dd>1枚から承ります。<br />詳しくはお問い合わせください。</dd>
                          </dl>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <a href="#" class="btn">雨漏り修理施工実績一覧へ</a>
              </div>
            </div>

            <!-- 屋根葺き替え -->
            <div class="Reroof" id="Reroof">
              <div class="service-title reverse">
                <div class="wrapper">
                  <div class="blue_box">
                    <img src="https://placehold.jp/64x52.png" alt="" />
                    <h3>
                    屋根葺き替え
                      <span class="en">Leakage Repair</span>
                    </h3>
                  </div>
                </div>
                <div class="pict"></div>
              </div>
              <div class="service-info ">
                <p class="textCenter">
                屋根勾配、小屋組みの強度等の条件が揃えば <br>
                カラーベストの屋根やトタン屋根等から<br>
                瓦屋根への葺き替えも可能です！<br>
                <br>
                当社では、屋根診断の結果、屋根下地材からの交換<br>
                裏板・野地板の交換や垂木の交換など、
                <br>
                屋根の状況及びお客様のご要望に応じた葺き替え工事を行います。
                </p>
                <ul class="service-items layout_flex">
                  <li class="service-item">
                    <figure class="slider_service">
                          <img src="<?php echo get_template_directory_uri() ?>/images/repair_02_1.webp" alt="" />
                          <img src="<?php echo get_template_directory_uri() ?>/images/repair_02_2.webp" alt="" />
                          <img src="<?php echo get_template_directory_uri() ?>/images/repair_02_3.webp" alt="" />
                          <img src="<?php echo get_template_directory_uri() ?>/images/repair_02_4.webp" alt="" />
                    </figure>
                    <figcaption>よみがえり</figcaption>
                    <p class="service-text">古くなった屋根は、新しい瓦屋根に葺き替えする事が可能です！</p>
                    <div class="service-pricing">
                      <p>
                      屋根葺き替え工事​ :  <span class="price">1,100,000円 / 30坪~​</span>
                      </p>
                    </div>
                  </li>
                  <!-- 必要があれば追加  -->
                </ul>

                <!-- <div class="hs-accordion-group">
                  <div class="hs-accordion" id="hs-basic-no-arrow-heading-2">
                    <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-gray-800 transition dark\:bg-blue-600 text-4xl justify-center" aria-controls="hs-basic-no-arrow-collapse-one">料金の目安</button>
                    <div id="hs-basic-no-arrow-collapse-2" class="service-price hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" aria-labelledby="hs-basic-no-arrow-heading-one">
                      <div class="layout_flex">
                        <div class="left">
                          <dl>
                            <dt>漆喰補修工事</dt>
                            <dd>10,000～15,000円 / ヵ所</dd>
                          </dl>
                          <dl>
                            <dt>棟積み直し工事</dt>
                            <dd>15,000～20,000円 / ｍ</dd>
                          </dl>
                          <dl>
                            <dt>谷板金交換工事</dt>
                            <dd>15,000～ 20,000円 / m</dd>
                          </dl>
                        </div>
                        <div class="right">
                          <dl>
                            <dt>雨樋掃除</dt>
                            <dd>15,000円〜</dd>
                          </dl>
                          <dl>
                            <dt class="h_91">破損瓦差し替え</dt>
                            <dd>1枚から承ります。<br />詳しくはお問い合わせください。</dd>
                          </dl>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->

                <a href="#" class="btn">雨漏り修理施工実績一覧へ</a>
              </div>
            </div>
            <!-- ​屋根塗装 / 外壁塗装 -->
            <div class="Renova" id="Renova">
              <div class="service-title">
                <div class="wrapper">
                  <div class="blue_box">
                    <img src="https://placehold.jp/64x52.png" alt="" />
                    <h3>
                    ​屋根塗装 / 外壁塗装 / 解体工事
                      <span class="en">Leakage Repair</span>
                    </h3>
                  </div>
                </div>
                <div class="pict"></div>
              </div>
              <div class="service-info ">
                <p>
                    必要に応じて塗装工事や解体工事も引き受けております。<br>
                    お客様のご要望をお聞かせください。
                </p>
                <ul class="service-items layout_flex">
                  <li class="service-item">
                    <figure>
                      <img src="https://placehold.jp/640x360.png" alt="" />
                    </figure>
                    <figcaption>気になっている天井や壁のシミ</figcaption>
                    <p>天井にシミがある場合、棟板金の劣化や瓦などの屋根材のズレの他、天窓から雨水が浸透していたりと様々な原因が考えられます。</p>
                  </li>
                  <li class="service-item">
                    <figure>
                      <img src="https://placehold.jp/640x360.png" alt="" />
                    </figure>
                    <figcaption>気になっている天井や壁のシミ</figcaption>
                    <p>天井にシミがある場合、棟板金の劣化や瓦などの屋根材のズレの他、天窓から雨水が浸透していたりと様々な原因が考えられます。</p>
                  </li>
                  <li class="service-item">
                    <figure>
                      <img src="https://placehold.jp/640x360.png" alt="" />
                    </figure>
                    <figcaption>気になっている天井や壁のシミ</figcaption>
                    <p>天井にシミがある場合、棟板金の劣化や瓦などの屋根材のズレの他、天窓から雨水が浸透していたりと様々な原因が考えられます。</p>
                  </li>
                </ul>

                <a href="#" class="btn hoverUnderline">雨漏り修理施工実績一覧へ</a>
              </div>
            </div>
          </div>
          <div class="hs-accordion-group">
            <div class="hs-accordion" id="hs-basic-no-arrow-heading-3">
              <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-gray-800 transition dark\:bg-blue-600 text-4xl justify-center" aria-controls="hs-basic-no-arrow-collapse-one">料金の目安</button>
              <div id="hs-basic-no-arrow-collapse-3" class="service-price hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" aria-labelledby="hs-basic-no-arrow-heading-one">
                <div class="layout_flex">
                  <div class="left">
                    <dl>
                      <dt>漆喰補修工事</dt>
                      <dd>10,000～15,000円 / ヵ所</dd>
                    </dl>
                    <dl>
                      <dt>棟積み直し工事</dt>
                      <dd>15,000～20,000円 / ｍ</dd>
                    </dl>
                    <dl>
                      <dt>谷板金交換工事</dt>
                      <dd>15,000～ 20,000円 / m</dd>
                    </dl>
                  </div>
                  <div class="right">
                    <dl>
                      <dt>雨樋掃除</dt>
                      <dd>15,000円〜</dd>
                    </dl>
                    <dl>
                      <dt class="h_91">破損瓦差し替え</dt>
                      <dd>1枚から承ります。<br />詳しくはお問い合わせください。</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion">
            <h3 class="js-accordion_title">料金の目安</h3>
            <div class="box" style="display: none;">
              <div class="layout_flex sb">
                <div class="left">
                  <dl>
                      <dt>漆喰補修工事</dt><dd>10,000～15,000円 / ヵ所</dd>
                    </dl><dl>
                      <dt>棟積み直し工事</dt><dd>15,000～20,000円 / ｍ</dd>
                    </dl><dl>
                      <dt>谷板金交換工事</dt><dd>15,000～ 20,000円 / m</dd>
                    </dl>
                </div>
                <div class="right">
                  <dl>
                      <dt>雨樋掃除</dt><dd>15,000円〜</dd>
                    </dl><dl>
                      <dt class="h_91">破損瓦差し替え</dt><dd>1枚から承ります。<br>詳しくはお問い合わせください。</dd>
                    </dl>
                </div>
              </div>
            </div>
        </div>

        </section>

        <div class="homeBg two scrollFadeBottom02 on"></div>

        <!-- features -->
        <section class="features" id="features">
          <div class="wrapper">
            <div class="util-title">
              <p class="main-title">feature</p>
              <p class="sub-title">特徴</p>
            </div>
            <div class="feature-list">
              <ul class="feature-items">
                <li class="feature-item layout_flex">
                  <!-- <div class="num">01</div> -->
                  <h3>伝統の技術<span>Tradition</span></h3>
                  <p>
                    池田瓦店は、創業35年の歴史を持つ老舗。<br />
                    世代を超えて瓦の技術を受け継いでいます。
                  </p>
                </li>
                <li class="feature-item layout_flex">
                  <!-- <div class="num">01</div> -->
                  <h3>地域密着<span>Commitment</span></h3>
                  <p>
                    地域の皆様の屋根に関する悩みや要望を深く理解し、<br />
                    最適な提案を行います。
                  </p>
                </li>
                <li class="feature-item layout_flex">
                  <!-- <div class="num">01</div> -->
                  <h3>信頼の実績<span>Rerief</span></h3>
                  <p>
                    多くのお客様からの口コミや推薦を頂戴し、<br />
                    池田瓦店の技術とサービスの高さを証明しています。
                  </p>
                </li>
                <li class="feature-item layout_flex">
                  <!-- <div class="num">01</div> -->
                  <h3>アフターサポート<span>After Support</span></h3>
                  <p>工事後もしっかりとサポートいたします。</p>
                </li>
                <li class="feature-item layout_flex">
                  <!-- <div class="num">01</div> -->
                  <h3>心からのサポート<span>Rerief</span></h3>
                  <p>お客様一人一人とのコミュニケーションを大切にし、安心・安全な工事を心がけています。</p>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <div class="homeBg three scrollFadeBottom02 on"></div>

        <!-- products -->
        <!-- <section class="products" id="products">
          <div class="wrapper">
            <div class="util-title">
              <p class="main-title">products</p>
              <p class="sub-title">取扱い</p>
            </div>
            <p class="textCenter">
              丸治瓦店では、和瓦・洋瓦・防災瓦など、豊富な種類の瓦を取り扱っております。<br />
              スレート・金属屋根（ガルバリウム鋼板）の施工も行っております。
            </p>
            <div class="product_list">
              <ul class="product_items layout_flex">
                <li class="product_item">
                  <h3>株式会社鶴弥</h3>
                  <figure><img src="https://placehold.jp/640x360.png" alt="株式会社鶴弥" /></figure>
                  <figcaption>地震や台風、大雨といった自然災害に強く、暮らしに安全と安心をもたらす強力な「防災瓦」です。様々な外観の住宅に合わせて、形状・色ともに、バリエーション豊富に取り揃えております。</figcaption>
                  <a href="https://www.try110.com/product/" target="_blank" rel="noopener noreferrer" class="text_link link">メーカーホームページはこちら</a>
                </li>
                <li class="product_item">
                  <h3>株式会社鶴弥</h3>
                  <figure><img src="https://placehold.jp/640x360.png" alt="株式会社鶴弥" /></figure>
                  <figcaption>地震や台風、大雨といった自然災害に強く、暮らしに安全と安心をもたらす強力な「防災瓦」です。様々な外観の住宅に合わせて、形状・色ともに、バリエーション豊富に取り揃えております。</figcaption>
                  <a href="https://www.try110.com/product/" target="_blank" rel="noopener noreferrer" class="text_link link">メーカーホームページはこちら</a>
                </li>
                <li class="product_item">
                  <h3>株式会社鶴弥</h3>
                  <figure><img src="https://placehold.jp/640x360.png" alt="株式会社鶴弥" /></figure>
                  <figcaption>地震や台風、大雨といった自然災害に強く、暮らしに安全と安心をもたらす強力な「防災瓦」です。様々な外観の住宅に合わせて、形状・色ともに、バリエーション豊富に取り揃えております。</figcaption>
                  <a href="https://www.try110.com/product/" target="_blank" rel="noopener noreferrer" class="text_link link">メーカーホームページはこちら</a>
                </li>
                <li class="product_item">
                  <h3>株式会社鶴弥</h3>
                  <figure><img src="https://placehold.jp/640x360.png" alt="株式会社鶴弥" /></figure>
                  <figcaption>地震や台風、大雨といった自然災害に強く、暮らしに安全と安心をもたらす強力な「防災瓦」です。様々な外観の住宅に合わせて、形状・色ともに、バリエーション豊富に取り揃えております。</figcaption>
                  <a href="https://www.try110.com/product/" target="_blank" rel="noopener noreferrer" class="text_link link">メーカーホームページはこちら</a>
                </li>
              </ul>
            </div>
          </div>
        </section> -->
        <!-- min-contact -->
        <section class="min-contact" id="min-contact">
          <div class=" inner">
            <div class="contact_box">
              <div class="contact_box__title">
                <h4 class="textCenter">
                  <!-- 地元習志野の屋根工事店として、地域のお客様を大切にしています。 -->
                  <span>お問い合わせ・無料見積り、お気軽にご相談ください!</span>
                </h4>
                <p class="textCenter">雨漏り補修・屋根リフォームとメンテナンスのご相談は池田瓦店へ。</p>
              </div>
              <div class="contact_box__bottom layout_flex">
                <div class="cbb_l textCenter">
                  <p>お気軽にお問い合わせください</p>
                  <div class="tel"></div>
                  <p class="time">電話受付 / 9:00〜17:00（日祝定休）</p>
                </div>
                <div class="cbb_r textCenter">
                  <p>24時間365日受付中!</p>
                  <a href="#contact" class="btn">LINEでのお問い合わせ</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="homeBg four scrollFadeBottom02 on"></div>

        <!-- works -->
        <section class="works" id="works">
          <div class="wrapper container">
            <div class="util-title">
              <p class="main-title">works</p>
              <p class="sub-title">施工実績</p>
            </div>
            <div class="works_list">
            <ul class="works_items layout_flex">
              <?php
                $args = array(
                  'post_type' => 'works',
                  'posts_per_page' => -1
                );
                $query = new WP_Query($args);
                if($query->have_posts()) :
                  while($query->have_posts()) :
                    $query->the_post();
              ?>
                <li class="works_item itemColum">
                  <a href="<?php the_permalink(); ?>">
                    <div class="pict">
                      <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else: ?>
                        <img src="https://placehold.jp/640x360.png" alt="ダミー" />
                      <?php endif; ?>
                    </div>
                    <span class="tag"><?php echo $category[0]->cat_name; ?></span>
                    <?php
                      $tags = get_the_tags();
                      if($tags) :
                    ?>
                      <span class="area webfont"><?php echo $tags[0]->name; ?></span>
                    <?php endif; ?>
                    <h3><?php the_title(); ?></h3>
                  </a>
                </li>
              <?php
                  endwhile;
                endif;
                wp_reset_postdata();
              ?>
            </ul>
              <a href="/works/" class="btn s_btn">施工実績一覧へ</a>
            </div>
          </div>
        </section>

        <div class="homeBg five scrollFadeBottom02 on"></div>

        <!-- company -->
        <section class="company bg-sankaku" id="company">
          <div class=" inner">
            <div class="util-title">
              <p class="main-title">company</p>
              <p class="sub-title">会社案内</p>
            </div>

            <div class="sd appear layout_flex">
              <div class="sd appear-info">
                <p class="text sd appear">
                  代表取締役、池田と申します。<br />
                  <br />
                  家は私たちの身体と同じ。定期的なケアや小さなトラブルの修繕で、大きな修復の必要性を回避できます。当社は、お客様一人ひとりの要望に応じた最適なメンテナンスを目指します。<br />
                  <br />
                  私たちの専門家の手により、「質の良いサービスを適正価格で」をモットーに、屋根修理から住宅リフォーム、解体工事まで、あらゆる施工を行います。お客様の予算や技術的要望に柔軟に応えることが、私たちの最大の強みです。<br />
                  <br />
                  「水漏れをどこに相談すれば？」や「工事は手間では？」のようなご質問や懸念に、私たちとともに解決の道を探しましょう。お客様の安心と快適な暮らしをサポートするのが、私たちの役目です。何卒、皆様の変わらぬご支援をお願い致します。
                </p>
              </div>
              <div class="sd appear-human">
                <div class="sd appear appear-imgFirst">
                  <img class="sd" alt="" src="<?php echo get_template_directory_uri() ?>/images/ikeda01.png" />
                  <div class="sd appear">
                    <p class="text-sub sd appear">代表取締役</p>
                    <p class="text sd ">池田 章二</p>
                  </div>
                </div>
                <div class="sd appear appear-imgSecond"><img class="sd" alt="" src="https://storage.googleapis.com/studio-design-asset-files/projects/bXqzrBZwqD/s-680x1000_v-fs_webp_e1c90b23-3a2a-43e4-bae9-69493025ccf6_small.webp" /><img class="sd" alt="" src="https://storage.googleapis.com/studio-design-asset-files/projects/bXqzrBZwqD/s-600x560_v-fs_webp_01d90351-3118-472b-b6f0-b4d62f9e3798_small.webp" /></div>
              </div>
            </div>

            <div class="company_content layout_flex">
              <div class="company_profile">
                <h3>会社概要</h3>
                <table>
                  <tbody>
                    <tr>
                      <th>事業所名</th>
                      <td>池田瓦店</td>
                    </tr>
                    <tr>
                      <th>代表者名</th>
                      <td>池田 章二 （いけだ しょうじ）</td>
                    </tr>
                    <tr>
                      <th>所在地</th>
                      <td>〒679-0322 兵庫県西脇市黒田庄町石原285-2</td>
                    </tr>
                    <tr>
                      <th>沿革</th>
                      <td>1979年4月 / 先代 小野 範治が事業を開始<br />2007年7月 / 小野 伸也が家業に従事<br />2021年10月 / 小野 伸也が事業承継・法人化し、代表取締役就任</td>
                    </tr>
                    <tr>
                      <th>事業内容</th>
                      <td>
                        ■ 瓦屋根工事<br />
                        雨漏り修理などの部分補修工事や葺き替えリフォームなどの全体改修工事<br />
                        ■ 屋根工事全般<br />瓦や金属屋根材への葺き替え工事、雨樋工事、屋根外壁塗装工事
                      </td>
                    </tr>
                    <!-- <tr>
                      <th>保有資格</th>
                      <td>一級かわらぶき技能士：１名<br />瓦屋根工事技士：１名<br />ドローン操縦士回転翼3級：1名</td>
                    </tr>
                    <tr>
                      <th>登録・許可</th>
                      <td>・【許可番号】千葉県知事　許可（般ー５）第56533号　屋根工事業<br />・一般建築物石綿含有建材調査者<br />・Roogaショップ（登録番号：093145）<br />・無人航空機の飛行<br /></td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>

        <div class="homeBg six scrollFadeBottom02 on"></div>

        <!-- flow -->
        <section class="flow" id="flow">
          <div class="wrapper container">
            <div class="util-title">
              <p class="main-title">flow</p>
              <p class="sub-title">施工までの流れ</p>
            </div>
            <div class="flow_list">
              <ul class="flow_items">
                <li class="flow_item layout_flex">
                  <div class="num">01</div>
                  <div class="text_contents">
                    <h3>お問い合わせ</h3>
                    <p>お家の屋根のお悩みやご不安なことがございましたら、お電話やメールよりお気軽にご相談ください。</p>
                    <a href="#" class="btn s_btn">お問い合わせフォーム</a>
                  </div>
                  <div class="pict">
                    <img src="https://placehold.jp/770x460.png" alt="お問い合わせ" />
                  </div>
                </li>
                <li class="flow_item layout_flex">
                  <div class="num">01</div>
                  <div class="text_contents">
                    <h3>現地調査</h3>
                    <p>専門のスタッフがお住まいに訪れ、屋根や住宅の状態を実際に確認させていただきます。</p>
                  </div>
                  <div class="pict">
                    <img src="https://placehold.jp/770x460.png" alt="お問い合わせ" />
                  </div>
                </li>
                <li class="flow_item layout_flex">
                  <div class="num">02</div>
                  <div class="text_contents">
                    <h3>お見積り提出</h3>
                    <p>現地調査の結果を基に、最適な施工計画と詳細な見積もりをご提案させていただきます。</p>
                  </div>
                  <div class="pict">
                    <img src="https://placehold.jp/770x460.png" alt="お問い合わせ" />
                  </div>
                </li>
                <li class="flow_item layout_flex">
                  <div class="num">03</div>
                  <div class="text_contents">
                    <h3>施工開始</h3>
                    <p>ご提案内容にご納得いただけましたら、経験豊富な職人が丁寧に施工を進めてまいります。</p>
                  </div>
                  <div class="pict">
                    <img src="https://placehold.jp/770x460.png" alt="お問い合わせ" />
                  </div>
                </li>
                <li class="flow_item layout_flex">
                  <div class="num">04</div>
                  <div class="text_contents">
                    <h3>完成・アフターフォロー</h3>
                    <p>施工が完了した後も、メンテナンスやアフターサポートでお客様の快適な住まいをサポートいたします。</p>
                  </div>
                  <div class="pict">
                    <img src="https://placehold.jp/770x460.png" alt="お問い合わせ" />
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <!-- <div class="homeBg seven scrollFadeBottom02 on"></div> -->
        <div class="video-wrapper">
          <video src="<?php echo get_template_directory_uri()?>/assets/video/sub.MOV"></video>
        </div>

        <!-- question -->
        <section class="question" id="question">
          <div class="wrapper inner">
            <div class="util-title">
              <p class="main-title">question</p>
              <p class="sub-title">よくあるご質問</p>
            </div>
            <div class="question_list">
              <div class="accordion">
                <div class="accordion_container">
                  <div class="accordion_item faq-itemQuestion">
                    <h3 class="question-title accordion_title js-accordion_title inviewfadeInUp open">Q.他社の見積もりが高額でした。安くできますか？</h3>
                    <div class="accordion_content" style="display: block">
                      <div class="accordion_inwrap">
                        <p class="inviewfadeInUp">A.ご提供致します。他社よりも安くご案内させていただきますので、見積もり内容を電話でお知らせ下さい。</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion_item faq-itemQuestion">
                    <h3 class="question-title accordion_title js-accordion_title inviewfadeInUp">Q.キャンセルは出来ますか？</h3>
                    <div class="accordion_content">
                      <div class="accordion_inwrap">
                        <p class="inviewfadeInUp">A.可能です。見積もり内容をご確認いただいたうえで取り掛かりますので、ご安心ください。</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion_item faq-itemQuestion">
                    <h3 class="question-title accordion_title js-accordion_title inviewfadeInUp">Q.どのエリアに対応していますか？</h3>
                    <div class="accordion_content">
                      <div class="accordion_inwrap">
                        <p class="inviewfadeInUp">A.大阪、兵庫、奈良、京都に対応しております。詳しくはお電話の際にご説明いたします。</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion_item faq-itemQuestion">
                    <h3 class="question-title accordion_title js-accordion_title inviewfadeInUp">Q.作業後に見積もりよりも高い金額を請求されることはありますか？</h3>
                    <div class="accordion_content">
                      <div class="accordion_inwrap">
                        <p class="inviewfadeInUp">A.いいえ、御座いません。作業前に作業方法と料金について詳しく説明いたしますので、ご安心ください。</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion_item faq-itemQuestion">
                    <h3 class="question-title accordion_title js-accordion_title inviewfadeInUp">Q.作業してもらうにあたって、こちらで準備することはありますか？</h3>
                    <div class="accordion_content">
                      <div class="accordion_inwrap">
                        <p class="inviewfadeInUp">A.ございません。準備・後片付けも全て当社スタッフが行います。</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion_item faq-itemQuestion">
                    <h3 class="question-title accordion_title js-accordion_title inviewfadeInUp">Q.出張料はいくらですか？</h3>
                    <div class="accordion_content">
                      <div class="accordion_inwrap">
                        <p class="inviewfadeInUp">A.弊社では、出張料、見積もり料ともに全て0円となっております。作業料金のみでご案内いたします。</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>

        <!-- contact -->
        <section class="contact" id="contact">
          <div class="wrapper">
            <div class="util-title">
              <p class="main-title">contact</p>
              <p class="sub-title">お問い合わせ</p>
            </div>
            <form action="#" method="post" class="contact-form">
              <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" id="name" name="name" required />
              </div>
              <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" required />
              </div>
              <div class="form-group">
                <label for="message">お問い合わせ内容</label>
                <textarea id="message" name="message" rows="4" required></textarea>
              </div>
              <button type="submit" class="submit-btn">送信</button>
            </form>
          </div>
        </section>
      </div>

      <?php get_footer(); ?>
