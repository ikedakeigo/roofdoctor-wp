<?php get_header(); ?>

<p class="ly_rightPageTtl">
  <span class="ly_vcTextJp"><?php the_archive_title(); ?><span>
  <span class="ly_rightPageTtl_en">
    <?php
      $term = get_queried_object();
      $slug = $term->slug;
      echo $slug;
    ?>
  </span>
</p>

<?php if(function_exists('bcn_display'))  :?>
<!-- breadcrumb -->
<div class="breadcrumb inner">
  <?php bcn_display(); ?>
</div>
<?php endif; ?>

<div class="blog_container inner" id="content">

  <div class="blog_list blog_mainCont">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : ?>
        <?php the_post()  ;?>
        <article class="blog_listCont">
      <time class="blog_time font_garamond <?php the_time('c') ?> "><?php the_time('Y.n.j') ?></time>
      <h2 class="blog_ttl font_kosakigake"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p class="blog_listText">
        <?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">続きを読む</a>
      </p>
      <div class="tsumiki_space"></div>
      <figure class="tsumiki_image scrollFadeBottom on">
      <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
      <?php else: ?>
        <img src="https://placehold.jp/640x360.png" alt="ダミー" />
      <?php endif; ?>
        <figcaption></figcaption>
      </figure>
    </article>
      <?php endwhile; ?>
    <?php endif; ?>

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
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
