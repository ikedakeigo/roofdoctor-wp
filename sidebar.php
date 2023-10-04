<aside class="blog_aside hover_opacity">
      <div class="blog_aside_cont">
        <a href="/blog/">すべての記事</a>
      </div>
      <div class="blog_aside_cont">
        <h2 class="blog_aside_contTtl font_garamond">Categories</h2>
        <ul class="blog_aside_contList">
        <?php
          $categories = get_categories();
          foreach($categories as $category) {
            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
          }
        ?>
        </ul>
      </div>
      <div class="blog_aside_cont">
        <h2 class="blog_aside_contTtl font_garamond">Recent Entries</h2>
        <ul class="blog_aside_contList">
          <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 5,
              'orderby' => 'date',
              'order' => 'DESC'
            );
            $query = new WP_Query($args);
            if($query->have_posts()) :
              while($query->have_posts()) :
                $query->the_post();
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
              endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </ul>
      </div>
      <div class="blog_aside_cont">
        <h2 class="blog_aside_contTtl font_garamond">Archives</h2>
        <ul class="blog_aside_archivesList blog_aside_contList font_garamond">
          <?php wp_get_archives(array(
            'type' => 'monthly',
            'show_post_count' => true,
            'before' => '<li>',
            'after' => '</li>'
          )); ?>
        </ul>
        <!-- <button class="blog_aside_moreBtn">Load more</button> -->
      </div>
    </aside>
