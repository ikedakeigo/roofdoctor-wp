<?php get_header(); ?>

<main class="worksDetail">

<?php
  if (has_post_thumbnail()) {
    $thumbnail_id = get_post_thumbnail_id();
    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full')[0];
    // $thumbnail_width = wp_get_attachment_image_src($thumbnail_id, 'full')[1];
    // $thumbnail_height = wp_get_attachment_image_src($thumbnail_id, 'full')[2];
  } else {
    $thumbnail_url = 'https://placehold.jp/640x360.png';
    // $thumbnail_width = 640;
    // $thumbnail_height = 360;
  }
?>
    <div class="lyMv lyMvWhite scrollFade on" style="background-image: url(<?php echo esc_url($thumbnail_url); ?>); width: <?php echo esc_attr($thumbnail_width); ?>px; height: <?php echo esc_attr($thumbnail_height); ?>px;">
      <h1 class="lyMv_ttl">
        <?php the_title(); ?>
      </h1>
    </div>

    <div class="worksDetail_container inner">
      <div class="worksDetail_ttlBox scrollFade on">
        <h1 class="worksDetail_ttl font_kosakigake"><?php the_title(); ?></h1>
      </div>
      <div class="entry-body">
        <?php the_content(); ?>


        <div class="works_block">
            <div class="works_block01">
                <?php if( get_field('worktime')) : ?>
                <dl>
                    <dt>日程</dt>
                    <dd>
                      <?php  the_field('worktime'); ?>
                    </dd>
                </dl>
                <?php endif; ?>
                <?php if( get_field('url')) : ?>
                <dl>
                    <dt>インスタグラム</dt>
                    <dd>
                      <?php  the_field('url'); ?>
                    </dd>
                </dl>
                <?php endif; ?>
                <?php if( get_field('position')) : ?>
                <dl>
                    <dt>施工内容</dt>
                    <dd>
                      <?php  the_field('position'); ?>
                    </dd>
                </dl>
                <?php endif; ?>
                <?php if(get_field('overfeed')) : ?>
                <dl>
                    <dt>備考</dt>
                    <dd>
                      <?php  the_field('overfeed'); ?>
                    </dd>
                </dl>
                <?php endif; ?>
            </div>
        </div>
      </div>
    </div>
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
