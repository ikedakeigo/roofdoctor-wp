<?php get_header(); ?>

<main class="works">
  <h1 class="ly_rightPageTtl scrollFade on">
  <span class="ly_vcTextJp"><?php the_archive_title(); ?><span>
    <span class="ly_rightPageTtl_en">
    <?php
      $post_type = get_post_type();
      if($post_type === 'custom_post_type'){
        $term = get_queried_object();
        $slug = $term->slug;
        echo $slug;
      }
    ?>
    </span>
  </h1>

  <section class="works_sec inner" id="content">
    <div class="works_ttlBox scrollFade on">
      <h2 class="works_secTtl font_kosakigake">施工実績</h2>
      <p class="works_totalNum"><?php echo $wp_query->found_posts; ?>件</p>
    </div>
    <ul class="works_list hover_opacity">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : ?>
          <?php the_post() ;?>
          <li class="scrollFadeBottom on">
            <a href="<?php the_permalink(); ?>">
              <figure>
              <?php if(has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
              <?php else: ?>
                <img src="https://placehold.jp/640x360.png" alt="ダミー" />
              <?php endif; ?>
              </figure>
              <p class="woks_contTtl font_kosakigake">
                <?php the_title(); ?>
              </p>
              <p class="woks_day">
              <?php the_time('Y年n月') ?>
              </p>
            </a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>


    </ul>
  </section>
  <?php if(paginate_links())  :?>
    <ul class="pagenation scrollFade on">
      <?php
      echo paginate_links(
        array(
          'end_size' => 1,
          'mid_size' => 1,
          'prev_next' => true,
          'prev_text' => '<i class="fas fa-angle-left"></i>',
          'next_text' => '<i class="fas fa-angle-right"></i>',
        )
      )
      ?>
    </ul>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
