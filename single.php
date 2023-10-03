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

  <div class="blog_container inner" id="content">
    <div class="blog_mainCont">
      <?php if(have_posts())  :?>
        <?php while(have_posts())  :?>
          <?php the_post(); ?>
          <div class="blog_detailCont">
            <?php
              $category = get_the_category();
              if($category[0]) :
            ?>
            <div class="blog_label">
              <div class="entry-label"><a href="<?php echo get_category_link($category[0]->term_id) ?>"><?php echo $category[0]->cat_name; ?></a></div>
              <?php endif; ?>
                <time class="blog_time font_garamond <?php the_time('c') ?>"><?php the_time('Y.n.j') ?></time>
                <?php  if(get_the_modified_time('c') !== get_the_time('c') )  : ?>
                  <time class="blog_time font_garamond <?php the_time('c') ?>">
                  更新日：
                  <?php the_modified_time('Y.n.j') ?>
                  </time>
                <?php endif; ?>
            </div>

              <h1 class="blog_ttl font_kosakigake"><?php the_title(); ?></h1>
              <div class="entry-body">
                <?php the_content(); ?>
              </div>


            </div>
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
